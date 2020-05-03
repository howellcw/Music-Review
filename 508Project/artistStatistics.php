<?php 

require_once 'connection.php';

$selArt= $_GET['choose'];

$sql = $conn->query("Select artistID from artists where name = '$selArt'");
while ($row = $sql->fetch_assoc()) {
    $selArtID = $row['artistID'];
}


$stmt = $conn->query("SELECT CAST(AVG(rating) AS DECIMAL (2,1)) AS averageRating FROM reviews r JOIN songs s ON r.songID = s.songID JOIN artists a ON (s.artistID = \"$selArtID\")");

while ($row = $stmt->fetch_assoc()) {
    echo "<table style='border: solid 1px black;'>";
    echo "<thead><tr><th>Average Rating For $selArt:</th></tr></thead>";
    echo "<tbody>";
    echo "<tr><td>$row[averageRating]<tr><td>";
    echo "</tbody>";
    echo "</table>";
}

$avgstmt = $conn->query("SELECT s.title, CAST(AVG(r.rating) AS DECIMAL (2,1)) AS avg_rating FROM songs s JOIN reviews r ON (s.songID = r.songID) JOIN artists a WHERE (s.artistID = \"$selArtID\") GROUP BY s.title ORDER BY AVG(r.rating) DESC LIMIT 10");


$count = 1;
echo "<table style='border: solid 1px black;'>";
echo "<thead><tr><th>Top 10 Rated Songs</th></tr></thead>";
echo "<tbody>";
while ($row = $avgstmt->fetch_assoc()) {
    echo "<tr><td>$count) $row[title] $row[avg_rating]<tr><td>";
    $count += 1;
}
echo "</tbody>";
echo "</table";

$albmstmt = $conn->query("SELECT al.albumTitle, AVG(r.rating) as al_rating from reviews r join songs s on r.songID = s.songID join albums al on s.albumID = al.albumID join artists a on al.artistID = a.artistID where a.artistID = \"$selArtID\" group by al.albumID");

echo "<table style='border: solid 1px black;'>";
echo "<thead><tr><th>Average Rating by Album</th></tr></thead>";
echo "<tbody>";
while ($row = $albmstmt->fetch_assoc()) {
    echo "<tr><td>$row[albumTitle]: $row[al_rating]<tr><td>";
}
echo "</tbody>";
echo "</table";

?>