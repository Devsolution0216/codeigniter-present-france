<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome</title>
    <!-- Favicon-->
<!--    <link rel="icon" href="favicon.ico" type="image/x-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="assets/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/plugins/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/plugins/css/themes/all-themes.css" rel="stylesheet" />
</head>
    <body class="theme-blue-grey">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">ATTENDANCE</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php base_url() ?>logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?php echo ($sub_title == "INSERT"? "active":"");?>">
                        <a href="<?php base_url()?>home">
                            <i class="material-icons">brush</i>
                            <span>INSERT</span>
                        </a>
                    </li>
                    <li class="<?php echo ($sub_title == "LIST"? "active":""); ?>">
                        <a href="<?php base_url()?>list">
                            <i class="material-icons">assignment</i>
                            <span>LIST</span>
                        </a>
                    </li>
                </ul>
            </div>
           
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header bg-blue-grey">
                    <h2>
                        <?php echo $sub_title; ?>
                        <small><?php echo $content; ?></small>
                    </h2>
                </div>
                  <?php $this->load->view($content_view); ?>
            </div>
        </div>
    </section>

      <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="assets/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="assets/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Morris Plugin Js -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morrisjs/morris.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


    <!-- Custom Js -->
    <script src="assets/plugins/js/admin.js"></script>
    <script src="assets/plugins/js/pages/ui/notifications.js"></script>
    <script src="assets/plugins/js/pages/forms/basic-form-elements.js"></script>
    <script src="assets/plugins/js/pages/tables/jquery-datatable.js"></script>
    <!-- Demo Js -->
    <script src="assets/plugins/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var placementFrom = $("#btn_punchin").data('placement-from');
            var placementAlign = $("#btn_punchin").data('placement-align');
            var animateEnter = $("#btn_punchin").data('animate-enter');
            var animateExit = $("#btn_punchin").data('animate-exit');
            var colorName = $("#btn_punchin").data('color-name');
            var filename = "";
            $("#btn_punchin").click(function(){
                var ccs = 'punch_in';
                $.ajax({
                    url: '<?php echo base_url(); ?>punch_in',
                    data: {'ccs':ccs},
                    type: 'POST',
                    dataType: 'text',
                    success: function(data){
                        if(data == 'success'){
                                showNotification(colorName, "PUNCH IN", placementFrom, placementAlign, animateEnter, animateExit);
                        } else {
                            showNotification(colorName, "PUNCH FAIL", placementFrom, placementAlign, animateEnter, animateExit);
                        }
                    }
                });
            });

            $("#btn_punchout").click(function(){
                var ccs = 'punch_out';
                $.ajax({
                    url: '<?php echo base_url(); ?>punch_out',
                    data: {'ccs':ccs},
                    type: 'POST',
                    dataType: 'text',
                    success: function(data){
                        if(data == 'success'){
                            showNotification(colorName, "PUNCH OUT", placementFrom, placementAlign, animateEnter, animateExit);
                        } else {
                            showNotification(colorName, "PUNCH FAIL", placementFrom, placementAlign, animateEnter, animateExit);
                        }
                    }
                });
            });

            $("#btn_validate").click(function(){
                var ccs = 'validate';
                var begin_date = $("#begin_date").val();
                var end_date = $("#end_date").val();
                var ab_motive = $("#ab_motive").val();
                if((begin_date == "")||(end_date == "")||(ab_motive =="")){
                    showNotification(colorName, "please confirm fields", placementFrom, placementAlign, animateEnter, animateExit);
                } else {
                $.ajax({
                    url:'<?php base_url() ?>validate',
                    data: {'begin_date':begin_date, 'end_date':end_date,'ab_motive':ab_motive},
                    type: 'POST',
                    dataType: 'json',
                    success: function(data){
                        if(data == 'success'){
                            showNotification(colorName, "ABSENCE SAVED", placementFrom, placementAlign, animateEnter, animateExit);
                        } else {
                            showNotification(colorName, "ABSENCE FAIL", placementFrom, placementAlign, animateEnter, animateExit);
                        }

                    }
                });}
            });

            $('input[type="file"]').change(function(e){
                fileName = e.target.files[0].name;
            });

            $("#up_load").click(function(e){
                var date = $("#expense_date").val();
                var amount = $("#expense_amount").val();
                var motive = $("#expense_amount").val();
                if( document.getElementById("profile_image").files.length == 0 ){
                    txt = "Select a file.";
                    showNotification(colorName, txt, placementFrom, placementAlign, animateEnter, animateExit);
                } else if (date == "" || amount == "" || motive == "") {
                        showNotification(colorName, "please confirm fields", placementFrom, placementAlign, animateEnter, animateExit);
                } else {
                    $("#myform").submit();
                }
            });
        });
    </script>
</body>
</html>