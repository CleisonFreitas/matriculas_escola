<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Escolas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'escolas';

    protected $fillable = ['descricao'];

    public $timestamps = true;

    public function turmas()
    {
        return $this->hasMany(Turmas::class,'escola_id');
    }
}
