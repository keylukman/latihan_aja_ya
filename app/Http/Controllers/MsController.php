<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Ms;
use App\Customer;
use Hash;
use Redirect;

class MsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$ms =Ms::with('customer')->get();
		return View ('ms.index')->with ('ms',$ms);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$cust = Customer::all();
   		return View('ms.create')->with('customer',$cust); 
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
		// dd($input);

		$ms = new Ms();
		$ms->id_cus =  $input['id_cus'];
		$ms->nmpro =  $input['nmpro'];
		$ms->qtyms =  $input['qtyms'];
		$ms->typems =  $input['typems'];
		$ms->startms =  $input['startms'];
		$ms->endms = $input['endms'];
		$ms->save();
		return Redirect::to('ms');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idms)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idms)
	{
		$ms = Ms::find($idms);
		$cust = Customer::all();
		$data = array(
			'ms' => $ms,
			'cust' => $cust
			);
   		return View('ms.edit')->with('data',$data);
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idms)
	{
			$input = Request::all();
			$ms = Ms::find($idms);
			$ms->id_cus =  $input['id_cus'];
			$ms->nmpro =  $input['nmpro'];
			$ms->qtyms =  $input['qtyms'];
			$ms->typems =  $input['typems'];
			$ms->startms =  $input['startms'];
			$ms->endms = $input['endms'];
			$ms->save();
		return Redirect::to('ms');
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idms)
	{
		$ms = Ms::find($idms)->delete();
		return Redirect::to('ms');
	}

}
