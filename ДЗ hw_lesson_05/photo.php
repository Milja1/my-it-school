<?php if (!empty($_GET['pid']) &&  !empty($blogData)): 
$photo = $blogData	[$_GET['pid']];?>


<h1><?php echo $photo['name']; ?></a></h1>
<div class="image"><img src="<?php echo $photo['image']; ?>" alt="#"></div>
<div class="year_photo"><?php echo '<br>Съемка произведена в ' . $photo['year_photo'] ; ?></div>
<div class="content"><?php echo '<br>' . $photo['content']; ?></div>


<?php endif; ?>