<style type="text/css">
	.main div {
		float: left;
		width: 100%;
	}
</style>

<div>
	<h1>Listing questions</h1>
</div>

<div>
	<ol>
		{questions}
			<li>{subject}</li>
		{/questions}
	</ol>
</div>
	
<div>
	<p style="color: green;">
		Page rendered in <strong>{elapsed_time}</strong> seconds.
		<?php if (ENVIRONMENT === 'development'): ?>
			CodeIgniter Version <strong><?php echo CI_VERSION; ?></strong>
		<?php endif; ?>
	</p>
</div>
