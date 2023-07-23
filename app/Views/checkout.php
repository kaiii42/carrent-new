<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('style.css') ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('css/dark.css') ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('css/font-icons.css') ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('css/animate.css') ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>" type="text/css" />

	<link rel="stylesheet" href="<?= base_url('css/custom.css" type="text/css"') ?> />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Checkout | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Checkout</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url('home/index')?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Checkout</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row col-mb-50 gutter-50">
						<div class="col-lg-12">
							<h3>Halaman Pemesanan</h3>

							<p>Silahkan isi data dibawah sebelum melakukan melakukan pemesanan</p>

							<form id="billing-form" name="billing-form" class="row mb-0" action="#" method="post">

								<div class="w-100"></div>

								<div class="col-12 form-group">
									<label for="billing-form-companyname">Name:</label>
									<input type="text" id="co_name" name="co_name" value="<?php echo $snama->snama; ?>" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="billing-form-address">Address:</label>
									<input type="text" id="billing-form-address" name="billing-form-address" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<input type="text" id="billing-form-address2" name="billing-form-adress" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="billing-form-city">City / Town</label>
									<input type="text" id="billing-form-city" name="billing-form-city" value="" class="sm-form-control" />
								</div>

								<div class="col-md-6 form-group">
									<label for="billing-form-email">Email Address:</label>
									<input type="email" id="billing-form-email" name="billing-form-email" value="" class="sm-form-control" />
								</div>

								<div class="col-md-6 form-group">
									<label for="billing-form-phone">Phone:</label>
									<input type="text" id="billing-form-phone" name="billing-form-phone" value="" class="sm-form-control" />
								</div>

							</form>
						</div>

						<div class="w-100"></div>

						<div class="col-lg-6">
							<h4>Your Orders</h4>

							<div class="table-responsive">
								<table class="table cart">
									<thead>
										<tr>
											<th class="cart-product-thumbnail">&nbsp;</th>
											<th class="cart-product-name">Product</th>
											<th class="cart-product-quantity">Quantity</th>
											<th class="cart-product-subtotal">Total</th>
										</tr>
									</thead>
									<tbody>
										<tr class="cart_item">
											<td class="cart-product-thumbnail">
												<a href="#"><img width="64" height="64" src="<?= base_url('images/shop/thumbs/small/dress-3.jpg') ?>" alt="Pink Printed Dress"></a>
											</td>

											<td class="cart-product-name">
												<a href="#">Pink Printed Dress</a>
											</td>

											<td class="cart-product-quantity">
												<div class="quantity clearfix">
													1x2
												</div>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount">$39.98</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-thumbnail">
												<a href="#"><img width="64" height="64" src="<?= base_url('images/shop/thumbs/small/shoes-2.jpg') ?>" alt="Checked Canvas Shoes"></a>
											</td>

											<td class="cart-product-name">
												<a href="#">Checked Carrent</a>
											</td>

											<td class="cart-product-quantity">
												<div class="quantity clearfix">
													1x1
												</div>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount">$24.99</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-thumbnail">
												<a href="#"><img width="64" height="64" src="<?= base_url('images/shop/thumbs/small/tshirt-2.jpg') ?>" alt="Pink Printed Dress"></a>
											</td>

											<td class="cart-product-name">
												<a href="#">Blue Men Tshirt</a>
											</td>

											<td class="cart-product-quantity">
												<div class="quantity clearfix">
													1x3
												</div>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount">$41.97</span>
											</td>
										</tr>
									</tbody>

								</table>
							</div>
						</div>

						<div class="col-lg-6">
							<h4>Cart Totals</h4>

							<div class="table-responsive">
								<table class="table cart">
									<tbody>
										<tr class="cart_item">
											<td class="border-top-0 cart-product-name">
												<strong>Cart Subtotal</strong>
											</td>

											<td class="border-top-0 cart-product-name">
												<span class="amount">$106.94</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Shipping</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount">Free Delivery</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Total</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount color lead"><strong>$106.94</strong></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="accordion clearfix">
								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-line-minus"></i>
										<i class="accordion-open icon-line-check"></i>
									</div>
									<div class="accordion-title">
										Direct Bank Transfer
									</div>
								</div>
								<div class="accordion-content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-line-minus"></i>
										<i class="accordion-open icon-line-check"></i>
									</div>
									<div class="accordion-title">
										Cheque Payment
									</div>
								</div>
								<div class="accordion-content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-line-minus"></i>
										<i class="accordion-open icon-line-check"></i>
									</div>
									<div class="accordion-title">
										Paypal
									</div>
								</div>
								<div class="accordion-content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>
							</div>
							<a href="#" class="button button-3d float-right">Place Order</a>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget clearfix">

										<img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">

										<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

										<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												795 Folsom Ave, Suite 600<br>
												San Francisco, CA 94107<br>
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
											<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget widget_links clearfix">

										<h4>Blogroll</h4>

										<ul>
											<li><a href="https://codex.wordpress.org/">Documentation</a></li>
											<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="https://wordpress.org/support/">Support Forums</a></li>
											<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
											<li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
											<li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
										</ul>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget clearfix">
										<h4>Recent Posts</h4>

										<div class="posts-sm row col-mb-30" id="post-list-footer">
											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-4 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
												<h5 class="mb-0">Total Downloads</h5>
											</div>

											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
												<h5 class="mb-0">Clients</h5>
											</div>
										</div>

									</div>
								</div>

								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget clearfix">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-prepend">
													<div class="input-group-text"><i class="icon-email2"></i></div>
												</div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
												<div class="input-group-append">
													<button class="btn btn-success" type="submit">Subscribe</button>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
												<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 clearfix">
												<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
													<i class="icon-rss"></i>
													<i class="icon-rss"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-left">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-right">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>

							<div class="clear"></div>

							<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
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
	<script src="<?= base_url('js/jquery.js') ?>"></script>
	<script src="<?= base_url('js/plugins.min.js') ?>"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?= base_url('js/functions.js') ?>"></script>

</body>
</html>