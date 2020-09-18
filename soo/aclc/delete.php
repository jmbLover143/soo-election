 <?php 
    include ('dbconfig.php'); 
          $rito = 0;
     $palabay = 0;
     $bejer = 0;
     $juanito = 0;
    $osita = 0;
    $colminas = 0;
    $imperial = 0;
    $carcamo = 0;
    $pena = 0;
    
    $salansan = 0;
    $niego = 0;
    $gulle = 0;
    $parilla = 0;
    $yudai = 0;
    $rayos = 0;
    $punsalan = 0;
    $tayco = 0;
    $cruz = 0;
      /* ----------------------president--------------------   */      
     $query = "SELECT * FROM president where president = 'JOHN HENRY SALANSAN'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
           $salansan++;
            
        }
       
        }
     $query = "SELECT * FROM president where president = 'PAULA ISRAEL RITO'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
           $rito++;
            
        }
       
        }
/* -------------------vp-----------------------   */
        $query2 = "SELECT * FROM vice where vice = 'EUNICE NIEGO'";          
        $result = mysqli_query($conn, $query2);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
           $niego++;
            
        }
       
        }
     $query3 = "SELECT * FROM vice where vice = 'RONIE PALABAY'";          
        $result = mysqli_query($conn, $query3);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
           $palabay++;
            
        }
       
        }
        /* -------------------sec-----------------------   */
        $query = "SELECT * FROM secretary where secretary = 'ASHLEY GULLE'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $gulle++;
            
        }
       
        }
     $query = "SELECT * FROM secretary where secretary = 'JOCELYN DOGUILES LAMPAYAN'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $bejer++;
            
        }
       
        }
     /* -------------------tre-----------------------   */
        $query = "SELECT * FROM treasurer where vote = 'DORITHY JOYCE PARILLA'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $parilla++;
            
        }
       
        }
     $query = "SELECT * FROM treasurer where vote = 'JIMWELL JUANITO'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $juanito++;
            
        }
       
        }
        /* -------------------AUDITOR-----------------------   */
        $query = "SELECT * FROM auditor where vote = 'MITZH NATHALIE YUDAI'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $yudai++;
            
        }
       
        }
     $query = "SELECT * FROM auditor where vote = 'ROLAN OSITA'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $osita++;
            
        }
       
        }
         /* -------------------cba-----------------------   */
        $query = "SELECT * FROM cba where vote = 'HANNA CARCAMO'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $carcamo++;
            
        }
       
        }
     $query = "SELECT * FROM cba where vote = 'RUSSEL PEÑA'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $pena++;
            
        }
       
        }
         $query = "SELECT * FROM cba where vote = 'MARICEL TAYCO'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $tayco++;
            
        }
       
        }
     $query = "SELECT * FROM cba where vote = 'JONE NICOLE DELA CRUZ'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $cruz++;
            
        }
       
        }
        
         /* -------------------ccs-----------------------   */
        $query = "SELECT * FROM ccs where ccs = 'EMMAN PUNSALAN'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $punsalan++;
            
        }
       
        }
     $query = "SELECT * FROM ccs where ccs = 'JEN COLMINAS'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $colminas++;
            
        }
       
        }
         $query = "SELECT * FROM ccs where ccs = 'RYAN RAYOS'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $rayos++;
            
        }
       
        }
     $query = "SELECT * FROM ccs where ccs = 'LUIS IMPERIAL'";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $imperial++;
            
        }
       
        }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags always come first -->    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SOO ELECTION VOTING SYSTEM</title>
    
    <link rel="shortcut icon" href="lib/img/aclc_logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="lib/css/material.indigo-blue.min.css">
    <script defer src="lib/js/material.min.js"></script>
    <link rel="stylesheet" href="lib/semantic/semantic.min.css">
    <!-- Bootstrap core CSS -->
    <link href="lib/css/compiled.min.css" rel="stylesheet">
    <script src="lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="lib/sweetalert2/sweetalert2.min.css">
    <script src="lib/js/jquery-3.2.1.js"></script>
    <script src="path/to/jquery.js"></script>
<script src="path/to/popper.js"></script>
<script src="path/to/bootstrap.js"></script>
<script src="path/to/bootstrap-confirmation.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
<script>
$(document).ready(function() {
function disableBack() { window.history.forward() }

window.onload = disableBack();
window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
});
</script>

<script>
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    </script>
<script>
        function CancelEvent() {
            var e = window.event;
            //e.cancelBubble is supported by IE
            e.cancelBubble = true;
            e.returnValue = false;
            //e.stopPropagation works only in Firefox.
            if (e.stopPropagation) {
                e.stopPropagation();
                e.preventDefault();
            }
        }

        //Disable the click event of form 
        $(document).keypress(function (e) {
            //Check which key is pressed on the document or window
            if (e.which == 13) {
                // if it is 13 that means enter key pressed, then call the function to cancel the event
                CancelEvent();
            }
        });
    </script>

    <style>
        .hidden_this{
            visibility: hidden;
        }
        select:required:invalid {
  text-align:  center;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}
        
    </style>
    <script>
        function show_this(){
            $('.hidden_this').css('visibility', 'visible');
        }
         
        
        
              function validate() {
                  if(document.getElementById(vote).value){
                      
                  }
}
    </script>
</head>
<body class=" ">
    
    <!--Double navigation-->
    <?php

    
    
    
    
    
    
    
    
    
    
    
    ?>
    <header class="hidden_this">
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav" style="transform: translateX(-100%); background: none; background-color: #01579B;">
            <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
                <!-- NAVIGATION -->
                <h2 style="margin: 15% 20px;"></h2>
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a href="home_judge.php" class="collapsible-header waves-effect arrow-r">Home</a></li>
                        <li><a href="logout.php" class="collapsible-header waves-effect arrow-r"><b>Logout</b></a></li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav" style="background: #0277BD;">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><img src="lib/images/ACLC LOGO2.png" width="60px" style="padding: 0; margin: 0;height: 30px;"></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto" style="float: left; padding: 0; margin: 0;">
                <p style="font-size: 15px;"><b>ACLC COLLEGE OF MARIKINA</b></p>
                
            </div>
            <div class=" " style="float: right; padding: 0; margin-right: 50px;;">
                <p style="font-size: 15px;"><b>SOO ELECTION 2019</b></p>
                
            </div>
            <p></p>
        </nav>
        <!-- /.Navbar -->
    </header>
    <center>
     <br/>                           
   <div style="box-shadow: 5px 1px 10px crimson; margin: 0 auto;height:400px;width:500px;border:1px solid GRAY;background-color: white;border-radius: 10px;">
       <br/><center><img src="lib/img/delete.png" style="height:180px;"/></center>
        <center><h2 style=" ">Warning</h2></center>
        <center><h3 style=" ">Do you want to delete all votes ?</h3></center>
        <center>
            <table>
                <tr> 
                    <td><button type="button" name="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
  delete</button><a href="home_admin.php" class=" "><button class="btn btn-primary" style="width:150px;"><b style="color: white">Don't Delete</b></button></a></a></td>
                </tr>
            </table>
            
            
            
            
        </center>
                        </div>
   
     <form action="delete-records.php">
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SOO ELECTION 2019</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete all votes  ?</h5>
      </div>
      <div class="modal-footer">
       <input class="btn btn-primary" type="submit" name="" style="margin-top: 50px;background-color:#33BEFF; padding: 15px 35px; font-size: 130%;">
           <a href="home_admin.php"><input class="btn btn-danger" data-dismiss="modal"   value="Cancel" style="margin-top: 50px; padding: 15px 35px; font-size: 130%;"></a>

       
</center>     
                       
                                </div>           
     </form>
<!-- Modal -->

    </main>
    </body>
    <!--Main Layout-->
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="lib/js/jquery-3.2.1.js"></script>
    <script src="lib/semantic/semantic.min.js"></script>
    <script type="text/javascript" src="lib/js/compiled.min.js"></script>
    <script src="lib/sweetalert2/sweetalert2.all.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script><div class="drag-target" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
<div class="hiddendiv common"></div></body></html>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
<script>
    var completed = $('#complete_checker').val();
    if (completed == 1)
        finish_na();
    else
        show_this();
</script>

<script>
    $('#score').keyup(function(){
        var score = $('#score').val();
        if(score == '')
            $('#score').val('');
    });
</script>
    