<!DOCTYPE html>
<html>

	<head>
		<title>Catlinman - Gallery</title>
		<?php include $_SERVER['DOCUMENT_ROOT']. "/resources/head.php";?>
		<link rel="stylesheet" type="text/css" href="/colorbox.css">
		<script type="text/javascript" src="/jquery.colorbox.min.js"></script>
		<script>
			$(document).ready(function() {
				$(".colorbox").each(function(index) {
					$(this).colorbox({
						maxWidth: "75%",
						maxHeight: "75%"
					});
				});
				$(".colorbox-iframe").each(function(index) {
					$(this).colorbox({
						innerWidth: 853,
						innerHeight: 480,
						iframe: true
					});
				});
			});
		</script>
	</head>

	<body>
		<div id="wrapper">
			<?php include $_SERVER['DOCUMENT_ROOT']. "/resources/header.php";?>
			<div class="container loading centered">
				<h1 class="centered">Loading gallery</h1>
				<div class="spinner centered">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
			</div>
			<div class="layout" id="layout-gallery">
				<h1 class="container centered">Graphics Design</h1>
				<div class="imagedivider">
					<a class="colorbox imagecontainer fader" title="2014 Hivecom Logo" rel="gallery-artwork" href="http://i.imgur.com/YYqNeL6.jpg">
						<img src="/images/gallery/hivecom_logo_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Nitro Nova Logo" rel="gallery-artwork" href="http://i.imgur.com/rmtUX78.png">
						<img src="/images/gallery/nitronova_logo_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Feralfire" rel="gallery-artwork" href="http://i.imgur.com/eBCEbPN.jpg">
						<img src="/images/gallery/artwork_feralfire_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Hero Artwork" rel="gallery-artwork" href="http://i.imgur.com/Aqy5l1B.jpg">
						<img src="/images/gallery/artwork_hero_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Funrom Logo" rel="gallery-artwork" href="http://i.imgur.com/rNMIRTT.png">
						<img src="/images/gallery/funrom_logo_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Second Try Splash Screen" rel="gallery-artwork" href="http://i.imgur.com/dw4fOkI.jpg">
						<img src="/images/gallery/secondtry_splash_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Axis Defied Logo" rel="gallery-artwork" href="http://i.imgur.com/UmqfH4x.jpg">
						<img src="/images/gallery/axisdefied_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Name Is Not Name Logo" rel="gallery-artwork" href="http://i.imgur.com/61XNI5v.jpg">
						<img src="/images/gallery/nameisnotname_logo_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Mechapress Logo" rel="gallery-artwork" href="http://i.imgur.com/NgyDWu8.jpg">
						<img src="/images/gallery/mechapress_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Jan Dolanský Logo" rel="gallery-artwork" href="http://i.imgur.com/p364aIk.jpg">
						<img src="/images/gallery/jandolansky_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Neukünstler Logo" rel="gallery-artwork" href="http://i.imgur.com/kjzN1Qp.jpg">
						<img src="/images/gallery/neukuenstler_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Dream's End" rel="gallery-artwork" href="http://i.imgur.com/5E3lwBt.jpg">
						<img src="/images/gallery/dreamsend_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Beyond the Sky" rel="gallery-artwork" href="http://i.imgur.com/SnyvRPe.jpg">
						<img src="/images/gallery/bts_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Spilled Roses" rel="gallery-artwork" href="http://i.imgur.com/TpAT2Ni.jpg">
						<img src="/images/gallery/spilledroses_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Watcher" rel="gallery-artwork" href="http://i.imgur.com/DmAP69t.jpg">
						<img src="/images/gallery/watcher_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Stripes" rel="gallery-artwork" href="http://i.imgur.com/nAkMHyO.jpg">
						<img src="/images/gallery/stripes_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Locke Wallpaper Speed Art" rel="gallery-artwork" href="http://i.imgur.com/XncAPSW.jpg">
						<img src="/images/gallery/locke_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Greyjoy" rel="gallery-artwork" href="http://i.imgur.com/iWJL9tt.jpg">
						<img src="/images/gallery/greyjoy_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Orange Fortress Logo" rel="gallery-artwork" href="http://i.imgur.com/rmzggdK.jpg">
						<img src="/images/gallery/orangefortress_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Ectopic Pace-Makers" rel="gallery-artwork" href="http://i.imgur.com/HtCh5pW.jpg">
						<img src="/images/gallery/ecp_thumb.jpg">
					</a>
				</div>

				<h1 class="container centered">CG Work</h1>
				<div class="imagedivider">
                	<a class="colorbox imagecontainer fader" title="2015 Bleached Colors" rel="gallery-cg" href="http://i.imgur.com/jUcgO0A.jpg">
						<img src="/images/gallery/bleached_colors_thumb.jpg">
					</a>
                	<a class="colorbox imagecontainer fader" title="2015 Blender Render Tests II" rel="gallery-cg" href="http://i.imgur.com/VgVl60h.jpg">
						<img src="/images/gallery/blender_rendertests2_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2015 XaviNightshade Intro Animation" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/hr_1BQ_-Px0?rel=0">
						<img src="/images/gallery/xavinightshade_intro_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2014 Jar of Hearts" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/sByCBKFA1J8?rel=0">
						<img src="/images/gallery/jarofhearts_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Blender Render Tests I" rel="gallery-cg" href="http://i.imgur.com/Gh30vH9.jpg">
						<img src="/images/gallery/blender_rendertests1_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2014 Jan Dolanský Alternative Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/x2OkWcgV3m4?rel=0">
						<img src="/images/gallery/jandolansky_intro2014_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Interior Architecture Study" rel="gallery-cg" href="http://i.imgur.com/zZVk623.jpg">
						<img src="/images/gallery/interior_room_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Sportsball" rel="gallery-cg" href="http://i.imgur.com/n74ksft.png">
						<img src="/images/gallery/sportsball_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2014 Name Is Not Name - Apparently Magic" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/dBerT2BeSOc?rel=0">
						<img src="/images/gallery/nameisnotname_animation_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2014 Aconitin Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/lP0LhbvUom8?rel=0">
						<img src="/images/gallery/aconitin_intro_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 Gauss Rifle Render" rel="gallery-cg" href="http://i.imgur.com/oYJTUrq.jpg">
						<img src="/images/gallery/gaussrifle_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2014 Janeator Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/WmiNrwP5Q7o?rel=0">
						<img src="/images/gallery/janeator_intro_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2014 Audio Visualization Templates" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/KBYW4EwOaro?rel=0">
						<img src="/images/gallery/visualization_1_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2014 Mechapress Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/SCUUb9Dtvy8?rel=0">
						<img src="/images/gallery/mechapress_intro_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2014 Jan Dolanský Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/EdHInto5nK4?rel=0">
						<img src="/images/gallery/jandolansky_intro_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2014 Visual Snow Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/4UOfjA9bOns?rel=0">
						<img src="/images/gallery/visualsnow_intro_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Tau Render" rel="gallery-cg" href="http://i.imgur.com/yXPXZSi.png">
						<img src="/images/gallery/tau_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 IPT Intro" rel="gallery-cg" href="http://i.imgur.com/7itjJ9w.jpg">
						<img src="/images/gallery/ipt1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 IPT Intro" rel="gallery-cg" href="http://i.imgur.com/IQDXIR8.jpg">
						<img src="/images/gallery/ipt2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Blender Ivy Render" rel="gallery-cg" href="http://i.imgur.com/Lb3p6eO.jpg">
						<img src="/images/gallery/ivy_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="2013 Mace Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/eZi7DK_FMDQ?rel=0">
						<img src="/images/gallery/mace_intro_thumb.jpg">
					</a>
				</div>

				<h1 class="container centered">Game Projects</h1>
				<div class="imagedivider">
					<a class="colorbox imagecontainer fader" title="2014 In the Dark" rel="gallery-games" href="/images/projects/itd_scr1.jpg">
						<img src="/images/projects/itd_scr1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 In the Dark" rel="gallery-games" href="/images/projects/itd_scr2.jpg">
						<img src="/images/projects/itd_scr2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2014 In the Dark" rel="gallery-games" href="/images/projects/itd_scr3.jpg">
						<img src="/images/projects/itd_scr3_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Strikewatch" rel="gallery-games" href="/images/projects/sw_scr1.jpg">
						<img src="/images/projects/sw_scr1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Strikewatch" rel="gallery-games" href="/images/projects/sw_scr2.jpg">
						<img src="/images/projects/sw_scr2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Strikewatch" rel="gallery-games" href="/images/projects/sw_scr3.jpg">
						<img src="/images/projects/sw_scr3_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Colorblind" rel="gallery-games" href="/images/projects/cb_scr1.jpg">
						<img src="/images/projects/cb_scr1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Colorblind" rel="gallery-games" href="/images/projects/cb_scr2.jpg">
						<img src="/images/projects/cb_scr2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2013 Colorblind" rel="gallery-games" href="/images/projects/cb_scr3.jpg">
						<img src="/images/projects/cb_scr3_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2012 Haze" rel="gallery-games" href="http://i.imgur.com/0kRrsgK.jpg">
						<img src="/images/gallery/haze_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2012 Tunnel" rel="gallery-games" href="http://i.imgur.com/AiggL.jpg">
						<img src="/images/gallery/tunnel1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="2012 Tunnel" rel="gallery-games" href="http://i.imgur.com/xs2p9.png">
						<img src="/images/gallery/tunnel2_thumb.jpg">
					</a>
				</div>
				<div class="container centered">
					<h1 class="centered">Photography</h1>
					<div class="content">
						<h3 class="centered" style="font-size:14px;">For a full listing please visit my <a href="https://www.flickr.com/photos/catlinman/" target="_blank">Flickr profile<a></h3>
					</div>
				</div>
				<div class="imagedivider">
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/5558/15156526651_ad3560edb2_k_d.jpg">
						<img src="/images/gallery/photography_1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/5561/14972570000_c6fe5d3336_k_d.jpg">
						<img src="/images/gallery/photography_2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/3883/14972992108_363a79f2c6_k_d.jpg">
						<img src="/images/gallery/photography_3_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/7506/16146744769_b2f857e5ee_k_d.jpg">
						<img src="/images/gallery/photography_4_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/3859/15084675641_bcc4a0d363_k_d.jpg">
						<img src="/images/gallery/photography_5_thumb.jpg">
					</a>
				</div>
			</div>
			<?php include $_SERVER['DOCUMENT_ROOT']. "/resources/footer.php";?>
		</div>
	</body>

</html>
