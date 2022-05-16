<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\PasswordReset;

class ForgotPasswordController extends Controller
{
    public function getEmail()
  {

     return view('auth.passwords.email');
  }

 public function postEmail(Request $request)
  {
    $request->validate([
        'email' => 'required|email|exists:users',
    ]);
    //  $user=new User();

    //   $user->user_id = data['user_id'];
    //   $user->password = data['password'];
    $token = Str::random(64);
    $passwordReset = new PasswordReset();
    $passwordReset->email= $request->email;
    $passwordReset->token = $token;
    $passwordReset->save();
    Mail::send('email.email', ['token' => $token], function($message) use($request){
        $message->from('sneha.v@webandcrafts.in');
        $message->to($request->email);
        $message->subject('Reset Password Notification');
    });
    return redirect()->back()->with('message',"This is Success Message");


//     $token = str_random(64);

//       DB::table('password_resets')->insert(
//           ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
//       );
//       Mail::send('auth.verify', ['token' => $token], function($message) use($request){
//           $message->to($request->email);
//           $message->subject('Reset Password Notification');
//       });

//       return back()->with('message', 'We have e-mailed your password reset link!');
//   }
}
}
