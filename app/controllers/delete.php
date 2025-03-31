<?php include(__DIR__ . '/../../config/database_connection.php'); ?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM contact WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    } else {
        header('location: /TesteCrudAlphacode/public/index.php');
    }
}
?>