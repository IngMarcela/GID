<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

// importacion de los modelos que seran utilizados para manipular los datos dentro de la base de datos
use GID\Estante;
use GID\Caja;
use GID\Carpeta;
use GID\Departamento;
use GID\Municipio;
use GID\Vereda;
use GID\Estado;
use GID\Contratista;
use GID\Contratante;
use GID\TipoContratante;
use GID\TipoContrato;
use GID\RUP;

// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios

use GID\Http\Requests\ContratoCrearRequest;

// csrf token
use Session;

// redireccionar a otras vistas
use Redirect;


use Illuminate\Http\Request;

class ContratoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// carga los registros almacenados en la base de datos para las correspondientes tablas a las
		// que hacen referencia los modelos
		$cajas = Caja::lists('num_caja','id');
		$carpetas = Carpeta::lists('num_carpeta','id');
		$estantes = Estante::lists('num_estante','id');
		$departamentos = Departamento::lists('nom_departamento','id');
		$estados = Estado::lists('estado','id');
		$contratistas = Contratista::lists('contratista','id');
		$tipo_contratantes = TipoContratante::lists('tipo_contratante','id');
		$tipo_contratos = TipoContrato::lists('tipo_contrato','id');
		// renderiza la vista y le envia los registros 
		return view('contrato.create',compact('estantes','cajas','carpetas','departamentos','estados','contratistas','tipo_contratantes','tipo_contratos'));
	}


	public function getMunicipios(Request $request, $id){
		// valida si la peticion se realizo mediante ajax	
		if($request->ajax()){
			// invoca el metodo municipios() perteneciente al modelo Municipio
			$municipios = Municipio::municipios($id);
			// envia la respuesta mediante un tipo json
			return response()->json($municipios);
		}
	}
	
	
	public function getVeredas(Request $request, $id){
		// valida si la peticion se realizo mediante ajax	
		if($request->ajax()){
			// invoca el metodo veredas() perteneciente al modelo Vereda
			$veredas = Vereda::veredas($id);
			// envia la respuesta mediante un tipo json
			return response()->json($veredas);
		}
	}
	
	
	public function getRup(Request $request, $id){
		// valida si la peticion se realizo mediante ajax	
		if($request->ajax()){
			// invoca el metodo municipios() perteneciente al modelo Municipio
			$rups = RUP::rups($id);
			// envia la respuesta mediante un tipo json
			return response()->json($rups);
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ContratoCrearRequest $request)
	{
		$resultado;
		
		\DB::beginTransaction();

        try {
		
			// obtiene el id en caso de encontar que el rup entrante ya se encontraba almacenado en la tabla rups 
			$rup=RUP::select('id_contratista')->where('serie_rup', '=', $request['RUP'])->get();
			
			// si el rup entrante no estaba guardado en la tabla rups, se procede a guardarlo
			if($rup->first() == null){
				\GID\RUP::create([
				'serie_rup' 			=> $request['RUP'],
				'id_contratista' 		=> 	$request['Contratista'],
				]);
				$ultimo_RUP = RUP::select('id')->orderby('created_at','DESC')->take(1)->get();
				$id_contratista = $ultimo_RUP[0]->id_contratista;
			}else{
				$id_contratista = $rup[0]->id_contratista;
			}		
			
			
			// MySql pasa la entrada a minusculas y comparar con minusculas!
			$contratante=Contratante::select('id')->where('contratante', '=',  $request['Contratante'])->where('id_tipo_contratante', '=',  $request['Tipo_contratante'])->get();
			
				
			if($contratante->first() == null){
				\GID\Contratante::create([
					'contratante'			=>	$request['Contratante'],
					'id_tipo_contratante' 	=> 	$request['Tipo_de_Contratante'],
				]);
				
				// obtiene el id perteneciente al ultimo registro insertado en la tabla contratantes 
				$ultimo = Contratante::select('id')->orderby('created_at','DESC')->take(1)->get();
				$id_contratante = $ultimo[0]->id;
			}
			else{
				
				$id_contratante = $contratante[0]->id;
				
			}
			
			
			$id_contrato ;
			
			\GID\Contrato::create([
				'num_contrato' 			=> 	$request['No_Contrato'],
				'objeto' 				=> 	$request['Objeto'],
				'id_vereda' 			=> 	null,
				'id_municipio' 			=> 	$request['Municipio_o_Vereda'],
				'id_departamento' 		=> 	$request['Departamento'],
				'valor_presupuestado' 	=> 	$request['Valor_Presupuestado'],
				'valor_ejecutado' 		=> 	$request['Valor_Ejecutado'],
				'id_estado' 			=> 	$request['Estado_del_Contrato'],
				'id_estante' 			=> 	$request['Estante'],
				'id_caja' 				=> 	$request['Caja'],
				'id_carpeta' 			=> 	$request['Carpeta'],
				'fecha_inicio' 			=> 	$request['Fecha_de_Inicio'],
				'comentario' 			=> 	$request['Comentario'],
				'id_tipo_contrato' 		=> 	$request['Tipo_de_Contrato'],
				'id_contratante' 		=> 	$id_contratante,
				'id_contratista' 		=> 	$id_contratista,
			]);
			
			$ultimo_contrato = \GID\Contrato::select('id')->orderby('created_at','DESC')->take(1)->get();
			$id_contrato = $ultimo_contrato[0]->id;
			// Hacemos los cambios permanentes ya que no han habido errores
        	\DB::commit();
			
			
		
			
		}
        // Ha ocurrido un error, devolvemos la BD a su estado previo y hacemos lo que queramos con esa excepción
        catch (\Exception $e)
        {
                \DB::rollback();
				
		 		return $resultado='ERROR (' . $e->getCode() . '): ' . $e->getMessage();
        }

        
		//Session::flash('message','Contrato Agregado Correctamente');
		//return Redirect::to('/contrato');
		
		return  redirect('/contrato')->with('message','Contrato Agregado Correctamente')->with('id', $id_contrato);
		
		
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	// llamado de las vistas del contrato 
	//encontramos las opciones de agregar contrato y buscar contrato
	public function contratos()
	{
		return view('contrato.contratos');
	}
	// llamado de las vistas del acta inicial
	//la funcion de la presente acta es agregar los detalles conjunto con el pdf
	public function actainicial()	
	{
		return view('contrato.actainicial');
	}
	// llamado de las vistas del acta parcial
	//la funcion de la presente acta es agregar los detalles conjunto con el pdf
	public function actaparcial()
	{
		return view('contrato.actaParcial');
	}
	// llamado de las vistas del acta final
	//la funcion de la presente acta es agregar los detalles conjunto con el pdf
	public function actafinal()
	{
		return view('contrato.actafinal');
	}
	// llamado de las vistas del archivo
	//la funcion de la presente archivo es agregar los detalles conjunto con el pdf
	public function archivos()
	{
		return view('contrato.archivos');
	}
	// llamado de las vistas de la certificacion
	//la funcion de la presente archivo es agregar los detalles conjunto con el pdf
	public function certificacion()
	{
		return view('contrato.certificacion');
	}

}
