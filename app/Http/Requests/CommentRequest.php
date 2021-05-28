<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'student_name' => 'required|min:5|max:32',
            'student_surname' => 'required|min:5|max:32',
            'comment' => 'required|min:16|max:256',
            'student_group' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'student_name' => 'name',
            'student_surname' => 'surname',
            'comment' => 'your_comment',
            'student_group' => 'group'
        ];
    }

    public function messages()
    {
        return [
            'student_name.required' => 'name field is empty',
            'student_surname.required' => 'surname field is empty',
            'comment' => 'your_comment',
            'student_group' => 'group'
        ];
    }
}
