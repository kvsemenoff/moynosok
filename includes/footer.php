
<script>

		var count = 8;
		var minutes = 12;
		var hours = 21;
		
		var end = 0;
		
		if (count < 10) {
			$("#dd-sec").html('0'+count);
		}
		else {
			$("#dd-sec").html(count);
		}
		if (minutes < 10) {
			$("#dd-min").html('0'+minutes);
		}
		else {
			$("#dd-min").html(minutes);
		}
		if (hours < 10) {
			$("#dd-hours").html('0'+hours);
		}
		else {
			$("#dd-hours").html(hours);
		}
		
	var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

	function timer()
	{
		count = count - 1;
		if (count<10) {
			$("#dd-sec").html('0'+count);
		} else {
			$("#dd-sec").html(count);
		}
		if (count == 0) {
			minutes = minutes - 1;
			if (minutes < 10 && minutes >= 0) {
				$("#dd-min").html('0'+minutes);
			}
			if (minutes > 10) {
				$("#dd-min").html(minutes);
			}
			if (minutes < 0) {
				hours = hours - 1;
				if (hours < 10 && hours >=0) {
					$("#dd-hours").html('0'+hours);
				}
				if (hours>10) {
					$("#dd-hours").html('0'+hours);
				}
				if (hours < 0 ) {
					
					end = 1;
					clearTimeout(counter);
				}
				if (end) { minutes = '00';}
				else {
					minutes = 59;
				}
				$("#dd-min").html(minutes);
			}
			if (end) { count = '00';}
				else {
					count = 59;
				}
			
			$("#dd-sec").html(count);
		}
	}

	
</script>

</body>
</html>

