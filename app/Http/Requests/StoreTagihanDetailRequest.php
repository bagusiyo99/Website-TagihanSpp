<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTagihanDetailRequest extends FormRequest
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
                'tagihan_id' => 'required',
                'nama_biaya' => 'required|numeric',
                'jumlah_biaya' => 'required|numeric',
        ];
    }

        protected function prepareForValidation()
    {
        $this->merge([
            'jumlah_biaya' => str_replace('.', '', $this->jumlah_biaya),
        ]);
    }

}
