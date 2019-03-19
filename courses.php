<?php include_once 'header.php';  ?>
<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/schbg.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="home.php">
							<img class="logo logo-pad" src="img/logo1.jpg" alt="French Vilage Nigeria">
							<img class="logo-alt" src="img/logo1.jpg" alt="French Vilage Nigeria">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right nav-pad">
					<li><a href="home.php">Home</a></li>
					<li><a href="home.php">About</a></li>
					<li><a href="#courses">Courses</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li class="has-dropdown"><a>Staff</a>
						<ul class="dropdown">
							<li><a href="principals.php">Principals</a></li>
							<li><a href="lecturers.php">Lecturers</a></li>
						</ul>
					</li>
					<!-- <li><a href="blog.php">Blog</a></li> -->
					<li><a href="FAQ.php">FAQ</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text head-mg">Welcome to the<br>NIGERIAN FRENCH LANGUAGE VILLAGE</h1>
							<a href="http://client-school.herokuapp.com/register" style="text-decoration-color: none"><button class="main-btn outln">Registration Form</button></a>
							<a href="http://client-school.herokuapp.com/login"><button class="main-btn outln">Portal Login</button></a>
							<nav aria-label="breadcrumb">
							  <ol class="breadcrumb">
							    <li class="breadcrumb-item"><a href="home.php" class="crumb">Home</a></li>
							    <li class="breadcrumb-item active" aria-current="page">Courses</li>
							  </ol>
							</nav>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- Courses -->
	<div id="courses" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Courses</h2>
				</div>
				<!-- /Section header -->

				<!-- departments -->
				<div class="col-md-4">
					<div class="about text-left">
						<!-- <i class="fa fa-mortar-board"></i> -->
						<h3>Departments</h3>

						<p>Linguistics</p>

						<p>Literature, Culture & Civilization</p>

						<p>Language & Communication</p>

						<p>Translation & Interpretation</p>

						<p>French for Specific Purposes</p>

						<p>French Teachers’ Continuing Education</p>

						<p>NCE & DELF/DALF</p>
					</div>
				</div>
				<!-- /departments -->

				<!-- programmes -->
				<div class="col-md-4">
					<div class="about text-left">
						<!-- <i class="fa fa-flag"></i> -->
						<h3>Programmes</h3>

						<p>Language Immersion Programme (LIP)</p>

						<p>University Undergraduates</p>

						<p>College Of Education students (LIP)</p>
					</div>
				</div>
				<!-- /programmes -->

				<!-- pre-university programmes -->
				<div class="col-md-4">
					<div class="about text-left">
						<!-- <i class="fa fa-book"></i> -->
						<h3>Pre-university Programmes</h3>

						<p>Diploma in French</p>

						<p>Certificate in French</p>
					</div>
				</div>
				<!-- /pre-university programmes -->

			</div>
			<!-- /Row -->

			<!-- Row -->
			<div class="row">
				<!-- Post Graduate Programmes -->
				<div class="col-md-4">
					<div class="about text-left">
						<!-- <i class="fa fa-mortar-board"></i> -->
						<h3>Post Graduate Programmes</h3>

						<p>PGD in Bilingual Secretaryship</p>

						<p>PGD Translation & Interpretation</p>
					</div>
				</div>
				<!-- /Post Graduate Programmes -->

				<!-- Post Graduate Programmes -->
				<div class="col-md-4">
					<div class="about text-left">
						<!-- <i class="fa fa-mortar-board"></i> -->
						<h3>Intensive French Programmes For...</h3>

						<p>Individuals</p>

						<p>Professoinals</p>

						<p>Corporate Bodies</p>						
					</div>
				</div>
				<!-- /Post Graduate Programmes -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->
	</div>
	<!-- /Courses -->


<?php include_once 'contact.php'; ?>	
<?php include_once 'footer.php';  ?>