<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// using model
use App\Message;

class MessagesController extends Controller
{
    //create a submit function for the contact form
    public function submit(Request $request){
      // validate the contact form information
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'
      ]);
      // create a message
      $message = new Message;
      // assign each value of the form using request define_syslog_variable
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      // save the message
      $message->save();

      // redirect to the home page
        return redirect('/')->with('success', 'Message submitted successful');
    }

    // function to get Messages
    public function getMessages(){
      // variable to hold messages
      $messages = Message::all();

      return view('messages')->with('messages', $messages);
    }
}
