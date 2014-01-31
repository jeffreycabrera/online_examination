<?php  
include_once('connectDB.php');

class examDAO{


	function getQuestion($id){
		$query = "SELECT question, a, b, c, d FROM exam WHERE exam_id = '$id'";
		$result = mysql_query($query);
		return $result;
	}

	function validateAnswer($id){
		$query = "SELECT answer FROM exam WHERE exam_id = '$id'";
		$result = mysql_query($query);
		return $result;

	}

	function createUser($fname, $lname, $email, $password, $confirm){
		$query = "INSERT INTO `examinee`(`firstname`, `lastname`, `email`, `password`, `confirm`) 
					VALUES ('$fname','$lname','$email','$password','$confirm')";
		$insert = mysql_query($query);
		return $insert;
	}

	function emailExist($email){
		$query = "SELECT email FROM examinee WHERE email = '{$email}'";
		$result = mysql_query($query);
		$num_rows = mysql_num_rows($result);
		return $num_rows;
	}

	function user_id_from_email($email){
		return mysql_result(mysql_query("SELECT user_id FROM examinee WHERE email = '$email'"), 0, 'user_id');
	}

	function login($email, $password){
		$user_id = examDAO::user_id_from_email($email);
		$query = "SELECT COUNT(`user_id`) FROM examinee WHERE email = '$email' AND password = '$password'";
		return (mysql_result(mysql_query($query), 0) == 1) ? $user_id : false;
	}

	function get_user_by_email($email){
		$query = "SELECT firstname, lastname FROM examinee WHERE email = '$email'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		return $row;

	}
}




?>