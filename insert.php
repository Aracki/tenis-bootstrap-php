<?php 

	if(isset($_POST['ime']) && isset($_POST['opstina']) && isset($_POST['cena'])){
		$ime = $_POST['ime'];
		$opstina = $_POST['opstina'];
		$cena = $_POST['cena'];

		unesi($ime,$opstina,$cena);
	}

	function unesi($i,$o,$c){
		include('baza.php');
		$b = new baza();
		$mysqli = $b->konektuj();

		//upper case first
		$i = ucfirst($i);
		$o = ucfirst($o);

		//dal ima greske
		if (mysqli_connect_errno()) {
	    	printf("Connect failed: %s\n", mysqli_connect_error());
	    	exit();
		}

		$query = "INSERT INTO tereni VALUES ('LAST_INSERT_ID()', '$i', '$o', $c)";
		$mysqli->query($query);

		printf ("Unet je teren sa brojem: ", $mysqli->insert_id);

		$mysqli->close();
	}

?>