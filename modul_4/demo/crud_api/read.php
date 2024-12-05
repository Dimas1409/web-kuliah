<?php
// read.php
include 'config.php';

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);

echo "<h2>User List</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>";

while ($row = $stmt->fetch()) {
    echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['phone'] . "</td>
            <td>
                <a href='update.php?id=" . $row['id'] . "'>Update</a>
                <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
            </td>
          </tr>";
}

echo "</table>";
?>
