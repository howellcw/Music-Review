<?php 
require_once 'connection.php';

$stmt = $conn->query("SELECT name from artists ORDER BY name");

echo "<table style='border: solid 1px black;'>";
echo "<thead><tr><th>Artist</th></tr></thead>";
echo "<tbody>";

while ($row = $stmt->fetch_assoc()) {
    echo "<tr><td>$row[name]</td></tr>";
}

echo "</tbody>";
echo "</table>";


?>