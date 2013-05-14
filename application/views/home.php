<h2><?php echo ucfirst($user_data->data->username); ?> has</h2>
<section id="main">
	<div id="container">
		<?php foreach($rows as $r) : ?>
		<article id="post-">
			<h1><?php echo $r->title; ?></h1>
			<p><?php echo $r->content; ?></p>
			<pre></pre>
		</article>
		<?php endforeach ?>
	</div>
</section>