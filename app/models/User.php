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
		public function lists() {
			$query = "SELECT * FROM user";
			$data = [];
			$result = mysqli_query($this->con, $query);
			while($row = mysqli_fetch_assoc($result))
	    {
	        $data[] = $row;
	    }
	    return json_encode($data);
		}
		public function userexits($username) {
			$query = "SELECT username FROM users WHERE username='$username'";
			$result = mysqli_query($this->con, $query);
			$test = false;
			if(mysqli_num_rows($result)>0) {
				$test = true;
			}
			return json_encode($test);
		}
		public function insert($name, $password) {
			$query = "INSERT INTO users(username,password) VALUES ('$name', '$password')";
			$boolean = false;
			if(mysqli_query($this->con, $query)) {
				$boolean = true;
			}else {
				$boolean = false;
			}
			return json_encode($boolean);
		}
	}
?>