<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="post mb-5">
            <p class="mb-0"><?php the_date(); ?></p>
            <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            <p><?php the_content() ?></p>
        </article>
<?php endwhile;

    // Previous/next page navigation.
    echo paginate_links(array(
        'prev_text' => '<span>Previous</span>',
        'next_text' => '<span>Next</span>'
    ));

else :
    echo '<p>There are no posts!</p>';
endif;

get_footer();
?>