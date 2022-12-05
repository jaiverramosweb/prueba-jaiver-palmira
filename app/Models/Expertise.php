<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    

    protected $fillable=[
        'name'
    ];

    public function derechoCultural()
    {
        return $this->belongsTo(DerechoCultural::class);
    }
}
