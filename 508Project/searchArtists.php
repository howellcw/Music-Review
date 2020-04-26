<?php 

include_once 'connection.php';

$id = $_GET['q'];

$sql = "select name from artists where name like '%".$id."%' limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["name"]. "\n";
    }
} else {
    echo "No artists by that name";
}



?>