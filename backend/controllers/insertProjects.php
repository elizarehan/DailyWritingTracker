<?php
require_once "../config/dbConnect.php";

$title          = $_POST ['title'] ?? '';
//cover_img     =
$curr_words     = $_POST ['curr_words'] ?? '';
$goal_words     = $_POST ['goal_words'] ?? '';
$deadline       = $_POST ['deadline'] ?? '';
$draft_link     = $_POST ['draft_link'] ?? '';
$description    = $_POST ['description'] ?? '';
$form           = $_POST ['form'] ?? '';
$genre          = $_POST ['genre'] ?? '';
$draft_num      = $_POST ['draft_num'] ?? '';
$notes          = $_POST ['notes'] ?? '';

//query template
$sql = "INSERT INTO projects(title, curr_words, goal_words, deadline, draft_link,
        description, form, genre, draft_num, notes, project_created)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_DATE)
        ";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
  die ("Prepare Failed: " . htmlspecialchars($conn->error));
}

//bind variables
$stmt->bind_param("s, i, i, s, s, s, s, s, s, s", $title, $curr_words, $goal_words,
                  $deadline, $draft_link, $description, $form, $genre, $draft_num, $notes);

// Execute
if ($stmt->execute()) {
    echo '<span style="color:green;">Form submitted successfully</span>';

} else {
    echo '<span style="color:red;">Error: '. htmlspecialchars($stmt->error) .'</span>';
}

$stmt->close();
$conn->close();
?>
