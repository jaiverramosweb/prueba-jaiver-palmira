<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultural extends Model
{
    use HasFactory;

    protected $table='culturals';

    protected $fillable=[
        'name'
    ];

    public function derechoCultural()
    {
        return $this->belongsTo(DerechoCultural::class);
    }
}
