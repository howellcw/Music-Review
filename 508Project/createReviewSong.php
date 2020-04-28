<?php 
require_once 'connection.php';

$selectedAlbum= $_GET['albumSelect'];
$stmt = $conn->query("SELECT DISTINCT s.songID, s.title FROM songs s JOIN albums a on s.albumID = $selectedAlbum");

echo "<form method = 'get' action = 'submission.php'>";
echo "Song: <select name = 'songSelect'>";

while ($row = $stmt->fetch_assoc()) {
    echo "<option value = $row[songID]> $row[title] </option>";
}
echo "</select>";
echo "<label for='quantity'>Your rating (1 to 10):</label>";
echo "<input type='number' id='rating' name='rating' min='1' max='10'>";
echo "<br><br>";
echo "<textarea name='reviewtext' rows='10' cols='30'>Enter your review here.</textarea>";
echo "<br><br>";
echo "<input type='submit'>";
echo "</form>";
echo "</form>";



?>