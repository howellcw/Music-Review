<?php 
require_once 'connection.php';

$art = $_GET['q'];
echo "$art";
$stmt = $conn->query("SELECT s.title, r.rating, r.review_txt FROM songs s JOIN artists a JOIN reviews r WHERE a.name = '%".$art."%'");

echo "<table style='border: solid 1px black;'>";
echo "<thead><tr><th>Artist</th></tr></thead>";
echo "<tbody>";

while ($row = $stmt->fetch_assoc()) {
    echo $row['s.title'];
    echo $row['r.rating'];
    echo $row['r.review_txt'];
}



echo "</tbody>";
echo "</table>";


?>