<?php 
require_once 'connection.php';

$art = $_GET['q'];
echo "'%".$art."%'";
$stmt = $conn->query("SELECT title from songs WHERE name = '%".$art."%'");

echo "<table style='border: solid 1px black;'>";
echo "<thead><tr><th>Artist</th></tr></thead>";
echo "<tbody>";

while ($row = $stmt->fetch_assoc()) {
    echo $row[title];
}



echo "</tbody>";
echo "</table>";


?>