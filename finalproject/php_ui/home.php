<?php
require 'config.php';
require 'dashboard.php';


if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
} else {
    if (isset($_SESSION['home'])) {
    echo "<script>alert('Login successfully');</script>";
    unset($_SESSION['home']);
}

    $userid = $_SESSION['user_id'];
    $stmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
    $stmt->execute([$userid]);
    $user = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>

<div class="container">
    <h2>Welcome to Home Page Mr/Ms <?php echo htmlspecialchars($user['username'])?></h2>
</div>
<p class="p">The idea is not to live forever. but to create somthing that will.</p>

</body>
</html>
