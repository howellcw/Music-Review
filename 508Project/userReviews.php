<?php 
session_start();
require_once 'connection.php';

$uid = $_SESSION['user_id'];

$stmt = $conn->query("SELECT a.name, s.title, r.rating, r.review_txt, r.userID from reviews r join songs s on r.songID = s.songID join artists a on s.artistID = a.artistID where r.userID = \"$uid\" order by r.review_time asc");
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