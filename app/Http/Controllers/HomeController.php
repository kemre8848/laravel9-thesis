<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

        public static function maincategorylist(){

            return Category::where('parent_id', '=',0)->with('children')->get();

    }
    public function index()
    {
        $sliderdata=Category::limit(4)->get();
        $projectlist1=Project::limit(6)->get();
        $setting= Setting::first();

        return view('home.index',[
            'setting'=>$setting,
        'sliderdata'=>$sliderdata,
            'projectlist1'=>$projectlist1
            ]);
    }

    public function about()
    {


        $setting= Setting::first();
        return view('home.about',[
            'setting'=>$setting,

        ]);
    }

    public function contact()
    {


        $setting= Setting::first();
        return view('home.contact',[
            'setting'=>$setting,

        ]);
    }
    public function faq()
    {

        $setting= Setting::first();
        $datalist= Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist

        ]);
    }

    public function storemessage(Request $request)
    {
        //dd($request);
       $data = new Message();
       $data->name = $request->input('name');
       $data->email =$request->input('email');
       $data->phone =$request->input('phone');
       $data->subject =$request->input('subject');
       $data->message =$request->input('message');
       $data->ip=request()->ip();
       $data->save();

       return redirect()->route('contact')->with('info','Your message has been sent , Thank You.');

    }

    public function storecomment(Request $request)
    {
        //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->project_id = $request->input('project_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->IP();
        $data->save();

        return redirect()->route('project',['id' => $request->input('project_id')])->with('success', 'Your comment has been sent. Thank You!');
    }
    public function references()
    {


        $setting= Setting::first();
        return view('home.references',[
            'setting'=>$setting,

        ]);
    }

    public function project($id)
    {
        $category = Category::all();
        $images = DB::table('images')->where('project_id',$id)->get();
        $data = Project::find($id);
        $reviews = Comment::where('project_id',$id)->where('status','True')->get();
        return view('home.project',[
            'data'=>$data,
            'category'=>$category,
            'images'=>$images,
            'reviews'=>$reviews
        ]);
    }

    public function categoryprojects($id)
    {

        $category = Category::find($id);
        $projects = DB::table('projects')->where('category_id',$id)->get();

        return view('home.categoryprojects',[
            'category'=>$category,
            'projects'=>$projects
        ]);
    }

    public function test()
    {
        return view('home.test');
    }

    public function param($id,$number)
    {
        //echo "Parameter1:", $id;
        //echo "<br>Parameter 2:", $number;
        //echo "<br>Sum Parameters :",$id+$number;
        return view('home.test2',[
            'id' => $id,
            'number'=> $number
        ]);
    }

    public function save(Request $request)
    {
        echo "Save Function<br>";
        echo "First Name :",$_REQUEST["fname"];
        echo "Last Name :",$_REQUEST["lname"];
    }
}
