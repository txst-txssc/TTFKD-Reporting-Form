$(document).ready(function(){
	$('#form form').ketchup();
	
	$("#group_state input").mask("aa");
	$("#group_zip input").mask("99999");
	$("#sponsor_phone input").mask("(999) 999-9999");
	$("#event_date input").mask("99/99/9999");
});