<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;


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
    public function store(Request $request): RedirectResponse{

        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        Article::create($requestData);

        return redirect()->route('admin-home');
    }

}
