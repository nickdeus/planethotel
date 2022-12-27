<div id="container">
<div id="mainContainer"><div id="LayerRow1">

<div style="display:block; width:100%; margin:auto;">
<div class="gridLogo">
<div class="logoPadding">
<div class="center" style="line-height:0;">
<a href="../index.html" class='logo'><img src='../uploads/images/Harisson_Luxury_Hotel_286_R6104_logo.png' width='auto' height='auto' title='Harisson Luxury Hotel' alt='Harisson Luxury Hotel'/></a></div></div>
</div>
<div class="gridMenu">
<div class="right">

<div class="langWrapper center">
<a href="../index.html" class='langSel' alt='ENGLISH'> EN</a> / <a href="../el/index.html" class='lang' alt='Ελληνικά'> EL</a></div>
</div>
<div class="right25 top10" >
<div style="width:100%;">
    <div style="float:right;">
        <div class="left"></div>
        <div class="left15"> | </div><div class="left15"><a href="../contact/index.html" class="toplinks">CONTACT</a></div>
        <div style="clear:both;"></div>    </div>
    <div style="clear:both;"></div>
</div>
</div>
<div class="grid100 nav">
<div class="">
<nav id="nav" role="navigation">
<a href="#" onclick="return false;" title="Show navigation" class="menu_icon toggle-button">
<span></span>
<span></span>
<span></span>
<span></span>
</a>
<ul class="clearfix menu_ul topmenu" id='toggle_menu'><li><a href="../the-resort/index.html" class="rootMenu" ><span class='rootMenuSpan'>THE RESORT</span></a></li>
<li><a href="../accommodation/index.php" class="rootMenu" ><span class='rootMenuSpan'>HOTEL ROOMS</span></a></li>
<li><a href="../services/index.php" class="rootMenu" ><span class='rootMenuSpan'>SERVICES</span></a></li>
<li><a href="index.html" class="rootMenuSel rootMenu" ><span class='rootMenuSpan'>GASTRONOMY</span></a></li>
<li><a href="../breakfast/index.php" class="rootMenu" ><span class='rootMenuSpan'>BREAKFAST</span></a></li>
<li><a href="../wellness/index.php" class="rootMenu" ><span class='rootMenuSpan'>WELLNESS  & SPA</span></a></li>
<li><a href="../activities/index.php" class="rootMenu" ><span class='rootMenuSpan'>ACTIVITIES</span></a></li>
<li><a href="../location/index.php" class="rootMenu" ><span class='rootMenuSpan'>LOCATION</span></a></li></ul></nav>
</div>
<script>
    $(document).ready(function () {
        $("#nav .menu_icon").click(function (e) {//click menu button
            e.preventDefault();
            if ($("#nav").hasClass("open")) {
                $("#nav>ul").slideUp();
            } else {
                $("#nav>ul").slideDown();
            }
            $("#nav").toggleClass("open");
            $(this).toggleClass("open");
        });
                //submenu slide
        $("#nav li:has(ul)").hover(function () {
            $(this).children("ul").slideDown(300);
        }, function () {
            $(this).children("ul").stop().slideUp(300);
        });
                $("#nav ul ul li").on('click', function (event) {
            event.stopPropagation();
        });
        $("#nav>ul>li:has(ul)").on('click', function () {
            $("#nav li ul").not($(this).children("ul")).stop().slideUp(300); //close other opened submenu
            if ($(this).children("ul").css("display") == "block")
                $(this).children("ul").stop().slideUp(300);
            else
                $(this).children("ul").stop().slideDown(300);
        });
    });
</script>


</div>
</div>
<div class="gridBook">
<div class="nav2">
<a href="#" class="bookNow" target="_blank" rel="noopener">BOOK NOW</a>
</div>
</div>