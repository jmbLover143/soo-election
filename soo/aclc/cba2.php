 <?php

 include ('dbconfig.php');
  $vote = $_POST['cba2'];
  $vote2 = $_POST['cba1'];
    echo "$vote";
    
  if($vote === $vote2){
        header("Location: pro-cba2-error.php?vote=$vote");
    }
    /* ----------------------president insert vote--------------------   */
    else if($vote2 == null && $vote2 == ""){
        header("Location: pro-cba2.php?vote=$vote");
    }else{
        
        $query = "INSERT INTO cba(vote) VALUES ('$vote2')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
             echo "Did not insert vote.!!";
        }else{
            header("Location:success.php");
        }
    }
    
?>