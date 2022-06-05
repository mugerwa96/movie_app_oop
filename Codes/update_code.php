
<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Controller/RegistrationController.php';?>
<?php
$title=$_POST['title'];
$desc=$_POST['desc'];
$file_name=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="../upload/$file_name";
$id=$_POST['id'];

$obj=new RegistrationController;
$save=$obj->update($id,$title,$desc,$file_name);

if($save)
{
    move_uploaded_file($tmp_name,$location);
    
        echo 1;
}else{
    echo 0;
}
?>