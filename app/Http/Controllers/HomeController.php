<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\servicesModel;
use App\Models\CourseModel;
use App\Models\ProjectModel;
use App\Models\ContactModel;
use App\Models\ReviewModel;
class HomeController extends Controller
{
    function HomeIndex(){

        $UserIP = $_SERVER['REMOTE_ADDR'];

        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h::i:sa");

        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);

        $ServiceData =  json_decode( servicesModel::all());

        $ReviewData =  json_decode( ReviewModel::all());



        $CourseData = json_decode(CourseModel::orderBy('id','desc')->limit(6)->get());

        $ProjectData = json_decode(ProjectModel::orderBy('id','desc')->limit(10)->get());

        return view('Home',[
            'ServiceData'=> $ServiceData,
            'CoursesData' => $CourseData,
            'ProjectData' => $ProjectData,
            'ReviewData' => $ReviewData
        ]);
    }

    function ContactSend(Request $request)
    {
       $name =  $request->input('contact_name');
       $mobile =  $request->input('contact_mobile');
       $email =  $request->input('contact_email');
       $msg =  $request->input('contact_msg');

       $result = ContactModel::insert([
           'contact_name' => $name,
           'contact_mobile' => $mobile,
           'contact_email' => $email,
           'contact_msg' => $msg
       ]);

       if($result == true)
       {
           return 1;

       }
       else
       {
           return 0;
       }
    }
}
