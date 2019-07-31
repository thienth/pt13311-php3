<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DateTime;
class AddPostRequest extends FormRequest
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

        $reqDate = new DateTime('now');
        $reqDate = $reqDate->modify('+20 days');

        return [
            'title' => 'required|unique:posts|max:20',
            'content' => 'required',
            'image' => 'required|file|mimes:jpeg,png,jpg',
            'publish_date' => "after_or_equal:".$reqDate->format('Y-m-d')
        ];
    }

    public function messages(){
        return [
            'title.required' => "Hãy nhập tiêu đề bài viết",
            'title.unique' => "Tiêu đề đã tồn tại, hãy chọn tiêu đề khác",
            'title.max' => "Tiêu đề không được vượt quá 20 ký tự"
        ];
    }
}
