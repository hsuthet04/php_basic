<?php
    if(isset($_GET['submit'])){
        $color=$_GET['rbtn'];
        echo "You choose ".$color;
    }
?>
<form action="<?php $_PHP_SELF ?>" method="get">
    <input type="radio" name="rbtn" value="Violet">Violet<br>
    <input type="radio" name="rbtn" value="Blue">Blue<br>
    <input type="radio" name="rbtn" value="Green">Green<br>
    <input type="radio" name="rbtn" value="Red">Red<br>
    <button type="submit" name="submit" value="Submit">Choose </button>

</form>