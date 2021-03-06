<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MailFormValidationRequest extends Request
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
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'message' => 'required|min:5'
        ];
    }


        /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
        public function messages()
        {
            return [
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:5'
            ];
        }






    }
