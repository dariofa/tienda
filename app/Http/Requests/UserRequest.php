<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Laracasts\Flash\Flash;
class UserRequest extends Request
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
        //flash::success('No se puede eliminar');
        return [
            'nombre'=>'min:4|max:120|required',
            'apellido'=>'min:4|max:120|required',
            'email'=>'min:4|max:120|required|unique:users',

        ];

    }
}
