<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\DerechoSaveRequest;
use App\Http\Resources\DerechoResource;
use App\Models\DerechoCultural;
use Illuminate\Http\Request;

class DerechosCulturalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return DerechoResource::collection(DerechoCultural::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DerechoSaveRequest $request)
    {

        if($request->start_time == $request->final_hour){
            return response()->json([
                'error' => 'error',
                'msj'   => 'Las horas de inicio y fin deben de ser diferentes'
            ],400);
        }

        $cultural = DerechoCultural::select('id')->orderBy('id', 'desc')->first();

        $consecutive = 0;

        if($cultural){
            $consecutive = $cultural->id + 1;
        }else {
            $consecutive = 1;
        }

        $derecho = DerechoCultural::create([
            'consecutive'       => 'F'.$consecutive,
            'activity_name'     => $request->activity_name,
            'activity_date'     => $request->activity_date,
            'start_time'        => $request->start_time,
            'final_hour'        => $request->final_hour,
            'expertise_id'      => $request->expertise_id,
            'nac_id'            => $request->nac_id,
            'cultural_right_id' => $request->cultural_right_id
        ]);

        return (new DerechoResource($derecho))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DerechoSaveRequest $request, $id)
    {

        $cultural = DerechoCultural::where('id', $id)->first();

        $cultural->update([
            'activity_name'     => $request->activity_name,
            'activity_date'     => $request->activity_date,
            'start_time'        => $request->start_time,
            'final_hour'        => $request->final_hour,
            'expertise_id'      => $request->expertise_id,
            'nac_id'            => $request->nac_id,
            'cultural_right_id' => $request->cultural_right_id
        ]);

        return (new DerechoResource($cultural))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DerechoCultural::where('id',$id)->delete();

        return response()->json(null,204);
    }
}
