<?php
require_once "includes/db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];

if(!empty($title) && !empty($author) && !empty($publisher) && !empty($id)){

  $sql = "UPDATE books SET title = '$title', author = '$author', publisher = '$publisher' WHERE id = '$id'";
  if($conn->query($sql)){
    echo '<div class = "col-md-offset-4 col-md-5 text-center alert alert-success"> UPDATED! </div>';
  }
  else {
    echo '<div class = "col-md-offset-4 col-md-5 text-center alert alert-danger"> ERROR </div>';
  }
}



 ?>
