 $("#departamento").change(event => {
  	$.get(`/municipios/${event.target.value}`,function(res,sta){ //llama la ruta municipios por medio de get
  		$("#municipio").empty(); // vacia o limpia el select, quitando posible basura
 		$("#municipio").append(`<option value="0" selected='selected'> Adicionar </option>`);
 		res.forEach(element => { //recorre el json que contiene la respuesta y asigna dicha respuesta al select
 			
  			$("#municipio").append(`<option value=${element.id}> ${element.nom_municipio} </option>`);
 			
  		});
  	});
  });