<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Customer;
use Hash;
use Redirect;
class CustomerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$customer =Customer::all();
		// dd($customer);
		return View ('customer.index')->with ('customer',$customer);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View ('customer.create');
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

		$customer = new Customer();
		$customer->namacus =  $input['namacus'];
		$customer->tlpcus =  $input['tlpcus'];
		$customer->faxcus = $input['faxcus'];
		$customer->emailcus = $input['emailcus'];
		$customer->alamatcus = $input['alamatcus'];
		$customer->save();
		return Redirect::to('customer');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idcus)
	{
		$customer = Customer::with('pic','kas','ms','tr')->find($idcus);
		return View('customer.show')->with('customer', $customer);//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idcus)
	{
		$customer = Customer::find($idcus);
   		return View('customer.edit')->with('customer', $customer);//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idcus)
	{
			$input = Request::all();
		 	$customer = Customer::find($idcus);
		 	$customer->namacus =  $input['namacus'];
			$customer->tlpcus =  $input['tlpcus'];
			$customer->faxcus = $input['faxcus'];
			$customer->emailcus = $input['emailcus'];
			$customer->alamatcus = $input['alamatcus'];
			$customer->save();
		return Redirect::to('customer');
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idcus)
	{
		$customer = Customer::find($idcus)->delete();
		return Redirect::to('customer');
	}

}
