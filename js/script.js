$(document).ready(function() {
$('#opt_form_hide').click(function(){
$('#card_signup').show();
});

$("form").submit(function(e){
let linklogin = $('#linklogin').val();
let linkorig = $('#linkorig').val();
let error = $('#error').val();
let chapid = $('#chapid').val();
let chapchallenge = $('#chapchallenge').val();
let linkloginonly = $('#linkloginonly').val();
let linkorigesc = $('#linkorigesc').val();
let macesc = $('#macesc').val();
let mac = $('#mac').val();
let ip = $('#ip').val();
let vlan = $('#vlan').val();

let name = $('#name').val();
let phone_number = $('#phone_number').val();
let email = $('#email').val();

// Reseting value of form to empty
$('#name').val("");
$('#phone_number').val("");
$('#email').val("");


$.ajax({
url:"include/process.inc.php",
type:'POST',
data:{
"linklogin" : linklogin,
"linkorig":linkorig, 
"error":error, 
"chapid":chapid, 
"chapchallenge":chapchallenge, 
"linkloginonly":linkloginonly, 
"linkorigesc":linkorigesc, 
"macesc":macesc, 
"mac":mac, 
"ip":ip, 
"vlan":vlan, 
"cname":name, 
"cemail":email, 
"cphone":phone_number, 
},

success: function(response){
if(response.toLowerCase()=="true")
	{
		$('#card_signup').hide();
		$('#card_otp').removeClass("d-none");
	}
},
error: function (req, status, error) {
console.log(req);
console.log(status);
console.log(error);
alert("Error try again");
}
});

e.preventDefault(e);
});


});
