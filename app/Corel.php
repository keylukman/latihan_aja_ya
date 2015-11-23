<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Corel extends Model {
	protected $table="Corels";
	protected $primaryKey="idcr";
	protected $fillable=["id_cus","licensecr",'qtycr','typecr','startcr','endcr'];
	public function customer() {
		return $this->belongsTo('App\Customer','id_cus','id_cus');
	}
	//

}
