<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<a href="#" class="active" id="login-form-link">Login</a>
						</div>
						<div class="col-xs-6">
							<a href="#" id="register-form-link">Register</a>
						</div>
					</div>
					<hr>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<?php echo $this->Form->create('User', 
															array(
																'url' => array(
																		'controller' => 'login',
																		'action' => 'index',
																		'id' => 'login-form'
																),
																'id' => 'login-form'
															)); 
							?>
								<?php
									echo $this->Form->inputs(array(
										'legend' => __(''),
										'email' => array(
											'autofocus' => 'autofocus',
											'label' => false,
											'required' => false,
											'div' => array('class' => 'form-group'),
											'class' => 'form-control',
											'placeholder' => 'Username'
										),
										'password' => array(
											'label' => false,
											'required' => false,
											'div' => array('class' => 'form-group'),
											'class' => 'form-control',
											'placeholder' => 'Password'
										),
										'LOG IN' => array(
											'label' => false,
											'type' => 'submit',
											'name' => 'login',
											'div' => array('class' => 'form-group'),
											'class' => 'form-control btn btn-success'
										)
									));
								?>
							<?php echo $this->Form->end(); ?>
							<form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
								<div class="form-group">
									<input type="email" name="username" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
											<div class="text-center">
												<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Register</a>
											</div>
										</div>
									</div>
								</div>
							</form>
							<form id="register-form" action="https://phpoll.com/register/process" method="post" role="form" style="display: none;">
								<div class="form-group">
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
								</div>
								<div class="form-group">
									<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<div class="form-group">
									<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>