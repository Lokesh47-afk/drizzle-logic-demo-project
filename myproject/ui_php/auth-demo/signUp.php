<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['create_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (!empty($email) && !empty($password) && $password === $confirm_password) {
        // Store the data in session or database
        $_SESSION['my_array'] = [$email => $password];
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Please enter all fields and ensure passwords match');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registration Form</title>
  <link rel="stylesheet" href="login.css" />
</head>
<body>
  <div class="signup-container">
    <h1>Registration Form</h1>

    <form method="post" action="signUp.php" class="form">
      <div class="input-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>
      </div>

      <div class="input-group">
        <label for="create_password">Create Password</label>
        <input type="password" name="create_password" id="create_password" required>
      </div>

      <div class="input-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
      </div>

      <button type="submit">Sign Up</button>
    </form>

    <p class="signup-link"><a href="index.php">Back to Login</a></p>
  </div>
</body>
</html>
