<?php 
class connect
{
	private $hostname='localhost';
	private $username='root';
	private $password='';
	private $database='mvc';
	public $con;
	public function __construct()
	{
		$this->con = mysqli_connect($this->hostname,$this->username,$this->password,$this->database);
		mysqli_set_charset($this->con,'utf-8');
	}

}
 ?>
