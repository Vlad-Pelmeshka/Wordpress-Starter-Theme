<?php

$type   		    = get_field('type');

$title   		    = get_field('title');
$description   	    = get_field('description');
$list_of_fields   	= get_field('list_of_fields');


?>
<section class="
	accordion-section
	accordion_<?php echo $type ?>-type"
>

	<div class="wrapper-container">
		
		<?php if($title): ?>

            <h2><?php echo $title ?></h2>
		<?php endif; ?>


		<?php if($description): ?>
            <div class="description"><?php echo $description; ?></div>
		<?php endif; ?>
        
        <?php if($list_of_fields):?>
            <div class="accordion-section-list">
                <?php foreach($list_of_fields as $list_key => $list_item): ?>
                    <div class="accordion-section-list-item">
                    <h3><?php echo $list_item['title']; ?></h3>
                    <div class="content"></div>
                        <?php echo $list_item['content']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
	</div>

</section>