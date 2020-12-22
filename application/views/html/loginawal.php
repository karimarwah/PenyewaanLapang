<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>

				<?=$this->session->flashdata('message')?>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="<?= base_url('awal/loginawal');?>">
					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<small style="color:red"><?= form_error('email');?></small>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<small style="color:red"><?= form_error('pass');?></small>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							<p style="text-decoration-color: white;">Login</a></p>
						</button>
						
					</div>
					<p style="text-align: center;"class="message">Not registered? <a href="<?=base_url('awal/');?>login">Create an account</a></p>
				</form>
			</div>
		</div>
	</div>

</body>
</html>