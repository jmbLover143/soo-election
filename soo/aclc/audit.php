 <?php

 include ('dbconfig.php');
  $vote = $_POST['audit'];
    echo "$vote";
    /* ----------------------president insert vote--------------------   */
    if($vote == null && $vote == ""){
        header("Location: auditor.php");
    }else{
        
        $query = "INSERT INTO auditor(vote) VALUES ('$vote')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            echo "Did not insert vote.!!";
        }else{
            header("Location: pro-ccs.php");
        }
    }
    
?>