<?php 
require_once 'connection.php';

$art = $_GET['q'];

echo "<table style='border: solid 1px black;'>";
echo "<thead><tr><th>Reviews</th></tr></thead>";
echo "<tbody>";
$stmt = $conn->query("SELECT s.title, r.rating, r.review_txt from songs s JOIN reviews r JOIN artists a WHERE a.name = \"$art\"");
while ($row = $stmt->fetch_assoc()) {
    echo "<tr><td>$row[title]<tr><td>";
    echo "<tr><td>$row[rating]<tr><td>";
    echo "<tr><td>$row[review_txt]<tr><td>";
}



echo "</tbody>";
echo "</table>";


?>