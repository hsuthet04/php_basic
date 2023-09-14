<?php

include_once "views/top.php";
include_once "views/nav.php";
include_once "views/header.php";

if(checkSession("username")){
    if(getSession("username") != "takoyaki"){
        header("Location:index.php");
    }else{
        header("Location:index.php");
        
    }
} 
?>
<h1>Hello Takoyaki</h1>
<div class="container my-3">
       <div class="row">
           <?php
            include_once "views/sidebar.php";
            ?>

           <section class="col-md-9">
           <form>
                <div class="form-group">
                <label for="posttitle">Title</label>
                <input type="email" class="english" id="posttitle" name="posttitle">
                <small id="emailHelp" class="form-text english" id="posttitle" name="posttitle">We'll never share your email with anyone else.</small>
                </div>
            <div class="form-group">
            <label for="posttype" class="english">Post type</label>
            <select class="form-control" id="posttype" name="posttype">
                <option value="1">Free</option>
                <option value="2">Paid</option>   
            </select>
            </div>
            <div class="form-group">
                <label for="postwriter">Post writer</label>
                <input type="text" class="form-text english" id="postwriter" name="postwriter">
               
                </div>
            <div class="form-group">
            <label for="postcontent">Post Content</label>
            <textarea type="text" class="form-control" id="postcontent"
                rows="15" name="postcontent"> 
            </textarea>
            </div>
            
           </section>
       </div>
   </div>