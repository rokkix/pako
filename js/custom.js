jQuery(function($){$('.navbar-nav > li').click(function(event){event.preventDefault();var target=$(this).find('>a').prop('hash');$('html, body').animate({scrollTop:$(target).offset().top},500);});$('.nav_scroll').click(function(){var el=$(this).attr('href');$('html, body').animate({scrollTop:$(el).offset().top},800);return false;});$('.image-link').magnificPopup({type:'image'});$(window).load(function(){$portfolio=$('.portfolio-items');$portfolio.isotope({itemSelector:'li',layoutMode:'fitRows'});$portfolio_selectors=$('.portfolio-filter >li>a');$portfolio_selectors.on('click',function(){$portfolio_selectors.removeClass('active');$(this).addClass('active');var selector=$(this).attr('data-filter');$portfolio.isotope({filter:selector});return false;});});$('#scrollup img').mouseover(function(){$(this).animate({opacity:1},100);}).mouseout(function(){$(this).animate({opacity:0.8},100);}).click(function(){$('body, html').animate({scrollTop:0},800);return false;});$(window).scroll(function(){if($(document).scrollTop()>0){$('#scrollup').fadeIn('fast');}else{$('#scrollup').fadeOut('fast');}});});