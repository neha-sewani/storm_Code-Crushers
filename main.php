<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
  
		<div id="home" class="hero-area">

			
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bg-neha.jpg); width:100%; height: 656px; "></div>
		

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						

							<h1 class="blue-text" style="font-size: 40px;margin-top: 20px;
							margin-bottom:50px;">Intelligent Career Guidance System</h1>
							
							<?php
				
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<p class="lead custom-text" style="margin-left: 5px;" ><b>Discover yourself<br>Take the test to find the perfect role for you after Engineering</b></p>

									<a class="main-button icon-button" href="login.php">Get Started!</a>

								<?php else: ?>
									<p class="lead custom-text" style="margin-left: 5px;" ><b>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?> !<br><b>Discover yourself,<br>Take the test to find the perfect role for you after Engineering</b></p>

									<a class="main-button icon-button" href="http://127.0.0.1:5000/">Get Started!</a>
								
							<?php endif ?>
							
							
						</div>
					</div>
				</div>
			</div>

		</div>

		<div id="why-us" class="section">

			<div class="container">


				<div class="row">
					<div class="section-header text-center">
					

						<h2 style="margin-top: 100px; font-size: 45px;">Welcome to Predictly</h2>
					
						<p class="lead"><b style="color: rgb(56, 48, 48);">Predictly</b> is one stop destination <br>in helping you understand yourself, the best career for you <br> and providing all the resources in the process.</p>
					</div>
				</div>	

				<div class="row">
				
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa "><span> &#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="#" >
								<?php
						
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<a href="login.php"><h4>Career Prediction</h4></a>
								<?php else: ?>
									<a href="http://127.0.0.1:5000/"><h4>Career Prediction</h4></a>
									
								
							<?php endif ?>
								
								<p>Take the test to find the perfect role for you after Engineering.</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="blog.php" >
								<h4>Knowledge Network</h4>
								</a>
								<p>Gain knowledge through various sources, like important informational links, access to study materials, etc.</p>
							</div>
						</div>
					</div>
			
					<div class="col-md-4">
						<div class="feature">
						<i class="feature-icon fa "><span>&#x1F50E;&#xFE0E;</span></i>
							<div class="feature-content">
								<a href="courses.php" >
								<h4>Online Courses</h4>
								</a>
								<p>Links to relevant Courses.</p>
							</div>
						</div>
					</div>
					
									
				</div>
			
				
				<hr class="section-hr">

			</div>
		

		</div>
		
		<div id="cta" class="section" style="height: 400px;">

			
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgmid-neha.jpg)"></div>
			


			<div class="container">

		
				<div class="row">

					<div class="col-md-6">
					
						
							<?php
								
								if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi,</h2>

									<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
									<p class="lead white-text" >We Create Beautiful Experiences
										That Drive Successful Careers.</p>
									<a class="main-button icon-button" href="register.php">Get Started!</a>
								<?php else: ?>
									<h2 class="white-text" style="font-size: 30px; width:700px ;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?> !</b></h2>

								<h2 class="white-text" style="font-size: 25px; width:700px ; margin-top:10px;">Your Career Path Begins Here</h2>
								<p class="lead white-text" >We Create Beautiful Experiences
									That Drive Successful Careers.</p>
									<a class="main-button icon-button" href="main.php">Get Started!</a>
									
							<?php endif ?>
					</div>

				</div>
		

			</div>
	

		</div>
	

	
		<div id="about" class="section">

		
			<div class="container">

		
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2 style="font-size: 35px;">About Predictly</h2>
							<p class="lead" style="font-size: 18px; font-style: italic; margin-top: 50px;">Education seekers get a personalised experience on our site, based on educational background and career interest, enabling them to make well informed course and career decisions. The decision making is empowered with easy access to detailed information on career choices, courses, exams, colleges, admission criteria, eligibility, placement statistics, rankings, reviews, scholarships, latest updates etc as well as by interacting with other Predictly users, experts, current students in colleges and alumni groups. We have introduced several student oriented products and tools like Career Prediction, Knowledge Network, Daily Bytes, Blogs, Community discussion forum, and various Courses.</p>
							
						</div>

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="./img/about.png" alt="">
						</div>
					</div>

				</div>
				
				<hr class="section-hr">
			</div>
		
		</div>
	
		<div id="contact-cta" class="section" style="height: 400px;">

			
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/contact-us.jpeg)"></div>
	

	
			<div class="container">

	
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contact Us</h2>
						<p class="lead white-text">Help us to get to know you.</p>
						<a class="main-button icon-button" href="contact.php">Contact Us Now</a>
					</div>

				</div>
	

			</div>
		

		</div>
	

<?php include 'footer.php'?>
</html>
