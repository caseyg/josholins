	<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
		<div class="slide">
			<img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
		</div>
	<?php endforeach ?>
