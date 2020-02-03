<?php  
	class Home extends Controller
	{
		public function index($name='',$value='')
		{
			$user = $this->model('User');
			$data['page'] = 'home';
			$data['name'] = $name;
			$data['value'] = $value;
			$data['title'] = "Lorem ipsum dolor sit amet.";
			$data['index'] = $user->index();
			$data['show'] = $user->show();
			$this->view('layout/master1',$data);
		}
	}
?>