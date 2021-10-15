<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{

    //lock untuk table dalam database
	protected $table = 'saran';

    protected $fillable = ['email','nama','saran'];

    protected $primaryKey = 'id_label';

}