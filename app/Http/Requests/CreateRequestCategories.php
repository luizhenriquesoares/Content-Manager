<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateRequestCategories
 * @package App\Http\Requests
 */
class CreateRequestCategories extends Request
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
            'coverphoto' => 'required|mimes:jpeg',
            'title' => 'required'
        ];
    }
}
