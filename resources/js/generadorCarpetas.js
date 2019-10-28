var generadorCarpetas = {
	initGeneradorCarpetas: function(){
		this.generarCarpetas();
	},
	generarCarpetas: function(){
	  $("form[name=generarCarpetas]").submit(function(e){
	  	e.preventDefault()
		var data=$(this).serialize()

	  	$.ajax({
 			url:'../controller/generador/GeneradorController.php',
 			type: 'POST',
 			data: data,
 			success: function(response){

 				var jsonData = JSON.parse(response);
 				 				console.log(jsonData)
				if (jsonData.resultado) {

	 				$("#resultado").html(+
	 					'<div class="alert alert-success">'+
					      '<strong>Enhorabuena!</strong>'+jsonData.contenido+
					    '</div>');
	 			}else{
	 				$("#resultado").html(+
	 					'<div class="alert alert-warning">'+
					      '<strong>Error!</strong> No se crearon los siguientes archivos: '+jsonData.contenido+
					    '</div>');
	 			}
				 				

 			}
 		})
	    
	  })
	}
	
}