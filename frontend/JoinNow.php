<?php
include_once 'common/header.php';
session_start();
?>
<!-- Start: MAIN CONTENT -->

<script type="text/javascript">
function verifySubmit() {
	$('input:checkbox').each(function(index, element) {
		if(element.checked) {
			element.value = "1" ;
			
		}else {
			element.value = "0" ;
			element.checked = true;
		}
	}) ;

	return true ;
	
}
</script>
<div
	class="content">
	<div class="item">
		<div class="hero-unit">
			<div class="row-fluid">
				<div class="span7">
					<?php 
						if(!isset($_SESSION["uid"])) {
					?>
					<h3 style="color: blue;">Please <a href="signin.php">Sign in</a> to submit your hobbies.</h3>
					<?php 		
						}
					?>
					<h3>Tell us know your need!!!</h3>
					<br /> <br />
					<?php
    	          	if (isset($_SESSION['errormsg'])) {
	       			?>
        		      	<span style="color: red;"><?php 	echo $_SESSION['errormsg'] ;?></span>	
              	<?php
              		 unset($_SESSION['errormsg']) ;
              		}
              	?>
					<form class="form-inline" id="needSubmit" method="POST"
						action="../backend/needSubmit.php">
						<fieldset id="hobbies">
							<div class="formrow">
								<select name="hobby[]" class="dropdown">
									<option value="">Select hobby</option>
									<option value="guitar">Guitar</option>
									<option value="painting">Painting</option>
									<option value="yoga">Yoga</option>
									<option value="aerobics">Aerobics</option>
								</select> 
								<label class="checkbox" data-toggle="tooltip" title="If you want to learn this hobby! HobbyMate assures you of best learning experience!!!"> <input type="checkbox"
									name="learn[]" /> Learn
								</label> 
								<label class="checkbox" data-toggle="tooltip" title="If you consider yourself at intermediate level & would like to improve through sharing with others like you!"> <input type="checkbox"
									name="share[]"  /> Share
								</label> 
								<label class="checkbox" data-toggle="tooltip" title="If you consider yourself at expert level & would like to teach others! Through HobbyMate support you can earn hell lot of money for doing this!!!"> 
								<input type="checkbox"
									name="teach[]"   /> Teach
								</label>
							</div>
						</fieldset>
						<div class="form-actions">
							<!--input type=”hidden” name=”save” value=”contact”-->
							<button type="submit" class=”btnbtn-primary” onclick="verifySubmit()">Submit</button>
						</div>
					</form>

					<div id="addrow">
						<input type="button" name="addbtn" id="addbtn" value="Add More!">
						</input>
					</div>


				</div>

				<div class="span5">
					<?php include_once 'slideshow.php';?>
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
								Whether you want to learn, share or teach we have solution for
								you. Come join the India's biggest network of multi-skill
								people!!! <br /> <br />
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
							<p>If you are a institute specialized in teaching of any kind of
								skill, then you are at the right place. Partner us & get the
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
								expense? Hover to the Marketplace & rent your stuff. Quality
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
include_once 'common/footer.php';

?>