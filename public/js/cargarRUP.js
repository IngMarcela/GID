$("#contratista").change(event => {
	$.get(`/rup/${event.target.value}`,function(res,sta){ //llama la ruta rup por medio de get
		$("#rup").empty(); // vacia o limpia el input tipo text
		
		res.forEach(element => { //recorre el json que contiene la respuesta y asigna dicha respuesta al select
			
			$("#rup").val(element.serie_rup);
			
		});
	});
});
