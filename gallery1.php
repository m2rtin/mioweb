<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>webovky- druha strana-komplet !!</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<!-- ImageReady Preload Script (webovky- druha strana-komplet !!.psd) -->
<script type="text/javascript">
<!--

userAgent = window.navigator.userAgent;
browserVers = parseInt(userAgent.charAt(userAgent.indexOf("/")+1),10);
function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function findElement(n,ly) {
	if (browserVers < 4)		return document[n];
	var curDoc = ly ? ly.document : document;
	var elem = curDoc[n];
	if (!elem) {
		for (var i=0;i<curDoc.layers.length;i++) {
			elem = findElement(n,curDoc.layers[i]);
			if (elem) return elem;
		}
	}
	return elem;
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		var img;
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			img = null;
			if (document.layers) {
				img = findElement(changeImages.arguments[i],0);
			}
			else {
				img = document.images[changeImages.arguments[i]];
			}
			if (img) {
				img.src = changeImages.arguments[i+1];
			}
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		galerie_03_over = newImage("images/galerie_03-over.gif");
		galerie_06_over = newImage("images/galerie_06-over.gif");
		galerie_08_over = newImage("images/galerie_08-over.gif");
		galerie_10_over = newImage("images/galerie_10-over.gif");
		galerie_15_over = newImage("images/galerie_15-over.gif");
		galerie_16_over = newImage("images/galerie_16-over.gif");
		galerie_17_over = newImage("images/galerie_17-over.gif");
		preloadFlag = true;
	}
}

// -->
</script>
<!-- End Preload Script -->
<!-- ImageReady Styles (webovky- druha strana-komplet !!.psd) -->
<style type="text/css">
<!--

#Table_01 {
	position: absolute;
	left: 50%;
	margin-right: -50%;
	transform: translate(-50%); 
	width:909px;
	height:700px;
}

#galerie-01_ {
	position:absolute;
	left:0px;
	top:0px;
	width:909px;
	height:7px;
}

#galerie-02_ {
	position:absolute;
	left:0px;
	top:7px;
	width:113px;
	height:111px;
}

#galerie-03_ {
	position:absolute;
	left:113px;
	top:7px;
	width:186px;
	height:60px;
}

#galerie-04_ {
	position:absolute;
	left:299px;
	top:7px;
	width:610px;
	height:111px;
}

#galerie-05_ {
	position:absolute;
	left:113px;
	top:67px;
	width:186px;
	height:51px;
}

#galerie-06_ {
	position:absolute;
	left:0px;
	top:118px;
}


-->
</style>
<!-- End ImageReady Styles -->
</head>
<body onload="preloadImages();" style="background-color:#FFFFFF;">
<!-- ImageReady Slices (webovky- druha strana-komplet !!.psd) -->
<div id="Table_01">
	<div id="galerie-01_">
		<img id="galerie_01" src="images/galerie_01.gif" width="909" height="7" alt="" />
	</div>
	<div id="galerie-02_">
		<img id="galerie_02" src="images/galerie_02.gif" width="113" height="111" alt="" />
	</div>
	<div id="galerie-03_">
		<a href="index.html"
			onmouseover="changeImages('galerie_03', 'images/galerie_03-over.gif'); return true;"
			onmouseout="changeImages('galerie_03', 'images/galerie_03.gif'); return true;"
			onmousedown="changeImages('galerie_03', 'images/galerie_03-over.gif'); return true;"
			onmouseup="changeImages('galerie_03', 'images/galerie_03.gif'); return true;">
			<img name="galerie_03" id="galerie_03" src="images/galerie_03.gif" width="186" height="60" border="0" alt="" /></a>
	</div>
	<div id="galerie-04_">
		<img id="galerie_04" src="images/galerie_04.gif" width="610" height="111" alt="" />
	</div>
	<div id="galerie-05_">
		<img id="galerie_05" src="images/galerie_05.gif" width="186" height="51" alt="" />
	</div>
	<div id="galerie-06_">
<?

    // Include the UberGallery class
    include('resources/UberGallery.php');

    // Initialize the UberGallery object
    $gallery = new UberGallery();

    // Initialize the gallery array
    $galleryArray = $gallery->readImageDirectory('gallery01-images');

	$gallery->setThemeName('uber-mine');

    // Define theme path
    if (!defined('THEMEPATH')) {
        define('THEMEPATH', $gallery->getThemePath());
    }

    // Set path to theme index
	$themeIndex = $gallery->getThemePath(true) . '/index.php';

    // Initialize the theme
    if (file_exists($themeIndex)) {
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme');
	}
?>
	</div>
	
</div>
<!-- End ImageReady Slices -->
</body>
</html>
