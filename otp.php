<div class="card-register card w-100 d-none" id="card_otp">
	<!-- Card body -->
	<div class="card-body">
		<!-- Material form register -->
		<form action="<?php echo $linkloginonly?>" id="otpForm" method="POST">
				<div class="p-4">
				<div class="mx-auto d-flex justify-content-center">
				<img src="img/sub_logo.png" class="filtered">
				</div>	
			<input type="hidden" class="form-control input-lg" id="inputPassword" name="password" value="testing123">
			<div class="md-form">
				<i class="fas fa-key prefix white-text"></i>
				<input type="text" id="otp_tag" name="username" class="form-control white-text"  required="required">
				<label data-error="wrong" data-success="right" id="label" for="otp_tag">OTP</label>
				<a href="http://hotspot.subisu.net.np" class="d-block mr-auto white-text text-right smallify">Resend OTP?</a>
			</div>
			<div class="text-center p-0 mt-3">
				<button class="btn btn-submit box-shadow grad-sub" type="submit" name="submit" id="confirm_btn">Confirm</button>
			</div>
</div>
		</form>
	</div>
</div>
