<div class="col-xl-4 col-md-6 col-12">
    <div class="single-blog-card style-1">
        <div class="blog-featured-img bg-cover bg-center" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)"></div>
        <div class="contents" style="text-overflow: ellipsis;max-height: 500px">
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
            <div style="word-wrap: break-word;max-height: 300px;overflow: hidden;min-height: 250px">
                <?php the_excerpt() ?>
            </div>
            <a href="<?php the_permalink();?>" class="read-more-link">read more</a>
        </div>
    </div>
</div>