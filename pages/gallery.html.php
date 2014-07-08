<a name="portfolio"></a>
<div id="midPage">
  <nav>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/nav.php'; ?>
  </nav>
  <div class="header">Portfolio</div>
  <!--<div class="textCenter" id="categories">
    <input name="portCats" id="catOne" type="radio" checked />
    <label for="catOne" class="bar" onclick="category(this)">Vision College - Coding</label>
    <input name="portCats" id="catTwo" type="radio" />
    <label for="catTwo" class="bar" onclick="category(this)">Vision College - Design</label>
     <input name="portCats" id="catThree" type="radio" />
    <label for="catThree" class="bar" onclick="category(this)">Career</label> 
  </div>-->
  <div>
      <?php 
        $files = scandir($_SERVER['DOCUMENT_ROOT'].'/images/gallery/');
        $images = array_diff($files, array('.', '..'));
        $imgCount = count($images);
        foreach($images as $key => $value): 
          $count = 2; ?>
        
      <a href="/images/gallery/<?php echo $value; ?>" target="_blank">
        <img style="background-image:url('/images/gallery/<?php echo $value; ?>'); 
            width: calc(200%/<?php echo $imgCount; ?>);" 
          class="slideshow">
      </a>
      <?php $count++; endforeach; ?>
    </div>
</div>