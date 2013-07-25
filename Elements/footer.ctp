<hr/>
<footer id="footer">
	<p class="pull-right">
		<a href="#top">Back to top</a>
	</p>
	
	Powered by <?php echo $this->Html->link(__('Croogo %s', strval(Configure::read('Croogo.version'))),
												'http://www.croogo.org',
												array('target' => '_blank')
											); ?>
	<?php echo $this->Html->image('http://assets.croogo.org/powered_by.png'); ?>

	Theme: <?php echo $this->Html->link('Cerulean', 
										'http://github.com/sherwinrobles/Cerulean-Theme',
										array('target' => '_blank')
										); ?>

</footer>