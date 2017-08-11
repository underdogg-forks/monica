<?php
namespace App\Http\Requests\People;

use Illuminate\Foundation\Http\FormRequest;

class DebtRequest extends FormRequest
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
            'in_debt' => 'required',
            'amount' => 'required',
            'reason' => 'string|nullable',
            'status' => '',
        ];
    }
}
