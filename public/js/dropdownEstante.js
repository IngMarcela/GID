 $("#estante").change(event => {
  	$.get(`/cajas/${event.target.value}`,function(res,sta){ //llama la ruta municipios por medio de get
  		$("#caja").empty(); // vacia o limpia el select, quitando posible basura
 		
		if(res.length < 1){
			$("#caja").append(`<option value="0" > Adicionar </option>`);
			$("#caja").append(`<option value="1" selected='selected'> Sin Cajas </option>`);
		}else{
			$("#caja").append(`<option value="0" selected='selected'> Adicionar </option>`);
	 		
	  		res.forEach(element => { //recorre el json que contiene la respuesta y asigna dicha respuesta al select
	 			
	  			$("#caja").append(`<option value=${element.id}> ${element.num_caja} </option>`);
	 			
	  		});
	  }
  	});
  });