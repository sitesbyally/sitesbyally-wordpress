<?php
$profileImage = $attributes['profileImage'] ?? '';
$name = $attributes['name'] ?? '';
$position = $attributes['position'] ?? '';
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
	<img class='team-member-card__image' src="<?= $profileImage ?? '' ?>" alt=""/>
	<h3 class='team-member-card__name'><?= $name ?? '' ?></h3>
	<p class='team-member-card__position'><?= $position ?? '' ?></p>
</div>

