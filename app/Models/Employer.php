<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employer
 * 
 * @property int $id
 * @property string $name
 * @property string $location
 * @property string $working_time
 * @property string $quality
 * @property string $own_project
 * @property string $prize
 * 
 * @property Collection|Account[] $accounts
 * @property Collection|Job[] $jobs
 *
 * @package App\Models
 */
class Employer extends Model
{
	protected $table = 'employer';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'location',
		'working_time',
		'quality',
		'own_project',
		'prize'
	];

	public function accounts()
	{
		return $this->hasMany(Account::class, 'uid');
	}

	public function jobs()
	{
		return $this->hasMany(Job::class, 'eid');
	}
}
