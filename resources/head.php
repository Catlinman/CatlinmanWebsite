<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="Catlinman is a freelance game developer, programmer, graphic artist and 3d animator">
<meta name="keywords" content="catlinman,programmer,game development,graphic artist,3d animator">
<meta name="author" content="Catlinman">
<meta name="viewport" content="width=1080">
<meta charset="UTF-8">
<meta itemprop="image" content="/images/metaimage.png">
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@catlinman_" />
<meta name="twitter:creator" content="@catlinman_" >
<meta name="twitter:title" content="Catlinman" />
<meta name="twitter:description" content="Catlinman is a freelance game developer, programmer, graphic artist and 3d animator" />
<meta name="twitter:image" content="http://catlinman.com/images/metaimage.jpg" />
<meta name="twitter:domain" content="http://catlinman.com">
<meta name="twitter:url" content="http://catlinman.com" />
<meta property="og:url" content="http://catlinman.com">
<link rel="shortcut icon" href="/images/icon.png" type="image/x-icon">
<link rel="icon" href="/images/icon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/style.css">

<link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="/analytics.min.js"></script>

<script type="text/javaScript">
	var pageready = false;

	$.fx.interval = 7.5;
	$(document).bind("dragstart", function(event) {
	    event.preventDefault();
	});

	$(document).ready(function(){
		$(".loading").delay(100).fadeIn(250);
		$(".container, .imagedivider, .foldout, .layout").not(".loading").css("display","none");
		$("a[target!='_blank']:not('.colorbox,.colorbox-iframe')").click(function(event){
			event.preventDefault();

			linkLocation = this.href;

			if(pageready == true){
				$(".layout, footer").fadeTo(250, 0, function(){window.location=linkLocation;});
			}
		});
	});

	$(window).load(function(){
		$(".layout").css("display","inherit");
		$(".container, .imagedivider").not(".loading").each(function(i){
			$(this).hide().delay(250+100*(i+1)).fadeIn(500);
		});

		$(".loading").fadeOut(250);

		pageready = true;
	});
</script>
