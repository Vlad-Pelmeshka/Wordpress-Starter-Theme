<?php

$type   		    = get_field('type');

$list_of_fields   	= get_field('list_of_fields');


?>
<section class="
	slider-section
	slider_<?php echo $type ?>-type"
>

	<div class="wrapper-container">
        
        <?php if($list_of_fields):?>
            <div class="slider-section-list">
                <?php foreach($list_of_fields as $list_key => $list_item): ?>
                    <div class="slider-section-list-item">
                        <img src="<?php echo $list_item['image']; ?>" alt="Slider Image">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
	</div>

</section>