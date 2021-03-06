<body>
	<div class="wrapper full-page-wrapper page-auth page-login text-center">
		<div class="inner-page">
			<div class="logo">
				<a href="index.html"><img src="assets/img/kingadmin-logo.png" alt="" /></a>
			</div>
						<div class="separator"><span>OR</span></div>
			<div class="login-box center-block">
				<form class="form-horizontal" method="post" action="/user/add">
					<p class="title">Use your username</p>
					<div class="form-group">
						<label for="username" class="control-label sr-only">Username</label>
						<div class="col-sm-12">
							<div class="input-group">
								<input type="text" placeholder="username" id="username" class="form-control">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
							</div>
						</div>
					</div>
					<label for="password" class="control-label sr-only">Password</label>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="input-group">
								<input type="password" placeholder="password" id="password" class="form-control">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							</div>
						</div>
					</div>
					<label class="fancy-checkbox">
						<input type="checkbox">
						<span>Remember me next time</span>
					</label>
					<button class="btn btn-custom-primary btn-lg btn-block btn-auth"><i class="fa fa-arrow-circle-o-right"></i> Login</button>
				</form>
				<div class="links">
					<p><a href="#">Forgot Username or Password?</a></p>
					<p><a href="#">Create New Account</a></p>
					
					
					
					
					
					<div id="collapseOne" class="panel-collapse collapse">
									<div class="panel-body">
										<!--DEBUT FORM-->
										<?= $this->Form->create('Formulaire', array('type'=>'post'))?>
										<?= $this->Form->input('nom_event',array(	'type'=>'text',
																			'label'=>False,
																			'class'=>'form-control',
																			'style'=>'margin-bottom:5px;',
																			'placeholder'=>'titre du nouvel évènement')) ?>
										
										<div class="col-sm-6" style="padding:0 2px 0 0;">
											<?= $this->Form->input('debut_jjmm',array(	'type'=>'text',
																				'label'=>False,
																				'class'=>'form-control',
																				'style'=>'margin-bottom:5px;',
																				'placeholder'=>'date début (jj/mm)')) ?>
											<?= $this->Form->input('debut_hhmm',array(	'type'=>'text',
																				'label'=>False,
																				'class'=>'form-control',
																				'style'=>'margin-bottom:5px;',
																				'placeholder'=>'heure début (hh:mm)')) ?>
										</div>
										<div class="col-sm-6" style="padding:0 0 0 2px;">
											<?= $this->Form->input('fin_jjmm',array('type'=>'text',
																					'label'=>False,
																					'class'=>'form-control',
																					'style'=>'margin-bottom:5px;',
																					'placeholder'=>'date fin (jj/mm)')) ?>
											<?= $this->Form->input('fin_hhmm',array('type'=>'text',
																					'label'=>False,
																					'class'=>'form-control',
																					'style'=>'margin-bottom:5px;',
																					'placeholder'=>'heure fin (hh:mm)')) ?>
										</div>
										
										
										<!--FIN FORM-->
									</div>
								</div>
					
					
				</div>
			</div>
		</div>
					
					
					
					
					
			
</body>


