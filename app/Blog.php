<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    //lock untuk table dalam database
	protected $table = 'guide';

    protected $fillable = ['judul', 'isi', 'image', 'url', 'type'];

    protected $primaryKey = 'id_artikel';

}
