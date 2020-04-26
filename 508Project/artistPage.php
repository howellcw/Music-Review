<?php 
require_once 'connection.php';

$art = $_GET['q'];
$stmt = $conn->query("SELECT s.title, r.rating, r.review_txt FROM songs s JOIN artists a JOIN reviews r WHERE a.name = '%".$art."%'");

echo "<table style='border: solid 1px black;'>";
echo "<thead><tr><th>Artist</th></tr></thead>";
echo "<tbody>";

while ($row = $stmt->fetch_assoc()) {
    echo "<tr><td>$row[title]</td></tr>";
    echo "<tr><td>$row[rating]</td></tr>";
    echo "<tr><td>$row[review]</td></tr>";
}

echo "</tbody>";
echo "</table>";


?>