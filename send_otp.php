<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Generate a random 6-digit OTP
$otp = rand(100000, 999999);
$_SESSION['otp'] = $otp;

// Send OTP to user's email (for demo, just displaying it)
$to = 'user@example.com';  // Replace with the user's email
$subject = 'Your OTP Code';
$message = "Your OTP code is: $otp";
$headers = 'From: noreply@example.com';

// Uncomment the mail function below to send an actual email
// mail($to, $subject, $message, $headers);

echo "OTP has been sent to your email. (For demo purposes, the OTP is: $otp)";

header('Location: verify_otp.php');
exit();
?>
