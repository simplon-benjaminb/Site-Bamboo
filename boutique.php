<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="Boutiques des Bamboo Suckers">
    <meta name="Keywords" content="Bamboo Suckers Musique Jazz Band Coursan Boutique">
    <meta name="Copyright" content="Bullich Benjamin">
    <meta name="Author" content="Bullich Benjamin">
    <meta name="Revisit-After" content="30 days">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <meta name="Distribution" content="global">
    <meta name="Geography" content="France">
    <meta name="Category" content="internet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="BAMBOO SUCKERS" />
    <meta property="og:url" content="http://BS.com/" />
    <meta property="og:site_name" content="BAMBOO SUCKERS" />
    <title>BAMBOO SUCKERS</title>
    <link rel="stylesheet" href="css/Bamboo.css" />
    <link rel="icon" type="image/jpg" href="images/bambooic3.png" /> <!-- logo RS -->
    <link rel='canonical' href='index.html' />
  </head>
  <body>
    <!-- BARRE DU HAUT -->
<div class="contain-to-grid sticky">
    <nav class="top-bar global" data-topbar role="navigation" data-options="sticky_on: large">
        <section class="top-bar-section">
          <!-- Logo -->
            <span class="logo">
                <a href="index.html"><img src="images/bambooic.png"></a><!-- logo RS -->
            </span>
            <!-- Menu -->
            <div class="menu">
              <ul class="left">
                <li  class="menut"><a href="even.php">Actu</a></li>
                <li  class="menut"><a href="musicos.php">Les suckers</a></li>
                <li  class="menut"><a href="media.php">Média</a></li>
                <li  class="menut"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <!-- Mini menu -->
            <div class="mini">
                  <button class="btn-nav">
                      <div class="bar arrow-top-r"></div>
                      <div class="bar arrow-middle-r"></div>
                      <div class="bar arrow-bottom-r"></div>
                  </button>
                  <nav class="nav-container hidden hideNav">
                    <span class="yoyo">
                      <ul class="nav-list">
                        <li  class="menut"><a href="even.php"class="boutons anim">Actu</a></li>
                        <li  class="menut"><a href="musicos.php"class="boutons anim">Les suckers</a></li>
                        <li  class="menut"><a href="media.php"class="boutons anim">Média</a></li>
                        <li  class="menut"><a href="contact.php"class="boutons anim">Contact</a></li>
                        <li  class="menut"><a href="boutique.php"class="boutons anim">boutique</a></li>
                      </ul>
                    </span>
                  </nav>
            </div>
     <!-- Boutons Boutique -->
            <span class="right">
              <ul>
                <li class="navbtn shopbtn"><a href="boutique.php" class="boutons anim">Boutique</a></li>
              </ul>
            </span>
        </section>
    </nav>
</div>
<!-- Parallax -->
<div class="row global head">
  <div class="columns large-12 small-12">
      <div id="scene" class="scene anim">
          <ul>
              <li class="layer plan4" data-depth="0.50"><img src="images/img4.png"></li>
              <li class="layer plan3" data-depth="0.70"><img src="images/img3bis.png"></li>
              <li class="layer plan2" data-depth="0.85"><img src="images/img2.png"></li>
              <li class="layer plan1" data-depth="1"><img src="images/img1bis.png"></li>
        </ul>
      </div>
  </div>
</div>
<!-- Barre réseau social -->
<div class="social">
          <ul>
              <li><a target="_blank" href="https://www.facebook.com/bandarambalet.sagan?fref=ts"><img src="images/face.png" /> Facebook</a></li>
              <li><a target="_blank"href="https://www.youtube.com/channel/UC1w6ELz8JIrqI-xEWRJ67rg"><img src="images/you.png" /> Youtube</a></li>
          </ul>
</div>
<!-- boutique spreadshirt -->
<div class="row global shoppromo" style="display:none;">
       <div class="barshop">
         <div class="columns large-12 small-12">
           <h3></h3>
         </div>
       </div>
</div>
     <div class="row global contentpage">
       <div class=" columns large-12 small-12">
         <div id="myShop"><a href="//shop.spreadshirt.fr/1107053">1107053</a></div>
<script>
	var spread_shop_config = {
		shopName: '1107053',
		locale: 'fr_FR',
		prefix: '//shop.spreadshirt.fr',
		baseId: 'myShop'
	};
</script>
<script type="text/javascript" src="//shop.spreadshirt.fr/shopfiles/shopclient/shopclient.nocache.js"></script>
       </div>
     </div>
<!-- Pied de page -->
<footer class="global row">
    <p></br></br></br>
     SITE RÉALISÉ PAR BENJAMIN BULLICH
   </br></br>
     LOGO DE PATRICK MORGHADI
    </p>
</footer>
<!-- Les scripts -->
<script src="js/zer1.js"></script>
<script>
var scene = document.getElementById('scene');
var parallax = new Parallax(scene);
</script>
<script src="js/jquery.2.1.4.js"></script>
<script>
 $(window).load(function() {
   $(".btn-nav").on("click tap", function() {
     $(".nav-container").toggleClass("showNav hideNav").removeClass("hidden");
     $(this).toggleClass("animated");
   });
 });
</script>
</body>
</html>
