<?php
include('header.html');

$linklogin = ($_POST['link-login']) ? $_POST['link-login'] : $_COOKIE['linklogin'];
$linkorig = ($_POST['link-orig']) ? $_POST['link-orig'] : $_COOKIE['linkorig'];
$error = ($_POST['error']) ? $_POST['error'] : $_COOKIE['error'];
$chapid = ($_POST['chap-id']) ? $_POST['chap-id'] : $_COOKIE['chapid'];
$chapchallenge = ($_POST['chap-challenge']) ? $_POST['chap-challenge'] : $_COOKIE['chapchallenge'];
$linkloginonly = ($_POST['link-login-only']) ? $_POST['link-login-only'] : $_COOKIE['linkloginonly'];
$linkorigesc = ($_POST['link-orig-esc']) ? $_POST['link-orig-esc'] : $_COOKIE['linkorigesc'];
$macesc = ($_POST['mac-esc']) ? $_POST['mac-esc'] : $_COOKIE['macesc'];
$mac = ($_POST['mac']) ? $_POST['mac'] : $_COOKIE['mac'];
$ip = ($_POST['ip']) ? $_POST['ip'] : $_COOKIE['ip'];


?>

<!-- Default form Register -->
<!-- Card -->
<div class="#"> 
<div class="row d-flex justify-content-center align-items-center vh-100">
<div class="col-10 col-xs-5 col-sm-5 col-md-5 col-lg-3">
<div class="card-register card w-100 " id="card_signup">
	<!-- Card body -->

	<div class="card-body">
		<!-- Material form register -->
<div class="mx-auto d-flex justify-content-center">
<img class="filtered" src="img/sub_logo.png">
</div>	
<form action="otp.php" method="post" id="signupForm">

<div class="p-4">
			<!-- Material input text -->
			<div class="md-form">
				<i class="fa fa-user prefix white-text"></i>
				<input type="text" id="name" name="name" class="form-control white-text" required="required">
				<label data-error="wrong" id="label" data-success="right" for="name">Name</label>

			</div>

			<!-- Material input email -->
			<div class="md-form">
				<i class="fa fa-envelope prefix white-text"></i>
				<input type="email" id="email" name="email" class="form-control white-text" required="required">
				<label data-error="wrong" id="label" data-success="right" for="email">Email</label>

			</div>


			<!-- Material input password -->
			<div class="md-form">
				<i class="phone fa fa-phone prefix white-text"></i>
				<input type="text" id="phone_number" name="phone_number" class="form-control white-text"  required="required">
				 <label data-error="wrong" data-success="right" id="label" for="phone_number">Phone</label>

			</div>
			<div class="text-center py-4 mt-3">
				<button class="btn btn-submit box-shadow grad-sub" type="submit" name="submit" id="submit_btn">Register</button>
			</div>
</div>
		</form>
		<!-- Material form register -->

	</div>
	<!-- Card body -->

</div>
<!-- Card -->
</div>
</div>
</div>

<?php

/*		if(isset($_POST['submit'])){
				//hide(); //function call to hide the signup form(fxn is in process.php file)

}*/

include('footer.html'); 
?>
