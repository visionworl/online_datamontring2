<?php

namespace App\Http\Controllers\online;

use App\Mail\ComplaintMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\sendEmailModel;

class complaintcontroller extends Controller
{
    public function create()
    {
        return view('complaint.complaint');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required',
        ]);
        $details = new sendEmailModel();
        $details->name = $request->input('name');
        $details->email = $request->input('email');
        $details->phone = $request->input('phone');
        $details->description = $request->input('description');
        $details->save();
        Mail::to('itvisionworldtech@gmail.com')->send(new ComplaintMail($details));
        return redirect()->route('complaint.complaint')->with('Message_sent', 'Your message has been sent successfully!');
    }
    public function show(){
        $details =sendEmailModel:: all();
        return view('complaint.showcomplaint',compact('details'));
    }
    public function delete($id){
        $details  = sendEmailModel::find($id);
        if(!$details){
            return redirect()->route('complaint.showcomplaint');
        }
        $details->delete();
        return redirect()->route('complaint.showcomplaint');
    }
    public function shows($id)
{
    $details = sendEmailModel::find($id);
    return view('complaint.viewcomplaint', compact('details'));
}
}
