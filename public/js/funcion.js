function openVentana(ventana){//llama a la funcion de abrir una venta 
	 switch(ventana) {
	    	case 'estantes':
	    		
		        $(".ventanaEstantes").slideDown("slow");//accion de sobresalir y darle una background transparente sin afectar las funciones internas
	        break;
	        case 'cajas':
	    		
		        $(".ventanaCajas").slideDown("slow");//accion de sobresalir y darle una background transparente sin afectar las funciones internas
	        break;
	        case 'carpetas':
	    		
		        $(".ventanaCarpetas").slideDown("slow");//accion de sobresalir y darle una background transparente sin afectar las funciones internas
	        break;
	        case 'municipios':
	        	
		       	$(".ventanaMunicipios").slideDown("slow");
	        break;
	        case 'veredas':
	        	
		       	$(".ventanaVeredas").slideDown("slow");
	        break;
	    }
	
}

function closeVentana(ventana){
	
	    
	    switch(ventana) {
	    	
	    	case 'estantes':
	    		
		       	$(".ventanaEstantes").slideUp("fast");
	        break;
	        case 'cajas':
	    		
		       	$(".ventanaCajas").slideUp("fast");
	        break;
	    	case 'carpetas':
	    		
		       	$(".ventanaCarpetas").slideUp("fast");
	        break;
	        case 'municipios':
	        	
		       	$(".ventanaMunicipios").slideUp("fast");
	        break;
	        case 'veredas':
	        	
		       	$(".ventanaVeredas").slideUp("fast");
	        break;
	    }
	   
	
}

function ventana(valor,tabla,referencia) {
	alert("estante numero: "+referencia);
	switch(valor) {
	    
	    
	    case '0':
	    	switch(tabla) {
		    	case 'municipios':
		        	
		        	openVentana(tabla);
		        break;
		        case 'veredas':
		        	
		        	openVentana(tabla);
		        break;
		    }
	    break;
	    
	    
	    case '1':// dibido a que 1 es el numero del id de cada primer registro que encuentra en la base de datos
	    		// y los registros que se muestran en los selects son extraidos de la base de datos
 	   	
	    	switch(tabla) {
		    	case 'estantes':
		    		
		        	openVentana(tabla);
		        break;
		        case 'cajas':
		    		$("#NuevaCaja").val(referencia);
		        	openVentana(tabla);
		        break;
		        case 'carpetas':
		    		
		        	openVentana(tabla);
		        break;
		        
		    }
	    break;
	    
	    
	    
	}
    
}