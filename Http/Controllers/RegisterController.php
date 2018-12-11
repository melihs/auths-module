<?php

namespace Modules\Auth\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\Auth\Entities\User;

class RegisterController extends Controller
{
    use ValidatesRequests;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('auth::create');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|alphaNum|min:6'
        ]);
        $user = User::create( request( [ 'name','email','password' ] ) );
        auth()->login($user);

        return redirect('auth/home');
    }

}
