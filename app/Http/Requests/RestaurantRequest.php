<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RestaurantRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'title' => ['required', 'min:4', 'max:64'],
            'customers' => ['required', 'min:1', 'max:5'],
            'employees' => ['required', 'min:1', 'max:5'],
            // 'about' => ['required', 'min:4', 'max:100']
        ];
    }
    
    public function messages()
    {
        return [
            'title.min' => 'Please enter at least 2 characters for restaurant title',
            'title.max' => 'Please enter no more than 64 characters for restaurant title',
            'customers.min' => 'Please enter at least 1 character for restaurant customers',
            'customers.max' => 'Please enter no more than 5 characters for restaurant customers',
            'employees.max' => 'Please enter at least 1 character for restaurant employees',
            'employees.max' => 'Please enter no more than 5 characters for restaurant employees'
            // 'about.max' => 'Please enter at least 4 characters to describe the item',
            // 'about.max' => 'Please enter no more than 100 characters to describe the restaurant'
        ];
    }
}