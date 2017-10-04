<?php

/* 
 Template Name: Location From Ond.js
 */
  ?>
<?php $locations = $_POST['airports'];

$initial = $_POST['initial'];
$origins = $_POST['origins'];
$from = $_POST['from'];
$counter = $_POST['counter'];
$curLanguage = $_POST['curLanguage'];
if($initial == 'origin'){
  if($locations): $no = 0; foreach ($locations as  $location) { ?>
    <li><a href="#" class="city" data-value="<?php echo $location[code]; ?>" data-counter="<?php echo $no++; ?>" data-info="<?php echo $location[$curLanguage];  ?>"><?php echo $location[$curLanguage]; ?></a></li>
   <?php } 
   endif;  
}
else{
  $destinations = $origins[$counter];
  if($destinations): foreach ($destinations as  $destination) { ?>
     <li><a href="#" class="city2" data-value="<?php echo $locations[$destination[0]][code]; ?>" data-info="<?php echo $locations[$destination[0]][$curLanguage];  ?>"><?php echo $locations[$destination[0]][$curLanguage]; ?></a></li>
    <?php  }
   endif;  

}
                             


