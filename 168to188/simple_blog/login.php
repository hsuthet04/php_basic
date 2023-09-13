<?php 
          include_once "views/top.php"; 
          include_once "views/nav.php"; 
          //include_once "views/header.php";    
          
          if(isset($_POST["submit"])){
            $username=$_POST["username"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            echo $username."_".$email."_".$password;
         }
    ?>
    <div class="container my-3">
    <div class="col-md-8 offset-md-2">
    <h2 class="text-center">Login to see special posts</h2>        
    <form action="login.php" class="form" method="post">
                <div class="form-group">
                    <label for="email" class="english">Email</label>
                    <input type="email" class="form-control english rounded-0" name="email" id="email">
                </div>
                <div class="from-group">
                    <label for="password" class="english">Password</label>
                    <input type="password" class="form-control english rounded-0" id="password">
                </div>
                <p></p>
                <div class="row no-gutters justity-content-end">
                <button class="btn btn-info" type="submit" value="submit" name="submit">Login</button>
                </div>
            </form>
       </div>
    </div>
    
    <?php include_once "views/footer.php";
          include_once "views/base.php";
    
    ?>
    