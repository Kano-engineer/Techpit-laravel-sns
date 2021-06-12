<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //-- この行を変更
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //==========ここから追加==========
            'title' => 'required|max:50',
            'body' => 'required|max:500',
            //==========ここまで追加==========
        ];
    }
    
    //==========ここから追加==========
    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'body' => '本文',
        ];
    }
    //==========ここまで追加==========
}
