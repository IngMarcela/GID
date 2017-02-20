 $("#departamento").change(event => {
  	$.get(`/municipios/${event.target.value}`,function(res,sta){ //llama la ruta municipios por medio de get
  		$("#municipio").empty(); // vacia o limpia el select, quitando posible basura
 		$("#municipio").append(`<option value="0"> Otro </option>`);
 		var x = 0;
  		res.forEach(element => { //recorre el json que contiene la respuesta y asigna dicha respuesta al select
 			x = x + 1;
 			if (x === 1) { // si es el primer registro hace que este se seleccione por defecto
 			$("#municipio").append(`<option value=${element.id} selected='selected'> ${element.nom_municipio} </option>`);
 			}
 			else{
  			$("#municipio").append(`<option value=${element.id}> ${element.nom_municipio} </option>`);
 			}
  		});
  	});
  });