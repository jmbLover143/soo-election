 <?php
 
  include ('dbconfig.php');
        $query = "DELETE FROM president";          
        $result = mysqli_query($conn, $query);
        
        $query = "DELETE FROM vice";          
        $result = mysqli_query($conn, $query);
        
        $query = "DELETE FROM secretary";          
        $result = mysqli_query($conn, $query);
        
        $query = "DELETE FROM treasurer";          
        $result = mysqli_query($conn, $query);
        
        $query = "DELETE FROM auditor";          
        $result = mysqli_query($conn, $query);
        
        $query = "DELETE FROM cba";          
        $result = mysqli_query($conn, $query);
        
        $query = "DELETE FROM ccs";          
        $result = mysqli_query($conn, $query);
        if($result){
            header("Location: home_admin.php");
        }
        
 
 ?>
