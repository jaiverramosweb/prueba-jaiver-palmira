<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Expertise;

class DerechoCultural extends Model
{
    use HasFactory;

    protected $table='derecho_culturals';

    protected $fillable=[
        'consecutive',
        'activity_name',
        'activity_date',
        'start_time',
        'final_hour',
        'expertise_id',
        'nac_id',
        'cultural_right_id'
    ];

    public function startTime()
    {
        return (new Carbon($this->start_time))->format('g:i A');
    }

    public function finalHour()
    {
        return (new Carbon($this->final_hour))->format('g:i A');
    }

    public function nac()
    {
        $nac = Nac::find($this->nac_id);
        return $nac->name;
    }

    public function expertise()
    {
        $expertise = Expertise::find($this->expertise_id);
        return $expertise->name;
    }

    public function cultural()
    {
        $cultural = Cultural::find($this->cultural_right_id);
        return $cultural->name;
    }

}
