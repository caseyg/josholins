<?php $i = 0 ?>
<nav>
	<ul>
		<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
			<li>
				<a href="#gallery/<?php echo $i ?>">
					<figure><?php echo thumb($image, array('width' => 300, 'height' => 300)); ?></figure>
					<p class="metadata">
						No. <?php echo $i++ ?><br>
						<?php echo $image->client() ?><br>
						<?php echo $image->title() ?><br>
						<?php echo $image->year() ?>
					</p>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</nav>