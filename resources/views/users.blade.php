<h1> this is Users Login page</h1>

<form action="logging.com" method="POST">
     @csrf
    <input type="text" name="username" placeholder="enter user name"><br>
    <span style="color:red">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="enter user password"><br>
    <span style="color: red;">@error('password'){{$message}}@enderror</span>
    <br>
    <button type="submit">submit</button>
</form>