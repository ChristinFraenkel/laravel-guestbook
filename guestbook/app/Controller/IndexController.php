<?php

namespace App\Controller;

use App\Models\GuestBookEntry;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController{

    public function indexAction(Request $request)
    {
        if($request->getMethod() == 'POST'){
            $validated = $request->validate([
                'username' => 'required|max:255',
                'email' => 'email|max:255|nullable',
                'subtitle' =>'required|max:255',
                'body' => 'required'
            ]);
            GuestBookEntry::create($validated);
            return redirect()->route('index')->with('success', 'Erfolgreich gespeichert!');
        }

        $entries = GuestBookEntry::query()->orderBy('created_at', 'DESC')->get();
        
        return view('index', ['entries'=>$entries]);

    }

}