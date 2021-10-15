<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //lock untuk table dalam database
	protected $table = 'faq';

    protected $fillable = ['pertanyaan', 'jawaban', 'type'];

    protected $primaryKey = 'id_faq';
}
