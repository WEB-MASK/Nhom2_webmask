<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../linearicons/style.css">
    <script src="../js/jquery.min.js"></script> 
    <script src="jquery.js"></script>
    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
</head>

<body id="bodymain">
    <nav class="navbar">
        <div class="brand">
            <a href="index.html">
                <img src="../img/logo-dark.png" alt="">
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
                    <!-- <span class="input-btn">
                        <button type="button">Go</button>
                    </span> -->
                    <input type="submit" class="input-btn">
                </div>
            </form>
            <div class="navbar-menu">
                <ul class="nav-right">
                    <li class="drodown expand" title="Expand">
                        <a href="#" class="dropdown-men expand">
                            <i class="lnr lnr-frame-expand"></i>

                        </a>
                    </li>
                    <li class="drodown">
                        <a href="" class="dropdown-men bell">
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
                    
                    <li class="drodown usedrop">
                        <a href="">
                            <img src="../img/user.jpg" alt="Avatar" id="avatar">
                            <span><?php echo $_SESSION['log_users'] ?></span>
                            <i class="icon-submenu lnr lnr-chevron-down"></i>
                            <!-- <ul class="dropdown-menu" style="    border-top: 2px solid #ACB0B5;"> -->
                        <a href="">
                        

                    <li>
                    
      
                </ul>
               

            </div>
            
        </div>
        <ul class="dropdown-menu user">
			<a href="#"><li><i class="lnr lnr-user"></i> <span>My Profile</span></li></a>
			<a href="#"><li><i class="lnr lnr-envelope"></i> <span>Message</span></li></a>
			<a href="#"><li><i class="lnr lnr-cog"></i> <span>Settings</span></li></a>
			<a href="logout.php"><li><i class="lnr lnr-exit"></i> <span>Logout</span></li></a>					
		</ul>

    </nav>
    