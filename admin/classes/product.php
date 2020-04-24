<?php  

	require_once '../../lib/database.php';
	require_once '../../helpers/format.php';
?>



<?php
	class product
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}


		public function insert_product($data, $files)
		{

			$productName = mysqli_real_escape_string($this->db->link, $data['productName']); //Connect database
			$category = mysqli_real_escape_string($this->db->link, $data['category']);
			$productSize = mysqli_real_escape_string($this->db->link, $data['productSize']);
			$productDesc = mysqli_real_escape_string($this->db->link, $data['productDesc']);
			$productPrice = mysqli_real_escape_string($this->db->link, $data['productPrice']);

			

			//Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
			$permited = array('jpg','jpeg','png','gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr((time()), 0, 10).'.'.$file_ext ;
			$uploaded_image  = 'uploads/'.$unique_image;
			//Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads

			if ($productName == "" || $category == "" || $productSize == "" || $productDesc == ""|| $productPrice == ""|| $file_name == "")
			{
				$alert = "<p style='color: red;'>Không được để trống!</p>";
				return $alert;
			}
			else
			{
				move_uploaded_file($file_temp, $uploaded_image);

				$query = "INSERT INTO tbl_product(productName, catID, productSize, productDesc, productPrice, productImage) VALUES('$productName','$category', '$productSize', '$productDesc', '$productPrice', '$unique_image') ";

				
				$query2 = "UPDATE tbl_category SET catNumberProducts = 1 + (SELECT catNumberProducts FROM tbl_category WHERE catID = '$category')  WHERE catID = '$category' " ; //Tăng số lượng vào catNumberProduct của danh mục tương ứng
				$result2 = $this->db->update($query2);



				$result = $this->db->insert($query);

				if ($result)
				{
					$alert = "<p style='color: green;'>Thêm sản phẩm thành công!</p>";
					return $alert;
				}
				else
				{
					$alert = "<p style='color: red;'>Thêm sản phẩm không thành công!</p>";
					return $alert;
				}
				
			}
		}

		public function show_product()
		{
			$query = "SELECT * FROM tbl_product, tbl_category WHERE tbl_product.catID = tbl_category.catID ORDER BY productID ASC";
			$result = $this->db->select($query);
			return $result;
		}

		public function getproductbyId($id){
			$query = "SELECT * FROM tbl_product WHERE productID = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}


		public function edit_product($data, $files, $id) //Sửa 
		{
			$productName = mysqli_real_escape_string($this->db->link, $data['productName']); //Connect database
			$cate = mysqli_real_escape_string($this->db->link, $data['cate']);
			$productSize = mysqli_real_escape_string($this->db->link, $data['productSize']);
			$productDesc = mysqli_real_escape_string($this->db->link, $data['productDesc']);
			$productPrice = mysqli_real_escape_string($this->db->link, $data['productPrice']);
			$id = mysqli_real_escape_string($this->db->link, $id); //Connect database

			//Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads
			$permited = array('jpg','jpeg','png','gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode('.', $file_name); //Phân tách 2 phần giữa dấu chấm
			$file_ext = strtolower(end($div)); //end: lấy đuôi file, chuyển về string lower
			$unique_image = substr((time()), 0, 10).'.'.$file_ext ; //Random số từ 0-10 tạo tên mới
			$uploaded_image  = 'uploads/'.$unique_image; 
			//Kiểm tra hình ảnh và lấy hình ảnh cho vào folder uploads

			if ($productName == "" || $cate == "" || $productSize == "" || $productDesc == ""|| $productPrice == ""){
				$alert = "<p style='color: red;'>Không được để trống!</p>";
				return $alert;
			}
			else //Kiểm tra việc upload ảnh
			{
				if (!empty($file_name)){
					//Nếu người dùng chọn ảnh

					//Check file
					if ($file_name > 10240){
							$alert = "<p style='color: red;'>Chỉ được upload ảnh có dung lượng dưới 10MB!</p>";
							return $alert;
					}
					else if (in_array($file_ext, $permited) == false) //Chỉ được upload đuôi ảnh trong $permited
					{
							$alert = "<p style='color: red;'>Chỉ được upload:-".implode('.', $permited)."</p>";
							return $alert;
					}
					//Check file

					move_uploaded_file($file_temp, $uploaded_image);

					$query = "UPDATE tbl_product SET 
								productName = '$productName', 
								catID = '$cate',
								productSize = '$productSize',
								productDesc = '$productDesc',
								productPrice = '$productPrice',
								productImage = '$unique_image'

								WHERE productID = '$id' ";

				}else{
					//Nếu người dùng không chọn ảnh
					$query = "UPDATE tbl_product SET 
								productName = '$productName', 
								catID = '$cate',
								productSize = '$productSize',
								productDesc = '$productDesc',
								productPrice = '$productPrice'								

								WHERE productID = '$id' "; //Không có productImage
				}

				
				$result = $this->db->update($query);

				if ($result)
				{
					$alert = "<p style='color: green;'>Sửa sản phẩm thành công!</p>";
					return $alert;
				}
				else
				{
					$alert = "<p style='color: red;'>Sửa sản phẩm không thành công!</p>";
					return $alert;
				}
			}
		}
		

		public function hide_product($id) //Xóa danh mục
		{
			$query = "UPDATE tbl_product SET productStatus = 0 WHERE productID = '$id' ";
			$result = $this->db->update($query);
			

			if ($result)
				{
					$alert = "<p style='color: green;'>Đã ẩn sản phẩm !</p>";
					return $alert;
				}
				else
				{
					$alert = "<p style='color: red;'>Ẩn sản phẩm không thành công!</p>";
					return $alert;
				}
			
		}
		

	}

?>