<?php
	ob_start();
	include('header.php');

	include('home.php');

	echo 'SESSION:';
	echo $login_session;


	/*$servername = "127.0.0.1";
	$username = "arotexconfeccion";
	$password = "Arotex190";
	$dbname = "arotexco_shoppingcar";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname, 3306);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM company";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Name: " . $row["description"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();*/

	include('footer.php');
	ob_end_flush();
?>