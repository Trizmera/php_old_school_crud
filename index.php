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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
        </table>
    </body>
</html>