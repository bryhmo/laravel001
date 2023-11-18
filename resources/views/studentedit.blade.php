<h1 style="text-align: center;">welcome edit your name</h1>
<form action="edit" method="POST" style="margin-left: 30%;color:red;">
    <label for="firstname">LastName:</label>
    <input type="text" name="lastname" value="{{$keyholder['lastname']}}"><br><br>
    <br>
    <label for="firstname">FirstName:</label>
    <input type="text" name="firstname" value="{{$keyholder['firstname']}}"><br><br>
    <br>
    <label for="othername">OtherName:</label>
    <input type="text" name="othername" value="{{$keyholder['othername']}}"><br><br>
    <br>
    <label for="studentid">StudentID:</label>
    <input type="text" name="studentid" value="{{$keyholder['studentid']}}"><br><br>
    <br>
    <label for="semester">Semester:</label>
    <input type="text" name="semester" value="{{$keyholder['semester']}}"><br><br>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{$keyholder['email']}}"><br><br>
    <br>
    <label for="phone">Phone:</label>
    <input type="number" name="phone" value="{{$keyholder['phone']}}"><br><br>
    <br>
    <button type="submit">update your record</button><br><br>
</form>