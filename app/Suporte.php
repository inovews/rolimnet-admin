<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    //
    public $table = 'supports';

	public $fillable = ['nome','telefone'];
}
