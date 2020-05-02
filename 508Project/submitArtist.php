<?php 
session_start();
require_once 'connection.php';

$addArtist= $_GET['artist'];
echo $addArtist;

$sql = "INSERT INTO reviews (songID, userID, rating, review_txt) VALUES ();";


echo "<a href='index.php'>Success!!!</a>";
?>