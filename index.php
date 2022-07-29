<?php get_header(); ?> 
<h1>index.php</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?= get_the_content()?></p>
<?php $lien = "<a class='button' href='" . get_permalink() . "'>". substr(get_the_title(),0,8). "</a>";
echo $lien;?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>