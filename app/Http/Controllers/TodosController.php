<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function store()
    {
        $request = request();

        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;

        $todo->save();
        
        return redirect('/home');
    }
}
