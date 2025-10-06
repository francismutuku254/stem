<?php
// Show all errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$host = 'localhost';
$user = 'root';
$pass = "";
$dbname = 'novatech_portal';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == "approve" && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $conn->query("UPDATE users SET status='approved' WHERE id=$id");

    } elseif ($action == "delete" && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $conn->query("DELETE FROM users WHERE id=$id");

    } elseif ($action == "bulk_delete") {
        $data = json_decode(file_get_contents("php://input"), true);
        if (isset($data['ids']) && is_array($data['ids'])) {
            $ids = array_map('intval', $data['ids']);
            $idList = implode(",", $ids);
            $conn->query("DELETE FROM users WHERE id IN ($idList)");
        }

    } elseif ($action == "promote" && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $conn->query("UPDATE users SET role='admin' WHERE id=$id");
    }
}
?>
