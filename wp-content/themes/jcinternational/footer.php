<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
       <!-- section -->
    <section class="">
        <div id="newsSocial">
            <div class="container">
                <div class="section0 borderTop">
                   <div class="row">
                       <div class="col-sm-9">
                           <div class="sectionHdr">
                          
                                <h3><?php the_field('subscription_form_title','options') ?><small class="txt-16"><?php the_field('subscription_form_sub_title','options') ?></small></h3>
                            </div>
                            <?php dynamic_sidebar('email_subscription'); ?>
                             <?php //es_subbox( $namefield = "YES", $desc = "", $group = "Public" ); ?>
                        </div>
                       
                       <div class="col-sm-3">
                           <div class="sectionHdr">
                                <h3>Find us on Social media</h3>
                            </div>
                            <div class="sectionInfo">
                                <ul class="findSocials">
                                    <?php if(have_rows('social','options')): while(have_rows('social','options')): the_row(); ?>
                                    <?php if(get_sub_field('link')): ?><li><a href="<?php the_sub_field('link'); ?>" target="_blank"><img src="<?php the_sub_field('icon'); ?>" alt=""></a></li><?php endif; ?>

                                    <?php endwhile; endif; ?>    
                                </ul>
                            </div>
                       </div>
                       
                   </div>
                    
               </div>
            </div>
        </div>
                  
    </section>

	<footer>
        <div class="container">
            <div class="footerInner">
                <div class="footer1">
                    <div class="footer1Hdr">
                        <div class="row">
	                        <div class="col-sm-5 visible-xs">
	                            <div class="lControl">
	                               <div class="row">
	                                   <div class="col-sm-6">
	                                        <p class="txt-16">Choose Your Language</p>
	                                   </div>
	                                   <div class="col-sm-6 ">
                                       		<?php dynamic_sidebar('language_switch_footer'); ?>
	                                   </div>
	                               </div>
	                               
	                            </div>
	                        </div>
	                        
	                        <div class="col-sm-7">
	                             <h3>Helpful Information</h3>  
	                        </div>
	                        <div class="col-sm-5 hidden-xs">
	                            <div class="lControl">
	                               <div class="row">
	                                   <div class="col-sm-6">
	                                        <p class="txt-16">Choose Your Language</p>
	                                   </div>
	                                   <div class="col-sm-6 ">
	                                        <?php dynamic_sidebar('language_switch_footer'); ?>
	                                   </div>
	                               </div>
	                               
	                            </div>
	                        </div>
                         
                        </div>
                        
                        
                    </div>
                    
                    <div class="footer1Info">
                      <div class="row">

                      	  <?php dynamic_sidebar('footer_1'); ?>
                      	  <?php dynamic_sidebar('footer_2'); ?>
                      	  <?php dynamic_sidebar('footer_3'); ?>
                      	  <?php dynamic_sidebar('footer_4'); ?>
                          
                      </div>
                    </div>
                </div>
                <div class="footer2">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="footerLogo">
                                <a href="<?php bloginfo('home'); ?>"><img src="<?php the_field('footer_logo','options'); ?>" alt=""></a>
                                <span>&copy; <?php echo date('Y'); ?></span>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-4">
                        	<?php dynamic_sidebar('footer_5'); //echo ICL_LANGUAGE_CODE; ?>
                            
                        </div>
                        
                         <div class="col-sm-6 col-md-2">
                            <div class="footerMenu pull-right">
                                <ul>
                                    
                                    <li><a href="#header"><?php _e('Back to top'); ?> <img class="topArrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/iconUpward.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / FOOTER -->
    
    </div>
    <!-- / WRAPPER -->
    
    
    <!-- script -->
      
    

<?php wp_footer(); ?>
    <script type="text/javascript">
        
        var curLanguage = '<?php echo ICL_LANGUAGE_CODE; ?>';
    </script>
   

    
    

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/owl.carousel/owl.carousel.min.js"></script>
    <script src="https://momentjs.com/downloads/moment.js"> </script>
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/date.picker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui-1.11.1.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.multidatespicker.js"></script>

    <script>
        jQuery(function () {
            jQuery('.openSearch').on('click', function(e){
                e.preventDefault();
                console.log("clicked");
                jQuery(this).next('.innerSearch').toggle();
            });
            
            jQuery('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false,
                        dots:true
                    },
                    768:{
                        items:2,
                        nav:false,
                        dots:true
                    },
                     1000:{
                        items:3,
                        nav:false,
                        dots:true
                    },
                    1200:{
                        items:4,
                        nav:false,
                        loop:false,
                        dots:true
                    }
                }
            })
        });    
    </script>
    
    <script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (jQuery(a).attr("data-value").toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
        
        
        
        
function myFunction2() {
    console.log("calling");
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput2");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL2");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (jQuery(a).attr("data-value").toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}        
        
</script>
<script type="text/javascript">
      
      jQuery(".belowMenuDropDown > li").addClass("col-md-3");
</script>
     
</body>
</html>