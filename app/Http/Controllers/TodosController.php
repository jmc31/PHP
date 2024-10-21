<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#activity 3 done
class TodosController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function home()
    {
        $todos = Todo::all();
        return view('welcome',compact('todo'));
        #activity 5
    }
}
