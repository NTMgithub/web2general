<?php  
	include '../lib/session.php';
	Session::checkLogin();
	include '../lib/database.php';
	include '../helpers/format.php';
?>



<?php
	class adminLogin
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}


		public function login_admin($userName,$userPass)
		{
			$userName = $this->fm->validation($userName); //Check định dạng ký tự nhập vào
			$userPass = $this->fm->validation($userPass);	//Check định dạng ký tự nhập vào

			$userName = mysqli_real_escape_string($this->db->link, $userName); //Connect database
			$userPass = mysqli_real_escape_string($this->db->link, $userPass); //Connect database

			if (empty($userName) || empty($userPass) )
			{
				$alert = "<div class= 'alert alert-danger'>Không được để trống!</div>";
				return $alert;
			}
			else
			{
				$query = "SELECT * FROM tbl_user WHERE userName = '$userName' AND userPass = '$userPass' AND userType != 'user' LIMIT 1 ";
				$result = $this->db->select($query);

				if ($result != false )
				{		
					$value = $result->fetch_assoc(); // fetch dữ liệu từ query
					if ($value['userStatus'] === 'Active') {
						Session::set('login', true);	// Set phiên đăng nhập cho admin
						Session::set('userID', $value['userID']);
						Session::set('userName', $value['userName']);
						Session::set('userPass', $value['userPass']);
						Session::set('userFullName', $value['userFullName']);
						Session::set('userType', $value['userType']);
						header('Location:pages/index.php');
					}
					else
					{
						$alert = "<div class= 'alert alert-danger'>Tài khoản đã bị khóa!</div>";
						return $alert;
					}
					
				}
				else
				{
					$alert = "<div class= 'alert alert-danger'>Sai thông tin đăng nhập!</div>";
					return $alert;
				}
			}
		}
	}

?>