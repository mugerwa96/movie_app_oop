
<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Controller/RegistrationController.php';?>
<?php
    $data=new RegistrationController;
    $row=$data->fetch();
    if($row)
    {
      foreach($row as $row)
      {
        ?>
         <tr>
           
          <td><img src="../movie_app_oop/upload/<?php echo $row['images'];?>" alt="" style="width:50px;height:50px;object-fit:cover;" class="img-fluid"></td>
          <td><?php echo strtoupper($row['title']);?></td>
          <td><?php echo $row['description'];?></td>
          <td><?php echo date("Y-M-D",strtotime($row['added_on']));?></td>
          <td>
            <input type="hidden"id="item-id" value="<?php echo $row['id'];?>">
            <a href="./edit?id=<?php echo $row['id'];?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-pencil"></i></a>
            <a href="#"id="delete" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
        <?php
      }

    }else{
      echo "no";
    }
    ?>