
<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Controller/RegistrationController.php';?>
<?php
 $id=$_POST['id'];
$obj=new RegistrationController;
$delete=$obj->delete($id);
if($delete)
{
   echo 1;
}else{
    echo 0;
}
?>