<?php

namespace App\Models\Pessoa;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'document_number', 'email'];
}
