<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = ['material_id', 'endereco', 'data_coleta'];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
