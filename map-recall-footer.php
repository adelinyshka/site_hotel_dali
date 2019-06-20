<?php
/**
* Created by Adel
* Email: adelinyshka@gmail.com
* Date: 23.05.2019 17:19
*/

//error_reporting(E_ALL); ini_set('display_errors', 1);
//die(__FILE__); //phpinfo();


$zxFooterVars['map-heading'] = '';
$zxFooterVars['map-link'] = '';

$zxFooterVars['recall-heading'] = 'Не смогли определиться?';
$zxFooterVars['recall-subheading'] = 'Закажите обратный звонок';
$zxFooterVars['recall-btn-text'] = 'Перезвоните мне';
$zxFooterVars['recall-warning'] = 'Оставляя свой номер, вы даете согласие с политикой обработки данных';

$zxFooterVars['footer-phone-text'] = '';
$zxFooterVars['footer-phone-link'] = '';
$zxFooterVars['footer-email-text'] = '';
$zxFooterVars['footer-email-link'] = '';


/*
* All posts of promo_footer type
*/
$promo_footer = get_posts([
'post_type' => 'promo_footer',
'post_status' => 'publish',
'numberposts' => -1
// 'order'    => 'ASC'
]);
//print_r($promo_footer); die;

/*
*  Gettig last ID of post of promo_header type
*/
$postID =$promo_footer[0]->ID;
$metaData =(get_post_meta($customPostID));

!empty (get_field('map-heading', $postID)) ? $zxReviewVars['map-heading'] = get_field('map-heading', $postID) : $zxReviewVars['map-heading'] = NULL;
!empty (get_field('map-link', $postID)) ? $zxReviewVars['map-link'] = get_field('map-link', $postID) : $zxReviewVars['map-link'] = NULL;
!empty (get_field('recall-heading', $postID)) ? $zxReviewVars['recall-heading'] = get_field('recall-heading', $postID) : $zxReviewVars['recall-heading'] = NULL;
!empty (get_field('recall-subheading', $postID)) ? $zxReviewVars['recall-subheading'] = get_field('recall-subheading', $postID) : $zxReviewVars['recall-subheading'] = NULL;
!empty (get_field('recall-btn-text', $postID)) ? $zxReviewVars['recall-btn-text'] = get_field('recall-btn-text', $postID) : $zxReviewVars['recall-btn-text'] = NULL;
!empty (get_field('recall-warning', $postID)) ? $zxReviewVars['recall-warning'] = get_field('recall-warning', $postID) : $zxReviewVars['recall-warning'] = NULL;
!empty (get_field('footer-phone-text', $postID)) ? $zxReviewVars['footer-phone-text'] = get_field('footer-phone-text', $postID) : $zxReviewVars['footer-phone-text'] = NULL;
!empty (get_field('footer-phone-link', $postID)) ? $zxReviewVars['footer-phone-link'] = get_field('footer-phone-link', $postID) : $zxReviewVars['footer-phone-link'] = NULL;
!empty (get_field('footer-email-text', $postID)) ? $zxReviewVars['footer-email-text'] = get_field('footer-email-text', $postID) : $zxReviewVars['footer-email-text'] = NULL;
!empty (get_field('footer-email-link', $postID)) ? $zxReviewVars['footer-email-link'] = get_field('footer-email-link', $postID) : $zxReviewVars['footer-email-link'] = NULL;

!empty (get_field('recall-modal-btn-text', $postID)) ? $zxReviewVars['recall-modal-btn-text'] = get_field('recall-modal-btn-text', $postID) : $zxReviewVars['recall-modal-btn-text'] = NULL;

!empty (get_field('recall-modal-heading', $postID)) ? $zxReviewVars['recall-modal-heading'] = get_field('recall-modal-heading', $postID) : $zxReviewVars['recall-modal-heading'] = NULL;


/*
* MAP
*/

?>

<div class="map shadow" id="map">
<h4 class="map__title mt-5 mb-4"><?php echo $zxReviewVars['map-heading']; ?></h4><script type="text/javascript" charset="utf-8" async src="<?php echo $zxReviewVars['map-link']; ?>"></script>
</div>
<?php


/*
* RECALL
*/

?>
<div class="m-5"></div>
<div class="helloy" id="recall_us"></div>

<div class="d-none d-md-block">
<div class="recall shadow">
<div class="container-fluid">
<div class="row">
<div class="offset-md-6 col-6 text-center col-xl-4 col-lg-5 col-md-6 col-sm-8 col-xs-10 col-10 text-center pt-3 pt-sm-3">
<div class="m-sm-3 m-1 text-center p-3"><a id="recall_us"></a>
<div class="recall__title"><?php echo $zxReviewVars['recall-heading']; ?></div>
<div class="recall__subtitle"><?php echo $zxReviewVars['recall-subheading']; ?></div>
<div class="recall__action p-2 p-md-3">
<button class="my_button--recall" type="button" data-toggle="modal" data-target="#exampleModal"><?php echo $zxReviewVars['recall-btn-text']; ?></button>
<!-- Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<!--<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel"><?php echo $zxReviewVars['recall-modal-heading']; ?></h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>-->
<div class="modal-body">

<form class="recall__form-sms" method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/assets/php/send.php">
<label style="font-size: 24px;font-weight: bold;" class="text-center p-3">Оставьте ваш номер и мы быстро перезвоним<br>
<input type="text" class="mt-3" name="message" size="26" maxlength="15" width="220px" height="40px"></label>
<input type="hidden" name="phone" value="79052209010"><br>
<input type="submit" name ="send" class="btn btn-warning my_button" value="Отправить">
</form>
</div>
<!--<div class="modal-footer">
<button class="btn btn-warning my_button" type="button"><?php echo $zxReviewVars['recall-modal-btn-text']; ?></button>
</div>-->
</div>
</div>
</div>
</div>

<div class="recall__small-text"><?php echo $zxReviewVars['recall-btn-warning']; ?></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="discount__white-stripe"></div>
<?php
/*
* FOOTER
*/

?>

<div class="footer--bgcolor">
<div class="container-fluid">
<div class="row justify-content-md-between justify-content-center pt-md-5 pt-3 align-items-center p-3">
<div class="col-auto text-center align-self-center p-3 p-md-0">
<div class="logonew"></div>
</div>
<div class="col-md-6 col-12">
<div class="col-auto text-md-right text-center p-3 p-md-0"><a class="footer--text p-3" href="tel:<?php echo $zxReviewVars['footer-phone-link']; ?>"><?php echo $zxReviewVars['footer-phone-text']; ?></a></div>
<div class="col-auto text-md-right text-center p-3 p-md-0"><a class="footer--text p-3" href="mailto:<?php echo $zxReviewVars['footer-email-text']; ?>"><?php echo $zxReviewVars['footer-email-text']; ?></a></div>
</div>
<div class="col-12 text-center footer--text p-3">&#169; Санкт-Петербург 2019</div>
</div>
</div>
</div>
