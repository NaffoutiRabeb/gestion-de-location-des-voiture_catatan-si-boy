<?php get_header(); ?>
<div class="row">
<div class="col-sm-12"> <?php if ( have_posts() ) : while ( have_posts()
) : the_post(); get_template_part( 'content-single', get_post_format() );
endwhile; endif; ?>
</div> <!-- /.col -->
</div> <!-- /.row -->
<?php get_footer(); ?>
<div class="blog-post">
<h2 class="blog-post-title"><?php the_title(); ?></h2>
<p class="blog-post-meta"><?php the_date(); ?> par <a href="#"><?php
the_author(); ?></a></p>
<?php get_contents(); ?>
</div><!-- /.blog-post -->
