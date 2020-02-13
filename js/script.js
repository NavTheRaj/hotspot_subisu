$(document).ready(function() {
		$('#opt_form_hide').click(function(){
				$('#card_signup').show();
		});

		$("form").submit(function(e){
				alert('submit intercepted');
				e.preventDefault(e);
		});


});
