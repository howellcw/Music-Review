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
 <form action="submitAlbum.php">
 Artist Name: <input type="text" name="albumArtist" id="search" placeholder="Enter Artist">
 Album Name: <input type="text" name="album" id="search" placeholder="Enter Album">
 <input type="submit" value="Submit"/>
 </form> 
</body>
</html>