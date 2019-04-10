import $ from 'jquery';
window.$ = window.jQuery = $;
import 'slick-carousel';
import 'slick-carousel/slick/slick.scss';

$('.autoplay_hotel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});
