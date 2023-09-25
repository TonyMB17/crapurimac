<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;
    protected $table = 'denuncia';
    protected $primarykey = 'id';
    protected $filleable = ['dni','nombre','telefono','correo',
                            'denunciado','institucion',
                            'cargo','fecha','descripccion',
                            'testigos','file'];
    protected $guarded = [];
}
