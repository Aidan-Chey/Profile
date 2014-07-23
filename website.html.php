<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile - Aidan Dunn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Aidan Dunn" href="https://plus.google.com/u/0/109276215292251716275?rel=author">
  <meta name="description" content="Introducing Aidan Dunn as a Web Developer/Coder, shows Porfolio / Gallery of work and provides Contact form.">
  <meta name="keywords" content="Aidan Dunn, Profile, Gallary, Contact, Portfolio, Website, Web Development, Frontend, Hypertext Markup language, HTML5, Javascript, JS, Cascading Style Sheets, CSS, Photoshop, PS, Backend, PHP: Hypertext Preprocessor, Php, Structured Query Language, SQL">
  <link rel="stylesheet" type="text/css" href="/style.css"/>
  <link href="font/genericons.css" rel="stylesheet">
  <link rel="shortcut icon" href="/images/Favicon.png" />
  <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php include $_SERVER['DOCUMENT_ROOT'].'/pages/welcome.html.php'; ?>

  <div id="gradDown"></div>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/pages/gallery.html.php'; ?>

  <div id="gradUp"></div>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/pages/contact.html.php'; ?>

  <footer>The contents of this web page are copyright © 2014–<?php echo date('Y'); ?> Aidan Dunn All Rights Reserved.</footer>
</body>
</html>