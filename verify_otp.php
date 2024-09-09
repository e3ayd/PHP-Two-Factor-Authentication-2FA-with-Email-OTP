<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['otp'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entered_otp = $_POST['otp'];

    if ($entered_otp == $_SESSION['otp']) {
        $_SESSION['authenticated'] = true;
        header('Location: protected_page.php');
        exit();
    } else {
        $error = 'Invalid OTP. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify OTP</title>
</head>
<body>
    <h1>Verify OTP</h1>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="otp">Enter OTP:</label><br>
        <input type="text" id="otp" name="otp" required><br><br>

        <button type="submit">Verify</button>
    </form>
</body>
</html>
