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
      <h2>Student List</h2>

    <div class="availablebox">
    <form action="" method="post">
      {{csrf_field()}}
    <table class="avail">
    <thead>
    <tr>
    <th>Student Name</th>
    <th>Student ID</th>
    <th>Department</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($std as $st)
    <tr>

    <td>{{$st->studentName}}</td>
    <td>{{$st->studentID}}</td>
    <td>{{$st->department}}</td>

    </tr>
    @endforeach
    </tbody>



    </table>

    </form>

    </div>



           <h2 class="h2">Add New Student</h2>
            <div class="content">
              <form action="{{route('addstudent.store')}}" method="post">
                {{csrf_field()}}
                @if( session()->has('msg') )
                <p class='msg'> {{session()->get('msg')}} </p>
                @endif
                 <label for="name">Name:</label>
                 <br>
            <!--    <input type="text" name="sname" placeholder="Enter your name"> -->
            <input type="text" name="sname" placeholder="Enter your name" onkeypress="return (event.charCode > 64 &&
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode== 32)" >

                <br>
                <label for="id">ID:</label><br>
                  <input type="number" name="sid" placeholder="Enter your id">
                  <br>
                  <label for="dept">Department:</label><br>
                    <input type="text" name="sdept" pattern="[A-Z]{3}" title="Department name should be like CSE" placeholder="Enter your dept name">
                    <br>
                    <label for="sem">Semester:</label><br>
                      <input type="text" name="sem" pattern="[1-9]{1}[a-z]{2}" title="Semester should be like 2nd,3rd etc" placeholder="Enter semester">
                      <br>
                      <label for="year">Year:</label><br>
                        <input type="text" name="year" pattern="[1-9]{1}[a-z]{2}" title="year should be like 3rd,4th etc" placeholder="Year">
                        <br><br>

                          <button class="btn" type="submit" name="button">Add Student</button>



            </div>
        </div>
    </body>
</html>
