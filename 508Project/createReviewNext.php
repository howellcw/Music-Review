<?php 
require_once 'connection.php';

$artReview = $_GET['r'];

$stmt = $conn->query("SELECT al.albumTitle, al.albumID from albums al JOIN artists a ON (al.artistID = a.artistID) WHERE a.name = \"$artReview\"");

echo "Album: <select id = 'albumsSelect'  onchange='this.form.submit();'>";

while ($row = $stmt->fetch_assoc()) {
    echo "<option value = $row[albumID]> $row[albumTitle] </option>";
}

$albumSelected = $_GET['albumsSelect'];
echo "</select>";

$songstmt = $conn->query("SELECT s.title, s.songID from songs s JOIN albums al; ON (s.albumID = al.albumID) WHERE al.albumID = $albumSelected");
echo "\"$albumSelected\"";
echo "Song: <select id = 'songSelected'>";

while ($songrow = $songstmt->fetch_assoc()) {
    echo "<option value = $songrow[songID]> $songrow[title] </option>";
}

echo "</select>";

?>