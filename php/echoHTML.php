<?php
//addNav 
function addNav()
{
    echo '<nav class="navbar">
    <div class="brand">
        <a href="index.php">
            <img src="./img/logo-dark.png" alt="">
        </a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn" onclick="frame(this)">
                <i class="lnr lnr-arrow-left-circle" onclick="myFunction(this)" ></i>
                <!-- <i class="far fa-arrow-alt-circle-left"></i> -->
            </button>
        </div>
        <form action="" class="navbar-form">
            <div class="input-group">
                <input type="text" placeholder="Search dashboard">
                <span class="input-btn">
                    <button type="button">Go</button>
                </span>
            </div>
        </form>
        <div class="navbar-menu">
            <ul class="nav-right">
                <li class="drodown expand">
                    <a href="#" class="dropdown-menu expand">
                        <i class="lnr lnr-frame-expand"></i>

                    </a>
                </li>
                <li class="drodown">
                    <a href="" class="dropdown-menu bell">
                        <i class="lnr lnr-alarm"></i>
                    </a>
                </li>
                <li class="drodown">
                    <a href="">
                        <i class="lnr lnr-question-circle"></i>
                        <span>Help</span>
                        <i class="icon-submenu lnr lnr-chevron-down"></i>

                    </a>
                </li>
                <li class="drodown usedrop" id = "user_dowm">
                    <a href="#" >
                        <img src="./img/user.jpg" alt="Avatar" id="avatar">
                        <span>                     
                        '.$_SESSION['username'].'
                        </span>
                        <i class="icon-submenu lnr lnr-chevron-down" ></i>

                    </a>
                </li>
            </ul>


        </div>
    </div>

</nav>';
}
// addSidebar
function addSidebar($active)
{
    $qltk ="";
    $qlsp ="";
    $index ="";
    if($active == "qltk")
    {
        $qltk .= "active";
    }
    else if ($active == "qlsp") {
        $qlsp .= "active";
    }
    else
    {
        $index .= "active";
    }
    echo '<div id="sidebar-nav" class="sidebar">
    <div class="slimScrolldiv">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li>
                        <a href="index.php"  class="'.$index.'">
                            <i class="lnr lnr-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li id="page">
                        <a href="QLSanPham.php"  class="'.$qlsp.'">
                            <i class="lnr lnr-file-empty"></i>
                            <span>Quản Lý Sản Phẩm</span>
                            <!--<i class="icon-submenu lnr lnr-chevron-left chevron-left"></i>
                            <div id="subPages">
                                <ul class="nav1">
                                    <li>
                                        <a href="">Profile</a>
                                    </li>
                                    <li>
                                        <a href="">Login</a>
                                    </li>
                                    <li>
                                        <a href="">Locksreen</a>
                                    </li>
                                </ul>
                            </div>  -->
                            

                        </a>
                    </li>

                    
                    <li>
                        <a href="QLTaiKhoan.php"  class="'.$qltk.'">
                            <i class="lnr lnr-user"></i>
                            <span>Quản Lý Tài Khoản (admin) </span>
                        </a>
                    </li>
                   
                    
                    <!-- <li>
                    <a href="">
                        <i class="lnr lnr-cog"></i>
                        <span>Panels</span>
                    </a>
                </li> -->
                    
                </ul>

            </nav>
        </div>
    </div>
</div>';
}

function addUser(){
    echo '<div class="user">
    <ul class="dropdown-menu">
        <li>
            <a href="">
                <i class="lnr lnr-user"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li>
            <a href="">
                <i class="lnr lnr-envelope"></i>
                <span>Message</span>
            </a>
        </li>
        <li>
            <a href="">
                <i class="lnr lnr-cog"></i>
                <span>Settings</span>
            </a>
        </li>
        <li>
            <a href="./login.php">
                <i class="lnr lnr-exit"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>';
}
?>