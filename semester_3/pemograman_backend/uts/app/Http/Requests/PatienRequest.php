<?php

namespace App\Http\Requests;

use App\Traits\ReturnResponser;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class PatienRequest extends FormRequest
{
    use ReturnResponser;

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
        switch ($this->method()) {
            case 'POST':
                return [
                    'name' => 'required|string',
                    'phone' => 'required|string',
                    'address' => 'required|string',
                    'status' => 'required|string',
                    'in_date_at' => 'required|date',
                    'out_date_at' => 'required|date'
                ];
                break;
            case 'PUT':
                return [
                    'name' => 'sometimes|string',
                    'phone' => 'sometimes|string',
                    'address' => 'sometimes|string',
                    'status' => 'sometimes|string',
                    'in_date_at' => 'sometimes|date',
                    'out_date_at' => 'sometimes|date'
                ];
                break;
            default:
                break;
        }
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException($this->errorvalidator($validator->errors()->first()));
    }
}
