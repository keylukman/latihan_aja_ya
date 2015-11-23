<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tr extends Model {
	protected $table="trs";
	protected $primaryKey="idtr";
	protected $fillable=["id_cus","licensetr",'qtytr','startr','endtr'];
	public function customer() {
		return $this->belongsTo('App\Customer','id_cus','id_cus');
	}

}
