$(document).ready(function() {

	var countDownDate = new Date('July 28, 2022 12:00:00').getTime();

	var x = setInterval(function() {

		var now = new Date().getTime();
		
		var distance = countDownDate - now;	

		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		
		if ($('#event_countdown').length > 0) {

			$('#event_countdown').find('.days').html(days + '<span>Days</span>');
			
			$('#event_countdown').find('.hours').html(hours + '<span>Hours</span>');
			
			$('#event_countdown').find('.minutes').html(minutes + '<span>Minutes</span>');
			
			$('#event_countdown').find('.seconds').html(seconds + '<span>Seconds</span>');
		
		}
		
	}, 1000);
	
});