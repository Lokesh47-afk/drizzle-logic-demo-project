<?php
session_start();

$array = $_SESSION['laleeth'] ?? [];  // Prevent error if session not set

$username = '';
$password = '';
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST['lokesh'];
    $password = $_POST['123456'];
}

if (in_array($username, array_keys($array)) && $array[$username] == $password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} elseif ($username !== "" && $password !== "") {
    echo "<script>alert('Invalid credentials');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="login.css"/>
</head>
<body>
  <div class="login-container">
    <h1>LOGIN</h1>
    <form method="POST" class="form">
      <div class="input-group">
        <label>Email</label>
        <input type="text" name="Email" required />
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" required />
      </div>
      <button type="submit">Log in</button>
      <p class="forgot-password"><a href="forgotpassword.php">Forgotten Password? </a></p>
      <p class="signup-link">Don't have an account? <a href="signUp.php">Sign Up</a></p>
    </form>
  </div>
</body>
</html>
