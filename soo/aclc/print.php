<?php 
    include ('dbconfig.php'); 
       header("Content-type: application/msword");
        header("Content-Disposition: attachment; filename=SOO Result" . $c . ".doc");
        header("Pragma: no-cache");
        header("Expires: 0"); 
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
    $counts = 0;
     $query = "SELECT * FROM president";          
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
           $counts++;
            
        }
       
        }
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
     $query = "SELECT * FROM cba where vote = 'JUNE NICOLE DELA CRUZ'";          
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
    <meta http-equiv="refresh" content="5"> 
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

    <header class="hidden_this">
        <!-- Sidebar navigation -->
         
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav" style="background: #0277BD;">
            <!-- SideNav slide-out button -->
             
            <center> 
            <div class="breadcrumb-dn mr-auto" style="float: left; padding: 0; margin: 0;">
                <p style="font-size: 35px;font-family: tahoma"><b>ACLC COLLEGE OF MARIKINA</b></p>
                
            </div>
            <div class=" " style="float: right; padding: 0; margin-right: 50px;;">
                
                    <p style="font-size: 15px;font-family: tahoma"><b>SOO ELECTION 2019 Results</b></p>
                <p style="font-size: 15px;font-family: tahoma"><b>Number of voters: <?php echo "$counts" ?></b></p>
                </center>
            </div>
            <p></p>
        </nav>
        <!-- /.Navbar -->
    </header>
    <center>
     <br/>                           
     <form action="print.php" method="POST">
                         
    
    <table class="table-striped " style="font-family: tahoma;text-align: left;padding:2px;width: 1000px;height:500px" >
  <thead class="head-dark">
    <tr class="table-primary" style="height: 10px;">
        <th scope="col"><b>LIKE-Leaders in knowledge and efficiency</b> 
        <th scope="col"><b>U-TURN Unstoppable Team whose Utterly Ready for New Beginning</b></th>

    </tr>
      <tr></tr>
  </thead>
        
  <tbody>
    <tr class=" " style=" ">
        <th   style="height:40px;text-align: left;font-family: tahoma"><b>President: PAULA ISRAEL RITO:  <?php echo "$rito" ?> votes</b><div class="progress" style="width: 300px;">
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $rito ?>px" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div>
</div></th>
      <td style="font-family: tahoma;">President: JOHN HENRY SALANSAN: <?php echo "$salansan" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $salansan ?>px" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></td>
      
    </tr>
    <tr class="table-light">
        <th scope=" " style="text-align: left;">Vice President: RONNIE JR. PALABAY <?php echo "$palabay" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo "$palabay" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></th>
      <td style="font-family: tahoma;">Vice President: EUNICE NIEGO: <?php echo "$niego" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo "$niego" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div> </td>      
    </tr>
    <tr class="table-light">
      <th scope=" " style="text-align: left;font-family: tahoma">Secretary: JOCELYN DOGUILES LAMPAYAN: <?php echo "$bejer" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-success" role="progressbar" style="width:<?php echo "$niego" ?>px" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></th>
      <td style="font-family: tahoma;">Secretary: ASHLEY GULLE: <?php echo "$gulle" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo "$gulle" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></td>
     
    </tr>
        <tr class="table-light">
      <th scope=" " style="text-align: left;font-family: tahoma">Treasurer : JIMWEL JUANITO: <?php echo "$juanito" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo "$juanito" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></th>
      <td style="font-family: tahoma;">Treasurer: DORITHY JOYCE PARRILLA: <?php echo "$parilla" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo "$parilla" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></td>
   
    </tr>
    <tr class="table-light">
      <th scope=" " style="text-align: left;font-family: tahoma">Auditor: ROLAN ELEAZAR OSITA: <?php echo "$osita" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo "$osita" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></th>
      <td style="font-family: tahoma;">Auditor: MITZH YUDAI: <?php echo "$yudai" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo "$yudai" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></td>
     
    </tr>
    <tr class="table-light">
     
    </tr>
         <tr class="table-light">
      <th scope=" " style="text-align: left;font-family: tahoma">CCS1: JEN ROBERT COLMINAS: <?php echo "$colminas" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo "$colminas" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></th>
      <td style="font-family: tahoma;">CCS 1: RYAN RAYOS: <?php echo "$rayos" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo "$rayos" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></td>
   
    </tr>
    <tr class="table-light">
      <th scope=" " style="text-align: left;font-family: tahoma">CCS2: LUIS IMPERIAL: <?php echo "$imperial" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo "$imperial" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></th>
      <td style="font-family: tahoma;">CCS 2: EMMAN PUNSALAN: <?php echo "$punsalan" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo "$punsalan" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></td>
     
    </tr>
      <tr>
      
     
    </tr>
         <tr class="table-light">
      <th scope=" " style="text-align: left;font-family: tahoma">CBA1: HANNA CARCAMO: <?php echo "$carcamo" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo "$carcamo" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></th>
      <td style="font-family: tahoma;">CBA 2: MARICEL TAYCO: <?php echo "$tayco" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo "$tayco" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></td>
   
    </tr>
    <tr class="table-light">
      <th scope=" " style="text-align: left;font-family: tahoma">CBA 2:RUSSEL PEÑA: <?php echo "$pena" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo "$pena" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></th>
      <td style="font-family: tahoma;">CBA 2: JUNE NICOLE DELA CRUZ: <?php echo "$cruz" ?> votes<div class="progress" style="width: 300px;">
  <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo "$cruz" ?>px;" aria-valuenow=" " aria-valuemin="0" aria-valuemax=" "></div></td>
     
    </tr>
      <tr>
          <td></td>
      </tr>
  </tbody>
</table>
     
</center>     
  </form>                      
                                </div>
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
    