<?php

/* 
 Template Name: Home
 */

get_header();  ?>
    <div id="banner" style="background-image:url(<?php the_field('banner_image'); ?>)">
        <div class="container">
            <div class="bannerInfo">
                <div id="bannerTtl">
                    <img src="<?php the_field('banner_image2'); ?>" alt="">
                    <p class="bannerTxt txt-24 txt-fff text-center">
                        <?php the_field('banner_text'); ?><a href="<?php the_field('book_now_link'); ?>"><span class="txt-avBlack"><?php the_field('book_now_text'); ?></span></a>
                    </p>
                </div>

                 <div class="bannerForm">
                    <div class="bannerTop">
                        <img src="<?php the_field('form_background'); ?>" alt="">
                        <div class="bannerTopIn">
                            <img src="<?php the_field('banner_form_icon'); ?>" alt="">
                            <span><?php the_field('banner_form_title'); ?></span>
                        </div>
                    </div>
                    <div class="bannerBottom">
                      <form action="javascript:void(0)" method="POST">
                        <div class="bannerCols bannerCols1 col-sm-12">
                            <div class="c-chkbox">
                                <div class="chkbox">
                                    <input class="selected" id="checkboxselect" checked="checked" type="radio" name="showlet" value="2" />
                                    <label for="checkboxselect">Return</label> 
                               </div>
                            </div>
                        
                         <div class="c-chkbox">
                            <div class="chkbox">
                                <input class="selected" id="checkboxselect2" type="radio" name="showlet" value="1" />
                                <label for="checkboxselect2">One Way</label> 
                           </div>
                        </div>
                        
                        </div>
                       
                        <div class="bannerCols33 bannerCols bannerCols">
                           <p><label for="">Origin</label></p>
                            
                            <div class="bannerInputDD">
                            <input id="myInput" onkeyup="myFunction()" data-value="" class="formInput formInput100 bannerInput bannerInputCity" name="from">
                            <i class="glyphicon glyphicon-triangle-bottom bannerInputArrow1"></i>
                             <ul id="myUL">
                            
                            </ul>
                            </div>                           
                        </div>
                        
                        <div class="bannerCols33 bannerCols">
                           <p><label for="">Destination</label></p>
                           <div class="bannerInputDD">
                                <input id="myInput2" onkeyup="myFunction2()" data-value="" class="formInput formInput100 bannerInput bannerInputCity2" name="to">
                                <i class="glyphicon glyphicon-triangle-bottom bannerInputArrow2"></i>
                                <ul id="myUL2">
                                  
                                </ul>
                                
                           </div>
                           
                        </div>
                        
                        <div class="bannerCols33 bannerCols">
                           <p><label for="">&nbsp;</label></p>
                            <input id='datetimepicker4' type="text" class="formInput formInput100 bannerInput formInputDate datepicker noAlpha" readonly="false" placeholder="Departure"   name="depdatetime">
                        </div>
                        
                          <div class="bannerCols33 bannerCols">
                           <p><label for="">&nbsp;</label></p>
                            
                            <input id='datetimepicker5' type="text" class="formInput formInput100 bannerInput formInputDate datepicker noAlpha" placeholder="Return" readonly="true" name="returndatetime">
                         
                        </div>
                        
                        
                        <div class="bannerCols33 bannerCols hidden">
                           <p><label for="">&nbsp;</label></p>
                            
                           <input id='datetimepicker6' type="text" class="formInput formInput100 bannerInput formInputDate datepicker  noAlpha" placeholder="Departure" readonly="true" name="depdatetime1">
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="bannerCols bannerCols1">
                           <p><label for="">Adult</label></p>
                           <div class="number">
                            <input type="text" class="formInput noAlpha" name="adult" id="adult" value="1" />
                            <span class="increase"><i class="glyphicon glyphicon-menu-up"></i></span>    
                            <span class="decrease"><i class='glyphicon glyphicon-menu-down'></i></span>    
                             </div>
                        </div>
                        
                         <div class="bannerCols bannerCols1">
                           <p><label for="">Child</label></p>
                           <div class="number">
                            <input type="text" class="formInput noAlpha" id="child" name="child" value="0" />
                            <span class="increase"><i class="glyphicon glyphicon-menu-up"></i></span>    
                            <span class="decrease"><i class='glyphicon glyphicon-menu-down'></i></span>    
                             </div>
                        </div>
                        
                         <div class="bannerCols bannerCols1">
                           <p><label for="">Infant</label></p>
                            <div class="number">
                            <input type="text" id="enfant" class="formInput noAlpha" name="infant" value="0" />
                            <span class="increase"><i class="glyphicon glyphicon-menu-up"></i></span>    
                            <span class="decrease"><i class='glyphicon glyphicon-menu-down'></i></span>    
                             </div>
                        </div>

                        <div class="bannerCols bannerCols1">
                           <p><label for="">Cabin class</label></p>
                            <select class="formInput formInput100 bannerInput" id="cabinClass" name="cabin">
                            <?php $sn = 0; if(have_rows('classes','options')): while(have_rows('classes','options')): the_row(); 
                              if($sn == 0){
                                $class = 'selected';
                              }else{
                                $class = '';
                              }
                              $sn++;
                            ?>

                              <option value="<?php echo get_sub_field("shortname"); ?>" data-info="<?php echo get_sub_field("shortname"); ?>" <?php echo $class; ?>><?php echo get_sub_field('name'); ?></option> 
                            <?php endwhile; endif; ?>  
                                                          
                            </select>
                        </div>
                        
                         <div class="bannerCols bannerCols1 promoCode">
                           <p><label for=""><span>Have a</span> promo code<span>?</span></label></p> 
                            <input type="text" class="formInput" name="promocode" />
                            </div>
                        
                        <div class="bannerCols16 bannerCols bannerColsBtn"> 
                           <p class="hidden-md hidden-sm hidden-xs"><label for="">&nbsp;</label></p>
                            <button class="formButton" id="formbuttonsub" name="flightbooking">Continue</button>
                        </div>
                        </form> 
                       <div class="clearfix"></div>

                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  
    
    <!-- section -->
    <section class="section0">
        <div id="sOffers">
            <div class="container">
                <div class="sectionHdr">
                    <h3><?php the_field('offer_title'); ?> </h3>
                </div>
                <div class="sectionInfo">
                    <div class="row">
                        <?php if(have_rows('special_offers')): while(have_rows('special_offers')): the_row(); ?>
                            <div class="col-sm-2">
                               <div class="sOffersIn">
                                <div class="sOffersIcon">
                                   <a href="<?php the_sub_field('link'); ?>"> <img src="<?php the_sub_field('image'); ?>" alt=""></a>
                                </div>
                                <div class="sOffersTtl">
                                    <a href="<?php the_sub_field('link'); ?>"><h5><?php the_sub_field('title'); ?></h5></a>
                                </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                      
                    </div>
                </div>
            </div>
        </div>
                  
    </section>
    
    
    <!-- section -->
    <section class="">
        <div id="eAsia">
            <div class="container">
               <div class="section0 borderTop">
                  <div class="sectionHdr">
                   <div class="row">
                       <div class="col-sm-4">
                        <h3><?php the_field('explore_title'); ?></h3>
                    </div>
                    
                    <div class="col-sm-8">
                        <p class="txt-14"><?php the_field('explore_content'); ?></p>
                    </div>
                    <div class="clearfix"></div>
                    
                   </div>
                    
                </div>
                <div class="sectionInfo">
                    <div class="owl-carousel">

                        <?php if(have_rows('explore_repeater')): while(have_rows('explore_repeater')): the_row(); ?>
                            <div class="item">
                               <div class="eAsiaIn">
                                   <div class="eAsiaInL">
                                        <div class="eAsiaImg">
                                            <a href="<?php the_sub_field('link') ?>"><img src="<?php the_sub_field('image') ?>" alt=""></a>
                                        </div>
                                   </div>
                               
                                <div class="eAsiaInR">
                                    <div class="eAsiaInfo">
                                    <div class="">
                                    <h6><?php the_sub_field('title') ?></h6>
                                        <p class="txt-14">
                                            <?php the_sub_field('from') ?>
                                        </p>
                                        <p class="txt-24">
                                            <?php the_sub_field('currency') ?><span><?php the_sub_field('price') ?></span> 
                                        </p>
                                        <a href="<?php the_sub_field('link') ?>"><?php the_sub_field('book_now_button') ?></a>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div> 
               </div>
            </div>
        </div>    
    </section>
    
    <!-- section -->
    <section class="section01">
        <div id="eDeals">
            <div class="container">
                <div class="sectionHdr">
                    <h2><?php the_field('deals_title'); ?></h2>
                    <p class="txt-16 txt-2f2"><?php the_field('deals_description'); ?> <a href="<?php the_field('all_deals_link'); ?>"><?php the_field('all_deals_text'); ?></a></p>
                </div>
                <div class="sectionInfo">
                    <div class="gCols">
                        <div class="row">
                            <?php $posts = get_field('deals_relationship');  $i = 0; ?>
                            <?php foreach ($posts as $post) {
                                if($i == 0){ ?>
                                    <div class="col-sm-7">
                                        <div class="gColsBig gColsIn">
                                           <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                                <div class="gColsInfo">
                                                    <p class="txt-22 txt-fff"><?php the_title(); ?></p>
                                                    <?php $image = get_field('extra_image',$post->ID);  if($image){ ?>
                                                        <img src="<?php echo $image['url']; ?>" alt="" />
                                                   <?php } ?>
                                                    
                                                    <p class="txt-30 txt-fff"><?php echo $post->post_content; ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                               <?php  }
                               $i++;
                                } ?>

                                <div class="col-sm-5">
                                  <div class="row">
                                      <?php $j = 0; foreach ($posts as $post) { 
                                        if($j == 0){ 
                                          echo ''; 
                                        } 
                                        else{ ?>
                                          <div class="col-sm-12">
                                             <div class="gColsSmall gColsIn mb30">
                                                 <a href="<?php the_permalink(); ?>">
                                                      <?php the_post_thumbnail(); ?>
                                                      <div class="gColsInfo">
                                                          <p class="txt-22 txt-fff"><?php the_title(); ?></p>
                                                          <p class="txt-30 txt-fff"><?php echo $post->post_content; ?></p>
                                                      </div>
                                                  </a>
                                              </div>
                                         </div>

                                     <?php }
                                     $j++;
                                          } ?>
                                   </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>

    

<?php get_footer(); ?>

<?php //the_content(); ?>

<?php 


/*

<input type="text" class="formInput" list="airPorts" data-shotId="" name="from">
                           <datalist id="airPorts">
                           <?php if($posts->posts): foreach ($posts->posts as  $post) { ?>
                             <option value="<?php the_field('location_shortname'); ?>"><?php the_title(); ?></option>
                             <?php } endif; ?>    
                           </datalist>
*/
                           ?>
                           <script type="text/javascript">
                             
                             jQuery(document).ready(function () {
  var adult = document.getElementById('adult');
  adult.onpaste = function(e) {
    e.preventDefault();
  }
  var child = document.getElementById('child');
  child.onpaste = function(e) {
    e.preventDefault();
  }
  var enfant = document.getElementById('enfant');
  enfant.onpaste = function(e) {
    e.preventDefault();
  }
});
                           </script>