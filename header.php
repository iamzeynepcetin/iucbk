<!DOCTYPE html>
<html lang="tr">

<head>
<style> 
.social-margin{
	margin-left:2rem;
	margin-bottom:0.5rem;;
	color:white;
}

</style>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>İUCBK</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
	<link href="css/all.min.css" rel="stylesheet">




</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area clearfix">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.php"><img src="img/logo/logo.png" alt="logo"></a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item <?php if(basename($_SERVER["SCRIPT_NAME"])=="index.php") echo "active";?> "><a class="nav-link" href="index.php">ANASAYFA</a></li>
                                    <li class="nav-item <?php if(basename($_SERVER["SCRIPT_NAME"])=="hakkimizda.php") echo "active"; ?>"><a class="nav-link" href="hakkimizda.php">HAKKIMIZDA</a></li>
                                    <li class="nav-item"><a class="nav-link" href="bilfest/index.html">BİLFEST'20</a></li>
                                    <li class="nav-item <?php if(basename($_SERVER["SCRIPT_NAME"])=="etkinlikler.php") echo "active";?>"><a class="nav-link" href="etkinlikler.php">ETKİNLİKLERİMİZ</a></li>
									<li class="nav-item <?php if(basename($_SERVER["SCRIPT_NAME"])=="bize-katilin.php") echo "active";?>"><a class="nav-link" href="bize-katilin.php">BİZE KATILIN!</a></li>


                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->