<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = "tugas";
    protected $primaryKey = "id_tugas";
    protected $guarded = [];

    public function DetailTugas()
    {
    
        return $this->hasMany(DetailTugas::class, 'id_tugas', 'id_tugas');
    }
}
