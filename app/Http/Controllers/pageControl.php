<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\student;
use App\register;

class pageControl extends Controller
{
    public function welcome()
    {
      return view('welcome');
    }


    public function addcourse()
    {
      $courses = course::orderBy('CourseID','asc')->get();
       return view('addcourse')->with('courses',$courses);
    }
    public function store(Request $request)
    {
      $cname = $request->cname;
      $cid = $request->cid;
      $cid = mb_strtoupper($cid);
      $credit = $request->credit;
      if(!isset($cname,$cid,$credit))
      {
        session()->flash('msg','Please fill all the field!');
        return redirect()->route('addcourse');
      }
      elseif( (course::where('CourseID', '=',$cid)->count() > 0) )
      {
       session()->flash('msg','Course ID is already exist!');
       return redirect()->route('addcourse');
      }
      elseif(strlen((string)$cid)!=7)
      {
        session()->flash('msg','Course ID should contain 7 character!');
        return redirect()->route('addcourse');
      }
      if((string)(int)$cname == $cname) {
        session()->flash('msg','Name should contains character!');
        return redirect()->route('addcourse');
      }
      $Course = new course();
      $Course->CourseName = $cname;
      $Course->CourseID = $cid;
      $Course->Credit = $credit;
      $Course->save();
      session()->flash('msg','Successfully Saved!');
      return redirect()->route('addcourse');
    }



    public function addstudent()
    {
      $Student = student::orderBy('studentID','asc')->get();
      return view('addstudent')->with('std',$Student);
    }
    public function studentStore(Request $request)
    {
      $sid = $request->sid;
      $sname = $request->sname;
      $sdept = $request->sdept;
      $sdept = mb_strtoupper($sdept);
      $sem = $request->sem;
      $year = $request->year;

      //$obj1 = student::where('studentID',$check)->get();
      if(!isset($sname,$sid,$sdept,$sem,$year))
      {
        session()->flash('msg','Please fill all the field!');
        return redirect()->route('addstudent');
      }
      elseif($sid<=0)
      {
        session()->flash('msg','ID should be Unsigned!');
        return redirect()->route('addstudent');
      }
      elseif( (student::where('studentID', '=',$sid)->count() > 0) )
      {
       session()->flash('msg','ID is already exist!');
       return redirect()->route('addstudent');
      }
      elseif(strlen((string)$sid)<8)
      {
        session()->flash('msg','Use at least 8 digit long id!');
        return redirect()->route('addstudent');
      }
      else if( $sdept != 'CSE' )
      {
        session()->flash('msg','Department Name should be "CSE"');
        return redirect()->route('addstudent');
      }
      if((string)(int)$sname == $sname) {
        session()->flash('msg','Name should contains character!');
        return redirect()->route('addstudent');
      }
      $Student = new student();
      $Student->studentName = $sname;
      $Student->studentID = $sid;
      $Student->department = $sdept;
      $Student->semester = $sem;
      $Student->year = $year;
      $Student->save();
      session()->flash('msg','Successfully Saved!');
      return redirect()->route('addstudent');
    }



    public function register()
    {

      $courses = course::orderBy('CourseID','desc')->get();
       return view('register')->with('courses',$courses);
    }
    public function registerStore(Request $request)
    {
      $rsid = $request->rsid;
      $rcid = $request->rcid;
      $rcid = mb_strtoupper($rcid);
      $sname1 = $request->sname1;
      if(isset($sname1))
      {
        $obj = register::where('studentID','=',$sname1)->get();
        $courses = course::orderBy('CourseID','desc')->get();
        if(isset($obj))
        {
          return view('register',compact('courses','obj'));
        }
        else{
          return redirect()->route('register');
        }
      }

     elseif( isset($rsid,$rcid) )
    {
      $qcourseid = register::where('studentID','=',$rsid)->get('courseID');

      foreach ($qcourseid as $qu) {

        if($qu->courseID == $rcid){
          session()->flash('msg','Course has already taken!');
          return redirect()->route('register');
        }

      }
      $rsname = student::where('studentID', '=',$rsid)->get('studentName');
      $rcname = course::where('CourseID','LIKE','%'. $rcid .'%')->get('courseName');
      if( (course::where('CourseID', '=',$rcid)->count() > 0) && (student::where('studentID', '=',$rsid)->count()) ){
      $Register = new register();
      $Register->studentName = $rsname;
      $Register->studentID = $rsid;
      $Register->courseName = $rcname;
      $Register->courseID = $rcid;
      $Register->save();
      session()->flash('msg','Successfully Saved!');
      return redirect()->route('register');
    }

    else{
      session()->flash('msg','Invalid Student ID or Course ID!');
      return redirect()->route('register');
    }

    }

    session()->flash('msg','Please fill the Search/Register field!');
    return redirect()->route('register');

    }

}
