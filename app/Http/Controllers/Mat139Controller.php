<?php namespace App\Http\Controllers;

use App\Jour;
use App\Intervention;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Mat139Controller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( Request $req )
	{
		$p = $req->has('pages') ? $req->get('pages') : 10;
		$jours = Jour::desc()->paginate( $p );
		$interventions = Intervention::desc()->get();
		
		return view( 'index', ['jours' => $jours, 'interventions' => $interventions] );
	}
}
