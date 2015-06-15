<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model {

	protected $primaryKey = 'bill_id';

	public $timestamps = false;

	public function auditInfo() {
		return $this->hasMany('App\AuditInfo', 'bill_id', 'bill_id');
	}

	public function latestAudit() {
		return $this->auditInfo()->orderBy('date', 'desc')->first();
	}

	public function latestState() {
		$record = $this->latestAudit();
		if ($record == null) return 0;
		else return $record->action;
	}

	public function latestFormattedState() {
		switch ($this->latestState()) {
			case 0: return '未处理';
			case 1: return '等待二次审查';
			case 2: return '审查通过';
			case 3: return '审查不通过';
		}
		return '错误: 无效状态';
	}
}
