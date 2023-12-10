<?php
class Home_model{
    private $db;

    public function __construct(){
        $this->db = new Database;

        if(!$this->db == false){
            echo "<script>console.log('Connection failed.');</script>";

        }else{
            echo "<script>console.log('Connection successfully.');</script>";
        }
    }


    public function input_data($data){
        try{
            $reg_number = $data['reg_number'];
            $nim_number = $data['nim_number'];
            $email = $data['email'];
            $fullname = $data['fullname'];
            $password = $data['password'];

            date_default_timezone_set('Asia/Makassar');
            $datanow = date('Y-m-d H:i:s'); 

            $sql = "INSERT INTO `tbl_students` (`reg_number`, `nim_number`, `email`, `fullname`, `password`, `created_at`, `updated_at`)
                    VALUES                      ('$reg_number', '$nim_number', '$email', '$fullname', '$password', '$datanow', '$datanow');";
            
            if($this->db->query($sql) === TRUE){
                return "SUCCESS";
            } else {
            return "FAILED";
            }
        }

        catch(Exception $e){
            return "ERROR";
        }
        
    }

    // public function getAllDataStudent(){
    //     $result = $this->db->query("select * from tbl_students;");
    //     $this->db->db_close();

    //     if($result->num_rows > 0){
    //         // convert to associative array
    //         $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //         return $rows;
    //     } else {
    //         return [];
    //     }
    //    // return $arr_data;
    // }

    public function getData() {
        $result = $this->db->query("select * from tbl_attendance_list;");
        $this->db->db_close();
        
        if($result->num_rows > 0){
            // convert to associative array
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $rows;
            echo "<script>console.log('Data successfully fetched.');</script>";
        } else {
            return [];
            echo "<script>console.log('Data not fetched.');</script>";
        }

        
        // return $data;
    }

    public function updateAttendance($data) {
        try{
            $id = $data['inputId'];
            $title = $data['inputTitle'];
			$course = $data['inputCourse'];
			$name = $data['inputName'];
			$email = $data['inputEmail'];
			$date = $data['inputDate'];
			$time = $data['inputTime'];
			$radius = $data['inputRadius'];

            $sql = "UPDATE `tbl_attendance_list` SET `title_short`='$title', `name_subject`='$course', `name_lecturer`='$name', `email_lecturer`='$email', `date_attendance`='$date', `time_attendance`='$time', `max_radius`='$radius' WHERE `id_attendance`='$id';";
            if($this->db->query($sql) === TRUE){
                return "SUCCESS";
            } else {
            return "FAILED";
            }
        }

        catch(Exception $e){
            return "ERROR";
        }
    }

    public function deleteAttendance($data) {
        try{
            $id = $data['inputId'];

            $sql = "DELETE FROM `tbl_attendance_list` WHERE `id_attendance`='$id';";
            if($this->db->query($sql) === TRUE){
                return "SUCCESS";
            } else {
            return "FAILED";
            }
        }

        catch(Exception $e){
            return "ERROR";
        }
    }
}
?>