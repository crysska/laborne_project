<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/contact-form.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>

<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
 });
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>

<body class="" id="top">
<!--==============================
              header
=================================-->
<header>
  <?php include("helper/header.php");?>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
  <div class="container_12">
      <div class="grid_12">
        <div class="navigation">
          <nav>
            <ul class="sf-menu">
             <li><a href="index.php">Accueil</a></li>
             <li><a href="about.php">L'Eglise</a>
               <?php include("helper/sub-menu-1.php");?>
             </li>
             <li><a href="mission.php">Mission</a></li>
             <li><a href="membership.php">Membres</a></li>
             <li><a href="mediatheque.php">Mediatheque</a>
               <?php include("helper/sub-menu-2.php");?>
             </li>
             <li class="current"><a href="contacts.php">Nous contacter</a></li>
           </ul>
          </nav>
          <div class="clear"></div>
        </div>
       <div class="clear"></div>
   </div>
   <div class="clear"></div>
  </div>
  </section>
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - September22, 2014!</div>
  <div class="container_12">
    <div class="grid_12">
      <h2 class="ta__center">
        Centre Evangélique Francophone La Borne/Ottawa
      </h2>
      <div class="map">
        <figure class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2801.6630679043565!2d-75.7421649!3d45.3959671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04196cea3691%3A0x228839b38ccd05de!2s415+Piccadilly+Ave%2C+Ottawa%2C+ON+K1Y!5e0!3m2!1sen!2sca!4v1483013730303" style="border:0"></iframe>
        </figure>
        <p>415 Piccadilly Avenue, Ottawa, K1Y 0H3.<br>
        Telephone: +1 613 462 1277 <br>
        E-mail: <a href="#">egliselaborneottawa@yahoo.com</a><br><br>
        </p>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <!-- <article class="block-1 contacts ">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="white ta__center">Contact Form</h3>
      </div>
      <div class="clear"></div>
        <form id="contact-form">
          <div class="contact-form-loader"></div>
          <div class="grid_6">
            <label class="name">
              <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid name.</span>
            </label>

            <label class="email">
              <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid email.</span>
            </label>
            <label class="phone">
              <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*This is not a valid phone.</span>
            </label>
           </div>
           <div class="grid_6">
            <label class="message">
              <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              <span class="empty-message">*This field is required.</span>
              <span class="error-message">*The message is too short.</span>
            </label>
            <div>
              <div class="ta__right">
          <a href="#" class="link-1 white" data-type="reset">Clear</a>
          <a href="#" class="link-1 white" data-type="submit">Send</a></div>
            </div>
          </div>

          <div class="modal fade response-message">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                  You message has been sent! We will be in touch soon.
                </div>
              </div>
            </div>
          </div>
          <div class="clear"></div>
      </form>
      <div class="clear"></div>
    </div>
  </article> -->
</section>
<!--==============================
              footer
=================================-->
<?php include("helper/footer.php");?>
<a href="#" id="toTop" class="fa fa-angle-up"></a>
</body>
</html>
