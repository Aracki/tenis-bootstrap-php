<?php 
		include('baza.php');	
		$b = new baza();
		$mysqli = $b->konektuj();

		if(isset($_GET['ime']) && (isset($_GET['nova_cena']))){
			$imeTerena = $_GET['ime'];
			$cena = $_GET['nova_cena'];
		}

		if($imeTerena !== "" && $cena !== ""){
			$query = "UPDATE tereni 
						SET cena_termina = '$cena' 
							WHERE naziv_terena = '$imeTerena'";
		}

		if($result = $mysqli->query($query)){
			echo "uspesan update";
		} else {
			echo "neuspesan update";
		}

		$mysqli->close();
?>