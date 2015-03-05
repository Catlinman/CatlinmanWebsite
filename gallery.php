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
					<a class="colorbox imagecontainer fader" title="Nitro Nova Logo" rel="gallery-artwork" href="http://i.imgur.com/rmtUX78.png"><img src="/images/gallery/nitronova_logo_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Feralfire" rel="gallery-artwork" href="http://i.imgur.com/eBCEbPN.jpg"><img src="/images/gallery/artwork_feralfire_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Hero Artwork" rel="gallery-artwork" href="http://i.imgur.com/Aqy5l1B.jpg"><img src="/images/gallery/artwork_hero_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Funrom Logo" rel="gallery-artwork" href="http://i.imgur.com/rNMIRTT.png"><img src="/images/gallery/funrom_logo_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Traditional Records Logo" rel="gallery-artwork" href="http://i.imgur.com/zTtnhIq.jpg"><img src="/images/gallery/traditionalrecords_logo_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Second Try Splash Screen" rel="gallery-artwork" href="http://i.imgur.com/8rzozgR.jpg"><img src="/images/gallery/secondtry_splash_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Axis Defied Logo" rel="gallery-artwork" href="http://i.imgur.com/JxpJkBu.jpg"><img src="/images/gallery/axisdefied_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Name Is Not Name Logo" rel="gallery-artwork" href="http://i.imgur.com/61XNI5v.jpg"><img src="/images/gallery/nameisnotname_logo_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Mechapress Logo" rel="gallery-artwork" href="http://i.imgur.com/QxK3AJ0.png"><img src="/images/gallery/mechapress_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Jan Dolanský Logo" rel="gallery-artwork" href="http://i.imgur.com/GuGuoY7.png"><img src="/images/gallery/jandolansky_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Neukünstler Logo" rel="gallery-artwork" href="http://i.imgur.com/uKWR8k7.jpg"><img src="/images/gallery/neukuenstler_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Dream's End" rel="gallery-artwork" href="http://i.imgur.com/5E3lwBt.jpg"><img src="/images/gallery/dreamsend_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Beyond the Sky" rel="gallery-artwork" href="//www.youtube-nocookie.com/embed/JiEbhBEHWQE?rel=0"><img src="/images/gallery/bts_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Spilled Roses" rel="gallery-artwork" href="http://i.imgur.com/S9jpJ.jpg"><img src="/images/gallery/spilledroses_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Watcher" rel="gallery-artwork" href="http://i.imgur.com/9JRuaO6.jpg"><img src="/images/gallery/watcher_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Stripes" rel="gallery-artwork" href="http://i.imgur.com/nAkMHyO.jpg"><img src="/images/gallery/stripes_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Locke Wallpaper Speed Art" rel="gallery-artwork" href="//www.youtube-nocookie.com/embed/NrW-hFM4HCU?rel=0"><img src="/images/gallery/locke_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Spirit" rel="gallery-artwork" href="http://i.imgur.com/WLbT42m.jpg"><img src="/images/gallery/spirit_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Fury" rel="gallery-artwork" href="http://i.imgur.com/TLzmc.jpg"><img src="/images/gallery/mace_fury_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Greyjoy" rel="gallery-artwork" href="http://i.imgur.com/iWJL9tt.jpg"><img src="/images/gallery/greyjoy_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Orange Fortress Logo" rel="gallery-artwork" href="http://i.imgur.com/4y9Mytc.jpg"><img src="/images/gallery/orangefortress_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Ectopic Pace-Makers" rel="gallery-artwork" href="http://i.imgur.com/baIED5U.jpg"><img src="/images/gallery/ecp_thumb.jpg">
					</a>
				</div>

				<h1 class="container centered">CG Work</h1>
				<div class="imagedivider">
					<a class="colorbox-iframe imagecontainer fader" title="XaviNightshade Intro Animation" rel="gallery-artwork" href="//www.youtube-nocookie.com/embed/hr_1BQ_-Px0?rel=0"><img src="/images/gallery/xavinightshade_intro_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Jar of Hearts" rel="gallery-artwork" href="//www.youtube-nocookie.com/embed/sByCBKFA1J8?rel=0"><img src="/images/gallery/jarofhearts_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Blender Render Tests I" rel="gallery-cg" href="http://i.imgur.com/Gh30vH9.jpg"><img src="/images/gallery/blender_rendertests1_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Jan Dolanský Alternative Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/x2OkWcgV3m4?rel=0"><img src="/images/gallery/jandolansky_intro2014_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Interior Architecture Study" rel="gallery-cg" href="http://i.imgur.com/GbYDyXp.jpg"><img src="/images/gallery/interior_room_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Sportsball" rel="gallery-cg" href="http://i.imgur.com/n74ksft.png"><img src="/images/gallery/sportsball_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Name Is Not Name - Apparently Magic" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/dBerT2BeSOc?rel=0"><img src="/images/gallery/nameisnotname_animation_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Aconitin Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/lP0LhbvUom8?rel=0"><img src="/images/gallery/aconitin_intro_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Gauss Rifle Render" rel="gallery-cg" href="http://i.imgur.com/oYJTUrq.jpg"><img src="/images/gallery/gaussrifle_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Janeator Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/WmiNrwP5Q7o?rel=0"><img src="/images/gallery/janeator_intro_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Audio Visualization Templates" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/KBYW4EwOaro?rel=0"><img src="/images/gallery/visualization_1_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Mechapress Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/SCUUb9Dtvy8?rel=0"><img src="/images/gallery/mechapress_intro_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Jan Dolanský Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/EdHInto5nK4?rel=0"><img src="/images/gallery/jandolansky_intro_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Visual Snow Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/4UOfjA9bOns?rel=0"><img src="/images/gallery/visualsnow_intro_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Tau Render" rel="gallery-cg" href="http://i.imgur.com/yXPXZSi.png"><img src="/images/gallery/tau_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="IPT Intro" rel="gallery-cg" href="http://i.imgur.com/7itjJ9w.jpg"><img src="/images/gallery/ipt1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="IPT Intro" rel="gallery-cg" href="http://i.imgur.com/IQDXIR8.jpg"><img src="/images/gallery/ipt2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Blender Ivy Render" rel="gallery-cg" href="http://i.imgur.com/Lb3p6eO.jpg"><img src="/images/gallery/ivy_thumb.jpg">
					</a>
					<a class="colorbox-iframe imagecontainer fader" title="Mace Intro" rel="gallery-cg" href="//www.youtube-nocookie.com/embed/eZi7DK_FMDQ?rel=0"><img src="/images/gallery/mace_intro_thumb.jpg">
					</a>
				</div>

				<h1 class="container centered">Game Projects</h1>
				<div class="imagedivider">
					<a class="colorbox imagecontainer fader" title="In the Dark" rel="gallery-games" href="/images/projects/itd_scr1.jpg"><img src="/images/projects/itd_scr1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="In the Dark" rel="gallery-games" href="/images/projects/itd_scr2.jpg"><img src="/images/projects/itd_scr2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="In the Dark" rel="gallery-games" href="/images/projects/itd_scr3.jpg"><img src="/images/projects/itd_scr3_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Strikewatch" rel="gallery-games" href="/images/projects/sw_scr1.jpg"><img src="/images/projects/sw_scr1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Strikewatch" rel="gallery-games" href="/images/projects/sw_scr2.jpg"><img src="/images/projects/sw_scr2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Strikewatch" rel="gallery-games" href="/images/projects/sw_scr3.jpg"><img src="/images/projects/sw_scr3_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Colorblind" rel="gallery-games" href="/images/projects/cb_scr1.jpg"><img src="/images/projects/cb_scr1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Colorblind" rel="gallery-games" href="/images/projects/cb_scr2.jpg"><img src="/images/projects/cb_scr2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Colorblind" rel="gallery-games" href="/images/projects/cb_scr3.jpg"><img src="/images/projects/cb_scr3_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Haze" rel="gallery-games" href="http://i.imgur.com/0kRrsgK.jpg"><img src="/images/gallery/haze_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Tunnel" rel="gallery-games" href="http://i.imgur.com/AiggL.jpg"><img src="/images/gallery/tunnel1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" title="Tunnel" rel="gallery-games" href="http://i.imgur.com/xs2p9.png"><img src="/images/gallery/tunnel2_thumb.jpg">
					</a>
				</div>
				<div class="container centered">
					<h1 class="centered">Photography</h1>
					<div class="content">
						<h3 class="centered" style="font-size:14px;">For a full listing please visit my <a href="https://www.flickr.com/photos/catlinman/" target="_blank">Flickr profile<a></h3>
					</div>
				</div>
				<div class="imagedivider">
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/5558/15156526651_ad3560edb2_k_d.jpg"><img src="/images/gallery/photography_1_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/5561/14972570000_c6fe5d3336_k_d.jpg"><img src="/images/gallery/photography_2_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/3883/14972992108_363a79f2c6_k_d.jpg"><img src="/images/gallery/photography_3_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/7506/16146744769_b2f857e5ee_k_d.jpg"><img src="/images/gallery/photography_4_thumb.jpg">
					</a>
					<a class="colorbox imagecontainer fader" rel="gallery-photography" href="https://farm6.staticflickr.com/3859/15084675641_bcc4a0d363_k_d.jpg"><img src="/images/gallery/photography_5_thumb.jpg">
					</a>
				</div>
			</div>
			<?php include $_SERVER['DOCUMENT_ROOT']. "/resources/footer.php";?>
		</div>
	</body>

</html>
