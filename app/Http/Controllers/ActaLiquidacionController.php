<?php namespace GID\Http\Controllers;

use GID\Http\Requests;
use GID\Http\Controllers\Controller;

use Illuminate\Http\Request;
// importacion de los request que seran utilizados para la validacion de los datos que se envian desde
// los formularios
use GID\Estante;
use GID\Folio;
use GID\ActaLiquidacion;
use GID\Contrato;
// csrf token
use Session;


use GID\Http\Requests\ActaLiquidacionCreateRequest;
class ActaLiquidacionController extends Controller {

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
		
		$ultimo_contrato = \GID\Contrato::select('id')->orderby('created_at','DESC')->take(1)->get();
			$id_contrato = $ultimo_contrato[0]->id;
		// llamado de las vistas del acta inicial
		//la funcion de la presente acta es agregar los detalles conjunto con el pdf
		// renderiza la vista y le envia los registros 
		return view('contrato.actaliquidacion',compact('estantes','id_contrato'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ActaLiquidacionCreateRequest $request)
	{
		
		\DB::beginTransaction();

        try {
        	
			if ($request->hasFile('PDF')) {
				$archivo = $request->file('PDF');
				$nombre = $archivo->getClientOriginalName();
				
				
				$request->file('PDF')->move('documentos',$nombre);
				//$archivo->move('/documentos');
			} else {
				
				dd($request->all());
			
			}
				
				//   le decimos al modelo 
				//                cree un registro en la base de datos
				\GID\ActaLiquidacion::create([
					'detalle_acta_liquidacion'			=>	$request['Detalle'],
					'valor_acta_liquidacion'			=>	$request['Valor'],
					'fecha_firma_acta_liquidacion'		=>	$request['Fecha_de_Firma'],
					'pdf_acta_liquidacion'				=>	   	$nombre,
					'observacion_acta_liquidacion'		=>	$request['Observacion'],
					'id_contrato'						=>	$request['id'],
										
			]);
			
			
			$ultima_acta = \GID\Actaliquidacion::select('id')->orderby('created_at','DESC')->take(1)->get();
			$id_acta = $ultima_acta[0]->id;
				
				
			for ($i=$request['Folio_Inicial']; $i <= $request['Folio_Final'] ; $i++) {
						 
				\GID\Folio::create([
				'id_carpeta' => $request['Carpeta'],
				'id_acta_liquidacion' => $id_acta,
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
		return redirect()->back()->with('message','Acta Liquidacion Agregada Correctamente');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contrato = Contrato::select('contratos.id as id')
		->join('actaliquidacions', 'contratos.id', '=', 'actaliquidacions.id_contrato')
			->groupBy('contratos.id')
			->where('actaliquidacions.id', '=', $id)
			->get();
		
		$acta_liquidacion = ActaLiquidacion::select('estantes.num_estante as estante','cajas.num_caja as caja','carpetas.num_carpeta as carpeta','detalle_acta_liquidacion as detalle','valor_acta_liquidacion as valor','fecha_firma_acta_liquidacion as fecha_liquidacion','observacion_acta_liquidacion as observacion','pdf_acta_liquidacion as pdf','actaliquidacions.id_contrato as id')
			->join('folios', 'actaliquidacions.id', '=', 'folios.id_acta_liquidacion')
			->join('carpetas', 'folios.id_carpeta', '=', 'carpetas.id')
			->join('cajas', 'carpetas.id_caja', '=', 'cajas.id')
			->join('estantes', 'cajas.id_estante', '=', 'estantes.id')
			->where('actaliquidacions.id', '=',$id)
			->groupby('actaliquidacions.id')
			->take(1)
			->get();			
		
		return view('contrato.actaliquidacioninformacion',compact('acta_liquidacion','contrato'));
	}
	public function getActasLiquidaciones($id)
	{
		$contrato = Contrato::select('id')
			->where('id', '=', $id)
			->get();
		
		$acta_liquidacion = ActaLiquidacion::select('detalle_acta_liquidacion as detalle','valor_acta_liquidacion as valor','fecha_firma_acta_liquidacion as fecha','observacion_acta_liquidacion as observacion','id')
			->where('id_contrato', '=',$id)
			->paginate(5);
		
		return view('contrato.actaliquidacionpaginacion',compact('acta_liquidacion','contrato'));
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
