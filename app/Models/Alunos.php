<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alunos extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'alunos';

    protected $fillable = ['nome,cpf,turma_id'];

    public $timestamps = true;

    protected $softDelete = true;

    public function turmas()
    {
        return $this->belongsTo(Turmas::class,'turma_id');
    }


}
