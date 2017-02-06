function openVentana(){//llama a la funcion de abrir una venta xtra
	$(".ventana").slideDown("slow");//accion de sobresalir y darle una background transparente sin afectar las funciones internas
}
function closeVentana(){
	$(".ventana").slideUp("fast");
}