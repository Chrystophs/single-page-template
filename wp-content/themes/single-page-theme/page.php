<?php get_header(); ?>
<div class="main-bg">
    <div class="container">
    	<div class="row">
        	<div class="col-xs-12">
                  <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
            </div>
        </div>
        <div class="row">
            <?php
                $i = 1;
                $cntPerRow = 3;
            ?>
            <?php $page_query = new WP_Query('post_type=page&post_parent='.$post->ID.'&order=ASC&orderby=menu_order'); ?>
            
            <?php while ($page_query->have_posts()) : $page_query->the_post(); ?>
                    <div class="col-xs-12 col-sm-12 col-md-<?php echo 12/$cntPerRow; ?> col-lg-<?php echo 12/$cntPerRow; ?> center">
                                <?php if ( has_post_thumbnail() ) { ?>
                                      <?php the_post_thumbnail(array(200,200), array('class'=>'')); ?>
                                <?php } ?>
                    </div>  
                    <?php if ($i % 3 == 0) {
                        echo '</div><div class="row">';
                    } else {
                     $i++; 
                     } ?>
        <?php endwhile; ?>
              
        <?php wp_reset_query(); ?> 
    </div>
</div>
<?php get_footer(); ?>