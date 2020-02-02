<?php  
	class User extends Database
	{
		public function index() {
			echo "";
		}
		public function show() {
			$query = "SELECT * FROM user";
			$data = [];
			$result = mysqli_query($this->con, $query);
	    while($row = mysqli_fetch_assoc($result))
	    {
	        $data[] = $row;
	    }
	    return $data;
		}
	}
?>