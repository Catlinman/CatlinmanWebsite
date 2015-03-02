<!DOCTYPE html>
<html>

	<head>
		<title>Catlinman - Projects</title>
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
			<script type="text/javascript">
				$(window).load(function() {
					$(".foldout").each(function(index) {
						$(this).children().children().children("iframe").attr("url", $(this).children().children().children("iframe").attr("src"));
					});
					$(".foldout").css({
						"display": "none",
						"opacity": "0"
					});
					$(".project").hover(function() {
						$(this).stop().animate({
							"margin-top": "8px",
							"margin-bottom": "24px",
							"opacity": "1"
						});
					}, function() {
						$(this).stop().animate({
							"margin-top": "16px",
							"margin-bottom": "16px",
							"opacity": "1"
						});
					});
					$(".project").click(function() {
						if ($(this).attr("active") == "true") {
							$(".project").each(function(index) {
								$(this).attr({
									active: "false"
								});
								$(this).find(".project-thumbnail").animate({
									"opacity": "1"
								});
							});
							$(".foldout").each(function(index) {
								$(this).animate({
									"opacity": "0"
								}, {
									duration: 250
								})
								$(this).slideUp(400);
								$(this).children().children().children("iframe").attr("src", "");
							});
						} else {
							var cname = $(this).attr("name");
							$(".project,.foldout").each(function(index) {
								if ($(this).attr("class") == "container project") {
									if ($(this).attr("name") != cname) {
										$(this).find(".project-thumbnail").stop().animate({
											"opacity": "0.3"
										}, {
											duration: 250
										});
										$(this).attr({
											active: "false"
										});
									} else {
										$(this).find(".project-thumbnail").stop().animate({
											"opacity": "1.0"
										}, {
											duration: 250
										});
										$(this).attr({
											active: "true"
										});
									}
								} else if ($(this).attr("class") == "foldout") {
									if ($(this).attr("name") != cname) {
										$(this).stop().animate({
											"opacity": "0"
										}, {
											duration: 250
										})
										$(this).slideUp(400);
										$(this).children().children().children("iframe").attr("src", "");
									} else {
										$(this).delay(240).slideDown(400);
										$(this).animate({
											"opacity": "1"
										}, {
											duration: 250
										})
										$(this).children().children().children("iframe").attr("src", $(this).children().children().children("iframe").attr("url"));
									}
								}
							});
						}
					});
				});
			</script>
			<div class="container loading centered">
				<h1 class="centered">Loading projects</h1>
				<div class="spinner centered">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
			</div>
			<div class="layout" id="layout-projects">
				<div name="meganeko" class="container project">
					<div class="project-content">
						<div class="project-background"></div>
						<img class="project-thumbnail" src="/images/projects/meganeko_thumb.jpg">
					</div>
				</div>
				<div name="voidproject" class="container project">
					<div class="project-content">
						<div class="project-background"></div>
						<img class="project-thumbnail" src="/images/projects/void_thumb.jpg">
					</div>
				</div>
				<div name="traditionalrecords" class="container project">
					<div class="project-content">
						<div class="project-background"></div>
						<img class="project-thumbnail" src="/images/projects/tr_thumb.jpg">
					</div>
				</div>
				<div name="meganeko" class="foldout">
					<div class="container">
						<div class="content">
							<h1 class="centered">Meganeko - boy irl girl url - Visualizations</h1>
							<iframe width="853" height="480" src="//www.youtube-nocookie.com/embed/vbQvkpq83l8?rel=0" frameborder="0" allowfullscreen></iframe>
							<p class="justified">
								In March of 2015 I teamed up with the electronic music artist <a href="https://twitter.com/robothuggles">Meganeko</a> to provide him with the visualizations
								for his album release of "boy irl girl url". The visuals were done in Adobe After Effects CS6. My main job was to come up with some simple and slick visuals
								for each of the tracks in the album. The outcome speaks for itself and can be seen above.
							</p>
							<br>
							<br>
							<h1 class="centered">
								<a href="http://meganeko.bandcamp.com/album/boy-irl-girl-url">Buy the album on Bandcamp</a>
							</h1>
							<br>
							<br>
							<h2 class="centered"><a href="https://twitter.com/robothuggles" target="_blank">Meganeko on Twitter</a></h2>
							<h2 class="centered"><a href="https://www.facebook.com/robothuggles" target="_blank">Meganeko's Facebook page</a></h2>
							<h2 class="centered"><a href="https://www.youtube.com/user/robothuggles" target="_blank">Meganeko on Youtube</a></h2>
							<br>
						</div>
					</div>
				</div>
				<div name="voidproject" class="foldout">
					<div class="container">
						<div class="content">
							<h1 class="centered">The Void Game Project</h1>
							<p class="justified">
								The Void game project is a collaborative game being created by myself and others willing to join in on the effort. The main goal of the project was to at first help out less experience game developers and programmers in general to help with something
								and learn as they went along. I manage the layout of the project and coordinate which features are added to the final game. The entire project is still in development even though progress is not steady due to the fact that
								it is done completely on the side of other more major tasks. Void is open-source and can be downloaded over GitHub. The binaries will be released once a playable version is available. Until then those interested will have to
								launch the project using their own binaries based on the LÖVE2D game framework.
							</p>
							<br>
							<h2 class="centered"><a href="https://github.com/Catlinman/Void" target="_blank">The Void project on GitHub</a></h2>
							<br>
						</div>
					</div>
				</div>
				<div name="traditionalrecords" class="foldout">
					<div class="container">
						<div class="content">
							<h1 class="centered">Traditional Records Music Label</h1>
							<iframe width="853" height="480" src="//www.youtube-nocookie.com/embed/OBkkvGsdOm8?rel=0" frameborder="0" allowfullscreen></iframe>
							<p class="justified">
								Over the third quarter of 2014 I co-created a music label known as Traditional Records. The group currently consists of five main artists and is willing to highlight and feature new and upcoming artists willing to go the extra mile for their work. Traditional
								Records specializes in electronic music in form of electro house, drum and base, ambiance and other more abstract genres. The main artists within the label are
								<a href="https://twitter.com/Op3ratorRecords" target="_blank">Op3rator</a>,
								<a href="https://twitter.com/AxisDefied" target="_blank">Axis Defied</a>,
								<a href="https://twitter.com/8BitMaster_" target="_blank">8Bit!</a>,
								<a href="https://twitter.com/nameisnotname" target="_blank">Name Is Not Name</a> and
								<a href="https://twitter.com/isogash" target="_blank">Funrom</a>. My main role in the group is to manage the social accounts including Twitter and the YouTube channel as well as to create the music visualizations that are uploaded
								to the official YouTube channel.
							</p>
							<br>
							<h2 class="centered"><a href="https://www.youtube.com/YTTraditionalRecords" target="_blank">Traditional Records' official YouTube Channel</a></h2>
							<h2 class="centered"><a href="https://twitter.com/TRDRecords" target="_blank">Traditional Records on Twitter</a></h2>
							<h2 class="centered"><a href="https://soundcloud.com/groups/traditional-records" target="_blank">Traditional Records' SoundCloud fan group</a></h2>
							<br>
							<p class="centered"><b>Videos</b>
							</p>
							<div class="centered">
								<a class="colorbox-iframe project-imagecontainer fader" rel="traditionalrecords" href="//www.youtube-nocookie.com/embed/RrtMdDcj5i4?rel=0"><img class="project-imagethumnnail" src="/images/projects/tr_axisdefied_thumb.jpg">
								</a>
								<a class="colorbox-iframe project-imagecontainer fader" rel="traditionalrecords" href="//www.youtube-nocookie.com/embed/Qh6NTNAz2Ps?rel=0"><img class="project-imagethumnnail" src="/images/projects/tr_operator_thumb.jpg">
								</a>
								<a class="colorbox-iframe project-imagecontainer fader" rel="traditionalrecords" href="//www.youtube-nocookie.com/embed/VNDdjcllW2k?rel=0"><img class="project-imagethumnnail" src="/images/projects/tr_8bit_thumb.jpg">
								</a>
							</div>
							<br>
							<div class="centered">
								<a class="colorbox-iframe project-imagecontainer fader" rel="traditionalrecords" href="//www.youtube-nocookie.com/embed/0zyoHkv5WcE?rel=0"><img class="project-imagethumnnail" src="/images/projects/tr_nameisnotname_thumb.jpg">
								</a>
								<a class="colorbox-iframe project-imagecontainer fader" rel="traditionalrecords" href="//www.youtube-nocookie.com/embed/_4qEF-LIJ0c?rel=0"><img class="project-imagethumnnail" src="/images/projects/tr_funrom_thumb.jpg">
								</a>
								<a class="colorbox-iframe project-imagecontainer fader" rel="traditionalrecords" href="//www.youtube-nocookie.com/embed/boJ84QbhHf0?rel=0"><img class="project-imagethumnnail" src="/images/projects/tr_nitronova_thumb.jpg">
								</a>
							</div>
							<br>
						</div>
					</div>
				</div>
				<div name="visualsnow" class="container project">
					<div class="project-content">
						<div class="project-background"></div>
						<img class="project-thumbnail" src="/images/projects/visualsnow_thumb.jpg">
					</div>
				</div>
				<div name="inthedark" class="container project">
					<div class="project-content">
						<div class="project-background"></div>
						<img class="project-thumbnail" src="/images/projects/itd_thumb.jpg">
					</div>
				</div>
				<div name="thewilltofight" class="container project">
					<div class="project-content">
						<div class="project-background"></div>
						<img class="project-thumbnail" src="/images/projects/aot_thumb.jpg">
					</div>
				</div>
				<div name="visualsnow" class="foldout">
					<div class="container">
						<div class="content">
							<h1 class="centered">Visual Snow</h1>
							<iframe width="853" height="480" src="//www.youtube-nocookie.com/embed/Hqpp0sj8Si0?rel=0" frameborder="0" allowfullscreen></iframe>
							<p class="justified">
								During the start of 2014 I assumed the role of creating a logo for the German band Visual Snow. After seeing what I had done for them they asked me if I could also possibly create an animated opening for their music recording videos that go with each
								of their songs. Since then I have also taken over some of the editing work for their videos, matching up the video recordings to the music of the commercial song, creating the illusion that they are playing the song live within
								their videos.
							</p>
							<br>
							<h2 class="centered"><a href="https://www.facebook.com/visualsnowofficial" target="_blank">Visual Snow's Facebook page</a></h2>
							<h2 class="centered"><a href="https://www.youtube.com/channel/UCumoAhspfWyzsO2QWbZgM5Q" target="_blank">Visual Snow on Youtube</a></h2>
							<br>
							</p>
							<div class="centered">
								<a class="colorbox project-imagecontainer fader" rel="visualsnow" href="http://i.imgur.com/u5Uucwi.jpg"><img class="project-imagethumnnail" src="/images/projects/vslogo_thumb.jpg">
								</a>
								<a class="colorbox project-imagecontainer fader" rel="visualsnow" href="http://i.imgur.com/2BMdN58.jpg"><img class="project-imagethumnnail" src="/images/projects/vslogo_burst_thumb.jpg">
								</a>
								<a class="colorbox project-imagecontainer fader" rel="visualsnow" href="http://i.imgur.com/6OGqNQG.jpg"><img class="project-imagethumnnail" src="/images/projects/vslogo_poster_thumb.jpg">
								</a>
							</div>
							<br>
						</div>
					</div>
				</div>
				<div name="inthedark" class="foldout">
					<div class="container">
						<div class="content">
							<h1 class="centered">In the Dark</h1>
							<iframe width="853" height="480" src="//www.youtube-nocookie.com/embed/wISIqEDVIeg" frameborder="0" allowfullscreen></iframe>
							<p class="justified">
								In the Dark is a WebGL based game made for the Ludum Dare 29 competition and is based on the theme of 'beneath the surface'. The gameplay mainly revolves around the principle of the player descending through the ground every few moments moving from one
								randomly generated level to another. While passing through the ground's layers and levels the player has to fight the evil that resides beneath. The player's only help is a strange glowing light that helps him see through the
								mist.
							</p>
							<br>
							<p>
								In the Dark was written in Javascript and uses the <a href="http://threejs.org/" target="_blank">Three.js</a> library
							</p>
							<br>
							<h2 class="centered"><a href="/games/ld29.php" target="_blank">Play In the Dark in your browser</a></h2>
							<br>
							<p class="centered"><b>Screenshots</b>
							</p>
							<div class="centered">
								<a class="colorbox project-imagecontainer fader" rel="inthedark" href="/images/projects/itd_scr1.jpg"><img class="project-imagethumnnail" src="/images/projects/itd_scr1_thumb.jpg">
								</a>
								<a class="colorbox project-imagecontainer fader" rel="inthedark" href="/images/projects/itd_scr2.jpg"><img class="project-imagethumnnail" src="/images/projects/itd_scr2_thumb.jpg">
								</a>
								<a class="colorbox project-imagecontainer fader" rel="inthedark" href="/images/projects/itd_scr3.jpg"><img class="project-imagethumnnail" src="/images/projects/itd_scr3_thumb.jpg">
								</a>
							</div>
							<br>
						</div>
					</div>
				</div>
				<div name="thewilltofight" class="foldout">
					<div class="container">
						<div class="content">
							<h1 class="centered">Attack on Titan tribute fangame</h1>
							<h2 class="centered">Currently on hold</h2>
							<p class="justified">
								"Attack on Titan: The Will to Fight" is a 3rd person action role playing game based around the events of the anime of the same name. The game explores the series' storyline by letting the player take control of the protagonists and characters of the show.
								The player has a certain degree of freedom when it comes to what he can do but since the storyline and the sequence of events is already layed out, everything the player does still works hand in hand with what the show presents.
								The game itself is based on an open world system allowing the player to explore the world inside of the anime from a new perspective. This includes dynamic free flowing combat ranging from gliding through the air using the
								3D-Gear over to racing through the country on horseback or even defending from an onslaught of enemies using canons and racing through the cities of the show. All this comes together inside of a game that uses the strengths
								and ideas of the show to deliver a fun yet challenging experience while still staying true to the lore of the main storyline.
							</p>
							<br>
							<p class="centered">
								<b>
								The project is on hold due to other projects having a higher priority and a bunch of other stuff. You can read more on that at the bottom of this
								<a href="http://catlinmans.tumblr.com/post/81813442962">Tumblr post</a>.
								</b>
							</p>
						</div>
					</div>
				</div>
				<div name="strikewatch" class="container project">
					<div class="project-content">
						<div class="project-background"></div>
						<img class="project-thumbnail" src="/images/projects/sw_thumb.jpg">
					</div>
				</div>
				<div name="iptintro" class="container project">
					<div class="project-content">
						<div class="project-background"></div>
						<img class="project-thumbnail" src="/images/projects/ipt_thumb.jpg">
					</div>
				</div>
				<div name="colorblind" class="container project">
					<div class="project-content">
						<div class="project-background"></div>
						<img class="project-thumbnail" src="/images/projects/cb_thumb.jpg">
					</div>
				</div>
				<div name="strikewatch" class="foldout">
					<div class="container">
						<div class="content">
							<h1 class="centered">Strikewatch</h1>
							<iframe width="853" height="480" src="//www.youtube-nocookie.com/embed/nRp-l3LyS5A?rel=0" frameborder="0" allowfullscreen></iframe>
							<p>
								Strikewatch is a top down minimalistic shooter with survival based game play. The game focuses around a timer which will steadily decrease whenever the player is not in a so called zone. If the timer reaches zero, the player is met with their fate. On
								top of that, the player has to fight their way through the ever increasing waves of enemies while always keeping track of their time and ammunition.
							</p>
							<p>
								Strikewatch was originally created for the Ludum Dare 27 game jam under the working title of Timebullet. Since then it has come a long way but it still plays the same as the original game but with a huge set of improvements and additions.
							</p>
							<p>
								<b>Features:</b>
								<ul>
									<li>Fast paced shoot 'em up gameplay with clean visuals.</li>
									<li>Wave based game play with the difficulty increasing over time.</li>
									<li>Time attack based resource management.</li>
									<li>Source code - Modify the game to your own liking.</li>
									<li>Particles!</li>
								</ul>
							</p>
							<br>
							<p>
								Strikewatch was written in lua and utilizes the DaisyMoon engine by <a href="http://www.oxeyegames.com/" target="_blank">Oxeye Games</a>
							</p>
							<p class="centered"><b>Screenshots</b>
							</p>
							<div class="centered">
								<a class="colorbox project-imagecontainer fader" rel="strikewatch" href="/images/projects/sw_scr1.jpg"><img class="project-imagethumnnail" src="/images/projects/sw_scr1_thumb.jpg">
								</a>
								<a class="colorbox project-imagecontainer fader" rel="strikewatch" href="/images/projects/sw_scr2.jpg"><img class="project-imagethumnnail" src="/images/projects/sw_scr2_thumb.jpg">
								</a>
								<a class="colorbox project-imagecontainer fader" rel="strikewatch" href="/images/projects/sw_scr3.jpg"><img class="project-imagethumnnail" src="/images/projects/sw_scr3_thumb.jpg">
								</a>
							</div>
							<br>
							<h2 class="centered"><a href="http://catlinman.itch.io/strikewatch" target="_blank">Download Strikewatch from itch.io</a></h2>
							<br>
						</div>
					</div>
				</div>
				<div name="iptintro" class="foldout">
					<div class="container">
						<div class="content">
							<h1 class="centered">Indestructible Phoenix Team Intro</h1>
							<iframe width="853" height="480" src="http://www.youtube-nocookie.com/embed/X8MwLN8yGUE?rel=0" frameborder="0" allowfullscreen></iframe>
							<p class="justified">
								During the summer of 2013 I made a video intro for the <a href="http://ip-clan.net/" target="_blank">Indestructible Phoenix Team</a>. The main goal was to provide them with a high quality opening for their own videos and recordings.
								Since then it has been widely used within their gaming montages.
							</p>
							<p class="justified">
								The opening video itself was constructed and fully rendered in Blender with only the final explosion scene having been made in Adobe After Effects CS6. The final render was however was done with Blenders Cycles rendering engine creating the final high
								quality and professional look of the whole intro.
							</p>
						</div>
					</div>
				</div>
				<div name="colorblind" class="foldout">
					<div class="container">
						<div class="content">
							<h1 class="centered">Colorblind</h1>
							<br>
							<p class="justified">
								Colorblind is a top down shooter I made for the Ludum Dare 26 game-jam within 24 hours. The game is a down to the basics shooter with the only goal being to survive for as long as possible against waves of oncoming enemies. Through the course of the player's
								game the scene fades in and out of color depending on the player's progress and skill.
							</p>
							<p class="justified">
								The game was written completely in lua and was made utilizing the <a href="https://love2d.org/" target="_blank">Love2D framework</a>. Since it was one of my first game projects it generally lacks content and more complex game
								play but it is still fun to play nevertheless.
							</p>
							<br>
							<h2 class="centered"><a href="http://www.ludumdare.com/compo/ludum-dare-26/?action=preview&uid=20482" target="_blank">Download Colorblind from its Ludum Dare page</a></h2>
							<br>
							<p class="centered"><b>Screenshots</b>
							</p>
							<div class="centered">
								<a class="colorbox project-imagecontainer fader" rel="colorblind" href="/images/projects/cb_scr1.jpg"><img class="project-imagethumnnail" src="/images/projects/cb_scr1_thumb.jpg">
								</a>
								<a class="colorbox project-imagecontainer fader" rel="colorblind" href="/images/projects/cb_scr2.jpg"><img class="project-imagethumnnail" src="/images/projects/cb_scr2_thumb.jpg">
								</a>
								<a class="colorbox project-imagecontainer fader" rel="colorblind" href="/images/projects/cb_scr3.jpg"><img class="project-imagethumnnail" src="/images/projects/cb_scr3_thumb.jpg">
								</a>
							</div>
							<br>
						</div>
					</div>
				</div>
				<div class="project-divider"></div>
			</div>
			<?php include $_SERVER[ 'DOCUMENT_ROOT']. "/resources/footer.php";?>
		</div>
	</body>

</html>
