<?php
session_start();


include("../Assets/Connection/Connection.php");
if (isset($_POST['btn_submit'])) {

	$gmail = $_POST['txt_gmail'];
	$password = $_POST['txt_password'];
	$selTrader = "select * from tbl_trader where trader_email='" . $gmail . "' and trader_password=" . $password . " and trader_v_status= 1";
	$selAdmin = "select * from tbl_admin where admin_email='" . $gmail . "' and admin_password=" . $password;
	$selcompany = "select * from tbl_company where company_email='" . $gmail . "' and company_password=" . $password . " and company_v_status= 1";
	$res1 = $conn->query($selTrader);
	$res2 = $conn->query($selAdmin);
	$res3 = $conn->query($selcompany);
	if ($res1->num_rows > 0) {
		$row = $res1->fetch_assoc();
		$_SESSION['tid'] = $row['trader_id'];
		header("location:../Trader/Home.php");
	} else if ($res2->num_rows > 0) {
		$row = $res2->fetch_assoc();
		$_SESSION['aid'] = $row['admin_id'];
		header("location:../Admin/Home.php");
	} else if ($res3->num_rows > 0) {
		$row = $res3->fetch_assoc();
		$_SESSION['cid'] = $row['company_id'];
		header("location:../Company/Home.php");
	} {
		?>
		<script>
			alert("INVALID LOGIN");
		</script>
		<?php
	}

}
?>


<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
	<style>
		.hlogo {
			font-size: 80px;
			font-weight: 900;
			color: #2a2a2a;
			line-height: 72px;
			font-family: "Audiowide", sans-serif;
		}

		.hlogo>span {
			color: #ff695f;
		}

		.logo {
			margin-top: 15px;
		}
		.h4logo {
			font-size: 30px;
			font-weight: 700;
			color: #2a2a2a;
			font-family: "Audiowide", sans-serif;
			margin-left: 20px;
		}

		.h4logo>span {
			color: #ff695f;
		
		}
		.bgimg {
			background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkkf9KwSX7eP7Qk6KFzRb7kwrWxZTNHnsA2Q&usqp=CAU');
			background-repeat:  repeat;

		}
		.blur-bg {
			background-color:  rgba(0, 0, 0, 0.5); ;
		}
		
	</style>
	<title>Login</title>
</head>

<body>

	<section class="vh-150 bgimg">
		<div class="blur-bg">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-xl-10">
					<div class="card" style="border-radius: 1rem;">
						<div class="row g-0">
							<div class="col-md-6 col-lg-5 d-none d-md-block">
								<div  style="border:none;margin:10px;height:300px;display:flex;justify-content: space-around;
    	align-items: center;">
								
										<div class="logo">
											<div class="item header-text">
												<h2 class="hlogo">C<span>A</span>M<span>S</span></h2>
											</div>
										</div>
										
									
								</div>
								<div  style="margin:15px;">
								<!-- <h2 class="card-title">Welcome</h2> -->
										<h5 class="h4logo"style="text-align:center;"><span>C</span>ardamom  A<span>uction</span> <span>M</span>anage S<span>ystem</span></h3>
										</div>

								<!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
				alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" /> -->
							</div>
							<div class="col-md-6 col-lg-7 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">

									<form method="post">

										<div class="d-flex align-items-center mb-3 pb-1">
											<i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
											<span class="h1 fw-bold mb-0" style="font-family: 'Audiowide', sans-serif;">Welcome</span>
										</div>

										<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
											account</h5>

										<div class="form-outline mb-4">
											<input type="email" name="txt_gmail" id="txt_gmail"
												class="form-control form-control-lg" required  autocomplete="off"/>
											<label class="form-label" for="form2Example17">Email address</label>
										</div>

										<div class="form-outline mb-4">
											<input type="password" name="txt_password" id="txt_password"
												class="form-control form-control-lg" required />
											<label class="form-label" for="form2Example27">Password</label>
										</div>

										<div class="pt-1 mb-4">
											<input class="btn btn-dark btn-lg btn-block" type="submit" name="btn_submit"
												id="btn_submit" value="Login" />
										</div>

										<h6 style="font-color:blue;"><a style="text-decoration:none;"  href="../">Go Back?.</a></h6>
										<p class="mb-5 pb-lg-2" style="color: #393f81;"></p>
										<a href="#!" class="small text-muted">Terms of use.</a>
										<a href="#!" class="small text-muted">Privacy policy</a>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	crossorigin="anonymous"></script>

</html>