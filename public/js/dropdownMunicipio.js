 $("#municipio").change(event => {
  	$.get(`/veredas/${event.target.value}`,function(res,sta){ //llama la ruta municipios por medio de get
  		$("#vereda").empty(); // vacia o limpia el select, quitando posible basura
 		
		if(res.length < 1){
			$("#vereda").append(`<option value="0" > Adicionar </option>`);
			$("#vereda").append(`<option value="0" selected='selected'> Sin Veredas </option>`);
		}else{
			$("#vereda").append(`<option value="0" selected='selected'> Adicionar </option>`);
	 		
	  		res.forEach(element => { //recorre el json que contiene la respuesta y asigna dicha respuesta al select
	 			
	  			$("#vereda").append(`<option value=${element.id}> ${element.nom_vereda} </option>`);
	 			
	  		});
	  }
  	});
  });