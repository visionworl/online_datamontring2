<?php

namespace App\Http\Controllers\online;
use App\Mail\ComplaintMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class complaintcontroller extends Controller
{
     public function create(){
        return view('complaint.complaint');
     }
     public function sendEmail(Request $request){
        $details=[
            'name' => $request->required,
            'email' => $request->required,
            'phone' => $request->required,
            'description' => $request->required,
        ];
        Mail::to('itvisionworldtech@gmail.com')->send(new ComplaintMail($details));
        return redirect()->route('complaint.complaint')->with('Message_sent','Your message has been sent successffully!');
     }
}
