<?php namespace xinfeng;

use Illuminate\Database\Eloquent\Model;

class Good extends Model {

	protected $table = 'goods';
	protected $fillable = ['shop_id' , 'title' , 'price' , 'top_pic' , 'detail'];

	public function types() {

		return $this->belongsToMany('xinfeng\Type' , 'type_good' , 'goodId' , 'typeId' )
		->withTimestamps();//注意顺序
	}
}
