<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruments;

class instrumentsController extends Controller
{     

    // store a new created resource in storege.
    public function store(Request $request)
    {
        $instruments = new Instruments;
        $instruments->name = $request->name;
        $instruments->symbol = $request->symbol;
        $instruments->instrumentType = $request->instrumentType;
        $instruments->save();
  
        return Instruments::find($instruments->id);
    }

    public function read()
    {
        return Instruments::all();
    }

    public function delete($id) 
    {
        Instruments::find($id)->delete();
        return 204;
    }




}
