<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    //lock untuk table dalam database
	protected $table = 'komentar';

    protected $fillable = ['nama', 'email', 'komentar', 'created_at', 'url', 'status'];

    protected $primaryKey = 'id';
}
