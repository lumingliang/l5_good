<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bg_Post extends Model {

	protected $table = 'bg_posts';

	protected $fillable = [ 'title' , 'content' , 'bg_tagId' ];

	public function tag() {

		return $this->belongsTo('Bg_Tag' , 'bg_tagId' , 'id');
	}
	
}





