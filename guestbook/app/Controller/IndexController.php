<?php

namespace App\Controller;

use App\Models\GuestBookEntry;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController{

    public function indexAction(Request $request): View
    {
        if($request->getMethod() == 'POST'){
            $validated = $request->validate([
                'username' => 'required|max:255',
                'email' => 'email|max:255|nullable',
                'subtitle' =>'required|max:255',
                'body' => 'required'
            ]);
            GuestBookEntry::create($validated);
            dump($validated);
        }

        return view('index');

    }

}