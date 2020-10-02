<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/raque/default/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 16:24:26 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Revolution Slider CSS -->
    <!-- <link rel="stylesheet" href="themes/revolution/css/settings.css">
        <link rel="stylesheet" href="themes/revolution/css/layers.css">
        <link rel="stylesheet" href="themes/revolution/css/navigation.css"> -->

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/bootstrap..min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/boxicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/odometer.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/nice-select.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/viewer.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/slick.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>themes/css/responsive.css">

    <title>Fulltrader - <?= $judul; ?></title>

    <link rel="icon" type="image/png" href="<?= base_url(); ?>themes/img/favicon.png">
</head>

<body>

    <!-- Preloader -->
    <!--  <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div> -->
    <!-- End Preloader -->

    <header class="header-area p-relative">

        <div class="top-header top-header-style-four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-header-contact-info">
                            <li>
                                Call:
                                <a href="tel:502464674">+502 464 674</a>
                            </li>
                        </ul>

                        <div class="top-header-social">
                            <span>Follow us:</span>
                            <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                            <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                            <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                            <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <ul class="top-header-login-register">
                            <li><a href="<?= base_url(); ?>auth"> <i class='bx bx-log-in'></i> Login</a></li>
                            <li><a href="#"><i class='bx bx-log-in-circle'></i> Register</a></li>
                            <!--                                <li><a href="my_account.php"><i class='bx bx-user-circle'></i> My Account</a></li>-->
                            <li><a href="<?= base_url(); ?>admin/dashboard"><i class='bx bx-user-circle'></i> Admin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-style-three">
            <div class="raque-responsive-nav">
                <div class="container">
                    <div class="raque-responsive-menu">
                        <div class="logo">
                            <a href="<?= base_url(); ?>">
                                <img src="<?= base_url(); ?>themes/img/black-logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="raque-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?= base_url(); ?>">
                            <img src="<?= base_url(); ?>themes/img/black-logo.png" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="<?= base_url(); ?>" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>courses" class="nav-link">Courses</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>blogs" class="nav-link">Blogs</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>about" class="nav-link">About</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>contact" class="nav-link">Contact</a></li>
                            </ul>

                            <div class="others-option">
                                <div class="dropdown language-switcher d-inline-block">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="<?= base_url(); ?>themes/img/us-flag.jpg" class="shadow" alt="image">
                                        <span>Eng <i class='bx bx-chevron-down'></i></span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/germany-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Ger</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/france-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Fre</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/spain-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Spa</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/russia-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Rus</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/italy-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Ita</span>
                                        </a>
                                    </div>
                                </div>

                                <a href="cart.php" class="cart-wrapper-btn d-inline-block">
                                    <i class='bx bx-cart-alt'></i>
                                    <span>01</span>
                                </a>
                                <div class="search-box d-inline-block">
                                    <i class='bx bx-search'></i>
                                </div>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Sticky Navbar Area -->
        <div class="navbar-area navbar-style-three header-sticky">
            <div class="raque-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?= base_url(); ?>">
                            <img src="<?= base_url(); ?>themes/img/black-logo.png" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">

                                <li class="nav-item"><a href="<?= base_url(); ?>" class="nav-link active">Home</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>courses" class="nav-link">Courses</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>blogs" class="nav-link">Blogs</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>about" class="nav-link">About</a></li>
                                <li class="nav-item"><a href="<?= base_url(); ?>contact" class="nav-link">Contact</a></li>
                            </ul>

                            <div class="others-option">
                                <div class="dropdown language-switcher d-inline-block">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="<?= base_url(); ?>themes/img/us-flag.jpg" class="shadow" alt="image">
                                        <span>Eng <i class='bx bx-chevron-down'></i></span>
                                    </button>

                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/germany-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Ger</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/france-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Fre</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/spain-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Spa</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/russia-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Rus</span>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex align-items-center">
                                            <img src="<?= base_url(); ?>themes/img/italy-flag.jpg" class="shadow-sm" alt="flag">
                                            <span>Ita</span>
                                        </a>
                                    </div>
                                </div>

                                <a href="cart.php" class="cart-wrapper-btn d-inline-block">
                                    <i class='bx bx-cart-alt'></i>
                                    <span>01</span>
                                </a>

                                <div class="search-box d-inline-block">
                                    <i class='bx bx-search'></i>
                                </div>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Sticky Navbar Area -->

    </header>




    <!-- Search Box Layout -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>

                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>

                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Box Layout -->