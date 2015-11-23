<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Kas;
use App\Customer;
use Hash;
use Redirect;

class KasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$kas =Kas::with('customer')->get();
		return View ('kas.index')->with ('kas',$kas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$cust = Customer::all();
   		return View('kas.create')->with('customer',$cust); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$input = Request::all();
		// dd($input);

		$kas = new Kas();
		$kas->id_cus =  $input['id_cus'];
		$kas->license =  $input['license'];
		$kas->qty =  $input['qty'];
		$kas->start =  $input['start'];
		$kas->end =  $input['end'];
		
		$kas->save();
		return Redirect::to('kas');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idkas)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idkas)
	{
		$kas = Kas::find($idkas);
		$cust = Customer::all();
		$data = array(
			'kas' => $kas,
			'cust' => $cust
			);
   		return View('kas.edit')->with('data',$data);
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idkas)
	{
			$input = Request::all();
			$kas = Kas::find($idkas);
			$kas->id_cus =  $input['id_cus'];
			$kas->license =  $input['license'];
			$kas->qty =  $input['qty'];
			$kas->start =  $input['start'];
			$kas->end =  $input['end'];
		
			$kas->save();
			return Redirect::to('kas');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idkas)
	{
		$kas = Kas::find($idkas)->delete();
		return Redirect::to('kas');//
	}

}
