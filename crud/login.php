<?php
include 'conn.php';
session_start();
$message = "";
if (isset($_POST['username'])) {
  $uname = $_POST['username'];
  $password = $_POST['password'];
  $result = mysqli_query($con, "select * from admin where name='" . $uname . "'AND password='" . $password . "' limit 1");
  $row  = mysqli_fetch_array($result);
  if (is_array($row)) {
    $_SESSION["name"] = $row['name'];
    $_SESSION["password"] = $row['password'];
  } else {
    $message = "Invalid Username or Password!";
  }
}
if (isset($_SESSION["name"])) {
  header("Location:Admin/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>TUV Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style123.css">

</head>

<body>

  <div id="login-form-wrap">
    <h2>Admin Login</h2>
    <form id="login-form" method='POST'>
      <p>
        <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
      </p>
      <p>
        <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
      </p>
      <p>
        <input type="submit" name="submit" id="login" value="LOGIN">
      </p>
    </form>
    <br>
  </div>
  
</body>

</html>