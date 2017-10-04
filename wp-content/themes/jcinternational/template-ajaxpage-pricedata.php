<?php

/* 
 Template Name: Ajax Page
 */
 the_post();
 ?>

 <?php
 $locationcount = $_POST['locationcount']; 
 //$locationcount = 5;

          $args = array( 
            'post_type'   => 'locations',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby'=> 'title', 
            'order' => 'ASC'
          );
         
          $posts = new WP_Query( $args );
           //print_r($posts);
          if ( $posts->have_posts() ) : while( $posts->have_posts() ) : $posts->the_post(); 
              
              $counter = get_field('index_counter');
              if($counter ==  $locationcount){
                $postid = get_the_id();
                $destinationswithprices = get_field('other_locations', $postid); 
              }
              

           wp_reset_postdata(); endwhile;  endif; 

$datawithmonth = array();
for($i=0;$i<12;$i++){
  $monthprices = array();
  for ($j=0; $j < count($destinationswithprices); $j++) { 
    $monthprices[$destinationswithprices[$j][shortname]] = $destinationswithprices[$j][month_and_prices][$i][prices];
  }
  $datawithmonth[] = $monthprices;
}



$locationdata1 = array();
if($destinationswithprices){
	foreach ($destinationswithprices as $destinationdetails) {
	  $locationdata[] = array("fullname" => $destinationdetails[name]->post_title, "shortname" => $destinationdetails[shortname]);
	}
}

else{
	$res = json_encode(array());
  print_r($res);
}
$priceDatawithLocation = array();
if($locationdata && $datawithmonth){
    $priceDatawithLocation[] = $locationdata;
    $priceDatawithLocation[] = $datawithmonth;
	$res = json_encode($priceDatawithLocation);
  print_r($res);
}





  //get_footer(); ?>