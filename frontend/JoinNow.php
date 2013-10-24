<?php
include_once 'common/header.php';
session_start();
?>
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: slider -->
				<div class="item">
					<div class="hero-unit">
						<div class="row-fluid">
							<div class="span7">
								<h3>Tell us know your need!!!</h3>
								<br/><br/>
									<div id="addrow">
										<input type="button" name="addbtn" id="addbtn" value="Add More!">
										</input>
									</div>
									<br>
									<form class="form-inline" id="needSubmit"  method="POST" action="needSubmit.php">
									<fieldset id="lunches"> 
										<div class="formrow">
											<select name="lunch[]" class="dropdown">
												<option value="">Select a lunch item</option>
												<option value="baloney">Baloney</option>
												<option value="yogurt">Yogurt</option>
												<option value="apple">Apple</option>
												<option value="cheese">Government Cheese</option>
											</select>
											<label class="checkbox">
												<input type="checkbox" id = "learn"/> Learn
											</label>
											<label class="checkbox">
												<input type="checkbox" id = "share"/> Share
											</label>
											<label class="checkbox">
												<input type="checkbox" id = "teach"/> Teach
											</label>
										</div>
									</fieldset>
									<div class="form-actions">
										<!--input type=�hidden� name=�save� value=�contact�-->
										<button type=�submit� class=�btn btn-primary�>Submit</button>									
									</div>  
								</form>
							</div>
							<div class="span5">
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
								            <a class="left carousel-control" href="#heroSlider1" data-slide="prev">�</a>
											<a class="right carousel-control" href="#heroSlider1" data-slide="next">�</a>
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
            <h2>Upcoming Sessions</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>For Learners & Teachers</h3>
                    <p>
                      Whether you want to learn, share or teach we have solution for you.
					  Come join the India's biggest network of multi-skill people!!!
					  <br/><br/>
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#JoinNow" class="btn btn-primary">JOIN NOW</a>&nbsp;
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>For Institutes</h3>
                    <p>
						If you are a institute specialized in teaching of any kind of skill,
						then you are at the right place. Partner us & get the best students.
						
						What more! We offer range of services. Get in touch now!!!
					</p>
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
                    <p>
                      Looking for your next Guitar, Cycle but worried of initial expense?
					  Hover to the Marketplace & rent your stuff. Quality Assured!!! 
					  
					  You can also place your existing stuff on rent!!!
                    </p>
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
include_once 'common/footer.php';
?>