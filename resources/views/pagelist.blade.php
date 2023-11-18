<h1 style="text-align: center;">Lincoln Students List</h1>
<table border="1" style="margin-left: 5%;">
<tr>
    <td>ID</td>
    <td>LAST-NAME</td>
    <td>FIRSTNAME</td>
    <td>OTHER-NAME</td>
    <td>STUDENT-ID</td>
    <td>SEMESTER</td>
    <td>EMAIL</td>
    <td>PHONE</td>
    <td>DELETE OPERATION</td>
    <td>EDIT OPERATION</td>
</tr>
@foreach($studentlist as $student)
    <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['lastname']}}</td>
        <td>{{$student['firstname']}}</td>
        <td>{{$student['othername']}}</td>
        <td>{{$student['studentid']}}</td>
        <td>{{$student['semester']}}</td>
        <td>{{$student['email']}}</td>
        <td>{{$student['phone']}}</td>
        <td><a href={{"delete/".$student['id']}}>Delete</a></td>
        <td><a href={{"edit/".$student['id']}}>Edit</a></td>
    </tr>
@endforeach
</table>

<h2 style="margin-left:25%;">{{$studentlist->links()}}</h2>

<style>
    .w-5{
        display: none;
    }
</style>