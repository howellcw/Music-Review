<?php 
session_start();
require_once 'connection.php';

$addArtist = mysqli_real_escape_string($conn, $_POST['artist']);
echo $addArtist;

$sql = "INSERT INTO reviews (songID, userID, rating, review_txt) VALUES ();";


echo "<a href='index.php'>Success!!!</a>";
?>