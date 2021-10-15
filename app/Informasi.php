<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    //lock untuk table dalam database
	protected $table = 'informasi';

    protected $fillable = ['keterangan', 'kategori', 'tanggal', 'url'];

    protected $primaryKey = 'id_informasi';

}
