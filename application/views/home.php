<?php if($this->session->userdata('instagram-token')) { ?>
	<h1>I am in</h1>
<?php } else { ?>
	<h1>I am not in yet</h1>	 
<?php } ?>
<h1>My view has been loaded</h1>
<?php echo anchor($this->instagram_api->instagramLogin(), 'Please login to instagram'); ?>
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



</section> 