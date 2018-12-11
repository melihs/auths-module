<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        if ( Auth::check() )
        {
          return view('auth::home');
        }else
        {
          return redirect()->to('auth/login');
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
      return view('auth::login');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store( Request $request )
    {
      $user_data =[
          'email' => $request->get('email'),
          'password' => $request->get('password'),
        ];
      $remember = $request->get('remember');

       if ( Auth::attempt($user_data) == true)
       {
           global $remember;
           if(!empty($remember))
           {
               Auth::login(Auth::user()->id,true);
           }
         return redirect('auth/home');
       }
    return back()->withErrors([ 'message' => 'The email or password is incorrect, please try again' ]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('auth/login');
    }
}
