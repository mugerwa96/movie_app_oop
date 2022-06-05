<?php $currentpage="view";?>
<?php

include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/includes/nav.php';

?>

<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Controller/RegistrationController.php';?>
<div class="container py-5">
    <div class="row justify-content-center align-item-center">
        <div class="col-md-9 py-5">
        <table class="table ">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col" style="width:2px" >Title</th>
            <th scope="col" style="width:20rem">Details</th>
            <th scope="col">Created On</th>
            <th>Action</th>
          </tr>
        </thead>

  <tbody class="table-content">

  </tbody>
    
   
  </tbody>
</table>
        </div>
    </div>
</div>

    
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/includes/footer.php';

?>
<script>
  $(document).ready(function(){

    $(document).on("click","#delete",function(){
      $tr=$(this).closest("td");
      $id=$tr.find("#item-id").val();
     

      $.ajax({

        url:"Codes/delete.php",
        method:"post",
        data:{"id":$id},
        success:function(response)
        {
          if(response==1)
          {

            display();
          }
        }
      })
    })
    display();
    function display(){
      $.ajax({
        url:"Codes/fetch_code.php",
        method:"post",
        success:function(response)
        {
          $(".table-content").html(response);
          console.log(response);
        }
      })
    }
  })
</script>