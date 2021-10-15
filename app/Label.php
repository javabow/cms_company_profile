<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{

    //lock untuk table dalam database
	protected $table = 'label';

    protected $fillable = ['nama_label'];

    protected $primaryKey = 'id_label';

}
