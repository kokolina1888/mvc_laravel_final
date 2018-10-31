<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
    						'name',
							'isbn',
							'price',
							'info',
							'img_path',
							'author_id',
							'date_available'
						];
	protected $date = 'date_available';


	public function author(){

		return $this->belongsTo('App\Author');
		
	}


}
