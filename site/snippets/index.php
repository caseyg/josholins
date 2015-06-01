<?php $i = 0 ?>
<nav>
	<ul>
		<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
			<li>
				<a href="#gallery/<?php echo $i ?>">
					<figure style="background-image:url(<?php echo thumb($image, array('width' => 300, 'height' => 350))->url(); ?>);"><img src="/assets/images/spacer.png"></figure>
					<p class="metadata">
						<?php $i++ ?>
						No. <?php echo $i ?><br>
						<?php echo $image->client() ?><br>
						<?php echo $image->title() ?><br>
						<?php echo $image->year() ?>
					</p>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</nav>