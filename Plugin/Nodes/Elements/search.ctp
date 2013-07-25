<?php
	$b = $block['Block'];
	$class = 'block block-' . $b['alias'];
	if ($block['Block']['class'] != null) {
		$class .= ' ' . $b['class'];
	}
?>
<div id="block-<?php echo $b['id']; ?>" class="<?php echo $class; ?>">
<?php if ($b['show_title'] == 1) { ?>
	<h3><?php echo $b['title']; ?></h3>
<?php } ?>
	<div class="block-body">
		<form id="searchform" method="post" action="javascript: document.location.href=''+Croogo.basePath+'search/q:'+encodeURI($('#searchform #q').val());" class="form-search">
		<?php
			$qValue = null;
			if (isset($this->params['named']['q'])) {
				$qValue = $this->params['named']['q'];
			}

			$out = $this->Form->input('q', array(
				'label' => false,
				'name' => 'q',
				'value' => $qValue,
				'class' => 'input-medium search-query',
				'placeholder' => __('Search'),
				'div' => 'input-append',
				'tooltip' => array(
					'data-title' => __('Search'),
					'data-placement' => 'left',
				),
				'after' => $this->Form->button('Search', array(
					'class' => 'btn btn-primary',
				))
			));

			echo $this->Html->div(false, $out);
		?>
		</form>
	</div>
</div>