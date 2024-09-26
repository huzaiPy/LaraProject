<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('about');
    }

    public function admin(){
        return view ('admin.index');
    }

    public function calculate($a,$b){
        return 'Result:'.($a+$b);
    }

    public function service(){
        $services=['Design','Develop','Test','Eluavation'];
        return view('services')->with
        ('services',$services);
    }
}
