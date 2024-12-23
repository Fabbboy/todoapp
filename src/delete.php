<?php
$config = require __DIR__ . '/config.php';

use TodoApp\Models\TasksQuery;

$TaskId = $_POST["id"];

$task = TasksQuery::Create()->filterById($TaskId)->findOne();
if (!$task) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
$task->delete();

header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>