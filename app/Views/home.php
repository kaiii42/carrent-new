		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header" style="background: url(<?= base_url()?>demos/pet/images/banner5.png); ) center right no-repeat; background-size: cover;">
			<div class="slider-inner">

				<div class="vertical-middle">
					<div class="container py-5">
						<div class="emphasis-title dark m-0">


							<?php

							if(session('logged_in') == TRUE){
								# code...
							
							?>

							<h1 style="font-size: 50px; line-height: 1.4; font-weight: 600; text-shadow: 1px 1px 1px rgba(0,0,0,0.5);">Hello,<br> <?php echo session('nama'); ?> !</h1><br>
							<a href="#" class="button button-large button-rounded ml-0">My Order</a><span class="leftmargin-sm">

							<?php } 
							
							else{


							?>

							<h1 style="font-size: 50px; line-height: 1.4; font-weight: 600; text-shadow: 1px 1px 1px rgba(0,0,0,0.5);">CAARENT</h1><br>
							<p class="font-weight-light d-none d-md-block" style="font-size: 20px; opacity: 1;">"Carrent" Your Best PLace For Rental Car.</p>
							<a href="#" class="button button-large button-rounded ml-0">Check Your Order?</a><span class="leftmargin-sm">

						<?php } ?>

						</div>
					</div>
				</div>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap pt-0 clearfix">

				<div class="section m-0 clearfix" style="background-color: #eef2f5;">
					<div class="container clearfix">

						<div class="heading-block center border-bottom-0 bottommargin topmargin-sm mx-auto" style="max-width: 640px">
							<h3 class="nott font-secondary font-weight-normal" style="font-size: 36px;">Our Inventory</h3>
							<span>Berikut Adalah Pilihan Mobil Kami.</span>
						</div>

						<div class="row clearfix">
							<!-- Features colomns
							============================================= -->
							<div class="row clearfix">
								
								<?php foreach ($services as $s) : ?>
									<div class="col-lg-3 col-md-6 bottommargin-sm">
									<div class="feature-box media-box fbox-bg">
										<div class="fbox-media">
											<a data-toggle="modal" data-target="#myModal"><img src="<?= base_url($s->foto) ?>" alt="Featured Box Image"></a>
										</div>
										<div class="fbox-content border-0">
											<h3 class="nott ls0 font-weight-bold"><?= $s->nama_service ?><span class="subtitle font-weight-light ls0"><?= $s->deskripsi_service ?></span></h3><br>
											<h5 class="nott ls0 font-weight-bold">Rp. <?= $s->harga ?></h5>
											<a href="<?= base_url('home/checkout')  ?>" class="button-link border-0 color">PILIH LAYANAN</a>
										</div>
									</div>
								</div>
								<?php endforeach; ?>

							</div>
						</div>
					</div>
				</div>


				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-body">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">
									<h4>Text in a modal</h4>
									<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

									<h4>Popover in a modal</h4>
									<p>This <a href="#" role="button" class="btn btn-secondary" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on click.</p>

									<h4>Tooltips in a modal</h4>
									<p><a href="#" data-toggle="tooltip" title="" data-original-title="Tooltip">This link</a> and <a href="#" data-toggle="tooltip" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>
									<hr>
									<h4>Overflowing text to show scroll behavior</h4>
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									<p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Save changes</button>
								</div>
							</div>
						</div>
					</div>
				</div>











				<!-- <div class="container topmargin clearfix">
					<div class="row clearfix">
						<div class="col-lg-6">
							<div class="heading-block border-bottom-0 topmargin-sm mb-0">
								<h2 class="font-secondary ls1 nott font-weight-normal">Join to Happy Customers</h2>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates deserunt facere placeat est animi, sunt?</span>
								<a href="#" class="button button-large button-rounded topmargin-sm ml-0">Join Us Now</a>
								<div class="line line-sm"></div>
							</div>
							<div class="row clearfix">
								<div class="col-md-4">
									<div>
										<div class="counter counter-small color"><span data-from="10" data-to="1136" data-refresh-interval="50" data-speed="1000"></span>+</div>
										<h5 class="color font-weight-semibold nott mt-0" style="font-size: 16px;">Happy Customers</h5>
									</div>
								</div>

								<div class="col-md-4">
									<div>
										<div class="counter counter-small" style="color: #22c1c3;"><span data-from="10" data-to="145" data-refresh-interval="50" data-speed="700"></span>+</div>
										<h5 class="font-weight-semibold nott mt-0" style="color: #22c1c3; font-size: 16px;">Pets Hosted</h5>
									</div>
								</div>

								<div class="col-md-4">
									<div>
										<div class="counter counter-small" style="color: #BD3F32;"><span data-from="10" data-to="50" data-refresh-interval="85" data-speed="1200"></span>+</div>
										<h5 class="font-weight-semibold nott mt-0" style="color: #BD3F32; font-size: 16px;">Professionals</h5>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-nav="false" data-animate-in="slideInUp" data-animate-out="slideOutUp" data-autoplay="5000" data-loop="true" data-stage-padding="5" data-margin="10" data-items-sm="1" data-items-md="1" data-items-xl="1">

								<div class="oc-item">
									<div class="testimonial topmargin-sm">
										<div class="testi-image">
											<a href="#"><img src="demos/pet/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Ligula scelerisque, tempus dicta eros dolorum itaque fugit, tempore pellentesque, leo dolor, aenean, inceptos aptent nostra adipisci harum etiam explicabo.</p>
											<div class="testi-meta">
												John Doe &middot;
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>

									<div class="testimonial topmargin-sm">
										<div class="testi-image">
											<a href="#"><img src="demos/pet/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Sint quae anim enim quaerat! Assumenda esse metus torquent, senectus similique tempor? Massa lacus a, dignissim sequi officiis, elementum non.</p>
											<div class="testi-meta">
												John Doe  &middot;
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="testimonial topmargin-sm">
										<div class="testi-image">
											<a href="#"><img src="demos/pet/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Placeat ultrices perferendis omnis consequat molestie quos pretium! Donec deserunt ratione ultrices laborum vehicula rutrum deserunt! Torquent officiis? Et occaecati.</p>
											<div class="testi-meta">
												John Doe &middot;
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>
									<div class="testimonial topmargin-sm">
										<div class="testi-image">
											<a href="#"><img src="demos/pet/images/testimonials/4.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Occaecat autem turpis mollis ac nam cubilia, culpa adipiscing per cubilia porta fugit numquam dignissim sequi. Aspernatur aliquip. Ornare molestias.</p>
											<div class="testi-meta">
												John Doe &middot;
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

				<div class="section mb-0 clearfix">
					<div class="heading-block center border-bottom-0 mb-0 mx-auto" style="max-width: 640px">
						<h3 class="nott font-secondary font-weight-normal" style="font-size: 36px;">Gallery</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel.</span>
					</div>
				</div>

				<div class="masonry-thumbs grid-container grid-6" data-big="3" data-lightbox="gallery">
					<a class="grid-item" href="demos/pet/images/gallery/1.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/1.jpg" alt="Gallery Thumb 1">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/2.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/2.jpg" alt="Gallery Thumb 2">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/3.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/3.jpg" alt="Gallery Thumb 3">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/4.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/4.jpg" alt="Gallery Thumb 4">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/5.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/5.jpg" alt="Gallery Thumb 5">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/6.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/6.jpg" alt="Gallery Thumb 6">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/7.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/7.jpg" alt="Gallery Thumb 7">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/8.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/8.jpg" alt="Gallery Thumb 8">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/9.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/9.jpg" alt="Gallery Thumb 9">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/10.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/10.jpg" alt="Gallery Thumb 10">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/11.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/11.jpg" alt="Gallery Thumb 11">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/12.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/12.jpg" alt="Gallery Thumb 12">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/13.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/13.jpg" alt="Gallery Thumb 13">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/14.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/14.jpg" alt="Gallery Thumb 14">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
					<a class="grid-item" href="demos/pet/images/gallery/15.jpg" data-lightbox="gallery-item">
						<div class="grid-inner">
							<img src="demos/pet/images/gallery/thumbs/15.jpg" alt="Gallery Thumb 15">
							<div class="bg-overlay">
								<div class="bg-overlay-content dark">
									<i class="icon-line-plus h4 mb-0" data-hover-animate="fadeIn"></i>
								</div>
								<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
							</div>
						</div>
					</a>
				</div>

				<div class="section m-0 bg-transparent clearfix">
					<div class="container clearfix">
						<div class="heading-block center border-bottom-0 mx-auto" style="max-width: 640px">
							<h3 class="nott font-secondary font-weight-normal" style="font-size: 36px;">Our Products</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel.</span>
						</div>
						<div class="row topmargin clearfix">
							<div class="col-lg-5 d-none d-lg-block">
								<img src="demos/pet/images/others/1.png" alt="Dogs">
							</div>
							<div class="col-lg-7 col-md-12">
								<div class="row clearfix">
									<div class="col-md-4 col-6">
										<div class="product">
											<div class="product-image shadow-none">
												<a href="#"><img src="demos/pet/images/products/1.jpg" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Natural Dog Food</a></h3></div>
												<div class="product-price"><ins>$11.49</ins></div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-6">
										<div class="product">
											<div class="product-image shadow-none">
												<a href="#"><img src="demos/pet/images/products/2.jpg" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Dry Dog Food</a></h3></div>
												<div class="product-price"><ins>$13.99</ins></div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-6">
										<div class="product">
											<div class="product-image shadow-none">
												<a href="#"><img src="demos/pet/images/products/3.jpg" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Canvas Dog Food</a></h3></div>
												<div class="product-price"><ins>$14.49</ins></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section dark parallax m-0" style="background-image: url('demos/pet/images/others/section-bg.jpg'); padding: 140px 0;"  data-bottom-top="background-position:0px 50px;" data-top-bottom="background-position:0px -300px;">
					<div class="container center clearfix">
						<div class="row clearfix">
							<div class="col-lg-6">
								<div class="heading-block border-bottom-0 mb-0">
									<div class="before-heading text-lowercase ls1" style="color: #FFF; font-style: normal;">want to Adopt your a best friend?</div>
									<h3 class="nott font-secondary font-weight-normal" style="font-size: 32px;">Unconditional love is as close as your nearest Shelter.</h3>
									<a href="#" class="button button-large button-circle button-border button-white button-light topmargin-sm ml-0">Get a Pet Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container topmargin-lg clearfix">
					<div class="heading-block center border-bottom-0 mx-auto" style="max-width: 640px">
						<h3 class="nott font-secondary font-weight-normal" style="font-size: 36px;">Need Help?</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel.</span>
					</div>
					<div class="row contact-properties clearfix">
						<div class="col-md-4">
							<a href="#" style="background: url('demos/pet/images/help/1.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block m-0 border-0">
										<h3 class="text-capitalize font-weight-normal font-secondary">Hire a Pet Sitter</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
											795 Folsom Ave, Suite 600<br>
											San Francisco, CA 94107
										</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" style="background: url('demos/pet/images/help/2.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block m-0 border-0">
										<h3 class="text-capitalize font-weight-normal font-secondary">Report a Stray Dog</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
											call us<br>
											+1-111-222-333
										</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="#" style="background: url('demos/pet/images/help/3.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block m-0 border-0">
										<h3 class="text-capitalize font-weight-normal font-secondary">Report Harassment Dog</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
											Email us<br>
											info@canvas.com
										</span>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div> -->
			</div>
		</section><!-- #content end -->

		