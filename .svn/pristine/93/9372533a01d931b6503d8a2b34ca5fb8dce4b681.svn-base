<?php

/* 
 Template Name: General
 */

get_header();  the_post(); ?>

    <div id="aboutPage">
        <div class="container">
           <div class="row">
               <div class="col-sm-8">
               <section class="section0">
                <div id="aboutLt">
                     
                        <div class="sectionHdr">
                           <a href="#" onclick="history.go(-1);return false;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/back-icon.png" alt=""> <?php _e("Back"); ?></a>
                            <h1 class="txt-2e3"><?php the_title(); ?></h1>
                            <?php if (get_field('sub_title1')){ ?><hr> <?php } ?>
                        </div>
                        <div class="sectionInfo">
                          <?php the_content(); ?>
                           
                        </div>
                    </div>              
                </section>
               </div>
            <?php if(get_field('flight_image') || have_rows('right_repeater')|| get_field('banner_image')){ ?>
               <div class="col-sm-4">
                  <div class="sideBar">
                      <div class="widget nopadding">
                          <img src="<?php the_field('flight_image'); ?>" class="img-responsive" />
                      </div>
                      
                        <?php $i = 0; if (have_rows('right_repeater')): while (have_rows('right_repeater')): the_row(); if($i == 0){
                            $class = 'wifiIcon';
                            }
                            else{
                                $class = 'entertainment';
                                } ?>
                            <div class="widget lightGray">    
                                <h3 class="<?php echo $class; ?>" style="backgroud-image:url(<?php the_sub_field('icon'); ?>)"><span><?php the_sub_field('title'); ?></span></h3>
                                <p><?php the_sub_field('text'); ?></p>
                                <h6><a href="<?php the_sub_field('link'); ?>" class="readMore"><?php the_sub_field('button'); ?></a></h6>
                            </div>
                        <?php $i++;endwhile; endif; ?>
                          
                     
                     
                      <div class="widget lightGray">
                          <img src="<?php the_field('banner_image'); ?>" class="img-responsive" />
                      </div>
                  </div>                   
               </div>
            <?php } ?>
               
           </div>

        </div>
    </div>


    

<?php get_footer(); ?>