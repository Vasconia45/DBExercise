<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MountainController extends Controller
{
    public function show(){
        $name = DB::table('mountains')
            ->where('belogsToRange', 1)
            ->where('firstClimbDate', '>', '2000-12-31')
            ->where('continent', 'Europe')
            ->get();
        $var = DB::table('mountains')
            ->where('height', '>=', 1500)
            ->where('belogsToRange', 0)
            ->where('name','like', '%A')
            ->orwhere('name','like', '%E')
            ->orwhere('name','like', '%I')
            ->orwhere('name','like', '%O')
            ->orwhere('name','like', '%U')
            ->get();
        return view('mountain', ['name' => $name, 'var' => $var]);
    }
}
