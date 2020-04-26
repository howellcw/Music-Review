<?php 
require_once 'connection.php';

$art = $_GET['q'];
echo "$art";
$stmt = $conn->query("SELECT s.title, r.rating, r.review_txt from songs s JOIN reviews r JOIN artists a WHERE a.name = \"$art\"");

echo "<table style='border: solid 1px black;'>";
echo "<thead><tr><th>Reviews</th></tr></thead>";
echo "<tbody>";

while ($row = $stmt->fetch_assoc()) {
    echo $row['title'];
    echo $row['rating'];
    echo $row['review_txt'];
}



echo "</tbody>";
echo "</table>";


?>