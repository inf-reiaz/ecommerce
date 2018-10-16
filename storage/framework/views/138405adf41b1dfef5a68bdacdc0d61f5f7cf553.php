
	


<!--library js-->
<script src="/public/front/menu3/assets/js/jquery.js"></script>
<!--library js-->
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script  src="/public/front/menu3/assets/slider/js/jquery.themepunch.plugins.min.js"></script>
<script  src="/public/front/menu3/assets/slider/js/jquery.themepunch.revolution.min.js"></script>
<!--owlcarousel-->
<!--scrolltop-->


<script src="/public/front/menu3/assets/js/scrolltopcontrol.js"></script>


<!--scrolltop-->
<!--searchbar-->
<script src="/public/front/menu3/assets/js/popper.min.js"></script>
<script src="/public/front/menu3/assets/js/bootstrap.min.js"></script>
<script src="/public/front/menu3/assets/js/grayscale.min.js"></script>
<!--all script-->


<!--<script src="/public/front/menu3/assets/js/home-2.js"></script>-->
<!--wow animate-->
<!--<script src="/public/front/menu3/assets/js/wow.min.js"></script>-->
<!--<script src="/public/front/menu3/assets/js/animate1.js"></script>-->
<!--wow animate-->


	<script src="/public/front/js/jquery.wmuSlider.js"></script> 
	<script src="/public/front/js/jquery.nicescroll.min.js"></script> 
	<script src="http://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script> 
	

<script>

$(document).ready(function(){
    
    $(".cart_ul").niceScroll({cursorcolor:"#01010185"});
	

    $('#myTab li a').on('click', function(){
        $('#myTab li a.tab_active').removeClass('tab_active');
        $(this).addClass('tab_active');
    });
    

    $('.owl-carousel .item').on('click', function(){
        $('.owl-carousel .owl_item_active').removeClass('owl_item_active');
        $(this).addClass('owl_item_active');
    });
    
    
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
    
    
	$('.example1').wmuSlider();
	
	
	$('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    });
    

});

</script> 

	<?php echo $__env->yieldContent('js'); ?>