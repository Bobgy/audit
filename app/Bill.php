<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

	public function formatState($state) {
		switch ($this->latestState()) {
			case 0: return '未处理';
			case 1: return '等待二次审查';
			case 2: return '审查通过';
			case 3: return '审查不通过';
		}
		return '错误: 无效状态';
	}

	public function latestFormattedState() {
		return $this->formatState($this->latestState());
	}

	static public function addQueryIfNotEmpty($query, Request $req, $col, $operator='=', $val=null) {
		if (!isset($val)) $val = $col;
		$val = $req[$val];
		if (isset($val) && $val != '') {
			return $query->where($col, $operator, $val);
		}
		return $query;
	}

}
