<?php
     if(isset($_POST['submit'])){
        //echo $_FILES['file']['tmp_name']."<br>";
        //echo $_FILES['file']['name']."<br>";
        //echo $_FILES['file']['error']."<br>";

        move_uploaded_file($_FILES['files'] ['tmp_name'],
        '../uploads/' . $_FILES['files'] ['name']);
     }   

?>

<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="files">
    <button type="submit" name="submit">Upload</button>

</form>
