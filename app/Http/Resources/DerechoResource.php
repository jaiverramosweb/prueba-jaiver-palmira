<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class DerechoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'consecutive'       => $this->consecutive,
            'activity_name'     => $this->activity_name,
            'activity_date'     => $this->activity_date,
            'start_time'        => $this->startTime(),
            'final_hour'        => $this->finalHour(),
            'expertise_id'      => $this->expertise(),
            'nac_id'            => $this->nac(),
            'cultural_right_id' => $this->cultural(),
        ];
    }

    public function with($request)
    {
        return [
            'status'    => 'success'
        ];
    }

    public function withResponse($request, $response)
    {
        $response->header('Accept', 'application/json');   
    }
}
