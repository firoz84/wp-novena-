
<?php 
        $options = get_option( 'my_framework' ); 

        $about_service_subtitle= $options['about_service_subtitle'];
        $about_service_title= $options['about_service_title'];
 ?>

<section class="page-title bg-1 servie-page">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
            <?php 
            if($about_service_subtitle){
                ?>
                <span class="text-white"><?php echo $about_service_subtitle;?></span>
                <?php
            }
            ?>
          
          <?php 
          if($about_service_title){
            ?>
            <h1 class="text-capitalize mb-5 text-lg"><?php echo $about_service_title;?></h1>

            <?php
          }
          ?>
          
         
        </div>
      </div>
    </div>
  </div>
</section>