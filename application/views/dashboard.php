<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dynamic Table</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>lib/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>lib/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>lib/assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>lib/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>lib/assets/data-tables/DT_bootstrap.css" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>lib/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>lib/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="container" class="">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo">Admin<span>Dashboard</span></a>
            <!--logo end-->
            <div class="top-nav ">
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="<?php echo base_url(); ?>index.php/user/logout"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="home">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!--multi level menu end-->
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Contact Information Table
                            </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-bordered table-striped" id="example">
                                        <thead>
                                            <tr>
                                                <th class="hidden-phone">Contact Name</th>
                                                <th class="hidden-phone">Relationship</th>
                                                <th class="hidden-phone">Contact Number</th>
                                                <th class="hidden-phone">Email Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($users as $user):
                                            ?>
                                                <tr class="gradeX">
                                                    <td class="center hidden-phone"><?php echo $user['contact_name']; ?></td>
                                                    <td class="center hidden-phone"><?php echo $user['relationship']; ?></td>
                                                    <td class="center hidden-phone"><?php echo $user['contact_number']; ?></td>
                                                    <td class="center hidden-phone"><?php echo $user['email']; ?></td>
                                                </tr>
                                            <?php 
                                                endforeach; 
                                            ?>
                                             
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="hidden-phone">Contact Name</th>
                                                <th class="hidden-phone">Relationship</th>
                                                <th class="hidden-phone">Contact Number</th>
                                                <th class="hidden-phone">Email Address</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2020 &copy; Contact System by Johnrem.
                <a href="#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>lib/assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>lib/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>lib/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>lib/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>lib/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib/assets/data-tables/DT_bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>lib/js/respond.min.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>lib/js/common-scripts.js"></script>

    <!--script for this page only-->

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#example').dataTable({
                "aaSorting": [
                    [4, "desc"]
                ]
            });
        });
    </script>
</body>

</html>