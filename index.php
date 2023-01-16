<?php
// Create connection
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'assessment';
$port = '3307';
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$conn = new mysqli($server, $username, $password, $db_name, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$sql = "INSERT INTO `address`( `address`, `city`, `state`, `zip_code`, `date`) VALUES ('$address','$city','$state','$zip',current_timestamp());";
if ($conn->query($sql) === TRUE) {
    echo "Address saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
