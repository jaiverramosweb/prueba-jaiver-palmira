<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DerechoSaveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'activity_name' => 'required',
            'activity_date' => 'required',
            'start_time' => 'required',
            'final_hour' => 'required',
            'expertise_id' => 'required',
            'nac_id' => 'required',
            'cultural_right_id' => 'required'
        ];
    }
}
