<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div id="aboutPage">
        <div class="container">
           <div class="row">
               <div class="col-sm-8">
               <section class="section0">
                <div id="aboutLt">
                  
                        <div class="sectionHdr">
                           <a href="#" onclick="history.go(-1);return false;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/back-icon.png" alt=""> <?php _e("Back"); ?></a>
                            <h1 class="txt-2e3"><?php
								if ( is_single() ) :
									the_title( '<h1 class="entry-title">', '</h1>' );
								else :
									the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
								endif;
							?></h1>
                            <hr>
                        </div>

                        <div class="sectionInfo">
                        <div class="aboutImg">
                        <?php 
                        twentyfifteen_post_thumbnail(); ?>
                        </div>
                        <?php
                        the_content();
                        ?>

                            
                        </div>
                    </div>              
                </section>
               </div>
               
               <div class="col-sm-4">
                  <div class="sideBar">
                      <div class="widget nopadding">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/airImage.png" class="img-responsive" />
                      </div>
                      <div class="widget lightGray">
                         <h3 class="wifiIcon"><span>Our in-flight WiFi</span></h3>
                          <p>Being in the air shouldn’t mean being out of touch. Or bored. Or behind. Fly with us and go online in the air. Free WiFi is available on most of our flights </p>
                          <h6><a href="#" class="readMore">How to use our in-flight WiFi</a></h6>
                      </div>
                      <div class="widget lightGray">
                          <h3 class="entertainment"><span>In-flight entertainment</span></h3>
                          <p>Fly with us, and you’ll have entertainment at your fingertips at any time, either with Video On Demand or live TV.</p>
                          <h6><a href="#" class="readMore">Find out more</a></h6>
                      </div>
                      <div class="widget lightGray">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-space-dummy.png" class="img-responsive" />
                      </div>
                  </div>                   
               </div>
               
           </div>

        </div>
    </div>








	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			/*the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );*/
		?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		/*if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;*/
	?>

	<footer class="entry-footer">
		<?php/* twentyfifteen_entry_meta();*/ ?>
		<?php /*edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' );*/ ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
