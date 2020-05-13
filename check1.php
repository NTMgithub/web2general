<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
include_once 'admin/config/config.php';
 // khởi tạo giá trị 
   $loginname='';
   $loginpassword='';
 //lấy dữ liệu từ form
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
        if(isset($_POST['loginname'])) $loginname=$_POST['loginname'];
        if(isset($_POST['loginpassword'])) $loginpassword=$_POST['loginpassword'];
        //ktra tên và password đã có trong csdl chưa
        $check=mysqli_num_rows(mysqli_query ($conn,"SELECT `tenDangNhap`,`matKhau` FROM `web2`.`tbl_khachhang` WHERE (`tenDangNhap`='$loginname' AND `matKhau`= md5('$loginpassword'))"));
        if($check==1)
        {   
            $_SESSION['ten']=$loginname;
                //$_SESSION['flag']=true;
                //window.location='index.php';
                 header("location: index.php"); 
        }
        else {?>
           <script>
                 alert("Tên đăng nhập hoặc password của bạn bị sai");
                 window.location='registration.php';     
           </script>      
       <?php }
}
 mysqli_close($conn);
 ?>