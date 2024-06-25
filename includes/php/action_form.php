<?php
session_start();
include('config.php');

$conn = db_connect();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM auth WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    header("Location: ../../parts/dashboard/");
} else {
    $error_message = "Invalid credentials, please try again.";
    header("Location: ../../?error=" . urlencode($error_message));
}

$stmt->close();
$conn->close();

