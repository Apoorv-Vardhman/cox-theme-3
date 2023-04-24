<?php
get_header();
?>
<div class="page-banner-wrap bg-cover" >
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="page-heading text-white">
                    <?php
                    $currentCategory = null;
                    $allCategories = get_the_category();
                    if(count($allCategories))
                    {
                        $currentCategory = get_the_category()[0];
                    }
                    ?>
                    <?php
                    if($currentCategory!=null){ ?>
                        <h1><?php echo $currentCategory->cat_name; ?></h1>
                    <?php   }
                    ?>
                </div>
                <?php
                if($currentCategory!=null){ ?>
                    <div class="breadcrumb-wrap">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $currentCategory->cat_name; ?></li>
                            </ol>
                        </nav>
                    </div>
                <?php   }
                ?>

            </div>
        </div>
    </div>
</div>
<main>
    <?php
    if(have_posts() && $currentCategory):
        ?>
        <section class="news-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center">
                        <div class="block-contents">
                            <div class="section-title">
                                <h5><?php echo $currentCategory->cat_name; ?></h5>
                                <span>Our Blog Post</span>
                                <h2><?php echo $currentCategory->cat_name; ?> Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="single-blog-card style-1">
                                <div class="blog-featured-img bg-cover bg-center" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)"></div>
                                <div class="contents">
                                    <div class="post-metabar d-flex justify-content-between align-items-center">
                                        <div class="post-author">
                                            <?php if($avatar = get_avatar(get_the_author_id()) !== FALSE): ?>

                                                <div class="author-img bg-cover bg-center" style="background-image: url(<?php echo $avatar; ?>)">
                                                    <i class="fas fa-user"></i>
                                                </div>

                                            <?php else: ?>
                                                <div class="author-img bg-cover bg-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>'assets/img/blog/author2.jpg')">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            <?php endif; ?>

                                            <a href="#"><?php echo get_the_author(); ?></a>
                                        </div>
                                        <div class="post-date">
                                            <i class="fas fa-calendar-alt"></i>
                                            <a href="#"><?php echo get_the_date(); ?></a>
                                        </div>
                                    </div>
                                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                                    <a href="<?php the_permalink();?>" class="read-more-link">read more</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>

                    <div class="wordpress-pagination">
                        <?php
                        the_posts_pagination();
                        ?>
                    </div>



                </div>
            </div>
        </section>
    <?php
    endif;
    ?>
</main>
<?php
get_footer();
?>
