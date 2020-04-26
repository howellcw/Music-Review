<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
 <script type="text/javascript" src="jquery.autocomplete.js"></script>
 <script> 
 jQuery(function(){ 
 $("#search").autocomplete("searchArtists.php");
 });
 jQuery(function(){ 
	 $("#searchSong").autocomplete("searchSongs.php");
	 });
 </script>
</head>
<body>
 <form action="get_form.php">
 Artist Name: <input type="text" name="q" id="search" placeholder="Enter Artist">
 Song Name: <input type="text" name="y" id="searchSong" placeholder="Enter Song">
 <input type="submit" value="Submit"/>
 </form> 
</body>
</html>