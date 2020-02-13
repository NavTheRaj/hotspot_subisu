<?php
if(isset($_POST['submit'])){

		$name=validation($_POST['name']);
		$phone=validation($_POST['number']);
		$email=validation($_POST['email']);
		//header("Location:./index.php?otp");
}


function validation($data){
		$data=trim($data);
		$data=htmlspecialchars($data);
		$data=stripslashes($data);
		return $data;
}

function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');</script>";
}

function hide(){
		echo "<script type='text/javascript'>
				$(window).on('load',function(){
						$('#otp_form').modal('show');
						$('#card_signup').hide();


});
								</script>";

}



?>
