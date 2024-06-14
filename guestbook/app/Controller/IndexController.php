<?php

namespace App\Controller;

use App\Http\Requests\GuestBookEntryRequest;
use App\Models\GuestBookEntry;
use Illuminate\Http\Request;

class IndexController{

    public function indexAction(Request $request)
    {
        $limit = max(env('LIMIT'), 1);
        $maxEntries = GuestBookEntry::count();
        $maxPages = (int)ceil($maxEntries/$limit);
        $page = (int)$request->get('page', 1);
        $page = min(max(1, $page), $maxPages);
        $offset = ($page -1) * $limit;

        $entries = GuestBookEntry::query()
        ->orderBy('created_at', 'DESC')
        ->offset($offset)
        ->limit($limit)
        ->get();
        
        return view('index', ['entries'=>$entries, 'maxPages'=>$maxPages, 'currentPage'=>$page]);

    }

    public function saveAction(GuestBookEntryRequest $request){
        $validated = $request->validated();
        GuestBookEntry::create($validated);
        return redirect()->route('index')->with('success', 'Erfolgreich gespeichert!');
    }

}