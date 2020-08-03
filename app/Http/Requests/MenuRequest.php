<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class MenuRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'title' => ['required', 'min:2', 'max:64'],
            'price' => ['required', 'between: 0,9999.99'],
            'weight' => ['required', 'integer', 'min:1', 'max:4'],
            'meat' => ['required', 'integer', 'min:1', 'max:4', 'lte:weight'],
            'about' => ['required', 'min:3', 'max:100']
        ];
    }
    
    public function messages()
    {
        return [
            'title.min' => 'Please enter at least 2 characters for menu title',
            'title.max' => 'Please enter no more than 64 characters for author name',
            'price.min' => 'Please enter at least 1 character for menu price',
            'price.max' => 'Please enter no more than 4 characters for menu price',
            'weight.max' => 'Please enter at least 1 character for menu weight',
            'weight.max' => 'Please enter no more than 4 characters for menu weight',
            'meat.max' => 'Please enter at least 1 character for menu meat',
            'meat.max' => 'Please enter no more than 4 characters menu meat',
            'about.max' => 'Please enter at least 3 characters to describe the menu',
            'about.max' => 'Please enter no more than 100 characters to describe the menu'
        ];
    }
}