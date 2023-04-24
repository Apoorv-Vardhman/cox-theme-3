<?php get_header(); ?>
<div class="page-banner-wrap bg-cover" >
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="page-heading text-white">
                    <h2 style='font-weight:bold;color:#000'>Search Results for: <?php echo get_query_var('s') ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<main>
    <section class="blog-wrapper news-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts">
                        <?php
                        $s=get_search_query();
                        $args = array(
                            's' =>$s
                        );
                        // The Query
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) {
                            //_e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                ?>
                                <?php
                                $images = wp_get_attachment_image_src(get_post_thumbnail_id());
                                ?>
                                <div class="single-blog-post">
                                    <div class="post-featured-thumb bg-cover" style="background-image: url(<?php echo $images[0] ?>)"></div>
                                    <div class="post-content">
                                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a> </h2>
                                        <div class="post-meta">
                                            <span><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></span>
                                        </div>
                                        <?php  the_excerpt(); ?>
                                        <div class="d-flex justify-content-between align-items-center mt-30">
                                            <div class="author-info">
                                                <div class="author-img d-flex justify-content-center align-items-center">
                                                    <i class="fas fa-user-alt"></i>
                                                </div>
                                                <h5><a href="#"><?php echo get_the_author(); ?></a></h5>
                                            </div>
                                            <div class="post-link">
                                                <a href="<?php the_permalink() ?>"><i class="fal fa-arrow-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }?>
                            <div class="wordpress-pagination">
                                <?php
                                the_posts_pagination();
                                ?>
                            </div>
                        <?php }else{
                            ?>
                            <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                            <div class="alert alert-info">
                                <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search_widget">
                                <?php
                                get_search_form( );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
