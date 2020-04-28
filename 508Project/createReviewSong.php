<?php 
require_once 'connection.php';

$selectedAlbum= $_GET['albumSelect'];
$stmt = $conn->query("SELECT DISTINCT s.songID, s.title FROM songs s JOIN albums a on s.albumID = $selectedAlbum");

echo "<form method = 'get' action = 'createReviewRating.php'>";
echo "Song: <select name = 'songSelect'>";

while ($row = $stmt->fetch_assoc()) {
    echo "<option value = $row[songID]> $row[title] </option>";
}
echo " <input type='submit' value='Submit'/>";
echo "</select>";

echo "</form>";



?>