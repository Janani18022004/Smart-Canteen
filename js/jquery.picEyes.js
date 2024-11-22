/*
* jQuery picPlay plugin
* @name jquery-picEyes-1.0.js
* @author xiaoyan - frbao
* @version 1.0
* @date Jan 14, 2016
* @category jQuery plugin
* @github https://github.com/xiaoyan0552/jquery.picEyes
*/
(function($){
	$.fn.picEyes = function(){
		var $obj = this;
		var num,zg = $obj.length - 1;
		var win_w = $(window).width();
		var win_h = $(window).height();
		var eyeHtml = '<div class="picshade"></div>'
			+'<a class="pictures_eyes_close" href="javascript:;"></a>'
			+'<div class="pictures_eyes">'
			+'<div class="pictures_eyes_in">'
			+'<img src="" />'
			+'<div class="next"></div>'
			+'<div class="prev"></div>'
			+'</div>'
			+'</div>'
			+'<div class="pictures_eyes_indicators"></div>';
		$('body').append(eyeHtml);
		$obj.click(function() {
			$(".picshade").css("height", win_h);
			var n = $(this).find("img").attr('src');
			$(".pictures_eyes img").attr("src", n);
			num = $obj.index(this);
			popwin($('.pictures_eyes'));
		});
		$(".pictures_eyes_close,.picshade,.pictures_eyes").click(function() {
			$(".picshade,.pictures_eyes,.pictures_eyes_close,.pictures_eyes_indicators").fadeOut();
			$('body').css({'overflow':'auto'});
		});
		$('.pictures_eyes img').click(function(e){
			stopPropagation(e);
		});
		$(".next").click(function(e){
			if(num < zg){
				num++;
			}else{
				num = 0;
			}
			var xx = $obj.eq(num).find('img').attr("src");
			$(".pictures_eyes img").attr("src", xx);
			stopPropagation(e);
			popwin($('.pictures_eyes'));
		});
		$(".prev").click(function(e){
			if(num > 0){
				num--;
			}else{
				num = zg;
			}
			var xx = $obj.eq(num).find('img').attr("src");
			$(".pictures_eyes img").attr("src", xx);
			stopPropagation(e);
			popwin($('.pictures_eyes'));
		});
		function popwin(obj){
			$('body').css({'overflow':'hidden'});
			var Pwidth = obj.width();
			var Pheight = obj.height();
			obj.css({left:(win_w - Pwidth)/2,top:(win_h - Pheight)/2}).show();
			$('.picshade,.pictures_eyes_close').fadeIn();
			indicatorsList();
		}
		function updatePlace(obj){
			var Pwidth = obj.width();
			var Pheight = obj.height();
			obj.css({left:(win_w - Pwidth)/2,top:(win_h - Pheight)/2});
		}
		function indicatorsList(){
			var indHtml = '';
			$obj.each(function(){
				var img = $(this).find('img').attr('src');
				indHtml +='<a href="javascript:;"><img src="'+img+'"/></a>';
			});
			$('.pictures_eyes_indicators').html(indHtml).fadeIn();
			$('.pictures_eyes_indicators a').eq(num).addClass('current').siblings().removeClass('current');
			$('.pictures_eyes_indicators a').click(function(){
				$(this).addClass('current').siblings().removeClass('current');
				var xx = $(this).find('img').attr("src");
				$(".pictures_eyes img").attr("src", xx);
				updatePlace($('.pictures_eyes'));
			});
		}
		function stopPropagation(e) {
			e = e || window.event;  
			if(e.stopPropagation) {
				e.stopPropagation();  
			} else {  
				e.cancelBubble = true;
			}  
		}
	}
})(jQuery);
