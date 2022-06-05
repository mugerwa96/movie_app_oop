<?php $currentpage="view";?>

<?php

include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/includes/nav.php';

?>

<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Controller/RegistrationController.php';?>
<section class="py-5">

    <div class="container py-5">
        <div class="row justify-content-center align-item-center">
           
        <div class="col-md-6">
                    <?php
                    $id=$_GET['id'];
                    $single=new RegistrationController;
                    $data=$single->single($id);

                    ?> 
                    <p class="text-center fw-bold"><?php echo strtoupper($data['title']);?></p>
                <div class="card shadow">
        
                    <img src="./upload/<?php echo $data['images'];?>" class="img-fluid"alt="">
                    <p class="fw-bold">About...</p>
                    <p class="text-muted p-2"><?php echo $data['description'];?></p>
                </div>
                    <?php
                
                ?>
            </div>
        </div>
</section>
  

 </div>
  
    
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/includes/footer.php';

?>
