<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Token;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showlogin(){
        
        return view('layouts.login');
    }
    protected function login(Request $request)
    {
        $this->ValidateLoginForm($request);
        $user = User::where('phone', $request->input('phone'))->first();
        $token = Token::create([
            'user_id' => $user->id
        ]);
        $phone=$request->phone;
        if ($token->sendCode()) {
            session()->put("code_id", $token->id);
            session()->put("user_id", $user->id);
            return redirect()->route('verify');
        }
        $token->delete();
        return redirect()->route('showlogin')->withErrors([
            "ارسال پیامک با شکست مواجه شد.دوباره امتحان کنید."
        ]);      




        
    }
    protected function ValidateLoginForm($request){
        $request->validate([
            
            'phone' => ['required', 'numeric', 'digits:11','exists:users,phone'],
        ]);

    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
