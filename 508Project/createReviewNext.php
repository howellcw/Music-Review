<?php 
require_once 'connection.php';

$artReview = $_GET['r'];

$stmt = $conn->query("SELECT al.albumTitle, al.albumID from albums al JOIN artists a ON (al.artistID = a.artistID) WHERE a.name = \"$artReview\"");

echo "<form action = 'createReviewSong.php'>";
echo "Album: <select id = 'albumsSelect'>";

while ($row = $stmt->fetch_assoc()) {
    echo "<option value = $row[albumID]> $row[albumTitle] </option>";
}

$albumSelected = $_GET['albumsSelect'];
echo "</select>";
echo "</form>";

$songstmt = $conn->query("SELECT s.title, s.songID from songs s JOIN albums al; ON (s.albumID = al.albumID) WHERE al.albumID = \"$albumSelected\"");

echo "Song: <select id = 'songSelected'>";

while ($songrow = $songstmt->fetch_assoc()) {
    echo "<option value = $songrow[songID]> $songrow[title] </option>";
}
echo " <input type='submit' value='Submit'/>";
echo "</select>";

?>