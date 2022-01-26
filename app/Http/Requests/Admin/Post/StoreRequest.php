<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids*' => 'nullable|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'It is field need for paste',
            'title.string' => 'Data must match string type',
            'content.required' => 'It is field need for paste',
            'content.string' => 'data must match string type',
            'preview_image.required' => 'This field is required',
            'preview_image.file' => 'Necessary to choose file',
            'main_image.required' => 'This field is required',
            'main_image.file' => 'Necessary to choose file',
            'category_id.required' => 'This field is required',
            'category_id.integer' => 'Id should be number',
            'category_id.exists' => 'Id categories must be in the database',
            'tag_ids.array' => 'Necessary to send data array'
        ];
    }
}
