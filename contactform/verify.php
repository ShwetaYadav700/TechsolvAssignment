<?php

require("connection.php");

if(isset($_GET['email']) && isset($_GET['v_code'])){
    $query="SELECT * FROM `phpform` WHERE `email`=$_GET[email]' AND `verificationcode`='$_GET[v_code]"
    $result=mysqli_query($conn,$query);
    if($result){

        if(mysqli_num_rows($result)==1){
           $result_fetch=mysqli_fetch_assoc($result);
           if($result_fetch['is_verified']==0) {
             $update="UPDATE `phpform ` SET `is_verified`='1' WHERE `email`=   '$result_fetch[email]'";
             if(mysqli_query($conn,$update)){
                ?>
                <script>
                    alert("Email  verification succesfull ");
                </script>
                <?php
             }
             else{
                ?>
                <script>
                    alert("query not run ");
                </script>
                <?php
             }
           }
           else{
            ?>
        <script>
            alert("Already verified ");
        </script>
        <?php
            }
        }
    }else{
        ?>
        <script>
            alert("data not inserted ");
        </script>
        <?php
    }
}
?>