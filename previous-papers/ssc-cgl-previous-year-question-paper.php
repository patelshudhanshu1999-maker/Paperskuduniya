<?php
// Dynamic Exam Page Template
// This file is auto-created. Do not edit manually unless you know what you are doing.

$examId = "u1"; // This ID is injected during creation
$jsonFile = '../data/exams.json';
$contentFile = '../data/exam_content.json';

// Fetch Basic Exam Details
$examData = [];
if (file_exists($jsonFile)) {
    $allExams = json_decode(file_get_contents($jsonFile), true);
    foreach ($allExams as $category => $exams) {
        foreach ($exams as $exam) {
            if ($exam['id'] === $examId) {
                $examData = $exam;
                break 2;
            }
        }
    }
}

// Fetch Dynamic Content
$contentData = [];
if (file_exists($contentFile)) {
    $allContent = json_decode(file_get_contents($contentFile), true);
    $contentData = $allContent[$examId] ?? [];
}

$pageTitle = $examData['title'] ?? 'Exam Details';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <style>
        .table-container {
            overflow-x: auto;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #5bc1ac;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .exam-header {
            margin-bottom: 30px;
        }
    </style>
</head>

<?php include '../header.php'; ?>

<body>

    <section class="papers section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exam-header">
                        <h2><?php echo htmlspecialchars($pageTitle); ?></h2>
                        <?php if (!empty($examData['date'])): ?>
                            <p class="text-muted"><i class="bi-calendar"></i>
                                <?php echo htmlspecialchars($examData['date']); ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Dynamic Description -->
                    <div class="exam-description mb-4">
                        <?php echo $contentData['description'] ?? '<p>No description available.</p>'; ?>
                    </div>

                    <!-- Dynamic Tables -->
                    <?php if (!empty($contentData['tables'])): ?>
                        <?php foreach ($contentData['tables'] as $table): ?>
                            <div class="table-container">
                                <?php if (!empty($table['title'])): ?>
                                    <h4><?php echo htmlspecialchars($table['title']); ?></h4>
                                <?php endif; ?>

                                <table>
                                    <?php if (!empty($table['headers'])): ?>
                                        <thead>
                                            <tr>
                                                <?php foreach ($table['headers'] as $header): ?>
                                                    <th><?php echo htmlspecialchars($header); ?></th>
                                                <?php endforeach; ?>
                                            </tr>
                                        </thead>
                                    <?php endif; ?>

                                    <tbody>
                                        <?php if (!empty($table['rows'])): ?>
                                            <?php foreach ($table['rows'] as $row): ?>
                                                <tr>
                                                    <?php foreach ($row as $cell): ?>
                                                        <td rowspan="<?php echo $cell['rowspan'] ?? 1; ?>"
                                                            colspan="<?php echo $cell['colspan'] ?? 1; ?>">
                                                            <?php echo $cell['content']; // Allow HTML content ?>
                                                        </td>
                                                    <?php endforeach; ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <?php include '../footer.php'; ?>

</body>

</html>