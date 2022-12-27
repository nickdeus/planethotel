<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<!-- Mirrored from www.hotelwebsitetemplates.com/templates/DI_S627_K4/family-suite/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 08:40:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Family Suite</title>
<meta name="description" content='Kitchenette himenaeos lectus ad imposing aliquam. Famous santorini. The lectus elit organizing services nisi orci et blend tops. Horse back riding adipiscing'/>
<meta property='og:title' content='Family Suite'/>
<meta property='og:description' content='Kitchenette himenaeos lectus ad imposing aliquam. Famous santorini. The lectus elit organizing services nisi orci et blend tops. Horse back riding adipiscing'/>
<meta property='og:url' content='index.html'/>
<meta property='og:type' content='article'/>
<meta property='og:image' content='../uploads/nr_photos/1920/familysuite_8115.jpg'/>
<meta property='og:image:width' content='1920'/>
<meta property='og:image:height' content='961'/>
<meta property='og:image' content='../uploads/photos/1024/2019/07/familysuite_8000.jpg'/>
<meta property='og:image:width' content='1024'/>
<meta property='og:image:height' content='768'/>
<meta property='og:image' content='../uploads/images/1024/311.jpg'/>
<meta property='og:image:width' content='1024'/>
<meta property='og:image:height' content='530'/>
<meta property='og:image' content='../uploads/images/414/311_2.jpg'/>
<?php include('../includes/header.php'); ?>
<body>
<?php include('../includes/nav.php'); ?>
<div class="clear"></div>

</div><div style="clear:both;"></div>
<div class='relative'>
<div style="padding-bottom:0px;">
<div class="splide headerArrows" id="headerSlider">
	<div class="splide__track">
		<ul class="splide__list">

										<li class="splide__slide">
					<img src='../uploads/nr_photos/1366/familysuite_8115.jpg' data-available-resolutions='{"1920":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1920\/familysuite_8115.jpg","1600":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1600\/familysuite_8115.jpg","1440":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1440\/familysuite_8115.jpg","1366":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1366\/familysuite_8115.jpg","1280":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1280\/familysuite_8115.jpg","1024":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1024\/familysuite_8115.jpg","835":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/835\/familysuite_8115.jpg","768":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/768\/familysuite_8115.jpg","600":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/600\/familysuite_8115.jpg"}' style="width:100%;height:auto;" alt="">
									</li>
			
		</ul>
	</div>
	<div class="splide__progress">
		<div class="splide__progress__bar"></div>
	</div>
	</div>

<script>
chooseDimensions();

$(function() {
	var videoEnabled = $('#headerSlider div[data-youtube]').length>0 ? true : false;
	
	var sliderHeight = "92vh";
	var heightRatio = 900/1920;
	if($(window).width()<=680){
		sliderHeight = "50vh";
		heightRatio = 1;
	}

	window.homeSlider = homeSlider = new Splide( '#headerSlider', {
		interval:4500,
		speed:500,
		pauseOnHover: false,
		lazyLoad:'sequential',
		cover: true,
		fixedHeight: sliderHeight,
		heightRatio: heightRatio,
		// autoHeight: true,
		autoplay: false,
		arrows: false,
		pagination: true,
		type: 'fade',
		rewind: true,
		perPage: 1,
		perMove: 1,
		gap: 0,
		padding: { left: 0, right: 0 }
	});
	homeSlider.on('lazyload:loaded', function(e){
		//start play when next image is loaded
		if(!videoEnabled)
			homeSlider.Components.Autoplay.play();
	})
	homeSlider.on( 'mounted', function () {
		if(videoEnabled){
			initHeaderVideo();
			if(window.yt_player) window.yt_player.playVideo();
		}
	});
	homeSlider.on( 'moved', function () {
		if(videoEnabled){
			if(homeSlider.index == 0){
				homeSlider.Components.Autoplay.pause();
				window.yt_player.playVideo();
			}
		}
	});
	homeSlider.mount();
});

function chooseDimensions(){
	$(".splide img[data-available-resolutions]").each(function(index, el){
		el_attr = $(el).attr("data-available-resolutions");
		available_resolutions = JSON.parse(el_attr);
		var dimensions = Object.keys(available_resolutions);
		img_url = "";
		prev_dimension = 0;
		dimensions.forEach(function(dimension){
			if($(window).width() > (parseInt(prev_dimension) + parseInt(dimension))/2)
				img_url = available_resolutions[dimension];
			prev_dimension = dimension;
		})
		if(img_url!=""){
			if($(el).attr("src")){
				$(el).attr("src", ""); //cancel current download
				$(el).attr("src", img_url+"?v=201907021525");
			}else{
				$(el).attr("data-splide-lazy", img_url+"?v=201907021525");
			}
		}
	});
}

function initHeaderVideo(){

	$(document).on("click", ".videoLoader", function(){
		if(window.yt_player) window.yt_player.playVideo();
	})

	$.getScript("../library/javascripts/video/youtube-background.js", function(){
		var options = {
			// 'mobile':false,
			// 'play-button':false,
			// 'mute-button':false,
			'load-background':true,
			// 'autoplay':true,
			// 'muted':true,
			// 'loop':false,
			// 'resolution':'1:1',
			// 'offset': 200,
			// 'fit-box':true,
			// 'inline-styles':true
			'onStatusChange': function(e) {
				if(!window.yt_player) window.yt_player = e.target;
				//-1 – unstarted, 0 – ended, 1 – playing, 2 – paused, 3 – buffering, 5 – video cued
				if(e.data==0){
					e.target.stopVideo();
					window.homeSlider.go('>'); //next page
					window.homeSlider.Components.Autoplay.play();
					$(".videoLoader").fadeIn(300);
				}else if(e.data==1){
					$(".videoLoader").fadeOut(300);
				}else{
					$(".videoLoader").fadeIn(300);
				}
			},
		}
		$('div[data-youtube]').youtube_background(options);
	});
}
</script>

<style>
	.videoContainer {position:absolute;width:100%;height:100%;top:0;left:0;bottom:0;right:0;display:flex;flex-direction:column;justify-content:center;align-items:center;}
	.videoLoader{position:absolute;top:0;left:0;bottom:0;right:0;z-index:40;display:flex;align-items:center;justify-content:center;opacity:0.9;
		background:repeating-linear-gradient(45deg,#fafafa,#fafafa 2px,#fff 2px,#fff 8px);}
	.fast-spin{-webkit-animation: fa-spin .5s infinite linear;animation: fa-spin .5s infinite linear;}
	.splide__progress{position:absolute;bottom:0;left:0;right:0;}
	.splide__progress__bar{background:rgba(0,0,0,0.2);height:4px;}
</style></div>
</div><div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
<div id="LayerRow2">
<div class="top40">

<div style="display:block; margin:auto;">
<div class="accHeaderTitle center">
<h1>



<div class="clear"></div>
FAMILY SUITE</h1>
</div>

<div style="padding-bottom:0px;"></div>
<div>


<div class="clear"></div>
<div class="widthSmall">

<div style="display:block; width:100%; margin:auto;">
<div class="center">
<div class="accIntSubTitle" data-rec-id='311' data-field='Rec_Field4'>
SEA VIEW & PRIVATE USE OF BALCONY</div>
</div>

<div style="padding-bottom:15px;"></div>
<div class="justify" data-rec-id='311' data-field='Rec_Editor1'>
<div class="textEditor_311" data-rec-id='311' data-field='Rec_Text1'>Kitchenette himenaeos lectus ad imposing aliquam. Famous santorini. The lectus elit organizing services nisi orci et blend tops. Horse back riding adipiscing euismod sed blazing excursions awesome clear ac porter service dui beauty treatments. View rutrum maecenas steeply lobortis nibh shower erat air conditioning choice clear tincidunt upon non euismod justo sky. Sed odio car rental the private dinner endless blue aegean sea. Aenean posuere pretium odio lorem cruises ac hiking your direct dial telephone hundreds aliquam ut much duis ornare family euismod of per the a the activities quis posuere awesome bibendum baby sitting cliffs blandit elit welcome drink, varius bibendum nec nestled vel deluxe placerat caldera view cable-satellite tv cruises bathrobes sed erat.</div></div>

<div style="padding-bottom:50px;"></div>
</div></div>
<div class="widthSmall">

<div style="display:block; width:100%; margin:auto;display:flex;justify-content:stretch;
    flex-wrap: wrap;">
<div class="grid50to100Size">
<div class="top20">
<div class="sizeText" data-rec-id='311' data-field='Rec_Field2'>
Size: 27-30m<sup>2</sup></div>
</div>
<div style="clear:both;" class="top20">
</div>
<div class="accCapacityInt" data-rec-id='311'>
</div>
</div>
<div class="grid50to100">
<div class="gridItem96" data-rec-id='311'>
<div class='image2_311'><img class="lazyload" data-srcset="/templates/DI_S627_K4/uploads/images/414/311_2.jpg 414w,/templates/DI_S627_K4/uploads/images/375/311_2.jpg 375w,/templates/DI_S627_K4/uploads/images/200/311_2.jpg 200w,/templates/DI_S627_K4/uploads/images/150/311_2.jpg 150w" data-src="/templates/DI_S627_K4/uploads/images/414/311_2.jpg?v=201907021546" alt="FAMILY SUITE" width="414" height="198" style="width:100%; vertical-align:middle; display: block;"></div></div>
</div>
<div class="clear"></div>
</div></div>
<div style="padding-bottom:30px;"></div>
<div style="display:block; width:100%; margin:auto;">
<div class="widthSmall">
<div class="facilities" data-rec-id='311' data-field='Rec_Editor2'>
<div class="textEditor_311" data-rec-id='311' data-field='Rec_Text2'><strong>ROOM FACILITIES</strong><ul>	<li>Luxury Bath Amenities</li>	<li>Cable-Satellite TV</li>	<li>Coffee Making Facilities</li>	<li>Hairdryer</li>	<li>Living room or Lounge area</li>	<li>Pool towels</li>	<li>Private Terrace</li>	<li>Writing desk</li>	<li>Bathrobes and Slippers</li>	<li>Television</li>	<li>Daily Maid Service</li>	<li>Fire safety system</li>	<li>Individually Controlled Air Condition</li>	<li>Mini-Bar</li>	<li>Safe Deposit Box</li>	<li>Wake-up Call</li>	<li>Bathroom with Jacuzzi</li>	<li>Closet</li>	<li>Direct dial telephone</li>	<li> Guest Laundry Service</li>	<li>Internet access</li>	<li>Sea View</li>	<li>Welcome Drink</li></ul></div></div>
</div>
<div class="bookThisRoomMargin ">
<div class="tableAuto" data-rec-id='311'>
<a href="#" class="bookThisRoom" target="_blank" rel="noopener">BOOK THIS ROOM</a></div>
</div>

<div style="padding-bottom:50px;"></div>
<div class="gridItem90" data-rec-id='311'>


<div class="gridGal4"><a class="fancybox" data-fancybox="gallery18" data-thumb="/templates/DI_S627_K4/uploads/photos/600/2019/07/familysuite_8000.jpg" href="../uploads/photos/1024/2019/07/familysuite_8000.jpg"  title="">
<div class="gridGalleryLarge">
<div class="imageAreaHor" style="background-image: url(../uploads/photos/600/2019/07/familysuite_8000.jpg); background-size: cover;"><span class=" photoshover"></span></div>
</div></a>
<a class="fancybox" data-fancybox="gallery18" data-thumb="/templates/DI_S627_K4/uploads/photos/600/2019/07/familysuite_8699.jpg" href="../uploads/photos/1024/2019/07/familysuite_8699.jpg"  title="">
<div class="gridGallerySmall">
<div class="imageAreaVert" style="background-image: url(../uploads/photos/600/2019/07/familysuite_8699.jpg); background-size: cover;"><span class=" photoshover"></span></div>
</div><div style="clear:both;"></div>
</a>
<a class="fancybox" data-fancybox="gallery18" data-thumb="/templates/DI_S627_K4/uploads/photos/600/2019/07/familysuite_3985.jpg" href="../uploads/photos/1024/2019/07/familysuite_3985.jpg"  title="">
<div class="gridGallerySmall">
<div class="imageAreaVert" style="background-image: url(../uploads/photos/600/2019/07/familysuite_3985.jpg); background-size: cover;"><span class=" photoshover"></span></div>
</div></a>
<a class="fancybox" data-fancybox="gallery18" data-thumb="/templates/DI_S627_K4/uploads/photos/600/2019/07/familysuite_7381.jpg" href="../uploads/photos/1024/2019/07/familysuite_7381.jpg"  title="">
<div class="gridGalleryLarge">
<div class="imageAreaHor" style="background-image: url(../uploads/photos/600/2019/07/familysuite_7381.jpg); background-size: cover;"><span class=" photoshover"></span></div>
</div><div style="clear:both;"></div>
</a>
</div><div class="gridGal5">
<a class="fancybox" data-fancybox="gallery18" data-thumb="/templates/DI_S627_K4/uploads/photos/600/2019/07/familysuite_5111.jpg" href="../uploads/photos/1024/2019/07/familysuite_5111.jpg"  title="">
<div class="imageAreaGal5" style="background-image: url(../uploads/photos/600/2019/07/familysuite_5111.jpg); background-size: cover;"><span class=" photoshover"></span></div>
</a>
</div>
<div style="clear:both;"></div></div>

<div style="padding-bottom:50px;"></div>
</div><div class="accIntSliderMargin">

<div style="display:block; width:100%; margin:auto;">
<div class="relative">
<div class="intSliderAccBack">
<div class="griditem85" data-rec-id='311'>
<script>
$(window).load(function(){
var accSlider = $('.bxAccommodation').bxSlider({
    controlsphotos: true,
    pager:false,
    controls: false,
    minSlides:3,
    maxSlides: 3,
    infiniteLoop: true,
    autoStart: false,
    auto:true,
    pause: 4000,
    slideWidth:1000,
    easing: 'ease-in-out',
    speed: 1200,
    startSlide: 0,
    slideMargin: 0
});
	$(".accint-prev").click(function(e){
		e.preventDefault();
		accSlider.goToPrevSlide();
	});
	$(".accint-next").click(function(e){
		e.preventDefault();
		accSlider.goToNextSlide();
	});

});
</script>

<style>
	/* create styles to INCOM - delete the below one */
	.homeBXTextArea { position:absolute; width:100%; bottom:30px; margin:auto; }
	.homeBXText { text-align:center; }
</style>

<div class="moreRoomsTitle">ALL ROOMS & SUITES</div><div class="relative"><div class="bxAccommodation"><div class="slide wow fadeIn" data-wow-delay='0ms'>


<div style="display:block; margin:0;">

<div class="intSubCatLink">

<a href="../junior-suite/index.html" target="_self">

<div style="display:block; width:100%; margin:auto;">
<div class="intSubCatAccTitle" data-rec-id='309' data-field='Rec_Title'>
JUNIOR SUITE</div>
<div style="padding-bottom:10px"></div>
<div class='image1_309'><img class="lazyload" data-srcset="/templates/DI_S627_K4/uploads/images/1024/309.jpg 1024w,/templates/DI_S627_K4/uploads/images/835/309.jpg 835w,/templates/DI_S627_K4/uploads/images/768/309.jpg 768w,/templates/DI_S627_K4/uploads/images/600/309.jpg 600w,/templates/DI_S627_K4/uploads/images/414/309.jpg 414w,/templates/DI_S627_K4/uploads/images/375/309.jpg 375w,/templates/DI_S627_K4/uploads/images/200/309.jpg 200w,/templates/DI_S627_K4/uploads/images/150/309.jpg 150w" data-src="/templates/DI_S627_K4/uploads/images/1024/309.jpg?v=201907021545" alt="JUNIOR SUITE" width="1024" height="530" style="width:100%; vertical-align:middle; display: block;"></div><div class="bookThisRoomIntAbs" data-rec-id='309'>
<a href="#" class="bookThisRoom" target="_blank" rel="noopener">BOOK THIS ROOM</a></div>
<div class="clear"></div>
</div>

</div></a>

</div>

<div class="clear"></div>
</div><div class="slide wow fadeIn" data-wow-delay='100ms'>


<div style="display:block; margin:0;">

<div class="intSubCatLink">

<a href="../superior-suite/index.html" target="_self">

<div style="display:block; width:100%; margin:auto;">
<div class="intSubCatAccTitle" data-rec-id='310' data-field='Rec_Title'>
SUPERIOR SUITE</div>
<div style="padding-bottom:10px"></div>
<div class='image1_310'><img class="lazyload" data-srcset="/templates/DI_S627_K4/uploads/images/1024/310.jpg 1024w,/templates/DI_S627_K4/uploads/images/835/310.jpg 835w,/templates/DI_S627_K4/uploads/images/768/310.jpg 768w,/templates/DI_S627_K4/uploads/images/600/310.jpg 600w,/templates/DI_S627_K4/uploads/images/414/310.jpg 414w,/templates/DI_S627_K4/uploads/images/375/310.jpg 375w,/templates/DI_S627_K4/uploads/images/200/310.jpg 200w,/templates/DI_S627_K4/uploads/images/150/310.jpg 150w" data-src="/templates/DI_S627_K4/uploads/images/1024/310.jpg?v=201907021546" alt="SUPERIOR SUITE" width="1024" height="530" style="width:100%; vertical-align:middle; display: block;"></div><div class="bookThisRoomIntAbs" data-rec-id='310'>
<a href="#" class="bookThisRoom" target="_blank" rel="noopener">BOOK THIS ROOM</a></div>
<div class="clear"></div>
</div>

</div></a>

</div>

<div class="clear"></div>
</div><div class="slide wow fadeIn" data-wow-delay='200ms'>


<div style="display:block; margin:0;">

<div class="intSubCatLink">

<a href="index.html" target="_self">

<div style="display:block; width:100%; margin:auto;">
<div class="intSubCatAccTitle" data-rec-id='311' data-field='Rec_Title'>
FAMILY SUITE</div>
<div style="padding-bottom:10px"></div>
<div class='image1_311'><img class="lazyload" data-srcset="/templates/DI_S627_K4/uploads/images/1024/311.jpg 1024w,/templates/DI_S627_K4/uploads/images/835/311.jpg 835w,/templates/DI_S627_K4/uploads/images/768/311.jpg 768w,/templates/DI_S627_K4/uploads/images/600/311.jpg 600w,/templates/DI_S627_K4/uploads/images/414/311.jpg 414w,/templates/DI_S627_K4/uploads/images/375/311.jpg 375w,/templates/DI_S627_K4/uploads/images/200/311.jpg 200w,/templates/DI_S627_K4/uploads/images/150/311.jpg 150w" data-src="/templates/DI_S627_K4/uploads/images/1024/311.jpg?v=201907021546" alt="FAMILY SUITE" width="1024" height="530" style="width:100%; vertical-align:middle; display: block;"></div><div class="bookThisRoomIntAbs" data-rec-id='311'>
<a href="#" class="bookThisRoom" target="_blank" rel="noopener">BOOK THIS ROOM</a></div>
<div class="clear"></div>
</div>

</div></a>

</div>

<div class="clear"></div>
</div><div class="slide wow fadeIn" data-wow-delay='300ms'>


<div style="display:block; margin:0;">

<div class="intSubCatLink">

<a href="../sea-view-villa/index.html" target="_self">

<div style="display:block; width:100%; margin:auto;">
<div class="intSubCatAccTitle" data-rec-id='312' data-field='Rec_Title'>
SEA VIEW VILLA</div>
<div style="padding-bottom:10px"></div>
<div class='image1_312'><img class="lazyload" data-srcset="/templates/DI_S627_K4/uploads/images/1024/312.jpg 1024w,/templates/DI_S627_K4/uploads/images/835/312.jpg 835w,/templates/DI_S627_K4/uploads/images/768/312.jpg 768w,/templates/DI_S627_K4/uploads/images/600/312.jpg 600w,/templates/DI_S627_K4/uploads/images/414/312.jpg 414w,/templates/DI_S627_K4/uploads/images/375/312.jpg 375w,/templates/DI_S627_K4/uploads/images/200/312.jpg 200w,/templates/DI_S627_K4/uploads/images/150/312.jpg 150w" data-src="/templates/DI_S627_K4/uploads/images/1024/312.jpg?v=201907021546" alt="SEA VIEW VILLA" width="1024" height="530" style="width:100%; vertical-align:middle; display: block;"></div><div class="bookThisRoomIntAbs" data-rec-id='312'>
<a href="#" class="bookThisRoom" target="_blank" rel="noopener">BOOK THIS ROOM</a></div>
<div class="clear"></div>
</div>

</div></a>

</div>

<div class="clear"></div>
</div></div><a href="#" class="accint-prev"></a><a href="#" class="accint-next"></a></div>  </div>
</div>

<div style="padding-bottom:50px;"></div>
</div>
</div></div>
</div>

<div style="padding-bottom:0px;"></div>
<div>


<div class="clear"></div>
</div>
</div></div>
<div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
<div id="LayerRow3">
<div class="top40">

<div style="display:block; width:100%; margin:auto;">
<div class="tableAuto">
<div  class='footerBanner'><img src="../uploads/images/150/345_R5408.png" alt="traveler's choice" title="traveler's choice" width="auto" height="auto" alt="traveler's choice"></div><div style="clear:both;"></div></div>

<div style="padding-bottom:40px"></div>
<div class="clear"></div>

</div>
</div><div class="footerBack">
<div class="widthLarge">

<div style="display:block; width:100%; margin:auto;">
<div class="grid25">
<div class="top50">
<div class="top5"><a href="../index.html" class="footerSitemap">HOME</a></div><div class="top5"><a href="../the-resort/index.html" class="footerSitemap">THE RESORT</a></div><div class="top5"><a href="../accommodation/index.html" class="footerSitemap">SUITES & VILLAS</a></div><div class="top5"><a href="../services/index.html" class="footerSitemap">SERVICES</a></div><div class="top5"><a href="../gastronomy/index.html" class="footerSitemap">GASTRONOMY</a></div><div class="top5"><a href="../breakfast/index.html" class="footerSitemap">BREAKFAST</a></div><div class="top5"><a href="../wellness/index.html" class="footerSitemap">WELLNESS  & SPA</a></div><div class="top5"><a href="../yoga/index.html" class="footerSitemap">YOGA</a></div><div class="top5"><a href="../activities/index.html" class="footerSitemap">ACTIVITIES</a></div><div class="top5"><a href="../explore/index.html" class="footerSitemap">EXPLORE</a></div><div class="top5"><a href="../location/index.html" class="footerSitemap">LOCATION</a></div><div class="top5"><a href="../contact/index.html" class="footerSitemap">CONTACT</a></div><div style="clear:both;"></div>
</div>

<div style="padding-bottom:30px"></div>
</div>
<div class="grid50">
<div class="top50">
<div class="center" style="line-height:0;">
<a href="../index.html" class='logo'><img src='../uploads/images/Harisson_Luxury_Hotel_286_R6104_logo.png' width='auto' height='auto' title='Harisson Luxury Hotel' alt='Harisson Luxury Hotel'/></a></div>
</div>

<div style="padding-bottom:30px"></div>
<div class="center">
<div class="tableAuto">
<a href="../index.html"></a></div>

</div>

<div style="padding-bottom:20px"></div>
<div class="addresstext">Los Enamorados<br />
103, Calle de Portinatx<br />
07810 Formentera, Ibiza, Spain<br />
Telephone +34 991 327 789<br />
<a class="mail" href="mailto:info@sandydreamresort.com">info@sandydreamresort.com</a></div>
<div style="padding-bottom:30px"></div>
</div>
<div class="grid25">
<div class="top50">
<div class="socialCont">
<div class="followUs homeTitleSmaller">FOLLOW US</div>                <a href="http://www.facebook.com/" target="_blank" rel="noopener" class="wow fadeIn social socialFooter" data-wow-delay="0.3">
                                    <i class="fa fab fa-facebook-f " width="100%" height="100%" title="Follow us on Facebook" alt="Follow us on Facebook"></i>
                            </a>
                        <a href="https://instagram.com/" target="_blank" rel="noopener" class="wow fadeIn social socialFooter" data-wow-delay="0.6">
                                    <i class="fa fab fa-instagram " width="100%" height="100%" title="Follow us on instagram" alt="Follow us on instagram"></i>
                            </a>
                        <a href="https://www.pinterest.com/" target="_blank" rel="noopener" class="wow fadeIn social socialFooter" data-wow-delay="0.9">
                                    <i class="fa fab fa-pinterest-p " width="100%" height="100%" title="Find us on Pinterest" alt="Find us on Pinterest"></i>
                            </a>
                        <a href="https://www.youtube.com/" target="_blank" rel="noopener" class="wow fadeIn social socialFooter" data-wow-delay="1.2">
                                    <i class="fa fab fa-youtube " width="100%" height="100%" title="Find us on Youtube" alt="Find us on Youtube"></i>
                            </a>
                        <a href="https://twitter.com/" target="_blank" rel="noopener" class="wow fadeIn social socialFooter" data-wow-delay="1.5">
                                    <i class="fa fab fa-twitter " width="100%" height="100%" title="Follow us on Twitter" alt="Follow us on Twitter"></i>
                            </a>
                <div style="clear:both;"></div>
    
</div>
</div>

<div style="padding-bottom:50px"></div>

<div class="followUs center">USEFUL LINKS</div><div class="usefulText">

	<a data-fancybox data-type="iframe" data-src="/templates/DI_S627_K4/library/lists/weather_widget.php" href="javascript:;" data-width='190' data-height='295' class="usefulLinks">Weather</a>
	   	    <a id="currency" data-fancybox data-type="iframe" href="javascript:;" data-src="/templates/DI_S627_K4/library/lists/currency.php" class="usefulLinks" data-width='160' data-height='280'>Currency Converter</a>
    
    <a id="time" data-fancybox data-type="iframe" data-src="/templates/DI_S627_K4/library/lists/time_widget.php?Lang=en" href="javascript:;" data-width='360' data-height='260' class="usefulLinks">Local Time</a>
</div>
<script>
$(document).ready(function(){

    $("[data-fancybox]").fancybox({
        iframe : {
            css : {
                width  : "350px",
                height : "250px"
            }
        }
    });
});
</script>

<div style="padding-bottom:30px"></div>
</div>
<div class="clear"></div>

</div>
</div>
</div>
<div style="display:block; width:100%; margin:auto;">
<div class="grid50">
<div class="right top10">
<div class="footerText">&copy; 2022 Harisson Luxury Hotel. All rights reserved.
   <a href="../privacy-policy-en/index.html" target="_blank" class="footerLinks">Privacy Policy</a>
</div>
</div>
</div>
<div class="grid50">
<div class="left5 top10">
<div class="footerText">
<a href="http://360hotelmarketing.com/" target="_blank" class="footerLinks"> 360&#176; Hotel Digital Marketing OVERRON </a>
</div>
</div>
</div>
<div class="clear"></div>

</div>
<div style="padding-bottom:10px;"></div>
<div style="clear:both;"></div>
<div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
</div>
</div>
	</body>


<!-- Mirrored from www.hotelwebsitetemplates.com/templates/DI_S627_K4/family-suite/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 08:40:19 GMT -->
</html>
