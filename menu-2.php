<style>

/*header{position:relative;width:100%;background:#333;}*/

.logo {
	position: relative;
	z-index: 123;
	padding: 10px;
	font: 18px verdana;
	color: #6DDB07;
	float: left;
	width: 15%
}

.logo a {
	color: #6DDB07;
}

#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #head-mobile {
	border: 0;
	list-style: none;
	line-height: 1;
	display: block;
	position: relative;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box
}

#cssmenu:after,
#cssmenu>ul:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0
}

#cssmenu #head-mobile {
	display: none
}

#cssmenu {
	font-family: sans-serif;
	background: rgba(0,0,0,.5);
	padding:10px
}

#cssmenu>ul>li {
	float: left;
	margin: 0px !important;

}

#cssmenu>ul>li>a {
    color: #fff;
	padding: 10px;
	font-size: 12px;
	letter-spacing: 1px;
	text-decoration: none;
	font-weight: 900;
}

#cssmenu>ul>li:hover>a,
#cssmenu ul li.active a {
	color: #fff
}

#cssmenu>ul>li:hover,
#cssmenu ul li.active:hover,
#cssmenu ul li.active,
#cssmenu ul li.has-sub.active:hover {
	background: transparent !important;
	-webkit-transition: background .3s ease;
	-ms-transition: background .3s ease;
	transition: background .3s ease;
}


#cssmenu>ul>li.has-sub>a {
	padding-right: 30px;
}

/*#cssmenu>ul>li.has-sub>a:after {
	position: absolute;
	top: 15px;
	right: 11px;
	width: 8px;
	height: 2px;
	display: block;
	background: #ddd;
	content: ''
}

#cssmenu>ul>li.has-sub>a:before {
	position: absolute;
	top: 19px;
	right: 6px;
	display: block;
	width: 2px;
	height: 8px;
	background: #ddd;
	content: '';
	-webkit-transition: all .25s ease;
	-ms-transition: all .25s ease;
	transition: all .25s ease
}*/

#cssmenu>ul>li.has-sub:hover>a:before {
	top: 23px;
	height: 0
}

#cssmenu ul ul {
	position: absolute;
    width: 300px !important;
	left: -9999px
}

#cssmenu ul ul li {
	height: 0;
	-webkit-transition: all .25s ease;
	-ms-transition: all .25s ease;
	background: #C2185B;
	transition: all .25s ease
}

#cssmenu ul ul li:hover {}

#cssmenu li:hover>ul {
	left: auto
}

#cssmenu li:hover>ul>li {
	height: 35px
}

#cssmenu ul ul ul {
	margin-left: 100%;
	top: 0
}

#cssmenu ul ul li a {
	border-bottom: 1px solid rgba(150, 150, 150, 0.15);
	padding: 11px 15px;
	width: auto !important;
	font-size: 12px;
	text-decoration: none;
	color: #ddd;
	font-weight: 400;
}

#cssmenu ul ul li:last-child>a,
#cssmenu ul ul li.last-item>a {
	border-bottom: 0
}

#cssmenu ul ul li:hover>a,
#cssmenu ul ul li a:hover {
	color: #fff
}

#cssmenu ul ul li.has-sub>a:after {
	position: absolute;
	top: 16px;
	right: 11px;
	width: 8px;
	height: 2px;
	display: block;
	background: #ddd;
	content: ''
}

#cssmenu ul ul li.has-sub>a:before {
	position: absolute;
	top: 13px;
	right: 14px;
	display: block;
	width: 2px;
	height: 8px;
	background: #ddd;
	content: '';
	-webkit-transition: all .25s ease;
	-ms-transition: all .25s ease;
	transition: all .25s ease
}

#cssmenu ul ul>li.has-sub:hover>a:before {
	top: 17px;
	height: 0
}

#cssmenu ul ul li.has-sub:hover,
#cssmenu ul li.has-sub ul li.has-sub ul li:hover {
	background: #363636;
}

#cssmenu ul ul ul li.active a {
	border-left: 1px solid #333
}

#cssmenu>ul>li.has-sub>ul>li.active>a,
#cssmenu>ul ul>li.has-sub>ul>li.active>a {
	border-top: 1px solid #333
}

@media screen and (max-width:1000px) {
	.logo {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 46px;
		text-align: center;
		padding: 10px 0 0 0;
		float: none
	}
	.logo2 {
		display: none
	}
	nav {
		width: 100%;
	}
	#cssmenu {
		width: 100%
	}
	#cssmenu ul {
		width: 100%;
		display: none
	}
	#cssmenu ul li {
		width: 100%;
		border-top: 1px solid #444
	}
	#cssmenu ul li:hover {
		background: #363636;
	}
	#cssmenu ul ul li,
	#cssmenu li:hover>ul>li {
		height: auto
	}
	#cssmenu ul li a,
	#cssmenu ul ul li a {
		width: 100%;
		border-bottom: 0
	}
	#cssmenu>ul>li {
		float: none
	}
	#cssmenu ul ul li a {
		padding-left: 25px
	}
	#cssmenu ul ul li {
		background: #333!important;
	}
	#cssmenu ul ul li:hover {
		background: #363636!important
	}
	#cssmenu ul ul ul li a {
		padding-left: 35px
	}
	#cssmenu ul ul li a {
		color: #ddd;
		background: none
	}
	#cssmenu ul ul li:hover>a,
	#cssmenu ul ul li.active>a {
		color: #fff
	}
	#cssmenu ul ul,
	#cssmenu ul ul ul {
		position: relative;
		left: 0;
		width: 100%;
		margin: 0;
		text-align: left
	}
	#cssmenu>ul>li.has-sub>a:after,
	#cssmenu>ul>li.has-sub>a:before,
	#cssmenu ul ul>li.has-sub>a:after,
	#cssmenu ul ul>li.has-sub>a:before {
		display: none
	}
	#cssmenu #head-mobile {
		display: block;
		padding: 23px;
		color: #ddd;
		font-size: 12px;
		font-weight: 700
	}
	.button {
		width: 55px;
		height: 46px;
		position: absolute;
		right: 0;
		top: 0;
		cursor: pointer;
		z-index: 12399994;
	}
	.button:after {
		position: absolute;
		top: 22px;
		right: 20px;
		display: block;
		height: 4px;
		width: 20px;
		border-top: 2px solid #dddddd;
		border-bottom: 2px solid #dddddd;
		content: ''
	}
	.button:before {
		-webkit-transition: all .3s ease;
		-ms-transition: all .3s ease;
		transition: all .3s ease;
		position: absolute;
		top: 16px;
		right: 20px;
		display: block;
		height: 2px;
		width: 20px;
		background: #ddd;
		content: ''
	}
	.button.menu-opened:after {
		-webkit-transition: all .3s ease;
		-ms-transition: all .3s ease;
		transition: all .3s ease;
		top: 23px;
		border: 0;
		height: 2px;
		width: 19px;
		background: #fff;
		-webkit-transform: rotate(45deg);
		-moz-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		-o-transform: rotate(45deg);
		transform: rotate(45deg)
	}
	.button.menu-opened:before {
		top: 23px;
		background: #fff;
		width: 19px;
		-webkit-transform: rotate(-45deg);
		-moz-transform: rotate(-45deg);
		-ms-transform: rotate(-45deg);
		-o-transform: rotate(-45deg);
		transform: rotate(-45deg)
	}
	#cssmenu .submenu-button {
		position: absolute;
		z-index: 99;
		right: 0;
		top: 0;
		display: block;
		border-left: 1px solid #444;
		height: 46px;
		width: 46px;
		cursor: pointer
	}
	#cssmenu .submenu-button.submenu-opened {
		background: #262626
	}
	#cssmenu ul ul .submenu-button {
		height: 34px;
		width: 34px
	}
	#cssmenu .submenu-button:after {
		position: absolute;
		top: 22px;
		right: 19px;
		width: 8px;
		height: 2px;
		display: block;
		background: #ddd;
		content: ''
	}
	#cssmenu ul ul .submenu-button:after {
		top: 15px;
		right: 13px
	}
	#cssmenu .submenu-button.submenu-opened:after {
		background: #fff
	}
	#cssmenu .submenu-button:before {
		position: absolute;
		top: 19px;
		right: 22px;
		display: block;
		width: 2px;
		height: 8px;
		background: #ddd;
		content: ''
	}
	#cssmenu ul ul .submenu-button:before {
		top: 12px;
		right: 16px
	}
	#cssmenu .submenu-button.submenu-opened:before {
		display: none
	}
	#cssmenu ul ul ul li.active a {
		border-left: none
	}
	#cssmenu>ul>li.has-sub>ul>li.active>a,
	#cssmenu>ul ul>li.has-sub>ul>li.active>a {
		border-top: none
	}
}
</style>
<div class="btVerticalHeaderTop">
      <div class="btVerticalMenuTrigger">
         &nbsp;
         <div class="bt_bb_icon" data-bt-override-class="{}"><a href="#" target="_self"   data-ico-fa="&#xf0c9;" class="bt_bb_icon_holder"></a></div>
      </div>
      <div class="btLogoArea">
         <!-- Crest & Logo -->
         <div class="logo">
            <div class='btCrest'><a href='http://tabula.bold-themes.com/sunny/'><img src='http://tabula.bold-themes.com/sunny/wp-content/uploads/sites/2/2019/05/crest_acting.png' class='btCrestImg' alt='Sunny'/></a></div>
         </div>
         <!-- Only Logo -->
      </div>
      <!-- /btLogoArea -->
   </div>
   <!-- /btVerticalHeaderTop -->

   
   <header class="mainHeader btClear gutter " <?php   
   if((isset($current_page)) && $current_page != 'main'){  ?>
   style="background: #880E4F"
   <?php } ?>
   
   >
      <div class="mainHeaderInner">
         <div class="btLogoArea menuHolder btClear">
            <div class="port">
               <div class="btHorizontalMenuTrigger">
                  &nbsp;
                  <div class="bt_bb_icon" data-bt-override-class="{}"><a href="#" target="_self"   data-ico-fa="&#xf0c9;" class="bt_bb_icon_holder"></a></div>
               </div>
               <!-- Crest & Logo -->
               <div class="logo">
                  <div class='btCrest'><a href='<?php echo $set['installUrl']; ?>; ?>'>
				  <img src='<?php echo $set['installUrl']; ?>logo/<?php echo $set['schoolLogo']; ?>' class='btCrestImg' alt='Sunny'/>
				</a></div>
               </div>
               <!-- Only Logo -->
               <div class="topBarInLogoArea">
                  <div class="topBarInLogoAreaCell">
                     <div class="btIconWidget  btWidgetWithText">
                        <div class="btIconWidgetIcon"><span  data-ico-dripicons="&#xe932;" class="bt_bb_icon_holder"></span></div>
                        <div class="btIconWidgetContent"><span class="btIconWidgetTitle">HOURS</span><span class="btIconWidgetText">Mon - Fri 8 AM - 5 PM</span></div>
                     </div>
                     <div class="btIconWidget  btWidgetWithText">
                        <div class="btIconWidgetIcon"><span  data-ico-dripicons="&#xe98e;" class="bt_bb_icon_holder"></span></div>
                        <div class="btIconWidgetContent"><span class="btIconWidgetTitle">CALL</span><span class="btIconWidgetText"><?php echo $set['phone']; ?></span></div>
                     </div>
                     <!--<div class="btIconWidget  btWidgetWithText">
                        <div class="btIconWidgetIcon"><span  data-ico-dripicons="&#xe015;" class="bt_bb_icon_holder"></span></div>
                        <div class="btIconWidgetContent"><span class="btIconWidgetTitle">E-Mail</span><span class="btIconWidgetText"><?php echo $set['siteEmail']; ?></span></div>
                     </div>-->
                  </div>
                  <!-- /topBarInLogoAreaCell -->
               </div>
               <!-- /topBarInLogoArea -->
            </div>
            <!-- /port -->
         </div>

         
         <!-- /menuHolder -->
         <div class="btBelowLogoArea btClear">
            <div class="port">
               <div class="menuPort">
                  <div class="topBarInMenu">
                     <div class="topBarInMenuCell">
                        <a href="https://twitter.com/<?php echo $set['twitter'];  ?>" target="_blank" class="btIconWidget ">
                           <div class="btIconWidgetIcon"><span  data-ico-fontawesome="&#xf099;" class="bt_bb_icon_holder"></span></div>
                        </a>
                        <a href="https://www.facebook.com/<?php echo $set['facebook'];  ?>/" target="_blank" class="btIconWidget ">
                           <div class="btIconWidgetIcon"><span  data-ico-fontawesome="&#xf09a;" class="bt_bb_icon_holder"></span></div>
                        </a>
                        <a href="https://www.youtube.com/channel/<?php echo $set['youtube'];  ?>" target="_blank" class="btIconWidget ">
                           <div class="btIconWidgetIcon"><span  data-ico-fontawesome="&#xf16a;" class="bt_bb_icon_holder"></span></div>
                        </a>
                        <a href="https://www.instagram.com/channel/<?php echo $set['instagram'];  ?>" target="_self" class="btIconWidget ">
                           <div class="btIconWidgetIcon"><span  data-ico-fontawesome="&#xf16d;" class="bt_bb_icon_holder"></span></div>
                        </a>
                     </div>
                     <!-- /topBarInMenu -->
                  </div>
                  <!-- /topBarInMenuCell -->
                  <nav id='cssmenu'>
                  
                    <div id="head-mobile"></div>
                    <div class="button"></div>
                    <!-- Collapsible content -->
                    <?php
                    echo display_children(0, 4);
                    ?>

                    </nav>
               </div>
               <!-- .menuPort -->
            </div>
            <!-- /port -->
         </div>
         <!-- /menuHolder / btBelowLogoArea -->
      </div>
      <!-- / inner header for scrolling -->
   </header>
   <!-- /.mainHeader -->






   <script>
    (function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);
</script>