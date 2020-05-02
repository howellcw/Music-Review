<?php 
session_start();
require_once 'connection.php';


$sonAl = mysqli_real_escape_string($conn, $_POST['songAlbum']);
echo $sonAl;

?>