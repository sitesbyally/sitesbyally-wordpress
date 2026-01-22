<?php
$bgImage = $attributes['bgImage'] ?? '';
$title = $attributes['title'] ?? '';
?>

<div <?php echo get_block_wrapper_attributes(); ?> 
	style="background: url('<?= $bgImage ?? '' ?>') center/cover no-repeat;"
	>
	<h1 class='hero-section__title'><?= $title ?? '' ?></h1>
</div>

