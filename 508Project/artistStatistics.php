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

$avgstmt = $conn->query("SELECT s.title, CAST(AVG(r.rating) AS DECIMAL (2,1)) AS avg_rating FROM songs s JOIN reviews r ON (s.songID = r.songID) JOIN artists a WHERE (s.artistID = \"$selArtID\") GROUP BY s.title ORDER BY AVG(r.rating) DESC LIMIT 10");

echo "Top 10 Rated Songs:\n";
$count = 1;
while ($row = $avgstmt->fetch_assoc()) {
    echo "$count)' ' $selArt: $row[avg_rating]\n";
}

?>