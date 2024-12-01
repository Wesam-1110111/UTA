<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storelecture extends FormRequest
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
            // 'title' => 'required',
            // 'lecture_type' => 'required',
            // 'file_name' => 'required|mimes:pdf,ppt,pptx,mp4,mov,ogg | max:20000',
            // 'Subject_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // 'title.required' => trans('validation.required'),
            // 'Subject_id.required' => trans('validation.required'),
            // 'lecture_type.required' => trans('validation.unique'),
            // 'file_name.required' => trans('validation.unique'),
        ];
    }
}
