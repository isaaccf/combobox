counter = 0;
$("#concepto").keyup(function(event){
	//alert("Tecla pulsada: "+event.keyCode);
	if (event.keyCode == 32 || (event.keyCode > 64 && event.keyCode < 91) || (event.keyCode > 95 && event.keyCode < 106)){
		counter++;
		
		$.ajax({
			type: "POST",
			url: "datos.php",
			data: "q="+$(this).val(),
			success: function(concept){
				if (concept != ""){
					$("#concepto").val(concept);
					$("#concepto").setCurPos(counter);
					$("#concepto").selectRange(counter, $("#concepto").val().length);
				}
			}
		});
	}
});
