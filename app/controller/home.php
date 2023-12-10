<?php
class home extends Controller{	
	// Constructor
	public function __construct() {
    }

	// Default method
	public function index($name="Juan", $age="24"){
		// Associative Arrays (arrays with keys)
		$arr_data['name'] = $name;
		$arr_data['age'] = $age;
		$arr_data['title'] = "Home Page";
		// Display page and send data
		$this->display('template/header', $arr_data);
		$this->display("home/default", $arr_data);
		$this->display('template/footer');
	}

	public function dosen(){
		$arr_data['students'] = $this->logic("Student_model")->getAllDataStudent();
		$this->display('home/dosen', $arr_data);	
	}

	public function page($current_page=2, $next_page=3, $prev_page=1){
		// Associative Arrays (arrays with keys)
		$arr_data['current'] = $current_page;
		$arr_data['next'] = $next_page;
		$arr_data['previous'] = $prev_page;
		$arr_data['title'] = "Personal Page";
		// Display page and send data
		$this->display('template/header', $arr_data);
		$this->display("home/page", $arr_data);
		$this->display('template/footer');
	}

	// Get status
	private function _status(){
		echo "This is home/status.";
	}

	public function inputstudent(){
		session_start();
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$status = $this->logic("Home_model")->input_data($_POST);

			if($status === "SUCCESS"){
				echo "Yeayyy Sukses Tambah data.";
			}

			if($status === "FAILED"){
				echo "Yah Gagal!";
			}

			if($status === "ERROR"){
				echo "Ada ERROR Nich";
			}

		}else{
			echo "MUST REQUEST POST";
		}
	}

	public function attendance() {
		$data = $this->logic("Home_model")->getData();
		$this->display("home/attendance" ,$data);
	}

	public function updateAttendance() {
		session_start();
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			// $title = $_POST['inputTitle'];
			// $course = $_POST['inputCourse'];
			// $name = $_POST['inputName'];
			// $email = $_POST['inputEmail'];
			// $date = $_POST['inputDate'];
			// $time = $_POST['inputTime'];
			// $radius = $_POST['inputRadius'];

			// console log the $_POST
			echo "<script>console.log(".json_encode($_POST).")</script>";

			$status = $this->logic("Home_model")->updateAttendance($_POST);

			if($status === "SUCCESS"){
				echo "Yeayyy Sukses Update data.";
			}

			if($status === "FAILED"){
				echo "Yah Gagal!";
			}

			if($status === "ERROR"){
				echo "Ada ERROR Nich";
			}

			header('Location: '.APP_PATH.'/home/attendance'); // Redirect to default home page
		}
	}

	public function deleteAttendance() {
		session_start();
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			// console log the $_POST
			echo "<script>console.log(".json_encode($_POST).")</script>";

			$status = $this->logic("Home_model")->deleteAttendance($_POST);

			if($status === "SUCCESS"){
				echo "Yeayyy Sukses Delete data.";
			}

			if($status === "FAILED"){
				echo "Yah Gagal!";
			}

			if($status === "ERROR"){
				echo "Ada ERROR Nich";
			}

			header('Location: '.APP_PATH.'/home/attendance'); // Redirect to default home page
		}
	}
}
?>