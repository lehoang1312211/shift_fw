<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

        <!-- App title -->
        <title><?php if( isset($title) ) echo $title; ?> | Channel Moto</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/morris/morris.css">

        <!-- Switchery css -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- App CSS -->
        <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Modernizr js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/modernizr.min.js"></script>

    </head>

    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <?php if( isset($top_bar) ) $this->load->view($top_bar); ?>
            <?php if( isset($left_sidebar) ) $this->load->view($left_sidebar); ?>
            <?php if( isset($right_content) ) $this->load->view($right_content); ?>

            <footer class="footer text-right">
                2016 © Shift Framwork.
            </footer>
        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.app.js"></script>


    </body>
</html>