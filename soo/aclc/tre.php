 <?php

 include ('dbconfig.php');
  $vote = $_POST['tre'];
    echo "$vote";
    /* ----------------------president insert vote--------------------   */
    if($vote == null && $vote == ""){
        header("Location: treasurer.php");
    }else{
        
        $query = "INSERT INTO treasurer(vote) VALUES ('$vote')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            echo "Did not insert vote.!!";
        }else{
            header("Location: auditor.php");
        }
    }
    
?>