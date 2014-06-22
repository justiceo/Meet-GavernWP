<?php

/**
 *
 * The default template for displaying content
 *
 **/

global $tpl; 

?>

	<article id="post-<?php the_ID(); ?>" class="member-post">
		      
		
        <!-- project archive begins here -->
		<?php if ( is_search() || is_archive() || is_tag() ) : ?>
       
		<section class="member">
             <?php get_template_part( 'layouts/content.post.featured' ); ?>
            <header>
			    <?php get_template_part( 'layouts/content.post.header' ); ?>
		    </header>
			<?php the_excerpt(); ?>
		</section>

        <section class="hidden" style="display: none;">
            <header>
			    <?php get_template_part( 'layouts/content.post.header' ); ?>
		    </header>
			<?php the_excerpt(); ?>
        </section>

        <!-- single project begins here -->
		<?php else : ?>
		<section class="content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', GKTPLNAME ) ); ?>
			
			<?php gk_post_fields(); ?>
			<?php gk_post_links(); ?>
		</section>
		<?php endif; ?>

        
		
		<?php get_template_part( 'layouts/content.post.footer' ); ?>
	</article>