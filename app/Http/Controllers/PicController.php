<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Customer;
use App\pic;
use Hash;
use Redirect;
class PicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pic =Pic::with('customer')->get();
		return View ('pic.index')->with ('pic',$pic);
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
   		return View('pic.create')->with('customer',$cust); 
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

		$pic= new Pic();
		$pic->id_cus =  $input['id_cus'];
		$pic->namapic =  $input['namapic'];
		$pic->tlppic =  $input['tlppic'];
		$pic->emailpic = $input['namapic'];
		$pic->namatgs = $input['nmptgs'];
		$pic->save();
		return Redirect::to('customer/create');
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
	public function edit($idpic)
	{
		$pic = Pic::find($idpic);
		$cust = Customer::all();
		$data = array(
			'pic' => $pic,
			'cust' => $cust
			);
   		return View('pic.edit')->with('data',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($idpic)
	{
			$input = Request::all();
			$pic = Pic::find($idpic);
		 	$pic->id_cus =  $input['id_cus'];
			$pic->namapic =  $input['namapic'];
			$pic->tlppic =  $input['tlppic'];
			$pic->emailpic = $input['namapic'];
			$pic->namatgs = $input['nmptgs'];
			$pic->save();
			return Redirect::to('pic');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
public function destroy($idpic)
	{
		$pic = Pic::find($idpic)->delete();
		return Redirect::to('pic');
	}

}
