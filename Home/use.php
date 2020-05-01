
<?php 
session_start();
if(!isset($_SESSION['log_users']) && !isset($_SESSION['level'])){
    header('Location:login.php');
}
if($_SESSION['log_users']!='Admin'){
    header('Location:../index.php');
}

 ?>
<?php $page='use'; ?>
<?php
include("navbar.php");

?>
    <?php
include("sidebar.php");
?>
 <!-- THONG BAO hiện ra khi click vào nút Thêm-->
 <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <form action="">
                    <i class="fa fa-table" aria-hidden="true"></i> &nbsp<a href="AddUser.php">Thêm bằng form</a></br></br>
                    <i class="lnr lnr-file-empty"></i> &nbsp <a href="Exec.php">Thêm bằng file Excel</a></br>
                    
                    </form> 
                    
                </div>

            </div>
        </div>
    </div>
        <!-- main -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="panel">
                        <div class="panel-head">
                            <h3 class="home-page">
                                User Mangement
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col">
                               
                                <div class="TongQ">
                                    <b>Tất cả(5)</b> | <a href="">Admin</a>(2) |
                                    <a href="">NhanVien</a>(3)
                                   
                                </div>
               
                                <div class="col-7 d-flex justify-content-end align-items-center" style="margin-left:auto">
                                    <button class="btn btn-primary " data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Thêm 
                                </div>
              
                            <div class="table table-hover ">
                                        <?php

                                                require('funconnect.php');
                                                global $conn;
                                                db_connect();
                                                $sql='SELECT userid, First_name,Last_name, Password,Email,User_level FROM users';  
                                                                        
                                                $result= mysqli_query($conn,$sql);
                                                echo "<table  method='post' style='width:inherit; margin-top:50px'>";
                                                echo "<thead ><tr>
                                                <th >Username</th>
                                                <th>FirstName</th>
                                                <th>LastName</th>
                                                <th>Email</th>
                                                <th>User Type </th>
                                                <th>Operation</th>
                                                </tr></thead>";
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                while($row = mysqli_fetch_assoc( $result ))
                                                {
                                                
                                                echo "<tr>";
                                                echo '<td>' . $row['userid'] . '</td>';
                                                echo '<td>'. $row['First_name'] . '</td>';
                                                echo '<td >' . $row['Last_name'] . '</td>';
                                                echo '<td >' . $row['Email'] . '</td>';
                                                echo '<td>' . $row['User_level'] . '</td>';
                                                echo '<td><b style="font-size:20px"><a href="EditUs.php?id=' . $row['userid'] . ' "  ><i class="lnr lnr-pencil"></i></a></b>
                                                        <b style="font-size:20px; margin-left:12%"><a  href="deleteUs.php?id=' . $row['userid'] . '"   ><i class="lnr lnr-trash"></i></a></b></td>';
                                                echo "</tr> ";
                                            
                                                }
                                                }

                                                echo "</table>";

                                        ?>
                                    </div>
                                
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