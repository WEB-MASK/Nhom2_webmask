
<?php 
session_start();
if(!isset($_SESSION['log_users']) && !isset($_SESSION['level'])){
    header('Location:login.php');
}
if($_SESSION['log_users']!='Admin'){
    header('Location:../index.php');
}
 ?>
<?php $page='thongke'; ?>
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
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="">Bảng Tổng Kết Doanh Thu</a>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <div class="col-12">
                                                Năm
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="nam" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-md-2">
                                        <div class="row">
                                            <div class="col-12">
                                                Tháng
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="thang" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-md-2">
                                    <button id="bt_thongke" type="button" class="btn btn-primary">Xem</button>
                                    </div>                                       
                                </div>
                                <!-- endrow -->
                            </form>
                            <script>
                                $(document).ready(function () {
                                    $("#bt_thongke").click(function (e) { 
                                        e.preventDefault();
                                        $a = $("input[name='nam']").val();
                                        $a = $("input[name='thang']").val();
                                        if ($a =="") {
                                            alert("Không được bỏ trống!!!!");
                                        } else {
                                            var data = $("#form-thongke").serialize();
                                            $.ajax({
                                                type: "POST",
                                                url: "./load_thongke.php",
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
                        Ngày
                        </th>
                        <th>
                            Doanh Thu
                        </th>
                        </tr>';
                        $sql="SELECT SUM(khautrang.Gia*cthd.SoLuong), hoadon.NGHD FROM hoadon,khautrang,cthd WHERE hoadon.IDHoaDon = cthd.IDHoaDon AND cthd.KhauTrangID = khautrang.KhauTrangID GROUP BY hoadon.NGHD";
                        $kq = mysqli_query($conn,$sql); //truyen sql vao mysql
                        while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
                        {
                            $output .= '<tr><td>' .$row[1]. '</td><td>' .$row[0]. '</td></tr>';
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
        </div>


<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/style.js"></script>
<script src="../js/fontawesome.min.js"></script>
<script src="../js/all.js"></script>
</body>

</html>