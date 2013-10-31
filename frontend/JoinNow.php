<?php
include_once 'common/header.php';
?>
<!-- Start: MAIN CONTENT -->
<div
	class="content">

	<div class="item">
		<div class="row-fluid">
			<ul>
				<li class="span8">
					<div class="hero-unit">

						<div class="row-fluid">

							<h3>Tell us know your need!!!</h3>
							<br /> <br />
							<form class="form-inline" id="needSubmit" method="POST"
								action="../backend/needSubmit.php">
								<fieldset id="hobbies">
									<div class="formrow">
										<select name="hobby[]" class="dropdown">
											<option value="">Select hobby</option>
											<option value="GUITAR">Guitar</option>
											<option value="PAINTING">Painting</option>
											<option value="YOGA">Yoga</option>
											<option value="AEROBICS">Aerobics</option>
										</select> <label class="checkbox" data-toggle="tooltip"
											title="If you want to learn this hobby!!! HobbyMate assures you of best learning experience!!!">
											<input type="checkbox" name="learn" /> Learn
										</label> <label class="checkbox" data-toggle="tooltip"
											title="If you consider yourself at intermediate level!!! Share with others like you & gain from other's experience!">
											<input type="checkbox" name="share" /> Share
										</label> <label class="checkbox" data-toggle="tooltip"
											title="If you consider yourself at expert level!!! Be a mentor, Guide others at your convinence & earn at the same time!!!">
											<input type="checkbox" name="teach" /> Teach
										</label>
									</div>
								</fieldset>
								<div class="form-actions">
									<!--input type=”hidden” name=”save” value=”contact”-->
									<button type="submit" class=”btnbtn-primary”>Submit</button>
								</div>
							</form>

							<div id="addrow">
								<input type="button" name="addbtn" id="addbtn" value="Add More!">
							</div>
						</div>
					</div>
				</li>
				<li class="span4"><?php include_once 'connectUser.php';?>
				</li>

			</ul>
		</div>

	</div>

	<!-- Start: Our Solutions -->
	<div class="container" class="span8">
		<div class="page-header">
			<a href="events.php"><h2>Upcoming Sessions</h2></a>
		</div>
		<div class="row bottom-space">
			<div class="span1 offset1">
				<div class="circle">
					<span class="event-date">Oct<br>10
					</span>
				</div>
			</div>
			<div class="span9">
				<h4>
					<a href="#">Link to the event</a>
				</h4>
				<p>Description about your event.Description about your
					event.Description about your event. Description about your
					event.Description about your event.Description about your event.
					Description about your event.Description about your
					event.Description about your event.</p>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="span1 offset1">
				<div class="circle">
					<span class="event-date">Oct<br>10
					</span>
				</div>
			</div>
			<div class="span9">
				<h4>
					<a href="#">Link to the event</a>
				</h4>
				<p>Description about your event.Description about your
					event.Description about your event. Description about your
					event.Description about your event.Description about your event.
					Description about your event.Description about your
					event.Description about your event.</p>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="span1 offset1">
				<div class="circle">
					<span class="event-date">Oct<br>20
					</span>
				</div>
			</div>
			<div class="span9">
				<h4>
					<a href="#">Link to the event</a>
				</h4>
				<p>Description about your event.Description about your
					event.Description about your event. Description about your
					event.Description about your event.Description about your event.
					Description about your event.Description about your
					event.Description about your event.</p>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="span1 offset1">
				<div class="circle">
					<span class="event-date">Nov<br>1
					</span>
				</div>
			</div>
			<div class="span9">
				<h4>
					<a href="#">Link to the event</a>
				</h4>
				<p>Description about your event.Description about your
					event.Description about your event. Description about your
					event.Description about your event.Description about your event.
					Description about your event.Description about your
					event.Description about your event.</p>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="span1 offset1">
				<div class="circle">
					<span class="event-date">Nov<br>12
					</span>
				</div>
			</div>
			<div class="span9">
				<h4>
					<a href="#">Link to the event</a>
				</h4>
				<p>Description about your event.Description about your
					event.Description about your event. Description about your
					event.Description about your event.Description about your event.
					Description about your event.Description about your
					event.Description about your event.</p>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="span1 offset1">
				<div class="circle">
					<span class="event-date">Dec<br>10
					</span>
				</div>
			</div>
			<div class="span9">
				<h4>
					<a href="#">Link to the event</a>
				</h4>
				<p>Description about your event.Description about your
					event.Description about your event. Description about your
					event.Description about your event.Description about your event.
					Description about your event.Description about your
					event.Description about your event.</p>
			</div>
		</div>
		<div class="row bottom-space">
			<div class="span1 offset1">
				<div class="circle">
					<span class="event-date">Dec<br>20
					</span>
				</div>
			</div>
			<div class="span9">
				<h4>
					<a href="#">Link to the event</a>
				</h4>
				<p>Description about your event.Description about your
					event.Description about your event. Description about your
					event.Description about your event.Description about your event.
					Description about your event.Description about your
					event.Description about your event.</p>
			</div>
		</div>
	</div>
	<!-- End: PRODUCT LIST -->
</div>
<!-- End: MAIN CONTENT -->

<?php
include_once 'common/footer.php';

?>