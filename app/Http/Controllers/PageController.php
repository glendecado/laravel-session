<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function index()
    {
        Session::put('stSample', 'una Sample');
        $val = Session::get('stSample');

        return view('home', ['stSample' => $val]);
    }

    public function getValue(Request $request)
    {
        Session::put('FirstName', $request->input('FirstName'));
        Session::put('LastName', $request->input('LastName'));

        //redirect to the route named display
        return redirect()->route('display');
    }

    public function displayValue()
    {
        $fname = Session::get('FirstName');
        $lname = Session::get('LastName');


        return view('hometwo', ['fname' => $fname, 'lname' => $lname]);
    }

    public function deleteValue()
    {
        // Delete session variables
        Session::forget('FirstName');
        Session::forget('LastName');

        //or

        // To Delete all session data
        // Session::flush();

        // Redirect back or to any other route as needed
        return redirect()->route('index');
    }
}
