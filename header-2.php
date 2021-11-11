<?php
include('includes/fetch.php');

require_once 'class/database.php';
require_once 'class/category.php';

$current_page = getCurrentPage();

if(isset($_GET['pid'])){
     $p = $_GET['pid'];
		$qu = mysqli_query ($mysqli,"SELECT * FROM mp_pages where nav_id='$p'");
		$getc = mysqli_num_rows($qu);
        $pt = mysqli_fetch_array($qu);   
    }
?>

<!DOCTYPE html>
<html class="no-js" lang="en-US" data-bt-theme="Tabula 1.0.3">
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="MASTERS LIGHTHOUSE SCHOOL - The school for tomorrow's leaders.">
    <meta name="author" content="<?php echo $set['siteName']; ?>">
    <meta name="keyword" content="content, management, system, schools, school management system, schoool portal, chat, link, linkedln, <?php echo $set['siteName']; ?>">
	<title>
    <?php 
    if((isset($current_page)) && $current_page == 'main'){ echo "MASTERS LIGHTHOUSE SCHOOL"; }else{
    echo (isset($current_page)) ? ucwords(str_replace('_', ' ', $current_page)) : SITE_TITLE;
    } 
    ?>
        
    </title>
<meta name='robots' content='max-image-preview:large' />
<!-- Optimized by SG Optimizer plugin version - 5.7.17 --><link rel='dns-prefetch' href='//www.google.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />

		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/tabula.bold-themes.com\/sunny\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style>

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_1 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_1 .bt_bb_progress_bar_bg {
	background: #191919;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_1 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_1 .bt_bb_progress_bar_inner {
	border-color: #ffffff;
	color: #ffffff;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_1 .bt_bb_progress_bar_bg {
	background: #ffffff;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_1 .bt_bb_progress_bar_inner {
	background: #191919;
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_icon .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #ffffff;
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #ffffff;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #191919 inset;
	background-color: #ffffff;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_borderless a {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_1.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	background-color: #ffffff;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #ffffff;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_headline {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_headline .bt_bb_headline_superheadline {
	color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ffffff;
	color: #191919;
	border-color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1 .bt_bb_accordion_item {
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #191919;
	border-color: #191919;
}

.bt_bb_price_list.bt_bb_color_scheme_1 {
	border-color: #191919;
}

.bt_bb_price_list.bt_bb_color_scheme_1 .bt_bb_price_list_title {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_price_list.bt_bb_color_scheme_1 ul li {
	border-color: #191919;
}

.bt_bb_section.bt_bb_color_scheme_1 {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_row.bt_bb_color_scheme_1 {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_column.bt_bb_color_scheme_1 {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_section {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_row,
.bt_bb_color_scheme_1.bt_bb_row_inner {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_headline {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_headline .bt_bb_headline_superheadline {
	color: #191919;
}

.bt_bb_dash_color_scheme_1.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_1.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #ffffff;
}

.bt_bb_dash_color_scheme_1.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_1.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_icon a {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_icon:hover a {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #ffffff;
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #ffffff;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_icon .bt_bb_icon_holder span {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_filled a:hover {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_borderless a {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_1.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_1.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	background-color: #ffffff;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #ffffff;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_1.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_1.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_service .bt_bb_service_content_button_text a {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ffffff;
	color: #191919;
	border-color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1 .bt_bb_accordion_item {
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_1.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_price_list .bt_bb_price_list_price {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_1 .bt_bb_price_list_supertitle {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_price_list.bt_bb_style_outline {
	border-color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_1.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_1.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_1.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_1.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_1.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_1.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #191919;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_content_slider .slick-dots li {
	background-color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_1.bt_bb_content_slider .slick-dots li:hover {
	background-color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #ffffff;
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #191919;
}

.bt_bb_color_scheme_1.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #191919;
}

.bt_bb_color_scheme_1.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #191919;
}

.bt_bb_color_scheme_1.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ffffff;
	box-shadow: 0 0 0 1px #ffffff inset;
}

.bt_bb_color_scheme_1.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ffffff;
	box-shadow: 0 0 0 3em #191919 inset;
}

.bt_bb_color_scheme_1.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ffffff;
	box-shadow: 0 0 0 3em #191919 inset;
}

.bt_bb_color_scheme_1.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ffffff;
}

.bt_bb_color_scheme_1.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
}

.bt_bb_color_scheme_1.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #191919;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_2 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_2 .bt_bb_progress_bar_bg {
	background: #ffffff;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_2 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_2 .bt_bb_progress_bar_inner {
	border-color: #191919;
	color: #191919;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_2 .bt_bb_progress_bar_bg {
	background: #191919;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_2 .bt_bb_progress_bar_inner {
	background: #ffffff;
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_icon .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #191919;
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #191919;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #ffffff inset;
	background-color: #191919;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_borderless a {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_2.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	background-color: #191919;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #191919;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_headline {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #191919;
	color: #ffffff;
	border-color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2 .bt_bb_accordion_item {
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_price_list.bt_bb_color_scheme_2 {
	border-color: #ffffff;
}

.bt_bb_price_list.bt_bb_color_scheme_2 .bt_bb_price_list_title {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_price_list.bt_bb_color_scheme_2 ul li {
	border-color: #ffffff;
}

.bt_bb_section.bt_bb_color_scheme_2 {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_row.bt_bb_color_scheme_2 {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_column.bt_bb_color_scheme_2 {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_section {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_row,
.bt_bb_color_scheme_2.bt_bb_row_inner {
	color: #191919;
	background-color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_headline {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ffffff;
}

.bt_bb_dash_color_scheme_2.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_2.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #191919;
}

.bt_bb_dash_color_scheme_2.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_2.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_icon a {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_icon:hover a {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #191919;
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #191919;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_icon .bt_bb_icon_holder span {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #191919 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_filled a:hover {
	color: #ffffff;
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: transparent;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_borderless a {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_2.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_2.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	background-color: #191919;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #191919;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_2.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_2.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_service .bt_bb_service_content_button_text a {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #191919;
	color: #ffffff;
	border-color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2 .bt_bb_accordion_item {
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #ffffff;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_2.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_price_list .bt_bb_price_list_price {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_2 .bt_bb_price_list_supertitle {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_price_list.bt_bb_style_outline {
	border-color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_2.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_2.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_2.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_2.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_2.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_2.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #ffffff;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_content_slider .slick-dots li {
	background-color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_2.bt_bb_content_slider .slick-dots li:hover {
	background-color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #191919;
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #191919;
}

.bt_bb_color_scheme_2.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #191919;
}

.bt_bb_color_scheme_2.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ffffff;
}

.bt_bb_color_scheme_2.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
}

.bt_bb_color_scheme_2.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
	box-shadow: 0 0 0 3em #ffffff inset;
}

.bt_bb_color_scheme_2.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
	box-shadow: 0 0 0 3em #ffffff inset;
}

.bt_bb_color_scheme_2.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_2.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ffffff;
	box-shadow: 0 0 0 1px #ffffff inset;
}

.bt_bb_color_scheme_2.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ffffff;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_3 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_3 .bt_bb_progress_bar_bg {
	background: #191919;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_3 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_3 .bt_bb_progress_bar_inner {
	border-color: #ff7471;
	color: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_3 .bt_bb_progress_bar_bg {
	background: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_3 .bt_bb_progress_bar_inner {
	background: #191919;
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #ff7471;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #191919 inset;
	background-color: #ff7471;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_3.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #ff7471;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_headline .bt_bb_headline_superheadline {
	color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #191919;
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #191919;
	border-color: #191919;
}

.bt_bb_price_list.bt_bb_color_scheme_3 {
	border-color: #191919;
}

.bt_bb_price_list.bt_bb_color_scheme_3 .bt_bb_price_list_title {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_price_list.bt_bb_color_scheme_3 ul li {
	border-color: #191919;
}

.bt_bb_section.bt_bb_color_scheme_3 {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_row.bt_bb_color_scheme_3 {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_column.bt_bb_color_scheme_3 {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_section {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_row,
.bt_bb_color_scheme_3.bt_bb_row_inner {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_headline .bt_bb_headline_superheadline {
	color: #191919;
}

.bt_bb_dash_color_scheme_3.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_3.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #ff7471;
}

.bt_bb_dash_color_scheme_3.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_3.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_icon a {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_icon:hover a {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #ff7471;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_icon .bt_bb_icon_holder span {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_filled a:hover {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_3.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_3.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #ff7471;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_3.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_3.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_service .bt_bb_service_content_button_text a {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #191919;
	border-color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_3.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_price_list .bt_bb_price_list_price {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_3 .bt_bb_price_list_supertitle {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_price_list.bt_bb_style_outline {
	border-color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_3.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_3.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_3.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_3.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_3.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_3.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #191919;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_content_slider .slick-dots li {
	background-color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_3.bt_bb_content_slider .slick-dots li:hover {
	background-color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #ff7471;
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #191919;
}

.bt_bb_color_scheme_3.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #191919;
}

.bt_bb_color_scheme_3.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #191919;
}

.bt_bb_color_scheme_3.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.bt_bb_color_scheme_3.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 3em #191919 inset;
}

.bt_bb_color_scheme_3.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 3em #191919 inset;
}

.bt_bb_color_scheme_3.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_3.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
}

.bt_bb_color_scheme_3.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #191919;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_4 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_4 .bt_bb_progress_bar_bg {
	background: #ffffff;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_4 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_4 .bt_bb_progress_bar_inner {
	border-color: #ff7471;
	color: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_4 .bt_bb_progress_bar_bg {
	background: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_4 .bt_bb_progress_bar_inner {
	background: #ffffff;
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #ff7471;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #ffffff inset;
	background-color: #ff7471;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_4.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #ff7471;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #ffffff;
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_price_list.bt_bb_color_scheme_4 {
	border-color: #ffffff;
}

.bt_bb_price_list.bt_bb_color_scheme_4 .bt_bb_price_list_title {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_price_list.bt_bb_color_scheme_4 ul li {
	border-color: #ffffff;
}

.bt_bb_section.bt_bb_color_scheme_4 {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_row.bt_bb_color_scheme_4 {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_column.bt_bb_color_scheme_4 {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_section {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_row,
.bt_bb_color_scheme_4.bt_bb_row_inner {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ffffff;
}

.bt_bb_dash_color_scheme_4.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_4.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #ff7471;
}

.bt_bb_dash_color_scheme_4.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_4.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_icon a {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_icon:hover a {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #ff7471;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_icon .bt_bb_icon_holder span {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_filled a:hover {
	color: #ffffff;
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: transparent;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_4.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_4.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #ff7471;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_4.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_4.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_service .bt_bb_service_content_button_text a {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #ffffff;
	border-color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_4.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_price_list .bt_bb_price_list_price {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_4 .bt_bb_price_list_supertitle {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_price_list.bt_bb_style_outline {
	border-color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_4.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_4.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_4.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_4.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_4.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_4.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #ffffff;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_content_slider .slick-dots li {
	background-color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_4.bt_bb_content_slider .slick-dots li:hover {
	background-color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #ff7471;
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ffffff;
}

.bt_bb_color_scheme_4.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.bt_bb_color_scheme_4.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 3em #ffffff inset;
}

.bt_bb_color_scheme_4.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 3em #ffffff inset;
}

.bt_bb_color_scheme_4.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_4.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ffffff;
	box-shadow: 0 0 0 1px #ffffff inset;
}

.bt_bb_color_scheme_4.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ffffff;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_5 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_5 .bt_bb_progress_bar_bg {
	background: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_5 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_5 .bt_bb_progress_bar_inner {
	border-color: #191919;
	color: #191919;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_5 .bt_bb_progress_bar_bg {
	background: #191919;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_5 .bt_bb_progress_bar_inner {
	background: #ff7471;
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_icon .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #191919;
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #191919;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #ff7471 inset;
	background-color: #191919;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_borderless a {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_5.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	background-color: #191919;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #191919;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_headline {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #191919;
	color: #ff7471;
	border-color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5 .bt_bb_accordion_item {
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_price_list.bt_bb_color_scheme_5 {
	border-color: #ff7471;
}

.bt_bb_price_list.bt_bb_color_scheme_5 .bt_bb_price_list_title {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_price_list.bt_bb_color_scheme_5 ul li {
	border-color: #ff7471;
}

.bt_bb_section.bt_bb_color_scheme_5 {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_row.bt_bb_color_scheme_5 {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_column.bt_bb_color_scheme_5 {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_section {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_row,
.bt_bb_color_scheme_5.bt_bb_row_inner {
	color: #191919;
	background-color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_headline {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ff7471;
}

.bt_bb_dash_color_scheme_5.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_5.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #191919;
}

.bt_bb_dash_color_scheme_5.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_5.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_icon a {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_icon:hover a {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #191919;
	box-shadow: 0 0 0 1em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #191919;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_icon .bt_bb_icon_holder span {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #191919 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_filled a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_borderless a {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_5.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_5.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	background-color: #191919;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #191919;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_5.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_5.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_service .bt_bb_service_content_button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #191919;
	color: #ff7471;
	border-color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5 .bt_bb_accordion_item {
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #ff7471;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_5.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_price_list .bt_bb_price_list_price {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_5 .bt_bb_price_list_supertitle {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_price_list.bt_bb_style_outline {
	border-color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_5.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_5.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_5.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_5.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_5.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_5.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #ff7471;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_content_slider .slick-dots li {
	background-color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_5.bt_bb_content_slider .slick-dots li:hover {
	background-color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #191919;
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #191919;
}

.bt_bb_color_scheme_5.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #191919;
}

.bt_bb_color_scheme_5.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ff7471;
}

.bt_bb_color_scheme_5.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
}

.bt_bb_color_scheme_5.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.bt_bb_color_scheme_5.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.bt_bb_color_scheme_5.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_5.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.bt_bb_color_scheme_5.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ff7471;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_6 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_6 .bt_bb_progress_bar_bg {
	background: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_6 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_6 .bt_bb_progress_bar_inner {
	border-color: #ffffff;
	color: #ffffff;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_6 .bt_bb_progress_bar_bg {
	background: #ffffff;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_6 .bt_bb_progress_bar_inner {
	background: #ff7471;
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_icon .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #ffffff;
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #ffffff;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #ff7471 inset;
	background-color: #ffffff;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_borderless a {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_6.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	background-color: #ffffff;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #ffffff;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_headline {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ffffff;
	color: #ff7471;
	border-color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6 .bt_bb_accordion_item {
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_price_list.bt_bb_color_scheme_6 {
	border-color: #ff7471;
}

.bt_bb_price_list.bt_bb_color_scheme_6 .bt_bb_price_list_title {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_price_list.bt_bb_color_scheme_6 ul li {
	border-color: #ff7471;
}

.bt_bb_section.bt_bb_color_scheme_6 {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_row.bt_bb_color_scheme_6 {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_column.bt_bb_color_scheme_6 {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_section {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_row,
.bt_bb_color_scheme_6.bt_bb_row_inner {
	color: #ffffff;
	background-color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_headline {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ff7471;
}

.bt_bb_dash_color_scheme_6.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_6.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #ffffff;
}

.bt_bb_dash_color_scheme_6.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_6.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_icon a {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_icon:hover a {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #ffffff;
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #ffffff;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_icon .bt_bb_icon_holder span {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #ffffff inset;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_filled a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_borderless a {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_6.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_6.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	background-color: #ffffff;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #ffffff;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_6.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_6.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_service .bt_bb_service_content_button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ffffff;
	color: #ff7471;
	border-color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6 .bt_bb_accordion_item {
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #ff7471;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_6.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_price_list .bt_bb_price_list_price {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_6 .bt_bb_price_list_supertitle {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_price_list.bt_bb_style_outline {
	border-color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_6.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_6.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_6.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_6.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_6.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_6.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #ff7471;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_content_slider .slick-dots li {
	background-color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_6.bt_bb_content_slider .slick-dots li:hover {
	background-color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #ffffff;
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ff7471;
}

.bt_bb_color_scheme_6.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ffffff;
	box-shadow: 0 0 0 1px #ffffff inset;
}

.bt_bb_color_scheme_6.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ffffff;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.bt_bb_color_scheme_6.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ffffff;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.bt_bb_color_scheme_6.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ffffff;
}

.bt_bb_color_scheme_6.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.bt_bb_color_scheme_6.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ff7471;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_7 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_7 .bt_bb_progress_bar_bg {
	background: #191919;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_7 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_7 .bt_bb_progress_bar_inner {
	border-color: #fbdd45;
	color: #fbdd45;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_7 .bt_bb_progress_bar_bg {
	background: #fbdd45;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_7 .bt_bb_progress_bar_inner {
	background: #191919;
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_icon .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #fbdd45;
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #fbdd45;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #191919 inset;
	background-color: #fbdd45;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_borderless a {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_7.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	background-color: #fbdd45;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #fbdd45;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_headline {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_headline .bt_bb_headline_superheadline {
	color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #fbdd45;
	color: #191919;
	border-color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7 .bt_bb_accordion_item {
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #191919;
	border-color: #191919;
}

.bt_bb_price_list.bt_bb_color_scheme_7 {
	border-color: #191919;
}

.bt_bb_price_list.bt_bb_color_scheme_7 .bt_bb_price_list_title {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_price_list.bt_bb_color_scheme_7 ul li {
	border-color: #191919;
}

.bt_bb_section.bt_bb_color_scheme_7 {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_row.bt_bb_color_scheme_7 {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_column.bt_bb_color_scheme_7 {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_section {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_row,
.bt_bb_color_scheme_7.bt_bb_row_inner {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_headline {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_headline .bt_bb_headline_superheadline {
	color: #191919;
}

.bt_bb_dash_color_scheme_7.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_7.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #fbdd45;
}

.bt_bb_dash_color_scheme_7.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_7.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_icon a {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_icon:hover a {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #fbdd45;
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #fbdd45;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_icon .bt_bb_icon_holder span {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_filled a:hover {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_borderless a {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_7.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_7.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	background-color: #fbdd45;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	background-color: #fbdd45;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_7.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_7.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_service .bt_bb_service_content_button_text a {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #fbdd45;
	color: #191919;
	border-color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7 .bt_bb_accordion_item {
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_7.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_price_list .bt_bb_price_list_price {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_7 .bt_bb_price_list_supertitle {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_price_list.bt_bb_style_outline {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_7.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_7.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_7.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_7.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_7.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_7.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #191919;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_content_slider .slick-dots li {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_7.bt_bb_content_slider .slick-dots li:hover {
	background-color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #fbdd45;
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #191919;
}

.bt_bb_color_scheme_7.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #191919;
}

.bt_bb_color_scheme_7.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #191919;
}

.bt_bb_color_scheme_7.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fbdd45;
	box-shadow: 0 0 0 1px #fbdd45 inset;
}

.bt_bb_color_scheme_7.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fbdd45;
	box-shadow: 0 0 0 3em #191919 inset;
}

.bt_bb_color_scheme_7.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fbdd45;
	box-shadow: 0 0 0 3em #191919 inset;
}

.bt_bb_color_scheme_7.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_7.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
}

.bt_bb_color_scheme_7.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #191919;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_8 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_8 .bt_bb_progress_bar_bg {
	background: #ffffff;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_8 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_8 .bt_bb_progress_bar_inner {
	border-color: #fbdd45;
	color: #fbdd45;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_8 .bt_bb_progress_bar_bg {
	background: #fbdd45;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_8 .bt_bb_progress_bar_inner {
	background: #ffffff;
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_icon .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #fbdd45;
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #fbdd45;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #ffffff inset;
	background-color: #fbdd45;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_borderless a {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_8.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	background-color: #fbdd45;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #fbdd45;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_headline {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #fbdd45;
	color: #ffffff;
	border-color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8 .bt_bb_accordion_item {
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_price_list.bt_bb_color_scheme_8 {
	border-color: #ffffff;
}

.bt_bb_price_list.bt_bb_color_scheme_8 .bt_bb_price_list_title {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_price_list.bt_bb_color_scheme_8 ul li {
	border-color: #ffffff;
}

.bt_bb_section.bt_bb_color_scheme_8 {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_row.bt_bb_color_scheme_8 {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_column.bt_bb_color_scheme_8 {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_section {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_row,
.bt_bb_color_scheme_8.bt_bb_row_inner {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_headline {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ffffff;
}

.bt_bb_dash_color_scheme_8.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_8.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #fbdd45;
}

.bt_bb_dash_color_scheme_8.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_8.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_icon a {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_icon:hover a {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #fbdd45;
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #fbdd45;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_icon .bt_bb_icon_holder span {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_filled a:hover {
	color: #ffffff;
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: transparent;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_borderless a {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_8.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_8.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	background-color: #fbdd45;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	background-color: #fbdd45;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_8.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_8.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_service .bt_bb_service_content_button_text a {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #fbdd45;
	color: #ffffff;
	border-color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8 .bt_bb_accordion_item {
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_8.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_price_list .bt_bb_price_list_price {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_8 .bt_bb_price_list_supertitle {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_price_list.bt_bb_style_outline {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_8.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_8.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_8.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_8.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_8.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_8.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #ffffff;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_content_slider .slick-dots li {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_8.bt_bb_content_slider .slick-dots li:hover {
	background-color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #fbdd45;
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ffffff;
}

.bt_bb_color_scheme_8.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fbdd45;
	box-shadow: 0 0 0 1px #fbdd45 inset;
}

.bt_bb_color_scheme_8.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fbdd45;
	box-shadow: 0 0 0 3em #ffffff inset;
}

.bt_bb_color_scheme_8.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fbdd45;
	box-shadow: 0 0 0 3em #ffffff inset;
}

.bt_bb_color_scheme_8.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_8.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ffffff;
	box-shadow: 0 0 0 1px #ffffff inset;
}

.bt_bb_color_scheme_8.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ffffff;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_9 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_9 .bt_bb_progress_bar_bg {
	background: #fbdd45;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_9 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_9 .bt_bb_progress_bar_inner {
	border-color: #191919;
	color: #191919;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_9 .bt_bb_progress_bar_bg {
	background: #191919;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_9 .bt_bb_progress_bar_inner {
	background: #fbdd45;
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_icon .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #191919;
	box-shadow: 0 0 0 1em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #191919;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #fbdd45 inset;
	background-color: #191919;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_borderless a {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_9.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	background-color: #191919;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #191919;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_headline {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_headline .bt_bb_headline_superheadline {
	color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #191919;
	color: #fbdd45;
	border-color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9 .bt_bb_accordion_item {
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_price_list.bt_bb_color_scheme_9 {
	border-color: #fbdd45;
}

.bt_bb_price_list.bt_bb_color_scheme_9 .bt_bb_price_list_title {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_price_list.bt_bb_color_scheme_9 ul li {
	border-color: #fbdd45;
}

.bt_bb_section.bt_bb_color_scheme_9 {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_row.bt_bb_color_scheme_9 {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_column.bt_bb_color_scheme_9 {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_section {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_row,
.bt_bb_color_scheme_9.bt_bb_row_inner {
	color: #191919;
	background-color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_headline {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_headline .bt_bb_headline_superheadline {
	color: #fbdd45;
}

.bt_bb_dash_color_scheme_9.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_9.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #191919;
}

.bt_bb_dash_color_scheme_9.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_9.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_icon a {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_icon:hover a {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #191919;
	box-shadow: 0 0 0 1em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #191919;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_icon .bt_bb_icon_holder span {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #191919 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_filled a:hover {
	color: #fbdd45;
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_borderless a {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_9.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_9.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	background-color: #191919;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #191919;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_9.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_9.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_service .bt_bb_service_content_button_text a {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #191919;
	color: #fbdd45;
	border-color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9 .bt_bb_accordion_item {
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #fbdd45;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_9.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_price_list .bt_bb_price_list_price {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_9 .bt_bb_price_list_supertitle {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_price_list.bt_bb_style_outline {
	border-color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_9.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_9.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_9.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_9.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_9.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_9.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #fbdd45;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_content_slider .slick-dots li {
	background-color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_9.bt_bb_content_slider .slick-dots li:hover {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #191919;
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #191919;
}

.bt_bb_color_scheme_9.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #191919;
}

.bt_bb_color_scheme_9.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_9.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
}

.bt_bb_color_scheme_9.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
	box-shadow: 0 0 0 3em #fbdd45 inset;
}

.bt_bb_color_scheme_9.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
	box-shadow: 0 0 0 3em #fbdd45 inset;
}

.bt_bb_color_scheme_9.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_9.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fbdd45;
	box-shadow: 0 0 0 1px #fbdd45 inset;
}

.bt_bb_color_scheme_9.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #fbdd45;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_10 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_10 .bt_bb_progress_bar_bg {
	background: #fbdd45;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_10 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_10 .bt_bb_progress_bar_inner {
	border-color: #ffffff;
	color: #ffffff;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_10 .bt_bb_progress_bar_bg {
	background: #ffffff;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_10 .bt_bb_progress_bar_inner {
	background: #fbdd45;
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_icon .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #ffffff;
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #ffffff;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #fbdd45 inset;
	background-color: #ffffff;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_borderless a {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_10.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	background-color: #ffffff;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #ffffff;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_headline {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_headline .bt_bb_headline_superheadline {
	color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ffffff;
	color: #fbdd45;
	border-color: #ffffff;
}

.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10 .bt_bb_accordion_item {
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_price_list.bt_bb_color_scheme_10 {
	border-color: #fbdd45;
}

.bt_bb_price_list.bt_bb_color_scheme_10 .bt_bb_price_list_title {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_price_list.bt_bb_color_scheme_10 ul li {
	border-color: #fbdd45;
}

.bt_bb_section.bt_bb_color_scheme_10 {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_row.bt_bb_color_scheme_10 {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_column.bt_bb_color_scheme_10 {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_section {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_row,
.bt_bb_color_scheme_10.bt_bb_row_inner {
	color: #ffffff;
	background-color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_headline {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_headline .bt_bb_headline_superheadline {
	color: #fbdd45;
}

.bt_bb_dash_color_scheme_10.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_10.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #ffffff;
}

.bt_bb_dash_color_scheme_10.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_10.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_icon a {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_icon:hover a {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #ffffff;
	box-shadow: 0 0 0 1em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #ffffff;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_icon .bt_bb_icon_holder span {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #ffffff inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_filled a:hover {
	color: #fbdd45;
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_borderless a {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_10.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ffffff inset;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_10.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ffffff inset;
	background-color: #ffffff;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #ffffff;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_10.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_10.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_service .bt_bb_service_content_button_text a {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ffffff;
	color: #fbdd45;
	border-color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ffffff;
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10 .bt_bb_accordion_item {
	border-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ffffff;
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #fbdd45;
	background-color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #ffffff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ffffff;
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_10.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_price_list .bt_bb_price_list_price {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_10 .bt_bb_price_list_supertitle {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_price_list.bt_bb_style_outline {
	border-color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_10.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_10.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_10.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_10.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_10.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_10.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #fbdd45;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_content_slider .slick-dots li {
	background-color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_10.bt_bb_content_slider .slick-dots li:hover {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #ffffff;
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_10.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ffffff;
	box-shadow: 0 0 0 1px #ffffff inset;
}

.bt_bb_color_scheme_10.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ffffff;
	box-shadow: 0 0 0 3em #fbdd45 inset;
}

.bt_bb_color_scheme_10.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ffffff;
	box-shadow: 0 0 0 3em #fbdd45 inset;
}

.bt_bb_color_scheme_10.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ffffff;
}

.bt_bb_color_scheme_10.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fbdd45;
	box-shadow: 0 0 0 1px #fbdd45 inset;
}

.bt_bb_color_scheme_10.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #fbdd45;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_11 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_11 .bt_bb_progress_bar_bg {
	background: #f2edeb;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_11 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_11 .bt_bb_progress_bar_inner {
	border-color: #191919;
	color: #191919;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_11 .bt_bb_progress_bar_bg {
	background: #191919;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_11 .bt_bb_progress_bar_inner {
	background: #f2edeb;
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_icon .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #191919;
	box-shadow: 0 0 0 1em #191919 inset;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #f2edeb inset;
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: #191919;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #191919 inset;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #f2edeb inset;
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #f2edeb inset;
	background-color: #191919;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_borderless a {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_11.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	background-color: #191919;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #f2edeb inset;
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: #191919;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_headline {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_headline .bt_bb_headline_superheadline {
	color: #f2edeb;
}

.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #191919;
	color: #f2edeb;
	border-color: #191919;
}

.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #f2edeb;
}

.bt_bb_tabs.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11 .bt_bb_accordion_item {
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #f2edeb;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #f2edeb;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #f2edeb;
	border-color: #f2edeb;
}

.bt_bb_price_list.bt_bb_color_scheme_11 {
	border-color: #f2edeb;
}

.bt_bb_price_list.bt_bb_color_scheme_11 .bt_bb_price_list_title {
	color: #191919;
	background-color: #f2edeb;
}

.bt_bb_price_list.bt_bb_color_scheme_11 ul li {
	border-color: #f2edeb;
}

.bt_bb_section.bt_bb_color_scheme_11 {
	color: #191919;
	background-color: #f2edeb;
}

.bt_bb_row.bt_bb_color_scheme_11 {
	color: #191919;
	background-color: #f2edeb;
}

.bt_bb_column.bt_bb_color_scheme_11 {
	color: #191919;
	background-color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_section {
	color: #191919;
	background-color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_row,
.bt_bb_color_scheme_11.bt_bb_row_inner {
	color: #191919;
	background-color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_headline {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_headline .bt_bb_headline_superheadline {
	color: #f2edeb;
}

.bt_bb_dash_color_scheme_11.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_11.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #191919;
}

.bt_bb_dash_color_scheme_11.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_11.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_icon a {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_icon:hover a {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #191919;
	box-shadow: 0 0 0 1em #191919 inset;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #f2edeb inset;
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: #191919;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_icon .bt_bb_icon_holder span {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #191919 inset;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #f2edeb inset;
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_filled a:hover {
	color: #f2edeb;
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: transparent;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_borderless a {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_11.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #191919 inset;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_11.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #191919 inset;
	background-color: #191919;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #f2edeb inset;
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: #191919;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_11.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_11.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_service .bt_bb_service_content_button_text a {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #191919;
	color: #f2edeb;
	border-color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #191919;
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11 .bt_bb_accordion_item {
	border-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #191919;
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #f2edeb;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #f2edeb;
	color: #f2edeb;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #f2edeb;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #f2edeb;
	background-color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #191919;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #f2edeb;
	color: #f2edeb;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #191919;
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #f2edeb;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_11.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_price_list .bt_bb_price_list_price {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_11 .bt_bb_price_list_supertitle {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_price_list.bt_bb_style_outline {
	border-color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_11.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_11.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_11.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_11.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_11.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_11.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #f2edeb;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_content_slider .slick-dots li {
	background-color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_11.bt_bb_content_slider .slick-dots li:hover {
	background-color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #191919;
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #191919;
}

.bt_bb_color_scheme_11.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #191919;
}

.bt_bb_color_scheme_11.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #f2edeb;
}

.bt_bb_color_scheme_11.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
	box-shadow: 0 0 0 1px #191919 inset;
}

.bt_bb_color_scheme_11.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #191919;
	box-shadow: 0 0 0 3em #f2edeb inset;
}

.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #191919;
	box-shadow: 0 0 0 3em #f2edeb inset;
}

.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #191919;
}

.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #f2edeb;
	box-shadow: 0 0 0 1px #f2edeb inset;
}

.bt_bb_color_scheme_11.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #f2edeb;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_12 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_12 .bt_bb_progress_bar_bg {
	background: #efefef;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_12 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_12 .bt_bb_progress_bar_inner {
	border-color: #ff7471;
	color: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_12 .bt_bb_progress_bar_bg {
	background: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_12 .bt_bb_progress_bar_inner {
	background: #efefef;
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #efefef inset;
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #efefef inset;
	background-color: #ff7471;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #ff7471 inset;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #efefef inset;
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #efefef inset;
	background-color: #ff7471;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_12.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #efefef inset;
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #efefef inset;
	background-color: #ff7471;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_headline .bt_bb_headline_superheadline {
	color: #efefef;
}

.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #efefef;
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #efefef;
}

.bt_bb_tabs.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #efefef;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #efefef;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #efefef;
	border-color: #efefef;
}

.bt_bb_price_list.bt_bb_color_scheme_12 {
	border-color: #efefef;
}

.bt_bb_price_list.bt_bb_color_scheme_12 .bt_bb_price_list_title {
	color: #ff7471;
	background-color: #efefef;
}

.bt_bb_price_list.bt_bb_color_scheme_12 ul li {
	border-color: #efefef;
}

.bt_bb_section.bt_bb_color_scheme_12 {
	color: #ff7471;
	background-color: #efefef;
}

.bt_bb_row.bt_bb_color_scheme_12 {
	color: #ff7471;
	background-color: #efefef;
}

.bt_bb_column.bt_bb_color_scheme_12 {
	color: #ff7471;
	background-color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_section {
	color: #ff7471;
	background-color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_row,
.bt_bb_color_scheme_12.bt_bb_row_inner {
	color: #ff7471;
	background-color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_headline .bt_bb_headline_superheadline {
	color: #efefef;
}

.bt_bb_dash_color_scheme_12.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_12.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #ff7471;
}

.bt_bb_dash_color_scheme_12.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_12.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_icon a {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_icon:hover a {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #efefef inset;
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #efefef inset;
	background-color: #ff7471;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_icon .bt_bb_icon_holder span {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #ff7471 inset;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #efefef inset;
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_filled a:hover {
	color: #efefef;
	box-shadow: 0 0 0 1px #efefef inset;
	background-color: transparent;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_12.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_12.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #efefef inset;
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #efefef inset;
	background-color: #ff7471;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_12.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_12.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_service .bt_bb_service_content_button_text a {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #efefef;
	border-color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #efefef;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #efefef;
	color: #efefef;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #efefef;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #efefef;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #efefef;
	color: #efefef;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #efefef;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_12.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_price_list .bt_bb_price_list_price {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_12 .bt_bb_price_list_supertitle {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_price_list.bt_bb_style_outline {
	border-color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_12.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_12.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_12.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_12.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_12.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_12.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #efefef;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_content_slider .slick-dots li {
	background-color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_12.bt_bb_content_slider .slick-dots li:hover {
	background-color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #ff7471;
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #efefef;
}

.bt_bb_color_scheme_12.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.bt_bb_color_scheme_12.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 3em #efefef inset;
}

.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 3em #efefef inset;
}

.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #efefef;
	box-shadow: 0 0 0 1px #efefef inset;
}

.bt_bb_color_scheme_12.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #efefef;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_13 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_13 .bt_bb_progress_bar_bg {
	background: #fbdd45;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_13 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_13 .bt_bb_progress_bar_inner {
	border-color: #ff7471;
	color: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_13 .bt_bb_progress_bar_bg {
	background: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_13 .bt_bb_progress_bar_inner {
	background: #fbdd45;
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #ff7471;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #fbdd45 inset;
	background-color: #ff7471;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_13.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #ff7471;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_headline .bt_bb_headline_superheadline {
	color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #fbdd45;
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_price_list.bt_bb_color_scheme_13 {
	border-color: #fbdd45;
}

.bt_bb_price_list.bt_bb_color_scheme_13 .bt_bb_price_list_title {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_price_list.bt_bb_color_scheme_13 ul li {
	border-color: #fbdd45;
}

.bt_bb_section.bt_bb_color_scheme_13 {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_row.bt_bb_color_scheme_13 {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_column.bt_bb_color_scheme_13 {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_section {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_row,
.bt_bb_color_scheme_13.bt_bb_row_inner {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_headline .bt_bb_headline_superheadline {
	color: #fbdd45;
}

.bt_bb_dash_color_scheme_13.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_13.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #ff7471;
}

.bt_bb_dash_color_scheme_13.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_13.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_icon a {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_icon:hover a {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #ff7471;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_icon .bt_bb_icon_holder span {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_filled a:hover {
	color: #fbdd45;
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_13.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_13.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	background-color: #ff7471;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_13.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_13.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_service .bt_bb_service_content_button_text a {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #fbdd45;
	border-color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_13.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_price_list .bt_bb_price_list_price {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_13 .bt_bb_price_list_supertitle {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_price_list.bt_bb_style_outline {
	border-color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_13.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_13.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_13.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_13.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_13.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_13.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #fbdd45;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_content_slider .slick-dots li {
	background-color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_13.bt_bb_content_slider .slick-dots li:hover {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #ff7471;
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_13.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.bt_bb_color_scheme_13.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 3em #fbdd45 inset;
}

.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 3em #fbdd45 inset;
}

.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fbdd45;
	box-shadow: 0 0 0 1px #fbdd45 inset;
}

.bt_bb_color_scheme_13.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #fbdd45;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_14 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_14 .bt_bb_progress_bar_bg {
	background: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_14 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_14 .bt_bb_progress_bar_inner {
	border-color: #fbdd45;
	color: #fbdd45;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_14 .bt_bb_progress_bar_bg {
	background: #fbdd45;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_14 .bt_bb_progress_bar_inner {
	background: #ff7471;
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_icon .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #fbdd45;
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #fbdd45;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #ff7471 inset;
	background-color: #fbdd45;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_borderless a {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_14.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	background-color: #fbdd45;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #fbdd45;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_headline {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #fbdd45;
	color: #ff7471;
	border-color: #fbdd45;
}

.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14 .bt_bb_accordion_item {
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_price_list.bt_bb_color_scheme_14 {
	border-color: #ff7471;
}

.bt_bb_price_list.bt_bb_color_scheme_14 .bt_bb_price_list_title {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_price_list.bt_bb_color_scheme_14 ul li {
	border-color: #ff7471;
}

.bt_bb_section.bt_bb_color_scheme_14 {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_row.bt_bb_color_scheme_14 {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_column.bt_bb_color_scheme_14 {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_section {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_row,
.bt_bb_color_scheme_14.bt_bb_row_inner {
	color: #fbdd45;
	background-color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_headline {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_headline .bt_bb_headline_superheadline {
	color: #ff7471;
}

.bt_bb_dash_color_scheme_14.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_14.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #fbdd45;
}

.bt_bb_dash_color_scheme_14.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_14.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_icon a {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_icon:hover a {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #fbdd45;
	box-shadow: 0 0 0 1em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #fbdd45;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_icon .bt_bb_icon_holder span {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #fbdd45 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_filled a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_borderless a {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_14.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fbdd45 inset;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_14.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fbdd45 inset;
	background-color: #fbdd45;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	background-color: #fbdd45;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_14.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_14.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_service .bt_bb_service_content_button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #fbdd45;
	color: #ff7471;
	border-color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #fbdd45;
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14 .bt_bb_accordion_item {
	border-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #fbdd45;
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #ff7471;
	background-color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #fbdd45;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fbdd45;
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_14.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_price_list .bt_bb_price_list_price {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_14 .bt_bb_price_list_supertitle {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_price_list.bt_bb_style_outline {
	border-color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_14.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_14.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_14.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_14.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_14.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_14.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #ff7471;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_content_slider .slick-dots li {
	background-color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_14.bt_bb_content_slider .slick-dots li:hover {
	background-color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #fbdd45;
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ff7471;
}

.bt_bb_color_scheme_14.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fbdd45;
	box-shadow: 0 0 0 1px #fbdd45 inset;
}

.bt_bb_color_scheme_14.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fbdd45;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fbdd45;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fbdd45;
}

.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.bt_bb_color_scheme_14.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #ff7471;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_15 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_15 .bt_bb_progress_bar_bg {
	background: #f2edeb;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_15 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_15 .bt_bb_progress_bar_inner {
	border-color: #ff7471;
	color: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_15 .bt_bb_progress_bar_bg {
	background: #ff7471;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_15 .bt_bb_progress_bar_inner {
	background: #f2edeb;
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #f2edeb inset;
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: #ff7471;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #ff7471 inset;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #f2edeb inset;
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #f2edeb inset;
	background-color: #ff7471;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_15.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #f2edeb inset;
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: #ff7471;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_headline .bt_bb_headline_superheadline {
	color: #f2edeb;
}

.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #f2edeb;
	border-color: #ff7471;
}

.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #f2edeb;
}

.bt_bb_tabs.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #f2edeb;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #f2edeb;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #f2edeb;
	border-color: #f2edeb;
}

.bt_bb_price_list.bt_bb_color_scheme_15 {
	border-color: #f2edeb;
}

.bt_bb_price_list.bt_bb_color_scheme_15 .bt_bb_price_list_title {
	color: #ff7471;
	background-color: #f2edeb;
}

.bt_bb_price_list.bt_bb_color_scheme_15 ul li {
	border-color: #f2edeb;
}

.bt_bb_section.bt_bb_color_scheme_15 {
	color: #ff7471;
	background-color: #f2edeb;
}

.bt_bb_row.bt_bb_color_scheme_15 {
	color: #ff7471;
	background-color: #f2edeb;
}

.bt_bb_column.bt_bb_color_scheme_15 {
	color: #ff7471;
	background-color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_section {
	color: #ff7471;
	background-color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_row,
.bt_bb_color_scheme_15.bt_bb_row_inner {
	color: #ff7471;
	background-color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_headline {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_headline .bt_bb_headline_superheadline {
	color: #f2edeb;
}

.bt_bb_dash_color_scheme_15.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_15.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #ff7471;
}

.bt_bb_dash_color_scheme_15.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_15.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_icon a {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_icon:hover a {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #ff7471;
	box-shadow: 0 0 0 1em #ff7471 inset;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #f2edeb inset;
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: #ff7471;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_icon .bt_bb_icon_holder span {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #ff7471 inset;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #f2edeb inset;
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_filled a:hover {
	color: #f2edeb;
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: transparent;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_borderless a {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_15.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_15.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #ff7471 inset;
	background-color: #ff7471;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #f2edeb inset;
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #f2edeb inset;
	background-color: #ff7471;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_15.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_15.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_service .bt_bb_service_content_button_text a {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #ff7471;
	color: #f2edeb;
	border-color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #ff7471;
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15 .bt_bb_accordion_item {
	border-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #ff7471;
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #f2edeb;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #f2edeb;
	color: #f2edeb;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #f2edeb;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #f2edeb;
	background-color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #ff7471;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #f2edeb;
	color: #f2edeb;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #ff7471;
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #f2edeb;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_15.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_price_list .bt_bb_price_list_price {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_15 .bt_bb_price_list_supertitle {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_price_list.bt_bb_style_outline {
	border-color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_15.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_15.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_15.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_15.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_15.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_15.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #f2edeb;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_content_slider .slick-dots li {
	background-color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_15.bt_bb_content_slider .slick-dots li:hover {
	background-color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #ff7471;
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #f2edeb;
}

.bt_bb_color_scheme_15.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.bt_bb_color_scheme_15.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #ff7471;
	box-shadow: 0 0 0 3em #f2edeb inset;
}

.bt_bb_color_scheme_15.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #ff7471;
	box-shadow: 0 0 0 3em #f2edeb inset;
}

.bt_bb_color_scheme_15.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #ff7471;
}

.bt_bb_color_scheme_15.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #f2edeb;
	box-shadow: 0 0 0 1px #f2edeb inset;
}

.bt_bb_color_scheme_15.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #f2edeb;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_16 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_16 .bt_bb_progress_bar_bg {
	background: #fff;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_16 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_16 .bt_bb_progress_bar_inner {
	border-color: #000;
	color: #000;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_16 .bt_bb_progress_bar_bg {
	background: #000;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_16 .bt_bb_progress_bar_inner {
	background: #fff;
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_icon .bt_bb_icon_holder {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #000 inset;
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #000;
	box-shadow: 0 0 0 1em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #fff inset;
	background-color: #000;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #000 inset;
	color: #000;
	background-color: transparent;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #fff inset;
	background-color: #000;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_borderless a {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #000 inset;
	color: #000;
	background-color: transparent;
}

.bt_bb_color_scheme_16.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #000 inset;
	background-color: #000;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fff inset;
	background-color: #000;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_headline {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_headline .bt_bb_headline_superheadline {
	color: #fff;
}

.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #000;
}

.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #000;
	color: #000;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #000;
	color: #fff;
	border-color: #000;
}

.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #fff;
}

.bt_bb_tabs.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #000;
	border-color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16 .bt_bb_accordion_item {
	border-color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #000;
	color: #000;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #fff;
	background-color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fff;
	background-color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #000;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #000;
	border-color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #fff;
	border-color: #fff;
}

.bt_bb_price_list.bt_bb_color_scheme_16 {
	border-color: #fff;
}

.bt_bb_price_list.bt_bb_color_scheme_16 .bt_bb_price_list_title {
	color: #000;
	background-color: #fff;
}

.bt_bb_price_list.bt_bb_color_scheme_16 ul li {
	border-color: #fff;
}

.bt_bb_section.bt_bb_color_scheme_16 {
	color: #000;
	background-color: #fff;
}

.bt_bb_row.bt_bb_color_scheme_16 {
	color: #000;
	background-color: #fff;
}

.bt_bb_column.bt_bb_color_scheme_16 {
	color: #000;
	background-color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_section {
	color: #000;
	background-color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_row,
.bt_bb_color_scheme_16.bt_bb_row_inner {
	color: #000;
	background-color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_headline {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_headline .bt_bb_headline_superheadline {
	color: #fff;
}

.bt_bb_dash_color_scheme_16.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_16.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #000;
}

.bt_bb_dash_color_scheme_16.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_16.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_icon a {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_icon:hover a {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #000 inset;
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #000;
	box-shadow: 0 0 0 1em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #fff inset;
	background-color: #000;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_icon .bt_bb_icon_holder span {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #000 inset;
	color: #000;
	background-color: transparent;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_filled a:hover {
	color: #fff;
	box-shadow: 0 0 0 1px #fff inset;
	background-color: transparent;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_borderless a {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_16.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #000 inset;
	color: #000;
	background-color: transparent;
}

.bt_bb_color_scheme_16.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #000 inset;
	background-color: #000;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fff inset;
	background-color: #000;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_16.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_16.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_service .bt_bb_service_content_button_text a {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #000;
}

.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #000;
	color: #000;
	background-color: transparent;
}

.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #000;
	color: #fff;
	border-color: #000;
}

.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #000;
	border-color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16 .bt_bb_accordion_item {
	border-color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #000;
	color: #000;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #fff;
	background-color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fff;
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #fff;
	background-color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #000;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fff;
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #000;
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #000;
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #000;
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_16.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_price_list .bt_bb_price_list_price {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_16 .bt_bb_price_list_supertitle {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_price_list.bt_bb_style_outline {
	border-color: #000;
}

.bt_bb_color_scheme_16.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #000;
}

.bt_bb_color_scheme_16.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #000;
}

.bt_bb_color_scheme_16.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_16.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_16.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_16.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_16.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_16.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_16.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #fff;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_content_slider .slick-dots li {
	background-color: #000;
}

.bt_bb_color_scheme_16.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_16.bt_bb_content_slider .slick-dots li:hover {
	background-color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #000;
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #fff;
}

.bt_bb_color_scheme_16.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #000;
}

.bt_bb_color_scheme_16.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #fff;
}

.bt_bb_color_scheme_16.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #000;
}

.bt_bb_color_scheme_16.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #fff;
}

.bt_bb_color_scheme_16.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #000;
	box-shadow: 0 0 0 1px #000 inset;
}

.bt_bb_color_scheme_16.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #000;
	box-shadow: 0 0 0 3em #fff inset;
}

.bt_bb_color_scheme_16.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #000;
	box-shadow: 0 0 0 3em #fff inset;
}

.bt_bb_color_scheme_16.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #000;
}

.bt_bb_color_scheme_16.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fff;
	box-shadow: 0 0 0 1px #fff inset;
}

.bt_bb_color_scheme_16.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #fff;
}

</style><style>.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_17 .bt_bb_progress_bar_bg,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_17 .bt_bb_progress_bar_bg {
	background: #000;
}

.bt_bb_progress_bar.bt_bb_style_outline.bt_bb_color_scheme_17 .bt_bb_progress_bar_inner,
.bt_bb_progress_bar.bt_bb_style_line.bt_bb_color_scheme_17 .bt_bb_progress_bar_inner {
	border-color: #fff;
	color: #fff;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_17 .bt_bb_progress_bar_bg {
	background: #fff;
}

.bt_bb_progress_bar.bt_bb_style_filled.bt_bb_color_scheme_17 .bt_bb_progress_bar_inner {
	background: #000;
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_icon .bt_bb_icon_holder {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #fff inset;
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
	background-color: #fff;
	box-shadow: 0 0 0 1em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #000 inset;
	background-color: #fff;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #fff inset;
	color: #fff;
	background-color: transparent;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_outline a:hover {
	box-shadow: 0 0 0 2em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 2em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_filled a:hover {
	box-shadow: 0 0 0 0px #000 inset;
	background-color: #fff;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_borderless a {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fff inset;
	color: #fff;
	background-color: transparent;
}

.bt_bb_color_scheme_17.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fff inset;
	background-color: #fff;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #000 inset;
	background-color: #fff;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_headline {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_headline .bt_bb_headline_superheadline {
	color: #000;
}

.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #fff;
}

.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #fff;
	color: #fff;
	background-color: transparent;
}

.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #fff;
	color: #000;
	border-color: #fff;
}

.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #000;
}

.bt_bb_tabs.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #fff;
	border-color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17 .bt_bb_accordion_item {
	border-color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #fff;
	color: #fff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #000;
	background-color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #000;
	background-color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:hover {
	color: #fff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fff;
	border-color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #000;
	border-color: #000;
}

.bt_bb_price_list.bt_bb_color_scheme_17 {
	border-color: #000;
}

.bt_bb_price_list.bt_bb_color_scheme_17 .bt_bb_price_list_title {
	color: #fff;
	background-color: #000;
}

.bt_bb_price_list.bt_bb_color_scheme_17 ul li {
	border-color: #000;
}

.bt_bb_section.bt_bb_color_scheme_17 {
	color: #fff;
	background-color: #000;
}

.bt_bb_row.bt_bb_color_scheme_17 {
	color: #fff;
	background-color: #000;
}

.bt_bb_column.bt_bb_color_scheme_17 {
	color: #fff;
	background-color: #000;
}

.bt_bb_color_scheme_17.bt_bb_section {
	color: #fff;
	background-color: #000;
}

.bt_bb_color_scheme_17.bt_bb_row,
.bt_bb_color_scheme_17.bt_bb_row_inner {
	color: #fff;
	background-color: #000;
}

.bt_bb_color_scheme_17.bt_bb_headline {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_headline .bt_bb_headline_superheadline {
	color: #000;
}

.bt_bb_dash_color_scheme_17.bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after,
.bt_bb_dash_color_scheme_17.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:after {
	color: #fff;
}

.bt_bb_dash_color_scheme_17.bt_bb_headline.bt_bb_dash_top .bt_bb_headline_content:before,
.bt_bb_dash_color_scheme_17.bt_bb_headline.bt_bb_dash_top_bottom .bt_bb_headline_content:before {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_icon a {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_icon:hover a {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
	background-color: transparent;
	box-shadow: 0 0 0 1px #fff inset;
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_outline:hover .bt_bb_icon_holder:before {
	background-color: #fff;
	box-shadow: 0 0 0 1em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_filled:hover .bt_bb_icon_holder:before {
	box-shadow: 0 0 0 1px #000 inset;
	background-color: #fff;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_borderless:hover .bt_bb_icon_holder:before {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_icon .bt_bb_icon_holder span {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_counter_holder .bt_bb_counter_icon {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_outline a {
	box-shadow: 0 0 0 1px #fff inset;
	color: #fff;
	background-color: transparent;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_outline:hover a {
	box-shadow: 0 0 0 3em #fff inset;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_filled a {
	box-shadow: 0 0 0 3em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_filled a:hover {
	color: #000;
	box-shadow: 0 0 0 1px #000 inset;
	background-color: transparent;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_clean a,
.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_borderless a {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_button.bt_bb_style_clean a:hover,
.bt_bb_color_scheme_17.bt_bb_icon.bt_bb_style_borderless:hover a {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #fff inset;
	color: #fff;
	background-color: transparent;
}

.bt_bb_color_scheme_17.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #fff inset;
	background-color: #fff;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder {
	box-shadow: 0 0 0 1em #000 inset;
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
	box-shadow: 0 0 0 1px #000 inset;
	background-color: #fff;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title,
.bt_bb_color_scheme_17.bt_bb_style_borderless.bt_bb_service .bt_bb_service_content_title a {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title,
.bt_bb_color_scheme_17.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_service_content_title a {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_service .bt_bb_service_content_button_text a {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_service:hover .bt_bb_service_content_button_text a {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_tabs_header,
.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_tabs_header {
	border-color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_tabs_header li,
.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_tabs_header li.on {
	border-color: #fff;
	color: #fff;
	background-color: transparent;
}

.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_tabs_header li:hover,
.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_tabs_header li.on,
.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_tabs_header li {
	background-color: #fff;
	color: #000;
	border-color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_tabs_header li {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_tabs_header li.on {
	color: #fff;
	border-color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17 .bt_bb_accordion_item {
	border-color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_accordion_item_title {
	border-color: #fff;
	color: #fff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title_content {
	color: #000;
	background-color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_accordion_item:not(.on):hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #000;
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_outline .bt_bb_accordion_item:hover .bt_bb_accordion_item_title {
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content {
	color: #000;
	background-color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content,
.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover {
	color: #fff;
	background-color: transparent;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title,
.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title_content:hover .bt_bb_accordion_item_title {
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #000;
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fff;
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item.on:hover .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fff;
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_filled .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
	box-shadow: 0 0 0 1px #fff;
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_icon_holder {
	color: #000;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_accordion_item:hover .bt_bb_icon_holder {
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title {
	color: #fff;
}

.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
.bt_bb_accordion.bt_bb_color_scheme_17.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_price_list .bt_bb_price_list_price {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_price_list .bt_bb_price_list_title,
.bt_bb_price_list.bt_bb_color_scheme_17 .bt_bb_price_list_supertitle {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_price_list.bt_bb_style_outline {
	border-color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_schedule .bt_bb_schedule_content {
	background-color: #000;
}

.bt_bb_color_scheme_17.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location),
.bt_bb_color_scheme_17.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day span:not(.bt_bb_schedule_inner_location):before,
.bt_bb_color_scheme_17.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time span:not(.bt_bb_schedule_inner_desc),
.bt_bb_color_scheme_17.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time span.bt_bb_schedule_inner_desc:before,
.bt_bb_color_scheme_17.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day span.bt_bb_schedule_inner_location:before {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content .bt_bb_timetable_item_title {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content,
.bt_bb_color_scheme_17.bt_bb_timetable .bt_bb_timetable_item:nth-child(odd) .bt_bb_timetable_item_content,
.bt_bb_color_scheme_17.bt_bb_timetable .bt_bb_timetable_item:nth-child(even) .bt_bb_timetable_item_image {
	border-color: #000;
}

.bt_bb_color_scheme_17.bt_bb_timetable .bt_bb_timetable_item .bt_bb_timetable_item_content:before {
	border-color: #000;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_content_slider .slick-dots li {
	background-color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_content_slider .slick-dots li.slick-active,
.bt_bb_color_scheme_17.bt_bb_content_slider .slick-dots li:hover {
	background-color: #000;
}

.bt_bb_color_scheme_17.bt_bb_progress_bar .bt_bb_progress_bar_bg {
	background-color: #000;
}

.bt_bb_color_scheme_17.bt_bb_progress_bar .bt_bb_progress_bar_inner {
	background-color: #fff;
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_progress_bar .bt_bb_progress_bar_inner .bt_bb_progress_bar_icon .bt_bb_icon_holder {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_card .bt_bb_card_content .bt_bb_card_content_inner .bt_bb_card_title:before {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background: #000;
}

.bt_bb_color_scheme_17.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_amount {
	background: #fff;
}

.bt_bb_color_scheme_17.bt_bb_cost_calculator .bt_bb_widget_switch.on {
	background: #000;
}

.bt_bb_color_scheme_17.bt_bb_cost_calculator .bt_bb_widget_switch {
	background: #fff;
}

.bt_bb_color_scheme_17.bt_bb_cost_calculator .bt_bb_widget_switch>div {
	border-color: #000;
}

.bt_bb_color_scheme_17.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #000;
}

.bt_bb_color_scheme_17.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fff;
	box-shadow: 0 0 0 1px #fff inset;
}

.bt_bb_color_scheme_17.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_style_outline.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #fff;
	box-shadow: 0 0 0 3em #000 inset;
}

.bt_bb_color_scheme_17.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
	color: #fff;
	box-shadow: 0 0 0 3em #000 inset;
}

.bt_bb_color_scheme_17.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:after {
	color: #fff;
}

.bt_bb_color_scheme_17.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover {
	color: #000;
	box-shadow: 0 0 0 1px #000 inset;
}

.bt_bb_color_scheme_17.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a:hover:after {
	color: #000;
}

</style>
<style type="text/css">img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='frontpage/css/block-library/style.min.css?ver=5.7' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css'  href='frontpage/css/woocommerce/vendors-style.css?ver=4.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='frontpage/css/woocommerce/style.css?ver=4.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='bt_bb_content_elements-css'  href='frontpage/css/content_elements.crush.css?ver=3.0.9' type='text/css' media='all' />
<link rel='stylesheet' id='bt_bb_slick-css'  href='frontpage/css/slick.css?ver=3.0.9' type='text/css' media='all' />
<link rel='stylesheet' id='bt_cc_style-css'  href='frontpage/css/cost_calculator/style.min.css?ver=5.7' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='frontpage/css/contact-form/styles.css?ver=5.4' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='tabula-style-css'  href='frontpage/css/tabula/style.css?ver=5.7' type='text/css' media='screen' />
<style id='tabula-style-inline-css' type='text/css'>
select,
input {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

input[type='submit'] {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

input[type='submit']:hover {
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.fancy-select ul.options li:hover {
	color: #ff7471;
}

.btContent a {
	color: #ff7471;
}

a:hover {
	color: #ff7471;
}

.btText a {
	color: #ff7471;
}

body {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

blockquote {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.btContentHolder table thead th {
	background-color: #ff7471;
}

.btAccentDarkHeader .btPreloader .animation>div:first-child,
.btLightAccentHeader .btPreloader .animation>div:first-child,
.btTransparentLightHeader .btPreloader .animation>div:first-child {
	background-color: #ff7471;
}

.btPreloader .animation .preloaderLogo {
	height: 80px;
}

body.error404 .btErrorPage .port .bt_bb_icon {
	color: #ff7471;
}

body.error404 .btErrorPage .port .bt_bb_button.filled a {
	background: #ff7471;
}

body.error404 .btErrorPage .port .bt_bb_button.filled a:after {
	-webkit-box-shadow: 0 0 0 6px #ff7471;
	box-shadow: 0 0 0 6px #ff7471;
}

body.error404 .btErrorPage .port .bt_bb_button.filled a:hover:after {
	-webkit-box-shadow: 0 0 0 0 #ff7471;
	box-shadow: 0 0 0 0 #ff7471;
}

.btBreadCrumbs span a {
	color: #ff7471;
}

.btBreadCrumbs span:not(:last-child):after {
	background-color: #ff7471;
}

.btPageHeadline.bt_bb_background_image .btArticleAuthor a:hover,
.btPageHeadline.bt_bb_background_image .btArticleComments:hover {
	color: #ff7471 !important;
}

.btNoSearchResults .bt_bb_port #searchform input[type='submit'] {
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.btNoSearchResults .bt_bb_port #searchform input[type='submit']:hover {
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .logo {
	padding-left: 110px;
}

.rtl.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .logo {
	padding-right: 110px;
}

.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btTopToolsLeft {
	margin-left: 110px;
}

.rtl.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btTopToolsLeft {
	margin-right: 110px;
}

.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btBelowLogoArea .menuPort {
	margin-left: 110px;
}

.rtl.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btBelowLogoArea .menuPort {
	margin-right: 110px;
}

.btHasCrest.btMenuHorizontal:not(.btMenuCenter):not(.btStickyHeaderActive) .btCrest .btCrestImg {
	width: 110px;
}

.btHasCrest.btMenuHorizontal.btMenuLeft.btNoLogo:not(.btStickyHeaderActive) .menuPort {
	margin-left: 110px;
}

.rtl.btHasCrest.btMenuHorizontal.btMenuLeft.btNoLogo:not(.btStickyHeaderActive) .menuPort {
	margin-right: 110px;
}

.btHasCrest.btMenuHorizontal.btMenuCenter.btNoLogo:not(.btStickyHeaderActive) .menuPort .rightNav {
	padding-left: 110px;
}

.mainHeader {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.mainHeader a:hover {
	color: #ff7471;
}

.menuPort {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.menuPort nav ul li a:hover {
	color: #ff7471;
}

.menuPort nav>ul>li>a {
	line-height: 80px;
}

.btTextLogo {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	line-height: 80px;
}

.btLogoArea .logo img {
	height: 80px;
}

.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:after {
	border-top-color: #ff7471;
}

.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before {
	border-top-color: #ff7471;
}

.btMenuHorizontal .menuPort nav>ul>li>a:after {
	background-color: #ff7471;
}

.btMenuHorizontal .menuPort nav>ul>li.on li.current-menu-ancestor>a,
.btMenuHorizontal .menuPort nav>ul>li.on li.current-menu-item>a,
.btMenuHorizontal .menuPort nav>ul>li.current-menu-ancestor li.current-menu-ancestor>a,
.btMenuHorizontal .menuPort nav>ul>li.current-menu-ancestor li.current-menu-item>a,
.btMenuHorizontal .menuPort nav>ul>li.current-menu-item li.current-menu-ancestor>a,
.btMenuHorizontal .menuPort nav>ul>li.current-menu-item li.current-menu-item>a {
	color: #ff7471;
}

.btMenuHorizontal .menuPort nav>ul>li:not(.btMenuWideDropdown)>ul>li.menu-item-has-children>a:before {
	background-color: #ff7471;
}

.btMenuHorizontal .menuPort ul ul li a:hover {
	color: #ff7471;
}

body.btMenuHorizontal .subToggler {
	line-height: 80px;
}

html:not(.touch) body.btMenuHorizontal .menuPort>nav>ul>li.btMenuWideDropdown>ul>li>a:after {
	background-color: #ff7471;
}

.btMenuHorizontal .topBarInMenu {
	height: 80px;
}

.btAccentLightHeader .btBelowLogoArea,
.btAccentLightHeader .topBar {
	background-color: #ff7471;
}

.btAccentLightHeader .btBelowLogoArea a:hover,
.btAccentLightHeader .topBar a:hover {
	color: #fbdd45;
}

.btAccentDarkHeader .btBelowLogoArea,
.btAccentDarkHeader .topBar {
	background-color: #ff7471;
}

.btAccentDarkHeader .btBelowLogoArea a:hover,
.btAccentDarkHeader .topBar a:hover {
	color: #fbdd45;
}

.btLightAccentHeader .btLogoArea,
.btLightAccentHeader .btVerticalHeaderTop {
	background-color: #ff7471;
}

.btLightAccentHeader .btLogoArea a:hover,
.btLightAccentHeader .btVerticalHeaderTop a:hover {
	color: #fbdd45;
}

.btLightAccentHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea {
	background-color: #ff7471;
}

.btLightAccentHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea a:hover {
	color: #fbdd45;
}

.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:after {
	border-top-color: #ff7471;
}

.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before {
	border-top-color: #ff7471;
}

.btMenuVertical .mainHeader .btCloseVertical:before:hover {
	color: #ff7471;
}

.btMenuHorizontal .topBarInLogoArea {
	height: 80px;
}

.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell {
	border: 0 solid #ff7471;
}

.btMenuVertical .mainHeader .btCloseVertical:before:hover {
	color: #ff7471;
}

.btDarkSkin .btSiteFooterCopyMenu .port:before,
.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterCopyMenu .port:before {
	background-color: #ff7471;
}

.btContent .btArticleHeadline .bt_bb_headline a:hover {
	color: #ff7471;
}

.btPostSingleItemStandard .btArticleShareEtc>div.btReadMoreColumn .bt_bb_button a {
	color: #ff7471;
}

.btMediaBox.btQuote:before,
.btMediaBox.btLink:before {
	background-color: #ff7471;
}

.sticky.btArticleListItem .btArticleHeadline h1 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h2 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h3 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h4 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h5 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h6 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h7 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h8 .bt_bb_headline_content span a:after {
	color: #ff7471;
}

.post-password-form p:first-child {
	color: #ff7471;
}

.post-password-form p:nth-child(2) input[type="submit"] {
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.post-password-form p:nth-child(2) input[type="submit"]:hover {
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

.btPagination {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.btPagination .paging a:hover {
	color: #ff7471;
}

.btPagination .paging a:hover:after {
	color: #ff7471;
}

.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextTitle {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextDir {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	color: #ff7471;
}

.btPrevNextNav .btPrevNext:hover .btPrevNextTitle {
	color: #ff7471;
}

.btArticleCategories a {
	color: #ff7471;
}

.btArticleCategories a:not(:first-child):before {
	background-color: #ff7471;
}

.btArticleAuthor a:hover {
	color: #ff7471;
}

.btArticleComments:hover {
	color: #ff7471;
}

.btCommentsBox .vcard .posted {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.btCommentsBox .commentTxt p.edit-link,
.btCommentsBox .commentTxt p.reply {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.btCommentsBox .commentTxt p.edit-link:hover,
.btCommentsBox .commentTxt p.reply:hover {
	color: #ff7471;
}

.btCommentsBox .comment-navigation a,
.btCommentsBox .comment-navigation span {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.comment-awaiting-moderation {
	color: #ff7471;
}

a#cancel-comment-reply-link {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

a#cancel-comment-reply-link:hover {
	color: #ff7471;
}

.btCommentSubmit {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.btCommentSubmit:hover {
	color: #ff7471;
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.btBox ul li.current-menu-item>a,
.btCustomMenu ul li.current-menu-item>a,
.btTopBox ul li.current-menu-item>a {
	color: #ff7471;
}

.btBox .quantity,
.btCustomMenu .quantity,
.btTopBox .quantity {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.widget_calendar table caption {
	background: #ff7471;
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.widget_calendar table tbody tr td#today {
	color: #ff7471;
}

.widget_rss li a.rsswidget {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.widget_shopping_cart .total {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.widget_shopping_cart .total .amount {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.widget_shopping_cart .total strong {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.widget_shopping_cart .buttons .button {
	background: #ff7471;
}

.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove {
	background-color: #ff7471;
}

.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:hover {
	background-color: #fbdd45;
}

.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents {
	background-color: #fbdd45;
	font: normal 10px/1 "Rubik";
}

.btMenuVertical .menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler,
.btMenuVertical .topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler {
	background-color: #ff7471;
}

.widget_recent_reviews {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle {
	background-color: #ff7471;
}

.btBox .tagcloud a,
.btTags ul a {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.btAccentDarkHeader .topTools .btIconWidget:hover,
.btAccentDarkHeader .topBarInMenu .btIconWidget:hover {
	color: #fbdd45;
}

.topTools a.btIconWidget:hover,
.topBarInMenu a.btIconWidget:hover {
	color: #ff7471;
}

.btSidebar .btIconWidget .btIconWidgetIcon,
footer .btIconWidget .btIconWidgetIcon,
.topBarInLogoArea .btIconWidget .btIconWidgetIcon {
	color: #ff7471;
}

.btSidebar .btIconWidget .btIconWidgetContent .btIconWidgetTitle,
footer .btIconWidget .btIconWidgetContent .btIconWidgetTitle,
.topBarInLogoArea .btIconWidget .btIconWidgetContent .btIconWidgetTitle {
	color: #ff7471;
}

.btSidebar .btIconWidget .btIconWidgetContent .btIconWidgetText,
footer .btIconWidget .btIconWidgetContent .btIconWidgetText,
.topBarInLogoArea .btIconWidget .btIconWidgetContent .btIconWidgetText {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.btAccentIconWidget.btIconWidget .btIconWidgetIcon {
	color: #ff7471;
}

a.btAccentIconWidget.btIconWidget:hover {
	color: #ff7471;
}

.btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooterWidgets .btSearch button:hover,
.btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .btSearch button:hover,
.btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .btSearch button:hover,
.btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btLightSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin .btSidebar .widget_product_search button:hover,
.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover,
.btDarkSkin.btLightSkin .btDarkSkin .btSidebar .widget_product_search button:hover {
	background: #ff7471 !important;
	border-color: #ff7471 !important;
}

.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon a.bt_bb_icon_holder {
	color: #ff7471;
}

.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon:hover a.bt_bb_icon_holder {
	color: #ff2925;
}

.btSearchInner.btFromTopBox button:hover:before {
	color: #ff7471;
}

div.btButtonWidget.btAccentLightButton a {
	color: #ff7471;
}

div.btButtonWidget.btLightAccentButton a {
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

div.btButtonWidget.btLightAccentButton a:hover {
	color: #ff7471;
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

div.btButtonWidget.btDarkAccentButton a {
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

div.btButtonWidget.btDarkAccentButton a:hover {
	color: #ff7471;
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

div.btButtonWidget.btAlternateLightButton a {
	color: #fbdd45;
}

div.btButtonWidget.btLightAlternateButton a {
	-webkit-box-shadow: 0 0 0 3em #fbdd45 inset;
	box-shadow: 0 0 0 3em #fbdd45 inset;
}

div.btButtonWidget.btLightAlternateButton a:hover {
	color: #fbdd45;
	-webkit-box-shadow: 0 0 0 1px #fbdd45 inset;
	box-shadow: 0 0 0 1px #fbdd45 inset;
}

.bt_bb_headline .bt_bb_headline_superheadline {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_headline.bt_bb_subheadline .bt_bb_headline_subheadline {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_headline h1 strong,
.bt_bb_headline h2 strong,
.bt_bb_headline h3 strong,
.bt_bb_headline h4 strong,
.bt_bb_headline h5 strong,
.bt_bb_headline h6 strong {
	color: #ff7471;
}

.bt_bb_dash_bottom.bt_bb_headline .bt_bb_headline_content:after,
.bt_bb_dash_top_bottom.bt_bb_headline .bt_bb_headline_content:after {
	color: #ff7471;
}

.bt_bb_button .bt_bb_button_text {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_counter_holder .bt_bb_counter_content .bt_bb_counter_text {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_countdown.btCounterHolder .btCountdownHolder>span {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_countdown.btCounterHolder .btCountdownHolder span[class$="_text"]>span {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	color: #ff7471;
}

.bt_bb_countdown.btCounterHolder .btCountdownHolder span[class$="_text"] {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_progress_bar span.bt_bb_progress_bar_text {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content:before {
	color: #ff7471;
}

.btHeadingDash_circle .bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content:before {
	color: #ff7471;
}

.btHeadingDash_balloon .bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content:before {
	color: #fbdd45;
}

.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_author,
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_comments {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_date a:hover,
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_author a:hover,
.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_comments a:hover {
	color: #ff7471;
}

.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_category ul.post-categories {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_category ul.post-categories li a:hover {
	color: #ff7471;
}

.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_author a:hover {
	color: #ff7471;
}

.bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_title {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_latest_posts .bt_bb_latest_posts_item.btNoImage .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_category ul.post-categories li a:hover {
	color: #ff7471;
}

.bt_bb_latest_posts .bt_bb_latest_posts_item.btNoImage .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta .bt_bb_latest_posts_item_author a:hover {
	color: #ff7471;
}

.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category .post-categories {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_category .post-categories li a {
	color: #ff7471;
}

.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta>span {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	color: #ff7471;
}

.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_meta>span a {
	color: #ff7471;
}

.bt_bb_masonry_post_grid .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover {
	color: #ff7471;
}

.bt_bb_post_grid_filter {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:hover,
.bt_bb_post_grid_filter .bt_bb_post_grid_filter_item.active {
	color: #ff7471;
}

.bt_bb_post_grid_loader {
	border-top: .4em solid #ff7471;
}

.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_service .bt_bb_service_content .bt_bb_service_content_button_text {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.slick-dots li.slick-active,
.slick-dots li:hover {
	background-color: #ff7471;
}

.bt_bb_layout_wide button.slick-arrow.slick-prev {
	color: #ff7471;
}

.bt_bb_layout_wide button.slick-arrow.slick-next {
	color: #ff7471;
}

.bt_bb_style_simple ul.bt_bb_tabs_header li.on {
	border-color: #ff7471;
}

.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title_content .bt_bb_accordion_item_title {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_price_list .bt_bb_price_list_supertitle {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_price_list .bt_bb_price_list_price {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_price_list .bt_bb_price_list_title {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_schedule .bt_bb_schedule_title_flex {
	background-color: #ff7471;
}

.bt_bb_schedule .bt_bb_schedule_title_flex .bt_bb_schedule_supertitle {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_schedule .bt_bb_schedule_title_flex .bt_bb_schedule_title {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day .bt_bb_schedule_week_day {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_day .bt_bb_schedule_inner_location:before {
	color: #ff7471;
}

.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row .bt_bb_schedule_time .bt_bb_schedule_hours {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day .bt_bb_schedule_week_day {
	color: #ff7471;
}

.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_day .bt_bb_schedule_week_day:before {
	color: #ff7471;
}

.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time .bt_bb_schedule_hours {
	color: #ff7471;
}

.bt_bb_schedule .bt_bb_schedule_content .bt_bb_schedule_inner_row.btToday .bt_bb_schedule_time .bt_bb_schedule_inner_desc:before {
	color: #ff7471;
}

.bt_bb_event .bt_bb_event_content .bt_bb_event_date {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	color: #ff7471;
}

.bt_bb_event .bt_bb_event_content .bt_bb_event_content_title {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_event .bt_bb_event_content .bt_bb_event_content_title a:hover {
	color: #ff7471;
}

@media (max-width: 480px) {
	.bt_bb_event .bt_bb_event_content .bt_bb_event_date .bt_bb_event_date_month:after {
		font-family: "Rubik", Arial, Helvetica, sans-serif;
		color: #ff7471;
	}
}

.bt_bb_card .bt_bb_card_content .bt_bb_card_supertitle {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_image_position_top.bt_bb_card .bt_bb_card_content .bt_bb_card_supertitle {
	color: #ff7471;
}

.bt_bb_card .bt_bb_card_content .bt_bb_card_title {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_card .bt_bb_card_content .bt_bb_card_title:before {
	color: #ff7471;
}

.btHeadingDash_circle .bt_bb_card .bt_bb_card_content .bt_bb_card_title:before {
	color: #ff7471;
}

.btHeadingDash_guitar .bt_bb_card .bt_bb_card_content .bt_bb_card_title:before {
	color: #fbdd45;
}

.bt_bb_card .bt_bb_card_content .bt_bb_card_button_text {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_step_line .bt_bb_inner_step .bt_bb_inner_step_content .bt_bb_inner_step_content_holder:after {
	background: #ff7471;
}

.bt_bb_step_line .bt_bb_inner_step .bt_bb_inner_step_content:before {
	color: #ff7471;
	-webkit-box-shadow: 0 0 0 2px #ff7471 inset;
	box-shadow: 0 0 0 2px #ff7471 inset;
}

.bt_bb_step_line .bt_bb_inner_step .bt_bb_inner_step_content:after {
	background: #ff7471;
}

.bt_bb_step_line .bt_bb_inner_step .bt_bb_inner_step_content .bt_bb_inner_step_title {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

div.wpcf7-validation-errors,
div.wpcf7-acceptance-missing {
	border: 2px solid #ff7471;
}

span.wpcf7-not-valid-tip {
	color: #ff7471;
}

.btContact .btContactRow .icon_name:before {
	color: #ff7471;
}

.btContact .btContactRow .icon_email:before {
	color: #ff7471;
}

.btContact .btContactRow .icon_course:before {
	color: #ff7471;
}

.btContact .btContactRow .icon_message:before {
	color: #ff7471;
}

.btContact .btContactRow .btContactList .fancy-select .trigger:before {
	color: #ff7471;
}

.products ul li.product .btWooShopLoopItemInner .added:after,
.products ul li.product .btWooShopLoopItemInner .loading:after,
ul.products li.product .btWooShopLoopItemInner .added:after,
ul.products li.product .btWooShopLoopItemInner .loading:after {
	background-color: #fbdd45;
}

.products ul li.product .btWooShopLoopItemInner .added_to_cart,
ul.products li.product .btWooShopLoopItemInner .added_to_cart {
	color: #ff7471;
}

.products ul li.product .onsale,
ul.products li.product .onsale {
	background: #fbdd45;
}

nav.woocommerce-pagination ul li a,
nav.woocommerce-pagination ul li span {
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
	color: #ff7471;
}

nav.woocommerce-pagination ul li a:focus,
nav.woocommerce-pagination ul li a:hover,
nav.woocommerce-pagination ul li a.next,
nav.woocommerce-pagination ul li a.prev,
nav.woocommerce-pagination ul li span.current {
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

div.product .onsale {
	background: #fbdd45;
}

div.product div.images .woocommerce-product-gallery__trigger:after {
	-webkit-box-shadow: 0 0 0 2em #ff7471 inset, 0 0 0 2em rgba(255, 255, 255, .5) inset;
	box-shadow: 0 0 0 2em #ff7471 inset, 0 0 0 2em rgba(255, 255, 255, .5) inset;
}

div.product div.images .woocommerce-product-gallery__trigger:hover:after {
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset, 0 0 0 2em rgba(255, 255, 255, .5) inset;
	box-shadow: 0 0 0 1px #ff7471 inset, 0 0 0 2em rgba(255, 255, 255, .5) inset;
	color: #ff7471;
}

div.product div.summary .price {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

table.shop_table .coupon .input-text {
	color: #ff7471;
}

table.shop_table td.product-remove a.remove {
	color: #ff7471;
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

table.shop_table td.product-remove a.remove:hover {
	background-color: #ff7471;
}

ul.wc_payment_methods li .about_paypal {
	color: #ff7471;
}

.woocommerce-MyAccount-navigation ul li a {
	border-bottom: 2px solid #ff7471;
}

.btDarkSkin .woocommerce-error,
.btLightSkin .btDarkSkin .woocommerce-error,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-error,
.btDarkSkin .woocommerce-info,
.btLightSkin .btDarkSkin .woocommerce-info,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-info,
.btDarkSkin .woocommerce-message,
.btLightSkin .btDarkSkin .woocommerce-message,
.btDarkSkin.btLightSkin .btDarkSkin .woocommerce-message {
	border-top: 4px solid #ff7471;
}

.woocommerce-info a:not(.button),
.woocommerce-message a:not(.button) {
	color: #ff7471;
}

.woocommerce-message:before,
.woocommerce-info:before {
	color: #ff7471;
}

.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type="submit"],
.woocommerce .btContent input[type="submit"],
.woocommerce-page .btSidebar input[type="submit"],
.woocommerce-page .btContent input[type="submit"],
.woocommerce .btSidebar button[type="submit"],
.woocommerce .btContent button[type="submit"],
.woocommerce-page .btSidebar button[type="submit"],
.woocommerce-page .btContent button[type="submit"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
.woocommerce .btSidebar input.alt:hover,
.woocommerce .btContent input.alt:hover,
.woocommerce-page .btSidebar input.alt:hover,
.woocommerce-page .btContent input.alt:hover,
.woocommerce .btSidebar a.button.alt:hover,
.woocommerce .btContent a.button.alt:hover,
.woocommerce-page .btSidebar a.button.alt:hover,
.woocommerce-page .btContent a.button.alt:hover,
.woocommerce .btSidebar .button.alt:hover,
.woocommerce .btContent .button.alt:hover,
.woocommerce-page .btSidebar .button.alt:hover,
.woocommerce-page .btContent .button.alt:hover,
.woocommerce .btSidebar button.alt:hover,
.woocommerce .btContent button.alt:hover,
.woocommerce-page .btSidebar button.alt:hover,
.woocommerce-page .btContent button.alt:hover,
div.woocommerce a.button,
div.woocommerce input[type="submit"],
div.woocommerce button[type="submit"],
div.woocommerce input.button,
div.woocommerce input.alt:hover,
div.woocommerce a.button.alt:hover,
div.woocommerce .button.alt:hover,
div.woocommerce button.alt:hover {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type="submit"],
.woocommerce .btContent input[type="submit"],
.woocommerce-page .btSidebar input[type="submit"],
.woocommerce-page .btContent input[type="submit"],
.woocommerce .btSidebar button[type="submit"],
.woocommerce .btContent button[type="submit"],
.woocommerce-page .btSidebar button[type="submit"],
.woocommerce-page .btContent button[type="submit"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
.woocommerce .btSidebar input.alt:hover,
.woocommerce .btContent input.alt:hover,
.woocommerce-page .btSidebar input.alt:hover,
.woocommerce-page .btContent input.alt:hover,
.woocommerce .btSidebar a.button.alt:hover,
.woocommerce .btContent a.button.alt:hover,
.woocommerce-page .btSidebar a.button.alt:hover,
.woocommerce-page .btContent a.button.alt:hover,
.woocommerce .btSidebar .button.alt:hover,
.woocommerce .btContent .button.alt:hover,
.woocommerce-page .btSidebar .button.alt:hover,
.woocommerce-page .btContent .button.alt:hover,
.woocommerce .btSidebar button.alt:hover,
.woocommerce .btContent button.alt:hover,
.woocommerce-page .btSidebar button.alt:hover,
.woocommerce-page .btContent button.alt:hover,
div.woocommerce a.button,
div.woocommerce input[type="submit"],
div.woocommerce button[type="submit"],
div.woocommerce input.button,
div.woocommerce input.alt:hover,
div.woocommerce a.button.alt:hover,
div.woocommerce .button.alt:hover,
div.woocommerce button.alt:hover {
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.woocommerce .btSidebar a.button:hover,
.woocommerce .btContent a.button:hover,
.woocommerce-page .btSidebar a.button:hover,
.woocommerce-page .btContent a.button:hover,
.woocommerce .btSidebar input[type="submit"]:hover,
.woocommerce .btContent input[type="submit"]:hover,
.woocommerce-page .btSidebar input[type="submit"]:hover,
.woocommerce-page .btContent input[type="submit"]:hover,
.woocommerce .btSidebar button[type="submit"]:hover,
.woocommerce .btContent button[type="submit"]:hover,
.woocommerce-page .btSidebar button[type="submit"]:hover,
.woocommerce-page .btContent button[type="submit"]:hover,
.woocommerce .btSidebar input.button:hover,
.woocommerce .btContent input.button:hover,
.woocommerce-page .btSidebar input.button:hover,
.woocommerce-page .btContent input.button:hover,
.woocommerce .btSidebar input.alt,
.woocommerce .btContent input.alt,
.woocommerce-page .btSidebar input.alt,
.woocommerce-page .btContent input.alt,
.woocommerce .btSidebar a.button.alt,
.woocommerce .btContent a.button.alt,
.woocommerce-page .btSidebar a.button.alt,
.woocommerce-page .btContent a.button.alt,
.woocommerce .btSidebar .button.alt,
.woocommerce .btContent .button.alt,
.woocommerce-page .btSidebar .button.alt,
.woocommerce-page .btContent .button.alt,
.woocommerce .btSidebar button.alt,
.woocommerce .btContent button.alt,
.woocommerce-page .btSidebar button.alt,
.woocommerce-page .btContent button.alt,
div.woocommerce a.button:hover,
div.woocommerce input[type="submit"]:hover,
div.woocommerce button[type="submit"]:hover,
div.woocommerce input.button:hover,
div.woocommerce input.alt,
div.woocommerce a.button.alt,
div.woocommerce .button.alt,
div.woocommerce button.alt {
	color: #ff7471;
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.star-rating span:before {
	color: #ff7471;
}

p.stars a[class^="star-"].active:after,
p.stars a[class^="star-"]:hover:after {
	color: #ff7471;
}

.btDarkSkin .select2-container--default .select2-results__option[aria-selected=true],
.btLightSkin .btDarkSkin .select2-container--default .select2-results__option[aria-selected=true],
.btDarkSkin.btLightSkin .btDarkSkin .select2-container--default .select2-results__option[aria-selected=true],
.btDarkSkin .select2-container--default .select2-results__option[data-selected=true],
.btLightSkin .btDarkSkin .select2-container--default .select2-results__option[data-selected=true],
.btDarkSkin.btLightSkin .btDarkSkin .select2-container--default .select2-results__option[data-selected=true] {
	background-color: #ff7471 !important;
}

.select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-results__option--highlighted[data-selected] {
	background-color: #ff7471;
}

.btQuoteBooking .btContactNext {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	color: #ff7471;
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.btQuoteBooking .btContactNext:hover {
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner {
	background: #ff7471;
}

.btQuoteBooking .btQuoteItem label {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.btQuoteBooking .ui-slider .ui-slider-handle {
	background: #ff7471;
}

.btQuoteBooking .btQuoteBookingForm .btQuoteTotal {
	background: #ff7471;
}

.btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btQuoteBooking .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea {
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset !important;
	box-shadow: 0 0 0 1px #ff7471 inset !important;
	border-color: #ff7471 !important;
}

.btQuoteBooking .btQuoteContact .btQuoteItem.btContactFieldMandatory.btContactFieldError textarea.btContactMessage {
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset !important;
	box-shadow: 0 0 0 1px #ff7471 inset !important;
	border-color: #ff7471 !important;
}

.btQuoteBooking .btContactFieldMandatory.btContactFieldError .dd.ddcommon.borderRadius .ddTitleText {
	-webkit-box-shadow: 0 0 0 2px #ff7471 inset;
	box-shadow: 0 0 0 2px #ff7471 inset;
}

.btQuoteBooking .btSubmitMessage {
	color: #ff7471;
}

.btQuoteBooking .btContactSubmit {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
	-webkit-box-shadow: 0 0 0 3em #ff7471 inset;
	box-shadow: 0 0 0 3em #ff7471 inset;
}

.btQuoteBooking .btContactSubmit:hover {
	color: #ff7471;
	-webkit-box-shadow: 0 0 0 1px #ff7471 inset;
	box-shadow: 0 0 0 1px #ff7471 inset;
}

.bt_cc_email_confirmation_container [type="checkbox"]:not(:checked)+label:before,
.bt_cc_email_confirmation_container [type="checkbox"]:checked+label:before {
	border: 2px solid #ff7471;
}

.btDatePicker .ui-datepicker-header {
	background-color: #ff7471;
}

.bt_bb_cost_calculator .bt_bb_cost_calculator_total {
	background-color: #ff7471;
}

.bt_bb_cost_calculator .bt_bb_cost_calculator_total .bt_bb_cost_calculator_total_text {
	background-color: #ff7471;
}

.bt_bb_organic_animation_fill.bt_bb_organic_animation .item .item__deco {
	fill: #fbdd45;
}

.bt_bb_organic_animation_fill_accent.bt_bb_organic_animation .item .item__deco {
	fill: #ff7471;
}

.bt_bb_organic_animation_stroke.bt_bb_organic_animation .item .item__deco {
	stroke: #fbdd45;
}

.bt_bb_organic_animation_stroke_accent.bt_bb_organic_animation .item .item__deco {
	stroke: #ff7471;
}

.bt_bb_organic_animation .item .item__meta .item__subtitle {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

.bt_bb_organic_animation .item .item__meta .item__button_text {
	font-family: "Rubik", Arial, Helvetica, sans-serif;
}

@media (max-width: 480px) {
	.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a {
		-webkit-box-shadow: 0 0 0 0 #ff7471 inset !important;
		box-shadow: 0 0 0 0 #ff7471 inset !important;
	}
}
@font-face{ font-family:"Artistic";src:url("frontpage/css/tabula/fonts/Artistic/Artistic.woff") format("woff"),url("frontpage/css/tabula/fonts/Artistic/Artistic.ttf") format("truetype"); } *[data-ico-artistic]:before{ font-family:Artistic;content:attr(data-ico-artistic); } @font-face{ font-family:"Arts";src:url("frontpage/css/tabula/fonts/Arts/Arts.woff") format("woff"),url("frontpage/css/tabula/fonts/Arts/Arts.ttf") format("truetype"); } *[data-ico-arts]:before{ font-family:Arts;content:attr(data-ico-arts); } @font-face{ font-family:"Design";src:url("frontpage/css/tabula/fonts/Design/Design.woff") format("woff"),url("frontpage/css/tabula/fonts/Design/Design.ttf") format("truetype"); } *[data-ico-design]:before{ font-family:Design;content:attr(data-ico-design); } @font-face{ font-family:"Development";src:url("frontpage/css/tabula/fonts/Development/Development.woff") format("woff"),url("frontpage/css/tabula/fonts/Development/Development.ttf") format("truetype"); } *[data-ico-development]:before{ font-family:Development;content:attr(data-ico-development); } @font-face{ font-family:"Dripicons";src:url("frontpage/css/tabula/fonts/Dripicons/Dripicons.woff") format("woff"),url("frontpage/css/tabula/fonts/Dripicons/Dripicons.ttf") format("truetype"); } *[data-ico-dripicons]:before{ font-family:Dripicons;content:attr(data-ico-dripicons); } @font-face{ font-family:"Entertainment";src:url("frontpage/css/tabula/fonts/Entertainment/Entertainment.woff") format("woff"),url("frontpage/css/tabula/fonts/Entertainment/Entertainment.ttf") format("truetype"); } *[data-ico-entertainment]:before{ font-family:Entertainment;content:attr(data-ico-entertainment); } @font-face{ font-family:"Essential";src:url("frontpage/css/tabula/fonts/Essential/Essential.woff") format("woff"),url("frontpage/css/tabula/fonts/Essential/Essential.ttf") format("truetype"); } *[data-ico-essential]:before{ font-family:Essential;content:attr(data-ico-essential); } @font-face{ font-family:"FontAwesome";src:url("frontpage/css/tabula/fonts/FontAwesome/FontAwesome.woff") format("woff"),url("frontpage/css/tabula/fonts/FontAwesome/FontAwesome.ttf") format("truetype"); } *[data-ico-fontawesome]:before{ font-family:FontAwesome;content:attr(data-ico-fontawesome); } @font-face{ font-family:"FontAwesome5Brands";src:url("frontpage/css/tabula/fonts/FontAwesome5Brands/FontAwesome5Brands.woff") format("woff"),url("frontpage/css/tabula/fonts/FontAwesome5Brands/FontAwesome5Brands.ttf") format("truetype"); } *[data-ico-fontawesome5brands]:before{ font-family:FontAwesome5Brands;content:attr(data-ico-fontawesome5brands); } @font-face{ font-family:"FontAwesome5Regular";src:url("frontpage/css/tabula/fonts/FontAwesome5Regular/FontAwesome5Regular.woff") format("woff"),url("frontpage/css/tabula/fonts/FontAwesome5Regular/FontAwesome5Regular.ttf") format("truetype"); } *[data-ico-fontawesome5regular]:before{ font-family:FontAwesome5Regular;content:attr(data-ico-fontawesome5regular); } @font-face{ font-family:"FontAwesome5Solid";src:url("frontpage/css/tabula/fonts/FontAwesome5Solid/FontAwesome5Solid.woff") format("woff"),url("frontpage/css/tabula/fonts/FontAwesome5Solid/FontAwesome5Solid.ttf") format("truetype"); } *[data-ico-fontawesome5solid]:before{ font-family:FontAwesome5Solid;content:attr(data-ico-fontawesome5solid); } @font-face{ font-family:"Icon7Stroke";src:url("frontpage/css/tabula/fonts/Icon7Stroke/Icon7Stroke.woff") format("woff"),url("frontpage/css/tabula/fonts/Icon7Stroke/Icon7Stroke.ttf") format("truetype"); } *[data-ico-icon7stroke]:before{ font-family:Icon7Stroke;content:attr(data-ico-icon7stroke); } @font-face{ font-family:"Music";src:url("frontpage/css/tabula/fonts/Music/Music.woff") format("woff"),url("frontpage/css/tabula/fonts/Music/Music.ttf") format("truetype"); } *[data-ico-music]:before{ font-family:Music;content:attr(data-ico-music); } @font-face{ font-family:"Productivity";src:url("frontpage/css/tabula/fonts/Productivity/Productivity.woff") format("woff"),url("frontpage/css/tabula/fonts/Productivity/Productivity.ttf") format("truetype"); } *[data-ico-productivity]:before{ font-family:Productivity;content:attr(data-ico-productivity); }
</style>
<link rel='stylesheet' id='tabula-print-css'  href='frontpage/css/tabula/print.css?ver=5.7' type='text/css' media='print' />
<link rel='stylesheet' id='boldthemes-fonts-css'  href='https://fonts.googleapis.com/css?family=Rubik%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRubik%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRubik%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRubik%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CRubik%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&#038;subset=latin%2Clatin-ext&#038;ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='boldthemes-framework-css'  href='frontpage/css/tabula/style.css?ver=5.7' type='text/css' media='all' />
<script src="frontpage/js/60e93.js"></script>

<noscript>
   <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
</noscript>
<!-- BEGIN recaptcha, injected by plugin wp-recaptcha-integration  -->
<!-- END recaptcha -->
<link rel="icon" href="http://tabula.bold-themes.com/sunny/wp-content/uploads/sites/2/2019/03/cropped-crest-1-32x32.png" sizes="32x32" />
<link rel="icon" href="http://tabula.bold-themes.com/sunny/wp-content/uploads/sites/2/2019/03/cropped-crest-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="http://tabula.bold-themes.com/sunny/wp-content/uploads/sites/2/2019/03/cropped-crest-1-180x180.png" />
<meta name="msapplication-TileImage" content="http://tabula.bold-themes.com/sunny/wp-content/uploads/sites/2/2019/03/cropped-crest-1-270x270.png" />
	
</head>

<body class="page-template-default page page-id-2376 page-child parent-pageid-1546 theme-tabula bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js btHeadingWeight_bold btHeadingDash_star btMenuWeight_default btCapitalizeMainMenuItems btHasCrest btNoLogo btHasAltLogo btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btHideHeadline btLightSkin btBelowMenu noBodyPreloader btHardRoundedButtons btTransparentLightHeader btNoSidebar" >
