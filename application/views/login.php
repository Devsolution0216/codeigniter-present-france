<?php
    $this->load->helper('url');
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign in </title>
    <!-- Favicon -->
    <link rel="icon" href="" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet">

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="assets/plugins/css/style.css" rel="stylesheet">

    <script src="assets/plugins/jquery/jquery.min.js"></script>
</head>
<body class="login-page ls-closed" data-gr-c-s-loaded="true">
<div class="login-box">
    <div class="logo">
        <a href="#">
            <b>Sign In</b>
        </a>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" novalidate="novalidate">
                <div class="msg">sign in to start your session</div>
                <div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">person</i>
						</span>
                    <div class="form-line">
                        <input class="form-control" type="text" id="username" name="username" placeholder="Username" required="" autofocus="" aria-required="true" >
                    </div>
                </div>
                <div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock</i>
						</span>
                    <div class="form-line">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Password" aria-required="true" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
<!--                        <input id="remember_me" class="filled-in chk-col-pink" type="checkbox" name="remember_me">-->
<!--                        <label for="remember_me">-->
<!--                            Remember Me-->
<!--                        </label>-->
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-primary m-t-15 waves-effect" id="login" type="button">SIGN IN</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
<!--                    <div class="col-xs-6">-->
<!--                        <a href="javascript:void(0);">Register Now!</a>-->
<!--                    </div>-->
<!--                    <div class="col-xs-6 align-right">-->
<!--                        <a href="javascript:void(0);">Forgot Password?</a>-->
<!--                    </div>-->
                </div>
            </form>
        </div>
    </div>
</div>

<script >
    $(document).ready(function(){
        $('#login').click(function(){
            var username = $('#username').val();
            var password = $('#password').val();
            $.ajax({
                url: '<?php base_url(); ?>login_action',
                data: {'username': username, 'password': password},
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if (data=='success') {
                        location.href = '<?php base_url()?>home';
                    }
                    else
                    {
                        alert("fail");
                    }
                }
            });
        });
    });
</script>
<!-- jQuery core js -->
<!-- Bootstrap core js-->
<script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
<!-- waves Effect plugin js -->
<script src="assets/plugins/node-waves/waves.js"></script>
<!-- Validation plugin js -->
<script src="assets/plugins/jquery-validation/jquery.validate.js"></script>
<!-- Custom js -->
<script src="assets/plugins/js/admin.js"></script>
<script src="assets/plugins/js/pages/examples/sign-in.js"></script>
</body>
</html>
