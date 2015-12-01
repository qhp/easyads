<?php

namespace App\Http\Requests;

use Auth;

class CreateCampaignRequest extends Request
{
    public function rules()
    {
        $rules = [
            'name' => 'required|max:255',
            'budget' => 'required|integer|min:5'
        ];

        if (! Auth::user()->hasRole('client')) {
            $rules['user_id'] = 'required|integer|exists:users,id';
        }

        return $rules;
    }

    public function authorize()
    {
        return Auth::check();
    }
}