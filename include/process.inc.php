<?php
include ('config.php');


$linklogin = ($_POST['linklogin']);
$linkorig = ($_POST['linkorig']);
$error = ($_POST['error']);
$chapid = ($_POST['chapid']);
$chapchallenge = ($_POST['chapchallenge']);
$linkloginonly = ($_POST['linkloginonly']);
$linkorigesc = ($_POST['linkorigesc']);
$macesc = ($_POST['macesc']);
$mac = ($_POST['mac']);
$ip = ($_POST['ip']);
$vlan = ($_POST['vlan']);


$Name = filter_input(INPUT_POST, 'cname');
$Email = filter_input(INPUT_POST, 'cemail');
$Phone = filter_input(INPUT_POST, 'cphone');
# $Email = filter_input(INPUT_POST, 'cemail');
$date = date('Y-m-d H:i:s');
$tomorrowdate = new DateTime('tomorrow');
$expirydate=$tomorrowdate->format('d M Y');
$errMessage='';
$errotp='';
$mobmessage='';


if(isset($_POST['submit']))
{
		if (!empty($Phone)) {
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

						$sql="insert into hotspot_users (name,email,address,phone,mac,otp,login,ip,vlan) values ('$Name','$Email','$Address','$Phone','$mac','$otp','$date','$ip','$vlan')";
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
								echo "inserted";
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
}


?>
