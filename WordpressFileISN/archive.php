<?php get_header(); ?>


    <div class="site_blog">
    <main class="site_content">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post">
        <h3><?php the_title(); ?></h3>

        <?php the_post_thumbnail(); ?>

        <p class="post_meta">
            Publié le <?php the_time( get_option( 'date_format' ) ); ?>
            par <?php the_author(); ?> • <?php comments_number(); ?>
        </p>

        <?php the_excerpt(); ?>

        <p>
            <a href="<?php the_permalink(); ?>" class="post_link">Lire la suite</a>
        </p>
    </article>
    </main>
    <aside class="site_sidebar">
        <ul>
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        </ul>
    </aside>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>