<?php

$id = $_GET['id'];

$dbname = "your_dbname";
$conn = mysqli_connect("localhost", "root", "", "social");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM users WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: user_mgmt.php'); //returning to user mgmt page
    exit;
} else {
    echo "Error deleting record";
}
?>