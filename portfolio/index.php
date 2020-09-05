<?php
	include 'includes/head.php';
	include 'includes/navbar.php';
?>

<!-- Content Section -->
<section class="hero-section">
	<div class="container">
		<span data-aos="fade-up" class="tag">Hey There !</span>
		<h1 data-aos="fade-up">I am <b>Rahul Yadav</b></h1>
		<h3 data-aos="fade-up">Frontend Developer</h3>
		<a href="#about" class="arrow-down">
			<svg viewBox="0 0 115 394" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M58 1H33V304H2.5L58 391.5L113 304H84.5V1H58Z" stroke="black" stroke-width="2"/>
			</svg>
		</a>
	</div>
</section>

<section class="about-section" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 data-aos="fade-up-right">About Me</h2>
				<p data-aos="fade-up">Hello! I'm Rahul, a frontend developer based in Thane, MH.</p>
				<p data-aos="fade-up">I enjoy creating things that live on the internet, whether that be websites, applications, or anything in between. My goal is to always build products that provide pixel-perfect, performant experiences.</p>
				<p data-aos="fade-up">I aim to create websites and applications where motion, interaction and design are perfectly integrated to forma unique experience.</p>
				<p data-aos="fade-up">Here are a few technologies I've been working with recently:</p>
				<div class="row">
					<div class="col-sm-6">
						<ul data-aos="fade-up">
							<li><i class="fas fa-caret-right"></i> HTML & CSS</li>
							<li><i class="fas fa-caret-right"></i> PHP</li>
							<li><i class="fas fa-caret-right"></i> WordPress</li>
						</ul>
					</div>
					<div class="col-sm-6">
						<ul data-aos="fade-up">
							<li><i class="fas fa-caret-right"></i> JavaScript</li>
							<li><i class="fas fa-caret-right"></i> Python</li>
							<li><i class="fas fa-caret-right"></i> Photoshop</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image" data-aos="fade-up-left">
					<div class="overlay"></div>
					<img src="static/images/profile.png">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="work-section">
	<div class="container">
		<h3 data-aos="fade-up-right">Some Things I've Built</h3>
		<div class="row">
			<div class="col-lg-4">
				<img data-aos="fade-up-right" class="image" src="static/images/svg/camping.svg">
			</div>
			<div class="col-lg-8">
				<div class="box">
					<ul data-aos="fade-up-left">
						<li><h5><a href="#" target="_blank"><i class="fas fa-mouse-pointer"></i> Music365</a></h5></li>
						<li><h5><a href="#" target="_blank"><i class="fas fa-mouse-pointer"></i> Hunger Junction</a></h5></li>
						<li><h5><a href="#" target="_blank"><i class="fas fa-mouse-pointer"></i> Captain Matrix</a></h5></li><li><h5><a href="#" target="_blank"><i class="fas fa-mouse-pointer"></i> Portfolio V1</a></h5></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Content Section ~ Close -->

<?php
	include 'includes/footer.php';
	include 'includes/scripts.php';
?>