<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Normally, you'd validate the username and password against the database
    $username = $_POST['username'];
    $password = $_POST['password'];

    // For demonstration, assume any username/password is valid
    if ($username && $password) {
        $_SESSION['username'] = $username;
        header('Location: send_otp.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
