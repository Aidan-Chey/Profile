<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aidan Chey D Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Aidan Dunn" href="https://plus.google.com/u/0/109276215292251716275?rel=author">
  <meta name="description" content="Introducing Aidan Dunn as a Web Developer, shows Porfolio / Gallery of work and provides Contact form.">
  <meta name="keywords" content="Aidan Dunn, Profile, Gallary, Contact, Portfolio, Website, Web Development, Frontend, Hypertext Markup language, HTML5, Javascript, JS, Cascading Style Sheets, CSS, Photoshop, PS, Backend, PHP: Hypertext Preprocessor, Php, Structured Query Language, SQL">
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/layout.css">
  <link href="font/genericons.css" rel="stylesheet">
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

  <script src="js/JavaScript.js" async></script>
</body>
</html>
<?php unset($_SESSION['messages']); ?>