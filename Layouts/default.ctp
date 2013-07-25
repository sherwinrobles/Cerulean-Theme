<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?php echo __('Croogo'); ?> | <?php echo $title_for_layout; ?></title>
		<?php

		echo $this->Html->css(array(
			'cerulean',
			'cerulean-responsive',
			'/croogo/css/thickbox',
		));
		echo $this->Layout->js();
		echo $this->Html->script(array(
			'/croogo/js/html5',
			'/croogo/js/jquery/jquery.min',
			'/croogo/js/jquery/jquery-ui.min',
			'/croogo/js/jquery/jquery.slug',
			'/croogo/js/jquery/jquery.cookie',
			'/croogo/js/jquery/jquery.hoverIntent.minified',
			'/croogo/js/jquery/superfish',
			'/croogo/js/jquery/supersubs',
			'/croogo/js/jquery/jquery.tipsy',
			'/croogo/js/jquery/jquery.elastic-1.6.1.js',
			'/croogo/js/jquery/thickbox-compressed',

			'/croogo/js/underscore-min',
			'bootstrap.js',
			'theme.js',
		));

		echo $this->fetch('script');
		echo $this->fetch('css');

		?>
	</head>
	<body id="top">
		<div id="wrap">
			<?php echo $this->element('header'); ?>
			<span class="hidden-phone">
				<div id="push"></div>
			</span>
			<div id="content-container" class="container-fluid">
				<div class="row-fluid">
					<div id="content" class="clearfix">
						<?php echo $this->element('admin/breadcrumb'); ?>
						<div id="inner-content" class="span8 well">
							<?php echo $this->Layout->sessionFlash(); ?>
							<?php echo $this->fetch('content'); ?>
						</div>
						<div class="span4 well">
							<?php echo $this->Regions->blocks('right'); ?>
						</div>
					</div>
					&nbsp;
				</div>
			</div>
		</div>
		<div class="container">
			<?php echo $this->element('footer'); ?>
		</div>
		<?php
			echo $this->Blocks->get('scriptBottom');
			echo $this->Js->writeBuffer();
		?>
	</body>
</html>