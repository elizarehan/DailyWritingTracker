<?php
require_once "dbConnect.php";

//Capture data
$id             = intval($_POST['id'] ?? 0);
$title          = $_POST['title'] ?? '';
$curr_words     = $_POST['curr_words'] ?? '';
$goal_words     = $_POST ['goal_words'] ?? '';
$deadline       = $_POST ['deadline'] ?? '';
$draft_link     = $_POST ['draft_link'] ?? '';
$description    = $_POST ['description'] ?? '';
$form           = $_POST ['form'] ?? '';
$genre          = $_POST ['genre'] ?? '';
$draft_num      = $_POST ['draft_num'] ?? '';
$notes          = $_POST ['notes'] ?? '';

$sql = "UPDATE projects
        SET title = ?, curr_words = ?, goal_words = ?, deadline = ?, draft_link = ?,
        description = ?, form = ?, genre = ?, draft_num = ?, notes = ?
        WHERE id = ?";

$stmt = conn->prepare;

//continue
?>
