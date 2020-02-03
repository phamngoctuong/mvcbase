<?php  
	class Register extends Controller
	{
		public function index()
		{
			$this->view('register\register');
		}
		public function userregis() {
			$user = $this->model('User');
			if(isset($_POST['submit'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$password = password_hash($password, PASSWORD_DEFAULT);
				$result = $user->insert($username,$password);
				$this->view('register\register',['result'=>$result]);
			}
		}
	}
?>