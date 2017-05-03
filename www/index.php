<?php

include 'includes/db.php';

include 'includes/functions.php';

include 'includes/front_header.php';




?>






 

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">

            <?php

              $blog = Utils::getPost($conn);

              echo $blog;

            ?>


              </div><!-- /.row -->



    </div><!-- /.container -->


    

                <?php


            include 'includes/sidebar.php';

          ?>

    </div>

            
    
        
      
   <?php

    include 'includes/front_footer.php';

   ?>
