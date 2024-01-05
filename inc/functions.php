<?php

function get_social_shares($class){ 
    $social_share       = get_field('social_share', 'options');

	if(!$social_share)
		return;

	?>
	<div class="<?php echo $class ?>">
			<?php foreach ($social_share as $key => $item):
				if (!empty($item['link']) and !empty($item['icon'])): ?>
					<a href="<?php echo $item['link'] ?>">
						<img src="<?php echo $item['icon'] ?>" alt="<?php echo $item['link'] ?>">
					</a>
				<?php endif;
			endforeach; ?>
		</div>
<?php }