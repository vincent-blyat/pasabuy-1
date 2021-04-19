<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\transaction;
use App\Models\userInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class transactionController extends Controller
{
    //
    public function createTransaction(Request $request)
    {
        # code...
        $newTransaction = new transaction;
        $user = userInformation::where('email', Auth::user()->email)->first();
        $postOwner = userInformation::where('email', $request->email)->first();
        $newTransaction->transactionNumber = '084'.str_pad($postOwner->indexUserInformation,4,'0',STR_PAD_LEFT).str_pad($user->indexUserInformation,4,'0',STR_PAD_LEFT).str_pad(transaction::count()+1, 4, '0', STR_PAD_LEFT); 
        $newTransaction->postNumber = $request->postNumber;
        $newTransaction->transactionReceiver = $request->email;
        $newTransaction->emailCustomerShopper = Auth::user()->email;

        if($newTransaction->save()){
            return response()->json('ok');
        }else{
            return response()->json('not ok');

        }

    }
    public function getTransaction(Request $request)
    {
        # code...
        $transaction = transaction::with('post','post.offer_post','post.request_post','transactionSender')->where('emailCustomerShopper',Auth::user()->email)->orWhere('transactionReceiver',Auth::user()->email)->where('transactionStatus','pending')->orderBy('dateCreated','desc')->get();
        // $transaction = Post::has('transaction')->where('email',Auth::user()->email)->orWhere('email','hokage.igneel@gmail.com')->join('tbl_transaction.emailCustomerShopper','=','tbl_post.email')->where('tbl_transaction.emailCustomerShopper',Auth::user()->email)->orWhere('tbl_transaction.emailCustomerShopper','hokage.igneel@gmail.com')->where('tbl_transaction.transactionStatus','pending')->orderBy('tbl_transaction.dateCreated','desc')->get();

        return response()->json($transaction);
    }
}
