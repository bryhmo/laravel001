<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

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

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<form action="/addnewuser" method="post">
    @csrf
  <div class="container">
    <h1 style="text-align: center; color:#04AA6D;"> Student Registeration form</h1>
    <p style="text-align: center;">Please fill in this form to create an account.</p>
    <hr>

    <label for="lastname"><b>LastName</b></label>
    <input type="text" placeholder="Enter Lastname" name="lastname" id="lastname" required>

    <label for="firstname"><b>FirstName</b></label>
    <input type="text" placeholder="Enter FirsName" name="firstname" id="firstname" required>

    <label for="othername"><b>OtherName</b></label>
    <input type="text" placeholder="Enter othername" name="othername" id="othername" required>

    <label for="studentid"><b>StudentID</b></label>
    <input type="text" placeholder="Enter StudentID" name="studentid" id="studentid" required>
    
    <label for="semester"><b>Semester</b></label>
    <input type="text" placeholder="Enter Semester" name="semester" id="semester" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" id="phone" required>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
    
</body>
</html>