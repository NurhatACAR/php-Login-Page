<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "database1";
$conn = new mysqli($servername, $username, $password, $db_name, 3306);

if($conn->connect_error){
    die("Bağlantı başarısız oldu".$conn->connect_error);
}
echo  "";


?>