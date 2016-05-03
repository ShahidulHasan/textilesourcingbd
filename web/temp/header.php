  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class=" js no-touch" lang="en">
	<head>
            <meta name="viewport" content="initial-scale=1.0, user-scalable=no"></meta>
            <meta charset="utf-8"></meta>
            <title>Textile Sourcing Bd</title>
            <link rel="stylesheet" href="css/style.css" type="text/css" />
            <link href="css/menu.css" rel="stylesheet">
            <link rel="stylesheet" href="css/coin-slider-styles.css" type="text/css" />
            <link rel="stylesheet" type="text/css" href="css/jGlideMenuNotAbsolute.css"/>
            <script src="js/jquery.js"></script>
            <script src="js/custom.js"></script>        
            <script type="text/javascript" src="js/jquery-ui.js"></script>
            <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
            <script type="text/javascript" src="js/jquery.1.3.2.min.js"></script> 
            <script type="text/javascript" src="js/jQuery.jGlideMenu.067.js"></script>       
            <script type="text/javascript" src="js/coin-slider.js"></script>   
<!--        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
-->
	<script src="js/script.js"></script>

    </head>
<body>
	<!-- start header -->
	<header>	
		<div class="container">
				<div class="navbar navbar-static-top">
					<div class="navigation">
						<nav>
						<ul class="nav topnav bold">
                                                        <li class="dropdown">
							<a href="home" style="border-left:1px #700000 solid ;">HOME</a>
							<ul style="display: none;" class="dropdown-menu bold"></ul>
							</li>
							<li class="dropdown">
							<a href="#">ABOUT US </a>
							<ul style="display: none;" class="dropdown-menu bold">
								<li><a href="company_profile">COMPANY PROFILE</a></li>
                                                                <li><a href="our_profile">OUR PROFILE</a></li>
								<li><a href="vision_mission">VISION & MISSION</a></li>
								<li><a href="board_of_directors">BOARD OF DIRECTORS</a></li>
							</ul>
							</li>
							<li class="dropdown">
							<a href="#">OUR PRODUCTS</a>
							<ul class="dropdown-menu bold">
								<li><a href="man_items">MAN- ITEMS</a></li>
								<li><a href="woman_items">WOMEN- ITEMS</a></li>
								<li><a href="boys_items">BOYS- ITEMS</a></li>
								<li><a href="girls_items">GIRLS- ITEMS</a></li>
                                                                <li><a href="baby_items">BABY- ITEMS</a></li>
							</ul>
							</li>
                                                    
							<li class="dropdown">
							<a href="#">USEFUL LINKS</a>
							<ul class="dropdown-menu bold">
								<li><a href="about_bangladesh">ABOUT BANGLADESH</a></li>
								<li><a href="time_zone">TIME ZONE</a></li>
								<li><a href="currency">CURRENCY</a></li>
								<li><a href="visa_info">VISA INFO</a></li>
                                                                <li><a href="season">SEASON</a></li>
                                                                <li><a href="hotels">HOTELS</a></li>
							</ul>
							</li>
                                                    
							<li class="dropdown">
							<a href="#">FACTORY LAYOUT</a>
							<ul style="display: none;" class="dropdown-menu bold">
								<li><a href="our_clients">OUR CLIENTS</a></li>
							</ul>
							</li>
							<li class="dropdown">
							<a href="webmail">WEBMAIL</a>
								<ul style="display: none;" class="dropdown-menu bold"></ul>
							</li>
							
							<li class="dropdown">
							
							
							<a href="contact_us">CONTACT US</a>
							<ul style="display: none;" class="dropdown-menu bold"></ul>
						</li>
						</nav>
					</div>
					<!-- end navigation -->
				</div>
			</div>
	</header>
        <div class="logoH">
            <div style="margin-left:0px;margin-top: 8px;">
                <img src="../images/logoup.png" height="40" width="40"/>
                <img src="../images/logo.png"/>
            </div>
        </div>        
        <div class="imageS" style="border:1px lightgrey solid;margin-bottom: 10px;">
            <div id='coin-slider'>
                        <img src='images/art/img01.jpg' />
			<img src='images/art/img02.jpg' />
			<img src='images/art/img03.jpg' />
		</div>
        </div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#coin-slider').coinslider({width: 935,height: 340, navigation: false, delay: 3000 });
                
                // Initialize Menu
                $('#jGlide_001').jGlideMenu({

                        tileSource      : '.jGlide_001_tiles' , 
                        demoMode        : true 
                }).show();

        
    var config = {
        siteURL		: 'tutorialzine.com',	// Change this to your site
        searchSite	: true,
        type		: 'web',
        append		: false,
        perPage		: 8,			// A maximum of 8 is allowed by Google
        page		: 0				// The start page
    }

    // The small arrow that marks the active search icon:
    var arrow = $('<span>',{className:'arrow'}).appendTo('ul.icons');

    $('ul.icons li').click(function(){
        var el = $(this);

        if(el.hasClass('active')){
            // The icon is already active, exit
            return false;
        }

        el.siblings().removeClass('active');
        el.addClass('active');

        // Move the arrow below this icon
        arrow.stop().animate({
            left		: el.position().left,
            marginLeft	: (el.width()/2)-4
        });

        // Set the search type
        config.type = el.attr('data-searchType');
        $('#more').fadeOut();
    });

    // Adding the site domain as a label for the first radio button:
    $('#siteNameLabel').append(' '+config.siteURL);

    // Marking the Search tutorialzine.com radio as active:
    $('#searchSite').click();	

    // Marking the web search icon as active:
    $('li.web').click();

    // Focusing the input text box:
    $('#s').focus();

    $('#searchForm').submit(function(){
        googleSearch();
        return false;
    });

    $('#searchSite,#searchWeb').change(function(){
        // Listening for a click on one of the radio buttons.
        // config.searchSite is either true or false.

        config.searchSite = this.id == 'searchSite';
    });
    
});
</script>
