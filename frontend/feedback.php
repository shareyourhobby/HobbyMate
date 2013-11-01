<?php
include_once 'common/header.php';
session_start();
?>

<div class="content">
	<div class="item">
		<div class="hero-unit">
			<div class="row-fluid">

				<form class="form-inline" id="feedbackSubmit" method="POST"
					action="../backend/feedbackSubmit.php">
					<fieldset>
						<label><strong>a) Are you aware of any platform where you can
								share, connect and get mentored at the same time about the
								activity of your interest? </strong> </label>
						<div class="formrow">
							<label class="radio"> <input type="radio" name="radios-A" value="Yes" checked="checked" required="required">
								Yes
							</label>
							<label class="radio"> <input type="radio" name="radios-A" value="No" required="required"> No
							</label>
						</div>
						<br /> <label><strong>b) If yes, then please let us know what is
								the platform & how you use it? </strong> </label>
						<div class="formrow">
							<textarea name="textarea-B">default text</textarea>
						</div>
						<br /> <label><strong>c) If No, then do you believe that there is
								a need of a social platform which can facilitate your activitiy
								of your interest?</strong> </label>
						<div class="formrow">
							<label class="radio"> <input type="radio" name="radios-C" value="Yes" checked="checked" required="required">
								Yes
							</label>
							<label class="radio"> <input type="radio" name="radios-C" value="No" required="required"> No
							</label>
						</div>
						<br /> <label><strong>d) Would you like to connect to people (who
								share the same passion as yours) on this social platform for
								networking, feedback, mentoring etc.?</strong> </label>
						<div class="formrow">
							<textarea name="textarea-D">default text</textarea>
						</div>

						<br /> 
						<label><strong>e) What factors according to you on this
								social platform may influence your decision to pursue your
								activity of interest? </strong> 
						</label>
						<div>
						<br /> 
						<label class="checkbox"> <input type="checkbox"
								name="checkbox[]" value="A">Knowing people in your community, locality with
								similar interests?
						</label>
						</div>
						<div>
						<br /> 
						<label class="checkbox"> <input type="checkbox"
								name="checkbox[]" value="B">Knowing about insititutes in your locality & 
								details of the offering related to your interest?
						</label>
						</div>
						<br />
						<div>
						<label class="checkbox"> <input type="checkbox" 
								name="checkbox[]" value="C">Knowing
								reviews, batch timings & details of batch profile of the institutes?
						</label>
						</div>
						<br />
						<label><strong> f) Apart from these, please let us know
								what more features do you think will facilitate people in
								pursuing their activity of interest? </strong> 
						</label>
						<div class="formrow">
							<textarea name="textarea-F">default text</textarea>
						</div>


						<div class="form-actions">

							<button type="submit" name="formSubmit" class=”btnbtn-primary”>Submit</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include_once 'common/footer.php';

?>