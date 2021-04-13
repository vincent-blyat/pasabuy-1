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

        // $data = utf8_encode(json_decode(json_encode($data)));
        // $data = $data->toArray();
       // echo "".$data."";
        // for($i=0;$i<$data->count();$i++){
        //     // echo "-".json_encode($data[$i]->getEmail1)."-";
        //     $data[$i]->getEmail1->profilePicture = utf8_encode( $data[$i]->getEmail1->profilePicture );
        //     $data[$i]->getEmail1->profilePicture = utf8_encode( $data[$i]->getEmail1->profilePicture );
        //     for($x=0;$x<$data[$i]->getMessages[$x]->count();$x++)
        //         $data[$i]->getMessages[$x]->getMessageSender->profilePicture = utf8_encode(  $data[$i]->getMessages[$x]->getMessageSender->profilePicture );
        // }
        $x=0;
		foreach ($data as $convertingImage){ 
			$convertingImage->getEmail1->profilePicture = utf8_encode($convertingImage->getEmail1->profilePicture);
            $convertingImage->getEmail2->profilePicture = utf8_encode($convertingImage->getEmail2->profilePicture);
            foreach($data[$x]->getMessages as $dp)
                $dp->getMessageSender->profilePicture =  utf8_encode( $dp->getMessageSender->profilePicture);
            $x++;
		}

        

		return response()->json($data);

       // $chatrooms = messageRoom::with('getEmail1','getEmail2','getMessages','getMessages.getMessageSender')->orderBy('dateModified', 'desc')->where('email1','=',Auth::user()->email)->orWhere('email2','=',Auth::user()->email)->get();
   
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
