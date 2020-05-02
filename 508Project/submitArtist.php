<?php 
session_start();
require_once 'connection.php';

$addArtist = mysqli_real_escape_string($conn, $_POST['artist']);

$sql = "INSERT INTO artists (name) VALUES ($addArtist);";


echo "<a href='index.php'>Successfully added $addArtist!</a>";
?>