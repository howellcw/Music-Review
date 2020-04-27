<?php 
require_once 'connection.php';

$selectedAlbum= $_GET['albumSelect'];
$stmt = $conn->query("SELECT s.songID, title FROM songs s JOIN albums a on s.albumID = \"$selectedAlbum\"");

echo "<form action = 'submission.php'>";
echo "Song: <select id = 'albumsSelect'>";

while ($row = $stmt->fetch_assoc()) {
    echo "<option value = $row[songID]> $row[title] </option>";
}
echo " <input type='submit' value='Submit'/>";
echo "</select>";
echo "</form>";



?>