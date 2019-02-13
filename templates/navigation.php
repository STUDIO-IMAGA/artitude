<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>

<header id="header" class="fixed-top">

  <div id="brand">
    <img src="<?= Assets\asset_path("images/brand.svg"); ?>" alt="<?= bloginfo('description'); ?>">
  </div>

  <div id="navigation">

    <?= Navigation\toggler( 'navigation_container' ); ?>

    <div id="topbar">
      <?= Navigation\navigation( 'secondary_navigation', 'secondary_navigation' , 0, 1, "nav", ""); ?>
    </div>

    <nav  id="navigation_container" class="collapse">
      <?= Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 2, "nav", ""); ?>
    </nav>

  </div>
</header>
