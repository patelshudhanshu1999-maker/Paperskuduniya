<?php
// fix_pages.php - Utility to convert static exam pages to dynamic templates
// Place this in your root directory (e.g. public_html/) and run it via browser.

$jsonFile = 'data/exams.json';
$templateFile = 'previous-papers/_template.php';

if (!file_exists($jsonFile)) {
    die("Error: data/exams.json not found.");
}

if (!file_exists($templateFile)) {
    die("Error: previous-papers/_template.php not found.");
}

$examsData = json_decode(file_get_contents($jsonFile), true);
$templateContent = file_get_contents($templateFile);

echo "<h1>Fixing Static Exam Pages</h1>";
echo "<ul>";

foreach ($examsData as $category => $exams) {
    foreach ($exams as $exam) {
        $link = $exam['link'];
        $id = $exam['id'];

        // Only process links inside previous-papers
        if (strpos($link, '/previous-papers/') === 0) {
            $filePath = __DIR__ . $link;

            if (file_exists($filePath)) {
                $currentContent = file_get_contents($filePath);

                // Check if already dynamic
                if (strpos($currentContent, '$examId = "') !== false && strpos($currentContent, '{{ID}}') === false) {
                    echo "<li>[SKIP] $link is already dynamic.</li>";
                    continue;
                }

                // Backup
                copy($filePath, $filePath . '.bak');

                // create new content
                $newContent = str_replace('{{ID}}', $id, $templateContent);

                // Write
                file_put_contents($filePath, $newContent);

                echo "<li>[FIXED] $link converted to dynamic (ID: $id). Backup created (.bak).</li>";
            } else {
                echo "<li>[Checking] File for $link not found, attempting to create...</li>";
                // Optionally create it if missing
                $newContent = str_replace('{{ID}}', $id, $templateContent);
                $dir = dirname($filePath);
                if (!is_dir($dir))
                    mkdir($dir, 0777, true);
                file_put_contents($filePath, $newContent);
                echo "<li>[CREATED] $link created.</li>";
            }
        } else {
            echo "<li>[SKIP] $link is not in previous-papers/</li>";
        }
    }
}
echo "</ul>";
echo "<p>Done. You can now delete this file.</p>";
?>