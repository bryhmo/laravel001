<h1 style="text-align: center; color:red;">Add Member</h1>
@if(session('username'))
<h2 style="color:green;text-align:center" >{{session('username')}} User has been added successful</h2>
@endif
<form action="addmember.com" method="post" style="margin-left:45%">
    @csrf
    <input type="text" name="username" placeholder="enter your username"><br><br>
    <input type="password" name="password" placeholder="enter your password"><br><br>
    <input type="email" name="email" placeholder="enter your email"><br><br>
    <button type="submit">Add New User</button>
</form>