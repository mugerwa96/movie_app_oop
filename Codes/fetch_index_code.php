<?php  include $_SERVER['DOCUMENT_ROOT'] .'/movie_app_oop/Controller/RegistrationController.php';?>
<?php
                $data= new RegistrationController;
                $data=$data->fetch();
                foreach($data as $row)
                {
                    $image=$row['images'];
                    $title=$row['title'];
                    ?>
                         <div class="col-md-4 my-3">
                    <div class="movie-card shadow">
                        <?php
                        if($image)
                        {
                            ?>
                                <img src="./upload/<?php echo $image;?>" alt="">
                            <?php
                        }else{
                            ?>
                                    <img src="./movies/spiderman.jpg" alt="">
                            <?php
                        }
                        ?>
                    
                        <div class="details">
                            <p class="fw-bold text-center"><?php echo strtoupper($title);?><br><small class="text-muted">Uploaded on <?php echo date("M-D-Y",strtotime($row['added_on']))?> </small><br></p>
                            <a href="./single.php?id=<?php echo $row['id'];?>" class="btn btn-outline-success btn-sm"><i class="fa fa-eye mx-2">View </i></a>

                        </div>
                    </div>
                </div>
                    <?php
                }
                
                ?>