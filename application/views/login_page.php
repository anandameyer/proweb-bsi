<div class="container">
	<div class="row">
	<hr>
		<div class="col-md-4 col-sm-offset-4">

					<div class="form">
						<form method="POST" action="<?php echo site_url('Login/user_login');?>">
						<div class="form-group">
							<label><span>Username</span></label>
							<input class="form-control" type="text" name="username" placeholder="Username" required>
						</div>
						<div class="form-group">
							<label><span>Password</span></label>
							<input class="form-control" type="password" name="password" placeholder="Password" required>
						</div>
						<div class="form-group">
							<button class="btn btn-primary" type="submit" name="submit">Login</button>
						</div>
						</form>
					</div>
		</div>
	</div>
	<hr>
</div>