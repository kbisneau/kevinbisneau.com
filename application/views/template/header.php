<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (isset($title)) ? $title : 'KevinBisneau.com Web Resume'; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/user.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/fonts/font-awesome.min.css');?>">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-default custom-header">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><a class="navbar-brand navbar-link" href="<?php echo base_url('home');?>">KevinBisneau<span>.com </span> </a></div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav links">
                        <li role="presentation"><a href="<?php echo base_url('home');?>">Home </a></li>
                        <li role="presentation"><a href="<?php echo base_url('home/resume');?>">Resume <?php if (isset($badges)) { echo '<span class="badge round">' . $badges . '</span>'; } ?></a></li>
                        <li role="presentation"><a href="#">About Me</a></li>
                        <li role="presentation"><a href="#">Contact </a></li>
                    </ul>
                    <?php if (isset($username)) { ?>
                    <!-- user is logged in -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><?php echo (isset($username)) ? $username : 'Guest';?> <span class="caret"></span><img src="<?php echo base_url('assets/img/avatar2.png');?>" class="dropdown-image"></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <!-- <li><a href="#">Settings </a></li> --> <!-- Future Settings -->
                                <li class="active"><a href="<?php echo base_url('home/logout');?>">Logout </a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php } else { ?> <!-- User not logged in, showing log in button  -->
                      <ul class="nav navbar-nav navbar-right">
                          <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Guest <span class="caret"></span><img src="<?php echo base_url('assets/img/avatar2.png');?>" class="dropdown-image"></a>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                  <!-- <li><a href="#">Settings </a></li> --> <!-- Future Settings -->
                                  <li class="active"><a href="<?php echo base_url('login');?>">Login </a></li>
                              </ul>
                          </li>
                      </ul>
                    <?php } ?> <!--endif user is logged in -->

                </div>
            </div>
        </nav>
    </div>

<div class="content-wrap">
