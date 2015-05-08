<?php $i = 0 ?>
<nav>
	<ul>
		<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
			<li><a href="#gallery/<?php echo $i++ ?>"><?php echo thumb($image, array('width' => 100, 'height' => 100)); ?></a></li>
		<?php endforeach ?>
	</ul>
</nav>