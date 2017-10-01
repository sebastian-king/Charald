<?php

require_once("include/header.php");
require_auth();

$userinfo = $db->query("SELECT id, name, email FROM users WHERE id = '".$db->real_escape_string($_COOKIE['id'])."' LIMIT 1");
$userinfo = $userinfo->fetch_array(MYSQLI_ASSOC);
?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Charald</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Charald the App</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href="#logout">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">App</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <span class="name">Hiya,</span>
          <hr class="star-light">
          <span class="skills">Welcome <?php echo $userinfo['name']; ?> to Charald Chat.</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">What we do</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal1" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal2" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cake.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal3" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/circus.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal4" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/game.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal5" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/safe.png" alt="">
            </a>
          </div>
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal6" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">About</h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-12 text-center ml-auto">
            <p>Charald is a secure messaging app, that utilises both WAN, LAN and BT for high-speed communications.</p>
          </div>
          <div class="col-lg-8 mx-auto text-center">
            <a href="/download" class="btn btn-lg btn-outline">
              <i class="fa fa-download"></i>
              Download
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Contact Me</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button style="cursor: pointer;" type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Location</h3>
              <p>Somewhere at UTA.</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Around the Web</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>About Freelancer</h3>
              <p>Freelance is a free to use, open source Bootstrap theme created by
                <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Charald 2017
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div id="register" class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Register</h2>
                  <hr class="star-primary">
					<div class="alert alert-danger" style="display: none;">
					  <strong>Error!</strong> <span id="register_error"></span>
					</div>
					<div class="alert alert-success" style="display: none;">
					  <strong>Success!</strong> <span id="register_success"></span>
					</div>
                  <div class="panel panel-default">
							<div class="panel-body">
							<form role="form" onSubmit="return register_submit()" action="#register">
								<fieldset id="register_field">
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
									<input type="text" name="first_name" id="first_name" class="form-control input-sm floatlabel" placeholder="First Name">
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
											</div>
										</div>
									</div>

									<div class="form-group">
										<input type="email" name="remail" id="remail" class="form-control input-sm" placeholder="Email Address">
									</div>

									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="rpassword" id="rpassword" class="form-control input-sm" placeholder="Password">
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
											</div>
										</div>
									</div>

									<button id="register_submit_btn" type="submit" class="btn btn-success btn-block btn-lg">Register</button>
								</fieldset>
							</form>
						</div>
					</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="login" class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>Login</h2>
                  <hr class="star-primary">
					<div class="alert alert-danger" style="display: none;">
					  <strong>Error!</strong> <span id="login_error"></span>
					</div>
					<div class="alert alert-success" style="display: none;">
					  <strong>Success!</strong> <span id="login_success"></span>
					</div>
                  <div class="panel panel-default">
							<div class="panel-body">
							<form role="form" onSubmit="return login_submit()" action="#login">
								<fieldset id="login_field">
									<div class="row">
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
									<input type="email" name="lemail" id="lemail" class="form-control input-sm floatlabel" placeholder="E-mail address">
											</div>
										</div>
										<div class="col-xs-6 col-sm-6 col-md-6">
											<div class="form-group">
												<input type="password" name="lpassword" id="lpassword" class="form-control input-sm" placeholder="Password">
											</div>
										</div>
									</div>

									<button id="login_submit_btn" type="submit" class="btn btn-success btn-block btn-lg">Login</button>
								</fieldset>
							</form>
						</div>
					</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

    <script>
		$(document).ready(function() {
			if (window.location.hash == "#register") {
				$("#register").modal('show');
			} else if (window.location.hash == "#login") {
				$("#login").modal('show');
			}
			$(window).on('hashchange', function(e) {
				if (window.location.hash == "#register") {
					$("#login").modal('hide');
					$("#register").modal('show');
				} else if (window.location.hash == "#login") {
					$("#register").modal('hide');
					$("#login").modal('show');
				}
			});
			$(".modal").on('hidden.bs.modal', function () {
				window.location.hash = "";
			});
			$("#first_name,#last_name,#remail,#rpassword,#password_confirm").focus(function() {
				$("#register_error").parent().slideUp();
			})
		});
		function register_submit() {
			var firstname = $("#first_name").val();
			var lastname = $("#last_name").val();
			var email = $("#remail").val();
			var password1 = $("#rpassword").val();
			var password2 = $("#password_confirmation").val();
			if (firstname == "") {
				$("#register_error").text("You must enter your first name.").parent().slideDown();
			} else if (lastname == "") {
				$("#register_error").text("You must enter your last name.").parent().slideDown();
			} else if (email == "") {
				$("#register_error").text("You must enter your e-mail address.").parent().slideDown();
			} else if (password1 == "" || password2 == "") {
				$("#register_error").text("You must enter both passwords.").parent().slideDown();
			} else if (password1 != password2) {
				$("#register_error").text("The passwords that you entered do not match.").parent().slideDown();
			} else {
				$("#register_error").text("").parent().slideUp();
				$("#register_submit_btn").html("<i class='fa fa-circle-o-notch fa-spin'></i>");
				$.post("/register", { firstname: firstname, lastname: lastname, email: email, password: password1 }, function(data) {
					$("#register_submit_btn").html("Register").blur();
					switch (data) {
						case 0: // success
							$("#register_field").attr("disabled", true);
							$("#register_success").html("You may now <a href='#login'>login</a>.").parent().slideDown();
							break;
						case 1: // no first name
							$("#register_error").text("You must enter your first name.").parent().slideDown();
							break;
						case 2: // no surname
							$("#register_error").text("You must enter your last name.").parent().slideDown();
							break;
						case 3: // no email
							$("#register_error").text("You must enter your e-mail address.").parent().slideDown();
							break;
						case 3.1: // invalid email
							$("#register_error").text("The e-mail address you entered is invalid.").parent().slideDown();
							break;
						case 4: // no password
							$("#register_error").text("You must enter both passwords.").parent().slideDown();
							break;
						case 5: // email already registered
							$("#register_error").text("The e-mail address that you entered is already registered.").parent().slideDown();
							break;
						case 6: // db error
							$("#register_error").text("An error occured on our end, please try again later.").parent().slideDown();
							break;
					}
				});
			}
			return false;
		}
		function login_submit() {
			var email = $("#lemail").val();
			var password = $("#lpassword").val();
			if (email == "") {
				$("#login_error").text("You must enter an e-mail.").parent().slideDown();
			} else if (password == "") {
				$("#login_error").text("You must enter a password.").parent().slideDown();
			} else {
				$("#login_error").text("").parent().slideUp();
				$("#login_submit_btn").html("<i class='fa fa-circle-o-notch fa-spin'></i>");
				$.post("/login", { email: email, password: password }, function(data) {
					$("#login_submit_btn").html("Register").blur();
					switch (data) {
						case 0: // success
							$("#login_field").attr("disabled", true);
							$("#login_success").html("You are being redirected....").parent().slideDown();
							window.location = "/me";
							break;
						case 1: // no email
							$("#login_error").text("You must enter your e-mail address.").parent().slideDown();
							break;
						case 2: // no password
							$("#login_error").text("You must enter your password.").parent().slideDown();
							break;
						case 3: // no user with email
							$("#login_error").text("No user with the e-mail address that you entered could be found.").parent().slideDown();
							break;
						case 4: // incorrect password
							$("#login_error").text("The password that you entered was incorrect.").parent().slideDown();
							break;
					}
				});
			}
			return false;
		}
	</script>

</html>