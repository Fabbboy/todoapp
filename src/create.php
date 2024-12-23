<?php
$config = require __DIR__ . '/config.php';

use TodoApp\Models\Tasks;

$todoTitle = $_POST["title"];
$desc = $_POST["description"];

$newTask = new Tasks();
$newTask->setTitle($todoTitle);
$newTask->setDescription($desc);
$newTask->setIsCompleted(false);
$newTask->setCreatedAt((new DateTime('now', new DateTimeZone('UTC')))->format('Y-m-d H:i:s'));
$newTask->save();

header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>