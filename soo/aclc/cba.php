 <?php

 include ('dbconfig.php');
  $vote = $_POST['cba'];
    echo "$vote";
    /* ----------------------president insert vote--------------------   */
    if($vote == null && $vote == ""){
        header("Location: pro-cba.php");
    }else{
        
        $query = "INSERT INTO cba(vote) VALUES ('$vote')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
             echo "Did not insert vote.!!";
        }else{
            header("Location: pro-cba2.php?vote=".$vote);
        }
    }
    
?>