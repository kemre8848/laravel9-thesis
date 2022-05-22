<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('home.project',[
            'data'=>$data,
            'category'=>$category,
            'images'=>$images
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
