<?php
include("./php/echoHTML.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./linearicons/style.css">
    <script src="./js/style.js"></script>
    <script src="./js/fontawesome.min.js"></script>
    
    <script src="./js/jquery-3.4.1.js"></script>
    <script src="./js/navbar.js"></script>
    
</head>

<body>
    <!-- nav -->
    <?php
    addNav();
    ?>
    <!-- end nav -->
    <!-- sidebar -->
    <?php
    addSidebar();
    ?>
    <!--End sidebar -->
    <!-- user -->
    <?php
    addUser();
    ?>
    <!-- main -->
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel">
                    <div class="panel-head">
                        <h3 class="home-page">
                            Dashboard
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-download"></i></span>
                                    <p>
                                        <span class="number">1,252</span>
                                        <span class="title">Downloads</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                    <p>
                                        <span class="number">203</span>
                                        <span class="title">Sales</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-eye"></i></span>
                                    <p>
                                        <span class="number">274,678</span>
                                        <span class="title">Visits</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="metric">
                                    <span class="icon"><i class="lnr lnr-user"></i></span>

                                    <p>
                                        <span class="number">35%</span>
                                        <span class="title">Conversions</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="calendar">
                                <iframe src="https://calendar.google.com/calendar/embed?height=300&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FHo_Chi_Minh&amp;src=dHJhbnZhbm5iOTRAZ21haWwuY29t&amp;src=dmkudmlldG5hbWVzZSNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%2322AA99&amp;color=%231F753C"
                                    style="border-width:0" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end panl -->
            </div>
        </div>
    </div>
    
</body>

</html>
<!-- Nhớ z-index -1 thì k thao tác  được
 -->