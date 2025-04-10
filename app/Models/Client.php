<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "client";
    protected $primaryKey = 'idClient';

    protected $fillable = [
        'name',
        'cpf',
        'cnpj',
        'phone',
        'email',
    ];

}
