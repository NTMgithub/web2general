<?php  

	require_once '../../lib/database.php';
	require_once '../../helpers/format.php';
?>



<?php
	class user
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function insert_user($data)
		{
			$userName = mysqli_real_escape_string($this->db->link, $data['userName']);
			$userPass = mysqli_real_escape_string($this->db->link, $data['userPass']);
			$userFullName = mysqli_real_escape_string($this->db->link, $data['userFullName']);
			$userEmail = mysqli_real_escape_string($this->db->link, $data['userEmail']);
			$userType = mysqli_real_escape_string($this->db->link, $data['userType']);


			if ($userName == "" || $userPass == "" || $userFullName == "" || $userEmail == ""|| $userType == "" )
			{
				$alert = "<div class= 'alert alert-danger'>Không được để trống!</div>";
				return $alert;
			}
			else
			{
				
				$query = "INSERT INTO tbl_user(userName, userPass, userFullName, userEmail, userType) VALUES('$userName', '$userPass', '$userFullName', '$userEmail', '$userType') ";
				$result = $this->db->insert($query);

				if ($result)
				{
					$alert = "<div class= 'alert alert-success'>Thêm người dùng thành công!</div>";
					return $alert;
				}
				else
				{
					$alert = "<div class= 'alert alert-danger'>Khóa người dùng không thành công!</div>";
					return $alert;
				}
				
			}

		}

		public function show_user()
		{
			$query = "SELECT * FROM tbl_user ORDER BY userID ASC";
			$result = $this->db->select($query);
			return $result;
		}

		public function getUserById($id){ //Dùng để sửa
			$query = "SELECT * FROM tbl_user WHERE userID = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}

		public function changeStatusUser($id)
		{

			$queryActive = "UPDATE tbl_user SET userStatus = 'Active' WHERE userID = '$id' ";
			$queryInactive = "UPDATE tbl_user SET userStatus = 'Inactive' WHERE userID = '$id' ";
			$querySelect = "SELECT * FROM tbl_user WHERE userID = '$id' ";

			$resultSelect = $this->db->select($querySelect);
			$value = $resultSelect->fetch_assoc();
			// Nếu người dùng Active thì Update status inactive và ngược lại
			if ($value['userStatus'] == 'Active')
			{
				
				$resultUpdate = $this->db->update($queryInactive);

				if ($resultUpdate)
				{
					$alert = "<div class= 'alert alert-success'>Khóa người dùng thành công!</div>";
					return $alert;
				}
				else
				{
					$alert = "<div class= 'alert alert-danger'>Khóa người dùng không thành công!</div>";
					return $alert;
				}
			}
			else if ($value['userStatus'] == 'Inactive')
			{
				
				$resultUpdate = $this->db->update($queryActive);

				if ($resultUpdate)
				{
					$alert = "<div class= 'alert alert-success'>Mở khóa người dùng thành công!</div>";
					return $alert;
				}
				else
				{
					$alert = "<div class= 'alert alert-danger'>Mở khóa người dùng không thành công!</div>";
					return $alert;
				}
			}
		}

		public function delete_user($id) //Xóa danh mục
		{
			$query = "DELETE FROM tbl_user WHERE userID = '$id' ";
			$result = $this->db->delete($query);

			if ($result)
				{
					$alert = "<div class= 'alert alert-success'>Xóa người dùng thành công!</div>";
					return $alert;
				}
				else
				{
					$alert = "<div class= 'alert alert-success'>Xóa người dùng không thành công!</div>";
					return $alert;
				}
			
		}

		public function show_usertype()
		{
			$query = "SELECT * FROM tbl_type ORDER BY ID ASC";
			$result = $this->db->select($query);
			return $result;
		}


		public function edit_user($data, $id) //Sửa 
		{
			$userFullName = mysqli_real_escape_string($this->db->link, $data['userFullName']); //Connect database
			$userEmail = mysqli_real_escape_string($this->db->link, $data['userEmail']);
			$userName = mysqli_real_escape_string($this->db->link, $data['userName']);
			$userPass = mysqli_real_escape_string($this->db->link, $data['userPass']);
			$userType = mysqli_real_escape_string($this->db->link, $data['userType']);
			$id = mysqli_real_escape_string($this->db->link, $id); //Connect database


			if ($userFullName == "" || $userEmail == "" || $userName == "" || $userPass == ""|| $userType == "" ){
				$alert = "<div class= 'alert alert-danger'>Không được để trống!</div>";
				return $alert;
			}
			else //Kiểm tra việc upload ảnh
			{
				
					$query = "UPDATE tbl_user SET 
								userFullName = '$userFullName', 
								userEmail = '$userEmail',
								userName = '$userName',
								userPass = '$userPass',
								userType = '$userType'
								WHERE userID = '$id' ";
					
				$result = $this->db->update($query);

				if ($result)
				{
					$alert = "<div class= 'alert alert-success'>Sửa người dùng thành công!</div>";
					return $alert;
				}
				else
				{
					$alert = "<div class= 'alert alert-danger'>Sửa người dùng không thành công!</div>";
					return $alert;
				}
			}
		}
		
	}

?>