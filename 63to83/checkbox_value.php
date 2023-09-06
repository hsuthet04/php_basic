<?php

if(isset($_POST['submit'])){
    $colors=$_POST['color'];

    foreach($colors as $color){
        echo $color."<br>";
    }
}

?>

<form action="<?php $PHP_SELF?>" method="post" ?>
        <input type="checkbox" name="color[]" value="violet">Violet<br>
        <input type="checkbox" name="color[]" value="blue">Blue<br>
        <input type="checkbox" name="color[]" value="green">Green<br>
        <input type="checkbox" name="color[]" value="red">Red<br>
        <button type="submit" name=submit value="Choose">
</form>
