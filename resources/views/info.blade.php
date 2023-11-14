

<form action="usersinfo" method="POST">
<h1> Users Information</h1>
    @csrf
    <input type="text" name="firstname" placeholder="Enter firstname"><br>
    <span style="color:red">@error('firstname'){{$message}}@enderror</span>
    <br>
    <input type="text" name="lastname" placeholder="Enter lastName"><br>
    <span style="color:red">@error('lastname'){{$message}}@enderror</span>
    <br>
    <input type="email" name="email" placeholder="Enter email"><br>
    <span style="color:red">@error('email'){{$message}}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="enter password"><br>
    <span style="color:red">@error('password'){{$message}}@enderror</span>
    <br>
    <input type="password" name="confirmpassword" placeholder="confirm password"><br>
    <span style="color:red">@error('confirmpassword'){{$message}}@enderror</span>
    <br>
    <button type="submit">submit</button>
</form>