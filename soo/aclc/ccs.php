 <?php

 include ('dbconfig.php');
  $vote = $_POST['ccs1'];
    echo "$vote";
    /* ----------------------president insert vote--------------------   */
    if($vote == null && $vote == ""){
        header("Location: pro-ccs.php");
    }else{
        
        $query = "INSERT INTO ccs(ccs) VALUES ('$vote')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            echo "Did not insert vote.!!";
        }else{
            header("Location: pro-ccs2.php?vote=".$vote);
        }
    }
    
?>