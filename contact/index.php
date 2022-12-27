<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<!-- Mirrored from www.hotelwebsitetemplates.com/templates/DI_S627_K4/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 08:38:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
<meta name="description" content='Los Enamorados 103, Calle de Portinatx 07810 Formentera, Ibiza, Spain Telephone +34 991 327 789 '/>
<meta property='og:title' content='Contact'/>
<meta property='og:description' content='Los Enamorados 103, Calle de Portinatx 07810 Formentera, Ibiza, Spain Telephone +34 991 327 789 '/>
<meta property='og:url' content='index.html'/>
<meta property='og:type' content='article'/>
<meta property='og:image' content='../uploads/nr_photos/1920/contact_7592.jpg'/>
<meta property='og:image:width' content='1920'/>
<meta property='og:image:height' content='961'/>
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
					<img src='../uploads/nr_photos/1366/contact_7592.jpg' data-available-resolutions='{"1920":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1920\/contact_7592.jpg","1600":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1600\/contact_7592.jpg","1440":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1440\/contact_7592.jpg","1366":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1366\/contact_7592.jpg","1280":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1280\/contact_7592.jpg","1024":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/1024\/contact_7592.jpg","835":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/835\/contact_7592.jpg","768":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/768\/contact_7592.jpg","600":"\/templates\/DI_S627_K4\/uploads\/nr_photos\/600\/contact_7592.jpg"}' style="width:100%;height:auto;" alt="">
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
				$(el).attr("src", img_url+"?v=201907021629");
			}else{
				$(el).attr("data-splide-lazy", img_url+"?v=201907021629");
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
<div class="headerTitle center">
<h1>



<div class="clear"></div>
CONTACT</h1>
</div>

<div style="padding-bottom:0px;"></div>
<div>


<div class="clear"></div>

<div style="display:block; width:100%; margin:auto;">
<div class="widthLarge">
<div class="grid60to100">
If you wish to contact us you may kindly fill in the following form with your message.  We will be happy to assist you with your inquires.
<div>We take your privacy seriously and will only use your personal information to assist you and/or provide you the services/products you have requested from us. View our <a href="https://www.hotelwebsitetemplates.com/privacy-policy/">privacy policy</a> for details. However, from time to time we would like to contact you with details of other offers / services / competitions we provide.</div>

<div style="padding-bottom:20px;"></div>
<div class='formtitle'>Contact Title</div><form method='post' action='#' style='display:grid;'>        <div class="formRow" style="margin-bottom:20px">
                        <div class="gridFormLabel">
                <div class="gridFormLabelItem">
                    <label class="formtext">E-mail *:</label>
                </div>
            </div>
                    <div class="gridFormField">
                <div class="gridFormFieldItem">
                    <input class="formfields " name='Email' type='email' required='required'>
                    </div>
            </div>
        </div>
                <div class="formRow" style="margin-bottom:20px">
                        <div class="gridFormLabel">
                <div class="gridFormLabelItem">
                    <label class="formtext">Full Name *:</label>
                </div>
            </div>
                    <div class="gridFormField">
                <div class="gridFormFieldItem">
                    <input class="formfields " name='FullName' required='required' type='text'>
                    </div>
            </div>
        </div>
                <div class="formRow" style="margin-bottom:20px">
                        <div class="gridFormLabel">
                <div class="gridFormLabelItem">
                    <label class="formtext">Telephone *:</label>
                </div>
            </div>
                    <div class="gridFormField">
                <div class="gridFormFieldItem">
                    <input class="formfields " name='Phone' required='required' type='text'>
                    </div>
            </div>
        </div>
                <div class="formRow" style="margin-bottom:20px">
                        <div class="gridFormLabel">
                <div class="gridFormLabelItem">
                    <label class="formtext">Message *:</label>
                </div>
            </div>
                    <div class="gridFormField">
                <div class="gridFormFieldItem">
                    <textarea class="formfields " name='Comments' type='textarea' required='required' style='height:100px;'></textarea>
                    </div>
            </div>
        </div>
                <div class="formRow" style="margin-bottom:20px">
                        <div class="gridFormLabel">
                <div class="gridFormLabelItem">
                    <label class="formtext">&nbsp;</label>
                </div>
            </div>
                    <div class="gridFormField">
                <div class="gridFormFieldItem">
        <label class='checkbox_label checkbox_Accept_label'><input type='checkbox' name='Accept[]' value='yes' > I consent the use of the information I hereby provide to you, according to your privacy policy which I have read and understood.</label>                </div>
            </div>
        </div>
                <div class="formRow" style="margin-bottom:20px">
                        <div class="gridFormLabel">
                <div class="gridFormLabelItem">
                    <label class="formtext">Security code *: <img src=../elements/form/17.jpg style='width:20px;height:20px;'><img src=../elements/form/27.jpg style='width:20px;height:20px;'><img src=../elements/form/28.jpg style='width:20px;height:20px;'><img src=../elements/form/59.jpg style='width:20px;height:20px;'><img src=../elements/form/34.jpg style='width:20px;height:20px;'></label>
                </div>
            </div>
                    <div class="gridFormField">
                <div class="gridFormFieldItem">
        <input type='text' name='user_text' autocomplete='off' required class='formfields'>                </div>
            </div>
        </div>
        <button type='submit' class='formsubmit'>Send</button><div class='formrequired'>(*required fields)</div></form></div>

<div class="sepDivCols" style="width:5%;">&nbsp;</div>
<div class="grid35to100">
<div class="center">
<div class="center" style="line-height:0;">
<a href="../index.html" class='logo'><img src='../uploads/images/Harisson_Luxury_Hotel_286_R6104_logo.png' width='auto' height='auto' title='Harisson Luxury Hotel' alt='Harisson Luxury Hotel'/></a></div>
<div style="padding-bottom:25px;"></div>
<div class="tableAuto" data-rec-id='328' data-field='Rec_Editor1'>
<div class="textEditor_328" data-rec-id='328' data-field='Rec_Text1'>Los Enamorados<br />103, Calle de Portinatx<br />07810 Formentera, Ibiza, Spain<br />Telephone +34 991 327 789<br /><a class="mail" href="mailto:info@sandydreamresort.com">info@sandydreamresort.com</a></div></div>
</div>
</div>
<div class="clear"></div>
</div>
</div><div style="padding-bottom:50px;"></div></div>

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
<div class="top5"><a href="../index.html" class="footerSitemap">HOME</a></div><div class="top5"><a href="../the-resort/index.html" class="footerSitemap">THE RESORT</a></div><div class="top5"><a href="../accommodation/index.html" class="footerSitemap">SUITES & VILLAS</a></div><div class="top5"><a href="../services/index.html" class="footerSitemap">SERVICES</a></div><div class="top5"><a href="../gastronomy/index.html" class="footerSitemap">GASTRONOMY</a></div><div class="top5"><a href="../breakfast/index.html" class="footerSitemap">BREAKFAST</a></div><div class="top5"><a href="../wellness/index.html" class="footerSitemap">WELLNESS  & SPA</a></div><div class="top5"><a href="../yoga/index.html" class="footerSitemap">YOGA</a></div><div class="top5"><a href="../activities/index.html" class="footerSitemap">ACTIVITIES</a></div><div class="top5"><a href="../explore/index.html" class="footerSitemap">EXPLORE</a></div><div class="top5"><a href="../location/index.html" class="footerSitemap">LOCATION</a></div><div class="top5"><a href="index.html" class="footerSitemap">CONTACT</a></div><div style="clear:both;"></div>
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


<!-- Mirrored from www.hotelwebsitetemplates.com/templates/DI_S627_K4/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 08:38:41 GMT -->
</html>
