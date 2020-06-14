<?php
session_start();
  include 'config.php';
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $sId=session_id();
      if(isset($_POST['firstname'])) $firstname=$_POST['firstname']; 
      if(isset($_POST['phone'])) $phone=$_POST['phone'];
      if(isset($_POST['address_tinh'])) $address_tinh=$_POST['address_tinh'];
      if(isset($_POST['addcomment'])) $Ghichu=$_POST['addcomment']; 
      $tinh=mysqli_query($conn,"SELECT * FROM `tbl_diachi` WHERE `id`='$address_tinh' ");
      $row=mysqli_fetch_assoc($tinh);
      $dia_chi_tinh=$row['address'];
      if(isset($_POST['address1'])) $address1=$_POST['address1'];//địa chỉ huyện
      $huyen=mysqli_query($conn,"SELECT `id`,`tenHuyen` FROM `tbl_huyen` WHERE `id`='$address1' ");
      $row=mysqli_fetch_assoc($huyen);
      $huyen=$row['tenHuyen'];
      if(isset($_POST['deli-address'])) $deli_address=$_POST['deli-address']; //địa chỉ xã
      $makhachhang=$_SESSION['maKhachHang'];
      //echo $diachi;
      //lưu vào csdl
      /*$addthongtin=mysqli_query($conn,"INSERT INTO `tbl_thongtingiaohang` (`maDonHang`,`maKhachHang`,`tenKhachHang`,
      `soDienThoai`,`diaChi`,`trangThai`) VALUES(1,'$makhachhang','$firstname','$phone','$address_tinh',1 ");*/
      $addthongtin=mysqli_query($conn,"
      INSERT INTO `web2`.`tbl_thongtingiaohang1`(`maKhachHang`,`tenNguoiNhan`,`soDienThoai`,`diaChiTinh`,`diaChiHuyen`,`diaChiXa`, `ghiChuKH`, `sessionID`)
      VALUES('$makhachhang','$firstname','$phone','$dia_chi_tinh','$huyen','$deli_address','$Ghichu','$sId')
      ");
      echo'n';
        //  if($addthongtin)
        //  {
          header("location:checkout-shipping.php");
         //} 
  }?>