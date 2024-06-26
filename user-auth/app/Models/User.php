<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * model do usuário para o banco de dados
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * model da tabela user
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'age',
        'gender',
        'phone',
        'cep',
        'address',
        'number',
        'neighborhood',
        'city',
        'state',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
