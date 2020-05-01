
<?php 
session_start();
if(!isset($_SESSION['log_users']) && !isset($_SESSION['level'])){
header('Location:login.php');
}

?>
<?php $page='hoadon'; ?>
<?php
include("navbar.php");

?>
<?php
include("sidebar.php");
?>


<!-- alert -->
<div class="modal" tabindex="-1" role="dialog" id="myModal">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Pay Bill</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
        <b>Tổng Tiền : </b> <p id = "tongtien"></p>
    </div>

</div>
</div>
</div>
<!-- main -->
<div class="main">

<div class="main-content">
<h3 class="page-title" style="margin-top: 0;margin-bottom: 30px;font-weight: 300;padding-left: 15px;">Bill</h3>
    <div class="container-fluid">
        
        
        <div class="panel">
            
            <!-- <div class="panel-head">
                <h3 class="home-page">
                    Bill 
                </h3>
            </div>
                -->
            <div class="panel-body">
            
                        <!-- <div class="form-group row">
                            <label  class="col-sm-5 col-form-label">Số Lượng</label>
                            <div >
                                <select id="TenKhauTrang"  class="form-control" name="TenKhauTrang"  >
                                <option value="">0</option>  
                                </select>
                                
                            </div> 

                        </div>  -->
                        

                <div class="row">
                    
                    <div class="col-md-3"  style="background: aliceblue;">
                        <h5 style="font-size: 18px;font-weight: 300;padding-top: 20px;padding-bottom: 20px;">
                                
                            Customer Information
                        </h5> 
                        <span class="badge badge-default" style="font-size: 14px;font-weight: 400; ">Họ Tên</span>
                        <input class="form-control mr-sm-2" type="text" style="margin-bottom:10px" placeholder="Name">
                        <span class="badge badge-default" style="font-size: 14px;font-weight: 400;">Địa Chỉ</span>
                        <input class="form-control mr-sm-2" type="text"  style="margin-bottom:10px" placeholder="Adress">
                        <span class="badge badge-default" style="font-size: 14px;font-weight: 400;">Điện thoại</span>
                        <input class="form-control mr-sm-2" type="text"  style="margin-bottom:10px" placeholder="Phone">
                        <span class="badge badge-default" style="font-size: 14px;font-weight: 400;">Ngày Sinh</span>

                        <div class="input-group">
                            <input type="date" placeholder="Phone">   
                        </div>
                    </div>

                    <div class="col-md-9">
                    <h4 class="heading" style="padding-bottom: 10px;margin-bottom: 20px;border-bottom: 1px solid #eaeaea;  padding: 20px 25px;  font-size: 18px;font-weight: 400;color: #676a6d;">Pay The Bill</h4>
                    <div class="row" style="margin-right:15px; margin-left:15px">
                        <div class="col-md-6">
                        <div class="form-group row" style="margin-top:20px" >
                            <label  class="col-md-5 col-form-label" >Thương Hiệu</label>
                            <div class="hkt" >
                                <select id="HieuKhauTrang"  class="form-control" name="HieuKhauTrang"  >
                                    <option value="" > Thương Hiệu</option>
                                    
                                    <?php 
                                        require('funconnect.php');
                                        global $conn;
                                        db_connect();
                                        $sql="select*from nhacungcap";
                                        $mysql=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_array($mysql)){
                                            ?>
                                            <option value="<?php echo $row['idNCC']; ?>"><?php echo $row['TenNCC'] ?></option>
                                            <?php
                                        }
                                    ?>   
                                </select>
                                
                            </div> 
                        </div>  
                        
                        <div class="form-group row">
                            <label  class="col-md-5 col-form-label">Tên Khẩu Trang</label>
                            <div class="hkt">
                                <select id="TenKhauTrang"  class="form-control" name="TenKhauTrang"  >
                                <option value=""> Tên Khẩu Trang</option>
                                    
                                </select>
                                
                            </div> 
                        </div>  
                        

                        </div>
                        <div class="col-md-6">
                        <div class="form-group row" method="post">
                            <label  class="col-md-3 col-form-label" style="margin-top:50px !important"> Số Lượng</label>
                            <div class="hkt">
                            <input type="text" id = "sl" class="form-control" style="width:40%; margin-top:40px">
                                <!-- <select id="SoLuong"  class="form-control" name="SoLuong" style="margin-top:40px" >
                                <option value="">10</option>
                                    
                                </select> -->
                                
                                
                            </div> 
                            <div class="col-md-2" >
    
                                <button id = "them" class="btn btn-primary" name="them"  style="margin-top:40px;margin-left:80px">
                                    Thêm
                                </button>
                            </div>
                                                    
                            
                            
                        </div>  

                        </div>
                    </div>
                    <table class="table" id = "tb_hoadon"style="margin-left:15px;margin-top:40px">
                            <thead>
                                <tr>
                                    <th>
                                        Thương Hiệu
                                    </th>
                                    <th>
                                        Tên Khẩu Trang
                                    </th>
                                    <th>
                                        Số Lượng
                                    </th>
                                    <th>
                                        Đơn Gía
                                    </th>
                                    <th>
                                        Thành Tiền
                                    </th>
                                </tr>
                            </thead>

                            <tbody id="Gia">
                            </tbody>
                                
                            
                        </table> 
                        
                        <button id = "bt_thanhtoan"type="button" class="btn btn-primary"style="margin-left:85%">Thanh Toán</button>
                    
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