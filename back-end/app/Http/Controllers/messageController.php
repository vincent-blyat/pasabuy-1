<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;
use App\Models\messageRoom;
use App\Models\userInformation;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class messageController extends Controller
{
    
    //
    public function getChatroom()
    {
        $chatrooms = messageRoom::with('getMessages', 'getEmail1','getEmail2', 'getMessages.getMessageSender')->orderBy('dateModified', 'desc')->where('email1','=',Auth::user()->email)->orWhere('email2','=',Auth::user()->email)->get();
        return $chatrooms;
    }

    public function getMessages(Request $request)
    {
        # code...
        return Messages::where('messageRoomNumber', '=', $request->roomID)->orderBy('dateCreated', 'ASC')->get();
    }

    public function sendMessage(Request $request)
    {
        # code...   
        $messageCount = Messages::count();
        $newMessage = new Messages;
        $newMessage->messageRoomNumber = $request->roomID;
        $newMessage->messageSender = Auth::user()->email;
        $newMessage->messageText =$request->message;
        $newMessage->messageNumber = $messageCount.'-Message';
        if($newMessage->save()){
            $msgRoom = messageRoom::find($request->roomID);
            $msgRoom = messageRoom::where('messageRoomNumber',$request->roomID)->first();
            $msgRoom->dateModified = Carbon::now();
            $msgRoom->save();
        }
        
        broadcast(new NewChatMessage($newMessage))->toOthers();
    }
}
