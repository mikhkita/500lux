$(document).ready(function(){

	var $items = [],
		count = $(".b-way").length,
		nowItem = 1;

	$(".b-way").each(function(){
		$items.push($(this));
	});

	$(".b-way").hide();

	$(".b-way-nav-left").click(function(){
		goTo( ( nowItem > 0 )?(nowItem-1):(count-1), -1 );
	});

	$(".b-way-nav-right").click(function(){
		goTo( ( nowItem < count-1 )?(nowItem+1):0, 1 );
	});

	$(".b-steps li").click(function(){
		goTo($(this).index());
	});

	goTo(0);
	
	function goTo(to){
		$(".b-steps li").eq(nowItem).removeClass("active");
		$(".b-steps li").eq(to).addClass("active");
		$items[nowItem].fadeOut(300);

		nowItem = to;

		setTimeout(function(){
			TweenLite.to($(".b-5"), 0.3, { height : $items[to].attr("data-height"), ease : Quad.easeOut } );
			TweenLite.to($items[nowItem].find(".step"), 0, { y : 30, opacity: 0, ease : Quad.easeOut } );
			$items[nowItem].fadeIn(500);

			$items[nowItem].find(".step").each(function(){
				TweenLite.to($(this), 0.5, { y : 0, opacity: 1, delay: $(this).attr("data-delay")*1/1000,ease : Quad.easeOut } );
			});
		},300);
	}

	var swipeh = new MobiSwipe("b-5");
        swipeh.direction = swipeh.HORIZONTAL;
    	swipeh.onswiperight = function() { $(".b-way-nav-left").click(); };
    	swipeh.onswipeleft = function() { $(".b-way-nav-right").click(); };

});