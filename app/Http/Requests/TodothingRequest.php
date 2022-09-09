<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class TodothingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "deadline"=>"required|date|after:today",
            "title"=>"required",
            "detail"=>"required"
        ];
        /*予定表なので今日より前のものを登録できないようにバリデーションした */
    }
}

 