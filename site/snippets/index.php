<?php $i = 0 ?>
<nav>
	<ul>
		<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
			<li><a href="#gallery/<?php echo $i++ ?>"><?php echo thumb($image, array('width' => 300, 'height' => 400, 'crop' => true)); ?></a></li>
		<?php endforeach ?>
	</ul>
</nav>