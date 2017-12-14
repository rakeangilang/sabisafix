<?php if(auth()->guard()->guest()): ?>
<!DOCTYPE HTML>
<html>

<?php echo $__env->make('templates.partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">Sabisa Farm</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Administrator Login</h4>
					</div>

					<div class="login-body">
						<form action="<?php echo e(route('login')); ?>" method="post">
    				<?php echo e(csrf_field()); ?>


						<form>
						<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							<input id="email" type="text" class="user" name="email" placeholder="Enter your email" value="<?php echo e(old('email')); ?>" required autofocus>
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
							<?php if($errors->has('email')): ?>
									<span class="help-block">
											<strong><?php echo e($errors->first('email')); ?></strong>
									</span>
							<?php endif; ?>
						</div>

						<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
							<input id="password" type="password" class="lock" name="password" placeholder="password" required>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							<?php if($errors->has('password')): ?>
									<span class="help-block">
											<strong><?php echo e($errors->first('password')); ?></strong>
									</span>
							<?php endif; ?>
						</div>

							<input type="submit" name="Sign In" value="Sign In">
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" <?php echo e(old('remember') ? 'checked' : ''); ?>><i></i>Remember me</label>
								<div class="forgot">
									<a href="<?php echo e(route('password.request')); ?>">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>

				<div class="login-page-bottom">
					<div class="social-btn"></div>
					<div class="social-btn sb-two"></div>
				</div>
			</div>
		</div>

	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</html>
<?php endif; ?>
