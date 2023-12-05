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
 * @property string|null $name
 * @property string|null $location
 * @property string|null $working_time
 * @property string|null $introduce
 * @property string|null $own_project
 * @property string|null $prize
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
		'introduce',
		'own_project',
		'prize'
	];

	public function accounts()
	{
		return $this->hasMany(Account::class, 'employerID');
	}

	public function jobs()
	{
		return $this->hasMany(Job::class, 'eid');
	}
}
