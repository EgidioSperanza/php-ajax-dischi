<?php
require_once __DIR__ . '/../database/databaseDiscs.php';

header('Content-Type: application/json');
echo json_encode($discs);
?>
