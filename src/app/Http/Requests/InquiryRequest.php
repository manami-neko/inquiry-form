<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InquiryRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email'=> 'required|email|max:255',
            'tel' => 'required|size:11',
            'item_id' => 'required',
            'content' => 'required|max:500'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.max' => '名前を255文字以内で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.max' => 'メールアドレスを255文字以内で入力してください',
            'email.email' => '有効なメールアドレスを入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.size' => '電話番号を11桁で入力してください',
            'item_id.required' => '商品を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問い合わせ内容を500文字以内で入力してください'
        ];
    }

}
