<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostFilePicture extends Model
{
    //

	protected $table="post_files";

	protected $fillable=[

		'id',
		'post_id',
		'url',
		'extension'
	];

}
