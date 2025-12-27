<?php
require_once 'auth.php';

$jsonFile = '../data/exams.json';

// Helper function to read data
function getExams($file)
{
    if (!file_exists($file))
        return [];
    return json_decode(file_get_contents($file), true);
}

// Helper function to save data
function saveExams($file, $data)
{
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}

$data = getExams($jsonFile);
$message = "";

// Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $category = $_POST['category'] ?? '';

    if ($action && $category && isset($data[$category])) {
        if ($action === 'add') {
            $newItem = [
                'id' => uniqid(),
                'title' => $_POST['title'],
                'date' => $_POST['date'],
                'image' => $_POST['image'],
                'link' => $_POST['link']
            ];
            array_push($data[$category], $newItem);
            saveExams($jsonFile, $data);
            $message = "Exam added successfully!";
        } elseif ($action === 'edit') {
            $id = $_POST['id'];
            foreach ($data[$category] as &$item) {
                if ($item['id'] === $id) {
                    $item['title'] = $_POST['title'];
                    $item['date'] = $_POST['date'];
                    $item['image'] = $_POST['image'];
                    $item['link'] = $_POST['link'];
                    break;
                }
            }
            saveExams($jsonFile, $data);
            $message = "Exam updated successfully!";
        } elseif ($action === 'delete') {
            $id = $_POST['id'];
            $data[$category] = array_filter($data[$category], function ($item) use ($id) {
                return $item['id'] !== $id;
            });
            // Re-index array
            $data[$category] = array_values($data[$category]);
            saveExams($jsonFile, $data);
            $message = "Exam deleted successfully!";
        } elseif ($action === 'save_content') {
            $id = $_POST['exam_id'];
            $desc = $_POST['description'];
            $tables = json_decode($_POST['table_data'], true);

            $contentFile = '../data/exam_content.json';
            $contentData = file_exists($contentFile) ? json_decode(file_get_contents($contentFile), true) : [];

            $contentData[$id] = [
                'description' => $desc,
                'tables' => $tables
            ];

            file_put_contents($contentFile, json_encode($contentData, JSON_PRETTY_PRINT));
            $message = "Content saved successfully!";
        }

        // Auto-Create Page if 'add'
        if ($action === 'add' && !empty($_POST['link'])) {
            $linkPath = $_SERVER['DOCUMENT_ROOT'] . $_POST['link'];
            // Ensure it's a valid local path within previous-papers
            if (strpos($_POST['link'], '/previous-papers/') === 0 && !file_exists($linkPath)) {
                $templatePath = $_SERVER['DOCUMENT_ROOT'] . '/previous-papers/_template.php';
                if (file_exists($templatePath)) {
                    $tpl = file_get_contents($templatePath);
                    // Inject ID
                    $tpl = str_replace('{{ID}}', $newItem['id'], $tpl);
                    file_put_contents($linkPath, $tpl);
                }
            }
        }
    }
    // Reload to reflect changes cleanly
    header("Location: index.php?msg=" . urlencode($message));
    exit;
}

if (isset($_GET['msg'])) {
    $message = htmlspecialchars($_GET['msg']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Papers Ki Duniya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .nav-tabs .nav-link.active {
            background-color: #0d6efd;
            color: white;
        }

        .nav-tabs .nav-link {
            color: #495057;
        }

        .exam-img {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }
    </style>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <div class="d-flex">
                <span class="navbar-text me-3">Welcome, Admin</span>
                <a href="auth.php?logout=true" class="btn btn-outline-light btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if ($message): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <ul class="nav nav-tabs mb-4" id="examTabs" role="tablist">
            <?php
            $active = 'active';
            $categories = [
                'upcoming' => 'Upcoming Exams',
                'state' => 'State Exams',
                'central' => 'Central Exams',
                'computer' => 'Computer Exams',
                'school' => 'School Exams'
            ];
            foreach ($categories as $key => $label): ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo $active; ?>" id="<?php echo $key; ?>-tab" data-bs-toggle="tab"
                        data-bs-target="#<?php echo $key; ?>" type="button" role="tab">
                        <?php echo $label; ?>
                    </button>
                </li>
                <?php $active = ''; ?>
            <?php endforeach; ?>
        </ul>

        <div class="tab-content" id="examTabsContent">
            <?php
            $active = 'show active';
            foreach ($categories as $key => $label): ?>
                <div class="tab-pane fade <?php echo $active; ?>" id="<?php echo $key; ?>" role="tabpanel">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>Manage <?php echo $label; ?></h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal"
                            onclick="prepareAdd('<?php echo $key; ?>')">
                            <i class="fa fa-plus"></i> Add New
                        </button>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body p-0">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Date/Subtitle</th>
                                        <th>Link</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($data[$key]) && !empty($data[$key])): ?>
                                        <?php foreach ($data[$key] as $item): ?>
                                            <tr>
                                                <td><img src="<?php echo htmlspecialchars($item['image']); ?>" class="exam-img">
                                                </td>
                                                <td><?php echo htmlspecialchars($item['title']); ?></td>
                                                <td><?php echo htmlspecialchars($item['date']); ?></td>
                                                <td><a href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank"
                                                        class="text-decoration-none">View Link</a></td>
                                                <td>
                                                    <button class="btn btn-sm btn-info text-white me-1"
                                                        onclick="prepareContent('<?php echo $item['id']; ?>')">
                                                        Content
                                                    </button>
                                                    <button class="btn btn-sm btn-warning me-1"
                                                        onclick='prepareEdit(<?php echo json_encode($item); ?>, "<?php echo $key; ?>")'
                                                        data-bs-toggle="modal" data-bs-target="#editModal">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <form method="POST" class="d-inline"
                                                        onsubmit="return confirm('Are you sure?');">
                                                        <input type="hidden" name="action" value="delete">
                                                        <input type="hidden" name="category" value="<?php echo $key; ?>">
                                                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="5" class="text-center text-muted py-3">No exams found in this category.
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php $active = ''; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog">
            <form method="POST" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Exam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="category" id="add_category">

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date / Subtitle</label>
                        <input type="text" name="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image URL</label>
                        <input type="text" name="image" class="form-control" value="/images/icons/default.png" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link URL</label>
                        <input type="text" name="link" class="form-control" require>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <form method="POST" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Exam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="category" id="edit_category">
                    <input type="hidden" name="id" id="edit_id">

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" id="edit_title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date / Subtitle</label>
                        <input type="text" name="date" id="edit_date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image URL</label>
                        <input type="text" name="image" id="edit_image" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link URL</label>
                        <input type="text" name="link" id="edit_link" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Content Modal -->
    <div class="modal fade" id="contentModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <form method="POST" class="modal-content" id="contentForm">
                <div class="modal-header">
                    <h5 class="modal-title">Manage Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="action" value="save_content">
                    <input type="hidden" name="exam_id" id="content_exam_id">

                    <div class="row">
                        <div class="col-md-6">
                            <h6>Edit Content</h6>
                            <div class="mb-3">
                                <label class="form-label">Description (HTML allowed)</label>
                                <textarea name="description" id="content_description" class="form-control"
                                    rows="5"></textarea>
                            </div>

                            <hr>
                            <h6>Table Builder</h6>
                            <div class="mb-3">
                                <label class="form-label">Table Title</label>
                                <input type="text" id="table_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Table Headers (comma separated)</label>
                                <input type="text" id="table_headers" class="form-control"
                                    placeholder="Date,Shift,Link">
                            </div>

                            <div class="mb-2">
                                <button type="button" class="btn btn-sm btn-outline-primary" onclick="addTableRow()">+
                                    Add Row</button>
                            </div>

                            <div id="table_rows_container" style="max-height: 400px; overflow-y: auto;">
                                <!-- Dynamic Rows -->
                            </div>
                            <!-- Hidden input to store JSON -->
                            <input type="hidden" name="table_data" id="table_data_json">
                        </div>

                        <div class="col-md-6 border-start">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6>Preview</h6>
                                <button type="button" class="btn btn-sm btn-info text-white" onclick="refreshPreview()">
                                    <i class="fa fa-sync"></i> Refresh Preview
                                </button>
                            </div>
                            <div id="preview_area" class="border p-3 bg-white" style="min-height: 400px;">
                                <div id="preview_desc"></div>
                                <div id="preview_table" class="mt-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" onclick="prepareSaveContent()">Save Content</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentTableRows = [];

        function prepareAdd(category) {
            document.getElementById('add_category').value = category;
        }

        // Auto-generate Slug
        const titleInput = document.querySelector('input[name="title"]');
        const linkInput = document.querySelector('input[name="link"]');

        if (titleInput) {
            titleInput.addEventListener('input', function () {
                const title = this.value;
                const slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
                if (slug) {
                    // Only update if link is empty or looks like an auto-generated one
                    // We assume user might edit it manually
                    // For simplicity, just auto-fill
                    const existingLink = document.querySelector('input[name="link"]').value;
                    if (!existingLink || existingLink.includes('previous-papers/')) {
                        document.querySelector('input[name="link"]').value = '/previous-papers/' + slug + '.php';
                    }
                }
            });
        }

        function prepareEdit(item, category) {
            document.getElementById('edit_category').value = category;
            document.getElementById('edit_id').value = item.id;
            document.getElementById('edit_title').value = item.title;
            document.getElementById('edit_date').value = item.date;
            document.getElementById('edit_image').value = item.image;
            document.getElementById('edit_link').value = item.link;
        }

        function prepareContent(id) {
            document.getElementById('content_exam_id').value = id;
            // Fetch content via AJAX (simplifying by non-async fetch is tricky in minimal PHP, 
            // but we can pass existing content if we pre-load it, or fetch via separate endpoint.
            // For now, let's fetch content via a simple valid JS fetch since this is an admin panel)

            fetch('get_content.php?id=' + id)
                .then(res => res.json())
                .then(data => {
                    document.getElementById('content_description').value = data.description || '';
                    if (data.tables && data.tables.length > 0) {
                        const tbl = data.tables[0];
                        document.getElementById('table_title').value = tbl.title || '';
                        document.getElementById('table_headers').value = (tbl.headers || []).join(',');
                        currentTableRows = tbl.rows || [];
                    } else {
                        document.getElementById('table_title').value = '';
                        document.getElementById('table_headers').value = '';
                        currentTableRows = [];
                    }
                    renderRowsBuilder();
                    refreshPreview();
                })
                .catch(err => {
                    console.error(err);
                    document.getElementById('content_description').value = '';
                    currentTableRows = [];
                    renderRowsBuilder();
                    refreshPreview();
                });

            new bootstrap.Modal(document.getElementById('contentModal')).show();
        }

        function addTableRow() {
            currentTableRows.push([]);
            renderRowsBuilder();
        }

        function deleteTableRow(idx) {
            currentTableRows.splice(idx, 1);
            renderRowsBuilder();
        }

        function addCell(rowIdx) {
            currentTableRows[rowIdx].push({ content: '', rowspan: 1, colspan: 1 });
            renderRowsBuilder();
        }

        function removeCell(rowIdx, cellIdx) {
            currentTableRows[rowIdx].splice(cellIdx, 1);
            renderRowsBuilder();
        }

        function updateCell(rowIdx, cellIdx, field, value) {
            currentTableRows[rowIdx][cellIdx][field] = value;
        }

        function renderRowsBuilder() {
            const container = document.getElementById('table_rows_container');
            container.innerHTML = '';

            currentTableRows.forEach((row, rIdx) => {
                const rowDiv = document.createElement('div');
                rowDiv.className = 'card mb-2 p-2 bg-light';

                let cellsHtml = '';
                row.forEach((cell, cIdx) => {
                    cellsHtml += `
                        <div class="border p-2 mb-1 bg-white rounded">
                            <div class="input-group input-group-sm mb-1">
                                <span class="input-group-text">Content</span>
                                <input type="text" class="form-control" value="${cell.content || ''}" 
                                    onchange="updateCell(${rIdx}, ${cIdx}, 'content', this.value)">
                            </div>
                            <div class="row g-1">
                                <div class="col-4">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text">RS</span>
                                        <input type="number" class="form-control" value="${cell.rowspan || 1}" min="1"
                                            onchange="updateCell(${rIdx}, ${cIdx}, 'rowspan', parseInt(this.value))">
                                    </div>
                                </div>
                                <div class="col-4">
                                     <div class="input-group input-group-sm">
                                        <span class="input-group-text">CS</span>
                                        <input type="number" class="form-control" value="${cell.colspan || 1}" min="1"
                                            onchange="updateCell(${rIdx}, ${cIdx}, 'colspan', parseInt(this.value))">
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeCell(${rIdx}, ${cIdx})">&times;</button>
                                </div>
                            </div>
                        </div>
                    `;
                });

                rowDiv.innerHTML = `
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <strong>Row ${rIdx + 1}</strong>
                        <div>
                             <button type="button" class="btn btn-sm btn-outline-secondary" onclick="addCell(${rIdx})">+ Cell</button>
                             <button type="button" class="btn btn-sm btn-outline-danger" onclick="deleteTableRow(${rIdx})">Delete Row</button>
                        </div>
                    </div>
                    ${cellsHtml}
                `;
                container.appendChild(rowDiv);
            });
        }

        function refreshPreview() {
            const desc = document.getElementById('content_description').value;
            const title = document.getElementById('table_title').value;
            const headers = document.getElementById('table_headers').value.split(',').filter(h => h.trim() !== '');

            document.getElementById('preview_desc').innerHTML = desc;

            let tableHtml = '';
            if (headers.length > 0 || currentTableRows.length > 0) {
                tableHtml += `<h5>${title}</h5><table class="table table-bordered table-striped">`;
                if (headers.length > 0) {
                    tableHtml += '<thead class="table-dark"><tr>';
                    headers.forEach(h => tableHtml += `<th>${h}</th>`);
                    tableHtml += '</tr></thead>';
                }
                tableHtml += '<tbody>';
                currentTableRows.forEach(row => {
                    tableHtml += '<tr>';
                    row.forEach(cell => {
                        tableHtml += `<td rowspan="${cell.rowspan || 1}" colspan="${cell.colspan || 1}">${cell.content}</td>`;
                    });
                    tableHtml += '</tr>';
                });
                tableHtml += '</tbody></table>';
            }
            document.getElementById('preview_table').innerHTML = tableHtml;
        }

        function prepareSaveContent() {
            const packet = {
                title: document.getElementById('table_title').value,
                headers: document.getElementById('table_headers').value.split(',').filter(h => h.trim() !== ''),
                rows: currentTableRows
            };
            // We start with array of tables, but UI supports one here for simplicity. 
            // We can allow multiple later or just push 1.
            document.getElementById('table_data_json').value = JSON.stringify([packet]);
        }
    </script>
</body>

</html>