<?php

/* 
 Template Name: Route Map
 */

get_header();  ?>
    <div id="aboutPage">
        <div class="container">
            <div class="row topHeading">
                <div class="col-sm-6">
                    <div class="sectionHdr">
                        <a href="<?php the_permalink(2); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/back-icon.png" alt=""> <?php echo get_the_title(9); ?></a>
                        <h1 class="txt-2e3">
                            <?php the_title(); ?>
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="col-sm-6 routeMap">
                    <img src="<?php the_field('route_map_back_icons'); ?>" class="pull-right" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid nopadding btm-margin40">
        <div id="map"></div>
    </div>


    <div class="container-fluid sectionHdr">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="txt-2e3">
                        <?php the_field('heading'); ?>
                    </h1>
                    <p class="txt-18 txt-avMedium btm-margin25">
                        <?php the_field('text'); ?>
                    </p>
                    <hr/>
                </div>
            </div>

            <div class="row refineRowgs">
                <div class="col-sm-12">
                    <div class="refineGs">
                        <span>Prices are from 
                     <?php 
                            $args = array( 
                                'post_type'   => 'locations',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'orderby'=> 'title', 
                                'order' => 'ASC'
                                );

                            $posts = new WP_Query( $args );
                        ?>
                    
                              
                            
                            <span style="float:none !important;">
                            <input id="myInput" onkeyup="myFunction()" data-value="" class="bannerInputCity bannerInputCity3 formInput" name="from">
                            <i class="glyphicon glyphicon-triangle-bottom bannerInputArrow3"></i>
                            <ul id="myUL">                            
                            </ul></span> for
                        <select class="formInput">                      
                          <option value="0" selected>Select</option>
                          <option value="1" selected> Direct</option>
                          <option value="2" selected>Both Direct and Transit</option>
                      </select> flights in
                        <select class="formInput">                      
                          <option>USD</option>
                      </select> and include taxes and charges.</span>
                    </div>
                </div>
            </div>

            <div class="row refinedData">
                <div class="col-sm-12">
                    <div class="table table-responsive noofdestinationsfor FlightDetail">
                        <table class="col-sm-12">
                            <tr>
                                <td colspan="2" class="blueColor noofdestinationsfor">Flights from <span class="source"></span> to <a href="javascript:void(0)"><span class="noofdestinationsfor">0</span> destinations</a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="table table-responsive FlightDetail">
                        <table class="col-sm-12">
                            <tr>
                                <td colspan="2" class="blueColor">Flights from <span class="source">Phnom Penh</span> to <a href="javascript:void(0)"><span class="noofdestination"><?php echo count($posts->posts)-1;?> </span> destinations</a></td>
                                <td class="width100px arrowIcongs" style="text-align:center !important;"><a href="javascript:void(0)" class="prev3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/table-left-arrow.png" /></a></td>
                                <td class="width100px month1"></td>
                                <td class="width100px month2"></td>
                                <td class="width100px month3"></td>
                                <td class="width20px arrowIcongs"><a href="javascript:void(0)" class="next3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/table-right-arrow.png" /></a></td>
                            </tr>

                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="fullname-1"></td>
                                <td class="shortname-1" style="width:100px;"></td>
                                <td></td>
                                <td class="month1-1">
                                    <a href="#"></a>
                                </td>
                                <td class="month1-2">
                                    <a href="#"></a>
                                </td>
                                <td class="month1-3">
                                    <a href="#"></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="fullname-2"></td>
                                <td class="shortname-2" style="width:100px;"></td>
                                <td></td>
                                <td class="month2-1">
                                    <a href="#"></a>
                                </td>
                                <td class="month2-2">
                                    <a href="#"></a>
                                </td>
                                <td class="month2-3">
                                    <a href="#"></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="fullname-3"></td>
                                <td class="shortname-3" style="width:100px;"></td>
                                <td></td>
                                <td class="month3-1">
                                    <a href="#"></a>
                                </td>
                                <td class="month3-2">
                                    <a href="#"></a>
                                </td>
                                <td class="month3-3">
                                    <a href="#"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="fullname-4"></td>
                                <td class="shortname-4" style="width:100px;"></td>
                                <td></td>
                                <td class="month4-1">
                                    <a href="#"></a>
                                </td>
                                <td class="month4-2">
                                    <a href="#"></a>
                                </td>
                                <td class="month4-3">
                                    <a href="#"></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="fullname-5"></td>
                                <td class="shortname-5" style="width:100px;"></td>
                                <td></td>
                                <td class="month5-1">
                                    <a href="#"></a>
                                </td>
                                <td class="month5-2">
                                    <a href="#"></a>
                                </td>
                                <td class="month5-3 ">
                                    <a href="#"></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="fullname-6"></td>
                                <td class="shortname-6" style="width:100px;"></td>
                                <td></td>
                                <td class="month6-1">
                                    <a href="#"></a>
                                </td>
                                <td class="month6-2">
                                    <a href="#"></a>
                                </td>
                                <td class="month6-3">
                                    <a href="#"></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="fullname-7"></td>
                                <td class="shortname-7" style="width:100px;"></td>
                                <td></td>
                                <td class="month7-1">
                                    <a href="#"></a>
                                </td>
                                <td class="month7-2">
                                    <a href="#"></a>
                                </td>
                                <td class="month7-3">
                                    <a href="#"></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="fullname-8"></td>
                                <td class="shortname-8" style="width:100px;"></td>
                                <td></td>
                                <td class="month8-1">
                                    <a href="#"></a>
                                </td>
                                <td class="month8-2">
                                    <a href="#"></a>
                                </td>
                                <td class="month8-3">
                                    <a href="#"></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="fullname-9"></td>
                                <td class="shortname-9" style="width:100px;"></td>
                                <td></td>
                                <td class="month9-1">
                                    <a href="#"></a>
                                </td>
                                <td class="month9-2">
                                    <a href="#"></a>
                                </td>
                                <td class="month9-3">
                                    <a href="#"></a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <?php $locations = array(); 
    $destinationswithprices = array();
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
              $location = get_the_title();
              $placeId = get_field('place_id');
              $latitude = get_field('latitude');
              $longitude = get_field('longitude');
              $image = get_the_post_thumbnail_url();
              $description = get_the_content();
              $shhortname = get_field('location_shortname');
              $moreinfolink = get_field('more_info_link');;
              $daily_flight_startinhg_from_text = get_field('daily_flight_startinhg_from_text');
              $price = get_field('daily_flight_startinhg_from_price');;
              $book_now_link = get_field('book_now_link');;
              $fulladdress = "<h2>$location</h2><img src='$image' class='img-resposive' /><p> $description <a href='$moreinfolink'>More Info</a> </p><br/><h3>$daily_flight_startinhg_from_text</h3><br /> <h1>USD <strong>$price</strong> <a href='$book_now_link'>Book Now</a></h1>";

              $locations[] =  array("location" => $location, "placeId" => $placeId, "lat" => (float) $latitude, "lng" => (float) $longitude, "FullAddress" => $fulladdress,"shortname" => $shhortname);
              

           wp_reset_postdata(); endwhile;  endif; ?>

    <?php
//echo "<pre>";
$destinationswithprices = get_field('other_locations',159); 
$datawithmonth = array();
for($i=0;$i<12;$i++){
  $monthprices = array();
  for ($j=0; $j < count($destinationswithprices); $j++) { 
    $monthprices[$destinationswithprices[$j][shortname]] = $destinationswithprices[$j][month_and_prices][$i][prices];
  }
  $datawithmonth[] = $monthprices;
}
/*echo "<pre>";
print_r($datawithmonth);*/
$location123 = array();
foreach ($destinationswithprices as $destinationdetails) {
  $location123[] = array("fullname" => $destinationdetails[name]->post_title, "shortname" => $destinationdetails[shortname]);
}

 ?>



        <!--=====Map======-->


        <script>
            jQuery(".noofdestinationsfor.FlightDetail").hide();

            jQuery('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = jQuery(this.hash);
                    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        jQuery('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
            var destinations10 = <?php echo str_replace('\\','',json_encode($location123)); ?>;

            var j = 0;
            for (var i = 0; i < destinations10.length; i++) {
                j++;
                jQuery(".FlightDetail .fullname-" + j).text(destinations10[i].fullname);
                jQuery(".FlightDetail .shortname-" + j).text(destinations10[i].shortname);

            }
            var monthsData = [{
                "month": "Jan"
            }, {
                "month": "Feb"
            }, {
                "month": "Mar"
            }, {
                "month": "Apr"
            }, {
                "month": "May"
            }, {
                "month": "Jun"
            }, {
                "month": "Jul"
            }, {
                "month": "Aug"
            }, {
                "month": "Sep"
            }, {
                "month": "Oct"
            }, {
                "month": "Nov"
            }, {
                "month": "Dec"
            }]


            var priceData = <?php echo str_replace('\\','',json_encode($datawithmonth)); ?>;

            var locationData = <?php echo str_replace('\\','',json_encode($locations)); ?>;

            var airports = airports;
            for (var u = 0; u < airports.length; u++) {
                airports[u].sno = u;
            }


            var Loc_position = [];


            var airCount = 0;
            for (var x = 0; x < airports.length; x++) {
                var tr = airCount;
                if (tr.toString() == airports[x].sno) {
                    getlat(x);
                    airCount++;
                }
            }

            function getlat(x) {
                jQuery.getJSON('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCMtEH2rnetuGfmzSVLHmwkyTiipddoQec&address=' + airports[x].en + '&sensor=false', null, function(data) {
                    var p = data.results[0].geometry.location;
                    Loc_position[x] = {
                        "lat": p.lat,
                        "lng": p.lng,
                        "place_Id": data.results[0].place_id,
                        "code": airports[x].code,
                        "sno": airports[x].sno
                    };

                });
            }



            var marker1, marker2 = new Array(20),
                marker3 = new Array(20);
            var poly, geodesicPoly = new Array(20);

            var styles = [{
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#616161"
                    }]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#bdbdbd"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#eeeeee"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#757575"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e5e5e5"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#757575"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dadada"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#616161"
                    }]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e5e5e5"
                    }]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#eeeeee"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#c9c9c9"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                }
            ];
            var count = 1;
            var map;
            var initialpointlat = 11.5448729;
            var initialpointlng = 104.8921668;
            var lastpointlat = 50.0379326;
            var lastpointlng = 8.5599631;


            jQuery('body').on('click', '.refineGs ul#myUL li a', function(e) {
                var Pos_Loc = jQuery(this).attr("data-counter");
                var locname = jQuery(this).text();

                initMap(Pos_Loc);
                jQuery.ajax({
                    type: "post",
                    url: "http://wecodelogix.com/jcinternational/ajax-page-for-pricedata/",
                    data: {
                        locationcount: Pos_Loc
                    },
                    success: function(data) {
                        destinations10 = JSON.parse(data);
                        if (destinations10.length > 0) {
                            jQuery(".FlightDetail").show();
                            jQuery(".noofdestinationsfor.FlightDetail").hide();
                            priceData = destinations10[1];
                            var j = 0;
                            jQuery(".source").text(locname);
                            jQuery(".noofdestination").text(destinations10[0].length);
                            for (var i = 0; i < destinations10[0].length; i++) {
                                j++;
                                jQuery(".FlightDetail .fullname-" + j).text(destinations10[0][i].fullname);
                                jQuery(".FlightDetail .shortname-" + j).text(destinations10[0][i].shortname);
                            }
                            if (count == 1) {
                                var sn = 1;
                                for (var p = 1; p < 4; p++) {
                                    var j = p - 1;
                                    var i = 1;
                                    jQuery(".FlightDetail .month" + sn + "").text(monthsData[j].month);
                                    jQuery.each(priceData[j], function(k, v) {
                                        jQuery(".FlightDetail .month" + i++ + "-" + sn).html("<a href='#' class='blueColor' data-id='" + i + "'>" + v + "</a>");
                                    });
                                    sn++;
                                    jQuery(".FlightDetail a:contains('*')").each(function() {
                                        jQuery(this).removeClass("blueColor");
                                    });

                                    jQuery(".FlightDetail a:contains('.')").each(function() {
                                        var res = jQuery(this).text().split('.');
                                        jQuery(this).html(res[0] + ".<small>" + res[1] + "</small>");
                                    });
                                }
                            }
                        } else {
                            jQuery(".FlightDetail").hide();
                            jQuery(".noofdestinationsfor .source").text(locname);
                            jQuery(".noofdestinationsfor.FlightDetail").show();
                        }

                    }
                });

                setTimeout(function() {
                    if (jQuery(window).width() < 768) {
                        map.setZoom(2);
                    } else {
                        map.setZoom(4);
                    }
                }, 500)
            });


setTimeout(function() {
                    if (jQuery(window).width() < 768) {
                        map.setZoom(2);
                    } else {
                        map.setZoom(4);
                    }
                }, 500)




            if (count == 1) {
                var kr = 1;
                for (var p = 1; p < 4; p++) {
                    var j = p - 1;
                    var i = 1;
                    jQuery(".FlightDetail .month" + kr + "").text(monthsData[j].month);
                    jQuery.each(priceData[j], function(k, v) {
                        jQuery(".FlightDetail .month" + i++ + "-" + kr).html("<a href='#' class='blueColor' data-id='" + i + "'>" + v + "</a>");
                    });
                    kr++;
                    jQuery(".FlightDetail a:contains('*')").each(function() {
                        jQuery(this).removeClass("blueColor");
                    });
                    jQuery(".FlightDetail a:contains('.')").each(function() {
                        var res = jQuery(this).text().split('.');
                        jQuery(this).html(res[0] + ".<small>" + res[1] + "</small>");
                    });
                }
            }




            jQuery(".arrowIcongs .prev3").click(function() {
                var shortname = jQuery("#airportsname").val();

                if (count > 1) {
                    count -= 3;
                    for (var k = count; k < count + 3; k++) {
                        var j = k - 1;
                        var i = 1;
                        var sn = k - count + 1;
                        jQuery(".FlightDetail .month" + sn + "").text(monthsData[j].month);
                        jQuery.each(priceData[j], function(k, v) {
                            jQuery(".FlightDetail .month" + i++ + "-" + sn).html("<a href='#' class='blueColor' data-id='" + i + "'>" + v + "</a>");
                        });

                        jQuery(".FlightDetail a:contains('*')").each(function() {
                            jQuery(this).removeClass("blueColor");
                        });

                        jQuery(".FlightDetail a:contains('.')").each(function() {
                            var res = jQuery(this).text().split('.');
                            jQuery(this).stop(true, true).fadeOut('slow').html(res[0] + ".<small>" + res[1] + "</small>").stop(true, true).fadeIn('slow');
                        });
                    }
                }
            });

            jQuery(".arrowIcongs .next3").click(function() {
                var shortname = jQuery("#airportsname").val();

                if (count < 10) {
                    count += 3;
                    for (var k = count; k < count + 3; k++) {
                        var j = k - 1;
                        var i = 1;
                        var sn = k - count + 1;
                        jQuery(".FlightDetail .month" + sn + "").text(monthsData[j].month);
                        jQuery.each(priceData[j], function(k, v) {
                            jQuery(".FlightDetail .month" + i++ + "-" + sn).html("<a href='#' class='blueColor' data-id='" + i + "'>" + v + "</a>");
                        });

                        jQuery(".FlightDetail a:contains('*')").each(function() {
                            jQuery(this).removeClass("blueColor");
                        });
                        jQuery(".FlightDetail a:contains('.')").each(function() {
                            var res = jQuery(this).text().split('.');
                            jQuery(this).stop(true, true).fadeOut('slow').html(res[0] + ".<small>" + res[1] + "</small>").stop(true, true).fadeIn('slow');
                        });
                    }
                }
            });




            /*function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
*/

            var destination_loc = [];            
            if(localStorage.lastpoint==undefined){
                    localStorage.lastpoint=2;
                }
            
            function initMap(count) {
                

                var initialPoint = {
                    "lat": Loc_position[count].lat,
                    "lng": Loc_position[count].lng
                };
                var lastPoint = {
                    "lat": Loc_position[localStorage.lastpoint].lat,
                    "lng": Loc_position[localStorage.lastpoint].lng
                };
                var midPoint = {
                    "lat": Loc_position[5].lat,
                    "lng": Loc_position[5].lng
                };
                var destination = origins[count];

                for (var j = 0; j < destination.length; j++) {
                    destination_loc[j] = {
                        "name": airports[destination[j][0]].en,
                        "lat": Loc_position[destination[j][0]].lat,
                        "lng": Loc_position[destination[j][0]].lng,
                        "place_id": Loc_position[destination[j][0]].place_Id,
                        "transit": destination[j][5][0][0]
                    };
                }



                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    scrollwheel: false,
                    center: new google.maps.LatLng(51.508742, -0.120850),
                    styles: styles,
                    zoomControl: true,
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.LEFT_BOTTOM
                    },
                    fullscreenControl: true
                });

                //===Orgin of the map
                marker1 = new google.maps.Marker({
                    map: map,
                    draggable: false,
                    position: {
                        lat: initialPoint.lat,
                        lng: initialPoint.lng
                    },
                    icon: {
                        url: "<?php echo get_template_directory_uri(); ?>/assets/img/map-origin-icon.png",
                        anchor: new google.maps.Point(14, 14)
                    }
                });

                
                
                
                //===Other Location of map
                
                var lineSymbol = {
                    path: 'M362.985,430.724l-10.248,51.234l62.332,57.969l-3.293,26.145 l-71.345-23.599l-2.001,13.069l-2.057-13.529l-71.278,22.928l-5.762-23.984l64.097-59.271l-8.913-51.359l0.858-114.43 l-21.945-11.338l-189.358,88.76l-1.18-32.262l213.344-180.08l0.875-107.436l7.973-32.005l7.642-12.054l7.377-3.958l9.238,3.65 l6.367,14.925l7.369,30.363v106.375l211.592,182.082l-1.496,32.247l-188.479-90.61l-21.616,10.087l-0.094,115.684',
                    scale: 0.06,
                    strokeOpacity: 1,
                    fillColor: '#ed1c24',
                    strokeWeight: 3,
                    anchor: new google.maps.Point(340, 400),
                    strokeColor: '#ed1c24'
                };

                // Create the polyline and add the symbol to it via the 'icons' property.
                
                var line = new google.maps.Polyline({
                    path: [{                                           
                        lat: initialPoint.lat,
                        lng: initialPoint.lng    
                    }, {
                        lat: midPoint.lat,
                        lng: midPoint.lng
                    }, {
                        lat: lastPoint.lat,
                        lng: lastPoint.lng 
                    }],
                    geodesic: true,
                    strokeColor: '#9092c2',
                    zIndex: 5,
                    icons: [{
                        icon: lineSymbol,
                        offset: '100%',                        
                    }],
                    map: map
                });
                
                
                
                //alert(locationData.length);
                for (var i = 0; i < destination_loc.length; i++) {
                    marker2[i] = new google.maps.Marker({
                        map: map,
                        draggable: false,
                        position: {
                            lat: destination_loc[i].lat,
                            lng: destination_loc[i].lng
                        },
                        icon: " "
                    });

                    if (destination_loc[i].place_id != "") {

                        var infowindow = new google.maps.InfoWindow();
                        var service = new google.maps.places.PlacesService(map);

                        service.getDetails({
                            placeId: destination_loc[i].place_id
                        }, function(place, status) {
                            if (status === google.maps.places.PlacesServiceStatus.OK) {
                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: place.geometry.location,
                                    icon: {
                                        url: "<?php echo get_template_directory_uri(); ?>/assets/img/list-red-icon.png",
                                        anchor: new google.maps.Point(7, 5)
                                    }
                                });


                                google.maps.event.addListener(marker, 'click', function() {
                                    var placeId = place.place_id;
                                    for (var i = 0; i < locationData.length; i++) {
                                        if (locationData[i].placeId == placeId) {
                                            localStorage.lastpoint=i;
                                           lastPoint = {
                                                "lat": Loc_position[localStorage.lastpoint].lat,
                                                "lng": Loc_position[localStorage.lastpoint].lng
                                            };
                                            
                                            line.setMap(null);
                                            line = new google.maps.Polyline({
                                                path: [{                                           
                                                    lat: initialPoint.lat,
                                                    lng: initialPoint.lng    
                                                }, {
                                                    lat: midPoint.lat,
                                                    lng: midPoint.lng
                                                }, {
                                                    lat: lastPoint.lat,
                                                    lng: lastPoint.lng 
                                                }],
                                                geodesic: true,
                                                strokeColor: '#9092c2',
                                                icons: [{
                                                    icon: lineSymbol,
                                                    offset: '100%'
                                                }],
                                                map: map
                                            });
                                            animateCircle(line);
                                            
                                            var boxText = document.createElement("div");
                                            boxText.style.cssText = "margin-bottom: 30px; margin-left: 6px; background: #fff; padding: 5px;";
                                            boxText.innerHTML = "<div class='locationDiv'>" + locationData[i].FullAddress + "</div>";
                                            jQuery("img[src='http://www.google.com/intl/en_us/mapfiles/close.gif']").trigger("click");
                                            var myOptions = {
                                                content: boxText,
                                                disableAutoPan: false,
                                                maxWidth: 0,
                                                pixelOffset: new google.maps.Size(0, 0),
                                                zIndex: null,
                                                boxStyle: {
                                                    padding: "0px 0px 0px 100px",
                                                    background: "url('<?php echo get_template_directory_uri(); ?>/assets/img/map-right-side.png') no-repeat",
                                                    opacity: 1,
                                                    width: "465px"
                                                },
                                                closeBoxMargin: "15px",
                                                closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
                                                infoBoxClearance: new google.maps.Size(1, 1),
                                                isHidden: false,
                                                pane: "floatPane",
                                                enableEventPropagation: false
                                            };

                                            var ib = new InfoBox(myOptions);
                                    }
                                    //infowindow.open(map, this);                     
                                    ib.open(map, this);
                                });
                            }
                        });
                    }
                }


                var location;
                var bounds1;
                for (var i = 0; i < destination_loc.length; i++) {
                    bounds1 = new google.maps.LatLngBounds(marker1.getPosition(), marker2[i].getPosition());
                }

                var bounds = new google.maps.LatLngBounds(marker1.getPosition());

                map.fitBounds(bounds);

                for (var i = 0; i < destination_loc.length; i++) {
                    google.maps.event.addListener(marker2[i]);
                }

                google.maps.event.addListener(marker1, 'position_changed', update);

                poly = new google.maps.Polyline({
                    strokeColor: '#FF0000',
                    strokeOpacity: 1.0,
                    strokeWeight: 3,
                    map: map,
                });

                for (var i = 0; i < destination_loc.length; i++) {
                    geodesicPoly[i] = new google.maps.Polyline({
                        strokeColor: '#9092c2',
                        strokeOpacity: 1.0,
                        strokeWeight: 3,
                        geodesic: true,
                        map: map
                    });
                }

                
                
                animateCircle(line);
                update();
            }

            function update() {
                var path = Array(20);
                for (var i = 0; i < destination_loc.length; i++) {       
                    if (destination_loc[i].transit != undefined) {
                        var midPint = destination_loc[i].transit;
                        for (var k = 0; k < destination_loc.length; k++) {
                            if (midPint == Loc_position[k].code) {
                                path[i] = [marker1.getPosition(), {
                                    lat: Loc_position[k].lat,
                                    lng: Loc_position[k].lng
                                }, marker2[i].getPosition()];
                            }
                        }
                    } else {
                        path[i] = [marker1.getPosition(), marker2[i].getPosition()];
                    }
                    geodesicPoly[i].setPath(path[i]);

                }
            }




            // Use the DOM setInterval() function to change the offset of the symbol
            // at fixed intervals.
            function animateCircle(line) {
                var count = 0;
                window.setInterval(function() {
                    count = (count + 0.1) % 200;
                    var icons = line.get('icons');
                    icons[0].offset = (count / 2) + '%';
                    line.set('icons', icons);
                }, 20);
            }

            jQuery('.refineGs input').click(function() {
                if (jQuery("#myUL li").length < 1) {                
                    setTimeout(function() {
                        if (jQuery('.refineGs ul#myUL li:nth-child(6) a').text() != "") {                              
                            jQuery('.refineGs ul#myUL li:nth-child(6) a').trigger("click");                            
                        } else {                            
                            setTimeout(function() {
                                jQuery('.refineGs input').trigger("click");
                            }, 500);
                        }
                    }, 1000);
                }
            });

            setTimeout(function() {
                jQuery('.refineGs input').trigger("click");
            }, 1000);
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMtEH2rnetuGfmzSVLHmwkyTiipddoQec&#038;libraries=places"></script>
        <!--AIzaSyCMtEH2rnetuGfmzSVLHmwkyTiipddoQec-->
        <script type="text/javascript" src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js"></script>



        <?php get_footer(); ?>