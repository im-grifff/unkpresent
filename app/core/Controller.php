<?php
	// Create a class
	class Controller{
		// PHP Constructor
		private $model;
		private $view;

		public function __construct($model, $view) {
			$this->model = $model;
			$this->view = $view;
		}

		public function index() {
			$data = $this->model->getData();
			$this->view->render($data);
		}

		// display method and send any data
		public function display($view, $data=[]){

			require_once "../app/view/".$view.".php";
			
		}

		// core logic model method
		public function logic($model){
			require_once "../app/model/".$model.".php";
			$obj_model = new $model;
			return $obj_model;
		}

	}
?>