<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
        $unique_category = '|unique:categories,title';
        if ($category = $this->route('category')) {
            $unique_category .= ',' . $category->id;
        }

        return [
            'title' => 'required'  . $unique_category,
        ];
    }
}
