<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nac extends Model
{
    use HasFactory;

    protected $table='nacs';

    protected $fillable=[
        'name'
    ];

    public function derechoCultural()
    {
        return $this->belongsTo(DerechoCultural::class);
    }

}
