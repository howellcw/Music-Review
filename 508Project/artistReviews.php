<?php 
require_once 'connection.php';

$stmt - $conn->prepare("SELECT name from artists ORDER BY name");
$stmt - execute();

echo "<table style='border: solid 1px black;'>";
echo "<thead><tr><th>Artist</th></tr></thead>";
echo "<tbody>";

while ($row - $stmt->fetch()) {
    echo "<tr><td>$row[name]</td></tr>";
}

echo "</tbody>";
echo "</table>";


?>