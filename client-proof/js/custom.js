$(document).ready(function() {
	$('#check1').click(function() {
		$('#disabled1').hide();
	});
	$('.colorbox').colorbox({inline:true, href:"#video1"});
	
	$('#approveBtn').attr("disabled", "true");
	$('#approveBtn').css("background-color", "#ccc");
	
	$(':checkbox').click(function () {
		 if ($("[name=proof[]]:checked").length < 4) {
			 
		 } else {
			 $('#approveBtn').removeAttr('disabled');
			 $('#approveBtn').css("background-color", "red");
			 $('#approveBtn').css("cursor", "pointer");
		 }
	});

});