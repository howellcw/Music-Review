<?php 
session_start();
require_once 'connection.php';
$selectedSong= $_GET['songSelect'];
$ratingNum = $_GET['rating'];
$rvw = $_GET['reviewtext'];
$uid = $_SESSION['user_id'];


echo $selectedSong;
echo $ratingNum;
echo $rvw;
echo $uid;
?>