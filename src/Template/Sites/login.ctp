<section class="main-header" style="margin-bottom: 15px;">
	<section class="row">
		<section class="col-md-4">
			<h2>Bienvenue</h2>
			<em>blabla d'intro sur le site energie</em>
		</section>
		
		<section class="col-md-4"></section>
		<section class="col-md-4">
		<section class="panel panel-default">
			<section class="btn-danger btn-block">
				<h4 class="panel-title text-center">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:white; text-decoration:none;">
						<i class="fa fa-plus-circle" style="position:relative; top:-1px;"></i><i class="fa fa-plus-circle"></i> AJOUTER UN MEMBRE DE LA FAMILLE
					</a>
				</h4>
			</section>
			<section id="collapseOne" class="panel-collapse collapse">
				<section class="panel-body">
					<!--DEBUT FORM-->

					
					
					
				<?= $this->Form->create ('Famille', array('type' => 'post'))?>
									<?= $this->Form->input ('nom') ?>
									<?= $this->Form->input ('prenom')?>
									<?= $this->Form->input ('adress')?>
									<?= $this->Form->input ('phone')?>


									<?= $this->Form->input ('datebirth');?>

									<?= $this->Form->textarea('about')?>
									<?= $this->Form->select(
										'Sexe',
										[0 => 'Homme',1=>  'Femme'],
										['empty' => '(choisissez)'])?>
										
									<?= $this->Form->select(
										'Statut',
										[ 'Garcon/Fille','Pere/Mere', 'Oncle/tente', 'Grand-pere/Grand-mere', 'Grand-oncle/Grand-tente', 'Cousin/Cousine', 'Tuteur/Tutrice'],
										['empty' => '(choisissez)'] )?>
										<?= $this->Form->select(
										'Responsable',
										[0 => 'Oui',1=>  'Non'],
										['empty' => '(choisissez)'])?>
										
									
					
					
				<?= $this->Form->submit('Ajouter');?>	
					
				<?= $this->Form->end ?>		
					
					
				</section>
			</section>
		</section>
			