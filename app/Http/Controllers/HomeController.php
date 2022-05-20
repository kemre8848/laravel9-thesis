<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
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
        return view('home.index',[
        'sliderdata'=>$sliderdata,
            'projectlist1'=>$projectlist1
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

    public function categoryproject($id)
    {   echo "Category Projects";
        exit();
        $category = Category::all();
        $images = DB::table('images')->where('project_id',$id)->get();
        $data = Project::find($id);
        return view('home.project',[
            'data'=>$data,
            'category'=>$category,
            'images'=>$images
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
