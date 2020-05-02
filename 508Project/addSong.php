<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
 <script type="text/javascript" src="jquery.autocomplete.js"></script>
 <script> 
 jQuery(function(){ 
 $("#search").autocomplete("searchArtists.php");
 });
 </script>
</head>
<body>
 <form action="addSongNext.php" method = "POST">
 Artist Name: <input type="text" name="songArtist" id="search" placeholder="Enter Artist">
 <input type="submit" value="Next"/>
 </form> 
</body>
</html>