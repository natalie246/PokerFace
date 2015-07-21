$(document).ready(function() {
	$('#reportGood').click(function() {
		
		$name=$(" #reportGood ").attr("name");
		$value=$(" #reportGood ").attr("value");
		
		
	
		$.post("reportPlayer.php",{name:'$name', value:'$value'});
	
		});
			});