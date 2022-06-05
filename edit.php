<?php $currentpage="view";?>
<?php

include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/includes/nav.php';

?>
<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Controller/RegistrationController.php';?>
<?php
echo $id=$_GET['id'];
$data=new RegistrationController;
$row=$data->edit($id);

?>

<div class="container py-5">
    <div class="row justify-content-center align-item-center">
        <div class="col-md-6 py-5">
            <div class="message"></div>
            <form enctype="multipart/form-data" id="form">
        <div class="mb-3">
            <label for="title" class="form-label">Movie Title</label>
            <input type="text" class="form-control" value="<?php echo $row['title'];?>" name="title"id="title">
           
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Movie Description</label>
            <textarea class="form-control" name="desc"id="details" rows="3"><?php echo $row['description'];?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control"type="file"name="file" id="file">
            </div>
        <button type="submit" id="button"class="btn site-bg-color text-light"><i class="fa fa-pencil mx-2"></i>UPDATE</button>
        </form>
        </div>
    </div>
</div>

    
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/includes/footer.php';

?>
<script>
    $(document).ready(function(){
      
        $('#form').submit(function(e){
            e.preventDefault();
            var form_data=new FormData(this);
            $.ajax({
                url:"Codes/update_code.php",
                method:"POST",
                data:form_data,
                contentType:false,
                processData:false,
                success:function(response)
                {
                    console.log(response);
                    if(response==1)
                 {
                    $(".message").html('<div class="alert alert-warning" role="alert"><i class="fa fa-check-circle mx-2"></i>SUpdated </div>');
                    setTimeout(function(){
                        $('.message').hide();
                        $("#button").attr("disabled",false);
                        window.location="view.php";
                    },1000)
                }}
                ,error:function(){
                    console.log("error");
                }
            })
        })
    })
</script>