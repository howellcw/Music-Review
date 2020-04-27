<?php 
require_once 'connection.php';

$selectedSong= $_GET['songSelect'];

echo "<form action = 'submission.php'>";
echo "<label for='quantity'>Your rating (between 1 and 10):</label>";
echo "<input type='number' id='rating' name='rating' min='1' max='10'>";
echo "<br><br>";
echo "<textarea name='reviewtext' rows='10' cols='30'>Enter your review here.</textarea>";
echo "<br><br>";
echo "<input type='submit'>";
echo "</form>";
?>