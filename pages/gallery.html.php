<div id="portfolio">
	<nav>
		<table class="container">
			<tr>
				<td rowspan="2"><a class="navButton" href="#home">Home</a></td>
				<td rowspan="2"><a class="navButton" href="#portfolio">Portfolio</a></td>
				<td rowspan="2"><a class="navButton" href="#contact">Contact</a></td>
			    <td class="socialMedia"><a href="https://plus.google.com/u/0/109276215292251716275?rel=author" title="Google+" class="genericon googleplus" target="_blank"></a></td>
			    <td class="socialMedia"><a href="https://www.facebook.com/AidanCMDunn" title="Facebook" class="genericon facebook" target="_blank"></a></td>
			</tr>
			<tr>
			    <td class="socialMedia"><a href="https://github.com/Aidan-Chey" title="Github" class="genericon github" target="_blank"></a></td>
			    <td class="socialMedia"><a href="http://codepen.io/Talnar" title="CodePen" class="genericon codepen" target="_blank"></a></td>
			</tr>
		</table>
		<div class="mobileNav">
			<label class="navButton" for="mobileNavExpandGallary">
				Navigation
			</label>
			<input type="checkbox" id="mobileNavExpandGallary">
			<div class="mobileLinks">
				<div>
					<a class="navButton" href="#home">Home</a>
					<a class="navButton" href="#portfolio">Portfolio</a>
					<a class="navButton" href="#contact">Contact</a>
				</div>
				<div>
					<a href="https://plus.google.com/u/0/109276215292251716275?rel=author" title="Google+" class="genericon googleplus socialMedia" target="_blank"></a>
					<a href="https://www.facebook.com/AidanCMDunn" title="Facebook" class="genericon facebook socialMedia" target="_blank"></a>
					<a href="https://github.com/Aidan-Chey" title="Github" class="genericon github socialMedia" target="_blank"></a>
					<a href="http://codepen.io/Talnar" title="CodePen" class="genericon codepen socialMedia" target="_blank"></a>
				</div>
			</div>
		</div>
	</nav>
	<h2 class="header">
		<img src="/images/Text/Portfolio.svg" style="max-width: 465px; width: 100%;" alt="Portfolio" onError="this.onerror=null;this.src='/images/Text/Portfolio.png';">
	</h2>
	<a href="http://examples.aidancheyd.info">Main Portfolio Site</a>
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
