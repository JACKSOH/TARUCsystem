<?php

namespace App\Http\Controllers\Auth;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function login(Request $request){

        if(Auth::attempt([
            'email' =>$request->email,
            'password' =>$request->password,

        ]))
        {
            $user = User::where('email',$request->email)->first();
            //from user calss get check which is not null and return back to here
            $role = $user->get_role();


            if($user->get_type() =="faculty"){
                if($role=="admin"){
                    return redirect()->route('faculty.adminpage');
                }elseif($role =="staff"){
                    return redirect()->route('faculty.staffpage');

                }
            }elseif($user->get_type() =="department"){
                if($role=="admin"){
                    return redirect()->route('department.adminpage');
                }elseif($role =="staff"){
                    return redirect()->route('department.staffpage');
                }
            }
        }
        return redirect()->back();

    }


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
