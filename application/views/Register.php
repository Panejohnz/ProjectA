<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  
  
      <style>

@import url("https://fonts.googleapis.com/css?family=Luckiest+Guy");
/* BODY */
body {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background-color: skyblue;
  background-image: -webkit-linear-gradient(90deg, skyblue 0%, steelblue 100%);
  background-attachment: fixed;
  background-size: 100% 100%;
  overflow: hidden;
  -webkit-font-smoothing: antialiased;
}
</style>
</head>
		
		<div class="wrapper" style="background-image: url('');">
			<div class="inner">
				<div class="image-holder">
					<img src="<?php echo base_url(); ?>./assets/images/man-156836_960_720.png" alt="">
					</div>
				<form method="post" action=<?php echo base_url('index.php/RegisController/Register') ?>>
					<h3>สมัครสมาชิก</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" name="firstname" required class="form-control">
						<input type="text" placeholder="Last Name" name="lastname" required class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" name="username" required class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="email" placeholder="Email Address"name="email"  required class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" required class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" required class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password1" placeholder="Confirm Password" required class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="input-group">
						<button type="submit" name="register" class="btn">Register</button>
				</form>
			</div>
		</div>
