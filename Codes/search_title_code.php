<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Controller/RegistrationController.php';?>
<?php
$title=$_POST['title'];
$obj=new RegistrationController;
$search=$obj->isAvailable($title);
if($search){
    echo 1;
}else{
    echo 0;
}

?>