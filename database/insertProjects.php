<?php
require_once "dbConnect.php";

$title          = $_POST ['title'] ?? '';
//cover_img     =
$form           = $_POST ['form'] ?? '';
$curr_words     = $_POST ['curr_words'] ?? '';
$goal_words     = $_POST ['goal_words'] ?? '';
$deadline       = $_POST ['deadline'] ?? '';
$description    = $_POST ['description'] ?? '';
$draft_link     = $_POST ['draft_link'] ?? '';
$genre          = $_POST ['genre'] ?? '';
$draft_num      = $_POST ['draft_num'] ?? '';
$notes          = $_POST ['notes'] ?? '';

//query template
$sql = "INSERT INTO projects(title, form, curr_words, goal_words,
        deadline, description, draft_link, genre, draft_num, notes, project_created)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_DATE)
        ";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
  die ("Prepare Failed: " . htmlspecialchars($conn->error));
}

//bind variables
$stmt->bind_param("s, s, i, i, s, s, s, s, s, s", $title, $form, $curr_words,
                  $goal_words, $deadline, $description, $draft_link, $genre, 
                  $draft_num, $notes);

// Execute
if ($stmt->execute()) {
    echo '<span style="color:green;">Form submitted successfully</span>';

} else {
    echo '<span style="color:red;">Error: '. htmlspecialchars($stmt->error) .'</span>';
}

$stmt->close();
$conn->close();
?>
