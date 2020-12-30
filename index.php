<?php get_header(); ?>
<div class="p-5 container">


 <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
  
        <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
?>

    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>
     <p>  <?php the_content(); ?></p>

<?php
    endwhile; 
endif; 
?>
  
        </main><!-- .site-main -->
    </div><!-- .content-area -->

</div>
<?php get_footer();  ?>
