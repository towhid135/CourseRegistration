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

*{
font-family: sans-serif;
}

.h2 {
  color:#009879;
  position:relative;
  top:35px;
  left:38%;
}
.btn{
  border-radius: 15px 15px 15px 15px;
  position:relative;
  background:#009879;
  border-color:#009879;
  font-weight:bold;
  font-size: 110%;
  position:relative;
  height:75px;
  width:50%;
  left:26%;
  top:85px;
  font-weight:bold;
  color: black;
  background: #d1ccc0;
  border-color: #d1ccc0;
}
.btn1{
  border-radius: 15px 15px 15px 15px;
  position:relative;
  background:#009879;
  border-color:#009879;
  font-weight:bold;
  font-size: 110%;
  position:relative;
  height:75px;
  width:50%;
  left:26%;
  top:120px;
  font-weight:bold;
  color: black;
  background: #d1ccc0;
  border-color: #d1ccc0;
}
.btn2{
  border-radius: 15px 15px 15px 15px;
  position:relative;
  background:#009879;
  border-color:#009879;
  font-weight:bold;
  font-size: 110%;
  position:relative;
  height:75px;
  width:50%;
  left:26%;
  top:155px;
  font-weight:bold;
  color: black;
  background: #d1ccc0;
  border-color: #d1ccc0;
}
label{
  position:relative;
  left:5%;
  top:80px;
  font-weight: bold;
  color: black;
}
input[type="text"]{
    position:relative;
    left:5%;
    top:80px;
    width:85%;
    margin-bottom:20px;
    background:#95a5a6;
    color:black;
    border-color:#95a5a6;
  }

        </style>
    </head>
    <body>

            <div class="content">
              <form action="" method="">

                    <input type='submit' class="btn" value="Add Course" formaction="http://127.0.0.1:8000/addcourse">
                    <input type='submit' class="btn1" value="Add Student" formaction="http://127.0.0.1:8000/addstudent">
                      <input type='submit' class="btn2" value="Register" formaction="http://127.0.0.1:8000/register">
              </form>
            </div>
    </body>
</html>
