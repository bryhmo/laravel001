<h1 style="color: green;text-align:center">Users Information</h1>
<table border="1" style="color:blueviolet;text-align:center;margin-left:35%;">
    <div>    
        <tr>
            <td>Id</td>
            <td>FirstName</td>
            <td>LastName</td>
            <td>Email</td>
            <td>Profile Photo</td>
        </tr>
        @foreach($people as $person)
        <tr>
            <td>{{$person['id']}}</td>
            <td>{{$person['first_name']}}</td>
            <td>{{$person['last_name']}}</td>
            <td>{{$person['email']}}</td>
            <td><img src="{{$person['avatar']}}" alt="imagephoto"></td>
        </tr>
        @endforeach
    <div>


</table>