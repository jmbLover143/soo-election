<?php
    include ('dbconfig.php');
    
    $vote = $_POST['vote'];
    echo "$vote";
    /* ----------------------president insert vote--------------------   */
    if($vote == null && $vote == ""){
        header("Location: president.php");
    }else{
        
        $query = "INSERT INTO president(president) VALUES ('$vote')";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            echo "Did not insert vote.!!";
        }else{
            header("Location: vice-president.php");
        }
    }
    /* ----------------------end--------------------   */
    /* ----------------------vp insert vote--------------------   */
 
    $query = "SELECT * FROM president where president = 'Jude'";
        
        $ctr = 0;
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
           $ctr++;
            
        }
       echo $ctr; 
        }
     
?>