 <?php 
    include ('dbconfig.php'); 
    $user_id = $_SESSION['user_id'];
    $contestant_id = 0;
    $contestant_name = "";
    $contestant_location = "";
    $contestant_description = "";
    $contestant_picture = "";
    $criteria_name = "";
    $criteria_percentage = "";
    $completed = 1;
    
    $query = "select level_id from levels where level_active = 1 order by level_id desc limit 1";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_row($result);
    $level = $row[0];    

    if($level == 1)
    {
        $query = "select * from criteria where level_id = '$level' and visibility = '1' and active = '1'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result))
        {
            $criteria_id = $row["criteria_id"];
            $criteria_name = $row["criteria_name"];
            $criteria_percentage = $row["criteria_percentage"];

            $query1 = "select * from contestants where contestant_id not in (select contestant_id from score where user_id = '$user_id' and criteria_id = '$criteria_id') limit 1";
            $result1 = mysqli_query($conn, $query1);
            
            if(mysqli_num_rows($result1))
            {
                $row1 = mysqli_fetch_array($result1);
                $contestant_id = $row1["contestant_id"];
                $contestant_name = $row1["contestant_name"];
                $contestant_location = $row1["contestant_location"];
                $contestant_description = $row1["contestant_details"];
                $contestant_picture = $row1["contestant_picture"];
                $_SESSION['criteria_id'] = $criteria_id;
                $_SESSION['contestant_id'] = $contestant_id;
                $completed = 0;
                $done = '';
                break;
            }
        }
    }
    // NEXT LEVEL
    else
    {
        $query = "select * from criteria where level_id = '$level' and visibility = '1' and active = '1'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result))
        {
            $criteria_id = $row["criteria_id"];
            $criteria_name = $row["criteria_name"];
            $criteria_percentage = $row["criteria_percentage"];

            $query1 = "SELECT contestants.contestant_id, contestants.contestant_name, contestants.contestant_location, contestants.contestant_details, contestants.contestant_picture FROM winners JOIN contestants ON contestants.contestant_id = winners.contestant_id WHERE winners.level_id = ".($level - 1)." AND contestants.contestant_id NOT IN (SELECT contestant_id FROM score WHERE user_id = '$user_id' AND criteria_id = '$criteria_id') LIMIT 1";
            $result1 = mysqli_query($conn, $query1);
            
            if(mysqli_num_rows($result1))
            {
                $row1 = mysqli_fetch_array($result1);
                $contestant_id = $row1["contestant_id"];
                $contestant_name = $row1["contestant_name"];
                $contestant_location = $row1["contestant_location"];
                $contestant_description = $row1["contestant_details"];
                $contestant_picture = $row1["contestant_picture"];
                $_SESSION['criteria_id'] = $criteria_id;
                $_SESSION['contestant_id'] = $contestant_id;
                $completed = 0;
                $done = '';
                break;
            }
        }
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
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
        function finish_na(){
		    swal(
                'Congrats!',
                "You have successfully voted on this round. Please wait for further announcements.",
                'info'
            ).then((result) => {
                setTimeout(function() {
                    location="index.php";
                }, 100);
            })
        }
    </script>
</head>
<body class=" ">
    
    <!--Double navigation-->
    <header class="hidden_this">
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed mdb-sidenav" style="transform: translateX(-100%); background: none; background-color: #01579B;">
            <ul class="custom-scrollbar list-unstyled" style="max-height:100vh;">
                <!-- NAVIGATION -->
                <h2 style="margin: 15% 20px;"></h2>
                <!-- Side navigation links -->
                <li>
                    
                </li>
                <!--/. Side navigation links -->
            </ul>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav" style="background: #0277BD;">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><img src="lib/images/ACLC LOGO2.png" width="60px" width="35px" style="padding: 0; margin: 0;height: 30px;" width="35px" style="padding: 0; margin: 0;"></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto" style="float: left; padding: 0; margin: 0;">
                <p><b>ACLC COLLEGE OF MARIKINA</b></p>
                
            </div>
            <div class=" " style="float: right; padding: 0; margin-right: 50px;;">
                <p><b>SOO ELECTION 2019</b></p>
                
            </div>
            <p></p>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    <!--Main Layout-->
    <div style="margin: 0 auto">
        
    
    <main class="hidden_this" style="margin-top: 0; padding-top: 0; top: 0;">
        <div class="container-fluid mt-4" style="margin-top: 0; padding-top: 0; top: 0; width: 100%; margin-left: 0;">
            <!-- START -->
                <input type="text" id="complete_checker" value=" " hidden>
                
                <div class="" style="float: left; margin-left: 150px;">
                    <table style=";box-shadow:10px 10px 10px   #888888;margin-top: -70px;border: 1px solid black;">
                        <tr>
                            <td><button class="btn btn-info" style="width:300px"><b>EUNICE NIEGO</b></button></td>
                        </tr>
                        <tr>
                            <td><img style="height:400px;border:1px solid black;width:300px;margin-left: 5px;" src="lib/soo/niego.jpg"/></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-info" style="width:300px">PARTYLIST NAME: U-TURN</button></td>
                        </tr>
                    </table>
                     <table style="margin-left: 390px;border: 1px solid black;margin-top: -510px;box-shadow:10px 10px 10px   #888888;">
                        <tr>
                            <td><button class="btn btn-warning" style="width:300px"><B>RONIE PALABAY</B></button></td>
                        </tr>
                        <tr>
                            <td><img style="height:400px;border:1px solid black;width:300px;margin-left: 5px;" src="lib/like/palabay.jpg"/></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-warning" style="width:300px">PARTYLIST NAME: LIKE</button></td>
                        </tr>
                    </table>
                    </div>
                    
                    <!-- END OF COL-6 -->
                    <center style="margin-right: -80px;margin-top:100px;">
                        
                    
                     
                       <div style="width:300px;float: right;background-color:  white;margin-right: 120px; " class="col-6 col-md-6 col-lg-6">
                        <div class="grey lighten-3 z-depth-2" style="width: 300px;background-color:  white;; height: 300px;">
                            <div class="jumbotron">
                               
                                <h1> Vice President</h1>                   
                            </div>
                             <center>
                                 <button class="btn btn-primary">Vote wisely </button>
                                 <hr/>
                                </center>
                            <form action="vp.php" method="POST">
                         
                                        <select name="vpresident" style="background-color: white;font-size: 50px;text-align-last:center;">
                                            <option style="background-color: white;font-size: 50px;text-align: center" ><h3 style="text-align: center"> </h3></option>
                                            <option name="vpresident" style="background-color: white;font-size: 50px;text-align: center"><center>EUNICE NIEGO</center></option>
                                            <option name="vpresident" style="background-color: white;font-size: 50px;text-align: center">RONIE PALABAY </option>                                           
                                        </select>
                                    <center>


                                        <!-- Button trigger modal -->
<button type="button" name="submit_button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
  Submit vote</button>

<!-- Modal -->
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
        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to submit  ?</h5>
      </div>
      <div class="modal-footer">
       <input class="btn btn-primary" type="submit" name="submit_button" style="margin-top: 50px;background-color:#33BEFF; padding: 15px 35px; font-size: 130%;">
              <input class="btn btn-danger" data-dismiss="modal"   value="Change vote" style="margin-top: 50px; padding: 15px 35px; font-size: 130%;">

       
</div>
                                           
                                    

                                    <center>
                                    
                                   

       
                                    

</center>
                                    
                                     
                           </form>
                        </div>
                    </div>
                </div><!-- END OF COL-6 -->
                </div>
            <!-- END -->
        </div> 
                        </center>
                                </div>
    </main>
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
