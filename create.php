<?php 
include 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO items (name, description) VALUES ('$name', '$description')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " .mysqli_error($conn);
    }
}

?>

<html>
    <body>
        <h2>Create Item</h2>
        <form method="POST">
            Name: <input type="text" name="name"><br>
            Description: <textarea name="description"></textarea><br>
            <input type="submit" value="Create">
        </form>
    </body>
</html>