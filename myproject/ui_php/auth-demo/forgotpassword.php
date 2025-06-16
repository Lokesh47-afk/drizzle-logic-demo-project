<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password !== $confirm_password) {
        echo "<script>alert('❌ Passwords do not match!');</script>";
    } else {
        echo "<script>alert('✅ Password changed successfully.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Change Password</title>
  <link rel="stylesheet" href="login.css" />
</head>
<body>
  <div class="login-container">
    <h2>Change Password</h2>

    <form method="post" action="change_password.php" class="form">
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
      </div>

      <div class="input-group">
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password" required>
      </div>

      <div class="input-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
      </div>

      <button type="submit">Change Password</button>
    </form>

    <p class="signup-link"><a href="index.php">Back to Login</a></p>
  </div>
</body>
</html>
