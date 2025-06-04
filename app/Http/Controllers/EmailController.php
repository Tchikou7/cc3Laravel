<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $message = $request->input('message');

        Mail::to('issamtchikou.bj@gmail.com')->send(new TestEmail($message));

        return redirect()->back()->with('success', 'Email sent succusfully  !');
    }
}
