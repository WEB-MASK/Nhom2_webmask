
<?php 
session_start();
if(!isset($_SESSION['log_users']) && !isset($_SESSION['level'])){
    header('Location:login.php');
}

 ?>
<?php $page='ls'; ?>
<?php
include("navbar.php");

?>
<?php
include("sidebar.php");
?>
 
        <!-- main -->
        <div class="main">
            
            <div class="main-content">
                <div class="container-fluid">
                    <div class="panel">
                        <div class="panel-body">  
                            <form id="form-thongke">
                            <div class="col-md-3">
                                       <h3><a href="">Lịch Sử Giao Dịch</a></h3>
                                    </div>
                                <div class="row">
                                    <div class="col-7"></div>
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="col-12">
                                                Mã Giao Dịch
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="magd">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="col-md-2">
                                    <button id="bt_thongke" type="button" class="btn btn-primary">Tìm Kiếm</button>
                                    </div>                                       
                                </div>
                                <!-- endrow -->
                            </form>
                            <script>
                                $(document).ready(function () {
                                    $("#bt_thongke").click(function (e) { 
                                        e.preventDefault();
                                        $a = $("input[name='magd']").val();
                                        if ($a =="") {
                                            alert("Không được bỏ trống!!!!");
                                        } else {
                                            var data = $("#form-thongke").serialize();
                                            $.ajax({
                                                type: "POST",
                                                url: "./load_ls.php",
                                                data: data,
                                                success: function (data) {
                                                    $('#bangdulieutb').html(data);
                                                }
                                            });
                                        }
                                            });
                                });
                            </script>

                        </div>    
                        <div class="bangdulieu">
                        <table class="table" id = "bangdulieutb">
                           
                                
                        <?php
                        // require_once("funconnect.php");
                        $conn=mysqli_connect('localhost','root','','qlkt');
                        // db_connect();
                        $output = '<tr  class="table-success">
                        <th>
                            Mã Giao Dịch
                        </th>
                        <th>
                            Mã Khách Hàng
                        </th>
                        <th>
                            Ngày Giao Dịch
                        </th>
                        <th>
                            Mã Nhân Viên
                        </th>
                        </tr>';
                        $sql="SELECT `IDHoaDon`, `NGHD`, `KHID`, `NhanVienID` FROM `hoadon` WHERE 1";
                        $kq = mysqli_query($conn,$sql); //truyen sql vao mysql
                        while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
                        {
                            $output .= '<tr><td>' .$row[0]. '</td><td>' .$row[2]. '</td><td>' .$row[1]. '</td><td>' .$row[3]. '</td></tr>';
                        }
                        //dong kn
                        mysqli_close($conn);
                        echo $output;
                        ?>
                            
                        </table>
                        </div>
                    </div>
                </div>         
            </div>
        </div>


<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/style.js"></script>
<script src="../js/fontawesome.min.js"></script>
<script src="../js/all.js"></script>
</body>

</html>