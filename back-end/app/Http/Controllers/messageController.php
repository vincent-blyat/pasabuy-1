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
        $data = messageRoom::with('getEmail1','getEmail2','getMessages','getMessages.getMessageSender')->orderBy('dateModified', 'desc')->where('email1','=',Auth::user()->email)->orWhere('email2','=',Auth::user()->email)->get();
        
		return response()->json($data);
    }
    public function createRoom(Request $request)
    {
        $data = DB::select('SELECT * FROM tbl_messageRoom WHERE  (email1 = \''.$request->userEmail.'\' OR email2 = \''.$request->userEmail.'\') AND (email1 = \''.Auth::user()->email.'\' OR email2 = \''.Auth::user()->email.'\') ');

        if(empty($data)){
            $newdata = new messageRoom;
            $newdata->messageRoomNumber = (new messageRoom)->count()+1;
            $newdata->email1 = Auth::user()->email;
            $newdata->email2 = $request->userEmail;
            $newdata->dateModified = Carbon::now('Asia/Manila');
            $newdata->save();
            return response()->json("ok");
        }
        $msgRoom = messageRoom::find($data[0]->messageRoomNumber);
        $msgRoom = messageRoom::where('messageRoomNumber',$data[0]->messageRoomNumber)->first();
        $msgRoom->dateModified = Carbon::now('Asia/Manila');
        $msgRoom->save();
        return response()->json("ok");
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
            $msgRoom->dateModified = Carbon::now('Asia/Manila');
            $msgRoom->save();
        }
        
        broadcast(new NewChatMessage($newMessage))->toOthers();
    }
}
