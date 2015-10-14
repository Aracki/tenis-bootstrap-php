<?php

	class baza 
	{
		private $db_host;
		private $db_name;
		private $db_user;
		private $db_password;
		
		function __construct()
		{
			$this->db_host="localhost";
			$this->db_name="tenis3";
			$this->db_user="root";
			$this->db_password= "";
		}

		function konektuj(){

			$mysqli = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);

			if (mysqli_connect_errno()) {
		    	printf("Connect failed: %s\n", mysqli_connect_error());
		    	exit();
			}

			$mysqli->set_charset("utf8");
			return $mysqli;
		}

	}

	?>