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


		public function login_admin($adminUser,$adminPass)
		{
			$adminUser = $this->fm->validation($adminUser); //Check định dạng ký tự nhập vào
			$adminPass = $this->fm->validation($adminPass);	//Check định dạng ký tự nhập vào

			$adminUser = mysqli_real_escape_string($this->db->link, $adminUser); //Connect database
			$adminPass = mysqli_real_escape_string($this->db->link, $adminPass); //Connect database

			if (empty($adminUser) || empty($adminPass) )
			{
				$alert = "Không được để trống!";
				return $alert;
			}
			else
			{
				$query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1 ";
				$result = $this->db->select($query);

				if ($result != false )
				{
					$value = $result->fetch_assoc(); // fetch dữ liệu từ query
					Session::set('login', true);	// Set phiên đăng nhập cho admin
					Session::set('adminId', $value['adminId']);
					Session::set('adminUser', $value['adminUser']);
					Session::set('adminPass', $value['adminPass']);
					Session::set('adminName', $value['adminName']);
					header('Location:pages/index.php');
				}
				else
				{
					$alert = "Sai thông tin đăng nhập!";
					return $alert;
				}
			}
		}
	}

?>