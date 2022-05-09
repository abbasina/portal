<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Invite;
use App\Token;
use Illuminate\Http\Request;



class RegisterController extends Controller
{

    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest');
    }

    public function showregister(){
        
        
        return view('layouts.register');
    }

    protected function register(Request $request)
    {
        $this->ValidateRegisterForm($request);

        $this->create($request);

        $phone=$request->phone;

        return redirect()->route('showverify');      
        
    }

    protected function ValidateRegisterForm($request){
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'inviteCode' => ['max:30', 'exists:invites,Code','nullable'],
            'phone' => ['required', 'numeric', 'digits:11','unique:users'],
        ]);

    }


    protected function create($request)
    {
        
            $newUser = User::create([
                'fullname'        => $request->fullname,
                'phone' => $request['phone'],
                'role_id' => 5,
            ]);
            
            
            $token = Token::create([
                'user_id' => $newUser->id
            ]);
           
        
        
        if(($request['inviteCode'])==Null){
            if ($token->sendCode()) {
                session()->put("code_id", $token->id);
                session()->put("user_id", $newUser->id);
                return redirect()->route('verify');
            }
            $token->delete();
            return redirect()->route('showlogin')->withErrors([
                "ارسال پیامک با شکست مواجه شد.دوباره امتحان کنید."
            ]);
            
        }
        $role=Invite::where('Code', $request['inviteCode'])->first();
         
        
         
        $newUser->update([
            'role_id' => $role->id,
        ]);
        if ($token->sendCode()) {
            session()->put("code_id", $token->id);
            session()->put("user_id", $newUser->id);
            return redirect()->route('verify');
        }
        $token->delete();
        return redirect()->route('showlogin')->withErrors([
            "ارسال پیامک با شکست مواجه شد.دوباره امتحان کنید."
        ]);
        //remove inviteCode
        return $newUser;
    }
}
