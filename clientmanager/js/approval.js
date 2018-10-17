$(document).ready(function() {
       $("#butt_save_note").attr("value", "submit");
	$('#reviewed').click(function() {
		$('#disabled1').hide();
	         $("#toggle").slideDown();		
	});
		
	$("#toggle").hide();
	$("#comments").hide();
	$("#approved").hide();
	
	$("[type=radio]").click(function(e){
	    console.log(e.toElement.defaultValue);
		if(e.toElement.defaultValue == "approve"){
			 if ( $("#comments").css('display') != "none" ){
                                $("#comments").slideUp();
                        }
			$("#approved").slideDown();
		}else {
			if ( $("#approved").css('display') != "none" ){
				$("#approved").slideUp();
			}
			$("#comments").slideDown();
			$("[type=checkbox]").attr('checked', false);
		}
		
	});
	
	$('#approvalSubmit').attr("disabled", "true");
	$('#approvalSubmit').css("color", "red");
	
	$(':checkbox').click(function () {
		 if ($("[type=checkbox]:checked").length < 5) {
		 
			// Disable the "approve" button if any of the above checkboxes are not checked
			$('#approvalSubmit').attr("disabled", "true");
			$('#approvalSubmit').css('cursor', 'default');
			$('#approvalSubmit').css("color", "red");
	 
		}
		 
		 else {
			 $('#approvalSubmit').removeAttr('disabled');
			 $('#approvalSubmit').css("color", "green");
			 $('#approvalSubmit').css("cursor", "pointer");
		 }
	});

	
});
