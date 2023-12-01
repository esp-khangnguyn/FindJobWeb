<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 * 
 * @property int $id
 * @property string $name
 * 
 * @property Collection|Account[] $accounts
 *
 * @package App\Models
 */
class Admin extends Model
{
	protected $table = 'admin';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function accounts()
	{
		return $this->hasMany(Account::class, 'uid');
	}
}
