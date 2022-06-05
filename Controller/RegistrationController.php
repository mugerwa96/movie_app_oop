<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Database/database.php';?>
<?php
class RegistrationController extends Database
{
    public function register($title,$desc,$file_name)
    {

        $sql="INSERT INTO `registration` (`id`, `title`, `description`, `added_on`, `images`) 
        VALUES (NULL, '$title', '$desc', current_timestamp(),'$file_name')";
        $query=mysqli_query($this->conn,$sql);
        if($query)
        {
            return true;
        }else{
            return false;
        }

    }

    public function fetch()
    {
        $sql="select * from registration";
        $query=mysqli_query($this->conn,$sql);
        $num=mysqli_num_rows($query);
        if($num)
        {
            while($row=mysqli_fetch_array($query))
            {
                $data[]=$row;
            }
            return $data;
        }else{
            return false;
        }
    }
    public function edit($id){
        $sql="select * from registration where id='$id'";
        $query=mysqli_query($this->conn,$sql);
        $num=mysqli_num_rows($query);
        if($num)
        {
            $data=mysqli_fetch_array($query); 
            return $data;   
        }else{
            return false;
        }
    }
    public function single($id){
        $sql="select * from registration where id='$id'";
        $query=mysqli_query($this->conn,$sql);
        $num=mysqli_num_rows($query);
        if($num)
        {
            $data=mysqli_fetch_array($query); 
            return $data;   
        }else{
            return false;
        }
    }
    public function update($id,$title,$desc,$file_name)
    {
        if($file_name)
        {
            $sql="UPDATE `registration` SET `title` = '$title', `description` = '$desc', `images` = '$file_name' WHERE `registration`.`id` ='$id'";
            $query=mysqli_query($this->conn,$sql);
            if($query)
            {
                return true;
            }else{
                return false;
            }
        }

        $sql="UPDATE `registration` SET `title` = '$title', `description` = '$desc' WHERE `registration`.`id` ='$id'";
        $query=mysqli_query($this->conn,$sql);
        if($query)
        {
            return true;
        }else{
            return false;
        }
    }

    public function delete($id)
    {
        $sql="DELETE FROM `registration` WHERE `registration`.`id` ='$id'";
        $query=mysqli_query($this->conn,$sql);
        if($query)
        {
            return true;
        }else{
            return false;
        }
    }

    public function search($search){
        $sql="select * from registration where title like '%$search%'";   
        $query=mysqli_query($this->conn,$sql);
        $num=mysqli_num_rows($query);
        if($num>0)
        {
           while($row=mysqli_fetch_array($query))
           {
               $data[]=$row;
           }
           return $data;

        }

    }
    // check to see if the title exists
    public  function isAvailable($title)
    {
        $sql="select * from registration where title='$title'";
        $query=mysqli_query($this->conn,$sql);
        $num=mysqli_num_rows($query);
        if($num>0)
        {
            $data=mysqli_fetch_array($query);
            return $data;
        }else{
            return false;
        }
    }

   
}

?>