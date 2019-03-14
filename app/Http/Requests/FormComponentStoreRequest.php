<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormComponentStoreRequest extends FormRequest
{
    public $validator = null;
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
            'component' => 'required|min:20',
            'component_id' => 'required|min:4',
            'component_name' => 'required|min:4',
            
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
   
        $this->validator = $validator;
    }
}
