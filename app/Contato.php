<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //
    public $table = 'contacts';

	public $fillable = ['nome','email','telefone','assunto','mensagem'];
}
