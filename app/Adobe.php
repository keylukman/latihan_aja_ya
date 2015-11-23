<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class adobe extends Model {
	protected $table="adobes";
	protected $primaryKey="idad";
	protected $fillable=["id_cus","licensead",'qtyad','typead','startad','endad'];
	public function customer() {
		return $this->belongsTo('App\Customer','id_cus','id_cus');
	}
	//

}
