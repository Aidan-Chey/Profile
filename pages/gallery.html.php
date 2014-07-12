<a name="portfolio"></a>
<div id="midPage">
  <nav>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php'; ?>
  </nav>
  <div class="header">Portfolio</div>
  <p>click the labels to go to the site</p>
  <section>
    <?php 
      $files = scandir($_SERVER['DOCUMENT_ROOT'].'/images/gallery/');
      $images = array_diff($files, array('.', '..'));
      print_r($images);
      foreach($images as $key => $value): ?>
      <article>
        <a href="/images/gallery/<?php echo $value; ?>"><img style="background-image:url('/images/gallery/<?php echo $value; ?>'); 
            width: 200px; height: 200px;"></a>
        <a href="#placeholder">Site</a>
      </article>
    <?php endforeach; ?>
  </section>
</div>