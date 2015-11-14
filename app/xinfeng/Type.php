<?php namespace xinfeng;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {
	protected $table = 'types';
	protected $fillable = [ 'name' ];
	
	public function goods() {

		return $this->belongsToMany('xinfeng\Good' , 'type_good' , 'typeId' , 'goodId' )
		->withTimestamps();
	}
}
