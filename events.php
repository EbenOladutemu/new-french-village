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
					<li><a href="#events">Events</a></li>
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
							    <li class="breadcrumb-item active" aria-current="page">Events</li>
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

<div id="events" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Recent and Upcoming Events</h2>
				</div>
				<!-- /Section header -->

				<!-- event1 -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="./img/blog1.jpg" alt="">
						</div>
						<div class="blog-content">
							<!-- <ul class="blog-meta">
								<li><i class="fa fa-user"></i>John doe</li>
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul> -->
							<h3>Molestie at elementum eu facilisis sed odio</h3>
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							<span><i class="fa fa-calendar"></i>  18 February 2019</span>
							<!-- <a href="blog-single.html">Read more</a> -->
						</div>
					</div>
				</div>
				<!-- /event1 -->

				<!-- event2 -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="./img/blog2.jpg" alt="">
						</div>
						<div class="blog-content">
							<!-- <ul class="blog-meta">
								<li><i class="fa fa-user"></i>John doe</li>
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul> -->
							<h3>Molestie at elementum eu facilisis sed odio</h3>
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							<span><i class="fa fa-calendar"></i>  8th March 2019</span>
							<!-- <a href="blog-single.html">Read more</a> -->
						</div>
					</div>
				</div>
				<!-- /event2 -->

				<!-- event3 -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive"  src="./img/blog3.jpg" alt="">
						</div>
						<div class="blog-content">
							<!-- <ul class="blog-meta">
								<li><i class="fa fa-user"></i>John doe</li>
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul> -->
							<h3>Molestie at elementum eu facilisis sed odio</h3>
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							<span><i class="fa fa-calendar"></i>  18 June 2019</span>
							<!-- <a href="blog-single.html">Read more</a> -->
						</div>
					</div>
				</div>
				<!-- /event3 -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Event -->



<?php include_once 'contact.php'; ?>	
<?php include_once 'footer.php';  ?>