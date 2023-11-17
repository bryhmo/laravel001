<h1>Upload File</h1>
<form action="uploadfiles.com" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo"><br><br>
    <button submit>upload file</button>
</form>