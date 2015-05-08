<?php snippet('header') ?>

<div id="fullpage">
    <div class="section" id="cover" onClick="$.fn.fullpage.moveSectionDown();"><h1>Josh Olins</h1></div>
    <div class="section"><?php snippet('gallery') ?></div>
    <div class="section">
      <div class="slide" data-anchor="information">
		<article>
			<h2>Information</h2>
			<p><?php echo $site->information() ?></p>
		</article>
		<footer style="display:none;">
			<p><?php echo $site->address() ?></p>
			<p><a href="mailto:<?php echo $site->email() ?>"><?php echo $site->email() ?></a></p>
     	</footer>
      </div>
      <div class="slide" data-anchor="index">Index <a href="#gallery/8">Image 8</a></div>      
    </div>
</div>

<?php snippet('footer') ?>