<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apply
 * 
 * @property int $jid
 * @property int $uid
 * 
 * @property Job $job
 * @property User $user
 *
 * @package App\Models
 */
class Apply extends Model
{
	protected $table = 'apply';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'jid' => 'int',
		'uid' => 'int'
	];

	public function job()
	{
		return $this->belongsTo(Job::class, 'jid');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'uid');
	}
}
