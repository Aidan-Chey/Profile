<a name="portfolio"></a>
<div id="midPage">
  <nav>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php'; ?>
  </nav>
  <div class="header">Portfolio</div>
  <section>
    <?php 
      $files = scandir($_SERVER['DOCUMENT_ROOT'].'/images/gallery/');
      $images = array_diff($files, array('.', '..'));
      foreach($images as $key => $image): 
       $name = substr($image, 0, -4); ?>
      <article>
        <div style="background-image:url('/images/gallery/<?php echo $image; ?>')" onClick="largeImage('<?php echo $image; ?>')"></div>
        <a href="http://examples.aidancheyd.info/<?php echo $name; ?>"><?php echo "Site - ".$name; ?></a>
      </article>
    <?php endforeach; ?>
  </section>
  <input type="checkbox" class="hide" id="hideOverlay">
  <label id="overlay" for="hideOverlay">
    <img id="large" alt="A larger image of it's gallery counterpart." />
  </label>
  <script type="text/javascript" async>
    function largeImage(image){
      document.getElementById('large').src = '/images/Large/'+image;
      document.getElementById('hideOverlay').checked = 'true';
    }
  </script>
</div>
