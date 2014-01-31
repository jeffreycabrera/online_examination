$(document).ready(function() {
	var exam_id = 1;
	$.ajax({
		url: 'getQuestionsAnswers.php',
		method: 'GET',
		data: {exam_id : exam_id},
		success: function(response){
			$('#show').html(response);
		} 
	});

	$('#button').click(function() {
		if(exam_id < 10){
			exam_id++;
			$.ajax({
				url: 'getQuestionsAnswers.php',
				method: 'GET',
				data: {exam_id : exam_id},
				success: function(response){
					$('#show').html(response);
				} 
			});
		}else{
			$("#overlay").fadeIn("slow");
			$("#overlay_div").fadeIn("slow");
		}
	});
});

var score = 0;
$("#button").click(function(){
	
	var radio = $('input[type="radio"]:checked').val();
	var answer = $('#answer').val();

	if(radio === answer){
	score++;
	}
	$.ajax({
		url: 'result.php',
		method: 'GET',
		data: {score : score},
		success: function(response){
		$('#result').html(response);
		} 
	});
});

$('#done').click(function() {
	window.location = 'index.php'

});









