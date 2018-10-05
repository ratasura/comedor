<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Mesa;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\MesaFormRequest;
use DB;

class MesaController extends Controller
{

	public function __construct()
	{

	}

	public function index(Request $request)
	{
		if ($request) {
			$query=trim($request->get('searchText'));
			$mesas=DB::table('mesa')->where('numeromesa','LIKE','%'.$query.'%')
			->orderBy('id','asc')
			->paginate(4);
			return view('restaurante.mesas.index',["mesas"=>$mesas, "searchText"=>$query]);

		}

	}
    

    public function create()
    {
    	return view('restaurante.mesas.create');
    }
    public function store(MesaFormRequest $request)
    {
    	$mesa = new Mesa;
    	$mesa->numeromesa=$request->get('numeromesa');
    	$mesa->save();
    	return Redirect::to('restaurante/mesas');
    }
    public function show($id)
    {
    	return view("restaurante.mesas.show",["mesa"=>Mesa::findOrFail($id)]);
    }
    public function edit($id)
    {
    		return view("restaurante.mesas.edit",["mesa"=>Mesa::findOrFail($id)]);
    }
    public function update(MesaFormRequest $request, $id)
    { 
    		$mesa = Mesa::findOrFail($id);
    		$mesa->numeromesa=$request->get('numeromesa');
    		$mesa->update();
    		return Redirect::to('restaurante/mesas');
    }
    public function destroy($id)
    {
    		$mesa = Mesa::findOrFail($id);
    		$mesa->delete();
    		return Redirect::to('restaurante/mesas');
    }

}
