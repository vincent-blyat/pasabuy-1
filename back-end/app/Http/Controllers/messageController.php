<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;
class messageController extends Controller
{
    
    //
    public function getMessages(Request $request)
    {
        # code...
        return response()->json(Messages::where('email1', '=', Auth::user()->email)
                                        ->Where('email2', '=', $request->email)
                                        ->orWhere('email1', '=', $request->email)
                                        ->Where('email2', '=',Auth::user()->email)
                                        ->orderBy('dateCreated', 'ASC')->get());
    }

    public function sendMessage(Request $request)
    {
        # code...   
        $messageCount = Messages::count();
        $newMessage = new Messages;
        $newMessage->email1 = Auth::user()->email;
        $newMessage->email2 = $request->email;
        $newMessage->message =$request->message;
        $newMessage->messageNumber = $messageCount.'-Message';
        $newMessage->save();

        broadcast(new NewChatMessage($newMessage))->toOthers();
        
        //return $newMessage;
    }
}
