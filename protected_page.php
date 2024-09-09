<?php
session_start();

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Protected Page</title>
</head>
<body>
    <h1>Protected Page</h1>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! You have successfully logged in and verified your OTP.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
