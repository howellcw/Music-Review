<?php 

require_once 'connection.php';

$selArt= $_GET['choose'];

$sql = $conn->query("Select artistID from artists where name = '$selArt'");
while ($row = $sql->fetch_assoc()) {
    $selArtID = $row['artistID'];
}


$stmt = $conn->query("SELECT CAST(AVG(rating) AS DECIMAL (2,1)) AS averageRating FROM reviews r JOIN songs s ON r.songID = s.songID JOIN artists a ON (s.artistID = \"$selArtID\")");

while ($row = $stmt->fetch_assoc()) {
    echo "Average Rating for $selArt: $row[averageRating]";
}





?>