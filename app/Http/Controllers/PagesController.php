<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PagesController extends Controller
{
    public function hello(){
        return 'hello';
    }
    public function index(){
        $title='welcome to index page';
        // return view('pages.index');
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title='welcome to About page';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title'=> 'Services',
            'services'=>['1-web serve','2-web pages']
        );
        return view('pages.services')->with($data);
    }
}
