<?php

 include ('dbconfig.php');
  $vote = $_POST['vpresident'];
    echo "$vote";
    /* ----------------------president insert vote--------------------   */
    if($vote == null && $vote == ""){
        header("Location: vice-president.php");
    }else{
        
        $query = "INSERT INTO vice(vice) VALUES ('$vote')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            echo "Did not insert vote.!!";
        }else{
            header("Location: secretary.php");
        }
    }
    
?>
