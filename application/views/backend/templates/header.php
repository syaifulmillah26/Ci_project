<?php is_logged_in() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Admin - <?= $judul;  ?></title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?= base_url(); ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- page specific plugin styles -->
    <!--		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui.custom.min.css" />-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.gritter.min.css" />
    <!--		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/select2.min.css" />-->
    <!--		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-datepicker3.min.css" />-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-editable.min.css" />
    <!-- basic scripts -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>

    <!-- Tinymce -->
    <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>

    <!-- text fonts -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-rtl.min.css" />

    <!-- my style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/sweetalert2.css" />



    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?= base_url(); ?>assets/js/ace-extra.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/sweetalert2.js"></script>
    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>themes/img/favicon.png">
</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default          ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="<?= base_url(); ?>admin/dashboard" class="navbar-brand">
                    <small>
                        <i class="fa fa-leaf"></i>
                        Fulltrader
                    </small>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="green dropdown-modal">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                            <span class="badge badge-success">5</span>
                        </a>

                        <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                            <li class="dropdown-header">
                                <i class="ace-icon fa fa-envelope-o"></i>
                                5 Messages
                            </li>

                            <li class="dropdown-content">
                                <ul class="dropdown-menu dropdown-navbar">

                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="<?= base_url(); ?>assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
                                            <span class="msg-body">
                                                <span class="msg-title">
                                                    <span class="blue">Fred:</span>
                                                    Vestibulum id penatibus et auctor ...
                                                </span>

                                                <span class="msg-time">
                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                    <span>10:09 am</span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-footer">
                                <a href="inbox.html">
                                    See all messages
                                    <i class="ace-icon fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="javascript:void()0" class="dropdown-toggle">
                            <img class="nav-user-photo" src="<?= base_url(); ?>assets/images/avatars/<?= $user['image'] ?>" alt="Jason's Photo" />
                            <span class="user-info">
                                <small>Welcome,</small>
                                <?= $user['name'] ?>
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


                            <li>
                                <a href="<?= base_url();  ?>profile">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="<?= base_url();  ?>auth/logout">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>