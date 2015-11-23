<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Customer;
use App\Tr;
use Hash;
use Redirect;

class TrController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$tr =Tr::with('customer')->get();
		return View ('tr.index')->with ('tr',$tr);
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
   		return View('tr.create')->with('customer',$cust); 
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

		$tr = new Tr();
		$tr->id_cus =  $input['id_cus'];
		$tr->licensetr = $input['licensetr'];
		$tr->qtytr = $input['qtytr'];
		$tr->starttr = $input['starttr'];
		$tr->endtr = $input['endtr'];
		
		$tr->save();
		return Redirect::to('tr');
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idtr)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idtr)
	{
		$tr = Tr::find($idtr);
		$cust = Customer::all();
		$data = array(
			'tr' => $tr,
			'cust' => $cust
			);
   		return View('tr.edit')->with('data',$data);
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idtr)
	{
			$input = Request::all();
			$tr = Tr::find($idtr);
		 	$tr->id_cus =  $input['id_cus'];
			$tr->licensetr = $input['licensetr'];
			$tr->qtytr = $input['qtytr'];
			$tr->starttr = $input['starttr'];
			$tr->endtr = $input['endtr'];
			$tr->save();
			return Redirect::to('tr');
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idtr)
	{
		$tr = Tr::find($idtr)->delete();
		return Redirect::to('tr');
		//
	}

}
