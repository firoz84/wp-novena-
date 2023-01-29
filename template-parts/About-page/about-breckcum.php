

<?php 

$options = get_option( 'my_framework' ); 

$about_subtitle= $options['about_subtitle'];
$about_title= $options['about_title'];

?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <?php 
          if($about_subtitle){
            ?>
            <span class="text-white"><?php echo $about_subtitle; ?></span>
            <?php
          }
          
          ?>
          <?php 
          if( $about_title){
            ?>
            <h1 class="text-capitalize mb-5 text-lg"><?php echo $about_title; ?></h1>
            <?php
          }
          ?>
          
        </div>
      </div>
    </div>
  </div>
</section>