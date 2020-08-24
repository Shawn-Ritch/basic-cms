<?php
require_once('inc/init.php');
require_once('inc/header.php');
?>
  <main>
    <section class="hero">
      <h1 class="ctxt">CMS Sitemap</h1>
      <div class="c50m cnt ctxt">
      <?php echo $siteMap; ?>
      </div>
    </section>
  </main>
<?php
require_once('inc/footer.php');
require_once('inc/js.php');
?>