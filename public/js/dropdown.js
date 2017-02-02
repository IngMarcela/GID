$("#departamento").change(event => {
	$.get(`/municipio/${event.target.value}`,function(res,sta){ //llama la ruta municipios por medio de get
		$("#municipio").empty(); // vacia o limpia el select, quitando posible basura
		res.forEach(element => { //recorre el json que contiene la respuesta y asigna dicha respuesta al select
			$("#municipio").append(`<option value=${element.id}> ${element.nom_municipio} </option>`);
		});
	});
});
