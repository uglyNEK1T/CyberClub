<?php
require 'db_connect.php';
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM games WHERE id = ?");
$stmt->execute([$id]);
header("Location: index.php");
exit;
?>