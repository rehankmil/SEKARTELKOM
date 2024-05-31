<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    use HasFactory;

    protected $table = 'posisi';
    protected $primaryKey = 'id_posisi';
    protected $fillable = [
        'nama'
    ];

    public function pengguna()
    {
        return $this->hasMany(Pengguna::class, 'id_posisi', 'id_posisi');
    }
}
