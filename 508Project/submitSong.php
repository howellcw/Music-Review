<?php 
session_start();
require_once 'connection.php';


$sonAl = mysqli_real_escape_string($conn, $_POST['songAlbum']);
$songAdd = mysqli_real_escape_string($conn, $_POST['song']);

$stmt = $conn->query("Select artistID from albums where albumID = '$sonAl'");
while ($row = $stmt->fetch_assoc()) {
    $selSonArt = $row['artistID'];
}

$sql = "INSERT INTO songs (title, albumID, artistID) VALUES ('$songAdd', '$sonAl','$selSonArt');";
mysqli_query($conn, $sql);
echo "<a href='index.php'>Successfully added $songAdd!</a>";

?>