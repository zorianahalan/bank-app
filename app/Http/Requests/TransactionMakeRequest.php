<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionMakeRequest extends FormRequest
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
            'message' => 'string',
            'type_id' => 'numeric',
            'status' => 'string',
            'balance_after' => 'numeric',
            'amount' => 'numeric',
            'number' => 'numeric',
            'to_number' => 'numeric'
        ];
    }
}
