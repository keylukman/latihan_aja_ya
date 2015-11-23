<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $table="Customers";
	protected $primaryKey="id_cus";
	protected $fillable=["namacus",'tlpcus','faxcus','emailcus','alamatcus'];
	
	public function pic() {
		return $this->hasMany('App\Pic','id_cus','id_cus');
	}
	public function kas() {
		return $this->hasMany('App\kas','id_cus','id_cus');
	}
	public function tr() {
		return $this->hasMany('App\tr','id_cus','id_cus');
	}
	public function ms() {
		return $this->hasMany('App\ms','id_cus','id_cus');
	}
	public function adobe() {
		return $this->hasMany('App\adobe','id_cus','id_cus');
	}
}
