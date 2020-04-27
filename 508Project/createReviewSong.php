<?php 
require_once 'connection.php';

$selectedAlbum= $_GET['albumSelect'];
echo "$selectedAlbum";
$stmt = $conn->query("SELECT al.albumTitle, al.albumID from albums al JOIN artists a ON (al.artistID = a.artistID) WHERE a.name = \"$artReview\"");

echo "<form action = 'createReviewSong.php'>";
echo "Album: <select id = 'albumsSelect'>";

while ($row = $stmt->fetch_assoc()) {
    echo "<option value = $row[albumID]> $row[albumTitle] </option>";
}
echo " <input type='submit' value='Submit'/>";
echo "</select>";
echo "</form>";



?>