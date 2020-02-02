<?php  
	class Database 
	{
		protected $con;
		protected $host = "localhost";
		protected $username = "root";
		protected $password = "";
		protected $dbname = "mvc";
		function __construct()
		{
			$this->con = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
			mysqli_set_charset($this->con,"utf8");
			mysqli_select_db($this->con, $this->dbname);
		}
	}
?>