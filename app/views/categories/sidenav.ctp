<ul class="menu">
	<?php foreach($items as $key => $value): ?>
	<li>
		<a href="#"><?php echo $key; ?></a>
		<ul class="menu">
			<?php foreach($value as $k => $v): ?>
			<li><a href="#"><?php echo $k; ?></a>
				<ul>
					<?php foreach($v as $unit): ?>
					<li><?php echo $html->link($unit['Category']['name'], '/products/view/' . $unit['Category']['reference_number']); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</li>
			<?php endforeach; ?>
		</ul>
	</li>
	<?php endforeach; ?>
</ul>
<script type="text/javascript">
	function initMenu() {
		$('.menu ul').hide();
		$('.menu li a').click(function() {
			$(this).next().slideToggle('normal');
		});
	}
	initMenu();
</script>
