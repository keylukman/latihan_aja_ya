<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\User;
use Hash;
use Redirect;


class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$user =User::all();
		return View ('user.index')->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View ('user.create');
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

		$user = new User();
		$user->username =  $input['username'];
		$user->password = Hash::make($input['password']);
		$user->nama = $input['nama'];
		$user->save();
		return Redirect::to('user');
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
		$user = User::find($id);
   		return View('user.edit')->with('user', $user);
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
		 	$input = Request::all();
		 	$user = User::find($id);
			//$user->username =  $input['username'];
			// $user->password = Hash::make($input['password']);
			$user->nama = $input['nama'];
			$user->save();
			return Redirect::to('user');
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
		$user = User::find($id)->delete();
		return Redirect::to('user');
		//
	}

}
