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
  
        return response()->json(Instruments::find($instruments->id), 200);
    }

    public function read()
    {
        return response()->json(Instruments::all(), 200);
    }

    public function delete($id) 
    {
        Instruments::find($id)->delete();
        return response()->json(null, 204);
    }




}
