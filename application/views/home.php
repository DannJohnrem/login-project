<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<?php
				$user = $this->session->userdata('user');
				extract($user);
			?>
			<h2>Welcome to Homepage </h2>
			<h4>User Info:</h4>
			<p>Fullname: <?php echo $fname; ?></p>
			<p>Email: <?php echo $email; ?></p>
			<p>Password: <?php echo $password; ?></p>
			<a href="<?php echo base_url(); ?>index.php/user/logout" class="btn btn-danger">Logout</a>
		</div>
	</div>
</div>
</body>
</html>
