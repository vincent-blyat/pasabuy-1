<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;
use Illuminate\Support\Facades\DB;

class messageController extends Controller
{
    
    //
    public function getChatroom()
    {
        # code...
        return DB::select( DB::raw("SELECT firstName,lastName,email,tbl_messageroom.messageRoomNumber, tbl_message.dateCreated, tbl_message.messages, tbl_message.Sender FROM `tbl_userinformation` INNER JOIN tbl_messageroom ON tbl_messageroom.email1 = tbl_userinformation.email OR tbl_messageroom.email2 = tbl_userinformation.email WHERE tbl_messageroom.email1 = '".Auth::user()->email."' or tbl_messageroom.email2 = '".Auth::user()->email."' ORDER BY tbl_messageroom.dateCreated DESC") );
        // return userInformation::select('firstName','lastName','email','dateCreated')
        //                         ->join('tbl_message', 'tbl_message.email1','=', 'tbl_userInformation.email')
        //                         ->orOn('tbl_message.email2', '=', 'tbl_userInformation.email')
        //                         ->Where('tbl_message.email1', '=', Auth::user()->email)
        //                         ->orWhere('tbl_message.email2', '=', Auth::user()->email)
        //                         ->orderBy('dateCreated', 'DESC')->get();
    }

    public function getMessages(Request $request)
    {
        # code...
        return Messages::where('roomID', '=', $request->roomID)->orderBy('dateCreated', 'ASC')->get();
    }

    public function sendMessage(Request $request)
    {
        # code...   
        $messageCount = Messages::count();
        $newMessage = new Messages;
        $newMessage->roomID = $request->roomID;
        $newMessage->email1 = Auth::user()->email;
        $newMessage->email2 = $request->receiver;
        $newMessage->message =$request->message;
        $newMessage->messageNumber = $messageCount.'-Message';
        $newMessage->save();
        
        broadcast(new NewChatMessage($newMessage))->toOthers();
    }
}
