<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateCatedralElement extends FormRequest
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

            'name' => 'required',
            'slug' => 'required|unique:catedrals,slug,'.$this->elemento->id,
            'orden' => 'required',
            'resumen' => 'required',
            'historia' => 'required',
            'categoria' => 'required',
            'seoDescription' => 'required',
            'categoria' => 'required'
        ];
    }
    protected function prepareForValidation()
    {
        $new = str_replace(['<p>','</p>'],'',$this->seoDescription);
        $new =str_replace('<strong>','<b>',$new);
        $new =str_replace('</strong>','</b>',$new);
        $this->merge([
            'seoDescription' => $new
        ]);
    }
}
