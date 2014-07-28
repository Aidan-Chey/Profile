<div id="portfolio">
  <nav>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php'; ?>
  </nav>
  <h2 class="header">
    <img src="/images/Text/Portfolio.svg" style="max-width: 495px; width: 100%;" alt="Portfolio" onError="this.onerror=null;this.src='/images/Text/Portfolio.png';">
  </h2>
  <section>
    <?php 
      $files = scandir($_SERVER['DOCUMENT_ROOT'].'/images/gallery/');
      $images = array_diff($files, array('.', '..'));
      foreach($images as $key => $image): 
       $name = substr($image, 0, -4); ?>
      <article>
        <img src="/images/gallery/<?php echo $image; ?>" alt="<?php echo $name; ?>" onClick="largeImage('<?php echo $image; ?>')" />
        <a href="http://examples.aidancheyd.info/<?php echo $name; ?>"><?php echo $name; ?></a>
      </article>
    <?php endforeach; ?>
  </section>
  <input type="checkbox" class="hide" id="hideOverlay">
  <label id="overlay" for="hideOverlay">
    <img id="large" alt="A larger image of it's gallery counterpart." />
  </label>
  <script type="text/javascript">
    function largeImage(image){
      document.getElementById('overlay').innerHTML = "<img id='large' src='/images/Large/"+image+"' alt='A larger image of it's gallery counterpart.' />";
      document.getElementById('hideOverlay').checked = 'true';
    }
  </script>
</div>
