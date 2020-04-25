<?php include 'header.php'; ?>
<?php include_once '../classes/category.php'; ?>
<?php include_once '../classes/user.php'; ?>

<?php 
    $user = new user();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

        $insertUser = $user->insert_user($_POST);
    }

?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Quản lý người dùng</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="textHeading">Thêm người dùng</span>
                        </div>
                        <div class="panel-body">
                        <?php
                                    if (isset($insertUser)){
                                        echo $insertUser;
                                    }
                        ?>   
                            <form  method="POST" enctype="multipart/form-data" name="formUser" onsubmit="return validationForm()"> <!--enctype để có thể thêm hình ảnh -->
                                <table style="width: 100%;">

                                <tr>
                                    <td class="tabLabel">
                                        <label class="labelAddProduct">Họ tên: </label>
                                    </td>
                                    <td>
                                        <input type="text" name="userFullName" placeholder="Nhập họ tên..." class="inputAddProduct" required autofocus>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="tabLabel">
                                        <label class="labelAddProduct">Email: </label>
                                    </td>
                                    <td>
                                        <input type="email" name="userEmail" placeholder="Nhập email..." class="inputAddProduct" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="tabLabel">
                                        <label class="labelAddProduct">Tên tài khoản: </label>
                                    </td>
                                    <td>
                                        <input type="text" name="userName" placeholder="Nhập tên tài khoản..." class="inputAddProduct" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="tabLabel">
                                        <label class="labelAddProduct">Mật khẩu: </label>
                                    </td>
                                    <td>
                                        <input type="password" name="userPass" placeholder="Nhập mật khẩu..." class="inputAddProduct" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="tabLabel">
                                        <label class="labelAddProduct">Nhập lại mật khẩu: </label>
                                    </td>
                                    <td>
                                        <input type="password" name="userPassAgain" placeholder="Nhập lại mật khẩu..." class="inputAddProduct" required>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td class="tabLabel">
                                        <label class="labelAddProduct">Loại tài khoản: </label>
                                    </td>
                                    <td>
                                        <select class="inputAddProduct" name="userType" required>
                                            <option value="0">----Chọn loại tài khoản----</option>
                                            
                                            <option value="admin">admin</option>
                                            <option value="manager">manager</option>
                                            <option value="user">user</option>

                                        </select>
                                    </td>                   
                                </tr>

                                 </table>
                                 <input type="submit" name="submit" value="Thêm người dùng" class="btn btn-success" style="margin: 10px;">
                            </form>  
                         </div>  
                    </div>
                    <!-- /.row -->
                          <!-- /.col-lg-6 -->
                        
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
        <script type="text/javascript">
            function validationForm(){
                var userType=document.formUser.userType.value; 
                var userPass=document.formUser.userPass.value;  
                var userPassAgain=document.formUser.userPassAgain.value;

                if (userPass == userPassAgain){
                    if (userType == '0'){
                        alert("Chưa chọn loại tài khoản!");
                        return false;
                    }else{
                        return true;
                    }
                    
                }else{
                    alert("Mật khẩu không giống nhau! Mời nhập lại!");
                    return false;
                }
            }

        </script>
        <!--
        <script type="text/javascript">
            function checkPass()
            {
                var userPass = document.getElementsByTagName('userPass');
                var userPassAgain = document.getElementsByTagName('userPassAgain');
                if (userPass != userPassAgain){
                    alert("Mật khẩu không khớp! Mời nhập lại!");
                    document.getElementsByTagName('userPassAgain').style.borderColor = "red";
                    return false;
                }
                else return true;
            }
           
        </script>
        -->
    </body>
</html>
