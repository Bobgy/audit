<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AuditInfo extends Model {

	protected $table = 'audit_info';

	protected $primaryKey = 'audit_id';

	public $timestamps = false;

	public function bill()
	{
		return $this->belongsTo('App\Bill', 'bill_id', 'bill_id');
	}

	public function save(array $options = array())
	{
		DB::beginTransaction();
		try {
			parent::save($options);
			$bill = $this->bill()->first();
			$bill->audit_state = $this['action'];
			$bill->save();
			DB::commit();
		} catch (Exception $e) {
			DB::rollback();
		}
	}
}
