<?php
// delete.php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "User deleted successfully.";
    } else {
        echo "Error: " . $stmt->errorInfo();
    }
}
?>
