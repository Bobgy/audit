<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditInfo extends Model {

	protected $table = 'audit_info';

	protected $primaryKey = 'audit_id';

	public $timestamps = false;

	public function bill()
	{
		return $this->belongsTo('App\Bill', 'audit_id', 'audit_id');
	}

}
