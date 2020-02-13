<?php
include('header.html');

$linklogin = ($_POST['link-login']) ;
$linkorig = ($_POST['link-orig']) ;
$error = ($_POST['error']) ;
$chapid = ($_POST['chap-id']) ;
$chapchallenge = ($_POST['chap-challenge']) ;
$linkloginonly = ($_POST['link-login-only']) ;
$linkorigesc = ($_POST['link-orig-esc']) ;
$macesc = ($_POST['mac-esc']) ;
$mac = ($_POST['mac']) ;
$ip = ($_POST['ip']) ;
$vlan = ($_POST['interface-name']) ;
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
<form action="include/process.inc.php" method="post" id="signupForm">

<div class="p-4">
			<!-- Material input text -->
			<div class="md-form">
				<i class="fa fa-user prefix white-text"></i>
				<input type="text" id="name" name="cname" class="form-control white-text" required="required">
				<label data-error="wrong" id="label" data-success="right" for="name">Name</label>
			</div>

			<!-- Material input email -->
			<div class="md-form">
				<i class="fa fa-envelope prefix white-text"></i>
				<input type="email" id="email" name="cemail" class="form-control white-text" required="required">
				<label data-error="wrong" id="label" data-success="right" for="email">Email</label>

			</div>
	
<div class="md-form">

<input hidden name="linklogin" value="<?php echo $linklogin ?>">
<input hidden name="linkorig" value="<?php echo $linkorig ?>">
<input hidden name="error" value="<?php echo $error ?>">
<input hidden name="chapid" value="<?php echo $chapid ?>">
<input hidden name="chapchallenge" value="<?php echo $chapchallenge ?>">
<input hidden name="linkloginonly" value="<?php echo $linkloginonly ?>">
<input hidden name="linkorigesc" value="<?php echo $linkorigesc ?>">
<input hidden name="macesc" value="<?php echo $macesc ?>">
<input hidden name="mac" value="<?php echo $mac ?>">
<input hidden name="ip" value="<?php echo $ip ?>">
<input hidden name="vlan" value="<?php echo $vlan ?>">

</div>
			<!-- Material input password -->
			<div class="md-form">
				<i class="phone fa fa-phone prefix white-text"></i>
				<input type="text" id="phone_number" name="cphone" class="form-control white-text"  required="required">
				 <label data-error="wrong" data-success="right" id="label" for="phone_number">Phone</label>
			</div>
			<div class="text-center py-4 mt-3">
				<button class="btn btn-submit box-shadow grad-sub" type="submit" name="submit" id="submit_btn">Register</button>
			</div>
</div>
		</form>
	</div>
	<!-- Card body -->
</div>
<!-- Card -->
</div>
</div>
</div>

<?php
include('footer.html'); 
?>
