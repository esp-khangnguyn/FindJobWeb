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
 * @property string $role
 * @property int|null $userID
 * @property int|null $employerID
 * @property int|null $adminID
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
		'userID' => 'int',
		'employerID' => 'int',
		'adminID' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'email',
		'password',
		'role',
		'userID',
		'employerID',
		'adminID'
	];

	public function admin()
	{
		return $this->belongsTo(Admin::class, 'adminID');
	}

	public function employer()
	{
		return $this->belongsTo(Employer::class, 'employerID');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'userID');
	}
}
