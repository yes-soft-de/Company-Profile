<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'post.*.title'=>'required',
            'category'=>'required|array',
            'author_id'=>'required',
            'cover'=>'required',
            'post.*.body'=>'required|min:8|max:255',
            'post.*.meta_desc'=>'required',
            'post.*.keyword'=>'required',
        ];
    }
    public function messages()
    {
        return [

            'required'=>'this field is required',
            'post.*.body.min' => 'Your Portfolio\'s description  Is Too Short',
            'category.array' => 'Your Portfolio\'s category is required array',
            'category.required' => 'Your Portfolio\'s category is required',
            'post.*.title.required' => 'the title is required',
            'post.*.body.required' => 'the description is required',
            'post.*.meta_desc.required' => 'the meta_desc is required',
            'post.*.keyword.required' => 'the keyword is required'
        ];
    }
}
