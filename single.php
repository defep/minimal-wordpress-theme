<?php get_header(); ?>
<?php the_post(); ?>
<div id="last-modified">Updated: <?php the_modified_time('F j, Y'); ?> </div>
<h2 class="mb-4"><a class="covert-link" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>

<div class="row pt-4">
    <div class="col">
        <?php comments_template(); ?>
    </div>
</div>

<?php get_footer(); ?>