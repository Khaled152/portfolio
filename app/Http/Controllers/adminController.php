<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
            $Projects = Article::where('type','=','0')->get();
            $experinces = Article::where('type','=','1')->get();
            $certificates = Article::where('type','=','2')->get();
        return view('admin.index',['projects'=>$Projects, 'experinces'=>$experinces ,'certificates'=>$certificates]);
    }

    public function create(){

        return view('admin.admin-add-articles');
    }

}
