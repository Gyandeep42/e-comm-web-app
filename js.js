$(document).ready(function(){

$('.wedd-icon2').owlCarousel({
    //nav:true,

    autoplay:true,
    autoplayTimeout:3000,
    loop:true,
    //center:true,
    // animateOut:'slideOutDown',
    // animateIn:'flipInX',
    animateOut:'fadeOut',
    
    responsive:{
        320:{
            items:1
        },
        768:{
            items:2
        },
        992:{
            items:3
        },

    }
    
});
var a=1;
$(".hamburger").click(function(){
    $(".menubar-ham").slideDown();
    if (a==1){
        $(".menubar-ham").slideDown();
        a++;
    }
    else{
        $(".menubar-ham").slideUp();
        a=1;
    }

});
// $('#see-all').click(function(){
//     window.location.href = './guide.html'
// });
});

