<?php
// check_content.php
// Upload to public_html/ and run in browser

header('Content-Type: text/plain');

$file = 'data/exam_content.json';

echo "Diagnostics for $file\n";
echo "---------------------------------\n";

if (!file_exists($file)) {
    echo "[ERROR] File does not exist.\n";
    echo "Attempting to create it...\n";
    if (file_put_contents($file, '{}') !== false) {
        echo "[SUCCESS] Created file successfully.\n";
    } else {
        echo "[FAIL] Could not create file. Check directory permissions for 'data/'.\n";
        exit;
    }
} else {
    echo "[OK] File exists .\n";
}

if (is_writable($file)) {
    echo "[OK] File is writable.\n";
} else {
    echo "[FAIL] File is NOT writable. Check permissions (needs 666 or 644 owned by web user).\n";
    echo "Owner: " . fileowner($file) . " | Current User: " . get_current_user() . "\n";
}

$content = file_get_contents($file);
echo "\nCurrent Content (Raw):\n";
echo "---------------------------------\n";
echo $content . "\n";
echo "---------------------------------\n";

$json = json_decode($content, true);
if (json_last_error() === JSON_ERROR_NONE) {
    echo "[OK] JSON is valid.\n";
    $count = is_array($json) ? count($json) : 0;
    echo "Entries count: $count\n";
    if ($count > 0) {
        echo "Keys: " . implode(', ', array_keys($json)) . "\n";
    }
} else {
    echo "[FAIL] JSON is INVALID. Error: " . json_last_error_msg() . "\n";
}

// Test Write
$testId = 'test_write_' . time();
if (is_array($json)) {
    $json[$testId] = ['desc' => 'test entry', 'time' => time()];
    if (file_put_contents($file, json_encode($json, JSON_PRETTY_PRINT))) {
        echo "\n[SUCCESS] Test write succeeded.\n";
        // Clean up
        unset($json[$testId]);
        file_put_contents($file, json_encode($json, JSON_PRETTY_PRINT));
    } else {
        echo "\n[FAIL] Test write failed.\n";
    }
}
?>