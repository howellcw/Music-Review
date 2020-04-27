<?php 
require_once 'connection.php';

$art = $_GET['q'];

$stmt = $conn->query("SELECT s.title, r.rating, r.review_txt, u.name from songs s JOIN reviews r JOIN artists a JOIN users u ON (r.userID = u.userID) WHERE a.name = \"$art\"");
while ($row = $stmt->fetch_assoc()) {
    echo "<table style='border: solid 1px black;'>";
    echo "<thead><tr><th>$row[name]</th></tr></thead>";
    echo "<tbody>";
    echo "<tr><td>$row[title]<tr><td>";
    echo "<tr><td>$row[rating]<tr><td>";
    echo "<tr><td>$row[review_txt]<tr><td>";
    echo "</tbody>";
    echo "</table>";
}


?>