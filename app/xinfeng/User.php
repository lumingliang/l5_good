<?php namespace xinfeng;
/*
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model {

	use Authenticatable, CanResetPassword;


	protected $table = 'users';

	protected $fillable = ['name', 'email', 'password', 'phone', 'qqId', 'qqtoken' ];

	protected $hidden = ['password', 'remember_token', 'qqtoekn'];

	

	

}

<?php namespace App;*/

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'phone', 'qqId', 'qqtoken' ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
protected $hidden = ['password', 'remember_token', 'qqtoekn'];
	public function  shop() {
		return $this->hsaOne('xinfeng\Shop')

	}
}
