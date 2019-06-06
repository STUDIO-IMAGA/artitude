<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<header id="header" class="fixed-top">

  <div id="brand-container">
    <div id="brand">
      <a href="/">
        <img src="<?= Assets\asset_path("images/brand.svg"); ?>" alt="<?= bloginfo('description'); ?>">
      </a>
    </div>
  </div>

  <?= Navigation\toggler( 'navigation_container' ); ?>

  <div id="navigation_container" class="collapse">

    <div id="topbar">
      <?= Navigation\navigation( 'secondary_navigation', 'secondary_navigation' , 0, 1, "nav contact-menu", ""); ?>
    </div>

    <nav  id="navigation">
      <?= Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 2, "nav", ""); ?>
    </nav>

  </div>
</header>
<div class="toggler-bg"></div>
