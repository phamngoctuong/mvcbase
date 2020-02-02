<?php  
	class apiUser extends Controller
	{
		public function lists()
		{
			$user = $this->model('User');
			$users = $user->lists();
			echo $users;
		}
	}
?>