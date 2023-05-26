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


    public function show($id){
        $article=Article::find($id);

        return view('admin.admin-view-articales',['article'=>$article]);
    }



    public function create(){

        return view('admin.admin-add-articles');
    }
    public function store(Request $request): RedirectResponse{

        $requestData = $request->all();

        $ext=$request->image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;

        $path = $request->image->move('storage/app/public/images/', $imageName);


        $requestData["image"] =$path;

        Article::create($requestData);

        return redirect()->route('admin-home');
    }
/*     $imageName = time().'.'.$request->image->extension();
        $path=$request->image->move(public_path('images'),$imageName);*/

    public function delete($id){
        $article= Article::find($id);
        $article->delete();
        return redirect()->route('admin-home');
    }
    public function edit($id){
        $article= Article::find($id);
        return view('admin.admin-edit-articles',['article'=>$article]);
    }
    public function update(Request $request,$id){
        $requestData = $request->all();
        $article = Article::find($id);
        $article->update($requestData);
        return redirect()->route('admin-home');
        }
}
