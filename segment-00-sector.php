<?php
/**
 * Created by Adel Dubinnikova
 * Email: adelinyshka@gmail.com
 * Date: 24.05.2019 13:20
 */

//error_reporting(E_ALL); ini_set('display_errors', 1);
//die(__FILE__); //phpinfo();


/*
 * All posts of promo_sector type
 */
$promo_sector = get_posts([
  'post_type' => 'promo_sector',
  'post_status' => 'publish',
  'numberposts' => -1
  // 'order'    => 'ASC'
]);
//print_r($promo_sector); die;


/*
 * Display Data
 *
 * 1. walk array
 * 2. declare vars
 * 3. set vars with values from array row
 * 4. produce html markup
 *
 */

foreach ($promo_sector as $key=>$val){

    $zxSectorVars['heading']='';
    $zxSectorVars['map-link-text']='';
    $zxSectorVars['map-link-val']='';
    $zxSectorVars['paragraph']='';
    $zxSectorVars['btn-text']='';
    $zxSectorVars['btn-link']='';


   $postID =$val->ID; //echo $postID;

    /*$metaData =(get_post_meta($postID));
    print_r($metaData); die;*/

   !empty (get_field( 'sector-id', $postID )) ? $zxSectorVars['sector-id'] = get_field( 'sector-id', $postID ) : $zxSectorVars['sector-id'] = NULL;
   !empty (get_field( 'heading', $postID )) ? $zxSectorVars['heading'] = get_field( 'heading', $postID ) : $zxSectorVars['heading'] = NULL;
   !empty (get_field( 'map-link-text', $postID )) ? $zxSectorVars['map-link-text'] = get_field( 'map-link-text', $postID ) : $zxSectorVars['map-link-text'] = NULL;
   !empty (get_field( 'map-link-val', $postID )) ? $zxSectorVars['map-link-val'] = get_field( 'map-link-val', $postID ) : $zxSectorVars['map-link-val'] = NULL;
   !empty (get_field( 'paragraph', $postID )) ? $zxSectorVars['paragraph'] = get_field( 'paragraph', $postID ) : $zxSectorVars['paragraph'] = NULL;
   !empty (get_field( 'btn-text', $postID )) ? $zxSectorVars['btn-text'] = get_field( 'btn-text', $postID ) : $zxSectorVars['btn-text'] = NULL;
   !empty (get_field( 'btn-link', $postID )) ? $zxSectorVars['btn-link'] = get_field( 'btn-link', $postID ) : $zxSectorVars['btn-link'] = NULL;


    ?>

    <div class="<?php echo $zxSectorVars['sector-id']; ?>" id="apart">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-lg-6 d-none d-lg-block">
                    <div class="text-center mb-lg-5">
                      <h1 class="hotel__title--h1"><?php echo $zxSectorVars['heading']; ?></h1><a class="hotel__title--link_map" href="<?php echo $zxSectorVars['map-link-val']; ?>"><?php echo $zxSectorVars['map-link-text']; ?></a>
                    </div>
                    <p class="hotel__text"><?php echo $zxSectorVars['paragraph']; ?></p>
                <div class="text-center align-self-end m-5"><a href="<?php echo $zxSectorVars['btn-link']; ?>">
                        <button class="btn btn-warning my_button" type="button"><?php echo $zxSectorVars['btn-text']; ?></button></a></div>
              </div>
<?php 
if( $postID == 64 ) { ?>
              <div class="col-12 col-lg-6">
                    <div class="hotel__slider__booking-rating_m"></div>
                    <div class="autoplay_hotel">
                      <div class="img1 op"></div>
                      <div class="img2 op"></div>
                      <div class="img3 op"></div>
                      <div class="img4 op"></div>
                      <div class="img5 op"></div>
                      <div class="img6 op"></div>
                      <div class="img7 op"></div>
                      <div class="img8 op"></div>
                      <div class="img9 op"></div>
                      <div class="img10 op"></div>
                      <div class="img11 op"></div>
                      <div class="img12 op"></div>
                      <div class="img13 op"></div>
                      <div class="img14 op"></div>
                      <div class="img15 op"></div>
                      <div class="img16 op"></div>
                      <div class="img17 op"></div>
                      <div class="img18 op"></div>
                      <div class="img19 op"></div>
                      <div class="img20 op"></div>
                      <div class="img21 op"></div>
                      <div class="img22 op"></div>
                    </div>
                <div class="m-2"></div>
                <div class="d-none d-lg-block">
                      <div class="container-fluid">
                        <div class="row pt-2 d-flex justify-content-between align-items-between">
                          <div class="col icon11 no_padding"></div>
                          <div class="col icon2 no_padding"></div>
                          <div class="col icon3 no_padding"></div>
                          <div class="d-sm-none w-100 m-1"></div>
                          <div class="col icon4 no_padding"></div>
                          <div class="col icon5 no_padding"></div>
                        </div>
                      </div>
                </div>
<?php }
 
if( $postID == 67 ) { ?>
          <div class="col-12 col-lg-6">
                <div class="hotel__slider__booking-rating_k"></div>
                <div class="autoplay_hotel">
                  <div class="img301 op"></div>
                  <div class="img302 op"></div>
                  <div class="img303 op"></div>
                  <div class="img304 op"></div>
                  <div class="img305 op"></div>
                  <div class="img306 op"></div>
                  <div class="img307 op"></div>
                  <div class="img308 op"></div>
                  <div class="img309 op"></div>
                  <div class="img310 op"></div>
                </div>
            <div class="m-2"></div>
            <div class="d-none d-lg-block">
                  <div class="container-fluid">
                    <div class="row pt-2 d-flex justify-content-between align-items-between">
                      <div class="col icon21 no_padding"></div>
                      <div class="col icon2 no_padding"></div>
                      <div class="col icon3 no_padding"></div>
                      <div class="d-sm-none w-100 m-1"></div>
                      <div class="col icon4 no_padding"></div>
                      <div class="col icon5 no_padding"></div>
                    </div>
                  </div>
            </div>
<?php }
			  
if( $postID == 69 ) { ?>
          <div class="col-12 col-lg-6">
                <div class="hotel__slider__booking-rating_n"></div>
                <div class="autoplay_hotel">
                  <div class="img401 op"></div>
                  <div class="img402 op"></div>
                  <div class="img403 op"></div>
                  <div class="img404 op"></div>
                  <div class="img406 op"></div>
                  <div class="img407 op"></div>
                  <div class="img408 op"></div>
                  <div class="img409 op"></div>
                </div>
            <div class="m-2"></div>
            <div class="d-none d-lg-block">
                  <div class="container-fluid">
                    <div class="row pt-2 d-flex justify-content-between align-items-between">
                      <div class="col icon31 no_padding"></div>
                      <div class="col icon2 no_padding"></div>
                      <div class="col icon3 no_padding"></div>
                      <div class="d-sm-none w-100 m-1"></div>
                      <div class="col icon4 no_padding"></div>
                      <div class="col icon5 no_padding"></div>
                    </div>
                  </div>
            </div>
<?php }
			  
if( $postID == 71 ) { ?>
          <div class="col-12 col-lg-6">
                <div class="hotel__slider__booking-rating_t"></div>
                <div class="autoplay_hotel">
                  <div class="img501 op"></div>
                  <div class="img502 op"></div>
                  <div class="img503 op"></div>
                  <div class="img504 op"></div>
                  <div class="img505 op"></div>
                  <div class="img506 op"></div>
                  <div class="img507 op"></div>
                  <div class="img508 op"></div>
                  <div class="img509 op"></div>
                  <div class="img510 op"></div>
                  <div class="img511 op"></div>
                  <div class="img512 op"></div>
                  <div class="img513 op"></div>
                  <div class="img515 op"></div>
                  <div class="img516 op"></div>
                  <div class="img517 op"></div>
                </div>
            <div class="m-2"></div>
            <div class="d-none d-lg-block">
                  <div class="container-fluid">
                    <div class="row pt-2 d-flex justify-content-between align-items-between">
                      <div class="col icon51 no_padding"></div>
                      <div class="col icon2 no_padding"></div>
                      <div class="col icon3 no_padding"></div>
                      <div class="d-sm-none w-100 m-1"></div>
                      <div class="col icon4 no_padding"></div>
                      <div class="col icon5 no_padding"></div>
                    </div>
                  </div>
            </div>
<?php } ?>			  
                <div class="d-lg-none text-center">
                  <div class="p-2">
                        <div class="text-center mb-lg-5">
                          <h1 class="hotel__title--h1"><?php echo $zxSectorVars['heading']; ?></h1><a class="hotel__title--link_map" href="<?php echo $zxSectorVars['map-link-val']; ?>"><?php echo $zxSectorVars['map-link-text']; ?></a>
                        </div>
                  </div>
                  <div class="p-2">
                    <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Подробнее об отеле</button>
                    <div class="collapse p-2" id="collapseExample">
                      <div class="card card-body text-left hotel__text"><?php echo $zxSectorVars['paragraph']; ?></div>
                      <div class="card card-footer">
                            <div class="container-fluid">
                              <div class="row pt-2 d-flex justify-content-between align-items-between">
                                <div class="col icon51 no_padding"></div>
                                <div class="col icon2 no_padding"></div>
                                <div class="col icon3 no_padding"></div>
                                <div class="d-sm-none w-100 m-1"></div>
                                <div class="col icon4 no_padding"></div>
                                <div class="col icon5 no_padding"></div>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center p-2"><a href="<?php echo $zxSectorVars['btn-link']; ?>">
                          <button class="btn btn-warning my_button" type="button"><?php echo $zxSectorVars['btn-text']; ?></button></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <?php

}
