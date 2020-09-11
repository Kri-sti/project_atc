
<?php
require_once "includes/db.php";
/*var_dump($_POST)*/

$email_err = $password_err = '';
$email = $password = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



  if (empty(trim($_POST['email']))) {
    $email_err = "Please enter e-mail";

  }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $email_err = "Please enter e-mail correct format";

  }else
  $email = trim($_POST['email']);






if(empty(trim($_POST['password']))){
  $password_err = 'Please enter password';
} else{
  $password = trim($_POST['password']);
}
if (empty($email_err) && empty($password_err)) {
  $sql = 'SELECT id, email, password FROM `user-at` WHERE email = ?';
  if($stmt = $conn->prepare($sql)){
    $stmt->bind_param('s', $param_email);
    $param_email = $email;
    if($stmt->execute()){
      $stmt->store_result();
      if($stmt->num_rows == 1){
        $stmt->bind_result($id, $email, $hashed_password);
        if($stmt->fetch()){
          if(password_verify($password, $hashed_password)){
            session_start();
            echo "Done!";
            $_SESSION['logged_in'] == true;
            $_SESSION['email'] = $email;
            header('location: index.php');

          }
          else {
            die('The password does not match');
          }
        }else {
          die("erro1");
        }
      }else {
        die("erro2");
      }
    }else {
      die("erro3");
    }
  }else {
    die("erro5");
  }

}else {
  die("erro6");
}




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
    <title>log in</title>
  </head>
  <body>
<?php require_once "includes/nav_bar.php";  ?>
    <div class="container">
      <h2>Login</h2>
      <p>Please fill this form to login</p>
      <form class="border p-3" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <div class="form-group">
          <label for="email">I-mell</label>
          <input type="text" name="email" id="email" value="" placeholder="insert i-mell" required>
            <span class="error"><?php /*echo $email_err;*/ ?></span>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" value="" required>
          <span class="error"><?php /*echo $password_err;*/ ?></span>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info" name="submit">Login</button>
        </div>
        <p>Not registed?<a target="_blank" href="signup.php">Create account!!</a></p>
      </form>

    </div>

  </body>
</html>
