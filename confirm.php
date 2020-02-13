<?php
include('header.html');
?>
<div class="modal fade" id="otp_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
 <h4 class="modal-title w-100 font-weight-bold grey-text">Confirm OTP</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="opt_form_hide">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body mx-3">
				<div class="md-form mb-5">
					<i class="fas fa-key prefix grey-text"></i>
					<input type="text" id="orangeForm-name" class="form-control validate">
					<label data-error="wrong" data-success="right" for="orangeForm-name">OTP</label>
				</div>
			</div>
			<div class="modal-footer d-flex justify-content-center">
				<button class="btn purple-gradient">Confirm</button>
			</div>
		</div>
	</div>
</div>



<?php
include('footer.html');
?>
