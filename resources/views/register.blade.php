<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

        body{
background:#d1ccc0;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
overflow-x:hidden;
}
.availablebox{
position:absolute;
top:100px;
left:2%;
width:300px;
height:500px;
background-color:#c7ecee;
overflow-y:auto;
overflow-x:hidden;
}
.register{
  position:absolute;
  top:100px;
  left:35%;
  width:300px;
  height:500px;
  background-color:#c7ecee;
  overflow-y:auto;
  overflow-x:hidden;
}
.search{
  position:absolute;
  top:100px;
  left:65%;
  width:300px;
  height:500px;
  background-color:#c7ecee;
  overflow-y:auto;
  overflow-x:hidden;
}
*{
font-family: sans-serif;
}
.avail{
border-collapse:collapse;
margin:25px 0;
font-size:0.9em;
min-height:100px;
width:300px;
border-radius:5px 5px 0 0;
box-shadow:0 0 20px rgba(0,0,0,0.15);
}
.avail thead tr{
background-color:#009879;
color:#ffffff;
text-align:left;
font-weight:bold;
}
.avail th,td{
padding:12px 15px;
}
.avail tbody tr{
border-bottom:1px solid #dddddd;
}
.avail tbody tr:nth-of-type(even){
background:#f3f3f3;
}
.avail tbody tr:last-of-type{
border-bottom:2px solid #009879;
}
h2 {
color:#009879;
position:relative;
top:35px;
left:4%;
}
.h2 {
  color:#009879;
  position:relative;
  top:-20px;
  left:35%;
}
.h21 {
  color:#009879;
  position:relative;
  top:-70px;
  left:63%;
}
.btn input[type="submit"]
{
position:relative;
height:35px;
width:10%;
background:#009879;
border-color:#009879;
font-weight:bold;
left:42%;
top:520px;

}
table{
position:relative;
bottom:30px;
}
.home{
background:url("house.png");
font-weight:bold;
text-align:left;
width:8%;
height:5%;
background-position:right;
background-size: 35px 35px;
background-repeat:no-repeat;
font-size:20px;
background-color:#c7ecee;
border-color:#c7ecee;
}
.hbtn{

position:relative;
bottom:460px;
left:48%;
top:510px;

}
.btn{
  position:relative;
  left:35%;
  top:85px;
  font-weight:bold;
  color: black;
  background: #009879;
  border-color: #009879;
}
label{
  position:relative;
  left:5%;
  top:80px;
  font-weight: bold;
  color: black;
}
input[type="text"],input[type='number'],p{
    position:relative;
    left:5%;
    top:80px;
    width:85%;
    margin-bottom:20px;
    background:#95a5a6;
    color:black;
    border-color:#95a5a6;
  }
  .msg{
    color: red;
    font-weight: bold;
  }
  .search .sfi{
    position:relative;
    top:10px;
    left:15%;
    border-radius: 5px 5px 5px 5px;
    width:70%;
  }
  .search .sbtn{
    position: relative;
    border-radius: 5px 5px 5px 5px;
    left: 37%;
    top:-3px;
  }

        </style>

    </head>


    <body>
  <h2>Available Courses</h2>

<div class="availablebox">
<form action="" method="post">
  {{csrf_field()}}
<table class="avail">
<thead>
<tr>
<th>Course Name</th>
<th>Course ID</th>
<th>Creadit</th>
</tr>
</thead>

<tbody>
@foreach ($courses as $course)
<tr>

<td>{{$course->CourseName}}</td>
<td>{{$course->CourseID}}</td>
<td>{{$course->Creadit}}</td>

</tr>
@endforeach
</tbody>



</table>

</form>

</div>

<!-- <div class="hbtn">
<form action="" method="POST">
<input class="home" type="submit" value="Home" formaction="http://127.0.0.1:8000/issue/">
</form>
</div> -->
<h2 class="h2">Register Your Courses</h2>
<div class="register">

  <form action="{{route('register.store')}}" method="post">
    {{csrf_field()}}
    @if( session()->has('msg') )
    <p class='msg'> {{session()->get('msg')}} </p>
    @endif
    <label for="Student ID">Student ID:</label><br>
      <input type="number" name="rsid" placeholder="Enter your id">
      <br>
        <label for="Course ID">Course ID:</label><br>
          <input type="text" name="rcid" pattern="[A-z]{3}[-]{1}[0-9]{3}" title="Course ID should be like CSE-123" placeholder="Enter course id">
          <br>
              <button class="btn" type="submit" name="button">Register</button>
            </form>

</div>

<h2 class="h21">Search Registered Courses</h2>
<div class="search">

  <form action="{{route('register.store')}}" method="post">

    {{csrf_field()}}
    <input class="sfi"  type="number" name="sname1" placeholder="Enter your registration number">
    <br>
      <button class="sbtn" type="submit" name="button">Search</button>
      <br><br>


      <table class="avail">
      <thead>
      <tr>
      <th>Course Name</th>
      <th>Course ID</th>
      </tr>
      </thead>

      <tbody>
      @if(isset($obj))
      @foreach ($obj as $register)
      <tr>

      <td>{{$register->courseName}}</td>
      <td>{{$register->courseID}}</td>

      </tr>
      @endforeach
      @endif
      </tbody>
    </table>
    <br>


</div>

    </body>
</html>
