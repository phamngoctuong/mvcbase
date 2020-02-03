<?php  
	class Ajax extends Controller
	{
		public function user()
		{
			if(isset($_POST['username'])) {
				$user = $this->model("User");
				$username = $_POST['username'];
				echo $user->userexits($username);
			}
		}
	}
?>