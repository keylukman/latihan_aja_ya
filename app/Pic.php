<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model {

	//
	protected $table="pics";
	protected $primaryKey="idpic";
	protected $fillable=["id_cus","namapic",'tlppic','emailpic','nmptgs'];

	public function customer() {
		return $this->belongsTo('App\Customer','id_cus','id_cus');
	}
}
