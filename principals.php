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
				<li><a href="courses.php">Courses</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li class="has-dropdown"><a>Staff</a>
					<ul class="dropdown">
						<li><a href="#principals">Principals</a></li>
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
						    <li class="breadcrumb-item active" aria-current="page">Principals</li>
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


<!-- Team -->
	<div id="principals" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Our Principals</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4 work">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team1.jpg" alt="">
							<div class="overlay">
								<div class="work-content">
									<h3>Principal Name</h3>
									<span>Short Description</span>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Email Address</h3>
							<span>Phone</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4 work">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team2.jpg" alt="">
							<div class="overlay">
								<div class="work-content">
									<h3>Principal Name</h3>
									<span>Short Description</span>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Email Address</h3>
							<span>Phone</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4 work">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team3.jpg" alt="">
							<div class="overlay">
								<div class="work-content">
									<h3>Principal Name</h3>
									<span>Short Description</span>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Email Address</h3>
							<span>Phone</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->
			<!-- Row 2-->
			<div class="row">

				<!-- team -->
				<div class="col-sm-4 work">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team3.jpg" alt="">
							<div class="overlay">
								<div class="work-content">
									<h3>Principal Name</h3>
									<span>Short Description</span>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Email Address</h3>
							<span>Phone</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4 work">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team2.jpg" alt="">
							<div class="overlay">
								<div class="work-content">
									<h3>Principal Name</h3>
									<span>Short Description</span>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Email Address</h3>
							<span>Phone</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-4 work">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team3.jpg" alt="">
							<div class="overlay">
								<div class="work-content">
									<h3>Principal Name</h3>
									<span>Short Description</span>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Email Address</h3>
							<span>Phone</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row 2-->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->


<?php include_once 'contact.php'; ?>	
<?php include_once 'footer.php';  ?>