<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turmas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'turmas';

    protected $fillable = ['turno','nivel','ano','escola_id'];

    public $timestamps = true;

    public function alunos()
    {
        return $this->hasMany(Alunos::class,'turma_id');
    }
}
