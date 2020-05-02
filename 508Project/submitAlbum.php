<?php 
session_start();
require_once 'connection.php';

$alArt = mysqli_real_escape_string($conn, $_POST['albumArtist']);
$addAl = mysqli_real_escape_string($conn, $_POST['album']);

$stmt = "Select artistID from artists where name = '$alArt';";
mysqli_query($conn, $stmt);

while ($row = $stmt->fetch_assoc()) {
    $selAlArt = $row['artistID'];
}


$sql = "INSERT INTO albums (artistID, albumTitle) VALUES ('$selAlArt', $addAl);";
mysqli_query($conn, $sql);

echo "<a href='index.php'>Successfully added $addAl!</a>";
?>