<?php
$x=$_POST['em'];
$y=$_POST['pass'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="table2";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
echo "connected successfully";
$sql = "INSERT INTO `db2`(`email`, `password`) VALUES ('$x','$y')";
if($conn->query($sql)===TRUE){
    echo "  new record created successfully";
}
else{
    echo "error:" . $sql . "<br>" . $conn->error;
}
$conn->close();

?>