<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Account
 * 
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property int $role
 * @property int|null $uid
 * 
 * @property Admin|null $admin
 * @property Employer|null $employer
 * @property User|null $user
 *
 * @package App\Models
 */
class Account extends Authenticatable
{
	protected $table = 'account';
	public $timestamps = false;

	protected $casts = [
		'role' => 'int',
		'uid' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'email',
		'password',
		'role',
		'uid'
	];

	public function admin()
	{
		return $this->belongsTo(Admin::class, 'uid');
	}

	public function employer()
	{
		return $this->belongsTo(Employer::class, 'uid');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'uid');
	}
}
