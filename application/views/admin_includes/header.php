<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Carrier Vision</title>
	
	<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>css/jqtree.css">
    <link href="<?php echo site_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>css/theme.css">
    <script src="<?php echo base_url()?>js/jquery.min.js"></script>
	
    <!--
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/jqtree.css">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/theme.css">
        <script src="js/jquery.min.js"></script>-->
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="<?php echo base_url()?>admin/index" class="navbar-brand">TheCarrierVision</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a class="active" href="<?php echo base_url()?>admin/index" id="themes"><i class="fa fa-home fa-1x"></i> Home </a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>admin/views">View</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>admin/index">Edit</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><input type="text" style="margin-top: 4%;" class="form-control col-lg-8" placeholder="Search"></li>
                <li><a href="login.html"><i class="fa fa-power-off"> </i> Login</a></li>
            </ul>
        </div>
    </div>
</div>