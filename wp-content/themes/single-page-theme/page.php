<?php get_header(); ?>
<div class="body-bg">
    <div class="container">
    	<div class="row">
        	<div class="col-xs-12">
                  <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <!-- Right Body Container -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
                    <div class="content-block">
                    	<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">
                        	<header class="article-header">
                            	<h1 class="page-title team-font" itemprop="headline">
                                         <?php the_title(); ?>
                                </h1>
                            </header>
                            <section itemprop="articleBody">
                                <?php if ( has_post_thumbnail() ) { ?>
                                      <?php the_post_thumbnail(array(200,200), array('class'=>'img-thumbnail pull-right margin-left')); ?>
                                <?php } ?>
                                
                                <?php the_content(); ?>
                            </section>
                        </article>
                    </div>			
                <?php endwhile; else: ?>    
                    Sorry, there may have been a problem.
                    <?php get_search_form(); ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
        <div class="row">
            <?php
                $i = 1;
                $cntPerRow = 3;
            ?>
            <?php $page_query = new WP_Query('post_type=page&post_parent='.$post->ID.'&order=ASC&orderby=menu_order'); ?>
            
            <?php while ($page_query->have_posts()) : $page_query->the_post(); ?>
                    <div class="col-xs-12 col-sm-12 col-md-<?php echo 12/$cntPerRow; ?> col-lg-<?php echo 12/$cntPerRow; ?>">
                                <?php if ( has_post_thumbnail() ) { ?>
                                      <?php the_post_thumbnail(array(200,200), array('class'=>'img-thumbnail home-tile')); ?>
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