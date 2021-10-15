<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    //lock untuk table dalam database
	protected $table = 'tag';

    protected $fillable = ['id_tag, nama_tag, id_artikel, page_type'];

    protected $primaryKey = 'id_tag';

}