<?php 

require_once 'connection.php';

$selArt= $_GET['choose'];

$sql = $conn->query("Select artistID from artists where name = "$selArt";");
while ($row = $stmt->fetch_assoc()) {
    $selArtID = $row[artistID];
}

echo $selArtID;

$stmt = $conn->query("SELECT CAST(AVG(rating) AS DECIMAL (2,1)) AS averageRating FROM reviews r JOIN songs s ON r.songID = s.songID JOIN artists a ON (s.artistID = 1)");

while ($row = $stmt->fetch_assoc()) {
    echo "Average Rating for $selArt: $row[averageRating]";
}





?>