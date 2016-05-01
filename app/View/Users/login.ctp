<style>
	.btn-link-1{
		width: 100%;
	}
</style>
<div class="col-sm-4">
	<div class="form-box">
		<div class="form-top">
			<div class="form-top-left">
				<h3>Login to our site</h3>
				<p>Enter email and password:</p>
			</div>
			<div class="form-top-right">
				<i class="fa fa-key"></i>
			</div>
		</div>
		<div class="form-bottom">
			<!-- <form role="form" action="" method="post" class="login-form"> -->
			<?php echo $this->form->create('User', array('id'=>'login', 'role'=>'form', 'method'=>'post', 'class'=>'form-signin')); ?>
			<div class="form-group">
				<label class="sr-only" for="form-username">Email</label>
				<!-- <input type="email" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username"> -->
				<?php echo $this->form->input('email', array('label'=> false, 'type'=>'email', 'class'=>'form-username form-control', 'placeholder'=>'Email...')); ?>
			</div>
			<div class="form-group">
				<label class="sr-only" for="form-password">Password</label>
				<!-- <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password"> -->
				<?php echo $this->form->input('password', array('label'=> false, 'type'=>'password', 'class'=>'form-password form-control', 'placeholder'=>'Password...')); ?>
			</div>
			<!-- <button type="submit" class="btn">Sign in!</button> -->
			<div class="form-group">
				<?php echo $this->form->button('Login', array('type'=>'submit','class'=>'btn')); ?>
			</div>

			<!-- Login with FB and Google -->
			<div class="form-group">
				<a class="btn btn-link-1 btn-link-1-google-plus" href="<?php echo BASE_PATH.'googlelogin'; ?>">
					<i class="fa fa-google-plus"></i> Lognin with Google
				</a>
				<!-- <a class="btn btn-link-1 btn-link-1-facebook" href="<?php echo BASE_PATH.'fblogin'; ?>">
					<i class="fa fa-facebook"></i> Facebook
				</a> -->
			</div>
			<!-- </form> -->
			<?php echo $this->Form->end(); ?>
		</div>
		<div class="form-footer">
			<div class="row">
				<div class="col-sm-7">
					<i class="fa fa-lock"></i>
					<a href="<?php echo BASE_PATH.'users/forgotPassword'; ?>"> Forgot password? </a>

				</div>

				<div class="col-sm-5">
					<i class="fa fa-check"></i>
					<a href="<?php echo BASE_PATH.'users/register'; ?>"> Register </a>
				</div>
			</div>
		</div>
		
	</div>
</div>
