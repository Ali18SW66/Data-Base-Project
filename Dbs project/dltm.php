<?php
$MannagerId=$_POST['MannagerId'];

//creating Connection
$Conn =new mysqli('localhost','root','','mcdonald');
if ($Conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM mannagers WHERE MannagerId=$MannagerId";

if ($Conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $Conn->error;
}

$Conn->close();


?>