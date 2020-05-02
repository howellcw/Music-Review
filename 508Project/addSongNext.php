<?php 
require_once 'connection.php';

$songArt = mysqli_real_escape_string($conn, $_POST['songArtist']);

$stmt = $conn->query("SELECT al.albumTitle, al.albumID from albums al JOIN artists a ON (al.artistID = a.artistID) WHERE a.name = \"$songArt\"");

echo "<form action = 'submitSong.php' method = 'POST'>";
echo "Album: <select name = 'songAlbum'>";

while ($row = $stmt->fetch_assoc()) {
    echo "<option value = $row[albumID]> $row[albumTitle] </option>";
}
echo "</select>";
echo "  Song Title: ";
echo"<input type='text' name='song' placeholder='Enter Song Title'>";
echo " <input type='submit' value='Add'/>";
echo "</form>";



?>