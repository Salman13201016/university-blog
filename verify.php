<?php
    include 'database/connection.php';  
    if(isset($_GET['vkey'])){
        /* Get the verification key and match with database verification key */
        $vkey = $_GET['vkey'];
        $sql = "SELECT v_key,v_status FROM user WHERE v_status = 0 AND v_key='$vkey' LIMIT 1";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query)>0){
            $sql = "UPDATE user SET v_status = 1 WHERE v_key='$vkey' LIMIT 1";
            $query = mysqli_query($conn,$sql);
            if($query){
                echo '<div class="bs-example"> 
                        <div class="alert alert-warning alert-dismissible fade show">
                            <strong>Success</strong> Please Check Your Email To complete the registration
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                    </div>';
            }
        }
    }
?>