<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toram extends Model
{
    //lock untuk table dalam database
	protected $table = 'guide';

    protected $fillable = ['judul', 'isi', 'image', 'url', 'type', 'game'];

    protected $primaryKey = 'id_artikel';

}
