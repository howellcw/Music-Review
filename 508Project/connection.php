<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "project_20";
$password = "V00785650";
$database = "project_20";

/*try{
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}*/

$conn = mysqli_connect($Servername,$username,$password,$database);

?>