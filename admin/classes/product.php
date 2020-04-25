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
			$productAmount = mysqli_real_escape_string($this->db->link, $data['productAmount']);
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

			if ($productName == "" || $category == "" || $productSize == "" || $productDesc == ""|| $productPrice == "" || $productAmount == "" || $file_name == "")
			{
				$alert = "<div class= 'alert alert-danger'>Không được để trống!</div>";
				return $alert;
			}
			else
			{
				move_uploaded_file($file_temp, $uploaded_image);

				$query = "INSERT INTO tbl_product(productName, catID, productSize, productDesc, productPrice, productImage, productAmount) VALUES('$productName','$category', '$productSize', '$productDesc', '$productPrice', '$unique_image','$productAmount') ";

				
				//$query2 = "UPDATE tbl_category SET catNumberProducts = $productAmount + (SELECT catNumberProducts FROM tbl_category WHERE catID = '$category')  WHERE catID = '$category' " ; //Tăng số lượng vào catNumberProduct của danh mục tương ứng
				//$result2 = $this->db->update($query2);



				$result = $this->db->insert($query);

				if ($result)
				{
					$alert = "<div class= 'alert alert-success'>Thêm sản phẩm thành công!</div>";
					return $alert;
				}
				else
				{
					$alert = "<div class= 'alert alert-danger'>Thêm sản phẩm không thành công!</div>";
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

		public function getproductbyId($id){ //Dùng để sửa
			$query = "SELECT * FROM tbl_product WHERE productID = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}


		public function edit_product($data, $files, $id) //Sửa 
		{
			$productName = mysqli_real_escape_string($this->db->link, $data['productName']); //Connect database
			$cate = mysqli_real_escape_string($this->db->link, $data['cate']);
			$productSize = mysqli_real_escape_string($this->db->link, $data['productSize']);
			$productAmount = mysqli_real_escape_string($this->db->link, $data['productAmount']);
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

			if ($productName == "" || $cate == "" || $productSize == "" || $productDesc == ""|| $productPrice == "" || $productAmount == ""){
				$alert = "<div class= 'alert alert-danger'>Không được để trống!</div>";
				return $alert;
			}
			else //Kiểm tra việc upload ảnh
			{
				if (!empty($file_name)){
					//Nếu người dùng chọn ảnh

					//Check file
					if ($file_name > 10240){
							$alert = "<div class= 'alert alert-danger'>Chỉ được upload ảnh có dung lượng dưới 10MB!</div>";
							return $alert;
					}
					else if (in_array($file_ext, $permited) == false) //Chỉ được upload đuôi ảnh trong $permited
					{
							$alert = "<div class= 'alert alert-danger' >Chỉ được upload:-".implode('.', $permited)."</div>";
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
								productImage = '$unique_image',
								productAmount = '$productAmount'

								WHERE productID = '$id' ";

					//$query2 = "UPDATE tbl_category SET catNumberProducts = $productAmount  WHERE catID = '$cate' " ; //Tăng số lượng vào catNumberProduct của danh mục tương ứng
					//$result2 = $this->db->update($query2);

				}else{
					//Nếu người dùng không chọn ảnh
					$query = "UPDATE tbl_product SET 
								productName = '$productName', 
								catID = '$cate',
								productSize = '$productSize',
								productDesc = '$productDesc',
								productPrice = '$productPrice',
								productAmount = '$productAmount'							

								WHERE productID = '$id' "; //Không có productImage

					//$query2 = "UPDATE tbl_category SET catNumberProducts = $productAmount  WHERE catID = '$cate' " ; //Tăng số lượng vào catNumberProduct của danh mục tương ứng
					//$result2 = $this->db->update($query2);

				}

				
				$result = $this->db->update($query);

				if ($result)
				{
					$alert = "<div class= 'alert alert-success'>Sửa sản phẩm thành công!</div>";
					return $alert;
				}
				else
				{
					$alert = "<div class= 'alert alert-danger'>Thêm sản phẩm không thành công!</div>";
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
					$alert = "<div class= 'alert alert-success'>Ẩn sản phẩm thành công!</div>";
					return $alert;
				}
				else
				{
					$alert = "<div class= 'alert alert-danger'>Ẩn sản phẩm không thành công!</div>";
					return $alert;
				}
			
		}
		

	}

?>