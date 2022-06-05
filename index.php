<?php $currentpage="index";?>
<?php
include "./includes/nav.php" ;

?>
<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Controller/RegistrationController.php';?>

    <!-- home section starts -->

          
    <section id="movie" class="py-5">
    
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
            <div class="col-md-6 ">

            <form id="searchform">
                <input class="form-control me-2" id="search" name="search"type="search" placeholder="Search" aria-label="Search">
            
                </form>
            </div>
                </div>
          
            <div class="row justify-content-center align-items-center fetch-index">

               
               
              
               
            </div>
        </div>
    </section>
 
    <!-- home section ends -->


    
    <?php
include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/includes/footer.php';

?>
<!-- search details starts -->
<script>
    $(document).ready(function(){
      $("#search").keyup(function(){
          
         $search=$('#search').val();
          $.ajax({
              url:"Codes/search_code.php",
              method:"POST",
             data:{'search':$search}, 
              success:function(response)
              {
                $('.fetch-index').html(response);
              },error:function(){
                  console.log("Error in searching of data");
              }
          })
      })


    //   fetch index details
    fetch();
    function fetch(){
        $.ajax({
            url:"Codes/fetch_index_code.php",
            method:"POST",
            success:function(response){
                $('.fetch-index').html(response);
            },error:function(){
                console.log("Error in fethcing index data");
            }
        })
    }
    })
</script>
<!-- search details ends -->