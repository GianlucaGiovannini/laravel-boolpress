<?php

namespace App\Http\Controllers;

use App\Mail\AdminContactMessage;
use App\Mail\ContactMessageConfirmation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function index() 
    {
        return view('guest.message-confirmation');
    }

    public function store(Request $request) 
    {
        // ddd($request->all());

        $data = $request->all();

        $message = Message::create($data);

        /*  return (new AdminContactMessage($message))->render();
        return (new ContactMessageConfirmation($message))->render(); */


        Mail::to('admin@blog.com')->send(new AdminContactMessage($message));

        Mail::to($message->email)->send(new ContactMessageConfirmation($message)); 


        return redirect()->route('contact.form.index')->with('message', 'Message received. We will get back to you in 48 Hours');

    }
}
