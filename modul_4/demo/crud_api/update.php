<?php
// update.php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE users SET name = :name, email = :email, phone = :phone WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            echo "User updated successfully.";
        } else {
            echo "Error: " . $stmt->errorInfo();
        }
    } else {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $user = $stmt->fetch();
    }
} else {
    echo "User not found.";
}
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
    Phone: <input type="text" name="phone" value="<?php echo $user['phone']; ?>" required><br>
    <button type="submit">Update User</button>
</form>
