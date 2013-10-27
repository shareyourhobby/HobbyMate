<?php
include_once 'common/header.php';
?>
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: slider -->
		<div class="item">
			<div class="hero-unit">
				<div class="row-fluid">
					<div class="span8">
						<h1>Welcome</h1>
						<h4>We at HobbyMate aim to connect people of similar skills & provide a platform to
						people who would like to explore their hidden talents.
						"More Story to go here"</h4>
					</div>
					<div class="span2">
					</div>
					<div class="span2">
						<a href="JoinNow.php" class="btn btn-primary" align="left">JOIN US</a>&nbsp;
						<br/><br/>
						<br/><br/>
						<a href="#" class="btn btn-primary">PARTNER US</a>&nbsp;
						<br/><br/>
						<br/><br/>
						<a href="#" class="btn btn-primary">MARKETPLACE</a>&nbsp;
					</div>
				</div>
			</div>
		</div>

		<div class="container">
        <div class="page-header">
			<h2>People On HobbyMate</h2>
    				<!--PHP call-->
				<!--script>
					addLoadEvent(dispalyUsers);
				</script-->
	
	<!--span id="txtHint"></span-->

			<?php
			include_once 'happyUser.php';
			?>			
        </div>
		
    </div>
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
<?php
include_once 'common/footer.php';
?>