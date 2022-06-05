<?php $currentpage="add";?>
<?php

include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/includes/nav.php';

?>


<div class="container py-5">
    <div class="row justify-content-center align-item-center">
        <div class="col-md-6 py-5">
            <div class="message"></div>
        <form enctype="multipart/form-data" id="form">
        <div class="mb-3">
            <label for="title" class="form-label">Movie Title</label>
            <input type="text" class="form-control"  name="title"id="title">
            <span class="error_title"></span>
           
        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Movie Description</label>
            <textarea class="form-control" name="desc" id="details" rows="3"></textarea>
            </div>
            <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control"type="file"name="file" id="file">
            </div>
        <button type="submit" id="button"class="btn site-bg-color text-light"><i class="fa fa-save mx-2"></i>REGISTER</button>
        </form>
        </div>
    </div>
</div>

    
<?php
include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/includes/footer.php';

?>
<script>
    $(document).ready(function(){


        // title search starts
        var error_title=false;
        $('#title').keyup(function(){
     
            check_title();
        })
        function check_title(){
            $title=$('#title').val();
           if($title.length=="")
           {
            $("#title").css({"border":"2px solid  #dc3545"});
                       $(".error_title").html("<small style='font-size:12px' class='text-danger fw-bold'><i class='fa fa-times-circle mx-2'></i>Movie title required</small>");
                        $("#button").attr("disabled",true);
                        error_title=true;
           }
           else
           {
            $.ajax({
                url:"Codes/search_title_code.php",
                method:"POST",
                data:{"title":$title},
                success:function(response){
                    if(response==1){
                        $("#title").css({"border":"2px solid  #dc3545"});
                        $(".error_title").html("<small style='font-size:12px' class='text-danger fw-bold'><i class='fa fa-times-circle mx-2'></i>Title already exists</small>");
                            $("#button").attr("disabled",true);
                            error_title=true;
                        }else{
                            $("#title").css({"border":""});
                        $(".error_title").html("<small style='font-size:12px' class='text-success fw-bold'><i class='fa fa-check-circle mx-2'></i></small>");
                            $("#button").attr("disabled",false);
                            error_title=false;
                        }
                },error:function(){
                    console.log("Error in searching for title existence");
                }
            })
             }
        // title search ends
       
        }
        $('#form').submit(function(e){
            e.preventDefault();

            check_title();
            error_title=false;
            if(error_title==false)
            {
                var form_data=new FormData(this);
                $.ajax({
                    url:"Codes/register_code.php",
                    method:"POST",
                    data:form_data,
                    contentType:false,
                    processData:false,
                    success:function(response)
                    {
                        console.log(response);
                        if(response==1)
                    {
                        $(".message").html('<div class="alert alert-success" role="alert"><i class="fa fa-check-circel mx-2"></i>Saved</div>');
                        setTimeout(function(){
                            $('.message').hide();
                            $("#button").attr("disabled",false);
                            window.location="view.php";
                        },1000)
                    
                    }
                    },error:function(){
                        console.log("error");
                    }
                })
             }
        })
    })
</script>