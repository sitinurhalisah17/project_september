<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request) {
        $query = $request->input('query');
        $results = Article::where('title', 'like', "%$query%")
                         ->orWhere('content', 'like', "%$query%")
                         ->get();
    
        return view('search.results', compact('results'));
    }
    
}
