<?php 

include_once 'connection.php';

$id = $_GET['q'];

$sql = "select book_title from book_table where book_title like '%".$id."%' limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["book_title"]. "\n";
    }
} else {
    echo "No artists by that name";
}



?>