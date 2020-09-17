<?php
require_once "includes/db.php";

$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];


if(!empty($title) && !empty($author) && !empty($publisher)){

  $sql = $conn->prepare("INSERT INTO books (title,author,publisher) VALUES (?, ?, ?)");
  $sql->bind_param('sss', $title, $author, $publisher);

  $sql->execute();
  $sql->close();
  $conn->close();
}

 ?>
