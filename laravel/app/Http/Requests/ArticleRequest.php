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
            'title' => 'required|max:50',
            'body' => 'required|max:500',
            //==========ここから追加==========
            'tags' => 'json|regex:/^(?!.*\s).+$/u|regex:/^(?!.*\/).*$/u',
            //==========ここまで追加==========
        ];
    }
    
    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'body' => '本文',
            //==========ここから追加==========
            'tags' => 'タグ',
            //==========ここまで追加==========
        ];
    }
    //==========ここから追加==========
    public function passedValidation()
    {
        $this->tags = collect(json_decode($this->tags))
            ->slice(0, 5)
            ->map(function ($requestTag) {
                return $requestTag->text;
            });
    }
    //==========ここから追加==========
}
