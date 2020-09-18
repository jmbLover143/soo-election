 <?php

 include ('dbconfig.php');
  $vote = $_POST['sec'];
    echo "$vote";
    /* ----------------------president insert vote--------------------   */
    if($vote == null && $vote == ""){
        header("Location: secretary.php");
    }else{
        
        $query = "INSERT INTO secretary(secretary) VALUES ('$vote')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            echo "Did not insert vote.!!";
        }else{
            header("Location: treasurer.php");
        }
    }
    
?>