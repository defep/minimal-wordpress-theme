<?php get_header(); ?>
<?php the_post(); ?>

<div class="row">
    <div class="col-md-12">
        <div id="last-modified"><?php the_date(); ?></div>
        <h2><?php the_title(); ?></h2>
    </div>
</div>
<?php the_content(); ?>

<div class="row pt-4">
    <div class="col">
        <?php
        if (comments_open() || get_comments_number()) {
            comments_template();
        } ?>
    </div>
</div>

<?php
get_footer();
