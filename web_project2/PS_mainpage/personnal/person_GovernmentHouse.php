<?php
    session_start();
    ob_start();
   
?>
<?php include 'main_personnal.php'; ?>

<html>
    <body>
        <section class="content">
        <div class="container-fluid">
            <!-- No Header Card -->
           
            <div class="row">
                
                
                           <?php 
                            $cn = new management;
                            $cn->con_db();
                            $sql="SELECT * FROM `ps_class` ORDER BY `ps_class`.`class_id` ASC ";
                            $query = $cn->Connect->query($sql);
                             $i = 1;
                             echo '  
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%;  height:100%;" >
                             <div class="card" >
                                 <div class="body bg-light-blue" >
                                     <h4 style="text-center">' ."ภายในองค์กร" .'<h4>             
                                 </div>
                             </div>
                         </div>
                         ';

                            while ($rs = mysqli_fetch_assoc($query)) {
                                   
                              

                                if ($i == 1) {
                                    $color = "red";
                                } else if ($i == 2) {
                                    $color = "cyan";
                                } else if ($i == 3) {
                                    $color = "green";
                                } else if ($i == 4) {
                                    $color = "orange";
                                }
                                else if ($i == 5) {
                                    $color = "grey";
                                }
                                else if ($i == 6) {
                                    $color = "pink";
                                }
                                else if ($i == 7 ){
                                    $color = "light-blue";        
                                }
                                else if ($i == 8 ){
                                    $color = "light-green";        
                                }
                                else if ($i == 9 ){
                                    $color = "amber";        
                                }
                                
                                       
                                        $cn = new management;
                                        $cn->con_db();
                                        $sql2 = "SELECT * FROM `ps_profile` WHERE class_id = ".$rs['class_id']."";
                                        $query2 = $cn->Connect->query($sql2);
                                        $num = mysqli_num_rows($query2);
                                        if($num == 0 ){
                                            $num = '...';
                                        }

                                echo '
                                        
                                       
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"  style="width:50%;  height:50%;" >
                                                    <a style="text-decoration:none; color:white; "  href="testor.php? id='.$rs['class_id'].'">
                                                        <div class="card" >
                                                        
                                                                    <div class="body bg-'.$color.'"  > 
                                                                        <div class="row clearfix m-t-15">
                                                                        
                                                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"  >
                                                                                
                                                                                        <div style="word-wrap: break-word;">
                                                                                        <h4 >'.$rs['class_name'].'<h4>
                                                                                    </div>
                                                                                    
                                                                            </div> 
                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" >
                                                                                    <h4 >'.$num.'<h4>
                                                                            </div>
                                                                    
                                                                        
                                                                    </div> 
                                                                        </div> 
                                                                    </div>  
                                                    </a>         
                                                </div>
                                           
                                           
                                       

                                       
                                       
                                    ';
                                   
                                $i++;
                                if ($i > 9) {
                                    $i = 1;
                                }          
                            }
                       
                           ?>
            </div>
            <!-- #END# No Header Card -->    
                        </div>
        </div>
    </section>
    
</body>
</html>

