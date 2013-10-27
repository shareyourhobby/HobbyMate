<?php
include_once 'common/header.php';
session_start();
?>
<!DOCTYPE html>

<!-- Start: MAIN CONTENT -->
<div
	class="content">
	<!-- Start: slider -->
	<!--div class="row-fluid">
							<div class="span6 marketting-info">
								<h3>We at HobbyMate aim to connect people of similar skills & provide a platform to
								people who would like to explore their hidden talents.</h3>
								<h3>
								<a href="product.html" class="btn">Learn more</a>
								</h3>                      
							</div>
							<div class="span6">
								<img src="img/placeholder.jpg" class="thumbnail">
							</div>
						</div-->
	<div class="item">
		<div class="hero-unit">
			<div class="row-fluid">
				<div class="span6 marketting-info">
					<h1>Welcome</h1>
					<h3>
						<?php echo ($_SESSION['username']) ?>
					</h3>
					<h3>We at HobbyMate aim to connect people of similar skills &
						provide a platform to people who would like to explore their
						hidden talents.</h3>
					<a href="learnMore.php" class="btn btn-primary">Learn more</a>
					<!--a href="product.html" class="btn">Learn more</a-->


				</div>
				<div class="span6">
					<div class="slider">
						<div class="container-fluid">
							<div id="heroSlider1" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<div class="hero-unit">
											<div class="row-fluid">
												<div class="span12">
													<img src="img/placeholder.jpg" class="thumbnail">
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="hero-unit">
											<div class="row-fluid">
												<div class="span12">
													<img src="img/placeholder.jpg" class="thumbnail">
												</div>
											</div>
										</div>
									</div>
								</div>
								<a class="left carousel-control" href="#heroSlider1"
									data-slide="prev">‹</a> <a class="right carousel-control"
									href="#heroSlider1" data-slide="next">›</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start: Our Solutions -->
	<div class="container">
		<div class="page-header">
			<h2>Explore Now</h2>
		</div>
		<div class="row-fluid">
			<ul class="thumbnails">
				<li class="span4">
					<div class="thumbnail">
						<img src="img/placeholder-360x200.jpg" alt="product name">
						<div class="caption">
							<h3>For Learners & Teachers</h3>
							<p>
								Whether you want to learn, share or teach we have solution for
								you. Come join the India's biggest network of multi-skill
								people!!! <br /> <br />
							</p>
						</div>
						<div class="widget-footer">
							<p>
								<a href="JoinNow.html" class="btn btn-primary">JOIN NOW</a>&nbsp;
							</p>
						</div>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<img src="img/placeholder-360x200.jpg" alt="product name">
						<div class="caption">
							<h3>For Institutes</h3>
							<p>If you are a institute specialized in teaching of any kind of
								skill, then you are at the right place. Partner us and get the
								best students. What more! We offer range of services. Get in
								touch now!!!</p>
						</div>
						<div class="widget-footer">
							<p>
								<a href="#" class="btn btn-primary">PARTNER US</a>&nbsp;
							</p>
						</div>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<img src="img/placeholder-360x200.jpg" alt="product name">
						<div class="caption">
							<h3>Marketplace</h3>
							<p>Looking for your next Guitar, Cycle but worried of initial
								expense? Hover to the Marketplace and rent your stuff. Quality
								Assured!!! You can also place your existing stuff on rent!!!</p>
						</div>
						<div class="widget-footer">
							<p>
								<a href="#" class="btn btn-primary">GO TO MARKETPLACE</a>&nbsp;
							</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- End: PRODUCT LIST -->
</div>
<!-- End: MAIN CONTENT -->
<?php
include 'common/footer.php';
?>
