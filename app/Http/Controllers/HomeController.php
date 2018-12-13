<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Contents;
use DB;
use Input;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //$content = DB::table('contents')->orderby('','')->get();
      $content = Contents::all()->sortByDesc("id");
        return view('home',compact('content'));
    }

    public function admin_post(){
      return view('admin_post');
    }

    public function savepost(Request $request)
    {
        $details = Input::all();
        // var_dump($details);

      // $content_validation = new Contents;
      // $validation = Validator::make($details,$content_validation->setRules());


          $destinationPath = '';
            $filename        = '';
            $file            = $request->file('image');


            $destinationPath = public_path().'/img/';
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess   = $file->move($destinationPath, $filename);

        // if($validation->fails())
        //     return Redirect::to('/admin_post')->withInput()->withErrors($validation);
           //  else
           //  {

                $cont = new Contents;
                $cont->filename               = '/img/'.$filename;
                $cont->title                  = $details['title'];
                $cont->contents               = $details['inquiry'];
                $cont->save();

          // }

           return Redirect::to('admin_list');
    }

    public function content_details($id){
      $content = Contents::all()->sortByDesc("id")->where('id','=',$id);
      return view('content_details',compact('content'));
    }

    public function content_archive(){
      $content = Contents::all()->sortByDesc("id");
      return view('content_archive',compact('content'));
    }

    public function admin_list(){
      $content = Contents::all()->sortByDesc("id");
      return view('admin_list',compact('content'));
    }


}
