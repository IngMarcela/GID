 $("#caja").change(event => {
  	$.get(`/carpetas/${event.target.value}`,function(res,sta){ //llama la ruta municipios por medio de get
  		$("#carpeta").empty(); // vacia o limpia el select, quitando posible basura
 		
		if(res.length < 1){
			$("#carpeta").append(`<option value="0" > Adicionar </option>`);
			$("#carpeta").append(`<option value="1" selected='selected'> Sin Carpetas </option>`);
		}else{
			$("#carpeta").append(`<option value="0" selected='selected'> Adicionar </option>`);
	 		
	  		res.forEach(element => { //recorre el json que contiene la respuesta y asigna dicha respuesta al select
	 			
	  			$("#carpeta").append(`<option value=${element.id}> ${element.num_carpeta} </option>`);
	 			
	  		});
	  }
  	});
  });