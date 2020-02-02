<?php  
	class Home extends Controller
	{
		public function index($name='',$value='')
		{
			$user = $this->model('User');
			$data['name'] = $name;
			$data['value'] = $value;
			$data['title'] = "Lorem ipsum dolor sit amet.";
			$data['index'] = $user->index();
			$data['show'] = $user->show();
			$this->view('home/index',$data);
		}
	}
?>