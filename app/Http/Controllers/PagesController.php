<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Session;


class PagesController extends Controller
{
    //
    public function home2()
    {
        return view('home2');
    }

    public function about()
    {
        return view('about');
    }

    public function staff()
    {
        $complaints = DB::table('complaints')->orderBy('id', 'desc')->paginate(10);

        return view('\staff', ['complaints' => $complaints]);

/*        $complaints = $request->all(\Complaint::all());
        dd($complaints);
        return view('/staff', ['complaints' => $complaints]); */     
    }
}
