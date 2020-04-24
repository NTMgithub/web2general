<?php  

	require_once '../../lib/database.php';
	require_once '../../helpers/format.php';
?>



<?php
	class category
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}


		public function insert_category($catName)
		{
			$catName = $this->fm->validation($catName); //Check định dạng ký tự nhập vào

			$catName = mysqli_real_escape_string($this->db->link, $catName); //Connect database


			if (empty($catName))
			{
				$alert = "<p style='color: red;'>Không được để trống!</p>";
				return $alert;
			}
			else
			{
				$query = "INSERT INTO tbl_category(catName) VALUES('$catName') ";
				$result = $this->db->insert($query);

				if ($result)
				{
					$alert = "<p style='color: green;'>Thêm danh mục thành công!</p>";
					return $alert;
				}
				else
				{
					$alert = "<p style='color: red;'>Thêm danh mục không thành công!</p>";
					return $alert;
				}
			}
		}

		public function show_category()
		{
			$query = "SELECT * FROM tbl_category ORDER BY catID ASC";
			$result = $this->db->select($query);
			return $result;
		}

		public function getcatbyId($id){
			$query = "SELECT * FROM tbl_category WHERE catID = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}

		public function edit_category($catName, $id) //Sửa danh mục
		{
			$catName = $this->fm->validation($catName); //Check định dạng ký tự nhập vào

			$catName = mysqli_real_escape_string($this->db->link, $catName);
			$id = mysqli_real_escape_string($this->db->link, $id); //Connect database


			if (empty($catName))
			{
				$alert = "<p style='color: red;'>Không được để trống!</p>";
				return $alert;
			}
			else
			{
				$query = "UPDATE tbl_category SET catName = '$catName' WHERE catID = '$id' ";
				$result = $this->db->update($query);

				if ($result)
				{
					$alert = "<p style='color: green;'>Sửa danh mục thành công!</p>";
					return $alert;
				}
				else
				{
					$alert = "<p style='color: red;'>Sửa danh mục không thành công!</p>";
					return $alert;
				}
			}
		}

		public function delete_category($id) //Xóa danh mục
		{
			$query = "DELETE FROM tbl_category WHERE catID = '$id' ";
			$result = $this->db->delete($query);

			if ($result)
				{
					$alert = "<p style='color: green;'>Xóa danh mục thành công!</p>";
					return $alert;
				}
				else
				{
					$alert = "<p style='color: red;'>Xóa danh mục không thành công!</p>";
					return $alert;
				}
			
		}
	}

?>