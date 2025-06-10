<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Verification;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpEmail;
use Illuminate\Support\Facades\Auth;



class VerificationController extends Controller
{
    public function index(){
        return view('verification.index');
    }

    // show
    public function show($unique_id){
        $verify = Verification::whereUserId(Auth::user()->id)->whereUniqueId($unique_id)
        ->whereStatus('active')->count();
        if(!$verify) abort(404);
        return view('verification.show', compact('unique_id'));

    }

    public function update(Request $request, $unique_id){
        dd($request->all());
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
