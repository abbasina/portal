<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Token;
use App\User;

class AuthController extends Controller
{
    public function showverify() {
        return view('layouts.verify');
    }
    public function verify(Request $request) {
        $this->validate($request, [
            'code' => 'required|numeric|exists:tokens,code'
        ]);
        if (!session()->has('code_id') || !session()->has('user_id'))
            redirect()->route('login');
        $token = Token::where('user_id', session()->get('user_id'))->find(session()->get('code_id'));
        if (!$token || empty($token->id))
            
            return redirect()->route('showverify')->with('failed','کد شما معتبر نیست.');;
        if (!$token->isValid()){
            
            
            return redirect()->route('showverify')->with('failed','کد شما منقضی یا استفاده شده است.');;            
        }
        if ($token->code !== $request->input('code'))
        return redirect()->back()->with('failed','کد تایید اشتباه است.');
        $token->update([
            'used' => true
        ]);
        $user = User::find(session()->get('user_id'));

        auth()->login($user);
        return redirect()->intended();
    }
}
