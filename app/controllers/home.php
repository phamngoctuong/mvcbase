<?php  
	class Home extends Controller
	{
		public function index($name='',$value='')
		{
			$user = $this->model('User');
			$data['name'] = $name;
			$data['value'] = $value;
			$data['title'] = "Lorem ipsum dolor sit amet.";
			$this->view('home/index',$data);
		}
	}
?>