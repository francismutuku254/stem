<?php
session_start();
// Show all errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$user = 'root';
$pass = "";
$dbname = 'novatech_portal';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username   = trim($_POST['username']);
    $password   = trim($_POST['password']);
    $confirm_pw = trim($_POST['confirm_password']);
    $phone      = trim($_POST['phone']);
    $role       = trim($_POST['role']);
    $school     = isset($_POST['school']) ? trim($_POST['school']) : null; // new school field

    // Validate password match
    if ($password !== $confirm_pw) {
        echo "<script>alert('Passwords do not match.'); window.history.back();</script>";
        exit;
    }

    // If role is Student or Teacher/Institution, school must be selected
    if (($role === "Student" || $role === "Teacher/Institution") && empty($school)) {
        echo "<script>alert('Please select a school.'); window.history.back();</script>";
        exit;
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database with default 'pending' status
    $sql = "INSERT INTO users (username, password, phone, role, school, status) VALUES (?, ?, ?, ?, ?, 'pending')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $username, $hashedPassword, $phone, $role, $school);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! Please wait for admin approval.'); window.location='login.html';</script>";
    } else {
        echo "<script>alert('Error: Username might already exist.'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
