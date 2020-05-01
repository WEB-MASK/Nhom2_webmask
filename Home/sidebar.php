<div id="sidebar-nav" class="sidebar">
        <div class="slimScrolldiv">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li class="<?php if($page=='dashboard'){echo 'active';} ?>">
                            <a href="../index.php" class="mau">
                                <i class="lnr lnr-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="../QLSanPham.php" class="mau">
                            <i class="lnr lnr-book"></i>
                                <span>Quản Lý Sản Phẩm</span>
                            </a>
                        </li>
                        <li class="<?php if($page=='exemask'){echo 'active';} ?>" >
                            <a href="exemask.php" class="mau"> 
                            <i class="lnr lnr-map"></i>
                                <span>Exec Sản Phẩm</span>
                            </a>
                        </li>
                        <li class="<?php if($page=='hoadon'){echo 'active';} ?>">
                            <a href="hoadon.php" class="mau">
                            <i class="lnr lnr-calendar-full"></i>
                                <span>Thanh Toán</span>
                            </a>
                        </li>
                        <li class="<?php if($page=='thongke'){echo 'active';} ?>">
                            <a href="thongke.php" class="mau">
                            <i class="lnr lnr-calendar-full"></i>
                                <span>Thống Kê</span>
                            </a>
                        </li>
                        <li class="<?php if($page=='ls'){echo 'active';} ?>">
                            <a href="lichsu.php" class="mau">
                            <i class="lnr lnr-calendar-full"></i>
                                <span>Lịch Sử giao dịch</span>
                            </a>
                        </li>
                        <!-- <li class="<?php if($page=='use'){echo 'active';} ?>" >
                            <a href="use.php" class="mau"> 
                            <i class="lnr lnr-users"></i>
                                <span>User</span>
                            </a>
                        </li> -->
                        
                        <li>
                        <a href="../QLTaiKhoan.php"  class="'.$qltk.'">
                            <i class="lnr lnr-user"></i>
                            <span>Quản Lý Tài Khoản (admin) </span>
                        </a>
                    </li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>