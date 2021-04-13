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
        $chatrooms = messageRoom::with('getEmail1','getEmail2','getMessages','getMessages.getMessageSender')->orderBy('dateModified', 'desc')->where('email1','=',Auth::user()->email)->orWhere('email2','=',Auth::user()->email)->get();
        // $chatrooms = Messages::with('getMessageSender')->get();
        // for($i=0;$i<count($chatrooms);$i++)
        //         $chatrooms[$i]->get_messages->getMessageSender->profilePicture = utf8_encode($chatrooms[$i]->get_messages->getMessageSender->profilePicture);
		 
        for($i=0;$i<count($chatrooms);$i++){
            echo "email='". $chatrooms[$i]->get_email1."'";
            $chatrooms[$i]->get_email1->profilePicture = utf8_encode($chatrooms[$i]->get_email1->profilePicture);
            $chatrooms[$i]->get_email2->profilePicture = utf8_encode($chatrooms[$i]->get_email2->profilePicture);
            
            for($x=0;$x<count($chatrooms[$i]->get_messages[$x]);$x++){
                $chatrooms[$i]->get_messages[$x]->get_message_sender->profilePicture = utf8_encode($chatrooms[$i]->get_messages[$x]->get_message_sender->profilePicture);
            }
                // $chatrooms[$i]->get_messages[$x]->getMessageSender->profilePicture = utf8_encode($chatrooms[$i]->get_messages[$x]->getMessageSender->profilePicture);
        }
        // foreach($chatrooms as $temp){
        //     // $temp->get_message_sender->profilePicture = utf8_encode( $temp->get_message_sender->profilePicture);
        //     $msg = $temp->get_message_sender;
        //     return $msg;
        //     // $msg = $temp->get_message_sender;
        //     // $msg->firstName = "potaaa";
        // }
        // $chatrooms->get_message_sender->profilePicture = 
        // data[0].get_messages[1].get_message_sender.profilePicture
        // foreach ($chatrooms as $convertingImage){ 
        //     $convertingImage->get_email1->profilePicture = utf8_encode($convertingImage->get_email1->profilePicture);
        //     $convertingImage->get_email2->profilePicture = utf8_encode($convertingImage->get_email2->profilePicture);
        //     foreach($convertingImage[0]->get_messages[0] as $msg)
		// 	    $msg->get_message_sender->profilePicture = utf8_encode($msg->get_message_sender->profilePicture);
		// }
        // $chatrooms[0]->get_messages[0]->getMessageSender->profilePicture = utf8_encode($chatrooms[0]->get_messages[0]->getMessageSender->profilePicture);
        // $chatrooms[0]->get_messages[1]->getMessageSender->profilePicture = utf8_encode($chatrooms[0]->get_messages[1]->getMessageSender->profilePicture);
        return $chatrooms;
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
