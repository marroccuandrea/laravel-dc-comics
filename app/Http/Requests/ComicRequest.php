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
            'title' => 'required|min:5|max:255',
            'description' => 'max:255',
            'thumb' => 'required|min:5|max:255',
            'price' => 'required',
            'series' => 'required|min:5|max:255',
            'sale_date' => 'required',
            'type' => 'required|min:5|max:255',
            'artists' => 'required|min:5|max:255',
            'writers' => 'required|min:5|max:255',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve avere al massimo :max caratteri',
            'description.max' => 'La descrizione deve avere al massimo :max caratteri',
            'thumb.required' => 'La thumb è un campo obbligatorio',
            'thumb.min' => 'La thumb deve avere almeno :min caratteri',
            'thumb.max' => 'La thumb deve avere al massimo :max caratteri',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.min' => 'La serie deve avere almeno :min caratteri',
            'series.max' => 'La serie deve avere al massimo :max caratteri',
            'sale_date.required' => 'La data di uscita è un campo obbligatorio',
            'type.required' => 'Il tipo è un campo obbligatorio',
            'type.min' => 'Il tipo deve avere almeno :min caratteri',
            'type.max' => 'Il tipo deve avere al massimo :max caratteri',
            'artists.required' => 'Gli artisti sono un campo obbligatorio',
            'artists.min' => 'Gli artisti devono avere almeno :min caratteri',
            'artists.max' => 'Gli artisti devono avere al massimo :max caratteri',
            'writers.required' => 'I writer sono un campo obbligatorio',
            'writers.min' => 'I writer devono avere almeno :min caratteri',
            'writers.max' => 'I writer devono avere al massimo :max caratteri',
        ];
    }
}
