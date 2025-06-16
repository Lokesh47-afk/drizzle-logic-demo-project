<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location: index.php');
    exit();
}
echo "welcome, ".$_SESSION['username']. "<br />";

echo '<a href=logout.php>Logout</a>';
?>