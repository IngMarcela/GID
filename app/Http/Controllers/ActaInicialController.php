<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

use Illuminate\Http\Request;

// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios

use GID\Estante;
use GID\Folio;
use GID\ActaInicial;

use GID\Http\Requests\ActaInicialCreateRequest;

class ActaInicialController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		$estantes = Estante::lists('num_estante','id');
		
		// llamado de las vistas del acta inicial
		//la funcion de la presente acta es agregar los detalles conjunto con el pdf
		// renderiza la vista y le envia los registros 
		return view('contrato.actainicial',compact('estantes'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ActaInicialCreateRequest $request)
	{
		
		\DB::beginTransaction();

        try {
		
		
			\GID\ActaInicial::create([
					'num_acta_inicial'					=>	$request['No_Acta'],
					'detalle_acta_inicial'				=>	$request['Detalle'],
					'valor_acta_inicial'				=>	$request['Valor'],
					'fecha_firma_acta_inicial'			=>	$request['Fecha_de_Firma'],
					'fecha_vencimiento_acta_inicial'	=>	$request['Fecha_de_Vencimiento'],
					'pdf_acta_inicial'					=>	$request['PDF'],
					'observacion_acta_inicial'			=>	$request['Observacion'],
					'id_contrato'						=>	$request['id'],
					
			]);
			
			
			$ultima_acta = \GID\ActaInicial::select('id')->orderby('created_at','DESC')->take(1)->get();
			$id_acta = $ultima_acta[0]->id;
				
				
			for ($i=$request['Folio_Inicial']; $i <= $request['Folio_Final'] ; $i++) {
						 
				\GID\Folio::create([
				'id_carpeta' => $request['Carpeta'],
				'id_acta_inicial' => $id_acta,
				'num_folio' => $i,
					
				]);
			}
		
			// Hacemos los cambios permanentes ya que no han habido errores
        	\DB::commit();
			
			
		
			
		}
        // Ha ocurrido un error, devolvemos la BD a su estado previo y hacemos lo que queramos con esa excepción
        catch (\Exception $e)
        {
                \DB::rollback();
				
		 		return $resultado='ERROR (' . $e->getCode() . '): ' . $e->getMessage();
        }

		return 'lo hiciste muy bn';
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

}
