<h1 style="text-align: center;color:brown">EMPLOYEES INFORMATION</h1>
<table border="1" style="color:blueviolet;margin-left:25%">
    <tr>
        <td>id</td>
        <td>firstname</td>
        <td>lastname</td>
        <td>email</td>
        <td>feeback</td>
    </tr>
    @foreach($dbdata as $singleUser)
        <tr>
            <td>{{$singleUser['id']}}</td>
            <td>{{$singleUser['firstname']}}</td>
            <td>{{$singleUser['lastname']}}</td>
            <td>{{$singleUser['email']}}</td>
            <td>{{$singleUser['feedback']}}</td>
        </tr>
    @endforeach
    


</table>