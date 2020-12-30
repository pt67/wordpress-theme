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
endif; 
?>




<?php get_footer() ?>
