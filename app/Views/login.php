<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>style.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('') ?>css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?= base_url('') ?>css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Login - Carrent</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="dark" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="<?= base_url('') ?>" class="standard-logo" data-dark-logo="<?= base_url() ?>demos/pet/images/logo4.png"><img src="<?= base_url('demos/pet/images/logo9.png') ?>" alt="Canvas Logo"></a>
						</div><!-- #logo end -->	

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">

						<ul class="tab-nav tab-nav2 center clearfix">
							<li class="inline-block"><a href="#tab-login">Login</a></li>
							<li class="inline-block"><a href="#tab-register">Register</a></li>
						</ul>

						<div class="tab-container">

							<div class="tab-content" id="tab-login">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="mb-0" action="<?php echo base_url('home/masuk') ?>" method="post">

											<h3>Login to your Account</h3> 

											<?php if (session()->getFlashKeys()): ?>
											        <?php echo session()->getFlashdata('salah'); ?>
											        <?php echo session()->getFlashdata('salahpw'); ?>
											        <?php echo session()->getFlashdata('berhasilbuatakun'); ?>
											        <?php echo session()->getFlashdata('cologindulu'); ?>
											        <?php echo session()->getFlashdata('belumlogin'); ?>
											<?php endif; ?>

											<div class="row">
												<div class="col-12 form-group">
													<label for="login-form-username">Username:</label>
													<input type="text" id="login-form-username" name="username" value="" class="form-control" required="" />
												</div>

												<div class="col-12 form-group">
													<label for="login-form-password">Password:</label>
													<input type="password" id="login-form-password" name="password" class="form-control" required="" />
												</div>

												<div class="col-12 form-group">
													<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>

							<div class="tab-content" id="tab-register">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<h3>Register for an Account</h3>


											<?= form_open('/home/create') ?>

											<div class="col-12 form-group">
												<label for="register-form-name">Name:</label>
												<input type="text" id="register-form-name" name="nama" value="" class="form-control" required="" />
											</div>

											<div class="col-12 form-group">
												<label for="register-form-email">Email Address:</label>
												<input type="text" id="register-form-email" name="email" value="" class="form-control" required="" />
											</div>

											<div class="col-12 form-group">
												<label for="register-form-phone">Phone:</label>
												<input type="text" id="register-form-phone" name="no_telp" value="" class="form-control" required="" />
											</div>

											<div class="col-12 form-group">
												<label for="register-form-username">Choose a Username:</label>
												<input type="text" id="register-form-username" name="username" value="" class="form-control" required="" />
											</div>

											<div class="col-12 form-group">
												<label for="register-form-password">Choose Password:</label>
												<input type="password" id="register-form-password" name="password" value="" class="form-control" required="" />
											</div>

											<div class="col-12 form-group">
												<button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
											</div>

										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-left">
							Copyrights &copy; 2023 Carrent.<br>
						</div>

						<div class="col-md-6 text-center text-md-right">
							

							<div class="clear"></div>

						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?= base_url('') ?>js/jquery.js"></script>
	<script src="<?= base_url('') ?>js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?= base_url('') ?>js/functions.js"></script>

</body>
</html>