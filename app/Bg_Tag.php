<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bg_Tag extends Model {

	protected $table = 'bg_tags';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];

	public function posts() {

		return $this->hasMany('App\Bg_Post' , 'bg_tagId' , 'id');
	}

}
