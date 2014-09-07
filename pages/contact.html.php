<div id="contact">
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
			<label class="navButton" for="mobileNavExpandContact">
				Navigation
			</label>
			<input type="checkbox" id="mobileNavExpandContact">
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
		<img src="/images/Text/Contact.svg" style="max-width: 364px; width: 100%;" alt="Contact" onError="this.onerror=null;this.src='/images/Text/Contact.png';">
	</h2>
	<?php if(isset($_SESSION['messages'])): ?>
		<h3 class="textCenter">
			<?php echo $_SESSION['messages']; ?>
		</h3>
	<?php endif; ?>
	<form action="#contact" method="post" class="container">
		<div>
			<label for="field_1">Email: </label>
			<input type="email" name="email" id="field_1" placeholder="Required" required value="<?php if(!empty($_POST['email'])){echo$_POST['email'];} ?>">
			<?php if(!empty($errors['email'])){echo"<br><span class='error'>".$errors['email']."</span>";} ?>
		</div>
		<div>
			<label for="field_2">Name: </label>
			<input type="text" name="name" id="field_2" value="<?php if(!empty($_POST['name'])){echo$_POST['name'];} ?>">
		</div>
		<div>
			<label for="field_3">Subject: </label>
			<input type="text" name="subject" id="field_3" value="<?php if(!empty($_POST['subject'])){echo$_POST['subject'];} ?>">
		</div>
		<div>
			<label for="field_4">Message: </label>
			<textarea name="message" id="field_4"><?php if(!empty($_POST['message'])){echo$_POST['message'];} ?></textarea>
		</div>
		<!-- <img id="testImage" src="/images/test_image.png">
		<div>
			<label for="field_5">Human Test: What is this picture of? (use lowercase)</label>
			<input name="test" id="field_5" placeholder="com..." value="<?php if(!empty($_POST['test'])){echo$_POST['test'];} ?>">
			<?php if(!empty($errors['test'])){echo"<br><span class='error'>".$errors['test']."</span>";} ?>
		</div> -->
		<div class="textCenter"><button name="mail">Submit</button></div>
	</form>
	<footer>The contents of this web page are copyright © 2014–<?php echo date('Y'); ?> Aidan Dunn All Rights Reserved.</footer>
</div>