<?php
require_once "db.php";


$name = $lname = $email = $password = '';
$name_err = $lname_err = $email_err = $password_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


if (empty(trim($_POST['name']))) {
  $name_err = "Please enter name";
}else {
  $name = trim($_POST['name']);
}


if (empty(trim($_POST['lastname']))) {
$lname_err = "Please enter lastname";
}else {
$lname = trim($_POST['lastname']);
}

if (empty(trim($_POST['email']))) {
  $email_err = "Please enter e-mail";
}else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $email_err = "Please enter e-mail correct format";

}else{

  $sql = "SELECT id FROM `user-at` where email = ?";
  if($stmt = $conn->prepare($sql)){
    $stmt->bind_param("s", $email);

  if($stmt->execute()){
    $stmt->store_result();
  if($stmt->num_rows > 0){
    $email_err = "Taken email.";

  }
else {
  $email = trim($_POST['email']);
}
}else {
  die("ERROR1");}

}else {
  die("ERROR");}

$stmt->close();
}


if (empty(trim($_POST['password']))) {
$password_err = "Please enter password";
}
elseif (strlen(trim($_POST['password'])) < 5) {
  $password_err = "Password must have at least 5 characters";
}



else {
$password = trim($_POST['password']);
}

if(empty($name_err) && empty($lname_err) && empty($email_err) && empty($password_err)){



$sql = "INSERT INTO `user-at` (name, lastname, email, password) VALUES (?,?,?,?)";

if($stmt = $conn->prepare($sql)){


  $stmt->bind_param("ssss", $name, $lname, $email, $password);

  $name = $name;
  $lname = $lname;
  $email = $email;
  $password = password_hash($password, PASSWORD_DEFAULT);

  if ($stmt->execute()) {
    header('location: login.php');
  }else {
    echo "Lere fare nuk ehte per ty!!!";
  }

$stmt->close();

}



}


$conn->close();

}

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>sign up</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
<img src="images/foto1.jpg" alt="foto" style="max-width: 35px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>

      </div>
    </nav>
    <div class="container">
      <h2>Sign Up</h2>
      <p>Please fill this form to create an account</p>
      <form class="border p-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" value="" placeholder="insert name" required>
            <span class="error"><?php echo $name_err; ?></span>
        </div>

        <div class="form-group">
          <label for="lastname">Lastname</label>
          <input type="text" name="lastname" id="lastname" value="" placeholder="insert lastname" required>
            <span class="error"><?php echo $lname_err; ?></span>
        </div>

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" name="email" id="email" value="" placeholder="insert email" required>
            <span class="error"><?php echo $email_err; ?></span>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" value="<?=$password?>" required>
          <span class="error"><?php echo $password_err; ?></span>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info" name="submit">Sign up</button>
        </div>
        <p>Already have an account?<a target="_blank" href="login.php">Login here</a></p>
      </form>

    </div>

  </body>
</html>
