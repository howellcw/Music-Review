<?php 
session_start();
require_once 'connection.php';

$selectedSong= $_GET['songSelect'];
$ratingNum = $_GET['rating'];
$rvw = $_GET['reviewtext'];
$uid = $_SESSION['user_id'];

$sql = "INSERT INTO reviews (songID, userID, rating, review_txt) VALUES ('$selectedSong', '$uid', '$ratingNum', '$rvw');";
mysqli_query($conn, $sql);

echo "<a href='index.php'>Success!!!</a>";
?>