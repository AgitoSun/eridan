<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'sku' => 'required|max:10',
            'metal' => 'required',
            'weight' => 'required|max:10',
            'size' => 'max:10',
            'availability' => 'required',
            'price' => 'numeric|nullable',
            'category_id' => 'required',
            'main_image' => 'image:jpg,jpeg',
            'image.*' => 'image:jpg,jpeg',
            'video' => 'mimes:mp4',
            'inserts' => 'max:255'
        ];
    }
}
