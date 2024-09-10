<?php

namespace App\Http\Controllers;

use App\Events\SendMessageEvent;
use App\Models\User;

class HomeController extends Controller
{
    public function __invoke()
    {
        $users = User::all();

        return view('home', compact('users'));
    }

    public function sendMessage(User $receiver)
    {
        broadcast(new SendMessageEvent($receiver, "Hello There, $receiver->name"));

        return back();
    }
}
