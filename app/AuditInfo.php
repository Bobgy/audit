<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditInfo extends Model {

	protected $table = 'audit_info';

	protected $primaryKey = 'audit_id';

	public $timestamps = false;

	/**
	 * get the state of bill where bill_id = $id in Chinese
	 * @param	int	$id
	 * @return String
	 */
	static public function getFormattedState($id) {
		$action = AuditInfo::getState($id);
		switch ($action) {
			case 0: return '未处理';
			case 1: return '等待二次审查';
			case 2: return '审查通过';
			case 3: return '审查不通过';
		}
		return '错误: 无效状态';
	}

	/**
	 * get the state of bill where bill_id = $id in integer
	 * 0 -> unprocessed, 1 -> passed once, 2 -> all passed, 3 -> error
	 * @param	int	$id
	 * @return int
	 */
	static public function getState($id) {
		$auditRecord = AuditInfo::where('bill_id', $id)
											->orderBy('date', 'desc')
											->first();
		if ($auditRecord == null) return 0;
		return $auditRecord->action;
	}

}
