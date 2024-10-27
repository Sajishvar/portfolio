<?php
$pageTitle = "Home Page";
ob_start();
?>

<section id="home-section" class="hero">
	<div class="home-slider  owl-carousel">
		<div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
				<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          		<div class="one-third js-fullheight order-md-last img" style="background-image:url(assets/images/bg_3.png);">
	          			<div class="overlay"></div>
	          		</div>
					<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<span class="subheading">Hello!</span>
							<h1 class="mb-4 mt-3">I'm <span>Sajishvar Mohan</span></h1>
							<h2 class="mb-4">An Aspiring Software Engineer</h2>
							<p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(assets/images/bg_4.png);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm a <span>web designer</span> based in Sri Lanka</h1>
			            <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
		</div>
	</div>
</section>


<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 col-lg-5 d-flex">
				<div class="img-about img d-flex align-items-stretch">
					<div class="overlay"></div>
					<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(assets/images/bg_3.png);"></div>
				</div>
			</div>
			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
				<div class="row justify-content-start pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h1 class="big">About</h1>
						<h2 class="mb-4">About Me</h2>
						<p>A passionate and driven computer engineering undergraduate with hands-on experience in web development</p>
						<ul class="about-info mt-4 px-md-0 px-2">
							<li class="d-flex"><span>Name:</span> <span>Mohan Sajishvar</span></li>
							<li class="d-flex"><span>Date of birth:</span> <span>August 30, 1999</span></li>
							<li class="d-flex"><span>Address:</span> <span>No 201/131, Jeyaraja Mawatha, Kotagala</span></li>
							<li class="d-flex"><span>Zip code:</span> <span>22080</span></li>
							<li class="d-flex"><span>Email:</span> <span>mohansajishvar@gmail.com</span></li>
							<li class="d-flex"><span>Phone: </span> <span>+94-76-8262-123</span></li>
						</ul>
					</div>
				</div>
				<div class="counter-wrap ftco-animate d-flex mt-md-3">
					<div class="text">
						<p class="mb-4">
							<span class="number" data-number="005">0</span>
							<span>Project complete</span>
						</p>
						<p><a href="assets/documents/Sajishvar_CV.pdf" target="blank" class="btn btn-primary py-3 px-4">Download CV</a> <a href="assets/documents/Sajishvar_CV_2.pdf" target="blank" class="btn btn-white btn-outline-white py-3 px-4">Download CV (ATS Free)</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$pageContent = ob_get_clean();
include("includes/layout.php");
?>