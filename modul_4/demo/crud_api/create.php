<?php
// create.php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES (:name, :email, :phone)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);

    if ($stmt->execute()) {
        echo "New user created successfully.";
    } else {
        echo "Error: " . $stmt->errorInfo();
    }
}
?>
<form method="POST">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Phone: <input type="text" name="phone" required><br>
    <button type="submit">Create User</button>
</form>
