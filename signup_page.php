<!DOCTYPE html>
<html>
<head>
	<title>Ngopi.In | Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Ngopiin">
	<meta name="keyword" content="Ngopiin, Ngopiin, Ngopi.In">
	<meta name="author" content="WEBSITE, WEBSITE">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/jpg" href="asset/img/coffe.jpg">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Menu Desktop -->
	      <nav class="navbar navbar-inverse">
	        <div class="container">
	          <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=#NavBarSignUP>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
	          </div>
	          <div class="collapse navbar-collapse" id="NavBarSignUP">
	            <form id="navbar-search" class="navbar-form navbar-left" action="/action_page.php">
	              <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Search..." name="search">
	              </div>
	            </form>
	            <ul class="nav navbar-nav navbar-right">
	              <li class="glyphiconHome"><a href="index.html"><span class="glyphicon glyphicon-home" value="Home"></span></a></li>
								<li class="textHome"><a href="index2.html">Home</a></li>
	              <li><a href="#">EVENTS</a></li>
	              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT <span class="caret"></span></a>
	                <ul id="account-dropdown" class="dropdown-menu">
	                  <li><a href="signup.html"><i class="glyphicon glyphicon-user"></i> Sign Up</a></li>
	                  <li><a href="#" data-toggle="modal" data-target="#myLogin"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
	                </ul>
	              </li> 
	            </ul>
	          </div>
	        </div>
	      </nav>

	<div class="container">
		<div id="myRegisterForm">
			<h1>Sign Up</h1>
			<p>Please fill in this form to create an account.</p>

			<form action="ngopi.php" method="post" role="form">
				<!-- Form Group -->
				<div id="fullName" class="signupForm form-group">
					<!-- Name -->
					<i class="glyphicon glyphicon-font"></i>
					<input type="text" name="fname" placeholder="First Name" required>
					<input type="text" name="lname" placeholder="Last Name" required>
				</div>
				<div class="signupForm form-group">
					<i class="glyphicon glyphicon-envelope icon"></i>
					<input type="email" name="email" placeholder="Your Email Address" required>
				</div>
				<div class="signupForm form-group">
					<!-- UserName -->
					<i class="glyphicon glyphicon-user icon"></i>
					<input type="text" id="userName" name="username" placeholder="Create a User Name" required>
				</div>
				<div class="signupForm form-group">
					<i class="glyphicon glyphicon-lock icon"></i>
					<input type="password" name="password" placeholder="Create a Password.." required>
				</div>
				<div class="signupForm form-group">
					<i class="glyphicon glyphicon icon"></i>
					<input type="password" name="password_" placeholder="Confirm your Password.." required>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="">By creating an account you agree to our <a href="#">Terms & Privacy</a></label>
				</div>

				<input type="submit" value="Daftar" class="btn btn-danger">
				<br>
			</form>
		</div>
	</div>

	<!-- <div style="height: 500px;"></div> -->

	<footer class="text-center">
		<p>WEBSITE - <span>Ngopi.In</span>
			<br>Copy Right &copy; 2019</p>
	</footer>



	<script></script>
</body>
</html>
