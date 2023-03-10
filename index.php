<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="*your_name_here*" />

	<title>Bootstrap + Sass project template</title>

	<link rel="icon" href="./assets/icons/favicon.ico" sizes="any" />
	<link rel="apple-touch-icon" href="./assets/icons/favicon-apple-touch.png" />

	<link rel="manifest" href="./site.webmanifest" />

	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />

	<link rel="stylesheet" href="./assets/css/style.css?<?= time(); ?>" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" />

	<script src="./assets/scripts/bootstrap.bundle.min.js" defer=""></script>
	<script src="./assets/scripts/appendix.js" defer=""></script>
</head>

<body id="home" data-bs-spy="scroll" data-bs-target="#homepage-nav" data-bs-smooth-scroll="true" data-bs-root-margin="0px 0px -60%">
	<!-- https://getbootstrap.com/docs/5.3/components/scrollspy/ -->

	<nav id="homepage-nav" class="navbar navbar-expand-lg fixed-top">
		<div class="container-md">
			<a class="navbar-brand" href="#">
				<!-- 2 logo versions, the 2nd one is for darkmode. Delete it if not needed. -->
				<img src="assets/img/dummy_logo.svg" alt="Company logo" width="227" height="49" />
				<img src="assets/img/dummy_logo_white.svg" alt="Company logo" width="227" height="49" />
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapsible" aria-controls="navbarCollapsible" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapsible">
				<ul class="navbar-nav ms-auto fw-bold">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#our_story">Our Story</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#benefits">Benefits</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#culture">Culture</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#careers">Careers</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>


	<header class="bg-secondary header-image">
		<div class="header-text px-4 py-3 p-md-4 p-lg-5">
			<h1 class="display-1 mb-2">
				Lorem ipsum
			</h1>
			<h2 class="display-5 mt-0">
				dolor sit amet consectetur
			</h2>
			<a href="#careers" class="btn btn-primary fw-bold fs-5 mt-4">
				Join our company
			</a>
		</div>
	</header>


	<section id="our_story" class="bg-light">
		<div class="container-md overflow-hidden px-4 px-xl-0 pt-5 pt-md-6 pb-1 pb-md-6">
			<!-- .overflow-hidden fixes occasional x-overflow (because gx > 5 used below) -->
			<div class="row gx-md-6">

				<div class="col-md-6 order-last order-md-first mt-5 mt-md-0">
					<picture class="story-image">
						<source srcset="assets/img/our_story_desktop.jpg" media="(min-width: 768px)" />
						<source srcset="assets/img/our_story_mobile.webp" />
						<img src="assets/img/our_story_desktop.jpg" alt="" width="1280" height="816" loading="lazy" />
					</picture>
				</div>

				<div class="col-md-6 order-first order-md-last">

					<h3 class="display-5">Our Story</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quasi
						voluptatibus veritatis, quisquam in doloribus architecto aspernatur iste,
						inventore aliquid quidem aliquam fugit fugiat necessitatibus sed molestiae
						nihil odit commodi sunt sapiente ea? Fugiat dignissimos, a porro enim
						assumenda sit eaque debitis esse perferendis unde vero aperiam, expedita
						dolorem aliquam earum dolores itaque, eos aspernatur fugit exercitationem
						voluptas asperiores voluptatibus voluptatem libero.
					</p>

					<a href="#careers" class="btn fw-bold btn-custom">
						Join our company
					</a>
				</div>

			</div>


		</div>
	</section>


	<section id="benefits">
		<div class="container-md pt-5 pt-md-6 pb-6">
			<h3 class="display-5 text-center">Benefits</h3>

			<div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 mt-1 fs-5 gy-4 gy-sm-6 benefits-list">

				<div class="col">
					<img src="assets/icons/card-image.svg" alt="Benefit" width="16" height="16" />
					<span class="benefits-item-text">Benefit text</span>
				</div>

				<div class="col">
					<img src="assets/icons/card-image.svg" alt="Benefit" width="16" height="16" />
					<span class="benefits-item-text">Benefit text</span>
				</div>

				<div class="col">
					<img src="assets/icons/card-image.svg" alt="Benefit" width="16" height="16" />
					<span class="benefits-item-text">Benefit text</span>
				</div>

				<div class="col">
					<img src="assets/icons/card-image.svg" alt="Benefit" width="16" height="16" />
					<span class="benefits-item-text">Benefit text</span>
				</div>

				<div class="col">
					<img src="assets/icons/card-image.svg" alt="Benefit" width="16" height="16" />
					<span class="benefits-item-text">Benefit text</span>
				</div>

				<div class="col">
					<img src="assets/icons/card-image.svg" alt="Benefit" width="16" height="16" />
					<span class="benefits-item-text">Benefit text</span>
				</div>

				<div class="col">
					<img src="assets/icons/card-image.svg" alt="Benefit" width="16" height="16" />
					<span class="benefits-item-text">Benefit text</span>
				</div>

				<div class="col">
					<img src="assets/icons/card-image.svg" alt="Benefit" width="16" height="16" />
					<span class="benefits-item-text">Benefit text</span>
				</div>

			</div>

		</div>
	</section>

	<section id="culture" class="bg-secondary text-light">
		<div class="container-md px-4 px-xl-0 pt-5 pt-md-6 pb-4 pb-md-6">
			<h3 class="display-5 text-center">Culture</h3>

			<div class="row text-center justify-content-center mt-4 mb-5">
				<div class="col-md-8">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint molestiae ex, vero
					ea enim iusto minima inventore accusantium. Repudiandae dolores fuga consequatur
					eveniet rem. Sapiente ullam voluptate ducimus molestias, ad fugit sint error?
					Cupiditate obcaecati, ipsa distinctio quia porro aut aspernatur, perferendis
					minima recusandae debitis veniam qui soluta expedita.
				</div>
			</div>

			<div class="video-thumbnail">
				<img src="assets/img/video_thumb.jpg" alt="" loading="lazy" width="1920" height="1080" class="img-fluid" />

				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 173 173" class="play-button" alt="PLAY VIDEO" tabindex="0">
					<g transform="translate(-60.7 -29.3)">
						<circle r="86.5" cy="115.8" cx="147.2" class="play-btn-background" opacity=".5" />
						<circle r="76.6" cy="115.8" cx="147.2" class="play-btn-ring" fill="none" stroke="currentColor" stroke-width="3.8" />
						<path class="play-btn-arrow" d="M117.7 71.7V160l76.8-47.4z" fill="currentColor" />
					</g>
				</svg>
			</div>

			<div id="video-modal" class="modal" tabindex="-1">
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content">
						<div class="modal-body">

							<div id="custom-video">
								<p>Loading video...</p>
								<!--
								Video will be loaded on demand (page performance).
								This DIV will automatically change into an iframe with YouTube video.
								Insert correct YouTube video ID into appendix.js
							-->
							</div>

						</div>

					</div>
				</div>
			</div>


		</div>
	</section>

	<section id="careers">
		<div class="container-md pt-5 pt-md-6 pb-6">
			<h3 class="display-5 text-center">Careers</h3>

			<div class="row text-center justify-content-center mt-4 mb-6">
				<div class="col-md-8">
					Review our open positions and join our company today!
				</div>
			</div>


			<div class="jobsearch-wrapper p-1 p-md-0">

				<form class="row g-4 align-items-end">

					<div class="col-lg-4">
						<label for="inputKeywords" class="form-label">
							Search by keywords
						</label>
						<input type="text" class="form-control" id="inputKeywords" placeholder="Enter keywords" aria-label="Enter keywords" />
					</div>


					<div class="col-lg-3">
						<label for="inputCategory" class="form-label">Categories</label>
						<select id="inputCategory" class="form-select">
							<option selected="selected">All</option>
							<option value="285" title="Engineering">
								Engineering
							</option>
							<option value="288" title="Finance">
								Finance
							</option>
							<option value="287" title="Human Resources">
								Human Resources
							</option>
							<option value="282" title="Information Technology">
								Information Technology
							</option>
							<option value="280" title="Manufacturing">
								Manufacturing
							</option>
							<option value="283" title="Research &amp; Development">
								Research &amp; Development
							</option>
							<option value="89" title="Sales Support">
								Sales Support
							</option>
							<option value="284" title="Supply Chain">
								Supply Chain
							</option>
						</select>
					</div>

					<div class="col-lg-3">
						<label for="inputLocation" class="form-label">Locations</label>
						<select id="inputLocation" class="form-select">
							<option selected="selected">All</option>
							<option value="UK-Cornwall" title="Cornwall">
								Cornwall
							</option>
							<option value="UK-Derbyshire" title="Derbyshire">
								Derbyshire
							</option>
							<option value="UK-Kent" title="Kent">
								Kent
							</option>
							<option value="UK-London" title="London">
								London
							</option>
							<option value="UK-Norfolk" title="Norfolk">
								Norfolk
							</option>
						</select>
					</div>

					<div class="col-lg-2">
						<button type="submit" class="btn btn-primary text-center fw-bold fs-5 w-100">Search</button>
					</div>

					<div class="col-12 text-end mb-2">
						<button type="reset" class="text-dark">Reset search</button>
					</div>

					<div class="fs-4 ps-3 mb-3">
						Results: 5 of 31
					</div>

				</form>

				<div class="jobsearch-data">

					<header class="row d-none d-md-flex">
						<div class="col-5 fw-bold">Job Title</div>
						<div class="col-4 fw-bold">Category</div>
						<div class="col-3 fw-bold">Location</div>
					</header>

					<dl class="row">
						<dt class="col-md-5"><a href="#">Senior Java Developer</a></dt>
						<dd class="col-md-4">Information Technology</dd>
						<dd class="col-md-3">Norfolk</dd>
					</dl>

					<dl class="row">
						<dt class="col-md-5"><a href="#">Mechanical Engineer</a></dt>
						<dd class="col-md-4">Engineering</dd>
						<dd class="col-md-3">London</dd>
					</dl>

					<dl class="row">
						<dt class="col-md-5"><a href="#">Computer Engineer</a></dt>
						<dd class="col-md-4">Information Technology</dd>
						<dd class="col-md-3">Cornwall</dd>
					</dl>

					<dl class="row">
						<dt class="col-md-5"><a href="#">Cloud Engineer</a></dt>
						<dd class="col-md-4">Engineering</dd>
						<dd class="col-md-3">Cornwall</dd>
					</dl>

					<dl class="row">
						<dt class="col-md-5"><a href="#">Desk Officer</a></dt>
						<dd class="col-md-4">Finance</dd>
						<dd class="col-md-3">Norfolk</dd>
					</dl>

				</div>


				<nav aria-label="JobSearch page navigation" class="jobsearch-data-pagination mt-5">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link pageSkip" href="#" aria-label="Previous page" title="Previous page">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">&hellip;</a></li>
						<li class="page-item">
							<a class="page-link pageSkip" href="#" aria-label="Next page" title="Next page">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>


			</div>


		</div>
	</section>


	<section style="background-color: #d8e1f3;" aria-hidden="true">
		<div class="container-md pt-5 pt-md-6 pb-1 pb-md-6">

			<h3 class="display-5 text-center">Bootstrap</h3>

			<div class="my-5">
				<button type="button" class="btn btn-primary">Primary</button>
				<button type="button" class="btn btn-secondary">Secondary</button>
				<button type="button" class="btn btn-success">Success</button>
				<button type="button" class="btn btn-danger">Danger</button>
				<button type="button" class="btn btn-warning">Warning</button>
				<button type="button" class="btn btn-info">Info</button>
				<button type="button" class="btn btn-light">Light</button>
				<button type="button" class="btn btn-dark">Dark</button>
				<button type="button" class="btn btn-link">Link</button>
			</div>

			<div class="my-5">
				<button type="button" class="btn btn-outline-primary">Primary</button>
				<button type="button" class="btn btn-outline-secondary">Secondary</button>
				<button type="button" class="btn btn-outline-success">Success</button>
				<button type="button" class="btn btn-outline-danger">Danger</button>
				<button type="button" class="btn btn-outline-warning">Warning</button>
				<button type="button" class="btn btn-outline-info">Info</button>
				<button type="button" class="btn btn-outline-light">Light</button>
				<button type="button" class="btn btn-outline-dark">Dark</button>
			</div>

			<div class="my-5">
				<p class="fs-1">fs-1 lorem ipsum</p>
				<p class="fs-2">fs-2 lorem ipsum</p>
				<p class="fs-3">fs-3 lorem ipsum</p>
				<p class="fs-4">fs-4 lorem ipsum</p>
				<p class="fs-5">fs-5 lorem ipsum</p>
				<p class="fs-6">fs-6 lorem ipsum</p>
			</div>

			<div class="my-5">
				<h2 class="display-1">display-1</h2>
				<h2 class="display-2">display-2</h2>
				<h2 class="display-3">display-3</h2>
				<h2 class="display-4">display-4</h2>
				<h2 class="display-5">display-5</h2>
				<h2 class="display-6">display-6</h2>
			</div>

		</div>
	</section>

	<footer class="bg-secondary text-light">
		<div class="container-md py-4 py-sm-6 fs-6">
			<div class="row gy-5">
				<div class="col-lg-8">
					&copy; 2023 Dummy Company<br />
					<br />
					Disclaimer Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
					assumenda cumque expedita consequuntur nesciunt veniam illo, iusto numquam,
					provident nostrum iure commodi odit sequi minima dolores reprehenderit
					explicabo.<br />
					<br />
					GitHub repository of this starter template: <a href="https://github.com/Amarok24/template_bootstrap5_sass_php">https://github.com/Amarok24/template_bootstrap5_sass_php</a>
					<br /><br />
					<div class="themeSwitch" aria-hidden="true">
						<a href="#" id="toggle-light-mode">
							Toggle light/dark mode
						</a>
					</div>
				</div>
				<div class="col-lg-4 text-end social-icons">
					<a href="#" target="_blank">
						<svg alt="Facebook" title="Facebook" loading="lazy">
							<use href="./assets/icons/social-networks.svg#icon-facebook-square" />
						</svg>
					</a>
					<a href="#">
						<svg alt="Instagram" title="Instagram" loading="lazy">
							<use href="./assets/icons/social-networks.svg#icon-instagram-square" />
						</svg>
					</a>
					<a href="#" target="_blank">
						<svg alt="YouTube" title="YouTube" loading="lazy">
							<use href="./assets/icons/social-networks.svg#icon-youtube-square" />
						</svg>
					</a>
					<!--
					<a href="#">
						<svg alt="Pinterest" title="Pinterest" loading="lazy">
							<use href="./assets/icons/social-networks.svg#icon-pinterest-square" />
						</svg>
					</a>
-->
				</div>

			</div>


			<div class="text-start text-lg-end logo-footer">
				<a href="#" target="_blank">
					<img src="assets/img/dummy_logo_white.svg" alt="Company logo" width="227" height="49" />
				</a>
			</div>

		</div>
	</footer>


	<div id="arrow-scroll-to-top" title="Scroll to top" tabindex="-1">
		<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 20 20" height="18px" viewBox="0 0 20 20" width="18px" fill="currentColor">
			<g>
				<rect fill="none" height="20" width="20" />
			</g>
			<g>
				<g>
					<polygon points="5,14.94 6.06,16 10,12.06 13.94,16 15,14.94 10,9.94" />
					<polygon points="5,9 6.06,10.06 10,6.12 13.94,10.06 15,9 10,4" />
				</g>
			</g>
			<!-- Icon source: https://fonts.google.com/icons?selected=Material%20Icons%3Akeyboard_double_arrow_up%3A
		License: Apache-2.0 -->
		</svg>
	</div>

</body>

</html>
