<!-- File to connect to database, multiuse -->
<?php

function connectDB(){
	$dbConnection = mysqli_connect("sql107.epizy.com", "epiz_32870969", "YAaDILX7z7I", "epiz_32870969_BookClubProject");
	if (mysqli_connect_errno()){
		die(mysqli_connect_error());
	}
	return $dbConnection;
}

?>