<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aidan Chey D Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Aidan Dunn" href="https://plus.google.com/u/0/109276215292251716275?rel=author">
  <meta name="description" content="Introducing Aidan Dunn as a Web Developer, shows Porfolio / Gallery of work and provides Contact form.">
  <meta name="keywords" content="Aidan Dunn, Profile, Gallary, Contact, Portfolio, Website, Web Development, Frontend, Hypertext Markup language, HTML5, Javascript, JS, Cascading Style Sheets, CSS, Photoshop, PS, Backend, PHP: Hypertext Preprocessor, Php, Structured Query Language, SQL">
  <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/layout.css">
  <link href="font/genericons.css" rel="stylesheet">
  <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <a name="home"></a>
  <div id="topPage">
    <nav>
      <?php include 'nav.php'; ?>
    </nav>
    <div id="title">
      Aidan Chey D
    </div>
    <p class="textCenter intro">
      Hey There!<br>Looks like you found my website.<br>Well, seeing as you're here...
    </p>
    <section class="textCenter">
      I make Websites!
    </section>
    <p class="textCenter">
      You can see some of my work <a href="#portfolio">portfolio</a>. If you like my work and want a website, why not <a href="#contact">contact</a> me.
    </p>
    <p class="textCenter">
      For those of you with a little more knowledge on the subject, I know:
    </p>
    <div id="qualifications" class="textCenter">
      <a href="http://en.wikipedia.org/wiki/HTML5" target="_blank"><img title="HTML5" src="images/HyperTextMarkupLanguage-HTML5.png"></a>
      <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank"><img title="Javascript" src="images/JavaScript-JS.png"></a>
      <a href="http://en.wikipedia.org/wiki/CSS" target="_blank"><img title="CSS3" src="images/CascadingStyleSheets-CSS3.png"></a>
      <a href="http://www.photoshop.com/" target="_blank"><img title="Photoshop CS6" src="images/Photoshop-CS6.png"></a>
    </div>
    <hr class="intro">
    <p class="textCenter intro">
      <a href="TestDev/Index.html" target="_blank">Testing and Development Section</a>
    </p>
  </div>
  <div id="gradDown"></div>
  <a name="portfolio"></a>
  <div id="midPage">
    <nav>
      <?php include 'nav.php'; ?>
    </nav>
    <div class="header">Portfolio</div>
    <div class="textCenter" id="categories">
      <input name="portCats" id="catOne" type="radio" checked />
      <label for="catOne" class="bar" onclick="category(this)">Vision College - Coding</label>
      <input name="portCats" id="catTwo" type="radio" />
      <label for="catTwo" class="bar" onclick="category(this)">Vision College - Design</label>
      <!-- <input name="portCats" id="catThree" type="radio" />
      <label for="catThree" class="bar" onclick="category(this)">Career</label> -->
    </div>
    <div id="leftGalShader" onclick="arrow(this)"></div>
    <div id="leftArrow"></div>
    <div id="rightGalShader" onclick="arrow(this)"></div>
    <div id="rightArrow"></div>
    <div id="frame" onScroll="imScrolling()">
      <div id="slideShow"><a style="border: none;" href="http://aidancheyd.info/TestDev/PlayfulToysCo"><img alt="Gallery Image 1" id="galMarLeft" class="slideShow" src="images/Toy Company Website.png" title="Fake Toy Company"></a><img alt="Gallery Image 2" class="slideShow" src="images/Barber Website.jpg" title="Mockup for a Barber Shop"><img alt="Gallery Image 3" id="galMarRight" class="slideShow" src="images/Visual Emotion Website.jpg" title="Practice Design on Visual Emotion"></div>
    </div>
  </div>
  <div id="gradUp"></div>
  <a name="contact"></a>
  <div id="botPage">
    <nav>
      <?php include 'nav.php'; ?>
    </nav>
    <div class="header">Contact</div>
    <?php if(isset($_POST['email'])): ?>
      <h3 class="textCenter">
        <?php echo $response; ?>
      </h3>
    <?php endif; ?>
    <form action="?FormSubmitted#contact" method="post" enctype="text/plain" class="container">
      <div><label for="field_2">Email: </label><input type="email" name="email" id="field_2" placeholder="Required" required><div id="eError"></div></div>
      <div><label for="field_1">Name: </label><input type="text" name="name" id="field_1"></div>
      <div><label for="field_3">Subject: </label><input type="text" name="subject" id="field_3"></div>
      <div><label for="field_4">Message: </label><textarea name="message" id="field_4"></textarea></div>
      <div class="textCenter"><button>Submit</button></div>
    </form>
  </div>
  <script src="js/JavaScript.js"></script>
</body>
</html>