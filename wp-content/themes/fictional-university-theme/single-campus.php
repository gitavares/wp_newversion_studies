<?php 

    get_header();

    while(have_posts()) {
       the_post();
       pageBanner(); ?> 
        
        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('campus'); ?>"><i class="fa fa-home" aria-hidden="true"></i> All Campuses</a> <span class="metabox__main"><?php the_title(); ?></span></p>
            </div>
            <div class="generic-content">
                <?php the_content();?>
            </div>

            <?php
                $mapLocation = get_field('map_location');
            ?>

            <div class="acf-map">
                <div data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng']; ?>" class="marker">
                    <h3><?php the_title(); ?></h3>
                    <?php echo $mapLocation['address']?>
                </div>
            </div>

            <?php 

            $homepagePrograms = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'program',
                'orderby' => 'title',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'related_campus',
                        'compare' => 'LIKE',
                        'value' => '"'.get_the_ID().'"'
                    )
                )
            ));

            if($homepagePrograms->have_posts()) {
                echo '<hr class="section-break">';
                echo '<h2 class="headline headline--medium">Programs Available at this Campus</h2>';

                echo '<ul class="min-list link-list">';
                while($homepagePrograms->have_posts()) {
                    $homepagePrograms->the_post(); ?>
                
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                
                <?php }
                echo '</ul>';
            }

            wp_reset_postdata(); //reset the data to the base page
            ?>
        </div>


    <?php } 

    get_footer();

?>