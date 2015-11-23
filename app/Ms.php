<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms extends Model {

	//
	protected $table="ms";
	protected $primaryKey="idms";
	protected $fillable=["id_cus","nmpro",'qtyms','typems','startms','endms'];
	public function customer() {
		return $this->belongsTo('App\Customer','id_cus','id_cus');
	}
}
