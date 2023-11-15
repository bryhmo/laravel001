<h1 style="text-align: center;color:red;">User Session Login</h1>
<form action="session.com" method="post" style="margin-left: 40%;">
    @csrf
    <input type="text" name="firstname" placeholder="enter your firstname"><br>
    <br>
    <input type="text" name="lastname" placeholder="enter your lastname"><br>
    <br>
    <input type="email" name="email" placeholder="enter your email"><br>
    <br>
    <input type="password" name="password" placeholder="enter your password"><br>
    <br>
    <button type="submit">Submit</button>
</form>