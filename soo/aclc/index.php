<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOO ELECTION VOTING SYSTEM</title>
    <link rel="shortcut icon" href="lib/images/ACLC LOGO orig_1.png" />
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="lib/css/compiled.min.css">
    <link rel="stylesheet" href="lib/sweetalert2/sweetalert2.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
body{
    margin: 0;
    padding: 0;
}
body {
  height: 100%;
  overflow: hidden;
  width: 100% !important;
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
  background-color: white;
}



.backRight {
  position: absolute;
  right: 0;
  width: 50%;
  height: 100%;
  background: #3498db url("lib/img/ms_marikina.jpg");
  background-size: 100% 110%;
  background-position: 50% 50%;
   background-color: white;
}

.backLeft {
  position: absolute;
  left: 0;
  width: 100%;
  height: 100% ;
  background: #e74c3c url("");
  background-size: 100% 110%;
  background-position: 50% 50%;
   background-color: #c7dbf9;
   
}

#back {
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: -999;
}

#slideBox {
  width: 50%;
  max-height: 100%;
  height: 100%;
  overflow: hidden;
  margin-left: 50%;
  position: absolute;
  box-shadow: 0 14px 28px rgba(0,0,0,0.), 0 10px 10px rgba(0,0,0,0.);
}
.topLayer {
  width: 200%;
  height: 100%;
  position: relative;
  left: 0;
  left: -100%;
}

.left {
  width: 50%;
  height: 100%;
  background: #2C3034;
  left: 0;
  position: absolute;
}

.right {
  width: 50%;
  height: 100%;
  background: #f3f4cb;
  right: 0;
  position: absolute;
}

.content {
  width: 75%;
  margin: 0 auto;
  top: 20%;
  position: absolute;
  left: 30%;
  margin-left: -125px;
}

.content h2 {
  color: #03A9F4;
  font-weight: 300;
  font-size: 35px;
}

.buttonn {
  background: #03A9F4;
  padding: 10px 16px;
  width: auto;
  font-weight: 600;
  text-transform:  uppercase;
  font-size: 14px;
  color: #fff;
  line-height: 16px;
  letter-spacing: 0.5px;
  border-radius: 2px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1), 0 3px 6px rgba(0,0,0,0.1);
  border: 0;
  outline: 0;
  margin: 15px 15px 15px 0;
  transition: all 0.25s;
}
.buttonn:hover {
  background: #0288D1;
  box-shadow: 0 4px 7px rgba(0,0,0,0.1), 0 3px 6px rgba(0,0,0,0.1);
}
.off {
  background: none;
  color: #03A9F4;
  box-shadow: none;
}

.right .off:hover {
  background: #eee;
  color: #03A9F4;
  box-shadow: none;
}
.left .off:hover {
  box-shadow: none;
  color: #03A9F4;
  background: #363A3D;
}
input {
  background: transparent;
  border: 0;
  outline: 0;
  border-bottom: 1px solid #45494C;
  font-size: 14px;
  color: #959595;
  padding: 8px 0;
  margin-top: 20px;
}
.judgeID, .adminID {
    text-align: center;
}
.judgeID::placeholder, .adminID::placeholder{
    text-align: center;
}
    </style>
    <script>
      function error(){
        swal(
          'Invalid',
          'Sorry, username or user id not found!',
          'error'
        )
      }
    </script>
    <script>
      function numbersonly(){
        $.bootstrapGrowl("Only numbers are accepted in this field..", {
        ele: 'body', // which element to append to
        type: 'danger', // (null, 'info', 'danger', 'success')
        offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
        align: 'right', // ('left', 'right', or 'center')
        width: 350, // (integer, or 'auto')
        delay: 3000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
        allow_dismiss: true, // If true then will display a cross to close the popup.
        stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
      }

      function alphanumericsonly(){
        $.bootstrapGrowl("Only alphanumerics are accepted in this field..", {
        ele: 'body', // which element to append to
        type: 'info', // (null, 'info', 'danger', 'success')
        offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
        align: 'right', // ('left', 'right', or 'center')
        width: 320, // (integer, or 'auto')
        delay: 3500, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
        allow_dismiss: true, // If true then will display a cross to close the popup.
        stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
      }
    </script>
</head>
<body>



<div id="back">
  <div class="backRight"></div>
  <div class="backLeft" >
      <div style="height: 500px;width: 668px;float: left;padding-left: 10px">
          
          
        <br/>
        <br/>
        <br/>
       
      <img src="lib/images/ACLC LOGO orig_1.png" style="float: left;height:200px;width:620px;" />
      <br/>
      <br/>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
          <img class="d-block w-100" src="lib/img/Capture_1.PNG" style="height:350px;width:500px;" alt="Third slide">
    </div>
    
 
    <div class="carousel-item">
      <img class="d-block w-100" src="lib/img/slide3.jpg" style="height:350px" alt="Third slide">
    </div>
      <div class="carousel-item">
          <img class="d-block w-100" src="lib/img/slide4.jpg" style="height:350px" alt="Third slide">
    </div>
      <div class="carousel-item">
          <img class="d-block w-100" src="lib/img/slide5.jpg" style="height:350px" alt="Third slide">
          
    </div>
      <div class="carousel-item">
          <img class="d-block w-100" src="lib/img/slide6.jpg" style="height:350px" alt="Third slide">
          
    </div>
       <div class="carousel-item">
          <img class="d-block w-100" src="lib/img/slide7.png" style="height:350px" alt="Third slide">
          
    </div>
    
   
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only" style="color: black">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      

  </div>
</div>
   </div>

<div id="slideBox">
  <div class="topLayer">
    <div class="left">
      <div class="content">
        <h2 class="text-center" style="margin: 0px; font-size: 400%; font-weight: 100; text-align: left;">Admin</h2>
          <div class="form-group">
            <input type="password" class="adminID" name="username_admin" id="admin" maxlength="8" placeholder="Username"/>
          </div>
          <div class="form-group"></div>
          <div class="form-group"></div>
          <div class="form-group"></div>

        <center>
            <button id="goLeft" class="buttonn off">Voter?</button>
            <input type="submit" class="buttonn" name="login_admin" id="login_admin" value="Login">
        </center>
        <br><br>
        <img src="lib/images/ACLC LOGO2.png" alt="" width="90%;" style="height: 20vh; float: left;">
        
        
        
      </div>
    </div>
    <div class="right">
      <div class="content">
          <h2 class="text-center" style="margin-top: -80px; font-size: 400%; font-weight: 100; text-align: left;">Student Organization Officer</h2><br/>
        <h2 class="text-center" style="color:red;margin: 0px; font-size: 200%; font-weight: 100; text-align: left;">Election 2019</h2>
          <div class="form-group">
            <input style="font-size: 20px;" type="text" class="judgeID" name="userid_judge" id="judge" maxlength="8" placeholder="Enter your user ID" autofocus/>
          </div>
          <center>        
            <button id="goRight" class="buttonn off">Admin</button>
            <input type="submit" class="buttonn" name="login_judge" id="login_judge" value="Login">
          </center>
          <br><br>
          
      </div>
      
    </div>
  </div>
<script src="lib/js/jquery.min.js"></script>
<script src="lib/sweetalert2/sweetalert2.min.js"></script>
<script src="lib/js/jquery.bootstrap-growl.js"></script>
<script>
  $(document).ready(function () {
    //called when key is pressed in textbox
    $("#judge").keypress(function (e) {
      //if the letter is not digit then display error and don't type anything
      if (e.which != 8 && e.which != 0 && e.which != 13 && (e.which < 48 || e.which > 57)) {
          // numbersonly();
          // $("#errmsg").html("Digits Only").show().fadeOut("slow");
                return false;
      }

      if(e.which == 13)
        $('#login_judge').click();
    });

    $('#login_judge').click(function(){
      $.ajax({  
        url:"login_validation.php",  
        method:"POST",  
        data: {
          typee: 'judge',
          passwordd: $('#judge').val()
        },
        success:function(data){
          if(data === 'judge')
          {
            swal(
              'Hi Voter!',
               'Welcome to SOO Election ',
              'success'
            ).then((result) => {
              location = 'president.php';
            })
            setTimeout(function(){ location = 'president.php'; }, 2000);
          }
          else if(data === 'admin')
          {
            swal(
               
            ).then((result) => {
              location = 'president.php';
            })
            setTimeout(function(){ location = 'president.php'; }, 3000);
          }
          else
          {
            error();
            $('#admin').val('');
            $('#judge').val('');
          }
        }  
      });
    });

    //called when key is pressed in textbox
    $("#admin").keypress(function (e) {
      //if the letter is not digit then display error and don't type anything
      if (e.which != 8 && e.which != 0 && e.which != 13 && !(e.which >= 48 && e.which <= 57) && !(e.which >= 65 && e.which <= 90) && !(e.which >= 97 && e.which <= 122)) {
          //display error message
          // alert('heh');
          // alphanumericsonly();
          // // $("#errmsg").html("Digits Only").show().fadeOut("slow");
                return false;
      }
      if(e.which == 13)
        $('#login_admin').click();
    });

    $('#login_admin').click(function(){
      $.ajax({  
        url:"login_validation.php",  
        method:"POST",  
        data: {
          typee: 'admin',
          passwordd: $('#admin').val()
        },
        success:function(data){
          if(data === 'judge')
          {
            swal(
              'Hi Voter!',
              'Welcome to SOO ELECTION 2019',
              'success'
            ).then((result) => {
              location = 'front.php';
            })
            setTimeout(function(){ location = 'home_judge.php'; }, 3000);
          }
          else if(data === 'admin')
          {
            swal(
              'Hi Admin!',
                'Welcome to SOO Election 2019!',
               
            ).then((result) => {
              location = 'home_admin.php';
            })
            setTimeout(function(){ location = 'home_admin.php'; }, 3000);
          }
          else
          {
            error();
            $('#admin').val('');
            $('#judge').val('');
          }
        }  
      });
    });
  });
</script>

<script>
$(document).ready(function(){
  $('#goRight').on('click', function(){
    $('#slideBox').animate({
      'marginLeft' : '0'
    });
    $('.topLayer').animate({
      'marginLeft' : '100%'
    });
    $('.adminID').focus();
  });
  $('#goLeft').on('click', function(){
    $('#slideBox').animate({
      'marginLeft' : '50%'
    });
    $('.topLayer').animate({
      'marginLeft': '0'
    });
    $('.judgeID').focus();
  });
});
</script>
<footer>
    
</footer>
</body>
</html>