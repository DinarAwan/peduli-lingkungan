<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\TestSendingEmail;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    public function index(){
        $user = User::all();
        return view('sendEmail.index', compact('user'));
    }
    // public function send(){
    //     $user = User::all();
    //     Mail::to('tony@mail.com')->send(new TestSendingEmail($user));
    // }

    public function send(Request $request): void
        {
        $request->validate([
            'emails' => 'required|array',
            'emails.*' => 'email|distinct',
        ]);

    $emails = $request->input('emails', []);
    $user = User::whereIn('email', $emails)->get();

    foreach ($emails as $email) {
        Mail::to($email)->send(new TestSendingEmail($user));
        }
    }

    
}
