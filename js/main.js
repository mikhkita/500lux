$(document).ready(function(){	
    $(window).stellar({
        positionProperty: 'transform'
    });
    
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
          $('[placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
              input.removeClass('placeholder');
            }
          }).blur(function() {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
              input.addClass('placeholder');
              input.val(input.attr('placeholder'));
            }
          }).blur().parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
              var input = $(this);
              if (input.val() == input.attr('placeholder')) {
                input.val('');
              }
          })
        });
      }
    }
    $.fn.placeholder();
    
    $(".b-burger-button").click(openMenu);

    $(".menu-overlay, .top-menu li").click(closeMenu);

    function openMenu(){
        $(".menu-overlay").fadeIn(300);    
        $(".top-menu").addClass("shown");
        $(".b-burger-button").addClass("opened").unbind("click").bind("click",closeMenu);
        $("html").css("overflow","hidden");
        $("body, html").animate({
            scrollTop : 0
        },300);
        return false;
    }

    function closeMenu(){
        $(".menu-overlay").fadeOut(300);
        $(".top-menu").removeClass("shown");
        $(".b-burger-button").removeClass("opened").unbind("click").bind("click",openMenu);
        $("html").css("overflow","auto");
        return false;
    }

    $( window ).load(function() {
        $(window).scroll(function() {
            var height = $( ".b-case" ).offset().top+$( ".b-case" ).height()-$( ".b-case .left" ).height();
            if($('body').scrollTop() >= ($( ".b-case" ).offset().top-10) && $('body').scrollTop() <= height) {
                $( ".b-case .left" ).removeClass("abs").addClass("fixed");
            } else if($('body').scrollTop() >= height){
                $( ".b-case .left" ).removeClass("fixed").addClass("abs");
            } else {
                $( ".b-case .left" ).removeClass("fixed abs");
            }
        });
    });

    $(".b-left-thumbs li").click(function(){
        if($(this).hasClass('active')) return false;
        var obj = $(this).closest(".b-case");
        var prev = obj.find(".b-left-thumbs li.active").index();
        obj.find(".b-left-thumbs li").eq(prev).removeClass("active");
        $(this).addClass("active");
        obj.find(".b-slide").eq(prev).hide();
        obj.find(".b-slide").eq($(this).index()).fadeIn();
        $(".b-gallery:visible").slick('setPosition');
    });
     
    $(".b-gallery").slick({
        autoplay: true,
        fade: true,
        dots: true,
        infinite: true,
        prevArrow: "<span class='b-way-nav b-way-nav-left'></span>",
        nextArrow: "<span class='b-way-nav b-way-nav-right'></span>"
    });
    
    var countpeople = $(".b-left-thumbs li").length-1;
    $(".levo,.pravo").click(function() {
        var obj = $(this).closest(".b-case");
        var prev = obj.find(".b-left-thumbs li.active").index();
        obj.find(".b-left-thumbs li").eq(prev).removeClass("active");
        obj.find(".b-slide").eq(prev).hide();
        if($(this).hasClass("levo")) {
            prev = (prev == 0) ? countpeople : prev-1;          
        }
        if($(this).hasClass("pravo")) {
            prev = (prev == countpeople) ? 0 : prev+1;           
        }
        obj.find(".b-left-thumbs li").eq(prev).addClass("active");
        obj.find(".b-slide").eq(prev).fadeIn();
    });
	// var myPlace = new google.maps.LatLng(55.754407, 37.625151);
 //    var myOptions = {
 //        zoom: 16,
 //        center: myPlace,
 //        mapTypeId: google.maps.MapTypeId.ROADMAP,
 //        disableDefaultUI: true,
 //        scrollwheel: false,
 //        zoomControl: true
 //    }
 //    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

 //    var marker = new google.maps.Marker({
	//     position: myPlace,
	//     map: map,
	//     title: "Ярмарка вакансий и стажировок"
	// });

    //  var options = {
    //     $AutoPlay: true,                                
    //     $SlideDuration: 500,                            

    //     $BulletNavigatorOptions: {                      
    //         $Class: $JssorBulletNavigator$,             
    //         $ChanceToShow: 2,                           
    //         $AutoCenter: 1,                            
    //         $Steps: 1,                                  
    //         $Lanes: 1,                                  
    //         $SpacingX: 10,                              
    //         $SpacingY: 10,                              
    //         $Orientation: 1                             
    //     }
    // };

    // var jssor_slider1 = new $JssorSlider$("slider1_container", options);

});