<?php
	session_start();
?>

<!DOCTYPE html>
<html class="fixed">
    <!-- Mirrored from www.pcexporters.com/user/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2022 17:51:47 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8" />
        <title>USER LOGIN</title>
        <meta name="keywords" content="CPU, Memory Modules, PC components, IT components, Networking & Storage, Software,USER LOGIN" />
        <meta
            name="description"
            content="pcexporters.com a marketplace and dirctory of IT and PC components  traders, manufacturers, brokers, exporters and importers, It`s a meeting place for buyers and suppliers of IT proudcts,USER LOGIN"
        />
        <meta name="author" content="farooq.khalid" />
        <meta name="title" content="" />
        <meta name="robots" content="" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="English" />
        <meta name="revisit-after" content="1 days" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="../assets_new/vendor/bootstrap/css/bootstrap-min.css" />
        <link rel="stylesheet" href="../assets_new/vendor/animate/animate.compat.css" />
        <link rel="stylesheet" href="../assets_new/vendor/font-awesome/css/all.min.css" />

        <link rel="stylesheet" href="../assets_new/vendor/boxicons/css/boxicons.min.css" />
        <link rel="stylesheet" href="../assets_new/vendor/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="../assets_new/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
        <link rel="stylesheet" href="../assets_new/vendor/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="../assets_new/vendor/jquery-ui/jquery-ui.theme.css" />
        <link rel="stylesheet" href="../assets_new/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="../assets_new/vendor/morris/morris.css" />
        <!--[if IE 9]>
            <script type="text/javascript" src="http://www.pcexporters.com/assets_new/javascripts/placeholder.js"></script>
        <![endif]-->
        <!--[if IE 8]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="http://www.pcexporters.com/assets_new/javascripts/placeholder.js"></script>
            <link rel="stylesheet" type="text/css" href="http://www.pcexporters.com/assets_new/stylesheets/ie8.css" media="screen" />
        <![endif]-->

        <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png" />
        <link rel="manifest" href="http://www.pcexporters.com/site.webmanifest" />

        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "Exporters Networks Limited",
                "description": "Connecting global buyers and supplier of IT and Mobile phone products. ",
                "logo": "https://www.pcexporters.com/assets_new/images/logo-pcx-web.gif",
                "url": "https://www.pcexporters.com",
                "sameAs": "https://twitter.com/pcexporters",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "26-38 Sha Tsui Road,",
                    "addressCountry": "Hong Kong.",
                    "foundingDate": "2004"
                }
            }
        </script>

        <link rel="stylesheet" href="../assets_new/vendor/pnotify/pnotify.custom.css" />
        <link rel="stylesheet" href="../assets_new/vendor/select2/css/select2.css" />
        <link rel="stylesheet" href="../assets_new/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
        <link rel="stylesheet" href="../assets_new/vendor/datatables/media/css/dataTables.bootstrap4.css" />

        <link rel="stylesheet" href="../assets_new/css/theme-min.css" />

        <link rel="stylesheet" href="../assets_new/css/skins/default.css" />

        <link rel="stylesheet" href="../assets_new/css/custom.css" />

        <script src="../assets_new/vendor/modernizr/modernizr.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>

        <script src="../assets_new/vendor/jquery/jquery.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
    </head>
    <body>
        <section class="body">
            <form action="http://www.pcexporters.com/home/search/company" method="post">
                <header class="header">
                    <div class="logo-container">
                        <a href="http://www.pcexporters.com/" class="logo">
                            <img src="../images/logo.gif" alt="pcexporters" />
                        </a>
                        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>

                    <div class="header-right">
                        <input type="hidden" name="category" value="company" />
                        <div class="search nav-form">
                            <div class="input-group input-search" style="text-align: right;">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Search</button>
                                <input type="text" class="form-control" name="search" id="search" placeholder="Search..." required value="" />
                            </div>
                        </div>
                        <span class="separator"></span>
                        <div id="userbox" class="userbox">
                            <a href="#">
                                <div class="profile-info" data-lock-name="">
                                    <span class="name"><a href="login.html">Login</a></span>
                                    <span class="name"><a href="UserSignUp.html">join now</a></span>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <ul class="list-unstyled">
                                    <li class="divider"></li>
                                    <li>
                                        <a role="menuitem" tabindex="-1" href="login.html"><i class="fa fa-user"></i> My Account</a>
                                    </li>
                                    <li>
                                        <a role="menuitem" tabindex="-1" href="http://www.pcexporters.com/"><i class="fa fa-home"></i> My Page</a>
                                    </li>
                                    <li>
                                        <a role="menuitem" tabindex="-1" href="http://www.pcexporters.com/messagecenter"><i class="fa fa-envelope"></i> Message Center</a>
                                    </li>
                                    <li></li>
                                    <li>
                                        <a role="menuitem" tabindex="-1" href="http://www.pcexporters.com/logs"><i class="fas fa-exclamation-triangle"></i> Site Alerts</a>
                                    </li>
                                    <li>
                                        <a role="menuitem" tabindex="-1" href="login.html"><i class="fa fa-power-off"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
            </form>
            <div class="inner-wrapper">
                <aside id="sidebar-left" class="sidebar-left">
                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            Navigation
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <li class="nav-active">
                                        <a class="nav-link" href="http://www.pcexporters.com/">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Home</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-notebooks">
                                            <span class="float-right badge badge-primary">8538</span>
                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                            <span>Notebooks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-tablet-pc-phones">
                                            <span class="float-right badge badge-primary">4457</span>
                                            <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                                            <span>Phones & Tabs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-disk-drives">
                                            <span class="float-right badge badge-primary">5853</span>
                                            <i class="far fa-hdd" aria-hidden="true"></i>
                                            <span>Disk Drives</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-used-computers">
                                            <span class="float-right badge badge-primary">5607</span>
                                            <i class="fa fa-recycle" aria-hidden="true"></i>
                                            <span>Used Computers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-desktops">
                                            <span class="float-right badge badge-primary">5962</span>
                                            <i class="fa fa-desktop" aria-hidden="true"></i>
                                            <span>Desktops</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-monitors">
                                            <span class="float-right badge badge-primary">5572</span>
                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                            <span>Monitors</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-printers">
                                            <span class="float-right badge badge-primary">4936</span>
                                            <i class="fa fa-print" aria-hidden="true"></i>
                                            <span>Printers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-cpu">
                                            <span class="float-right badge badge-primary">6002</span>
                                            <i class="fa fa-square" aria-hidden="true"></i>
                                            <span>CPU</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-accessories">
                                            <span class="float-right badge badge-primary">3786</span>
                                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                                            <span>Accessories</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-software">
                                            <span class="float-right badge badge-primary">1254</span>
                                            <i class="fas fa-code" aria-hidden="true"></i>
                                            <span>Software</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-memory">
                                            <span class="float-right badge badge-primary">6138</span>
                                            <i class="fas fa-memory" aria-hidden="true"></i>
                                            <span>Memory</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-gaming-products">
                                            <span class="float-right badge badge-primary">2162</span>
                                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                                            <span>Gaming Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-graphics-sound">
                                            <span class="float-right badge badge-primary">2041</span>
                                            <i class="fa fa-play-circle" aria-hidden="true"></i>
                                            <span>Graphics & Sound</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-motherboards">
                                            <span class="float-right badge badge-primary">3338</span>
                                            <i class="fas fa-microchip" aria-hidden="true"></i>
                                            <span>Motherboards</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-voip-telephony">
                                            <span class="float-right badge badge-primary">828</span>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>VOIP & Telephony</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-keyboard-mouse">
                                            <span class="float-right badge badge-primary">3227</span>
                                            <i class="far fa-keyboard" aria-hidden="true"></i>
                                            <span>Keyboard & Mouse</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-consumables">
                                            <span class="float-right badge badge-primary">1824</span>
                                            <i class="fa fa-tint" aria-hidden="true"></i>
                                            <span>Consumables</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-multimedia-speakers">
                                            <span class="float-right badge badge-primary">1131</span>
                                            <i class="fa fa-volume-up" aria-hidden="true"></i>
                                            <span>Multimedia Speakers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-cameras">
                                            <span class="float-right badge badge-primary">1951</span>
                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                            <span>Cameras</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-networking-servers">
                                            <span class="float-right badge badge-primary">2941</span>
                                            <i class="fas fa-server" aria-hidden="true"></i>
                                            <span>Networking & Servers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-add-on-cards">
                                            <span class="float-right badge badge-primary">444</span>
                                            <i class="fas fa-ethernet" aria-hidden="true"></i>
                                            <span>Add on Cards</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-casings">
                                            <span class="float-right badge badge-primary">771</span>
                                            <i class="fa fa-minus-square" aria-hidden="true"></i>
                                            <span>Casings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-other-components">
                                            <span class="float-right badge badge-primary">1479</span>
                                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                                            <span>Other Components</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-ups-power-supply">
                                            <span class="float-right badge badge-primary">1497</span>
                                            <i class="fa fa-power-off" aria-hidden="true"></i>
                                            <span>UPS & Power Supply</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-wireless-devices">
                                            <span class="float-right badge badge-primary">2077</span>
                                            <i class="fa fa-wifi" aria-hidden="true"></i>
                                            <span>Wireless Devices</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-usb-bluetooth">
                                            <span class="float-right badge badge-primary">1622</span>
                                            <i class="fab fa-bluetooth" aria-hidden="true"></i>
                                            <span>USB & Bluetooth</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-industrial-pc">
                                            <span class="float-right badge badge-primary">854</span>
                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                            <span>Industrial PC</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-mini-netbooks">
                                            <span class="float-right badge badge-primary">2076</span>
                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                            <span>Mini Netbooks</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-security-products">
                                            <span class="float-right badge badge-primary">293</span>
                                            <i class="fas fa-fingerprint" aria-hidden="true"></i>
                                            <span>Security Products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-used-mobile-phones">
                                            <span class="float-right badge badge-primary">1328</span>
                                            <i class="fa fa-mobile" aria-hidden="true"></i>
                                            <span>Used Mobile Phones</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-video-equipment">
                                            <span class="float-right badge badge-primary">224</span>
                                            <i class="fa fa-film" aria-hidden="true"></i>
                                            <span>Video Equipment</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-home-appliances">
                                            <span class="float-right badge badge-primary">328</span>
                                            <i class="fas fa-blender-phone" aria-hidden="true"></i>
                                            <span>Home Appliances</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="http://www.pcexporters.com/buyers-and-suppliers-of-smart-gadgets">
                                            <span class="float-right badge badge-primary">421</span>
                                            <i class="fas fa-robot" aria-hidden="true"></i>
                                            <span>Smart Gadgets</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </aside>
                <script type="03a2c8fe2c14437a45320f22-text/javascript">
                    // Maintain Scroll Position
                    if (typeof localStorage !== 'undefined') {
                        if (localStorage.getItem('sidebar-left-position') !== null) {
                            var initialPosition = localStorage.getItem('sidebar-left-position'),
                                sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                            sidebarLeft.scrollTop = initialPosition;
                        }
                    }
                </script>

                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>User Login</h2>
                        <div class="right-wrapper text-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a itemprop="item" href="http://www.pcexporters.com/">
                                        <i class="fas fa-home-user"></i>
                                    </a>
                                </li>
                                <li><span>User Login&nbsp;&nbsp;&nbsp;</span></li>
                            </ol>
                        </div>
                    </header>

                    <div class="row">
                        <div class="col-md-12">
                            <form action="loginaction.php" method="post" id="form">
                                <section class="body-sign">
                                    <div>
                                        <div class="card card-sign">
                                            <div class="card-title-sign mt-xl text-right">
                                                <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mb-3">
                                                    <label>Email Address</label>
                                                    <div class="input-group input-group-icon">
                                                        <input name="email" id="comp_email" type="text" class="form-control input-lg" required />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <div class="clearfix">
                                                        <label class="pull-left">Password</label>
                                                    </div>
                                                    <div class="input-group input-group-icon">
                                                        <input name="password" id="password" type="password" class="form-control input-lg" data-rule-required="true" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-lock"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8"></div>
                                                    <div class="col-sm-4 text-right">
                                                        <button type="submit" name="login" class="btn btn-primary mt-2">Sign In</button>
                                                    </div>
                                                </div>
                                                <p class="text-center" style="margin=left: -5px;">
                                                    Don't have an account yet? <a href="UserSignUp.html">Sign Up!</a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="forget_password.html">Forgot Password?</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                    <script type="03a2c8fe2c14437a45320f22-text/javascript">
                        jQuery(function() {
                        	jQuery("#expiry_date").datepicker({dateFormat: 'yy-mm-dd'});
                        });
                    </script>
                </section>
            </div>

            <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                    <div class="nano-content">
                        <a href="#" class="mobile-close visible-xs"> Collapse <i class="fa fa-chevron-right"></i> </a>
                        <div class="sidebar-right-wrapper">
                            <div class="sidebar-widget widget-calendar">
                                <h6>Upcoming Tasks</h6>
                                <div data-plugin-datepicker data-plugin-skin="dark"></div>
                                <ul>
                                    <li>
                                        <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                        <span>Company Meeting</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget widget-friends">
                                <h6>Friends</h6>
                                <ul>
                                    <li class="status-online">
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-online">
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                    <li class="status-offline">
                                        <div class="profile-info">
                                            <span class="name">Joseph Doe Junior</span>
                                            <span class="title">Hey, how are you?</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <script src="../assets_new/vendor/jquery/jquery.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/jquery-browser-mobile/jquery.browser.mobile.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/popper/umd/popper.min.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/bootstrap/js/bootstrap.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/nanoscroller/nanoscroller.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js" defer type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/common/common.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/magnific-popup/jquery.magnific-popup.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/jquery-placeholder/jquery.placeholder.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>

            <script src="../assets_new/vendor/pnotify/pnotify.custom.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/jquery-validation/jquery.validate.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/javascripts/forms/examples.validation.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKa3Go0Lw7_fl71S72FGidpEvYhQ57oW0" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script defer src="../assets_new/vendor/gmaps/gmaps.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>

            <script src="../assets_new/js/theme.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>

            <script src="../assets_new/javascripts/theme.custom86d3.js?randId=6779" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/js/custom.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>

            <script src="../assets_new/js/theme.init.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>

            <script src="../assets_new/vendor/select2/js/select2.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/datatables/media/js/jquery.dataTables.min.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/datatables/media/js/dataTables.bootstrap4.min.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>

            <script src="../assets_new/javascripts/pages/examples.mediagallery.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/js/examples/examples.modals.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/js/examples/examples.gmap.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/js/examples/examples.datatables.default.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/js/examples/examples.datatables.row.with.details.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <script src="../assets_new/js/examples/examples.datatables.tabletools.js" type="03a2c8fe2c14437a45320f22-text/javascript"></script>
            <div class="row">
                <div class="col-md-12">
                    <section class="card" style="margin-bottom: 0px;">
                        <div class="card-body footer-special">
                            <div class="row">
                                <div class="col-md-3">
                                    <strong>18 years of</strong>
                                    <span class="alternative-font">excellence</span>
                                    <br />

                                    <span>
                                        <a href="https://twitter.com/pcexporters" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @pcexporters</a>
                                        <script type="03a2c8fe2c14437a45320f22-text/javascript">
                                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                                        </script>
                                    </span>
                                </div>

                                <div class="col-md-9 p-0 row">
                                    <div class="col-md-3 p-0" style="padding: 0px;">
                                        <a href="https://itunes.apple.com/us/app/pcexporters/id1242826132?ls=1&amp;mt=8">
                                            <img src="../images/Apple-store-icon.png" width="200px" />
                                        </a>
                                    </div>
                                    <div class="col-md-3" style="padding: 0px;">
                                        <a href="https://play.google.com/store/apps/details?id=com.pcexporters.pcexporters&amp;hl=en">
                                            <img src="../images/google-play-icon.png" width="200px" />
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="float-right"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-footer-custom">
                                            <div class="float-right">
                                                <div class="row">
                                                    <div class="footer_nav">
                                                        <ul>
                                                            <li class="active"><a href="http://www.pcexporters.com/">Home</a><span>|</span></li>
                                                            <li><a href="http://www.pcexporters.com/home/about_us">About Us</a><span>|</span></li>

                                                            <li><a href="http://www.pcexporters.com/home/BuyersHome">Buyer Directory</a><span>|</span></li>
                                                            <li><a href="http://www.pcexporters.com/want-to-buy-all">Want to Buy</a><span>|</span></li>
                                                            <li><a href="http://www.pcexporters.com/want-to-sell-all">Want to Sell </a><span>|</span></li>

                                                            <li><a href="http://www.pcexporters.com/home/cms/terms-of-use">Terms of use:</a><span>|</span></li>

                                                            <li>
                                                                <a href="http://www.pcexporters.com/sitemap.html">Sitemap</a>
                                                            </li>
                                                            <li><span>|</span><a href="http://www.pcexporters.com/home/contact_us">Contact Us</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row" style="float: right; font-size: 11px; color: #a0a6b4;">
                                                    Copyright © 2021 pcexporters.com. All right reserved. Powered By Exporters Networks Limited.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <script type="03a2c8fe2c14437a45320f22-text/javascript">
                $( function() {
                    jQuery( "#search" ).autocomplete({
                        source: "/home/searchOptions"
                    });
                } );
            </script>
        </section>
        <script type="03a2c8fe2c14437a45320f22-text/javascript">
            $(function() {
                jQuery('.footer-special').css('margin-left','300px');
            });
        </script>
        <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="03a2c8fe2c14437a45320f22-|49" defer=""></script>
        <script src="../assets_new/vendor/font-awesome/js/all.min.js" data-cf-settings="" defer=""></script>
    </body>

    <!-- Mirrored from www.pcexporters.com/user/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jun 2022 17:52:20 GMT -->
</html>