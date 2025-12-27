<?php
header('Content-Type: application/json');
require_once 'auth.php';

$id = $_GET['id'] ?? '';
$contentFile = '../data/exam_content.json';

if (empty($id) || !file_exists($contentFile)) {
    echo json_encode([]);
    exit;
}

$data = json_decode(file_get_contents($contentFile), true);
$content = $data[$id] ?? [];

echo json_encode($content);
