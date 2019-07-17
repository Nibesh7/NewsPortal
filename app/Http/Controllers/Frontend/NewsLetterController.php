<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Newsletter;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
    //    $input = $request->all();
    //    $newsLetter = Newsletter::create($input);

    //    return redirect()->back();  
       if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect()->back()->with('success', 'Thanks For Subscribe');
        }
        return redirect()->back()->with('failure', 'Sorry! You have already subscribed ');  
            
    }
    
}
