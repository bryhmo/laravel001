<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit profile</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
    
<form action="/update" method="POST"   style="border:1px solid #ccc">
    @csrf
    <input type="hidden" name="id" value="{{$keyholder['id']}}"><br><br>
    <br>
  <div class="container">
    <h1>welcome {{$keyholder['lastname']}}</h1>
    <p>Please make the neccessary update to your profile here.</p>
    <hr>

    <label for="lastname"><b>LastName</b></label>
    <input type="text"  name="lastname" value="{{$keyholder['lastname']}}">
    
    <label for="email"><b>FirstName</b></label>
    <input type="text"  name="firstname" value="{{$keyholder['firstname']}}">
    
    <label for="othername"><b>OtherName</b></label>
    <input type="text"  name="othername" value="{{$keyholder['othername']}}">
    
    <label for="studentid"><b>StudentID</b></label>
    <input type="text"  name="studentid" value="{{$keyholder['studentid']}}">

    <label for="semester"><b>Semester</b></label>
    <input type="text"  name="semester" value="{{$keyholder['semester']}}">

    <label for="email"><b>Email</b></label>
    <input type="text"  name="email" value="{{$keyholder['email']}}">
    
    <label for="phone"><b>phone</b></label>
    <input type="text"  name="phone" value="{{$keyholder['phone']}}">
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    

    <div class="clearfix">
      <button type="submit" >Update profile</button>
    </div>
  </div>
</form>
    
</body>
</html>