<?php  
	class App {
		protected $controller = 'home';
		protected $method = 'index';
		protected $params = [];
		public function __construct() {
			$url = $this->parseUrl();
			echo '<pre>';
				print_r($url);
			echo '</pre>';
		}
		public function parseUrl() {
			return $_GET['url'];
		}
	}
?>