<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		// echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
		echo $this->Html->css('style');
		if ($this->params['controller'] == "login") {
			echo $this->Html->css('login');
		}


		echo $this->Html->script('jquery-3.1.1');
		echo $this->Html->script('script');

	?>
</head>
<body>
	<div id="container">
		<?php echo $this->element('header1'); ?>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
			<p>
				
			</p>
		</div>
	</div>
	
</body>
</html>
