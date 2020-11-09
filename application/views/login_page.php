<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login users</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>lib/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>lib/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>lib/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>lib/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>lib/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">
    <div class="container">
        <h1 class="page-header text-center">Please Sign-in</h1>

        <form id="logForm" class="form-signin">
            <fieldset>
                <h2 class="form-signin-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" autofocus required>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <button class="btn btn-lg btn-login btn-block" type="submit" id="submit"><span id="logText"></span></button>
                </div>
            </fieldset>
        </form>

        <div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;">
            <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
            <span id="message"></span>
        </div>


    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>lib/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>lib/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#logText').html('Login');
            $('#logForm').submit(function(e) {
                e.preventDefault();
                $('#logText').html('Checking...');
                var user = $('#logForm').serialize();
                var login = function() {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url(); ?>' + 'index.php/user/login',
                        dataType: 'json',
                        data: user,
                        success: function(response) {
                            $('#message').html(response.message);
                            $('#logText').html('Login');
                            if (response.error) {
                                $('#responseDiv').removeClass('alert-success').addClass(
                                    'alert-danger').show();
                            } else {
                                $('#responseDiv').removeClass('alert-danger').addClass(
                                    'alert-success').show();
                                $('#logForm')[0].reset();
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);
                            }
                        }
                    });
                };
                setTimeout(login, 1000);
            });

            $(document).on('click', '#clearMsg', function() {
                $('#responseDiv').hide();
            });
        });
    </script>
</body>

</html>