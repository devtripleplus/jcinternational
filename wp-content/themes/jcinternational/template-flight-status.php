<?php

/* 
 Template Name: Manage Booking
 */

get_header(); the_post(); ?>

    <div id="aboutPage">
        <div class="container">
           <div class="row">
               <div class="col-sm-8">
               <section class="section0">
                <div id="aboutLt">
                  
                        <div class="sectionHdr">                           
                            <h1 class="txt-2e3"><?php the_title(); ?></h1>
                            <hr>
                        </div>
                        <?php the_content(); ?>
                        
                                         
                    </div>              
                </section>
               </div>
               
               <div class="col-sm-4">
                  <div class="sideBar">                
                        <?php $i = 0; if (have_rows('right_repeater')): while (have_rows('right_repeater')): the_row(); if($i == 0){
                            $class = 'wifiIcon';
                            }
                            else{
                                $class = 'entertainment';
                                } ?>
                            <div class="widget lightGray">    
                                <h3 class="<?php echo $class; ?>" style="backgroud-image:url(<?php the_sub_field('icon'); ?>)"><span><?php the_sub_field('title'); ?></span></h3>
                                <p><?php the_sub_field('content'); ?></p>
                                <h6><a href="<?php the_sub_field('link'); ?>" class="readMore"><?php the_sub_field('anchor_text'); ?></a></h6>
                            </div>
                        <?php $i++;endwhile; endif; ?>
                      <div class="widget lightGray">
                          <img src="<?php the_field('adbanner'); ?>" class="img-responsive" />
                      </div>
                  </div>                   
               </div>
               
           </div>

        </div>
    </div>




    

<?php get_footer(); ?>