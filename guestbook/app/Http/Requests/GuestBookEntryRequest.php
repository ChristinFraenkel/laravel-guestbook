<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestBookEntryRequest extends FormRequest{
    public function rules(){
       return [
            'username' => 'required|max:255',
            'email' => 'email|max:255|nullable',
            'subtitle' =>'required|max:255',
            'body' => 'required'
       ];
    }
}