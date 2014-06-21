   /* SLIDERS in content */
    $('.flexslider').flexslider({
        animation: "slide", 
        start: function(slider){
        $('.flexslider').resize();
    }
    });