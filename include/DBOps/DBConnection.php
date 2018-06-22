<?php

require_once 'config.php';

/**
 * 
 */
class DBConnection
{
	private $conn;

	function __construct()
	{
		
	}

	public function mConnect(){
		$this->conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

		if (mysqli_connect_errno()) {
			echo "Error: ". mysqli_connect_error();
		}else
			echo "Succes";

		return $this->conn;
	}
}