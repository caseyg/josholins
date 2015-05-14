<?php snippet('header') ?>

<div id="fullpage">
    <div class="section" id="cover" onClick="$.fn.fullpage.moveSectionDown();"><h1>Josh Olins</h1></div>
    <div class="section">
      <?php snippet('gallery') ?>
      <p class="count"><span id="slide-current">0</span> of <span id="slide-total"><?php echo $page->files()->count(); ?></span></p>
    </div>
    <div class="section no-nav">
      <div class="slide" data-anchor="information">
    		<article class="sweet-justice">
    			<h2>Information</h2>
    			<p><?php echo $site->information() ?></p>
    		</article>
    		<footer style="display:none;">
    			<p><?php echo $site->address() ?></p>
    			<p><a href="mailto:<?php echo $site->email() ?>"><?php echo $site->email() ?></a></p>
       	</footer>
      </div>
      <div class="slide" data-anchor="index">
        <?php snippet('index') ?>
      </div>      
  </div>
</div>

<?php snippet('footer') ?>