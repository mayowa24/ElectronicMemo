<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Message;
use App\User;

class AdminController extends Controller
{
    public function user(Request $request){
        $users = User::all();

        return view('user', ['users'=>$users]);
    }

    public function remove($id){
        $user = User::Find($id);
        if($user){
            $user->delete();
        }
        return back();
    }
    public function admin_inbox(Request $request){
        $messages = Message::all();
        return view('admin_inbox',['messages'=>$messages]);
    }
    public function delete($id){
        $message = Message::Find($id);
        if($message){
            $message->delete();
        }
        return back();
    }
    //
}
