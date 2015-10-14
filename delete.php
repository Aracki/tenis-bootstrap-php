<?php 

		include('baza.php');	
		$b = new baza();
		$mysqli = $b->konektuj();

		if(isset($_GET['ime'])){
			$imeTerena = $_GET['ime'];
		}

		if($imeTerena!=""){
			$query = "DELETE FROM tereni WHERE naziv_terena = '$imeTerena'";
		}

		if($result = $mysqli->query($query)){
			echo "USPESNO BRISANJE";
		} else {
			echo "NIJE USPESNO BRISANJE";
		}
?>