<?php header('HTTP/1.1 503 Service Temporarily Unavailable'); header('Status: 503 Service Temporarily Unavailable'); header('Retry-After: 600'); ?>
<? use IMAGA\Theme\Assets; ?>
<html>
</head>
<title>Eventjes Niet bereikbaar</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:url" content="//artitude.nl" />
<meta property="og:type" content="website" />
<meta property="og:title" content="ARTITUDE" />
<meta property="og:description" content="Excuus, er wordt momenteel aan deze website gewerkt. Probeer het later nog eens." />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.brand{
  box-shadow: 0px 5px 25px 0 rgba(26, 23, 27, 0.63);
}
.social-media .social-item{
    display: inline-block;
    height: 28px;
    width: 28px;
    margin-left: 1rem;
}
.contact > span{
  position: relative;
  margin-left: 60px;
}
.contact .phone:before,
.contact .mail:before,
.contact .address:before{
  display: block;
  position: absolute;
  content: "";
  background-size: contain;
  background-repeat: no-repeat;
  background-position: 50%;
  height: 32px;
  width: 32px;
  left: -42px;
  top: calc(50% - 16px);
}
.contact .phone:before{
  background-image: url(<?= Assets\asset_path('images/icons/telefoon-light.svg'); ?>);
}
.contact .mail:before{
  background-image: url(<?= Assets\asset_path('images/icons/mail-light.svg'); ?>);
}
.contact .address:before{
  background-image: url(<?= Assets\asset_path('images/icons/koffie-light.svg'); ?>);
}
</style>
</head>
<body style="height:100%;background-color:#e93324;color:#fff;">
  <div class="container">
    <div class="row text-center h-75 align-items-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-9">
            <img alt="<?= bloginfo('description'); ?>" class="img-fluid my-md-5 brand" width="320" height="65" src="<?= Assets\asset_path('images/brand.svg'); ?>"/>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1 class="h3">Er wordt momenteel nog aan deze website gewerkt.</h1>
            <div class="contact mt-4">
              <span class="phone"><a class="text-white" href="tel:0582501305">058 2501305</a></span>
              <span class="mail"><a class="text-white" href="mailto:info@artitude.nl">info@artitude.nl</a></span>
              <span class="address"><a class="text-white" href="https://www.google.com/maps/dir/Current+Location/Zuiderkruisweg+32,+8938+AP+Leeuwarden">Zuiderkruisweg 32 a, Leeuwarden</a></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <div class="social-media mt-5">
              <? $socials = get_field('social_media','options'); ?>
              <? if($socials): ?>
                <? foreach($socials as $social): ?>
                  <a class="social-item" href="<?= $social['url']; ?>">
                    <img class="img-fluid" src="<?= $social['icon']['url']; ?>"/>
                  </a>
                <? endforeach; ?>
              <? endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
