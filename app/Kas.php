<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model {

	//
	protected $table="kas";
	protected $primaryKey="id_kas";
	protected $fillable=["id_cus","license",'qty','start','end'];
	public function customer() {
		return $this->belongsTo('App\Customer','id_cus','id_cus');
	}

}
