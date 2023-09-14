   <?php
   
    include_once "views/top.php";
    include_once "views/nav.php";
    include_once "views/header.php";
    ?>
   <div class="container my-3">
       <div class="row">
           <?php
            include_once "views/sidebar.php";
            ?>

           <section class="col-md-9">
               <div class="row">
                   <div class="col-md-6">
                       <div class="cardd-block">
                           <h1>Title</h1>
                           <p>List groups are a flexible and powerful component
                               for displaying a series of content. Modify and extend
                               them to support just about any content within.</p>
                           <a href="#" class="btn btn-info">Detail</a>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="cardd-block">
                           <h1>Title</h1>
                           <p>List groups are a flexible and powerful component
                               for displaying a series of content. Modify and extend
                               them to support just about any content within.</p>
                           <a href="#" class="btn btn-info">Detail</a>
                       </div>
                   </div>
               </div>
           </section>
       </div>
   </div>

   
   
   <?php include_once "views/footer.php";
    include_once "views/base.php";

    ?>