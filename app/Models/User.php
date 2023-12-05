<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $introduce
 * @property string|null $education
 * @property string|null $experience
 * @property string|null $skill
 * @property string|null $own_project
 * @property string|null $certificate
 * @property string|null $prize
 * 
 * @property Collection|Account[] $accounts
 * @property Collection|Apply[] $applies
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'introduce',
		'education',
		'experience',
		'skill',
		'own_project',
		'certificate',
		'prize'
	];

	public function accounts()
	{
		return $this->hasMany(Account::class, 'userID');
	}

	public function applies()
	{
		return $this->hasMany(Apply::class, 'uid');
	}
}
