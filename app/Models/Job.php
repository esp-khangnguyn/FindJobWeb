<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Job
 * 
 * @property int $id
 * @property int $name
 * @property float $salary
 * @property string $reasons
 * @property string $descriptions
 * @property string $requirements
 * @property int $eid
 * @property Carbon $create_on
 * 
 * @property Employer $employer
 * @property Collection|Apply[] $applies
 *
 * @package App\Models
 */
class Job extends Model
{
	protected $table = 'jobs';
	public $timestamps = false;

	protected $casts = [
		'name' => 'int',
		'salary' => 'float',
		'eid' => 'int',
		'create_on' => 'datetime'
	];

	protected $fillable = [
		'name',
		'salary',
		'reasons',
		'descriptions',
		'requirements',
		'eid',
		'create_on'
	];

	public function employer()
	{
		return $this->belongsTo(Employer::class, 'eid');
	}

	public function applies()
	{
		return $this->hasMany(Apply::class, 'jid');
	}
}
