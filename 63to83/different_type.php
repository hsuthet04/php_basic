<?php

//echo $_SERVER["PHP_SELF"];//filepath
if(isset($_REQUEST['submit'])){
    echo "Submit button click";
}
?>
<form action="<?php $_PHP_SELF ?>" method="get">
    <input type="text" name="username">
    <button type="submit" name="submit">Register       
    </button>
</form>