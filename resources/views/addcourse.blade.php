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

.content{
  position:absolute;
  top:100px;
  left:35%;
  width:300px;
  height:500px;
  background-color:#c7ecee;
  overflow-y:auto;
  overflow-x:hidden;
}

.availablebox{
position:absolute;
top:100px;
left:22%;
width:360px;
height:500px;
background-color:#c7ecee;
overflow-y:auto;
overflow-x:hidden;
}
.avail{
border-collapse:collapse;
margin:25px 0;
font-size:0.9em;
min-height:100px;
width:360px;
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


.content{
  position:absolute;
  top:100px;
  left:50%;
  width:300px;
  height:500px;
  background-color:#c7ecee;
  overflow-y:auto;
  overflow-x:hidden;
}

*{
font-family: sans-serif;
}


h2 {
color:#009879;
position:relative;
top:35px;
left:30%;
}
.h2 {
  color:#009879;
  position:relative;
  top:-20px;
  left:53%;
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
top:400px;

}

.btn{
  position:relative;
  left:35%;
  top:35px;
  font-weight:bold;
  color: black;
  background: #009879;
  border-color: #009879;
}

label{
  position:relative;
  left:5%;
  top:50px;
  font-weight: bold;
  color: black;
}

input[type="text"],input[type="number"],p{
    position:relative;
    left:5%;
    top:50px;
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


        </style>

    </head>
    <body>
      <h2>Course List</h2>

    <div class="availablebox">
    <form action="" method="post">
      {{csrf_field()}}
    <table class="avail">
    <thead>
    <tr>
    <th>Course Name</th>
    <th>Course ID</th>
    <th>Credit</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($courses as $course)
    <tr>

    <td>{{$course->CourseName}}</td>
    <td>{{$course->CourseID}}</td>
    <td>{{$course->Credit}}</td>

    </tr>
    @endforeach
    </tbody>



    </table>

    </form>

    </div>


            <h2 class="h2">Add New Course</h2>
            <div class="content">
              <form action="{{route('addcourse.store')}}" method="post">
                {{ csrf_field() }}
                @if( session()->has('msg') )
                <p class='msg'> {{session()->get('msg')}} </p>
                @endif
                 <label for="cname">Course Name:</label>
                 <br>
              <!--  <input type="text" name="cname" placeholder="Enter your Course name"> -->
              <input type="text" name="cname" placeholder="Enter course name" onkeypress="return (event.charCode > 64 &&
  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode== 32)" >
                <br>
                <label for="cid">Course ID:</label><br>
                <!--  <input type="text" name="cid"  placeholder="Enter your course id"> -->
                <input type="text" name="cid" pattern="[A-z]{3}[-]{1}[0-9]{3}" title="Course ID should be like CSE-123">
                  <br>
                  <label for="credit">Creadit:</label><br>
                    <input type="number" step=0.05 name="credit" placeholder="Credit">
                    <br>

                          <button class="btn" type="submit" name="button">Add Course</button>
</form>

            </div>
    </body>
</html>
