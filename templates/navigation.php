<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<header id="header" class="fixed-top">

  <div id="brand">
    <img src="<?= Assets\asset_path("images/brand.png"); ?>" alt="<?= bloginfo('description'); ?>">
  </div>

  <div id="navigation">

    <nav class="navbar navbar-light">

      <?= Navigation\toggler( 'navigation_container' ); ?>

    </nav>

    <nav  id="navigation_container" class="navbar navbar-light collapse">

      <?= Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 2, "nav", ""); ?>

    </nav>

  </div>
</header>
