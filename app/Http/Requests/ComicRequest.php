<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:50',
            'price' => 'required|min:3|max:10',
            'series' => 'required|min:3|max:50',
            'sales_date' => 'required',
            'type' => 'required|min:3|max:30',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Il titolo è un campo obbligatorio',
            'title.min'=>'Il titolo deve contenere almeno :min caratteri',
            'title.max'=>'Il titolo deve contenere almeno :max caratteri',
            'price.required'=>'Il prezzo è un campo obbligatorio',
            'price.min'=>'Il prezzo deve contenere almeno :min caratteri',
            'price.max'=>'Il prezzo deve contenere almeno :max caratteri',
            'series.required'=>'Serie è un campo obbligatorio',
            'series.min'=>'Serie deve contenere almeno :min caratteri',
            'series.max'=>'Serie deve contenere almeno :max caratteri, il formato è: YYYY/MM/DD',
            'sales_date.required'=>'Data di uscita è un campo obbligatorio',
            'type.required'=>'Il tipo è un campo obbligatorio',
            'type.min'=>'Il tipo deve contenere almeno :min caratteri',
            'type.max'=>'Il tipo deve contenere almeno :max caratteri',
        ];
    }
}
