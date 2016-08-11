$("#one").hide(0).delay(200).fadeIn(3000)
$("#two").hide(0).delay(2000).fadeIn(3000)


$(function () {
    $(document).ready(function () {
        $('#menu_m').slicknav();
    });
});

$(document).ready(function () {

    $("#phone").inputmask("+99(999)999-99-99")
    $("#name").inputmask("aaaaaaaaaaaaaa", {placeholder: " "})
    $("#surname").inputmask("aaaaaaaaaaaaaa", {placeholder: " "})
    $("#email").inputmask("email", {placeholder: " "})
})


$(document).ready(function () {

    $('#feedback').validate({ // initialize the plugin
        rules: {

            name: {
                required: true
            },
            surname: {
                required: true
            },
            phone: {
                required: true
            },
            email: {
                required: true
            },
            message: {

                required: true

            }
        },


        errorPlacement: function (error, element) {
            error.insertBefore(element);
        }
    });

});


function init_map() {
    var myOptions = {
        zoom: 10,
        center: new google.maps.LatLng(50.0052938, 36.24293090000003),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
    marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(50.0052938, 36.24293090000003)});
    infowindow = new google.maps.InfoWindow({content: '<strong>Oriole Ltd.</strong><br>ул. Алчевских 31, Харьков, Харьковская область<br>'});
    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });
    infowindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', init_map);


$(document).ready(function () {
    $('#pslider').owlCarousel({

        loop: true,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        autoHeight: true,
        autoWidth: true,
        items: 1,
        margin: 40,
        center: true,
        dotsEach: true,
        responsive: {
            // breakpoint from 0 up
            0: {

                items: 1,

            },
            // breakpoint from 480 up
            480: {

                items: 3,

            },
            // breakpoint from 768 up
            1000: {

                items: 5,

            }
        }
    });
});


//$(document).ready(function () {
//
//
//    $('#slider').owlCarousel({
//
//
//
//
//        grabClass: 'owl-grab',
//        margin: 40,
//        items: 3,
//        autoWidth: true,
//        responsive:{
//            0:{
//                items:1,
//                nav:true
//            },
//            600:{
//                items:3,
//                nav:false
//            },
//            1000:{
//                items:5,
//                nav:true,
//                loop:false
//            }
//        }
//
//
//    });
//
//
//});