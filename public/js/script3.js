//se optiene la funcion de la accion click 
//hacemos referencia a la clase paginacion 
//creamos una funcion
//funcion; obtenemos un evento
$(document).on('click','pagination a', function(e){
	//desencadena un evento
	e.preventDefault();
	// crear una variable pagina que hace referencia al atributo href
	//para solo necesitar el id de la ruta
	//utilizamos la funcion split para dividir la cadena
	//utilizamos la posicion 1
	var page = $(this).attr('href').split('page=')[1];
	//variable route
	var route = "http://localhost:8000/buscar";
	///se imprime en consola 
	///console.log(page);
	//peticion ajax 
	$.ajax({
		//especificacion de la url de la ruta
		url:route, 
		//data que vamos a enviar , que es en ferencia  nuestra pagina
		data: {page: page},
		//tipo de metodo que vamos a hacer nuestra peticion 
		type: 'GET',
		//tipo de dato
		dataType: 'json',
		//funcion success donde se recive la respuesta
		success: function(data){
			$(".Contratos").html(data);
		}
		
	});
});