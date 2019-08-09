<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>User Role Practice</title>
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <link rel="stylesheet" href="<?php echo base_url('static/css/bootstrap.min.css'); ?>">
          <link rel="stylesheet" href="<?php echo base_url('static/css/font-awesome.min.css'); ?>">
          <link rel="stylesheet" href="<?php echo base_url('static/css/ionicons.min.css'); ?>">
          <link rel="stylesheet" href="<?php echo base_url('static/css/AdminLTE.min.css'); ?>">
          <link rel="stylesheet" href="<?php echo base_url('static/css/all.css'); ?>">
          <link rel="stylesheet" href="<?php echo base_url('static/css/skins/skin-blue.min.css'); ?>">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
     </head>
     <body class="hold-transition skin-blue sidebar-mini">
          <div class="wrapper">
               <header class="main-header">
                    <a href="<?php echo base_url(); ?>" class="logo">
                         <span class="logo-mini"><b>A</b>LT</span>
                         <span class="logo-lg"><b>Admin</b>LTE</span>
                    </a>
                    <nav class="navbar navbar-static-top" role="navigation">
                         <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                              <span class="sr-only">Toggle navigation</span>
                         </a>
                         <div class="navbar-custom-menu">
                              <ul class="nav navbar-nav">
                                   <li class="dropdown user user-menu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                             <img src="<?php echo base_url('static/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
                                             <span class="hidden-xs"><?php echo ucwords($this->session->userdata('name')); ?></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                             <li class="user-header">
                                                  <img src="<?php echo base_url('static/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
                                                  <p>Alexander Pierce - Web Developer<small>Member since Nov. 2012</small></p>
                                             </li>
                                             <li class="user-footer">
                                                  <div class="pull-left">
                                                       <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                  </div>
                                                  <div class="pull-right">
                                                       <a href="<?php echo base_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                                  </div>
                                             </li>
                                        </ul>
                                   </li>
                              </ul>
                         </div>
                    </nav>
               </header>
               <aside class="main-sidebar">
                    <section class="sidebar">
                         <div class="user-panel">
                              <div class="pull-left image">
                                   <img src="<?php echo base_url('static/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
                              </div>
                              <div class="pull-left info">
                                   <p><?php echo ucwords($this->session->userdata('name')); ?></p>
                              </div>
                         </div>
                         <ul class="sidebar-menu" data-widget="tree">
                              <li class="header">HEADER</li>
                              <?php $current = $this->router->fetch_class(); ?>
                              <?php foreach($navigation as $key => $value):?>
                                   <?php if($value['has_sub'] == 1): ?>
                                        <li class="treeview">
                                             <a href="#"><i class="<?php echo $value['module_icon']; ?>"></i> <span><?php echo $value['module_name']; ?></span>
                                                  <span class="pull-right-container">
                                                       <i class="fa fa-angle-left pull-right"></i>
                                                  </span>
                                             </a>
                                             <ul class="treeview-menu">
                                                  <li><a href="#">Link in level 2</a></li>
                                                  <li><a href="#">Link in level 2</a></li>
                                             </ul>
                                        </li>
                                   <?php else: ?>
                                        <li <?php echo ($current == $value['module_url']) ? 'class="active"' : ''; ?>><a href="<?php echo base_url($value['module_url']); ?>"><i class="<?php echo $value['module_icon']; ?>"></i> <span><?php echo $value['module_name']; ?></span></a></li>
                                   <?php endif; ?>
                              <?php endforeach; ?>
                         </ul>
                    </section>
               </aside>
               <div class="content-wrapper">
                    <section class="content-header">
                         <h1><?php echo ucwords($this->router->fetch_class()); ?></h1>
                    </section>
                    <section class="content container-fluid">
