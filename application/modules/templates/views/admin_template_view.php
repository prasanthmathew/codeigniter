<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title<?php
        if (isset($title)) {
            echo $title;
        } else {
            echo $this->config->item('SITE_NAME');
        }
        ?></title>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/css/font.css" type="text/css" cache="false" />
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/css/plugin.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/css/app.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/datatables/datatables.css" type="text/css" />
        <!--[if lt IE 9]>
          <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/ie/respond.min.js" cache="false"></script>
          <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/ie/html5.js" cache="false"></script>
          <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/ie/fix.js" cache="false"></script>
        <![endif]-->
    </head>
    <body>
        <section class="vbox">
            <header class="header bg-black navbar navbar-inverse pull-in">
                <div class="navbar-header nav-bar aside dk">
                    <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-primary">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="#" class="nav-brand" data-toggle="fullscreen"><img src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/images/logo.png"></a>
                    <a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-comment-o"></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                
                                <span class="text-white">Manage Users</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">                
                                <li>
                                    <a href="<?php echo site_url(); ?>mange_users/create_user">Create Users</a>
                                </li>                               
                            </ul>
                        </li>                        
                    </ul>
                    <ul class="nav navbar-nav pull-right"> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle aside-sm dker" data-toggle="dropdown">
                                <span class="thumb-sm avatar pull-left m-t-n-xs m-r-xs">
                                    <img src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/images/avatar.jpg">
                                </span>
                                <?php echo  $this->session->userdata('username');?><b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu animated fadeInLeft">              
                                <li>
                                    <a href="<?php echo site_url(); ?>/auth/logout">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </header>
            <section>      
                <?php
                if (isset($main_content)) {
                    echo $main_content;
                } else {

                    echo $this->config->item('SITE_NAME');
                }
                ?>
                <!------------------------//////////////////////////////--------------------->

                <!-- Dashboard Wrapper End -->

            </section>

        </section>
        <footer class="footer bg-dark">
            <p><small><?php echo $this->config->item('COPY_RIGHT'); ?></small></p>
        </footer>
    </section>
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/bootstrap.js"></script>
    <!-- Sparkline Chart -->
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/charts/sparkline/jquery.sparkline.min.js"></script>
    <!-- App -->
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/app.js"></script>
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/app.plugin.js"></script>
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/app.data.js"></script>
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/slimscroll/jquery.slimscroll.min.js" cache="false"></script>
    <!-- Sparkline Chart -->
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/charts/sparkline/jquery.sparkline.min.js"></script>
    <!-- Easy Pie Chart -->
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
    <!-- Morris -->
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/charts/morris/raphael-min.js" cache="false"></script>
    <script src="<?php echo base_url($this->config->item('BACKEND_ASSETS')); ?>/js/charts/morris/morris.min.js" cache="false"></script>
</body>
</html>