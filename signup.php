<?php
include('header.html');

 include ('include/config.php');
 $Name = filter_input(INPUT_POST, 'cname');
 $Address = filter_input(INPUT_POST, 'caddress');
 $Phone = filter_input(INPUT_POST, 'cphone');
# $Email = filter_input(INPUT_POST, 'cemail');
 $date = date('Y-m-d H:i:s');
 $tomorrowdate = new DateTime('tomorrow');
 $expirydate=$tomorrowdate->format('d M Y');
 $errMessage='';
 $errotp='';
 $mobmessage='';
 if (!empty($_POST['cphone'])) {
    if(preg_match("/^[0-9]{10}$/", $Phone)) {
              /* For OTP via SMS */
        $otp=rand(100000, 999999);
        $message = ("Hi, $Name your PIN code is: ".$otp);
       
	$args = http_build_query(array(
            'auth_token'=> '',
            'to'    => $Phone,
            'text'  => $message));
    	$url = "http://aakashsms.com/admin/public/sms/v3/send/";

    # Make the call using API.
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_POST, 1); ///
    	curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // Response
    	$response = curl_exec($ch);
    	curl_close($ch);

       $sql="insert into hotspot_users (name,address,phone,mac,otp,login,ip,vlan) values ('$Name', '$Address','$Phone','$mac','$otp','$date','$ip','$vlan')";
       $sql1="call addradcheck ('$otp','Auth-Type',':=','Accept')";
       $sql2="call addradcheck ('$otp','Expiration',':=','$expirydate')";
       $sql3="call addradusergroup ('$otp','$package','0')";
       $sql4="call adduserinfo ('$otp','$Name','info.itahari@subisu.net.np','$Phone','$Address','$date','hotspot.system')";
       $con->query($sql1);
       $con->query($sql2);
       $con->query($sql3);
       $con->query($sql4);
#
       if($con->query($sql)){
#              // echo "New Record is inserted sucessfully";
              $con ->close();
       }
       else
       {
               echo "Error". $sql."<br>". $con->error;
       }
# 
}      
else{
    $mobmessage="Incorrect Mobile number format";
    $_POST['cphone']="";
    $_POST['cname']="";
    #$_POST['cemail']="";
}

#
}
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
