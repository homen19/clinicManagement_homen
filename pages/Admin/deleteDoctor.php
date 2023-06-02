<?php
$host = 'localhost';  
$user = 'root';  
$password = '';  
$db_name = "anindita_clinic"; 

$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}   


if(isset($_GET['id'])){
$id = $_GET["id"];

$sql = "DELETE FROM doctors WHERE id='$id'"; 
if ($con->query($sql) === TRUE) {
    echo "Data deleted";
    } 
else {
    echo "Error deleting record: " . $con->error;
    }
}

$con->close();
?>