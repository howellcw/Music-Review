<?php 
require_once 'connection.php';

$art = $_GET['q'];

$stmt = $conn->query("SELECT s.title, r.rating, r.review_txt, u.name from reviews r JOIN songs s ON r.songID = s.songID JOIN artists a JOIN users u ON (r.userID = u.userID) WHERE a.name = \"$art\" order by r.review_time");
while ($row = $stmt->fetch_assoc()) {
    echo "<table style='border: solid 1px black;'>";
    echo "<thead><tr><th>$row[name]</th></tr></thead>";
    echo "<tbody>";
    echo "<tr><td>Song: $row[title]<tr><td>";
    echo "<tr><td>Rating: $row[rating]<tr><td>";
    echo "<tr><td>Review: $row[review_txt]<tr><td>";
    echo "</tbody>";
    echo "</table>";
}


?>