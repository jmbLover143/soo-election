 <?php

 include ('dbconfig.php');
  $vote = $_POST['ccs1'];
  $vote2 = $_POST['ccs2'];
  
  echo "$vote"; 
    echo "$vote2";
    if($vote === $vote2){
        header("Location: pro-ccs2-error.php?vote=$vote");
    }else if($vote == null && $vote == "" ){
         header("Location: pro-ccs2.php?vote=$vote2");
    } else{
        
        $query = "INSERT INTO ccs(ccs) VALUES ('$vote')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            echo "Did not insert vote.!!";
        }else{
            header("Location: pro-cba.php");
            //header("Location: pro-cba.php");
        }
    }  
?>