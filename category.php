<?php get_header(); ?>
<div class="container page-category-wrap">
    <div class="row">
        <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div> 
<?php get_footer(); ?>