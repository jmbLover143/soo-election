 <?php

 include ('dbconfig.php');
  $vote = $_POST['cba'];
  $vote2 = $_POST['cba2'];
  
  echo "$vote"; 
    echo "$vote2";
    if($vote === $vote2){
        header("Location: pro-cba2-error.php?vote=$vote2");
    }else if($vote == null && $vote == "" ){
         header("Location: pro-cba2-error.php?vote=$vote2");
    } else{
        
        $query = "INSERT INTO cba(vote) VALUES ('$vote')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            echo "Did not insert vote.!!";
        }else{
            header("Location: success.php");
            //header("Location: pro-cba.php");
        }
    }  
?>