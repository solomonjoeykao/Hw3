<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class TestController extends Controller
{
    public function index()
    {
    	//return view('testt.haha');
    	$msgs = message::all();
    	return view('testt.haha',['msgs' => $msgs]);
    }

    public function store(Request $request)
    {
    	$message = new message;
    	$message->content= $request->content;
    	$message->save();
    	return redirect('/testt');
    }

    public function destroy(Request $request,message $message)
    {
        $message->delete();
        return redirect('/testt');
    }

    public function show(message $message)
    {
        return view('testt.show',['message'=>$message]);
    }

    public function edit(message $message)
    {
        return view('testt.edit',['message'=>$message]);
    }

    public function update(Request $request,message $message)
    {
        $message->update(['content'=>$request->content]);
        return redirect('/testt');
    }
}
