<?php
include 'config.php';

$sql = "SELECT * FROM items";
$result = mysqli_query($conn, $sql);
?>

<html>
    <body>
        <h2>Items</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['Id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['description'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>"></a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>