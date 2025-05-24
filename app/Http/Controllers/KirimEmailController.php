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

    public function send(Request $request): void
    {
        $request->validate([
            'emails'   => 'required|array',
            'emails.*' => 'email|distinct',
            'subject'  => 'required|string',
            'body'     => 'required|string',
        ]);

        $emails = $request->input('emails');
        $subject = $request->input('subject');
        $body = $request->input('body');
        foreach ($emails as $email) {
            Mail::to($email)->send(new TestSendingEmail($subject, $body));
        }
    }
}


    

