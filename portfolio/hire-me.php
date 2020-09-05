<?php
	include 'includes/head.php';
	include 'includes/navbar.php';
?>

<!-- Content Section -->
<section class="hire-section">
	<div class="container">
		<h3 data-aos="fade-up">Let's Work Together</h3>
		<div class="row">
			<div class="col-lg-7">
				<form method="POST" action="" data-aos="fade-up">
					<input type="text" name="name" placeholder="Name">
					<input type="email" name="email" placeholder="Email">
					<input type="tel" name="phone" placeholder="Phone No.">
					<textarea rows="4" placeholder="Project Idea / Message"></textarea>
					<button>Send</button>
				</form>
			</div>
			<div class="col-lg-5">
				<img src="static/images/svg/cabin.svg">
			</div>
		</div>
	</div>
</section>
<!-- Content Section ~ Close -->

<?php
	include 'includes/footer.php';
	include 'includes/scripts.php';
?>