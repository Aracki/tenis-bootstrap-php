<?php 	

	function ucitajZapad(){
		include('baza.php');
		echo "<ul>";
		$b = new baza();
		$mysqli = $b->konektuj($db_host,$db_user,$db_password,$db_name);
		$query = "SELECT * FROM zapad ORDER BY Broj_poena desc, Gem_razlika desc";
		$result = $mysqli->query($query);  

		while ($row = $result -> fetch_row()) {
			?> <li><a><?= $row[2] ?></a></li> <?php
		}
		echo "</ul>";
	}

	function ucitajIstok(){
		include('baza.php');	
		$b = new baza();
		$mysqli = $b->konektuj($db_host,$db_user,$db_password,$db_name);
		echo "<ul>";
		$query = "SELECT * FROM istok ORDER BY Broj_poena desc, Gem_razlika desc";
		$result = $mysqli->query($query);        

        while ($row = $result -> fetch_row()) {
        	?> <li class="terenX"><?= $row[2] ?></li> <?php
        }
        echo "</ul>";
	}

	function ucitajTerene(){
		
		if(isset($_GET['ord'])){
			$order = $_GET['ord'];			 
		} else {
			$order = "";
		}
		
		include('baza.php');	
		$b = new baza();
		$mysqli = $b->konektuj();

		echo '<table class="table table-hover table-condensed table-bordered" id="levaX">';
		echo '<tr class="active"><th>Broj terena</th><th>Naziv</th><th>Opština</th><th>Cena</th>';				

		// $order = "cena_termina";
		if($order === ""){
			$query = "SELECT * FROM tereni";
		} else if($order === "cena_termina"){
			$query = "SELECT * FROM tereni ORDER BY $order DESC";
		} else {
			$query = "SELECT * FROM tereni ORDER BY $order ASC";
		}
			
		$result = $mysqli->query($query);        

		$i = 1;
        while ($row = $result -> fetch_row()) {
        	//svaki teren svoj broj
        	 echo '<tr class="danger"><td>'; echo $i; echo'</td>';
        	 
             echo '<td id="teren' . $i . '">' . $row[1] . '</td>';
             echo '<td>' . $row[2] . '</td>';
             echo '<td data-type="text" data-placement="right" data-title="Enter username" id="cenaX' . $i . '">' . $row[3] . '</td>';
             $i++;
        }
        echo "</table>";
	}


	if(isset($_GET['func'])){
		$func = $_GET['func'];
	}else{
		$func = "tereni";
	}
		
	

	switch ($func) {
		case 'zapad':
			ucitajZapad();
			break;
		
		case 'istok':
			ucitajIstok();
			break;

		case 'tereni':
			ucitajTerene();
			break;

		default:
			# code...
			break;
	}
	
?>                             
