<?php 

include("parts/head.html");

 include('parts/nav.html'); ?>

 <style>
        .middle_arrow {
            opacity: 0;
            position: absolute;
            top: 50%;
            right: 2em;
        }
        
        .bottom_arrow {
            opacity: 0;
            position: absolute;
            top: 100%;
            right: 2em;
            z-index: -1;
        }
        
        .top_arrow {
            opacity: 0;
            position: absolute;
            top: 130%;
            right: 2em;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .cookie-alert {
	position: absolute;
	bottom: 0;
	right: 0;
}
 </style>
<?php
 if(isset($_COOKIE['accept_cookie'])){
   $showcookie = false;
}else{
    $showcookie = true;
 }


 ?>
 <?php if($showcookie){ ?>

 }
 <div class="cookie-alert card w-25 float-end p-5 text-light bg-dark">
 <p>En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous proposez des contenus et services adaptés à vos centres d'intérêts</p> <div class="p-5"><a href="accept_cookie.php" class="btn btn-light">J'accepte</a> &nbsp;&nbsp;<a href="google.com" class="btn btn-light">Je refuse</a></div>
 </div> 

  <?php } ?>



 <?php include('parts/footer.html'); ?>










