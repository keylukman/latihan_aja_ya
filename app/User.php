<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	//
	protected $table="users";
	protected $primarykey="id";
	protected $fillable=["username",'password','nama'];
	protected $hidden=["password"];

}
