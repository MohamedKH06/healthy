
	<?php
		include '../config/functions.php';
		include 'head.php'; 
		// include '../../config/functions.php';
		
		if (isset($_POST['login'])) {
			$email = @$_POST['email'];
			$password = @$_POST['password'];
		
			$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			$result = $con->query($sql);

			if (mysqli_num_rows($result) == 1) {
				$_SESSION['user'] = $email;
				header('location: index.php');
			} else {
				header("location: login.php?error=Incorrect login information");
			}
		}
		if (isset($_SESSION["user"])) {
			header("Location:index.php");
		}

	?>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper login-body">
			<div class="login-wrapper">
				<div class="container">
			
					<img class="img-fluid logo-dark mb-2" src="../images/logo.png" alt="Logo">
					<div class="loginbox">
						
						<div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<form  method="post" >
								<?php if (isset($_GET['error'])) {
										echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Login Failed!</strong> ' . $_GET['error'] . '
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      	</div>';
                                    } ?>	
									<div class="form-group">
										<label class="form-control-label">Email Address</label>
										<input type="email" class="form-control" name="email" >
									</div>
									<div class="form-group">
										<label class="form-control-label">Password</label>
										<div class="pass-group">
											<input type="password" class="form-control pass-input" name="password" >
											<span class="fas fa-eye toggle-password"></span>	
										</div>
									</div>
									
									<button class="btn btn-lg btn-block btn-primary w-100" type="submit" name="login">Login</button>
									
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Wrapper -->
		
		<?php include 'footerAd.php' ?>
	</body>
