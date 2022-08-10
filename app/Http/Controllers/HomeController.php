<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
  
    public function index2()
    {
        $id=Auth::id();
       if($id=='1'){
           
           return view('form');
       }
       else{
            return redirect()->intended("/home");
       }
        
    }
    public function form(Request $request){
        $table= new \App\Models\zakaz();
        $table->name=$request->name;
        $table->cena=$request->cena;
        $table->har=$request->har;
        $table->strana=$request->strana;
        $path=$request->file('img')->store('avatars');
        $table->img=$path;
        $table->year=$request->year;
        $table->model=$request->model;
        $table->save();
        
        return view('form',['table'=>$table]);


    }


    public function catalog(){
        $qaz=\App\Models\zakaz::All();
      /*  $elements=[];
        foreach($qwer as $el){
            $el->img=Illuminate\Support\Facades\Storage\st
        }*/
        return view('catalog',['qaz'=>$qaz]);
    }

    public function detali($id){
        $qwer=\App\Models\zakaz::find($id);
        return view('detali',['qwer'=>$qwer]);
    }
    public function welcome()
    {        $new=\App\Models\zakaz::Where('id','>','0')->limit(5)->get();

        return view('welcome',['new'=>$new]);
    }

 /*   public function corzina($id){
        $value = Request::cookie('id');
        return view('corzina');
    }*/

    public function admin_panel(){
       $id=Auth::id();
       if($id=='1'){
           $new=\App\Models\zakaz::All();
          return view('admin_panel',['new'=>$new]);
       }
       else{
            return redirect()->intended("/home");
       }
    }
    public function delet($id){
        \App\Models\zakaz::find($id)->delete();
        $arr=\App\Models\zakaz::All();
        return back();

    }

    public function red($id){
        $qwer=\App\Models\zakaz::find($id);
      return view('redect',['qwer'=>$qwer]);

    }

    public function red2($id,Request $request){
        $qwer=\App\Models\zakaz::find($id);
        $qwer->name=$request->name;
        $qwer->cena=$request->cena;
        $qwer->har=$request->har;
        $qwer->strana=$request->strana;
        $qwer->year=$request->year;
        $qwer->model=$request->model;
        
        $path=$request->file('img')->store('avatars');
        $qwer->img=$path;
        $qwer->save();
        return view('redect',['qwer'=>$qwer]);







    }
    
    public function corzina($id){
        $data=Cookie::get('qwerty');
        $next=explode('#',$data);
        $next[]=$id;
        $qwer=implode('#',$next);
        Cookie::queue('qwerty',$qwer,60);
        return redirect('add');
    }

    public function tovari(){

  $data=Cookie::get('qwerty');
        $next=explode('#',$data);
        $new=\App\Models\zakaz::find($next);
        return view ('corzina',['new'=>$new]);

    }
    public function carta(){
        return view('carta');
    }
public function delet_carzina($id){
    $arr=array();
    $arr[]=$id;
    $data=Cookie::get('qwerty');
    $next=explode('#',$data);
    $res=array_diff($next,$arr);
    $data_i=implode('#',$res);
    Cookie::queue('qwerty',$data_i,60);
    return back();

}

public function categori(Request $request){
    $qwer= new \App\Models\categori();
    $qwer->id=$request->id;
    $qwer->created_at=$request->created_at;
    $qwer->updated_at=$request->updated_at;
    $qwer->cat=$request->cat;
    $qwer->save();

    return view('form',['qwer'=>$qwer]);
}
public function cat(){
    $qwer=\App\Models\categori::All();
    return view('form',['qwer'=>$qwer]);
}
public function delet_cat($id){
    \App\Models\categori::find($id)->delete();
    $arr=\App\Models\categori::All();
    return back();

}
}
