
<?php
require_once './header.php';

require_once './nav.php';

require_once './blogData.php';
?>
<main class="main">
	<?php if (empty($_GET['pid'])): ?>
		
	<h1>Blog page</h1>
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur magni quo harum, minima eligendi animi repellendus commodi sit ipsam recusandae sequi amet vel earum dolorem. Voluptas necessitatibus culpa vel odio?</p>

	<div class="photos_list">
		<?php if (!empty($blogData)):
			foreach ($blogData as $id => $photo): ?>

		<div class="photo">
			<h3><a href="/blog.php?pid=<?php echo $id; ?>"><?php echo $photo['name']; ?></a></h3>
			<div class="image"><img src="<?php echo $photo['image']; ?>" alt="#"></div>
			<div class="year_photo"><?php echo $photo['year_photo']; ?></div>
		</div>

		<?php endforeach;
			endif; ?>
	</div>
	
	<?php else: require_once './photo.php'; endif; ?>

</main>






<?php
require_once './footer.php';