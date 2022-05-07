<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container" style="background-color:chocolate ; border:5px solid ;margin-top:80px ; border-radius: 15px">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
		<div class="img_container" style="height:50px ; width:100% ;margin-top:5px " >
			<img src="../product_images/aminlogin.png" alt="xxxxxxxx" style=" width: 100px ;height:100px ; margin-left:100px ; border:5px solid ;border-radius: 80px; margin-top:1% ">

			</div>
			<h4 style="margin-top:60px">Admin Login</h4>
			<p class="message"></p>
			
			<form id="admin-login-form" style="margin-top:10px">

			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_login" value="1">
			  <button type="button" class="btn btn-dark login-btn">Submit</button>
			</form>
			
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
