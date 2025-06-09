<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Verification;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpEmail;



class VerificationController extends Controller
{
    public function index(){
        return view('verification.index');
    }

    public function store(Request $request){
        if($request->type == 'register'){
            $user = User::find($request->user()->id);
        }else{
            // reset password
        }if(!$user) return back()->with('failed', 'user not found');
        $otp = rand(100000 , 999999);
        $verify = Verification::create([
            'user_id' => $user->id, 'unique_id' => uniqid(),'otp' => md5($otp), 
            'type'=> $request->type,'send_via' => 'email'
        ]);
        Mail::to($user->email)->queue(new OtpEmail($otp)); 
        if($request->type == 'register'){
            return Redirect('/verify/'. $verify->unique_id);
        }
        // return Redirect('/resetpassword')
    }
}
