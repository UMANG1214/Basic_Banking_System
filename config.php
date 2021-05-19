<?php

	$conn = mysqli_connect('localhost','umang425','Umang@1960396','sparks_bank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>