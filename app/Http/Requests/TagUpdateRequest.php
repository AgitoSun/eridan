<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagUpdateRequest extends FormRequest
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
        $unique_tag = '|unique:tags,name';
        if ($tag = $this->route('tag')) {
            $unique_tag .= ',' . $tag->id;
        }

        return [
            'name' => 'required'  . $unique_tag,
        ];
    }
}
