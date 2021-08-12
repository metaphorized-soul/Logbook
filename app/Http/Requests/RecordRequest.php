<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'from'=>['required','min:4'],
            'to'=>['required','min:4'],
            'initial_kilometers'=>'required',
            'final_kilometers'=>'required',
            'total_kilometers'=>'required',
            
        ];
    }
}
