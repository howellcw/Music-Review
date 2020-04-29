<?php 

require_once 'connection.php';

$selArt= $_GET['choose'];
echo $selArt;

$stmt = $conn->query("SELECT CAST(AVG(rating) AS DECIMAL (2,1)) AS averageRating FROM reviews r JOIN songs s ON r.songID = s.songID JOIN artists a ON (s.artistID = 1)");
$response = mysqli_query($conn, $stmt);

if (empty($response)) {
    die('Error: ' mysqli_error($conn));
}
else {
    while ($row = $stmt->fetch_assoc()) {
        echo "Average Rating for Artist: $row[averageRating]";
    }
}




?>