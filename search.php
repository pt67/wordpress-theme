<?php get_header();  ?>        




<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 

?>
<div class="p-5 container">

<a href="<?php the_permalink(); ?>"> <?php the_title( '<p>', '</p>' ); ?> </a>
</div>
<?php        

    endwhile; 
?>

<?php else: ?>
<div class="container">
<h3>No result found.</h3>
</div>
<?php
endif; 
?>




<?php get_footer() ?>
