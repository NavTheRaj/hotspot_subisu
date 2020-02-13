<?php
include('header.html');
include('confirm.php');
include('process.php')
?>

<!-- Default form Register -->
<!-- Card -->
<div class="container"> 
<div class="row d-flex justify-content-center align-items-center vh-100">
<!-- d-flex justify-content-center align-items-center vh-100" -->
<!-- First Column -->
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
<!-- col-sm-6 col-md-5 col-lg-3 -->
<div class="card-register card w-100" id="card_signup">
	<!-- Card body -->
	<div class="card-body">


	<div class="h1"><center><i class="fas fa-user-check purple-gradient"></i><center></div>
		<!-- Material form register -->
			<div class="text-center py-4 mt-3">
	<p><strong>One step away from using free internet!!</strong></p>
				<a href="signup.php" class="btn purple-gradient" type="button" id="user_btn">Register</a>
			</div>
</div>
<!--card-body -->

	</div>
	<!-- Card Register -->

</div>
<!-- First column -->
<!--second column -->
<div class="col-6 col-sm-6 col-md-6 col-lg-6">
<!-- col-sm-6 col-md-5 col-lg-3 -->
<div class="card-register card w-100" id="card_signup">
  <!-- Card body -->
  <div class="card-body">
		<div class="h1"><center><i class="fas fa-user-times purple-gradient"></i></center></div>
    <!-- Material form register -->
			<div class="text-center py-4 mt-3">
	<p><strong>Already a user..Or Do You Have a Voucher Code?</strong></p>
      <a href="#" class="btn purple-gradient" type="button" id="user_btn">Get Started</a>
      </div>
</div>
<!--card-body -->
</div>
<!-- Card register -->
</div>
<!--Second column ends -->
</div>
<!-- row div ends -->

</div>
<!-- container fluid -->


<?php
include('footer.html'); 
?>




