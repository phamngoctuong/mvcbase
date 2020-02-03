<?php  
	class Register extends Controller
	{
		public function index()
		{
			$data['page'] = 'register';
			$this->view('layout/master1',$data);
		}
		public function userregis() {
			$user = $this->model('User');
			$data['page'] = 'register';
			if(isset($_POST['submit'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$password = password_hash($password, PASSWORD_DEFAULT);
				$result = $user->insert($username,$password);
				$data['result'] = $result;
				$this->view('layout/master1',$data);
			}
		}
	}
?>