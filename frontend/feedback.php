<?php
include_once 'common/header.php';
session_start();
?>

<script type="text/javascript">
	function checksubmit() {
		if(document.getElementById('name').value == '')
		{
			alert("Name is a required field");
			return false ;
		}

		return true ;
	}
</script>
<div class="content">
	<div class="item">
		<div class="hero-unit">
			<div class="row-fluid">

				<form class="form-inline" id="feedbackSubmit" method="POST"
					action="../backend/feedbackSubmit.php" onsubmit="return checksubmit();">
					<fieldset>
						<strong>Please enter your name <sub style="color: red">*</sub>&nbsp;&nbsp;</strong><input id="name" name="name" type="text" />
						<br>
						<br>
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
						<br /> <label><strong>b) If yes then please let us know about it. </strong> </label>
						<div class="formrow">
							<textarea name="textarea-B"></textarea>
						</div>
						<br /> <label><strong>c) If no then do you feel a need for it.</strong> </label>
						<div class="formrow">
							<label class="radio"> <input type="radio" name="radios-C" value="Yes" checked="checked" required="required">
								Yes
							</label>
							<label class="radio"> <input type="radio" name="radios-C" value="No" required="required"> No
							</label>
							<label class="radio"> <input type="radio" name="radios-C" value="May be" required="required"> May be
							</label>
							<label class="radio"> <input type="radio" name="radios-C" value="Cannot say" required="required"> Can't say
							</label>
						</div>
						<br /> 
						<label><strong>d) Given this platform, what are the features you are likely to use? </strong> 
						</label>
						<div>
						<br /> 
						<label class="checkbox"> <input type="checkbox"
								name="checkbox[]" value="A">To know and network people in my community who shares similar interests
						</label>
						</div>
						<div>
						<br /> 
						<label class="checkbox"> <input type="checkbox"
								name="checkbox[]" value="B">To further pursue my interest by getting in touch with teachers/institutes.   
						</label>
						</div>
						<br />
						<div>
						<label class="checkbox"> <input type="checkbox" 
								name="checkbox[]" value="C">To participate in discussion forums and not interested in either learning or sharing
								from such a platform
						</label>
						</div>
						<div>
						<br>
							<label class="checkbox"> <input type="checkbox" 
								name="checkbox[]" value="D">I will no use this platform.
						</label>
						</div>
						<br />
						<label><strong> e) In your opinion what other features from HobbyMate will facilitate people in
								pursuing their hobbies? </strong> 
						</label>
						<div class="formrow">
							<textarea name="textarea-E" rows=10 cols=50></textarea>
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