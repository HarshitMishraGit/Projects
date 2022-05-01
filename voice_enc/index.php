<?php 
include './stuff/_dbconnect.php';

if(isset($_POST['id'])){
    $id=$_POST['id'];
    $password=$_POST['password'];

    $search1="SELECT * FROM `users` WHERE `id` = '$id' and `password`='$password' ";
	$result1=mysqli_query($conn,$search1);
	$row1=mysqli_fetch_assoc($result1);
    $num1= mysqli_num_rows($result1);
    if($num1){
        session_start();
        $_SESSION['id']=$id;
        $_SESSION['password']=$password;
        echo '<script>
        window.location="./main.php"
        </script>';
    }else{
        
        echo '<script>
        alert("User is not registered");
        window.location="./index.php"
        </script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <style>
        /*! libs\john-locke\scss\bundle.scss */

/*! @import "englishextra-ui-colors" */

/*!
 * englishextra-ui colors
 * use microsoft.com/en-us/design/color
 * localhost/tools/Tinter-Shader/index.html
 * localhost/tools/perfect_colors/
 * localhost/tools/TinyColor/index.html
 * localhost/tools/color-palette-generator/index.html
 * localhost/tools/hexcolortool/index.html
 * localhost/tools/css3-playground/
 */

/* 0073D2
007DD1
5E308F
9C0087
D13636
F23819
FF4141
00AC54
547E71
8C582C
F5630E
FDE000
C3C3C3
D54848
2D7C9A
2F79B6
EF6B50
EB5262
706D6A
60867B
615FC8
744DA5
3087CD */

/* \$(.*?)\: (.*?)\;
\t\t\t\t\t\t\t\t\t\t<div class="masonry-grid-item"><div class="bg-\1"><span class="color-variable-name">$\1</span></div></div>

\$(.*?)\: (.*?)\;
.bg-\1 {
	background-color: $\1;
} */

/*! @import "englishextra-variables"; */

/*! @import "font-face"; */

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Thin.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Thin.woff?v=2.137)
			format("woff");
	font-weight: 100;
	font-style: normal;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-ThinItalic.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-ThinItalic.woff?v=2.137)
			format("woff");
	font-weight: 100;
	font-style: italic;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Light.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Light.woff?v=2.137)
			format("woff");
	font-weight: 300;
	font-style: normal;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-LightItalic.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-LightItalic.woff?v=2.137)
			format("woff");
	font-weight: 300;
	font-style: italic;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Regular.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Regular.woff?v=2.137)
			format("woff");
	font-weight: 400;
	font-style: normal;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Regular.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Regular.woff?v=2.137)
			format("woff");
	font-weight: 400;
	font-style: normal;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Italic.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Italic.woff?v=2.137)
			format("woff");
	font-weight: 400;
	font-style: italic;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Italic.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Italic.woff?v=2.137)
			format("woff");
	font-weight: 400;
	font-style: italic;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Medium.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Medium.woff?v=2.137)
			format("woff");
	font-weight: 500;
	font-style: normal;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-MediumItalic.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-MediumItalic.woff?v=2.137)
			format("woff");
	font-weight: 500;
	font-style: italic;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Bold.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Bold.woff?v=2.137)
			format("woff");
	font-weight: 700;
	font-style: normal;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Bold.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Bold.woff?v=2.137)
			format("woff");
	font-weight: 700;
	font-style: normal;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-BoldItalic.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-BoldItalic.woff?v=2.137)
			format("woff");
	font-weight: 700;
	font-style: italic;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-BoldItalic.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-BoldItalic.woff?v=2.137)
			format("woff");
	font-weight: 700;
	font-style: italic;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Black.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-Black.woff?v=2.137)
			format("woff");
	font-weight: 900;
	font-style: normal;
	font-display: swap;
}

@font-face {
	font-family: Roboto;
	src: url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-BlackItalic.woff2?v=2.137)
			format("woff2"),
		url(https://englishextra.github.io/fonts/roboto-fontfacekit/2.137/Roboto-BlackItalic.woff?v=2.137)
			format("woff");
	font-weight: 900;
	font-style: italic;
	font-display: swap;
}

@font-face {
	font-family: "Roboto Condensed";
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Bold.eot");
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Bold.eot")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Bold.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Bold.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Bold.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Bold.svg#RobotoCondensedBold")
			format("svg");
	font-style: normal;
	font-weight: 700;
	font-display: swap;
}

@font-face {
	font-family: "Roboto Condensed";
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-BoldItalic.eot");
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-BoldItalic.eot")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-BoldItalic.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-BoldItalic.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-BoldItalic.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-BoldItalic.svg#RobotoCondensedBoldItalic")
			format("svg");
	font-style: italic;
	font-weight: 700;
	font-display: swap;
}

@font-face {
	font-family: "Roboto Condensed";
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Italic.eot");
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Italic.eot")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Italic.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Italic.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Italic.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Italic.svg#RobotoCondensedItalic")
			format("svg");
	font-style: italic;
	font-weight: 400;
	font-display: swap;
}

@font-face {
	font-family: "Roboto Condensed";
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Light.eot");
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Light.eot")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Light.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Light.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Light.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Light.svg#RobotoCondensedLight")
			format("svg");
	font-style: normal;
	font-weight: 300;
	font-display: swap;
}

@font-face {
	font-family: "Roboto Condensed";
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-LightItalic.eot");
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-LightItalic.eot")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-LightItalic.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-LightItalic.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-LightItalic.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-LightItalic.svg#RobotoCondensedLightItalic")
			format("svg");
	font-style: italic;
	font-weight: 300;
	font-display: swap;
}

@font-face {
	font-family: "Roboto Condensed";
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Regular.eot");
	src: url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Regular.eot")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Regular.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Regular.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Regular.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/roboto-condensed-fontfacekit/RobotoCondensed-Regular.svg#RobotoCondensedRegular")
			format("svg");
	font-style: normal;
	font-weight: 400;
	font-display: swap;
}

@font-face {
	font-family: "PT Serif";
	src: url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Bold.eot");
	src: url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Bold.eot?#iefix")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Bold.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Bold.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Bold.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Bold.svg#PT_SerifWebBold")
			format("svg");
	font-style: normal;
	font-weight: 700;
	font-display: swap;
}

@font-face {
	font-family: "PT Serif";
	src: url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-BoldItalic.eot");
	src: url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-BoldItalic.eot?#iefix")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-BoldItalic.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-BoldItalic.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-BoldItalic.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-BoldItalic.svg#PT_SerifWebBoldItalic")
			format("svg");
	font-style: italic;
	font-weight: 700;
	font-display: swap;
}

@font-face {
	font-family: "PT Serif";
	src: url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Italic.eot");
	src: url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Italic.eot?#iefix")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Italic.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Italic.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Italic.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Italic.svg#PT_SerifWebItalic")
			format("svg");
	font-style: italic;
	font-weight: 400;
	font-display: swap;
}

@font-face {
	font-family: "PT Serif";
	src: url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Regular.eot");
	src: url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Regular.eot?#iefix")
			format("embedded-opentype"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Regular.woff2")
			format("woff2"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Regular.woff")
			format("woff"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Regular.ttf")
			format("truetype"),
		url("https://englishextra.github.io/fonts/ptserif-fontfacekit/PT_Serif-Regular.svg#PT_SerifWebRegular")
			format("svg");
	font-style: normal;
	font-weight: 400;
	font-display: swap;
}

/*! @import "normalize"; */

/*! normalize.css v5.0.0 | MIT License | github.com/necolas/normalize.css */

/*!
 * 1. Change the default font family in all browsers (opinionated).
 * 2. Correct the line height in all browsers.
 * 3. Prevent adjustments of font size after orientation changes in
 *		IE on Windows Phone and in iOS.
 */

/* Document
	========================================================================== */
html {
	font-family: sans-serif;
/* 1 */
	line-height: 1.15;
/* 2 */
	-ms-text-size-adjust: 100%;
/* 3 */
	-webkit-text-size-adjust: 100%;
/* 3 */
}

/* Sections
	========================================================================== */

/*!
 * Remove the margin in all browsers (opinionated).
 */
body {
	margin: 0;
}

/*!
 * Add the correct display in IE 9-.
 */
article,
aside,
footer,
header,
nav,
section {
	display: block;
}

/*!
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */
h1 {
	font-size: 2em;
	margin: 0.67em 0;
}

/* Grouping content
	========================================================================== */

/*!
 * Add the correct display in IE 9-.
 * 1. Add the correct display in IE.
 */
figcaption,
figure,
main {
/* 1 */
	display: block;
}

/*!
 * Add the correct margin in IE 8.
 */
figure {
	margin: 1em 40px;
}

/*!
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */
hr {
	-webkit-box-sizing: content-box;
	box-sizing: content-box;
/* 1 */
	height: 0;
/* 1 */
	overflow: visible;
/* 2 */
}

/*!
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */
pre {
	font-family: monospace, monospace;
/* 1 */
	font-size: 1em;
/* 2 */
}

/* Text-level semantics
	========================================================================== */

/*!
 * 1. Remove the gray background on active links in IE 10.
 * 2. Remove gaps in links underline in iOS 8+ and Safari 8+.
 */
a {
	background-color: transparent;
/* 1 */
	-webkit-text-decoration-skip: objects;
/* 2 */
}

/*!
 * Remove the outline on focused links when they are also active or hovered
 * in all browsers (opinionated).
 */
a:active,
a:hover {
	outline-width: 0;
}

/*!
 * 1. Remove the bottom border in Firefox 39-.
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */
abbr[title] {
	border-bottom: none;
/* 1 */
	text-decoration: underline;
/* 2 */
	-webkit-text-decoration: underline dotted;
	text-decoration: underline dotted;
/* 2 */
}

/*!
 * Prevent the duplicate application of `bolder` by the next rule in Safari 6.
 */
b,
strong {
	font-weight: inherit;
}

/*!
 * Add the correct font weight in Chrome, Edge, and Safari.
 */
b,
strong {
	font-weight: bolder;
}

/*!
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */
code,
kbd,
samp {
	font-family: monospace, monospace;
/* 1 */
	font-size: 1em;
/* 2 */
}

/*!
 * Add the correct font style in Android 4.3-.
 */
dfn {
	font-style: italic;
}

/*!
 * Add the correct background and color in IE 9-.
 */
mark {
	background-color: #ff0;
	color: #000000;
}

/*!
 * Add the correct font size in all browsers.
 */
small {
	font-size: 80%;
}

/*!
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */
sub,
sup {
	font-size: 75%;
	line-height: 0;
	position: relative;
	vertical-align: baseline;
}

sub {
	bottom: -0.25em;
}

sup {
	top: -0.5em;
}

/* Embedded content
	========================================================================== */

/*!
 * Add the correct display in IE 9-.
 */
audio,
video {
	display: inline-block;
}

/*!
 * Add the correct display in iOS 4-7.
 */
audio:not([controls]) {
	display: none;
	height: 0;
}

/*!
 * Remove the border on images inside links in IE 10-.
 */
img {
	border-style: none;
}

/*!
 * Hide the overflow in IE.
 */
svg:not(:root) {
	overflow: hidden;
}

/* Forms
	========================================================================== */

/*!
 * 1. Change the font styles in all browsers (opinionated).
 * 2. Remove the margin in Firefox and Safari.
 */
button,
input,
optgroup,
select,
textarea {
	font-family: sans-serif;
/* 1 */
	font-size: 100%;
/* 1 */
	line-height: 1.15;
/* 1 */
	margin: 0;
/* 2 */
}

/*!
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */
button,
input {
/* 1 */
	overflow: visible;
}

/*!
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */
button,
select {
/* 1 */
	text-transform: none;
}

/*!
 * 1. Prevent a WebKit bug where (2) destroys native `audio` and `video`
 *		controls in Android 4.
 * 2. Correct the inability to style clickable types in iOS and Safari.
 */
button,
html [type="button"],
[type="reset"],
[type="submit"] {
	-webkit-appearance: button;
/* 2 */
}

/*!
 * Remove the inner border and padding in Firefox.
 */
button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
	border-style: none;
	padding: 0;
}

/*!
 * Restore the focus styles unset by the previous rule.
 */
button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
	outline: 1px dotted ButtonText;
}

/*!
 * Change the border, margin, and padding in all browsers (opinionated).
 */
fieldset {
	border: 1px solid #c0c0c0;
	margin: 0 2px;
	padding: 0.35em 0.625em 0.75em;
}

/*!
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *		`fieldset` elements in all browsers.
 */
legend {
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
/* 1 */
	color: inherit;
/* 2 */
	display: table;
/* 1 */
	max-width: 100%;
/* 1 */
	padding: 0;
/* 3 */
	white-space: normal;
/* 1 */
}

/*!
 * 1. Add the correct display in IE 9-.
 * 2. Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */
progress {
	display: inline-block;
/* 1 */
	vertical-align: baseline;
/* 2 */
}

/*!
 * Remove the default vertical scrollbar in IE.
 */
textarea {
	overflow: auto;
}

/*!
 * 1. Add the correct box sizing in IE 10-.
 * 2. Remove the padding in IE 10-.
 */
[type="checkbox"],
[type="radio"] {
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
/* 1 */
	padding: 0;
/* 2 */
}

/*!
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
	height: auto;
}

/*!
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */
[type="search"] {
	-webkit-appearance: textfield;
/* 1 */
	outline-offset: -2px;
/* 2 */
}

/*!
 * Remove the inner padding and cancel buttons in Chrome and Safari on macOS.
 */
[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
	-webkit-appearance: none;
}

/*!
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */
::-webkit-file-upload-button {
	-webkit-appearance: button;
/* 1 */
	font: inherit;
/* 2 */
}

/* Interactive
	========================================================================== */

/*
 * Add the correct display in IE 9-.
 * 1. Add the correct display in Edge, IE, and Firefox.
 */
details,
menu {
	display: block;
}

/*
 * Add the correct display in all browsers.
 */
summary {
	display: list-item;
}

/* Scripting
	========================================================================== */

/*!
 * Add the correct display in IE 9-.
 */
canvas {
	display: inline-block;
}

/*!
 * Add the correct display in IE.
 */
template {
	display: none;
}

/* Hidden
	========================================================================== */

/*!
 * Add the correct display in IE 10-.
 */
[hidden] {
	display: none;
}

/*!
 * animate.css -http://daneden.me/animate
 * Version - 3.5.2
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2017 Daniel Eden
 */

.animated {
	-webkit-animation-duration: 1s;
	animation-duration: 1s;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both;
}

.animated.infinite {
	-webkit-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
}

@-webkit-keyframes pulse {
	from {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
	50% {
		-webkit-transform: scale3d(1.05, 1.05, 1.05);
		transform: scale3d(1.05, 1.05, 1.05);
	}
	to {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
}

@keyframes pulse {
	from {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
	50% {
		-webkit-transform: scale3d(1.05, 1.05, 1.05);
		transform: scale3d(1.05, 1.05, 1.05);
	}
	to {
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
}

.pulse {
	-webkit-animation-name: pulse;
	animation-name: pulse;
}

@-webkit-keyframes bounceInDown {
	from,
	60%,
	75%,
	90%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		-webkit-transform: translate3d(0, -3000px, 0);
		transform: translate3d(0, -3000px, 0);
	}
	60% {
		opacity: 1;
		-webkit-transform: translate3d(0, 25px, 0);
		transform: translate3d(0, 25px, 0);
	}
	75% {
		-webkit-transform: translate3d(0, -10px, 0);
		transform: translate3d(0, -10px, 0);
	}
	90% {
		-webkit-transform: translate3d(0, 5px, 0);
		transform: translate3d(0, 5px, 0);
	}
	to {
		-webkit-transform: none;
		transform: none;
	}
}

@keyframes bounceInDown {
	from,
	60%,
	75%,
	90%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		-webkit-transform: translate3d(0, -3000px, 0);
		transform: translate3d(0, -3000px, 0);
	}
	60% {
		opacity: 1;
		-webkit-transform: translate3d(0, 25px, 0);
		transform: translate3d(0, 25px, 0);
	}
	75% {
		-webkit-transform: translate3d(0, -10px, 0);
		transform: translate3d(0, -10px, 0);
	}
	90% {
		-webkit-transform: translate3d(0, 5px, 0);
		transform: translate3d(0, 5px, 0);
	}
	to {
		-webkit-transform: none;
		transform: none;
	}
}

.bounceInDown {
	-webkit-animation-name: bounceInDown;
	animation-name: bounceInDown;
}

@-webkit-keyframes swing {
	20% {
		-webkit-transform: rotate3d(0, 0, 1, 15deg);
		transform: rotate3d(0, 0, 1, 15deg);
	}
	40% {
		-webkit-transform: rotate3d(0, 0, 1, -10deg);
		transform: rotate3d(0, 0, 1, -10deg);
	}
	60% {
		-webkit-transform: rotate3d(0, 0, 1, 5deg);
		transform: rotate3d(0, 0, 1, 5deg);
	}
	80% {
		-webkit-transform: rotate3d(0, 0, 1, -5deg);
		transform: rotate3d(0, 0, 1, -5deg);
	}
	to {
		-webkit-transform: rotate3d(0, 0, 1, 0deg);
		transform: rotate3d(0, 0, 1, 0deg);
	}
}

@keyframes swing {
	20% {
		-webkit-transform: rotate3d(0, 0, 1, 15deg);
		transform: rotate3d(0, 0, 1, 15deg);
	}
	40% {
		-webkit-transform: rotate3d(0, 0, 1, -10deg);
		transform: rotate3d(0, 0, 1, -10deg);
	}
	60% {
		-webkit-transform: rotate3d(0, 0, 1, 5deg);
		transform: rotate3d(0, 0, 1, 5deg);
	}
	80% {
		-webkit-transform: rotate3d(0, 0, 1, -5deg);
		transform: rotate3d(0, 0, 1, -5deg);
	}
	to {
		-webkit-transform: rotate3d(0, 0, 1, 0deg);
		transform: rotate3d(0, 0, 1, 0deg);
	}
}

.swing {
	-webkit-transform-origin: top center;
	transform-origin: top center;
	-webkit-animation-name: swing;
	animation-name: swing;
}

@-webkit-keyframes bounceInRight {
	from,
	60%,
	75%,
	90%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	from {
		opacity: 0;
		-webkit-transform: translate3d(3000px, 0, 0);
		transform: translate3d(3000px, 0, 0);
	}
	60% {
		opacity: 1;
		-webkit-transform: translate3d(-25px, 0, 0);
		transform: translate3d(-25px, 0, 0);
	}
	75% {
		-webkit-transform: translate3d(10px, 0, 0);
		transform: translate3d(10px, 0, 0);
	}
	90% {
		-webkit-transform: translate3d(-5px, 0, 0);
		transform: translate3d(-5px, 0, 0);
	}
	to {
		-webkit-transform: none;
		transform: none;
	}
}

@keyframes bounceInRight {
	from,
	60%,
	75%,
	90%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	from {
		opacity: 0;
		-webkit-transform: translate3d(3000px, 0, 0);
		transform: translate3d(3000px, 0, 0);
	}
	60% {
		opacity: 1;
		-webkit-transform: translate3d(-25px, 0, 0);
		transform: translate3d(-25px, 0, 0);
	}
	75% {
		-webkit-transform: translate3d(10px, 0, 0);
		transform: translate3d(10px, 0, 0);
	}
	90% {
		-webkit-transform: translate3d(-5px, 0, 0);
		transform: translate3d(-5px, 0, 0);
	}
	to {
		-webkit-transform: none;
		transform: none;
	}
}

.bounceInRight {
	-webkit-animation-name: bounceInRight;
	animation-name: bounceInRight;
}

@-webkit-keyframes bounceInLeft {
	from,
	60%,
	75%,
	90%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		-webkit-transform: translate3d(-3000px, 0, 0);
		transform: translate3d(-3000px, 0, 0);
	}
	60% {
		opacity: 1;
		-webkit-transform: translate3d(25px, 0, 0);
		transform: translate3d(25px, 0, 0);
	}
	75% {
		-webkit-transform: translate3d(-10px, 0, 0);
		transform: translate3d(-10px, 0, 0);
	}
	90% {
		-webkit-transform: translate3d(5px, 0, 0);
		transform: translate3d(5px, 0, 0);
	}
	to {
		-webkit-transform: none;
		transform: none;
	}
}

@keyframes bounceInLeft {
	from,
	60%,
	75%,
	90%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		-webkit-transform: translate3d(-3000px, 0, 0);
		transform: translate3d(-3000px, 0, 0);
	}
	60% {
		opacity: 1;
		-webkit-transform: translate3d(25px, 0, 0);
		transform: translate3d(25px, 0, 0);
	}
	75% {
		-webkit-transform: translate3d(-10px, 0, 0);
		transform: translate3d(-10px, 0, 0);
	}
	90% {
		-webkit-transform: translate3d(5px, 0, 0);
		transform: translate3d(5px, 0, 0);
	}
	to {
		-webkit-transform: none;
		transform: none;
	}
}

.bounceInLeft {
	-webkit-animation-name: bounceInLeft;
	animation-name: bounceInLeft;
}

@-webkit-keyframes bounceInUp {
	from,
	60%,
	75%,
	90%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	from {
		opacity: 0;
		-webkit-transform: translate3d(0, 3000px, 0);
		transform: translate3d(0, 3000px, 0);
	}
	60% {
		opacity: 1;
		-webkit-transform: translate3d(0, -20px, 0);
		transform: translate3d(0, -20px, 0);
	}
	75% {
		-webkit-transform: translate3d(0, 10px, 0);
		transform: translate3d(0, 10px, 0);
	}
	90% {
		-webkit-transform: translate3d(0, -5px, 0);
		transform: translate3d(0, -5px, 0);
	}
	to {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}
}

@keyframes bounceInUp {
	from,
	60%,
	75%,
	90%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	from {
		opacity: 0;
		-webkit-transform: translate3d(0, 3000px, 0);
		transform: translate3d(0, 3000px, 0);
	}
	60% {
		opacity: 1;
		-webkit-transform: translate3d(0, -20px, 0);
		transform: translate3d(0, -20px, 0);
	}
	75% {
		-webkit-transform: translate3d(0, 10px, 0);
		transform: translate3d(0, 10px, 0);
	}
	90% {
		-webkit-transform: translate3d(0, -5px, 0);
		transform: translate3d(0, -5px, 0);
	}
	to {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}
}

.bounceInUp {
	-webkit-animation-name: bounceInUp;
	animation-name: bounceInUp;
}

@-webkit-keyframes bounceOutUp {
	20% {
		-webkit-transform: translate3d(0, -10px, 0);
		transform: translate3d(0, -10px, 0);
	}
	40%,
	45% {
		opacity: 1;
		-webkit-transform: translate3d(0, 20px, 0);
		transform: translate3d(0, 20px, 0);
	}
	to {
		opacity: 0;
		-webkit-transform: translate3d(0, -2000px, 0);
		transform: translate3d(0, -2000px, 0);
	}
}

@keyframes bounceOutUp {
	20% {
		-webkit-transform: translate3d(0, -10px, 0);
		transform: translate3d(0, -10px, 0);
	}
	40%,
	45% {
		opacity: 1;
		-webkit-transform: translate3d(0, 20px, 0);
		transform: translate3d(0, 20px, 0);
	}
	to {
		opacity: 0;
		-webkit-transform: translate3d(0, -2000px, 0);
		transform: translate3d(0, -2000px, 0);
	}
}

.bounceOutUp {
	-webkit-animation-name: bounceOutUp;
	animation-name: bounceOutUp;
}

@-webkit-keyframes bounceIn {
	from,
	20%,
	40%,
	60%,
	80%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		-webkit-transform: scale3d(0.3, 0.3, 0.3);
		transform: scale3d(0.3, 0.3, 0.3);
	}
	20% {
		-webkit-transform: scale3d(1.1, 1.1, 1.1);
		transform: scale3d(1.1, 1.1, 1.1);
	}
	40% {
		-webkit-transform: scale3d(0.9, 0.9, 0.9);
		transform: scale3d(0.9, 0.9, 0.9);
	}
	60% {
		opacity: 1;
		-webkit-transform: scale3d(1.03, 1.03, 1.03);
		transform: scale3d(1.03, 1.03, 1.03);
	}
	80% {
		-webkit-transform: scale3d(0.97, 0.97, 0.97);
		transform: scale3d(0.97, 0.97, 0.97);
	}
	to {
		opacity: 1;
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
}

@keyframes bounceIn {
	from,
	20%,
	40%,
	60%,
	80%,
	to {
		-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		-webkit-transform: scale3d(0.3, 0.3, 0.3);
		transform: scale3d(0.3, 0.3, 0.3);
	}
	20% {
		-webkit-transform: scale3d(1.1, 1.1, 1.1);
		transform: scale3d(1.1, 1.1, 1.1);
	}
	40% {
		-webkit-transform: scale3d(0.9, 0.9, 0.9);
		transform: scale3d(0.9, 0.9, 0.9);
	}
	60% {
		opacity: 1;
		-webkit-transform: scale3d(1.03, 1.03, 1.03);
		transform: scale3d(1.03, 1.03, 1.03);
	}
	80% {
		-webkit-transform: scale3d(0.97, 0.97, 0.97);
		transform: scale3d(0.97, 0.97, 0.97);
	}
	to {
		opacity: 1;
		-webkit-transform: scale3d(1, 1, 1);
		transform: scale3d(1, 1, 1);
	}
}

.bounceIn {
	-webkit-animation-name: bounceIn;
	animation-name: bounceIn;
}

@-webkit-keyframes bounceOutDown {
	20% {
		-webkit-transform: translate3d(0, 10px, 0);
		transform: translate3d(0, 10px, 0);
	}
	40%,
	45% {
		opacity: 1;
		-webkit-transform: translate3d(0, -20px, 0);
		transform: translate3d(0, -20px, 0);
	}
	to {
		opacity: 0;
		-webkit-transform: translate3d(0, 2000px, 0);
		transform: translate3d(0, 2000px, 0);
	}
}

@keyframes bounceOutDown {
	20% {
		-webkit-transform: translate3d(0, 10px, 0);
		transform: translate3d(0, 10px, 0);
	}
	40%,
	45% {
		opacity: 1;
		-webkit-transform: translate3d(0, -20px, 0);
		transform: translate3d(0, -20px, 0);
	}
	to {
		opacity: 0;
		-webkit-transform: translate3d(0, 2000px, 0);
		transform: translate3d(0, 2000px, 0);
	}
}

.bounceOutDown {
	-webkit-animation-name: bounceOutDown;
	animation-name: bounceOutDown;
}

/*!
 * addings to animate.css
 */

.duration-3s {
	-webkit-animation-duration: 3s;
	animation-duration: 3s;
}

.duration-5s {
	-webkit-animation-duration: 5s;
	animation-duration: 5s;
}

/*! @import "main"; */

/*!
 * main
 */

/*!
 * Default CSS Values for HTML Elements
 * @see {@link https://www.w3schools.com/cssref/css_default_values.asp}
 */
html,
body {
	height: 100%;
}

html {
	font-size: 15px;
	line-height: 20px;
	/**
 * set the parent to background transparent
 * and position relative to parent, absolute for child
 */
	background-color: transparent;
}

body {
	font-family: "Roboto", "Segoe UI", "Segoe WP", "HelveticaNeue", "Roboto", "Source Sans Pro", "Open Sans", "Exo2", "Fira Sans", sans-serif;
	font-weight: 400;
	font-size: 1.000rem;
	line-height: 1.333rem;
	width: 100%;
	color: #191919;
	background-color: #2b2b2b;
	-webkit-text-size-adjust: none;
	-moz-text-size-adjust: none;
	-ms-text-size-adjust: none;
	text-size-adjust: none;
	text-rendering: optimizeLegibility;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	-moz-font-feature-settings: "liga", "kern";
	-webkit-touch-callout: none;
	-webkit-tap-highlight-color: transparent;
	outline: none;
	overflow-y: auto;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	margin: 0;
	padding: 0;
}

/*!
 * englishextra specific rules
 */
a {
	color: inherit;
	text-decoration: none;
}

a:focus,
a:active,
button:focus,
button:active,
select:focus,
select:active {
	-webkit-tap-highlight-color: transparent;
	outline: none;
}

input[type="button"]::-moz-focus-inner,
button::-moz-focus-inner {
	border: 0;
}

img {
	border: 0;
	-ms-interpolation-mode: bicubic;
	vertical-align: bottom;
}

p:first-child {
	margin-top: 0;
}

p:last-child {
	margin-bottom: 0;
}

b,
strong,
.bolder {
	font-weight: bold;
}

i,
em,
.italic {
	font-style: italic;
}

u,
.underline {
	text-decoration: underline;
}

*,
*:after,
*::before {
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

::-moz-selection {
	color: rgba(255, 255, 255, 0.9);
	background-color: rgba(58, 150, 221, 0.9);
}

::selection {
	color: rgba(255, 255, 255, 0.9);
	background-color: rgba(58, 150, 221, 0.9);
}

::-webkit-input-placeholder {
	color: #878787 !important;
	opacity: 1;
}

::-moz-placeholder {
	color: #878787 !important;
	opacity: 1;
}

:-ms-input-placeholder {
	color: #878787 !important;
	opacity: 1;
}

::-ms-input-placeholder {
	color: #878787 !important;
	opacity: 1;
}

::placeholder {
	color: #878787 !important;
	opacity: 1;
}

/*!
 * clearfix css-tricks.com/snippets/css/clear-fix/
 */

.cf:after {
	content: "";
	display: table;
	clear: both;
}

/*!
 * fit width
 */

.fit-width {
	min-width: 100%;
}

/*!
 * fit half width
 */

.fit-half-width {
	min-width: 50%;
}

/*!
 * hide and show on mobile
 */

.page .show-inline-on-mobile,
.page .show-block-on-mobile {
	display: none;
}

@media only screen and (max-width: 800px) {
	.page .hide-on-mobile {
		display: none;
		width: 0;
		height: 0;
	}
	.page .show-inline-on-mobile {
		display: inline;
	}
	.page .show-block-on-mobile {
		display: block;
	}
}

.page .hide {
	display: none;
}

.page .show-inline {
	display: inline;
}

.page .show-inline-block {
	display: inline-block;
}

.page .show-block {
	display: block;
}

.wrapper {
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
	line-height: 0;
	overflow: hidden;
/* background-color: $button-background-dark; */
}

.scene,
.layer {
	display: block;
	height: 100%;
	width: 100%;
	padding: 0;
	margin: 0;
}

.scene {
	display: block;
	width: 100%;
	height: 100%;
	text-align: center;
	position: absolute;
	overflow: hidden;
	line-height: 0;
}

.layer {
	position: absolute;
}

.layer img,
.layer canvas {
	display: block;
}

/* .loading {
	font-size: 1.000rem;
	line-height: 1.000rem;
	font-family: sans-serif;
	font-weight: 400;
	color: #F44336;
	position: absolute;
	top: 4.133rem;
	left: 25%;
	margin: 0;
} */

.hero {
	width: 50%;
	min-height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	opacity: 1;
	overflow: hidden;
	background-color: transparent;
	background-image: url(https://englishextra.github.io/libs/john-locke/img/hero-960x1080.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
}

.monolith {
	width: 50%;
	min-height: 100%;
	position: absolute;
	top: 0;
	right: 0;
	opacity: 1;
	overflow: hidden;
	background-color: #f03b4c;
	background-image: url(https://englishextra.github.io/libs/john-locke/img/monolith-960x1080.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
}

.monolith:before {
	content: "";
	width: 100%;
	min-height: 100%;
	position: absolute;
	top: 0;
	right: 0;
	background-color: #f03b4c;
	opacity: 0.8;
}

.matreshka {
	width: 12.8rem;
	height: 24rem;
	margin: 0;
	position: absolute;
	bottom: -5%;
	left: 5%;
}

.matreshka a {
	color: inherit;
	text-decoration: none;
}

.matreshka img,
.matreshka canvas {
	display: block;
	width: 12.8rem;
	height: 24rem;
}

.pen {
	width: 3.4rem;
	height: 40rem;
	margin: 0;
	position: absolute;
	top: -40%;
	right: 5%;
}

.pen a {
	color: inherit;
	text-decoration: none;
}

.pen img,
.pen canvas {
	display: block;
	width: 3.4rem;
	height: 40rem;
}

.notebook {
	width: 21.333rem;
	height: 30.8rem;
	margin: 0;
	position: absolute;
	bottom: -30%;
	right: -5%;
}

.notebook a {
	color: inherit;
	text-decoration: none;
}

.notebook img,
.notebook canvas {
	display: block;
	width: 21.333rem;
	height: 30.8rem;
}

.john-locke {
	width: 33.333rem;
	height: 43rem;
	position: absolute;
	top: calc(50% - 21.5rem);
	left: calc(65% - 16.667rem);
	margin: 0;
}

.john-locke a {
	color: inherit;
	text-decoration: none;
}

.john-locke img,
.john-locke canvas {
	display: block;
	width: 33.333rem;
	height: 43rem;
}

.signature {
	width: 21.333rem;
	height: 8.667rem;
	position: absolute;
	top: calc(70% - 4.333rem);
	left: calc(75% - 10.667rem);
	margin: 0;
}

.signature a {
	color: inherit;
	text-decoration: none;
}

.signature img,
.signature svg {
	display: block;
	width: 21.333rem;
	height: 8.667rem;
}

.quote {
	min-width: 28.2rem;
	min-height: 5.4rem;
	text-align: left;
	position: absolute;
	top: calc(25% - 2.7rem);
	left: calc(35% - 14.1rem);
	overflow: hidden;
	background-color: #3bf0df;
	-webkit-box-shadow: 0.133rem 0.133rem 0.133rem 0 rgba(50, 50, 50, 0.3);
	box-shadow: 0.133rem 0.133rem 0.133rem 0 rgba(50, 50, 50, 0.3);
	margin: 0;
}

.quote p {
	display: block;
	font-family: "PT Serif", "Cambria", "Georgia", serif;
	font-weight: 400;
	font-size: 1.2rem;
	line-height: 1.500rem;
	color: #1f1f1f;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	margin-top: 1.2rem;
	margin-right: 1.6rem;
	margin-left: 1.6rem;
}

.quote a {
	color: inherit;
	text-decoration: none;
}

.intro {
	width: 50%;
	min-height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	overflow: hidden;
	background-size: cover;
}

.intro h1 {
	display: block;
	font-family: "Roboto Condensed", "Source Sans Pro", "Open Sans", "Exo2",
		"Fira Sans", "Segoe UI", "Segoe WP", "HelveticaNeue", "Roboto",
		sans-serif;
	font-weight: 700;
	font-size: 3.333rem;
	line-height: 4.000rem;
	text-transform: uppercase;
	color: #1f1f1f;
	background-color: rgba(230, 230, 230, 0.8);
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	margin: 0;
	position: absolute;
	top: 50%;
	left: 0;
	-webkit-transform: translate(0, -50%);
	transform: translate(0, -50%);
	padding-top: 1.6rem;
	padding-right: 2.400rem;
	padding-bottom: 1.6rem;
	padding-left: 2.400rem;
}

.intro h1 span {
	display: block;
	font-weight: 400;
	font-size: 2.667rem;
	line-height: 3.333rem;
	text-transform: none;
	border-bottom: 0.267rem solid #f03b4c;
	padding-bottom: 0.667rem;
}

.intro a {
	color: inherit;
	text-decoration: none;
}

.qrcode {
	display: none;
	visibility: hidden;
	opacity: 0;
	-webkit-transition: visibility 0s, opacity 0.2s ease;
	transition: visibility 0s, opacity 0.2s ease;
	width: 8.533rem;
	height: 8.533rem;
	position: absolute;
	top: 5.733rem;
	right: 1.333rem;
}

.qrcode img {
	display: block;
	width: 8.533rem;
	height: 8.533rem;
}

.download-app {
	visibility: hidden;
	opacity: 0;
	-webkit-transition: visibility 0s, opacity 0.2s ease;
	transition: visibility 0s, opacity 0.2s ease;
	width: 8.533rem;
	height: 3.067rem;
	position: absolute;
	top: 1.333rem;
	right: 1.333rem;
}

.download-app img {
	display: block;
	width: 8.533rem;
	height: 3.067rem;
}

.download-app a {
	color: inherit;
	text-decoration: none;
}

.logo {
	width: 4.000rem;
	height: 4.000rem;
	position: absolute;
	top: 1.333rem;
	left: 1.333rem;
}

.logo img,
.logo svg {
	display: block;
	width: 4.000rem;
	height: 4.000rem;
}

.logo a {
	font-size: 0;
}

.arrow {
	width: 4.000rem;
	height: 2.400rem;
	position: absolute;
	top: 5.333rem;
	left: 3.200rem;
}

.arrow img,
.arrow svg {
	display: block;
	width: 4.000rem;
	height: 2.400rem;
}

.phone {
	width: 2.133em;
	height: 4.267em;
	margin: 0;
	position: absolute;
	top: 2.667rem;
	left: 6.933rem;
}

.phone img,
.phone svg {
	display: block;
	width: 2.133em;
	height: 4.267em;
}

.phone a {
	color: inherit;
	text-decoration: none;
}

.start {
	display: none;
	width: 16rem;
	height: 16rem;
	font-size: 0;
	margin: 0;
	position: absolute;
	top: 50%;
	left: calc(50% - 8rem);
}

.start img {
	display: block;
	width: 16rem;
	height: 16rem;
}

.start a {
	color: inherit;
	text-decoration: none;
}

.hand {
	display: none;
	width: 8rem;
	height: 3.8rem;
	font-size: 0;
	margin: 0;
	position: absolute;
	top: calc(50% + 7.05rem);
	left: calc(50% - 8rem);
}

.hand img,
.hand canvas {
	display: block;
	width: 8rem;
	height: 3.8rem;
}

.hand a {
	color: inherit;
	text-decoration: none;
}

.guesture {
	display: none;
	width: 6.400rem;
	height: 6.400rem;
	font-size: 0;
	margin: 0;
	position: absolute;
	top: calc(50% + 6.4rem);
	left: calc(50% - 3.2rem);
}

.guesture img,
.guesture svg {
	display: block;
	width: 6.400rem;
	height: 6.400rem;
}

.btn-share-buttons {
	display: block;
	width: 3.200rem;
	height: 3.200rem;
	position: fixed;
	bottom: 0;
	right: 3.200rem;
	font-size: 0;
	background-color: #e6e6e6;
	outline: none;
	cursor: pointer;
	border: 0;
}

.btn-share-buttons .ui-icon {
	display: block;
	width: 3.200rem;
	height: 3.200rem;
/*! @see {@link https://www.w3.org/Style/Examples/007/center.en.html#hv3} */
	margin: 0;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-right: -50%;
	transform: translate(-50%, -50%);
}

.btn-share-buttons .ui-icon > * {
	fill: #767676;
}

.btn-show-vk-like {
	display: block;
	width: 3.200rem;
	height: 3.200rem;
	position: fixed;
	bottom: 0;
	right: 6.400rem;
	font-size: 0;
	background-color: #e6e6e6;
	outline: none;
	cursor: pointer;
	border: 0;
}

.btn-show-vk-like .ui-icon {
	display: block;
	width: 3.200rem;
	height: 3.200rem;
/*! @see {@link https://www.w3.org/Style/Examples/007/center.en.html#hv3} */
	margin: 0;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-right: -50%;
	transform: translate(-50%, -50%);
}

.btn-show-vk-like .ui-icon > * {
	fill: #767676;
}

.footer {
	width: 100%;
	min-height: 3.200rem;
	position: absolute;
	bottom: 0;
	left: 0;
	text-align: center;
	overflow: hidden;
	background-color: transparent;
	background-image: url(https://englishextra.github.io/libs/john-locke/img/dots-8x8.png);
	background-position: top left;
	background-repeat: repeat;
	background-size: 0.533rem 0.533rem;
}

.footer p {
	display: inline-block;
	height: 3.200rem;
	font-weight: 700;
	font-size: 0.933rem;
	line-height: 3.200rem;
	text-align: center;
	text-transform: uppercase;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
	color: #f2f2f2;
	background-color: #1f1f1f;
	padding-right: 1.333rem;
	padding-left: 1.333rem;
	margin: 0;
}

.footer a {
	color: inherit;
	text-decoration: none;
}

/* .ripple {
	width: 16.000rem;
	height: 16.000rem;
	position: absolute;
	top: -3.333rem;
	left: 25%;
	margin: 0;
}

.ripple img {
	display: block;
	width: 16.000rem;
	height: 16.000rem;
} */

/*!
 * ya-share2
 * yandex.ru/blog/share/kak-uvelichit-shrift-tsifr-sch-tchika#comment-add
 */

/* .ya-share2 {
	box-shadow: 0.133rem 0.133rem 0.133rem 0 $color-rgba-ui-bar-shadow;
} */
#ya-share2 .ya-share2__icon {
	height: 3.200rem;
	width: 3.200rem;
	background-size: 3.2rem 3.200rem;
}

#ya-share2 .ya-share2__title {
	width: 0;
	height: 0;
	overflow: hidden;
}

#ya-share2 .ya-share2__item {
	margin: 0;
}

#ya-share2 .ya-share2__badge {
	border-radius: 0;
}

.ya-share2 {
	display: inline-block;
	visibility: hidden;
	opacity: 0;
	position: fixed;
	bottom: 0;
	right: 3.200rem;
	-webkit-box-shadow: 0.133rem 0.133rem 0.133rem 0 rgba(50, 50, 50, 0.3);
	box-shadow: 0.133rem 0.133rem 0.133rem 0 rgba(50, 50, 50, 0.3);
	-webkit-transition: visibility 0s, opacity 0.2s ease;
	transition: visibility 0s, opacity 0.2s ease;
}

.ya-share2.is-active {
	visibility: visible;
	opacity: 1;
}

.holder-vk-like {
	display: block;
	visibility: hidden;
	opacity: 0;
	overflow: hidden;
	height: 3.200rem;
	position: fixed;
	right: 6.400rem;
	bottom: 0;
	line-height: 0;
	-webkit-transition: visibility 0s, opacity 0.2s ease;
	transition: visibility 0s, opacity 0.2s ease;
	background-color: #5181B8;
	-webkit-box-shadow: 0.133rem 0.133rem 0.133rem 0 rgba(50, 50, 50, 0.3);
	box-shadow: 0.133rem 0.133rem 0.133rem 0 rgba(50, 50, 50, 0.3);
	z-index: 1;
}

.holder-vk-like.is-active {
	visibility: visible;
	opacity: 1;
}

.vk-like {
	display: inline-block;
	height: 24px;
	position: absolute;
	top: 50%;
	-webkit-transform: translate(0, -50%);
	transform: translate(0, -50%);
	margin: 0 0 0 0.667rem;
	line-height: 0;
}

/*!
 * @see {@link https://gist.github.com/englishextra/40b7c4ffde33bfb58aff259afe229d6a}
 */

/*------------------------------------------
	Foundation Media Queries
	http://foundation.zurb.com/docs/media-queries.html
--------------------------------------------*/
/* Small screens - MOBILE */

@media only screen {
	html {
		font-size: 12px;
	}
	.quote {
		top: calc(20% - 2.7rem);
		left: calc(50% - 14.1rem);
	}
	.intro {
		width: 100%;
	}
	.intro h1 {
		top: 60%;
		font-size: 2.400rem;
		line-height: 3.200rem;
	}
	.intro h1 span {
		font-size: 1.867rem;
		line-height: 2.400rem;
	}
}

/* Define mobile styles - Mobile First */

@media only screen and (max-width: 40em) {
	html {
		font-size: 13px;
	}
}

/* max-width 640px, mobile-only styles, use when QAing mobile issues */

/* Medium screens - TABLET */

@media only screen and (min-width: 40.063em) {
	html {
		font-size: 13px;
	}
	.quote {
		top: calc(25% - 2.7rem);
		left: calc(30% - 14.1rem);
	}
}

/* min-width 641px, medium screens */

@media only screen and (min-width: 40.063em) and (max-width: 64em) {
	html {
		font-size: 15px;
	}
}

/* min-width 641px and max-width 1024px, use when QAing tablet-only issues */

/* Large screens - DESKTOP */

@media only screen and (min-width: 64.063em) {
	html {
		font-size: 15px;
	}
	.quote {
		top: calc(25% - 2.7rem);
		left: calc(35% - 14.1rem);
	}
	.intro {
		width: 50%;
	}
	.intro h1 {
		top: 50%;
		font-size: 3.333rem;
		line-height: 4.000rem;
	}
	.intro h1 span {
		font-size: 2.667rem;
		line-height: 3.333rem;
	}
	.qrcode {
		display: block;
	}
}

/* min-width 1025px, large screens */

@media only screen and (min-width: 64.063em) and (max-width: 90em) {
	html {
		font-size: 15px;
	}
}

/* min-width 1024px and max-width 1440px, use when QAing large screen-only issues */

/* XLarge screens */

@media only screen and (min-width: 90.063em) {
	html {
		font-size: 18px;
	}
}

/* min-width 1441px, xlarge screens */

@media only screen and (min-width: 90.063em) and (max-width: 120em) {
	html {
		font-size: 18px;
	}
}

/* min-width 1441px and max-width 1920px, use when QAing xlarge screen-only issues */

/* XXLarge screens */

@media only screen and (min-width: 120.063em) {
	html {
		font-size: 19px;
	}
}

/* min-width 1921px, xlarge screens */

    </style>
      <style>
        #form{
            padding-top: 5px;

        }
        #form input{
            border: none;
            padding: 10px 10px 10px 2px;
            border-radius: 5px;
            margin-left: 6px;
            background-color: black;
            color: wheat;
            
        }
        #form>input::placeholder{
            color: red;
        }
        #passinput{
            margin-left: 100px;
        }
        #btns{
            display: block;
            text-align: center;
            margin: auto;
            margin-top: 5px;
            background-color: #f03b4c;
            color: wheat;
            border: none;
            padding: 4px 6px 4px 6px;
            border-radius: 5px;
            box-shadow: 2px 2px 2px 2px wheat;

        }
        #form_div{
             height: 105px;
             
             border-radius: 5px;
        }
        #div{
            width: 100%;
        }
        @media screen and (max-width: 992px) {
            #div{
                display: flex;
                flex-direction: column;
                justify-content: center;

            }
            #Passinput{
            margin-left: 0px;
            /* margin-top: 10px */
            
        }
        #form>input{
            /* margin-right: 1px; */
            margin-left: 1px;

        }
        #form_div{
             height: 105px;
             
             border-radius: 5px;
        }
}
    </style>
</head>
<body>
    
	<style>
			body {
				font-family: Roboto, sans-serif;
				background-color: #2B2B2B;
				margin: 0;
				overflow-y: hidden;
			}
			/*body,
			a {
				color: transparent;
			}*/
			/*[hidden],
			button,
			canvas,
			img,
			input[type^=text],
			select,
			svg,
			template {
				display: none;
			}*/
			html,
			body {
				height: 100%;
			}
			html {
				font-size: 15px;
				line-height: 20px;
			}
			body {
				font-size: 1.000rem;
				line-height: 1.333rem;
				margin: 0;
			}
			.ripple {
				width: 16.000rem;
				height: 16.000rem;
				position: absolute;
				top: -3.333rem;
				left: 25%;
				margin: 0;
			}
			.ripple img {
				display: block;
				width: 16.000rem;
				height: 16.000rem;
			}
			.loading {
				font-size: 1.000rem;
				line-height: 1.000rem;
				font-family: sans-serif;
				font-weight: 400;
				color: #F44336;
				position: absolute;
				top: 4.133rem;
				left: 25%;
				margin: 0;
			}
			.quote p {
				font-family: "PT Serif", serif;
				font-weight: 400;
			}
			.intro h1 {
				font-family: "Roboto Condensed", sans-serif;
				font-weight: 700;
				text-transform: uppercase;
			}
			.intro span {
				font-family: "Roboto", sans-serif;
				font-weight: 400;
				text-transform: none;
			}
			.footer p {
				font-family: "Roboto", sans-serif;
				font-weight: 700;
			}
			@media only screen {
				html {
					font-size: 12px;
				}
			}
			@media only screen and (max-width:40em) {
				html {
					font-size: 12px;
				}
			}
			@media only screen and (min-width:40.063em) {
				html {
					font-size: 12px;
				}
			}
			@media only screen and (min-width:40.063em) and (max-width:64em) {
				html {
					font-size: 15px;
				}
			}
			@media only screen and (min-width:64.063em) {
				html {
					font-size: 15px;
				}
			}
			@media only screen and (min-width:64.063em) and (max-width:90em) {
				html {
					font-size: 15px;
				}
			}
			@media only screen and (min-width:90.063em) {
				html {
					font-size: 15px;
				}
			}
			@media only screen and (min-width:90.063em) and (max-width:120em) {
				html {
					font-size: 18px;
				}
			}
			@media only screen and (min-width:120.063em) {
				html {
					font-size: 18px;
				}
			}
			/*!
			 * @see {@link https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.2/gh-fork-ribbon.css}
			 */
			.github-fork-ribbon{width:12.1em;height:12.1em;position:fixed;overflow:hidden;top:0;right:0;z-index:9999;pointer-events:none;font-size:13px;text-decoration:none;text-indent:-999999px;}.github-fork-ribbon.fixed{position:fixed;}.github-fork-ribbon:before,.github-fork-ribbon:after{position:absolute;display:block;width:15.38em;height:1.54em;top:3.23em;right:-3.23em;-webkit-box-sizing:content-box;box-sizing:content-box;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);}.github-fork-ribbon:before{content:"";padding:.38em 0;background-color:#a00;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0)),to(rgba(0,0,0,0.15)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0),rgba(0,0,0,0.15));background-image:-o-linear-gradient(top,rgba(0,0,0,0),rgba(0,0,0,0.15));background-image:linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,0.15));-webkit-box-shadow:0 .15em .23em 0 rgba(0,0,0,0.5);box-shadow:0 .15em .23em 0 rgba(0,0,0,0.5);pointer-events:auto;}.github-fork-ribbon:after{content:attr(data-ribbon);color:#fff;font:700 1em "Helvetica Neue",Helvetica,Arial,sans-serif;line-height:1.54em;text-decoration:none;text-shadow:0 -.08em rgba(0,0,0,0.5);text-align:center;text-indent:0;padding:.15em 0;margin:.15em 0;border-width:.08em 0;border-style:dotted;border-color:#fff;border-color:rgba(255,255,255,0.7);}.github-fork-ribbon.left-top,.github-fork-ribbon.left-bottom{right:auto;left:0;}.github-fork-ribbon.left-bottom,.github-fork-ribbon.right-bottom{top:auto;bottom:0;}.github-fork-ribbon.left-top:before,.github-fork-ribbon.left-top:after,.github-fork-ribbon.left-bottom:before,.github-fork-ribbon.left-bottom:after{right:auto;left:-3.23em;}.github-fork-ribbon.left-bottom:before,.github-fork-ribbon.left-bottom:after,.github-fork-ribbon.right-bottom:before,.github-fork-ribbon.right-bottom:after{top:auto;bottom:3.23em;}.github-fork-ribbon.left-top:before,.github-fork-ribbon.left-top:after,.github-fork-ribbon.right-bottom:before,.github-fork-ribbon.right-bottom:after{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);}
		</style>
		<noscript>
			<link rel="stylesheet" href="https://englishextra.github.io/libs/john-locke/css/bundle.min.css" />
		</noscript>
		<script>
			var imagesPreloaded=false;(function(m){m="[object Array]"===Object.prototype.toString.apply(m)?m:[m];var t=function(){return (imagesPreloaded=true);},f=function(){return (imagesPreloaded=false);},c=[];for(var i=0,l=m.length;i<l;i++){c[i]=new Image();c[i].onabort=f;c[i].onerror=f;c[i].onload=t;c[i].src=m[i];}}([
"https://englishextra.github.io/libs/john-locke/img/dots-8x8.png",
"https://englishextra.github.io/libs/john-locke/img/hand-200x96.png",
"https://englishextra.github.io/libs/john-locke/img/hero-960x1080.jpg",
"https://englishextra.github.io/libs/john-locke/img/john-locke-500x645.png",
"https://englishextra.github.io/libs/john-locke/img/matreshka-192x360.png",
"https://englishextra.github.io/libs/john-locke/img/monolith-960x1080.jpg",
"https://englishextra.github.io/libs/john-locke/img/notebook-320x462.png",
"https://englishextra.github.io/libs/john-locke/img/pen-96x1141.png",
"https://englishextra.github.io/libs/john-locke/img/ripple-200x200.svg",
"https://englishextra.github.io/libs/john-locke/img/start-360x360.svg"
]));
		</script>
	</head>
	<body>
		<!-- images are hidden with display none in html and revealed with display block in css -->
		<!-- canvas and source image width and height should be of the same aspect ratio, not neccessarily size -->
		<!-- source svg for canvas painting should have width and height attributes -->
		<!-- images are finally scaled in css -->
		<!-- svg as image with svg-nosmil-img class if not supported is replaced with the data-fallback-src -->
		<!-- animated svg as image with svg-smil-img class if not supported is replaced with the data-fallback-src -->
		<!-- https://haltersweb.github.io/Accessibility/svg.html --><svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" focusable="false">
			<defs>
				<symbol id="logo" viewBox="0 0 108 108" enable-background="new 0 0 108 108">
					<circle fill="#F03B4C" cx="54" cy="54" r="54"></circle><path fill="#191919" d="M64.5,79.1c-0.8,0-1.6-0.2-2.4-0.4c-3.5-1.2-5-3.9-4.2-7.5c0.6-2.9,1.7-5.4,2.7-8c0.8-1.8,1.5-3.4,2.3-5.3c0.5-1.2,1-2.5,1.5-3.8l0,0c-0.5,0.5-0.9,0.9-1.4,1.4c-1.2,1.2-2.4,2.5-3.6,3.8c-2,2.1-4,4.3-6.1,6.4c-1.5,1.5-3.3,3.2-5.6,4.2c-1.3,0.6-2.7,0.9-3.9,0.5c-2.3-0.6-3.5-2.4-3.3-5c0.2-2.1,0.8-4.2,1.8-6.4c0.9-1.9,1.8-3.9,2.7-5.9c0.5-0.9,0.9-2,1.4-2.9l1-2.4c1.2-2.7,2.5-5.5,3.8-8.3c0.3-0.8,0.6-1.7,0.8-2.5c0.1-0.3,0.1-0.6,0.3-0.9c-0.1,0.2-0.3,0.3-0.4,0.6c-1.6,2.3-3.1,4.5-4.8,6.8c-0.4,0.8-1,1.4-1.5,2.1c-1.2,1.6-2.5,3.4-3.8,5.3c-0.8,1-1.8,1.8-2.8,2.5c-1,0.6-2.3,0.8-3.3,0.3c-1.1-0.4-2-1.5-2.4-2.7c-0.6-1.9,0-3.9,0.8-5.3c0.6-1.3,1.3-2.6,2-3.9c0.6-1,1.2-2.3,1.8-3.3c0.6-1.2,1.2-2.4,1-3.8c0-0.8-0.4-1.5-1-2c-0.3-0.3-0.8-0.3-1.3,0c-1.4,0.6-2.3,1.7-3,2.7c-0.6,0.8-1.4,1-2.1,0.6c-0.4-0.3-0.8-0.8-0.9-1c-0.2-0.5,0-0.9,0.3-1.4c1.4-2.1,3-3.4,5-4.2c2.3-0.9,4.5,0,6,2.3c1,1.6,1.2,3.4,0.8,5.3c-0.6,1.6-1.2,3.3-2,4.8c-0.4,0.9-0.9,2-1.3,2.8c-0.4,0.9-0.9,2-1.3,2.9c-0.3,0.6-0.3,1.2-0.5,2v0.1c0,0,0,0.1,0.2,0.3c0.2,0,0.2-0.1,0.3-0.1c0.3-0.3,0.5-0.5,0.8-0.8c0.8-0.8,1.4-1.5,2-2.3c1-1.7,2.3-3.3,3.3-4.8c0.9-1.5,2-2.8,2.9-4.3c1.2-1.7,2.2-3.2,3.5-4.5c1.1-1.2,2.1-1.8,3.1-2.1c1-0.1,2,0.1,2.9,0.8c0.9,0.8,1.4,1.8,1.5,2.9c0.1,1.5,0,2.8-0.6,4.3l-0.3,0.9c-0.9,2.5-2,5.1-3,7.7c-0.9,2.1-2,4.2-2.9,6.4c-0.9,2.1-1.9,4.2-2.8,6.4c-0.4,1.2-0.9,2.6-1.2,3.8c-0.2,0.3-0.2,0.8-0.3,1.1c0,0.1,0,0.1,0,0.3c0.3-0.2,0.6-0.3,0.9-0.6c2.1-1.5,3.9-3.4,5.7-5.4c2.7-3,5.7-6.3,8.7-9.3c1-1.2,2.4-2.1,3.7-2.6c1.4-0.6,2.7-0.4,3.8,0.2c1.1,0.6,1.8,1.7,2.1,3s0,2.7-0.1,3.6c-0.6,2.4-1.5,4.8-2.4,6.9c-0.3,0.6-0.4,1.2-0.8,1.8c-1.2,3-2.1,5.4-3,7.7c-0.2,0.4-0.2,0.9-0.3,1.3c0,0.3-0.1,0.5-0.1,0.8h0.1c0.5,0,1.1,0,1.4-0.1c1.6-0.6,3-2,4.3-3.2c0.9-0.9,1.8-1.8,2.7-2.6l0.2-0.1c0.9-0.9,1.8-0.9,2.8,0c0.8,0.6,1.4,1.2,2,1.8c0.4,0.4,0.6,0.9,0.6,1.3S78.5,71,78,71.3l-0.3,0.3c-2.4,2.4-4.8,4.8-7.9,6.5C67.5,78.6,66,79.1,64.5,79.1z"></path>
				</symbol>
				<symbol id="arrow" viewBox="0 0 120 72" enable-background="new 0 0 120 72">
					<path fill="#F03B4C" d="M12.4,0.9c-0.1,0.2-0.1,0.3-0.2,0.5c-0.4-0.9-2-1-2.5,0.2C9.6,1.9,9.5,2.2,9.4,2.4C8.6,2.6,8.1,3.7,8.7,4.5C7,9,5.4,13.5,3.7,18c-0.6,1.5-1.3,3-1.9,4.6c-0.1,0.2-0.1,0.5,0,0.7c-0.6,1.5-1.1,3.1-1.7,4.6c-0.4,1,0.5,1.6,1.3,1.6c0,0.2,0,0.3-0.1,0.5c0,0,0,0,0,0l0,0c0,0.1,0,0.2,0,0.3c-0.1,0.5,0.2,0.9,0.5,1.1c0,0,0,0.1,0,0.1c-0.5,1.7,2,2.3,2.6,0.7c1.2-3.3,2.3-6.6,3.5-9.9c0.3-0.3,0.4-0.4,0.8-1.4c0.1-0.3,0.1-0.6-0.1-0.8c0.7-2,1.4-4,2.1-6.1C15,32.2,28.3,47.5,44.9,56.4c4.3,2.3,8.8,4.2,13.4,5.6c18.3,9.6,41.4,14.2,60.3,4.9c0.7-0.3,0.2-1.5-0.5-1.2c-3.3,1.4-6.6,2.4-10,3c4-1.3,7.9-3.3,11.6-6.2c0.9-0.7,0.1-1.8-0.7-2c0.7-0.9-0.3-2.4-1.5-1.7c-2.4,1.4-4.9,2.5-7.5,3.4c-10.7,1.7-21.7,2.3-32.4,1.2c-2.2-0.4-4.4-0.9-6.6-1.5C65.6,60,60.7,57.5,56,54.7c-9.4-5.7-18.5-12.4-26.1-20.2c-1.2-1.2-2.3-2.5-3.4-3.8c-3-4.4-5.7-9-7.9-13.9c3.1,2.9,6.3,5.6,9.7,8.1c0.7,0.5,1.6,0,1.9-0.7c1.1,0.4,2.1-1.3,1.3-2.3c-0.9-1-1.7-2-2.6-3.1c0.5-0.5,0.7-1.2,0.1-1.9c-1-1-2-2-3.1-2.9c-4.2-4.1-7.9-8.6-11.2-13.6C14.2-0.3,12.8-0.1,12.4,0.9z M93.1,68.5c6.8,0,13.5-1.4,19.8-4.4c0.1,0,0.2,0,0.4-0.1C107,67.6,100.2,68.8,93.1,68.5z M13.9,4.7C13.9,4.6,14,4.4,14,4.2c0.3,0.4,0.6,0.8,0.9,1.3C14.6,5.2,14.2,5,13.9,4.7z M51.7,54.8c-1-0.5-2.1-1-3.1-1.6c-1.8-1.3-3.5-2.7-5.2-4.1C46.1,51.2,48.9,53,51.7,54.8z M33.4,45.6c-9.7-8.2-17.1-19-20.2-31.2c0.3,0.5,0.6,1.1,0.9,1.6C17.3,27.6,24.3,37.7,33.4,45.6z M24.4,31.9c1.3,1.9,2.6,3.7,4,5.4c-2-2.3-3.8-4.7-5.4-7.2C23.5,30.7,23.9,31.3,24.4,31.9z"></path>
				</symbol>
				<symbol id="phone" viewBox="0 0 256 512" enable-background="new 0 0 256 512">
					<path fill="#393939" d="M209.5,512c0,0,46.5,0,46.5-46.5V46.5C256,0,209.5,0,209.5,0H46.5C46.5,0,0,0,0,46.5v418.9C0,512,46.5,512,46.5,512H209.5z M128,492.6c-12.8,0-23.3-10.4-23.3-23.2c0-12.8,10.4-23.2,23.3-23.2c12.8,0,23.3,10.4,23.3,23.2S140.8,492.6,128,492.6z M93.1,28.4c0-2.9,1.4-5.1,3.1-5.1h63.6c1.7,0,3.1,2.3,3.1,5.1v1.4c0,2.9-1.4,5.1-3.1,5.1H96.2c-1.7,0-3.1-2.3-3.1-5.1C93.1,29.7,93.1,28.4,93.1,28.4z M23.3,58.1h209.5v371.8H23.3V58.1z"></path>
				</symbol>
				<symbol id="signature" viewBox="0 0 600 244" enable-background="new 0 0 600 244">
					
<svg width="598.1" height="69.302" viewBox="0 0 598.1 69.302"  xmlns="http://www.w3.org/2000/svg"><g id="svgGroup"   stroke-linecap="round" fill-rule="evenodd" font-size="9pt" stroke="#000" stroke-width="0.25mm" fill="white" style="stroke:#000;stroke-width:0.25mm;fill:white"><path d="M 323.875 68.924 A 5.102 5.102 0 0 0 324.8 69.001 A 8.869 8.869 0 0 0 325.688 68.954 Q 326.889 68.833 328.4 68.401 A 11.255 11.255 0 0 0 328.916 68.24 A 9.625 9.625 0 0 0 332.05 66.501 A 5.104 5.104 0 0 0 332.305 66.273 A 4.088 4.088 0 0 0 333.6 63.201 A 48.694 48.694 0 0 0 333.547 60.953 A 60.067 60.067 0 0 0 333.25 57.201 A 48.729 48.729 0 0 1 333.127 55.909 Q 333.006 54.442 332.949 52.772 A 91.155 91.155 0 0 1 332.9 49.701 Q 332.9 44.601 333.55 39.351 A 111.547 111.547 0 0 1 333.72 38.045 A 101.523 101.523 0 0 1 335.3 29.251 A 125.652 125.652 0 0 1 335.611 27.912 Q 336.569 23.895 337.6 20.801 A 10.239 10.239 0 0 1 338.275 19.373 Q 338.686 18.665 339.161 18.188 A 3.077 3.077 0 0 1 341.4 17.201 A 1.922 1.922 0 0 1 342.648 17.615 Q 343.38 18.207 343.655 19.644 A 9.438 9.438 0 0 1 343.8 20.901 Q 344.3 29.601 345.4 36.551 Q 346.122 41.112 346.93 44.532 A 55.269 55.269 0 0 0 347.8 47.801 Q 348.8 51.001 350.95 53.651 A 6.881 6.881 0 0 0 354.764 56.016 A 10.586 10.586 0 0 0 357.3 56.301 A 10.182 10.182 0 0 0 359.695 56.014 A 12.029 12.029 0 0 0 362.65 54.851 A 8.779 8.779 0 0 0 364.56 53.405 Q 365.382 52.601 366.166 51.505 A 22.654 22.654 0 0 0 367.6 49.201 A 54.744 54.744 0 0 0 369.42 45.607 A 71.566 71.566 0 0 0 371.35 41.001 Q 373.1 36.401 374.7 31.601 Q 376.3 26.801 377.6 22.601 A 15.558 15.558 0 0 1 377.901 21.62 Q 378.151 20.895 378.449 20.298 A 7.173 7.173 0 0 1 379.15 19.151 A 4.025 4.025 0 0 1 379.426 18.824 A 2.755 2.755 0 0 1 381.5 17.901 A 3.203 3.203 0 0 1 381.861 17.921 Q 382.133 17.951 382.346 18.032 A 1.078 1.078 0 0 1 383 18.651 A 2.786 2.786 0 0 1 383.104 18.97 Q 383.239 19.48 383.281 20.254 A 13.886 13.886 0 0 1 383.3 21.001 A 31.482 31.482 0 0 1 383.3 21.107 Q 383.29 24.011 382.75 29.951 Q 382.2 36.001 382.2 43.201 A 102.529 102.529 0 0 0 382.206 44.331 A 113.479 113.479 0 0 0 382.6 52.501 A 67.928 67.928 0 0 0 382.909 55.443 A 57.55 57.55 0 0 0 384 61.501 A 23.507 23.507 0 0 0 384.431 62.946 Q 384.814 64.092 385.28 65.045 A 11.521 11.521 0 0 0 386.4 66.901 A 4.801 4.801 0 0 0 389.219 68.706 A 7.618 7.618 0 0 0 391 68.901 Q 394.4 68.901 397.05 66.851 A 10.455 10.455 0 0 0 397.561 66.43 Q 398.286 65.792 398.766 65.111 A 4.796 4.796 0 0 0 399.7 62.301 Q 399.7 61.201 399.05 60.301 Q 398.4 59.401 397.6 58.701 A 17.535 17.535 0 0 1 395.43 55.695 A 21.365 21.365 0 0 1 393.55 51.301 A 41.973 41.973 0 0 1 392.931 49.064 A 47.579 47.579 0 0 1 391.75 41.901 A 118.809 118.809 0 0 1 391.513 38.825 A 100.867 100.867 0 0 1 391.3 32.401 Q 391.3 29.501 391.45 26.751 A 362.565 362.565 0 0 0 391.459 26.58 A 333.038 333.038 0 0 0 391.7 21.401 A 144.03 144.03 0 0 0 391.831 19.176 A 124.934 124.934 0 0 0 392 12.801 A 33.396 33.396 0 0 0 391.984 11.766 Q 391.844 7.255 390.45 5.051 Q 388.9 2.601 385.3 2.601 A 11.569 11.569 0 0 0 384.818 2.611 A 8.814 8.814 0 0 0 378.8 5.151 A 17.666 17.666 0 0 0 376.639 7.729 A 21.811 21.811 0 0 0 374.55 11.551 Q 372.9 15.401 371.6 19.201 Q 370.5 22.701 369.05 26.951 Q 367.6 31.201 366.1 35.001 A 82.136 82.136 0 0 1 366.035 35.166 Q 364.572 38.849 363.3 41.001 A 7.967 7.967 0 0 1 362.814 41.742 Q 362.397 42.302 361.941 42.673 A 3.014 3.014 0 0 1 360 43.401 A 2.192 2.192 0 0 1 358.525 42.848 Q 358.165 42.538 357.866 42.053 A 5.909 5.909 0 0 1 357.4 41.101 A 18.256 18.256 0 0 1 357.186 40.571 Q 356.534 38.886 355.919 36.398 A 72.032 72.032 0 0 1 355.3 33.651 Q 354.3 28.801 353.5 22.901 Q 352.7 17.001 352.1 11.201 A 21.945 21.945 0 0 0 352.063 10.806 Q 351.608 6.324 349.5 4.551 Q 347.3 2.701 344.5 2.701 Q 340.7 2.701 337.85 5.451 A 16.087 16.087 0 0 0 336.411 7.049 Q 334.427 9.555 332.8 13.401 A 89.156 89.156 0 0 0 332.649 13.775 Q 331.203 17.39 329.35 22.901 A 129.565 129.565 0 0 0 327.937 27.378 A 154.84 154.84 0 0 0 325.8 35.401 Q 324 43.301 322.75 51.301 A 130.088 130.088 0 0 0 322.423 53.516 Q 321.97 56.784 321.739 59.732 A 74.131 74.131 0 0 0 321.5 65.501 Q 321.5 66.801 322.2 67.901 A 2.084 2.084 0 0 0 322.997 68.63 Q 323.376 68.831 323.875 68.924 Z M 36.1 29.601 L 43.5 29.601 L 43.5 26.801 Q 43.5 18.394 41.352 11.948 A 34.432 34.432 0 0 0 41.2 11.501 A 19.992 19.992 0 0 1 40.91 10.759 Q 40.53 9.719 40.502 9.182 A 1.575 1.575 0 0 1 40.5 9.101 Q 40.5 7.546 42.043 6.171 A 9.111 9.111 0 0 1 43.05 5.401 A 10.251 10.251 0 0 1 45.914 4.05 A 8.977 8.977 0 0 1 48.4 3.701 A 6.602 6.602 0 0 1 49.902 3.86 A 3.68 3.68 0 0 1 52.55 5.951 Q 53.556 8.108 53.598 11.963 A 31.126 31.126 0 0 1 53.6 12.301 A 39.822 39.822 0 0 1 53.551 14.174 Q 53.444 16.439 53.1 19.601 Q 52.756 22.764 52.223 26.872 A 607.257 607.257 0 0 1 51.7 30.801 Q 50.845 37.453 50.351 41.892 A 335.791 335.791 0 0 0 50.3 42.351 Q 49.87 46.261 49.81 49.396 A 52.17 52.17 0 0 0 49.8 50.401 A 20.403 20.403 0 0 0 50.1 54.02 Q 50.809 57.951 53.2 60.201 A 6.467 6.467 0 0 1 53.938 61.23 Q 54.5 62.215 54.5 63.201 A 3.921 3.921 0 0 1 53.601 65.673 Q 53.148 66.249 52.466 66.779 A 9.505 9.505 0 0 1 51.8 67.251 A 10.735 10.735 0 0 1 47.702 68.808 A 14.392 14.392 0 0 1 45.3 69.001 Q 43.121 69.001 41.766 67.929 A 4.433 4.433 0 0 1 41.5 67.701 A 3.158 3.158 0 0 1 40.792 66.665 Q 40.322 65.618 40.171 63.886 A 20.687 20.687 0 0 1 40.1 62.101 Q 40.1 60.953 40.276 58.925 A 101.341 101.341 0 0 1 40.4 57.601 Q 40.7 54.601 41.4 50.001 Q 41.8 47.101 42.15 44.401 A 120.386 120.386 0 0 0 42.529 41.143 A 100.061 100.061 0 0 0 42.7 39.301 A 10.594 10.594 0 0 1 42.182 39.92 Q 41.916 40.213 41.657 40.445 A 5.299 5.299 0 0 1 41.35 40.701 A 1.945 1.945 0 0 1 40.58 41.053 Q 40.182 41.143 39.691 41.109 A 4.26 4.26 0 0 1 39.6 41.101 Q 36 40.901 32.45 40.751 Q 28.9 40.601 25.4 40.601 A 106.5 106.5 0 0 0 14.844 41.108 A 92.95 92.95 0 0 0 11.5 41.501 Q 11.425 42.029 11.378 43.097 A 55.47 55.47 0 0 0 11.35 43.851 Q 11.301 45.461 11.3 46.548 A 49.3 49.3 0 0 0 11.3 46.601 A 101.341 101.341 0 0 0 11.601 54.285 A 112.835 112.835 0 0 0 11.7 55.501 Q 12.1 60.101 12.5 63.701 Q 12.8 66.201 10.1 67.651 Q 7.4 69.101 4.3 69.101 A 7.999 7.999 0 0 1 2.901 68.99 Q 0.456 68.554 0.401 66.401 A 3.914 3.914 0 0 1 0.4 66.301 Q 0.4 65.538 0.673 64.319 A 19.235 19.235 0 0 1 0.7 64.201 Q 2.8 53.701 3.7 42.901 A 16.831 16.831 0 0 1 2.831 43.11 Q 1.922 43.301 1.3 43.301 A 0.823 0.823 0 0 1 0.513 42.779 Q 0.332 42.399 0.305 41.741 A 5.835 5.835 0 0 1 0.3 41.501 A 11.461 11.461 0 0 1 0.53 39.286 Q 0.825 37.789 1.5 36.101 Q 2.7 33.101 4.3 31.701 Q 4.3 26.401 4.05 22.851 A 42.73 42.73 0 0 0 3.745 19.908 Q 3.541 18.455 3.243 17.18 A 24.961 24.961 0 0 0 3.1 16.601 Q 2.4 13.901 0.9 11.401 A 11.554 11.554 0 0 1 0.528 10.784 Q 0.006 9.848 0 9.314 A 1.102 1.102 0 0 1 0 9.301 A 2.739 2.739 0 0 1 0.354 7.984 Q 0.691 7.362 1.35 6.751 A 11.494 11.494 0 0 1 3.258 5.334 A 14.624 14.624 0 0 1 4.65 4.601 A 10.876 10.876 0 0 1 6.251 4.002 Q 7.184 3.739 8.053 3.706 A 6.529 6.529 0 0 1 8.3 3.701 A 5.474 5.474 0 0 1 9.97 3.939 Q 11.631 4.47 12.4 6.182 A 5.771 5.771 0 0 1 12.55 6.551 Q 13.313 8.622 13.521 11.617 A 34.379 34.379 0 0 1 13.6 14.001 Q 13.523 15.686 13.33 18.484 A 469.494 469.494 0 0 1 13.2 20.301 A 270.299 270.299 0 0 1 12.933 23.643 Q 12.804 25.147 12.646 26.837 A 569.679 569.679 0 0 1 12.3 30.401 Q 18.6 30.001 24.6 29.801 Q 30.6 29.601 36.1 29.601 Z M 195.3 47.001 L 195.7 47.201 Q 197.7 41.901 200.55 37.301 A 28.792 28.792 0 0 1 204.004 32.752 A 23.453 23.453 0 0 1 207.2 29.901 A 14.377 14.377 0 0 1 215.689 27.104 A 17.659 17.659 0 0 1 216 27.101 Q 220.563 27.101 223.236 29.473 A 8.594 8.594 0 0 1 224.05 30.301 A 11.315 11.315 0 0 1 226.726 36.699 A 14.898 14.898 0 0 1 226.8 38.201 A 18.216 18.216 0 0 1 226.425 41.936 A 16.972 16.972 0 0 1 226.4 42.051 A 50.75 50.75 0 0 1 225.623 45.174 A 45.984 45.984 0 0 1 225.5 45.601 Q 225 47.201 224.6 48.851 Q 224.2 50.501 224.2 52.201 A 10.486 10.486 0 0 0 224.411 54.365 Q 224.708 55.772 225.421 56.859 A 6.419 6.419 0 0 0 225.7 57.251 A 7.907 7.907 0 0 0 229.43 59.91 A 9.663 9.663 0 0 0 229.7 60.001 A 3.587 3.587 0 0 1 230.131 60.153 Q 230.518 60.319 230.75 60.551 A 0.968 0.968 0 0 1 230.956 60.874 Q 231.077 61.169 231.096 61.624 A 4.214 4.214 0 0 1 231.1 61.801 Q 231.1 62.701 230.5 64.401 Q 229.9 66.101 228.3 67.551 Q 227.019 68.712 224.776 68.944 A 11.471 11.471 0 0 1 223.6 69.001 A 8.976 8.976 0 0 1 220.905 68.617 A 6.98 6.98 0 0 1 217.4 66.151 A 10.187 10.187 0 0 1 215.563 62.185 Q 215.2 60.629 215.2 58.801 A 23.227 23.227 0 0 1 215.582 54.66 A 25.769 25.769 0 0 1 215.65 54.301 A 54.002 54.002 0 0 1 216.534 50.496 A 48.602 48.602 0 0 1 216.7 49.901 Q 217.2 47.801 217.6 45.951 A 21.603 21.603 0 0 0 217.842 44.654 Q 217.936 44.039 217.974 43.501 A 9.912 9.912 0 0 0 218 42.801 A 6.328 6.328 0 0 0 217.754 40.953 Q 217.133 38.921 214.947 38.39 A 7.408 7.408 0 0 0 213.2 38.201 Q 209.2 38.201 206.15 41.051 A 22.76 22.76 0 0 0 202.612 45.318 A 28.91 28.91 0 0 0 200.95 48.251 Q 198.8 52.601 197.4 57.201 L 197.4 60.601 A 10.433 10.433 0 0 1 197.024 63.467 A 8.107 8.107 0 0 1 195.25 66.701 A 7.106 7.106 0 0 1 192.606 68.6 A 7.168 7.168 0 0 1 189.9 69.101 A 5.042 5.042 0 0 1 188.713 68.968 A 3.88 3.88 0 0 1 187.5 68.451 Q 186.536 67.825 186.687 66.781 A 2.201 2.201 0 0 1 186.7 66.701 Q 188.2 58.701 189.25 50.451 Q 190.3 42.201 190.3 33.801 Q 190.3 26.401 189.8 20.401 Q 189.3 14.401 186.6 8.901 Q 186.217 8.059 185.952 7.393 A 20.514 20.514 0 0 1 185.8 7.001 A 5.062 5.062 0 0 1 185.585 6.273 A 3.727 3.727 0 0 1 185.5 5.501 Q 185.5 3.601 187.75 1.801 Q 190 0.001 192.5 0.001 A 4.258 4.258 0 0 1 196.178 1.942 Q 196.863 2.923 197.3 4.401 A 24.299 24.299 0 0 1 197.957 7.384 Q 198.6 11.354 198.6 17.401 Q 198.6 26.213 197.722 33.085 A 80.385 80.385 0 0 1 197.4 35.351 A 370.812 370.812 0 0 1 196.819 38.948 Q 195.975 44.001 195.3 47.001 Z M 479.5 47.001 L 479.9 47.201 Q 481.9 41.901 484.75 37.301 A 28.792 28.792 0 0 1 488.204 32.752 A 23.453 23.453 0 0 1 491.4 29.901 A 14.377 14.377 0 0 1 499.889 27.104 A 17.659 17.659 0 0 1 500.2 27.101 Q 504.763 27.101 507.436 29.473 A 8.594 8.594 0 0 1 508.25 30.301 A 11.315 11.315 0 0 1 510.926 36.699 A 14.898 14.898 0 0 1 511 38.201 A 18.216 18.216 0 0 1 510.625 41.936 A 16.972 16.972 0 0 1 510.6 42.051 A 50.75 50.75 0 0 1 509.823 45.174 A 45.984 45.984 0 0 1 509.7 45.601 Q 509.2 47.201 508.8 48.851 Q 508.4 50.501 508.4 52.201 A 10.486 10.486 0 0 0 508.611 54.365 Q 508.908 55.772 509.621 56.859 A 6.419 6.419 0 0 0 509.9 57.251 A 7.907 7.907 0 0 0 513.63 59.91 A 9.663 9.663 0 0 0 513.9 60.001 A 3.587 3.587 0 0 1 514.331 60.153 Q 514.718 60.319 514.95 60.551 A 0.968 0.968 0 0 1 515.156 60.874 Q 515.277 61.169 515.296 61.624 A 4.214 4.214 0 0 1 515.3 61.801 Q 515.3 62.701 514.7 64.401 Q 514.1 66.101 512.5 67.551 Q 511.219 68.712 508.976 68.944 A 11.471 11.471 0 0 1 507.8 69.001 A 8.976 8.976 0 0 1 505.105 68.617 A 6.98 6.98 0 0 1 501.6 66.151 A 10.187 10.187 0 0 1 499.763 62.185 Q 499.4 60.629 499.4 58.801 A 23.227 23.227 0 0 1 499.782 54.66 A 25.769 25.769 0 0 1 499.85 54.301 A 54.002 54.002 0 0 1 500.734 50.496 A 48.602 48.602 0 0 1 500.9 49.901 Q 501.4 47.801 501.8 45.951 A 21.603 21.603 0 0 0 502.042 44.654 Q 502.136 44.039 502.174 43.501 A 9.912 9.912 0 0 0 502.2 42.801 A 6.328 6.328 0 0 0 501.954 40.953 Q 501.333 38.921 499.147 38.39 A 7.408 7.408 0 0 0 497.4 38.201 Q 493.4 38.201 490.35 41.051 A 22.76 22.76 0 0 0 486.812 45.318 A 28.91 28.91 0 0 0 485.15 48.251 Q 483 52.601 481.6 57.201 L 481.6 60.601 A 10.433 10.433 0 0 1 481.224 63.467 A 8.107 8.107 0 0 1 479.45 66.701 A 7.106 7.106 0 0 1 476.806 68.6 A 7.168 7.168 0 0 1 474.1 69.101 A 5.042 5.042 0 0 1 472.913 68.968 A 3.88 3.88 0 0 1 471.7 68.451 Q 470.736 67.825 470.887 66.781 A 2.201 2.201 0 0 1 470.9 66.701 Q 472.4 58.701 473.45 50.451 Q 474.5 42.201 474.5 33.801 Q 474.5 26.401 474 20.401 Q 473.5 14.401 470.8 8.901 Q 470.417 8.059 470.152 7.393 A 20.514 20.514 0 0 1 470 7.001 A 5.062 5.062 0 0 1 469.785 6.273 A 3.727 3.727 0 0 1 469.7 5.501 Q 469.7 3.601 471.95 1.801 Q 474.2 0.001 476.7 0.001 A 4.258 4.258 0 0 1 480.378 1.942 Q 481.063 2.923 481.5 4.401 A 24.299 24.299 0 0 1 482.157 7.384 Q 482.8 11.354 482.8 17.401 Q 482.8 26.213 481.922 33.085 A 80.385 80.385 0 0 1 481.6 35.351 A 370.812 370.812 0 0 1 481.019 38.948 Q 480.175 44.001 479.5 47.001 Z M 159.2 69.301 Q 155.5 69.301 152.3 68.201 A 15.624 15.624 0 0 1 149.564 66.972 A 11.801 11.801 0 0 1 147.1 65.101 A 6.54 6.54 0 0 1 145.1 60.389 A 7.786 7.786 0 0 1 145.1 60.301 Q 145.1 58.801 145.85 57.451 A 2.47 2.47 0 0 1 147.613 56.164 A 3.605 3.605 0 0 1 148.3 56.101 A 3.676 3.676 0 0 1 149.314 56.251 Q 149.72 56.367 150.143 56.573 A 6.133 6.133 0 0 1 150.2 56.601 A 17.042 17.042 0 0 0 151.691 57.33 Q 152.535 57.697 153.53 58.04 A 35.25 35.25 0 0 0 154.8 58.451 A 20.133 20.133 0 0 0 160.482 59.3 A 22.492 22.492 0 0 0 160.7 59.301 A 20.941 20.941 0 0 0 163.805 59.082 A 15.518 15.518 0 0 0 166.9 58.301 A 7.49 7.49 0 0 0 167.985 57.807 Q 168.515 57.507 168.871 57.156 A 2.26 2.26 0 0 0 169.6 55.501 A 1.667 1.667 0 0 0 168.887 54.128 Q 168.592 53.902 168.176 53.723 A 5.523 5.523 0 0 0 167.55 53.501 A 20.787 20.787 0 0 0 166.353 53.195 Q 164.974 52.88 162.896 52.54 A 127.158 127.158 0 0 0 160.7 52.201 Q 157.4 51.601 154.3 50.801 Q 151.2 50.001 149.2 48.051 A 6.193 6.193 0 0 1 147.625 45.411 Q 147.32 44.435 147.234 43.255 A 13.141 13.141 0 0 1 147.2 42.301 A 13.56 13.56 0 0 1 148.77 36.018 A 16.413 16.413 0 0 1 149.25 35.151 A 14.793 14.793 0 0 1 152.823 31.118 A 19.397 19.397 0 0 1 155.4 29.401 Q 159.369 27.175 165.026 27.104 A 29.831 29.831 0 0 1 165.4 27.101 Q 168.5 27.101 171.4 27.801 Q 174.095 28.452 175.927 29.707 A 9.805 9.805 0 0 1 176.2 29.901 A 5.236 5.236 0 0 1 177.311 30.985 A 3.948 3.948 0 0 1 178.1 33.401 A 4.955 4.955 0 0 1 177.082 36.405 A 6.347 6.347 0 0 1 176.85 36.701 Q 175.6 38.201 173.95 39.151 A 10.639 10.639 0 0 1 173.065 39.611 Q 172.127 40.039 171.405 40.093 A 2.732 2.732 0 0 1 171.2 40.101 Q 170.4 40.101 169.3 39.001 Q 167.6 37.601 165.55 37.051 A 15.705 15.705 0 0 0 161.875 36.506 A 14.601 14.601 0 0 0 161.5 36.501 A 16.372 16.372 0 0 0 159.573 36.608 Q 157.864 36.811 156.65 37.401 A 5.16 5.16 0 0 0 155.841 37.882 Q 155.435 38.182 155.187 38.526 A 1.964 1.964 0 0 0 154.8 39.701 Q 154.8 41.001 156.35 41.801 Q 157.668 42.482 159.529 42.837 A 18.186 18.186 0 0 0 160.2 42.951 Q 162.5 43.301 164.6 43.601 A 38.276 38.276 0 0 1 168.304 44.287 Q 171.569 45.072 173.8 46.351 A 6.445 6.445 0 0 1 176.931 50.678 A 11.036 11.036 0 0 1 177.2 53.201 A 14.251 14.251 0 0 1 176.04 58.756 A 18.071 18.071 0 0 1 175.05 60.751 A 16.53 16.53 0 0 1 169.951 66.2 A 19.975 19.975 0 0 1 168.85 66.901 A 16.906 16.906 0 0 1 163.025 68.991 A 22.675 22.675 0 0 1 159.2 69.301 Z M 443.4 69.301 Q 439.7 69.301 436.5 68.201 A 15.624 15.624 0 0 1 433.764 66.972 A 11.801 11.801 0 0 1 431.3 65.101 A 6.54 6.54 0 0 1 429.3 60.389 A 7.786 7.786 0 0 1 429.3 60.301 Q 429.3 58.801 430.05 57.451 A 2.47 2.47 0 0 1 431.813 56.164 A 3.605 3.605 0 0 1 432.5 56.101 A 3.676 3.676 0 0 1 433.514 56.251 Q 433.92 56.367 434.343 56.573 A 6.133 6.133 0 0 1 434.4 56.601 A 17.042 17.042 0 0 0 435.891 57.33 Q 436.735 57.697 437.73 58.04 A 35.25 35.25 0 0 0 439 58.451 A 20.133 20.133 0 0 0 444.682 59.3 A 22.492 22.492 0 0 0 444.9 59.301 A 20.941 20.941 0 0 0 448.005 59.082 A 15.518 15.518 0 0 0 451.1 58.301 A 7.49 7.49 0 0 0 452.185 57.807 Q 452.715 57.507 453.071 57.156 A 2.26 2.26 0 0 0 453.8 55.501 A 1.667 1.667 0 0 0 453.087 54.128 Q 452.792 53.902 452.376 53.723 A 5.523 5.523 0 0 0 451.75 53.501 A 20.787 20.787 0 0 0 450.553 53.195 Q 449.174 52.88 447.096 52.54 A 127.158 127.158 0 0 0 444.9 52.201 Q 441.6 51.601 438.5 50.801 Q 435.4 50.001 433.4 48.051 A 6.193 6.193 0 0 1 431.825 45.411 Q 431.52 44.435 431.434 43.255 A 13.141 13.141 0 0 1 431.4 42.301 A 13.56 13.56 0 0 1 432.97 36.018 A 16.413 16.413 0 0 1 433.45 35.151 A 14.793 14.793 0 0 1 437.023 31.118 A 19.397 19.397 0 0 1 439.6 29.401 Q 443.569 27.175 449.226 27.104 A 29.831 29.831 0 0 1 449.6 27.101 Q 452.7 27.101 455.6 27.801 Q 458.295 28.452 460.127 29.707 A 9.805 9.805 0 0 1 460.4 29.901 A 5.236 5.236 0 0 1 461.511 30.985 A 3.948 3.948 0 0 1 462.3 33.401 A 4.955 4.955 0 0 1 461.282 36.405 A 6.347 6.347 0 0 1 461.05 36.701 Q 459.8 38.201 458.15 39.151 A 10.639 10.639 0 0 1 457.265 39.611 Q 456.327 40.039 455.605 40.093 A 2.732 2.732 0 0 1 455.4 40.101 Q 454.6 40.101 453.5 39.001 Q 451.8 37.601 449.75 37.051 A 15.705 15.705 0 0 0 446.075 36.506 A 14.601 14.601 0 0 0 445.7 36.501 A 16.372 16.372 0 0 0 443.773 36.608 Q 442.064 36.811 440.85 37.401 A 5.16 5.16 0 0 0 440.041 37.882 Q 439.635 38.182 439.387 38.526 A 1.964 1.964 0 0 0 439 39.701 Q 439 41.001 440.55 41.801 Q 441.868 42.482 443.729 42.837 A 18.186 18.186 0 0 0 444.4 42.951 Q 446.7 43.301 448.8 43.601 A 38.276 38.276 0 0 1 452.504 44.287 Q 455.769 45.072 458 46.351 A 6.445 6.445 0 0 1 461.131 50.678 A 11.036 11.036 0 0 1 461.4 53.201 A 14.251 14.251 0 0 1 460.24 58.756 A 18.071 18.071 0 0 1 459.25 60.751 A 16.53 16.53 0 0 1 454.151 66.2 A 19.975 19.975 0 0 1 453.05 66.901 A 16.906 16.906 0 0 1 447.225 68.991 A 22.675 22.675 0 0 1 443.4 69.301 Z M 70.671 68.729 A 15.581 15.581 0 0 0 75 69.301 A 19.528 19.528 0 0 0 76.037 69.274 A 15.604 15.604 0 0 0 84.75 66.201 A 23.243 23.243 0 0 0 87.086 64.202 A 25.577 25.577 0 0 0 91.6 58.201 A 22.565 22.565 0 0 0 91.725 60.641 Q 91.896 62.213 92.302 63.511 A 9.549 9.549 0 0 0 93.7 66.351 A 6.662 6.662 0 0 0 97.129 68.833 A 8.527 8.527 0 0 0 99.7 69.201 Q 102.6 69.201 104.15 67.851 A 8.263 8.263 0 0 0 104.963 67.042 A 6.406 6.406 0 0 0 106.25 64.801 Q 106.8 63.101 106.8 62.001 Q 106.8 60.701 106.25 60.301 A 2.723 2.723 0 0 0 106.01 60.146 Q 105.515 59.86 104.8 59.701 A 7.998 7.998 0 0 1 103.692 59.392 A 5.557 5.557 0 0 1 100.25 56.051 Q 99.1 53.101 99.1 49.301 Q 99.1 47.301 99.3 45.301 Q 99.5 43.301 99.9 41.201 A 22.916 22.916 0 0 0 100.061 41.245 Q 100.784 41.436 101.174 41.485 A 1.869 1.869 0 0 0 101.4 41.501 A 2.379 2.379 0 0 0 101.545 41.497 A 1.782 1.782 0 0 0 102.85 40.851 Q 103.4 40.201 103.7 39.401 A 8.561 8.561 0 0 0 103.886 38.751 Q 103.974 38.397 104.051 37.983 A 20.27 20.27 0 0 0 104.2 37.051 A 33.935 33.935 0 0 0 104.217 36.924 Q 104.34 36.007 104.38 35.318 A 10.647 10.647 0 0 0 104.4 34.701 A 5.011 5.011 0 0 0 103.697 32.095 Q 103.124 31.129 102.083 30.324 A 10.848 10.848 0 0 0 100.15 29.151 A 17.47 17.47 0 0 0 99.305 28.771 Q 97.111 27.853 94.486 27.44 A 29.502 29.502 0 0 0 89.9 27.101 Q 83.4 27.101 78.2 29.501 Q 73 31.901 69.3 35.901 Q 65.6 39.901 63.65 44.851 A 30.534 30.534 0 0 0 63.414 45.47 A 26.779 26.779 0 0 0 61.7 54.801 A 24.822 24.822 0 0 0 61.747 56.346 Q 61.887 58.599 62.449 60.478 A 12.112 12.112 0 0 0 65.35 65.551 A 11.895 11.895 0 0 0 70.671 68.729 Z M 561.971 68.729 A 15.581 15.581 0 0 0 566.3 69.301 A 19.528 19.528 0 0 0 567.337 69.274 A 15.604 15.604 0 0 0 576.05 66.201 A 23.243 23.243 0 0 0 578.386 64.202 A 25.577 25.577 0 0 0 582.9 58.201 A 22.565 22.565 0 0 0 583.025 60.641 Q 583.196 62.213 583.602 63.511 A 9.549 9.549 0 0 0 585 66.351 A 6.662 6.662 0 0 0 588.429 68.833 A 8.527 8.527 0 0 0 591 69.201 Q 593.9 69.201 595.45 67.851 A 8.263 8.263 0 0 0 596.263 67.042 A 6.406 6.406 0 0 0 597.55 64.801 Q 598.1 63.101 598.1 62.001 Q 598.1 60.701 597.55 60.301 A 2.723 2.723 0 0 0 597.31 60.146 Q 596.815 59.86 596.1 59.701 A 7.998 7.998 0 0 1 594.992 59.392 A 5.557 5.557 0 0 1 591.55 56.051 Q 590.4 53.101 590.4 49.301 Q 590.4 47.301 590.6 45.301 Q 590.8 43.301 591.2 41.201 A 22.916 22.916 0 0 0 591.361 41.245 Q 592.084 41.436 592.474 41.485 A 1.869 1.869 0 0 0 592.7 41.501 A 2.379 2.379 0 0 0 592.845 41.497 A 1.782 1.782 0 0 0 594.15 40.851 Q 594.7 40.201 595 39.401 A 8.561 8.561 0 0 0 595.186 38.751 Q 595.274 38.397 595.351 37.983 A 20.27 20.27 0 0 0 595.5 37.051 A 33.935 33.935 0 0 0 595.517 36.924 Q 595.64 36.007 595.68 35.318 A 10.647 10.647 0 0 0 595.7 34.701 A 5.011 5.011 0 0 0 594.997 32.095 Q 594.424 31.129 593.383 30.324 A 10.848 10.848 0 0 0 591.45 29.151 A 17.47 17.47 0 0 0 590.605 28.771 Q 588.411 27.853 585.786 27.44 A 29.502 29.502 0 0 0 581.2 27.101 Q 574.7 27.101 569.5 29.501 Q 564.3 31.901 560.6 35.901 Q 556.9 39.901 554.95 44.851 A 30.534 30.534 0 0 0 554.714 45.47 A 26.779 26.779 0 0 0 553 54.801 A 24.822 24.822 0 0 0 553.047 56.346 Q 553.187 58.599 553.749 60.478 A 12.112 12.112 0 0 0 556.65 65.551 A 11.895 11.895 0 0 0 561.971 68.729 Z M 268.15 65.251 A 8.429 8.429 0 0 0 269.671 67.006 Q 272.308 69.301 276.9 69.301 A 17.958 17.958 0 0 0 280.109 69.026 A 13.166 13.166 0 0 0 285.2 67.001 A 9.736 9.736 0 0 0 286.919 65.548 A 5.956 5.956 0 0 0 288.6 61.401 A 4.423 4.423 0 0 0 288.554 60.739 Q 288.502 60.396 288.391 60.124 A 1.61 1.61 0 0 0 287.9 59.451 A 1.759 1.759 0 0 0 287.609 59.268 Q 286.887 58.901 285.5 58.901 A 23.877 23.877 0 0 1 282.796 58.757 Q 281.198 58.575 279.885 58.161 A 9.662 9.662 0 0 1 277.1 56.801 A 5.451 5.451 0 0 1 276.957 56.694 Q 274.929 55.122 274.393 51.646 A 18.061 18.061 0 0 1 274.2 48.901 Q 274.2 47.439 274.374 45.771 A 43.175 43.175 0 0 1 274.75 43.051 Q 275.3 39.801 276 36.701 A 47.436 47.436 0 0 1 277.207 36.716 Q 278.18 36.741 279.043 36.807 A 24.498 24.498 0 0 1 280.8 37.001 A 66.471 66.471 0 0 1 282.009 37.193 Q 282.578 37.29 283.075 37.386 A 29.407 29.407 0 0 1 284.1 37.601 Q 284.725 37.726 285.233 37.812 A 22.399 22.399 0 0 0 285.8 37.901 A 24.198 24.198 0 0 0 285.806 37.902 Q 286.501 38.001 286.8 38.001 A 1.67 1.67 0 0 0 287.539 37.826 Q 288.219 37.494 288.835 36.536 A 8.641 8.641 0 0 0 289.35 35.601 A 12.88 12.88 0 0 0 289.798 34.551 A 10.632 10.632 0 0 0 290.5 30.801 Q 290.5 29.633 290.178 28.852 A 2.411 2.411 0 0 0 289.25 27.701 A 4.285 4.285 0 0 0 288.249 27.24 Q 287.197 26.901 285.7 26.901 A 22.301 22.301 0 0 0 284.787 26.92 A 25.54 25.54 0 0 0 281.95 27.201 Q 280 27.501 278.1 27.901 Q 278.3 26.801 278.45 25.751 A 15.809 15.809 0 0 0 278.468 25.62 A 14.408 14.408 0 0 0 278.6 23.701 Q 278.6 21.95 278.133 21.006 A 1.815 1.815 0 0 0 276.4 19.901 A 3.734 3.734 0 0 0 276.044 19.919 Q 274.876 20.031 273.416 20.862 A 14.905 14.905 0 0 0 272.05 21.751 A 32.126 32.126 0 0 0 269.779 23.568 A 41.148 41.148 0 0 0 266.95 26.301 A 38.951 38.951 0 0 0 265.157 28.333 A 31.55 31.55 0 0 0 262.7 31.751 Q 261.584 33.556 261.201 34.995 A 5.479 5.479 0 0 0 261 36.401 Q 261 38.201 263.2 38.201 Q 265.3 38.201 267.4 37.601 A 97.836 97.836 0 0 1 267.265 38.808 A 114.592 114.592 0 0 1 266.9 41.601 Q 266.6 43.701 266.3 45.901 Q 266 48.101 265.75 50.301 Q 265.5 52.501 265.5 54.801 A 29.14 29.14 0 0 0 265.531 56.152 Q 265.785 61.637 268.15 65.251 Z M 117.998 69.039 A 7.573 7.573 0 0 0 119 69.101 Q 122.5 69.101 124.55 66.701 A 8.244 8.244 0 0 0 126.262 63.393 A 10.967 10.967 0 0 0 126.6 60.601 Q 126.6 59.401 126.55 56.801 Q 126.5 54.201 126.4 51.701 A 35.895 35.895 0 0 1 126.674 48.139 Q 127.223 43.925 128.8 41.201 Q 131 37.401 133.9 37.401 A 3.821 3.821 0 0 1 135.993 37.995 A 4.644 4.644 0 0 1 137.1 39.001 A 1.611 1.611 0 0 0 137.319 39.242 A 1.134 1.134 0 0 0 137.8 39.501 A 4.231 4.231 0 0 0 137.973 39.541 Q 138.113 39.57 138.24 39.585 A 2.204 2.204 0 0 0 138.5 39.601 A 2.756 2.756 0 0 0 138.641 39.598 Q 139.905 39.533 141.144 38.307 A 9.276 9.276 0 0 0 142.05 37.251 A 10.214 10.214 0 0 0 142.412 36.733 A 8.148 8.148 0 0 0 143.8 32.201 A 6.378 6.378 0 0 0 143.641 30.73 A 3.871 3.871 0 0 0 142 28.301 Q 140.917 27.579 139.509 27.292 A 10.036 10.036 0 0 0 137.5 27.101 Q 133.5 27.101 130.85 29.451 A 14.009 14.009 0 0 0 130.734 29.555 Q 129.312 30.845 128.138 32.617 A 22.391 22.391 0 0 0 126.4 35.801 Q 126.4 33.664 125.973 31.985 A 9.232 9.232 0 0 0 125.05 29.651 Q 124.08 27.962 122.05 27.487 A 7.683 7.683 0 0 0 120.3 27.301 A 10.216 10.216 0 0 0 119.424 27.338 A 8.253 8.253 0 0 0 115.7 28.551 A 11.61 11.61 0 0 0 114.431 29.464 A 9.03 9.03 0 0 0 112.6 31.501 Q 111.977 32.464 111.707 33.331 A 4.266 4.266 0 0 0 111.5 34.601 A 2.438 2.438 0 0 0 111.548 35.1 A 1.634 1.634 0 0 0 112.05 36.001 Q 112.6 36.501 113.3 36.801 Q 114.9 37.301 116 38.251 A 3.16 3.16 0 0 1 116.209 38.449 Q 116.866 39.13 117.349 40.392 A 12.483 12.483 0 0 1 117.75 41.651 Q 118.4 44.101 118.4 49.401 A 46.511 46.511 0 0 1 118.341 51.735 A 53.596 53.596 0 0 1 117.65 57.951 Q 116.9 62.401 115.8 66.701 A 2.987 2.987 0 0 0 115.748 66.984 Q 115.607 68.063 116.45 68.551 A 3.43 3.43 0 0 0 117.069 68.828 Q 117.489 68.971 117.998 69.039 Z M 526.698 69.039 A 7.573 7.573 0 0 0 527.7 69.101 Q 531.2 69.101 533.25 66.701 A 8.244 8.244 0 0 0 534.962 63.393 A 10.967 10.967 0 0 0 535.3 60.601 Q 535.3 59.401 535.25 56.801 Q 535.2 54.201 535.1 51.701 A 35.895 35.895 0 0 1 535.374 48.139 Q 535.923 43.925 537.5 41.201 Q 539.7 37.401 542.6 37.401 A 3.821 3.821 0 0 1 544.693 37.995 A 4.644 4.644 0 0 1 545.8 39.001 A 1.611 1.611 0 0 0 546.019 39.242 A 1.134 1.134 0 0 0 546.5 39.501 A 4.231 4.231 0 0 0 546.673 39.541 Q 546.813 39.57 546.94 39.585 A 2.204 2.204 0 0 0 547.2 39.601 A 2.756 2.756 0 0 0 547.341 39.598 Q 548.605 39.533 549.844 38.307 A 9.276 9.276 0 0 0 550.75 37.251 A 10.214 10.214 0 0 0 551.112 36.733 A 8.148 8.148 0 0 0 552.5 32.201 A 6.378 6.378 0 0 0 552.341 30.73 A 3.871 3.871 0 0 0 550.7 28.301 Q 549.617 27.579 548.209 27.292 A 10.036 10.036 0 0 0 546.2 27.101 Q 542.2 27.101 539.55 29.451 A 14.009 14.009 0 0 0 539.434 29.555 Q 538.012 30.845 536.838 32.617 A 22.391 22.391 0 0 0 535.1 35.801 Q 535.1 33.664 534.673 31.985 A 9.232 9.232 0 0 0 533.75 29.651 Q 532.78 27.962 530.75 27.487 A 7.683 7.683 0 0 0 529 27.301 A 10.216 10.216 0 0 0 528.124 27.338 A 8.253 8.253 0 0 0 524.4 28.551 A 11.61 11.61 0 0 0 523.131 29.464 A 9.03 9.03 0 0 0 521.3 31.501 Q 520.677 32.464 520.407 33.331 A 4.266 4.266 0 0 0 520.2 34.601 A 2.438 2.438 0 0 0 520.248 35.1 A 1.634 1.634 0 0 0 520.75 36.001 Q 521.3 36.501 522 36.801 Q 523.6 37.301 524.7 38.251 A 3.16 3.16 0 0 1 524.909 38.449 Q 525.566 39.13 526.049 40.392 A 12.483 12.483 0 0 1 526.45 41.651 Q 527.1 44.101 527.1 49.401 A 46.511 46.511 0 0 1 527.041 51.735 A 53.596 53.596 0 0 1 526.35 57.951 Q 525.6 62.401 524.5 66.701 A 2.987 2.987 0 0 0 524.448 66.984 Q 524.307 68.063 525.15 68.551 A 3.43 3.43 0 0 0 525.769 68.828 Q 526.189 68.971 526.698 69.039 Z M 241.3 67.351 A 5.305 5.305 0 0 0 241.815 67.791 Q 243.431 69.001 246 69.001 A 14.091 14.091 0 0 0 247.032 68.965 Q 248.129 68.884 249.054 68.626 A 6.904 6.904 0 0 0 251.25 67.601 A 12.253 12.253 0 0 0 251.478 67.434 Q 252.255 66.848 252.836 66.211 A 6.902 6.902 0 0 0 254 64.501 A 16.444 16.444 0 0 0 254.339 63.734 Q 254.639 63.002 254.744 62.49 A 2.472 2.472 0 0 0 254.8 62.001 A 2.125 2.125 0 0 0 254.797 61.882 Q 254.765 61.312 254.422 60.915 A 1.897 1.897 0 0 0 253.9 60.501 A 18.579 18.579 0 0 1 252.97 60.004 Q 252.236 59.583 251.64 59.142 A 8.99 8.99 0 0 1 250.5 58.151 A 3.716 3.716 0 0 1 249.823 57.158 Q 249.3 56.053 249.3 54.401 Q 249.3 53.001 249.5 51.401 Q 249.7 49.801 250.1 47.901 Q 250.6 45.301 251.1 42.251 Q 251.6 39.201 251.6 36.001 Q 251.6 33.901 251.2 31.901 Q 250.8 29.901 249.65 28.601 A 3.355 3.355 0 0 0 248.632 27.826 Q 248.07 27.543 247.349 27.413 A 7.59 7.59 0 0 0 246 27.301 A 9.046 9.046 0 0 0 244.93 27.364 A 9.507 9.507 0 0 0 241.55 28.451 A 13.16 13.16 0 0 0 240 29.418 A 10.085 10.085 0 0 0 238.1 31.201 A 8.183 8.183 0 0 0 237.574 31.922 Q 237.239 32.441 237.049 32.938 A 3.527 3.527 0 0 0 236.8 34.201 A 3.029 3.029 0 0 0 236.8 34.221 Q 236.808 35.408 237.75 36.151 Q 238.7 36.901 240 37.601 Q 241.7 38.401 242.2 40.051 Q 242.7 41.701 242.7 43.501 A 28.635 28.635 0 0 1 242.664 44.94 A 24.4 24.4 0 0 1 242.25 48.401 Q 241.8 50.701 241.1 52.901 Q 240.5 55.001 240.05 57.201 Q 239.6 59.401 239.6 61.701 Q 239.6 64.139 240.231 65.704 A 4.716 4.716 0 0 0 241.3 67.351 Z M 409.2 67.351 A 5.305 5.305 0 0 0 409.715 67.791 Q 411.331 69.001 413.9 69.001 A 14.091 14.091 0 0 0 414.932 68.965 Q 416.029 68.884 416.954 68.626 A 6.904 6.904 0 0 0 419.15 67.601 A 12.253 12.253 0 0 0 419.378 67.434 Q 420.155 66.848 420.736 66.211 A 6.902 6.902 0 0 0 421.9 64.501 A 16.444 16.444 0 0 0 422.239 63.734 Q 422.539 63.002 422.644 62.49 A 2.472 2.472 0 0 0 422.7 62.001 A 2.125 2.125 0 0 0 422.697 61.882 Q 422.665 61.312 422.322 60.915 A 1.897 1.897 0 0 0 421.8 60.501 A 18.579 18.579 0 0 1 420.87 60.004 Q 420.136 59.583 419.54 59.142 A 8.99 8.99 0 0 1 418.4 58.151 A 3.716 3.716 0 0 1 417.723 57.158 Q 417.2 56.053 417.2 54.401 Q 417.2 53.001 417.4 51.401 Q 417.6 49.801 418 47.901 Q 418.5 45.301 419 42.251 Q 419.5 39.201 419.5 36.001 Q 419.5 33.901 419.1 31.901 Q 418.7 29.901 417.55 28.601 A 3.355 3.355 0 0 0 416.532 27.826 Q 415.97 27.543 415.249 27.413 A 7.59 7.59 0 0 0 413.9 27.301 A 9.046 9.046 0 0 0 412.83 27.364 A 9.507 9.507 0 0 0 409.45 28.451 A 13.16 13.16 0 0 0 407.9 29.418 A 10.085 10.085 0 0 0 406 31.201 A 8.183 8.183 0 0 0 405.474 31.922 Q 405.139 32.441 404.949 32.938 A 3.527 3.527 0 0 0 404.7 34.201 A 3.029 3.029 0 0 0 404.7 34.221 Q 404.708 35.408 405.65 36.151 Q 406.6 36.901 407.9 37.601 Q 409.6 38.401 410.1 40.051 Q 410.6 41.701 410.6 43.501 A 28.635 28.635 0 0 1 410.564 44.94 A 24.4 24.4 0 0 1 410.15 48.401 Q 409.7 50.701 409 52.901 Q 408.4 55.001 407.95 57.201 Q 407.5 59.401 407.5 61.701 Q 407.5 64.139 408.131 65.704 A 4.716 4.716 0 0 0 409.2 67.351 Z M 78.2 58.901 Q 82.2 58.901 85.25 56.401 A 16.93 16.93 0 0 0 89.947 50.22 A 19.591 19.591 0 0 0 90 50.101 A 23.939 23.939 0 0 0 91.369 46.248 A 27.933 27.933 0 0 0 91.7 44.851 Q 92.3 42.001 92.5 39.201 A 16.899 16.899 0 0 0 90.46 38.406 A 22.279 22.279 0 0 0 88.6 37.901 A 20.568 20.568 0 0 0 84.309 37.403 A 22.856 22.856 0 0 0 84 37.401 A 16.926 16.926 0 0 0 79.256 38.036 A 13.274 13.274 0 0 0 73.95 41.001 Q 70 44.601 70 50.001 A 11.845 11.845 0 0 0 70.309 52.783 A 8.304 8.304 0 0 0 72.2 56.451 Q 74.4 58.901 78.2 58.901 Z M 569.5 58.901 Q 573.5 58.901 576.55 56.401 A 16.93 16.93 0 0 0 581.247 50.22 A 19.591 19.591 0 0 0 581.3 50.101 A 23.939 23.939 0 0 0 582.669 46.248 A 27.933 27.933 0 0 0 583 44.851 Q 583.6 42.001 583.8 39.201 A 16.899 16.899 0 0 0 581.76 38.406 A 22.279 22.279 0 0 0 579.9 37.901 A 20.568 20.568 0 0 0 575.609 37.403 A 22.856 22.856 0 0 0 575.3 37.401 A 16.926 16.926 0 0 0 570.556 38.036 A 13.274 13.274 0 0 0 565.25 41.001 Q 561.3 44.601 561.3 50.001 A 11.845 11.845 0 0 0 561.609 52.783 A 8.304 8.304 0 0 0 563.5 56.451 Q 565.7 58.901 569.5 58.901 Z M 245.9 18.301 Q 243.1 18.201 241.4 16.601 A 5.219 5.219 0 0 1 239.901 13.941 A 7.936 7.936 0 0 1 239.7 12.101 A 8.133 8.133 0 0 1 240.144 9.629 A 6.68 6.68 0 0 1 241.8 7.051 Q 243.702 5.196 246.6 5.196 A 9.299 9.299 0 0 1 246.9 5.201 Q 249.8 5.301 251.45 6.901 A 4.968 4.968 0 0 1 252.838 9.45 Q 253.006 10.2 253.006 11.074 A 9.494 9.494 0 0 1 253 11.401 A 8.091 8.091 0 0 1 252.54 13.904 A 6.787 6.787 0 0 1 251 16.351 A 6.33 6.33 0 0 1 247.441 18.176 A 9.061 9.061 0 0 1 245.9 18.301 Z M 413.8 18.301 Q 411 18.201 409.3 16.601 A 5.219 5.219 0 0 1 407.801 13.941 A 7.936 7.936 0 0 1 407.6 12.101 A 8.133 8.133 0 0 1 408.044 9.629 A 6.68 6.68 0 0 1 409.7 7.051 Q 411.602 5.196 414.5 5.196 A 9.299 9.299 0 0 1 414.8 5.201 Q 417.7 5.301 419.35 6.901 A 4.968 4.968 0 0 1 420.738 9.45 Q 420.906 10.2 420.906 11.074 A 9.494 9.494 0 0 1 420.9 11.401 A 8.091 8.091 0 0 1 420.44 13.904 A 6.787 6.787 0 0 1 418.9 16.351 A 6.33 6.33 0 0 1 415.341 18.176 A 9.061 9.061 0 0 1 413.8 18.301 Z" vector-effect="non-scaling-stroke"/></g></svg>
				</symbol>
				<symbol id="swipeup" viewBox="0 0 120 120" enable-background="new 0 0 120 120">
					<path fill="#DDF03B" d="M17.351,30.487c-1.732-3.02-3.35-6.171-4.843-9.45c-0.436-0.959-1.52-1.328-2.434-0.788c-3.111,1.843-6.187,3.85-9.213,6.02c-0.648,0.466-0.933,0.983-0.846,1.828c0.089,0.846,0.699,1.153,1.409,1.32c1.761,0.41,3.522,0.819,5.283,1.23c-5.056,22.236-4.31,45.479,2.24,67.417c0.388,1.309,1.951,2.229,3.095,1.848c1.143-0.383,1.886-2.007,1.515-3.258C7.254,75.533,6.534,53.153,11.403,31.74c1.369,0.319,2.738,0.638,4.107,0.957c0.713,0.166,1.384,0.174,1.816-0.439C17.756,31.645,17.722,31.135,17.351,30.487z"></path><path fill="#DDF03B" d="M111.67,46.175c-5.78-6.181-32.83-16.193-33.979-16.616c-0.695-0.256-1.43-0.385-2.182-0.385c-3.112,0-6.174,2.234-7.281,5.311c-0.167,0.466-0.432,1.708-0.496,3.061c-0.742-0.211-1.506-0.318-2.276-0.318c-3.531,0-6.715,2.258-7.923,5.617c-0.665,1.848-0.682,3.827-0.063,5.662c-3.498-0.119-6.491,1.869-7.665,5.136c-0.771,2.14-0.646,4.421,0.348,6.425l-21.296-6.983c-1.139-0.419-2.304-0.633-3.462-0.633c-3.653,0-6.686,2.118-7.913,5.529c-1.643,4.574,0.766,9.369,5.642,11.165l36.528,12.57c0.166,1.108,0.57,2.848,1.536,5.239c2.563,6.336,11.746,12.891,22.674,12.891c2.167,0,4.329-0.261,6.428-0.774C104.74,95.54,113,88.208,117.911,74.552C123.113,60.083,117.68,52.6,111.67,46.175z M114.515,73.3c-4.505,12.528-11.769,18.965-25.075,22.216c-1.822,0.445-3.699,0.672-5.58,0.672c-9.286,0-17.265-5.512-19.33-10.62c-0.389-0.962-0.67-1.786-0.87-2.471l11.93,4.104c0.946,0.323,1.971-0.187,2.291-1.144c0.32-0.957-0.183-1.995-1.13-2.32L24.32,65.694c-2.998-1.103-4.414-3.762-3.444-6.463c0.947-2.632,3.678-3.834,6.805-2.689l32.103,10.53c0.877,0.288,1.837-0.144,2.21-1.002c0.373-0.86,0.043-1.864-0.762-2.329l-4.782-2.746c-0.088-0.05-0.179-0.093-0.275-0.127c-1.247-0.458-2.238-1.323-2.792-2.433c-0.546-1.096-0.612-2.353-0.185-3.54c0.626-1.739,2.07-2.736,3.964-2.736c0.662,0,1.339,0.126,2.014,0.374l3.387,1.247c0.002,0.001,0.006,0.001,0.008,0.002c0.938,0.346,1.974-0.144,2.315-1.094c0.341-0.949-0.142-1.998-1.079-2.343c-1.209-0.445-2.174-1.341-2.718-2.521c-0.543-1.181-0.601-2.505-0.161-3.728c0.69-1.92,2.51-3.211,4.529-3.211c0.56,0,1.114,0.1,1.648,0.296l7.356,2.71c0.933,0.344,1.974-0.143,2.315-1.092s-0.142-1.999-1.079-2.344l-4.322-1.592c-0.084-0.808-0.039-2.319,0.251-3.127c0.708-1.965,3.103-3.376,4.832-2.738c7.601,2.8,28.275,11.078,32.592,15.694C114.704,54.74,119.021,60.766,114.515,73.3z"></path>
				</symbol>
				<symbol id="mousewheeldown" viewBox="0 0 120 120" enable-background="new 0 0 120 120">
					<path fill="#DDF03B" d="M71.122,7.6c10.592,0,19.331,8.667,19.331,19.467v54.667C90.453,98.667,76.815,112.4,60,112.4S29.547,98.667,29.547,81.733V27.067C29.547,16.4,38.153,7.6,48.878,7.6H71.122 M71.122,0H48.878C34.049,0,22,12.133,22,27.067v54.667C22,102.8,38.948,120,60,120l0,0c21.052,0,38-17.2,38-38.267V27.067C98,12.133,85.951,0,71.122,0L71.122,0z"></path><path fill="#DDF03B" d="M60,62.5c-0.3,0-0.7-0.1-1-0.3L50.2,56c-0.8-0.5-1-1.6-0.4-2.4c0.5-0.8,1.6-1,2.4-0.4l7.8,5.5l7.8-5.5c0.8-0.5,1.8-0.4,2.4,0.4c0.5,0.8,0.4,1.8-0.4,2.4L61,62.2C60.7,62.4,60.3,62.5,60,62.5z"></path><path fill="#DDF03B" d="M60.1,75.8c-0.3,0-0.7-0.1-1-0.3l-8.8-6.2c-0.8-0.5-1-1.6-0.4-2.4c0.5-0.8,1.6-1,2.4-0.4l7.8,5.5l7.8-5.5c0.8-0.5,1.8-0.4,2.4,0.4c0.5,0.8,0.4,1.8-0.4,2.4l-8.8,6.2C60.8,75.7,60.5,75.8,60.1,75.8z"></path><path fill="#DDF03B" d="M60,88.8c-0.3,0-0.7-0.1-1-0.3l-8.8-6.2c-0.8-0.5-1-1.6-0.4-2.4c0.6-0.8,1.6-1,2.4-0.4L60,85l7.8-5.5c0.8-0.5,1.8-0.4,2.4,0.4c0.5,0.8,0.4,1.8-0.4,2.4L61,88.5C60.7,88.7,60.3,88.8,60,88.8z"></path><path fill="#DDF03B" d="M60,46.3c-1.9,0-3.4-1.5-3.4-3.4v-7.5c0-1.9,1.5-3.4,3.4-3.4s3.4,1.5,3.4,3.4v7.5C63.4,44.8,61.9,46.3,60,46.3z"></path>
				</symbol>
				<symbol id="ui-icon-Share" viewBox="0 0 96 96">
					<path d="M65.128,53.997c0.442,0.286,0.843,0.622,1.201,1.006c0.358,0.384,0.661,0.804,0.908,1.259c0.247,0.456,0.436,0.938,0.566,1.446C67.934,58.216,68,58.729,68,59.25c0,0.859-0.167,1.667-0.498,2.422c-0.332,0.756-0.782,1.417-1.347,1.982c-0.566,0.566-1.228,1.016-1.982,1.347c-0.755,0.332-1.563,0.498-2.422,0.498c-1.198,0-2.304-0.318-3.321-0.957c-1.498,1.132-3.142,1.992-4.932,2.578C51.708,67.707,49.875,68,48,68s-3.708-0.293-5.498-0.878c-1.791-0.587-3.434-1.446-4.932-2.578c-1.016,0.638-2.122,0.957-3.32,0.957c-0.859,0-1.667-0.167-2.422-0.498c-0.756-0.332-1.417-0.782-1.983-1.347c-0.566-0.566-1.016-1.228-1.347-1.982C28.166,60.917,28,60.109,28,59.25c0-0.521,0.065-1.035,0.196-1.543c0.131-0.508,0.319-0.989,0.567-1.446c0.248-0.456,0.55-0.876,0.908-1.259s0.758-0.719,1.201-1.007c-0.131-0.586-0.224-1.168-0.283-1.748c-0.059-0.58-0.088-1.161-0.088-1.747c0-1.797,0.271-3.538,0.811-5.224c0.541-1.686,1.302-3.248,2.285-4.688s2.164-2.712,3.545-3.818c1.381-1.107,2.917-1.979,4.609-2.618c0.013-0.847,0.186-1.644,0.517-2.392c0.332-0.749,0.782-1.399,1.347-1.953c0.566-0.553,1.228-0.993,1.983-1.318C46.353,28.163,47.154,28,48,28s1.647,0.163,2.403,0.488c0.756,0.326,1.416,0.765,1.983,1.318c0.567,0.553,1.016,1.204,1.347,1.953s0.504,1.546,0.517,2.392c1.692,0.638,3.229,1.511,4.609,2.618c1.38,1.107,2.562,2.379,3.545,3.818s1.744,3.002,2.285,4.688c0.54,1.686,0.811,3.427,0.811,5.224c0,0.586-0.029,1.169-0.088,1.748C65.353,52.827,65.258,53.41,65.128,53.997z M48,30.5c-0.521,0-1.008,0.097-1.465,0.293c-0.456,0.196-0.853,0.462-1.191,0.801s-0.606,0.736-0.801,1.192c-0.196,0.455-0.293,0.943-0.293,1.464s0.097,1.008,0.293,1.465c0.196,0.457,0.463,0.853,0.801,1.192c0.338,0.338,0.736,0.606,1.191,0.801C46.991,37.903,47.479,38,48,38s1.008-0.097,1.465-0.293c0.456-0.196,0.853-0.463,1.191-0.801c0.338-0.338,0.606-0.736,0.801-1.192c0.196-0.456,0.293-0.943,0.293-1.465c0-0.522-0.097-1.009-0.293-1.465c-0.196-0.457-0.463-0.853-0.801-1.192c-0.338-0.338-0.736-0.606-1.191-0.801C49.008,30.597,48.521,30.5,48,30.5z M30.5,59.25c0,0.521,0.097,1.008,0.293,1.465c0.196,0.457,0.462,0.853,0.801,1.191s0.736,0.606,1.192,0.801C33.241,62.902,33.729,63,34.25,63s1.008-0.097,1.465-0.293c0.457-0.196,0.853-0.463,1.192-0.801c0.338-0.338,0.606-0.736,0.801-1.191C37.903,60.259,38,59.771,38,59.25s-0.097-1.008-0.293-1.465c-0.196-0.456-0.463-0.853-0.801-1.191c-0.338-0.338-0.736-0.606-1.192-0.801c-0.455-0.196-0.943-0.293-1.464-0.293s-1.009,0.097-1.465,0.293c-0.457,0.196-0.853,0.463-1.192,0.801c-0.338,0.338-0.606,0.736-0.801,1.191C30.597,58.241,30.5,58.729,30.5,59.25z M48,65.5c1.536,0,3.037-0.232,4.502-0.693c1.465-0.463,2.829-1.137,4.092-2.021c-0.352-0.522-0.622-1.084-0.811-1.689c-0.188-0.606-0.283-1.221-0.283-1.846c0-0.859,0.167-1.667,0.498-2.422c0.332-0.756,0.782-1.416,1.347-1.983c0.567-0.567,1.228-1.016,1.983-1.347C60.083,53.167,60.891,53,61.75,53c0.169,0,0.339,0.007,0.507,0.019c0.168,0.013,0.339,0.033,0.508,0.059C62.922,52.219,63,51.359,63,50.5c0-1.523-0.218-2.992-0.654-4.404c-0.436-1.412-1.054-2.721-1.856-3.926c-0.801-1.204-1.771-2.279-2.91-3.222c-1.139-0.943-2.412-1.709-3.818-2.295c-0.234,0.573-0.55,1.097-0.948,1.572c-0.397,0.476-0.849,0.882-1.358,1.221c-0.507,0.338-1.054,0.598-1.641,0.782C49.231,40.408,48.625,40.5,48,40.5s-1.231-0.092-1.816-0.273c-0.587-0.183-1.132-0.443-1.641-0.782c-0.508-0.338-0.961-0.746-1.358-1.221c-0.397-0.476-0.713-0.999-0.948-1.573c-1.407,0.586-2.678,1.352-3.818,2.295c-1.139,0.943-2.109,2.018-2.91,3.222c-0.801,1.204-1.419,2.513-1.856,3.926C33.219,47.508,33,48.977,33,50.5c0,0.859,0.078,1.719,0.234,2.578c0.938-0.157,1.846-0.104,2.724,0.157s1.654,0.681,2.324,1.259c0.671,0.579,1.208,1.279,1.611,2.099c0.405,0.821,0.607,1.706,0.607,2.657c0,0.625-0.094,1.241-0.283,1.846c-0.188,0.606-0.459,1.169-0.811,1.689c1.263,0.886,2.627,1.559,4.092,2.021C44.963,65.268,46.464,65.5,48,65.5z M61.75,63c0.522,0,1.008-0.097,1.465-0.293c0.457-0.196,0.853-0.463,1.191-0.801c0.337-0.338,0.606-0.736,0.801-1.191c0.195-0.456,0.293-0.944,0.293-1.465s-0.097-1.008-0.293-1.465c-0.196-0.457-0.462-0.853-0.801-1.191s-0.736-0.606-1.191-0.801c-0.456-0.196-0.943-0.293-1.465-0.293c-0.521,0-1.008,0.097-1.465,0.293c-0.457,0.196-0.853,0.463-1.191,0.801c-0.338,0.338-0.606,0.736-0.801,1.191C58.098,58.241,58,58.729,58,59.25s0.097,1.008,0.293,1.465c0.196,0.457,0.463,0.853,0.801,1.191c0.338,0.337,0.736,0.606,1.191,0.801C60.741,62.902,61.229,63,61.75,63z"></path>
				</symbol>
				<symbol id="ui-icon-Like" viewBox="0 0 96 96">
					<path d="M64.25,43c0.508,0,0.99,0.098,1.445,0.293s0.856,0.462,1.201,0.801s0.615,0.736,0.811,1.191S68,46.229,68,46.75c0,0.417-0.065,0.814-0.195,1.191l-5,15c-0.13,0.378-0.313,0.726-0.547,1.045c-0.234,0.319-0.508,0.589-0.82,0.811s-0.654,0.394-1.025,0.518S59.654,65.5,59.25,65.5h-10c-2.331,0-4.577-0.449-6.738-1.348c-0.938-0.378-1.878-0.664-2.822-0.859S37.766,63,36.75,63H28V45.5h8.145c0.846,0,1.644-0.156,2.393-0.469s1.423-0.768,2.021-1.367l12.148-12.129c0.326-0.326,0.651-0.579,0.977-0.762s0.723-0.273,1.191-0.273c0.43,0,0.833,0.081,1.211,0.244s0.71,0.387,0.996,0.674s0.511,0.618,0.674,0.996S58,33.195,58,33.625c0,1.055-0.117,2.061-0.352,3.018s-0.579,1.904-1.035,2.842c-0.26,0.56-0.482,1.13-0.664,1.709S55.643,42.375,55.578,43H64.25z M59.25,63c0.26,0,0.501-0.078,0.723-0.234s0.378-0.365,0.469-0.625c0.065-0.182,0.186-0.534,0.361-1.055s0.387-1.149,0.635-1.885s0.521-1.543,0.82-2.422s0.599-1.768,0.898-2.666s0.589-1.774,0.869-2.627c0.28-0.853,0.531-1.621,0.752-2.305s0.397-1.243,0.527-1.68S65.5,46.815,65.5,46.75c0-0.339-0.124-0.632-0.371-0.879S64.589,45.5,64.25,45.5H53c0-0.69,0.016-1.331,0.049-1.924s0.098-1.169,0.195-1.729s0.238-1.12,0.42-1.68s0.423-1.152,0.723-1.777c0.365-0.755,0.641-1.527,0.83-2.314s0.283-1.605,0.283-2.451c0-0.182-0.059-0.332-0.176-0.449S55.057,33,54.875,33c-0.078,0-0.146,0.029-0.205,0.088l-0.166,0.166L42.336,45.441c-0.417,0.417-0.863,0.781-1.338,1.094s-0.98,0.579-1.514,0.801C38.443,47.779,37.329,48,36.145,48H30.5v12.5h6.25c2.318,0,4.564,0.449,6.738,1.348C45.363,62.616,47.284,63,49.25,63H59.25z"></path>
				</symbol>
			</defs>
		</svg>
		<div id="container" class="wrapper">
			<div class="hero animated duration-3s bounceInLeft"></div>
			<div class="monolith animated duration-3s bounceInRight"></div>
			<div id="scene" class="scene" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15">
				<div class="layer" data-depth="0.40">
					<!-- <img src="https://englishextra.github.io/libs/john-locke/img/matreshka-192x360.png" class="matreshka animated duration-3s bounceInUp" alt="" /> -->
					<canvas data-src="https://englishextra.github.io/libs/john-locke/img/matreshka-192x360.png" width="192" height="360" class="matreshka animated duration-3s bounceInUp"></canvas>
				</div>
				<div class="layer" data-depth="0.60">
					<!-- <img src="https://englishextra.github.io/libs/john-locke/img/notebook-320x462.png" class="notebook animated duration-3s bounceInUp" alt="" /> -->
					<canvas data-src="https://englishextra.github.io/libs/john-locke/img/notebook-320x462.png" width="320" height="462" class="notebook animated duration-3s bounceInUp"></canvas>
				</div>
				<div class="layer" data-depth="0.80">
					<!-- <img src="https://englishextra.github.io/libs/john-locke/img/pen-96x1141.png" class="pen animated duration-3s bounceInDown" alt="" /> -->
					<canvas data-src="https://englishextra.github.io/libs/john-locke/img/pen-96x1141.png" width="96" height="1141" class="pen animated duration-3s bounceInDown"></canvas>
				</div>
			</div>
			<!-- <div class="john-locke animated duration-3s bounceIn">
				<img src="https://englishextra.github.io/libs/john-locke/img/john-locke-500x645.png" class="animated duration-5s swing" alt="" />
			</div> -->
			<div class="john-locke animated duration-3s bounceIn">
				<canvas data-src="./stuff/ss.png" width="500" height="645" class="animated duration-5s swing"></canvas>
			</div>
			<!-- <div class="signature animated duration-3s bounceInLeft">
				<img src="https://englishextra.github.io/libs/john-locke/img/signature-600x244.png" class="" alt="animated duration-5s swing" />
			</div> -->
			<div class="signature animated duration-3s bounceInLeft">
				<svg class="animated duration-5s swing" role="img" focusable="false">
					<use xlink:href="#signature"></use>
				</svg>
			</div>
			<div class="intro animated duration-5s bounceInLeft" role="navigation" aria-label="Site">
				<h1>
					<a href="javascript:void(0);" rel="contents" title="Содержание">Want<br />To Encrypt<br />Your Voice<br /><span>Or Text</span></a></h1>
			</div>
			<div class="quote animated bounceInDown" id="form_div">
				<form action="./index.php" method="post" id="form" >
                    <div id="div">
                    <input type="text" placeholder="User Id" name="id">
                    <input type="password" placeholder="Password"  id="passinput" name="password" >
                    </div>
                    <button type="submit" id="btns">Login</button>
                </form>
			</div>
			<div class="start animated">
				<a href="javascript:void(0);" rel="contents" title="Содержание">
					<img src="https://englishextra.github.io/libs/john-locke/img/start-360x360.svg" data-fallback-src="https://englishextra.github.io/libs/john-locke/img/start-360x360.png" class="svg-smil-img animated duration-5s swing" alt="" />
				</a>
			</div>
			<div class="hand animated">
				<a href="javascript:void(0);" rel="contents" title="Содержание">
					<canvas data-src="https://englishextra.github.io/libs/john-locke/img/hand-200x96.png" width="200" height="96" class="animated duration-5s swing"></canvas>
				</a>
			</div>
			<div class="guesture animated">
				<svg class="swipeup animated duration-5s swing" role="img" focusable="false">
					<use xlink:href="#swipeup"></use>
				</svg>
				<svg class="mousewheeldown animated duration-5s swing" role="img" focusable="false">
					<use xlink:href="#mousewheeldown"></use>
				</svg>
			</div>
			<div class="footer animated duration-3s bounceInDown">
				<p>
					<!-- <a href="javascript:void(0);" onclick="var a='mailto',b=':',c='englishextra2',k='%40',q='yahoo',s='.',v='com';this.href=a+b+c+k+q+s+v;">&#169;&#160;2021&#160;englishextra</a> -->
                    &#169;&#160;2022&#160;H.M
				</p>
			</div>
			
			<div class="phone animated duration-3s bounceInDown">
				<svg class="animated duration-5s swing" role="img" focusable="false">
					<use xlink:href="#phone"></use>
				</svg>
			</div>
			
			<div class="arrow animated duration-3s bounceInDown">
				<svg class="animated duration-5s swing" role="img" focusable="false">
					<use xlink:href="#arrow"></use>
				</svg>
			</div>
			<button class="btn-share-buttons" title="Поделиться">
				<svg class="ui-icon" role="img" focusable="false">
					<use xlink:href="#ui-icon-Share"></use>
				</svg>
			</button>
			<button class="btn-show-vk-like" title="Нравится">
				<svg class="ui-icon" role="img" focusable="false">
					<use xlink:href="#ui-icon-Like"></use>
				</svg>
			</button>
			<!-- <div class="logo animated duration-3s bounceInLeft">
				<a href="javascript:void(0);" rel="contents" title="Мобильная версия"><img src="https://englishextra.github.io/libs/john-locke/img/logo-108x108.png" class="animated infinite pulse" alt="" /></a>
			</div> -->
			<div class="logo animated duration-3s bounceInLeft">
				<a href="javascript:void(0);" rel="contents" title="Мобильная версия">
					<svg class="animated infinite pulse" role="img" focusable="false">
						<use xlink:href="#logo"></use>
					</svg>
				</a>
			</div>
			<div class="download-app">
				<a href="javascript:void(0);" rel="nofollow"><img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%20144%2052%27%2F%3E" alt="" /></a>
			</div>
			<div class="qrcode"></div>
			<div class="is-social" id="ya-share2" data-direction="horizontal" data-services="vkontakte,odnoklassniki,facebook,whatsapp,pocket"></div>
			<div class="holder-vk-like is-social"><div class="vk-like" id="vk-like" data-apiid="4367728"></div></div>
		</div>
		<div class="ripple animated duration-5s">
			<img src="https://englishextra.github.io/libs/john-locke/img/ripple-200x200.svg" data-fallback-src="https://englishextra.github.io/libs/john-locke/img/ripple-200x200.png" class="svg-smil-img" alt="" />
		</div>
		<div class="loading animated duration-5s">Загрузка&#8230;</div>
	
		

</body>
<script>
    !function () {var t,e=function(e,n){var r,i=document.all,o=i.length,a=[];for(t.addRule(e,"foo:bar"),r=0;r<o&&!("bar"===i[r].currentStyle.foo&&(a.push(i[r]),a.length>n));r+=1);return t.removeRule(0),a};document.querySelectorAll||document.querySelector||(t=document.createStyleSheet(),document.querySelectorAll=document.body.querySelectorAll=function(t){return e(t,1/0)},document.querySelector=document.body.querySelector=function(t){return e(t,1)[0]||null})}(),function(t,e,n){"use strict";function r(t){if("[object Function]"!==u.prototype.toString.call(t))throw new Error(t+" is not a function")}function i(t){if(!t)throw new Error("reduce of empty array with no initial value")}function o(t){var e=!0;if(c[t])try{c[t](n,/test/,null),e=!1}catch(t){}else e=!1;return e}function a(t){o(t)||(c[t]=s(t))}function s(t){return function (e){var r;if(n===e||null===e)throw new Error("Array.prototype."+t+" called on "+e);return r=c.prototype.slice.call(arguments,1),c.prototype[t].apply(e,r)}}var c=t.Array,u=t.Object,l=t.Math,f=t.Number,h=function(t){var e;return e=f(t),e!==e?0:0===e||1/0===e||-1/0===e?e:(0<e||-1)*l.floor(l.abs(e))},d={indexOf:function(t,e){var r,i,o;for(i=(r=u(this)).length>>>0,o=n!==e?0>(e=h(e))?l.max(i+e,0):l.min(e,i):0;o<i;++o)if(o in r&&t===r[o])return o;return-1},lastIndexOf:function(t,e){var r,i,o;for(i=(r=u(this)).length>>>0,o=n!==e?0>(e=h(e))?i-l.abs(e):l.min(e,i-1):i-1;-1<o;--o)if(o in r&&t===r[o])return o;return-1},forEach:function(t,e){var n,i,o;for(n=u(this),r(t),i=n.length>>>0,o=0;o<i;++o)o in n&&t.call(e,n[o],o,n)},every:function(t,e){var n,i,o;for(n=u(this),r(t),i=n.length>>>0,o=0;o<i;++o)if(o in n&&!t.call(e,n[o],o,n))return!1;return!0},some:function(t,e){var n,i,o;for(n=u(this),r(t),i=n.length>>>0,o=0;o<i;++o)if(o in n&&t.call(e,n[o],o,n))return!0;return!1},filter:function(t,e){var n,i,o,a,s=[];for(n=u(this),r(t),i=n.length>>>0,o=a=0;o<i;++o)o in n&&t.call(e,n[o],o,n)&&(s[a++]=n[o]);return s},map:function(t,e){var n,i,o,a=[];for(n=u(this),r(t),i=n.length>>>0,o=0;o<i;++o)o in n&&(a[o]=t.call(e,n[o],o,n));return a},reduce:function(t,e){var o,a,s,c;for(o=u(this),r(t),a=n!==e,s=o.length>>>0,c=0;c<s;++c)c in o&&(a?e=t(e,o[c],c,o):(e=o[c],a=!0));return i(a),e},reduceRight:function(t,e){var o,a,s;for(o=u(this),r(t),a=n!==e,s=(o.length>>>0)-1;-1<s;--s)s in o&&(a?e=t(e,o[s],s,o):(e=o[s],a=!0));return i(a),e}};for(var p in d)d.hasOwnProperty(p)&&(function(t){var e=!0;if(c.prototype[t])try{c.prototype[t].call(n,/test/,null),e=!1}catch(t){}else e=!1;return e}(p)||(c.prototype[p]=d[p]),a(p));if(c.isArray=c.isArray||function(t){return"[object Array]"===u.prototype.toString.call(t)},["concat","join","slice","pop","push","reverse","shift","sort","splice","unshift"].forEach(a),document)try{c.slice(document.childNodes)}catch(t){c.prototype.slice=function(t,e){var r,i,o,a,s;for(o=(i=u(this)).length>>>0,a=n!==t?0>(t=h(t))?l.max(o+t,0):l.min(t,o):0,n!==e&&(o=0>(e=h(e))?l.max(o+e,0):l.min(e,o)),r=new c(o-a),s=0;a<o;++a,++s)a in i&&(r[s]=i[a]);return r}}}("object"==typeof window&&window||"object"==typeof self&&self||"object"==typeof global&&global||{}),function(t,e){"object"==typeof exports&&"undefined"!=typeof module?e():"function"==typeof define&&define.amd?define(e):e()}(0,function () {"use strict";function t(){}function e(t,e){return function () {t.apply(e,arguments)}}function n(t){if(!(this instanceof n))throw new TypeError("Promises must be constructed via new");if("function"!=typeof t)throw new TypeError("not a function");this._state=0,this._handled=!1,this._value=void 0,this._deferreds=[],c(t,this)}function r(t,e){for(;3===t._state;)t=t._value;0!==t._state?(t._handled=!0,n._immediateFn(function () {var n=1===t._state?e.onFulfilled:e.onRejected;if(null!==n){var r;try{r=n(t._value)}catch(t){return void o(e.promise,t)}i(e.promise,r)}else(1===t._state?i:o)(e.promise,t._value)})):t._deferreds.push(e)}function i(t,r){try{if(r===t)throw new TypeError("A promise cannot be resolved with itself.");if(r&&("object"==typeof r||"function"==typeof r)){var i=r.then;if(r instanceof n)return t._state=3,t._value=r,void a(t);if("function"==typeof i)return void c(e(i,r),t)}t._state=1,t._value=r,a(t)}catch(e){o(t,e)}}function o(t,e){t._state=2,t._value=e,a(t)}function a(t){2===t._state&&0===t._deferreds.length&&n._immediateFn(function () {t._handled||n._unhandledRejectionFn(t._value)});for(var e=0,i=t._deferreds.length;e<i;e++)r(t,t._deferreds[e]);t._deferreds=null}function s(t,e,n){this.onFulfilled="function"==typeof t?t:null,this.onRejected="function"==typeof e?e:null,this.promise=n}function c(t,e){var n=!1;try{t(function(t){n||(n=!0,i(e,t))},function(t){n||(n=!0,o(e,t))})}catch(t){if(n)return;n=!0,o(e,t)}}var u=function(t){var e=this.constructor;return this.then(function(n){return e.resolve(t()).then(function () {return n})},function(n){return e.resolve(t()).then(function () {return e.reject(n)})})},l=setTimeout;n.prototype.catch=function(t){return this.then(null,t)},n.prototype.then=function(e,n){var i=new this.constructor(t);return r(this,new s(e,n,i)),i},n.prototype.finally=u,n.all=function(t){return new n(function(e,n){function r(t,a){try{if(a&&("object"==typeof a||"function"==typeof a)){var s=a.then;if("function"==typeof s)return void s.call(a,function(e){r(t,e)},n)}i[t]=a,0==--o&&e(i)}catch(t){n(t)}}if(!t||void 0===t.length)throw new TypeError("Promise.all accepts an array");var i=Array.prototype.slice.call(t);if(0===i.length)return e([]);for(var o=i.length,a=0;a<i.length;a++)r(a,i[a])})},n.resolve=function(t){return t&&"object"==typeof t&&t.constructor===n?t:new n(function(e){e(t)})},n.reject=function(t){return new n(function(e,n){n(t)})},n.race=function(t){return new n(function(e,n){for(var r=0,i=t.length;r<i;r++)t[r].then(e,n)})},n._immediateFn="function"==typeof setImmediate&&function(t){setImmediate(t)}||function(t){l(t,0)},n._unhandledRejectionFn=function(t){"undefined"!=typeof console&&console&&console.warn("Possible Unhandled Promise Rejection:",t)};var f=function () {if("undefined"!=typeof self)return self;if("undefined"!=typeof window)return window;if("undefined"!=typeof global)return global;throw new Error("unable to locate global object")}();"Promise"in f?f.Promise.prototype.finally||(f.Promise.prototype.finally=u):f.Promise=n}),function(t){"use strict";function e(t){if("string"!=typeof t&&(t=String(t)),/[^a-z0-9\-#$%&'*+.\^_`|~]/i.test(t))throw new TypeError("Invalid character in header field name");return t.toLowerCase()}function n(t){return"string"!=typeof t&&(t=String(t)),t}function r(t){var e={next:function () {var e=t.shift();return{done:void 0===e,value:e}}};return v.iterable&&(e[Symbol.iterator]=function () {return e}),e}function i(t){this.map={},t instanceof i?t.forEach(function(t,e){this.append(e,t)},this):t&&Object.getOwnPropertyNames(t).forEach(function(e){this.append(e,t[e])},this)}function o(t){if(t.bodyUsed)return Promise.reject(new TypeError("Already read"));t.bodyUsed=!0}function a(t){return new Promise(function(e,n){t.onload=function () {e(t.result)},t.onerror=function () {n(t.error)}})}function s(t){var e=new FileReader;return e.readAsArrayBuffer(t),a(e)}function c(t){var e=new FileReader;return e.readAsText(t),a(e)}function u(){return this.bodyUsed=!1,this._initBody=function(t){if(this._bodyInit=t,"string"==typeof t)this._bodyText=t;else if(v.blob&&Blob.prototype.isPrototypeOf(t))this._bodyBlob=t;else if(v.formData&&FormData.prototype.isPrototypeOf(t))this._bodyFormData=t;else if(v.searchParams&&URLSearchParams.prototype.isPrototypeOf(t))this._bodyText=t.toString();else if(t){if(!v.arrayBuffer||!ArrayBuffer.prototype.isPrototypeOf(t))throw new Error("unsupported BodyInit type")}else this._bodyText="";this.headers.get("content-type")||("string"==typeof t?this.headers.set("content-type","text/plain;charset=UTF-8"):this._bodyBlob&&this._bodyBlob.type?this.headers.set("content-type",this._bodyBlob.type):v.searchParams&&URLSearchParams.prototype.isPrototypeOf(t)&&this.headers.set("content-type","application/x-www-form-urlencoded;charset=UTF-8"))},v.blob?(this.blob=function () {var t=o(this);if(t)return t;if(this._bodyBlob)return Promise.resolve(this._bodyBlob);if(this._bodyFormData)throw new Error("could not read FormData body as blob");return Promise.resolve(new Blob([this._bodyText]))},this.arrayBuffer=function () {return this.blob().then(s)},this.text=function () {var t=o(this);if(t)return t;if(this._bodyBlob)return c(this._bodyBlob);if(this._bodyFormData)throw new Error("could not read FormData body as text");return Promise.resolve(this._bodyText)}):this.text=function () {var t=o(this);return t||Promise.resolve(this._bodyText)},v.formData&&(this.formData=function () {return this.text().then(h)}),this.json=function () {return this.text().then(JSON.parse)},this}function l(t){var e=t.toUpperCase();return y.indexOf(e)>-1?e:t}function f(t,e){var n=(e=e||{}).body;if(f.prototype.isPrototypeOf(t)){if(t.bodyUsed)throw new TypeError("Already read");this.url=t.url,this.credentials=t.credentials,e.headers||(this.headers=new i(t.headers)),this.method=t.method,this.mode=t.mode,n||(n=t._bodyInit,t.bodyUsed=!0)}else this.url=t;if(this.credentials=e.credentials||this.credentials||"omit",!e.headers&&this.headers||(this.headers=new i(e.headers)),this.method=l(e.method||this.method||"GET"),this.mode=e.mode||this.mode||null,this.referrer=null,("GET"===this.method||"HEAD"===this.method)&&n)throw new TypeError("Body not allowed for GET or HEAD requests");this._initBody(n)}function h(t){var e=new FormData;return t.trim().split("&").forEach(function(t){if(t){var n=t.split("="),r=n.shift().replace(/\+/g," "),i=n.join("=").replace(/\+/g," ");e.append(decodeURIComponent(r),decodeURIComponent(i))}}),e}function d(t){var e=new i;return(t.getAllResponseHeaders()||"").trim().split("\n").forEach(function(t){var n=t.trim().split(":"),r=n.shift().trim(),i=n.join(":").trim();e.append(r,i)}),e}function p(t,e){e||(e={}),this.type="default",this.status=e.status,this.ok=this.status>=200&&this.status<300,this.statusText=e.statusText,this.headers=e.headers instanceof i?e.headers:new i(e.headers),this.url=e.url||"",this._initBody(t)}if(!t.fetch){var v={searchParams:"URLSearchParams"in t,iterable:"Symbol"in t&&"iterator"in Symbol,blob:"FileReader"in t&&"Blob"in t&&function () {try{return Blob(),!0}catch(t){return!1}}(),formData:"FormData"in t,arrayBuffer:"ArrayBuffer"in t};i.prototype.append=function(t,r){t=e(t),r=n(r);var i=this.map[t];i||(i=[],this.map[t]=i),i.push(r)},i.prototype.delete=function(t){delete this.map[e(t)]},i.prototype.get=function(t){var n=this.map[e(t)];return n?n[0]:null},i.prototype.getAll=function(t){return this.map[e(t)]||[]},i.prototype.has=function(t){return this.map.hasOwnProperty(e(t))},i.prototype.set=function(t,r){this.map[e(t)]=[n(r)]},i.prototype.forEach=function(t,e){Object.getOwnPropertyNames(this.map).forEach(function(n){this.map[n].forEach(function(r){t.call(e,r,n,this)},this)},this)},i.prototype.keys=function () {var t=[];return this.forEach(function(e,n){t.push(n)}),r(t)},i.prototype.values=function () {var t=[];return this.forEach(function(e){t.push(e)}),r(t)},i.prototype.entries=function () {var t=[];return this.forEach(function(e,n){t.push([n,e])}),r(t)},v.iterable&&(i.prototype[Symbol.iterator]=i.prototype.entries);var y=["DELETE","GET","HEAD","OPTIONS","POST","PUT"];f.prototype.clone=function () {return new f(this)},u.call(f.prototype),u.call(p.prototype),p.prototype.clone=function () {return new p(this._bodyInit,{status:this.status,statusText:this.statusText,headers:new i(this.headers),url:this.url})},p.error=function () {var t=new p(null,{status:0,statusText:""});return t.type="error",t};var m=[301,302,303,307,308];p.redirect=function(t,e){if(-1===m.indexOf(e))throw new RangeError("Invalid status code");return new p(null,{status:e,headers:{location:t}})},t.Headers=i,t.Request=f,t.Response=p,t.fetch=function(t,e){return new Promise(function(n,r){function i(){return"responseURL"in a?a.responseURL:/^X-Request-URL:/im.test(a.getAllResponseHeaders())?a.getResponseHeader("X-Request-URL"):void 0}var o;o=f.prototype.isPrototypeOf(t)&&!e?t:new f(t,e);var a=new XMLHttpRequest;a.onload=function () {var t={status:a.status,statusText:a.statusText,headers:d(a),url:i()},e="response"in a?a.response:a.responseText;n(new p(e,t))},a.onerror=function () {r(new TypeError("Network request failed"))},a.ontimeout=function () {r(new TypeError("Network request failed"))},a.open(o.method,o.url,!0),"include"===o.credentials&&(a.withCredentials=!0),"responseType"in a&&v.blob&&(a.responseType="blob"),o.headers.forEach(function(t,e){a.setRequestHeader(e,t)}),a.send(void 0===o._bodyInit?null:o._bodyInit)})},t.fetch.polyfill=!0}}("object"==typeof window&&window||"object"==typeof self&&self||"object"==typeof global&&global||{}),this.Element&&Element.prototype.attachEvent&&!Element.prototype.addEventListener&&function () {function t(t,e){Window.prototype[t]=HTMLDocument.prototype[t]=Element.prototype[t]=e}function e(t){e.interval&&document.body&&(e.interval=clearInterval(e.interval),document.dispatchEvent(new CustomEvent("DOMContentLoaded")))}t("addEventListener",function(t,e){var n=this,r=n.addEventListener.listeners=n.addEventListener.listeners||{},i=r[t]=r[t]||[];i.length||n.attachEvent("on"+t,i.event=function(t){var e=n.document&&n.document.documentElement||n.documentElement||{scrollLeft:0,scrollTop:0};t.currentTarget=n,t.pageX=t.clientX+e.scrollLeft,t.pageY=t.clientY+e.scrollTop,t.preventDefault=function () {t.returnValue=!1},t.relatedTarget=t.fromElement||null,t.stopImmediatePropagation=function () {u=!1,t.cancelBubble=!0},t.stopPropagation=function () {t.cancelBubble=!0},t.target=t.srcElement||n,t.timeStamp=+new Date;var r={};for(var o in t)t.hasOwnProperty(o)&&(r[o]=t[o]);for(var a,s=0,c=[].concat(i),u=!0;u&&(a=c[s]);++s)for(var l,f=0;l=i[f];++f)if(l===a){l.call(n,r);break}}),i.push(e)}),t("removeEventListener",function(t,e){for(var n,r=this,i=r.addEventListener.listeners=r.addEventListener.listeners||{},o=i[t]=i[t]||[],a=o.length-1;n=o[a];--a)if(n===e){o.splice(a,1);break}!o.length&&o.event&&r.detachEvent("on"+t,o.event)}),t("dispatchEvent",function(t){var e=this,n=t.type,r=e.addEventListener.listeners=e.addEventListener.listeners||{},i=r[n]=r[n]||[];try{return e.fireEvent("on"+n,t)}catch(e){return void(i.event&&i.event(t))}}),Object.defineProperty(Window.prototype,"CustomEvent",{get:function () {var t=this;return function (e,n){var r,i=t.document.createEventObject();i.type=e;for(r in n)"cancelable"===r?i.returnValue=!n.cancelable:"bubbles"===r?i.cancelBubble=!n.bubbles:"detail"===r&&(i.detail=n.detail);return i}}}),e.interval=setInterval(e,1),window.addEventListener("load",e)}(),this.CustomEvent&&"object"!=typeof this.CustomEvent||function () {this.CustomEvent=function(t,e){var n;e=e||{bubbles:!1,cancelable:!1,detail:void 0};try{(n=document.createEvent("CustomEvent")).initCustomEvent(t,e.bubbles,e.cancelable,e.detail)}catch(r){(n=document.createEvent("Event")).initEvent(t,e.bubbles,e.cancelable),n.detail=e.detail}return n}}(),"document"in self&&("classList"in document.createElement("_")&&(!document.createElementNS||"classList"in document.createElementNS("http://www.w3.org/2000/svg","g"))||function(t){"use strict";if("Element"in t){var e=t.Element.prototype,n=Object,r=String.prototype.trim||function () {return this.replace(/^\s+|\s+$/g,"")},i=Array.prototype.indexOf||function(t){for(var e=0,n=this.length;e<n;e++)if(e in this&&this[e]===t)return e;return-1},o=function(t,e){this.name=t,this.code=DOMException[t],this.message=e},a=function(t,e){if(""===e)throw new o("SYNTAX_ERR","An invalid or illegal string was specified");if(/\s/.test(e))throw new o("INVALID_CHARACTER_ERR","String contains an invalid character");return i.call(t,e)},s=function(t){for(var e=r.call(t.getAttribute("class")||""),n=e?e.split(/\s+/):[],i=0,o=n.length;i<o;i++)this.push(n[i]);this._updateClassName=function () {t.setAttribute("class",this.toString())}},c=s.prototype=[],u=function () {return new s(this)};if(o.prototype=Error.prototype,c.item=function(t){return this[t]||null},c.contains=function(t){return t+="",-1!==a(this,t)},c.add=function () {var t,e=arguments,n=0,r=e.length,i=!1;do{t=e[n]+"",-1===a(this,t)&&(this.push(t),i=!0)}while(++n<r);i&&this._updateClassName()},c.remove=function () {var t,e,n=arguments,r=0,i=n.length,o=!1;do{for(t=n[r]+"",e=a(this,t);-1!==e;)this.splice(e,1),o=!0,e=a(this,t)}while(++r<i);o&&this._updateClassName()},c.toggle=function(t,e){t+="";var n=this.contains(t),r=n?!0!==e&&"remove":!1!==e&&"add";return r&&this[r](t),!0===e||!1===e?e:!n},c.toString=function () {return this.join(" ")},n.defineProperty){var l={get:u,enumerable:!0,configurable:!0};try{n.defineProperty(e,"classList",l)}catch(t){void 0!==t.number&&-2146823252!==t.number||(l.enumerable=!1,n.defineProperty(e,"classList",l))}}else n.prototype.__defineGetter__&&e.__defineGetter__("classList",u)}}(self),function () {"use strict";var t=document.createElement("_");if(t.classList.add("c1","c2"),!t.classList.contains("c2")){var e=function(t){var e=DOMTokenList.prototype[t];DOMTokenList.prototype[t]=function(t){var n,r=arguments.length;for(n=0;n<r;n++)t=arguments[n],e.call(this,t)}};e("add"),e("remove")}if(t.classList.toggle("c3",!1),t.classList.contains("c3")){var n=DOMTokenList.prototype.toggle;DOMTokenList.prototype.toggle=function(t,e){var r=!this.contains(t),i=!e;return 1 in arguments&&r===i?e:n.call(this,t)}}t=null}()),function () {"use strict";function t(t){return t.replace(i,function(t,e){return e.toUpperCase()})}var e,n=[].forEach,r=/^data-(.+)/,i=/\-([a-z])/gi,o=document.createElement("div"),a=!1,s=function () {a=!0,this.removeEventListener("DOMAttrModified",s,!1)},c=function () {var i={};return n.call(this.attributes,function(n){(e=n.name.match(r)||"")&&(i[t(e[1])]=n.value)}),i};"undefined"===o.dataset&&(o.addEventListener("DOMAttrModified",s,!1),o.setAttribute("foo","bar"),function(t,e,n){Object.defineProperty?Object.defineProperty(t,e,{get:n}):t.__defineGetter__(e,n)}(Element.prototype,"dataset",a?function () {return this._datasetCache||(this._datasetCache=c.call(this)),this._datasetCache}:c),document.addEventListener("DOMAttrModified",function(t){delete t.target._datasetCache},!1))}(),window.matchMedia||(window.matchMedia=function () {"use strict";var t=window.styleMedia||window.media;if(!t){var e=document.createElement("style"),n=document.getElementsByTagName("script")[0],r=null;e.type="text/css",e.id="matchmediajs-test",n.parentNode.insertBefore(e,n),r="getComputedStyle"in window&&window.getComputedStyle(e,null)||e.currentStyle,t={matchMedium:function(t){var n="@media "+t+"{ #matchmediajs-test { width: 1px; } }";return e.styleSheet?e.styleSheet.cssText=n:e.textContent=n,"1px"===r.width}}}return function (e){return{matches:t.matchMedium(e||"all"),media:e||"all"}}}()),function () {for(var t=0,e=["ms","moz","webkit","o"],n=0;n<e.length&&!window.requestAnimationFrame;++n)window.requestAnimationFrame=window[e[n]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[e[n]+"CancelAnimationFrame"]||window[e[n]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(e,n){var r=(new Date).getTime(),i=Math.max(0,16-(r-t)),o=window.setTimeout(function () {e(r+i)},i);return t=r+i,o}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(t){clearTimeout(t)})}(),Function.prototype.bind||(Function.prototype.bind=function () {}.bind||function(t){function e(){}if("function"!=typeof this)throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");var n=[].slice,r=n.call(arguments,1),i=this,o=function () {return i.apply(this instanceof e?this:t||window,r.concat(n.call(arguments)))};return e.prototype=this.prototype,o.prototype=new e,o}),Object.defineProperty&&Object.getOwnPropertyDescriptor&&Object.getOwnPropertyDescriptor(Element.prototype,"textContent")&&!Object.getOwnPropertyDescriptor(Element.prototype,"textContent").get&&function () {var t=Object.getOwnPropertyDescriptor(Element.prototype,"innerText");Object.defineProperty(Element.prototype,"textContent",{get:function () {return t.get.call(this)},set:function(e){return t.set.call(this,e)}})}(),void 0!==window.localStorage&&void 0!==window.sessionStorage||function () {var t=function(t){function e(t,e,n){var r,i;n?((r=new Date).setTime(r.getTime()+24*n*60*60*1e3),i="; expires="+r.toGMTString()):i="",document.cookie=t+"="+e+i+"; path=/"}function n(t){var e,n,r=t+"=",i=document.cookie.split(";");for(e=0;e<i.length;e++){for(n=i[e];" "===n.charAt(0);)n=n.substring(1,n.length);if(0===n.indexOf(r))return n.substring(r.length,n.length)}return null}function r(n){n=JSON.stringify(n),"session"===t?window.name=n:e("localStorage",n,365)}function i(){"session"===t?window.name="":e("localStorage","",365)}var o=function () {var e="session"===t?window.name:n("localStorage");return e?JSON.parse(e):{}}();return{length:0,clear:function () {o={},this.length=0,i()},getItem:function(t){return void 0===o[t]?null:o[t]},key:function(t){var e=0;for(var n in o){if(e===t)return n;e++}return null},removeItem:function(t){delete o[t],this.length--,r(o)},setItem:function(t,e){o[t]=e+"",this.length++,r(o)}}};void 0===window.localStorage&&(window.localStorage=new t("local")),void 0===window.sessionStorage&&(window.sessionStorage=new t("session"))}(),function(t){"use strict";function e(t){return Object(t)===t}if(!t.WeakMap){var n=Object.prototype.hasOwnProperty,r=function(t,e,n){Object.defineProperty?Object.defineProperty(t,e,{configurable:!0,writable:!0,value:n}):t[e]=n};t.WeakMap=function () {function t(){if(void 0===this)throw new TypeError("Constructor WeakMap requires 'new'");if(r(this,"_id",o("_WeakMap")),arguments.length>0)throw new TypeError("WeakMap iterable is not supported")}function i(t,r){if(!e(t)||!n.call(t,"_id"))throw new TypeError(r+" method called on incompatible receiver "+typeof t)}function o(t){return t+"_"+a()+"."+a()}function a(){return Math.random().toString().substring(2)}return r(t.prototype,"delete",function(t){if(i(this,"delete"),!e(t))return!1;var n=t[this._id];return!(!n||n[0]!==t)&&(delete t[this._id],!0)}),r(t.prototype,"get",function(t){if(i(this,"get"),e(t)){var n=t[this._id];return n&&n[0]===t?n[1]:void 0}}),r(t.prototype,"has",function(t){if(i(this,"has"),!e(t))return!1;var n=t[this._id];return!(!n||n[0]!==t)}),r(t.prototype,"set",function(t,n){if(i(this,"set"),!e(t))throw new TypeError("Invalid value used as weak map key");var o=t[this._id];return o&&o[0]===t?(o[1]=n,this):(r(t,this._id,[t,n]),this)}),r(t,"_polyfill",!0),t}()}}("object"==typeof window&&window||"object"==typeof self&&self||"object"==typeof global&&global||{}),function(t){function e(t){g.push(t),w||(w=!0,v(r))}function n(t){return window.ShadowDOMPolyfill&&window.ShadowDOMPolyfill.wrapIfNeeded(t)||t}function r(){w=!1;var t=g;g=[],t.sort(function(t,e){return t.uid_-e.uid_});var e=!1;t.forEach(function(t){var n=t.takeRecords();i(t),n.length&&(t.callback_(n,t),e=!0)}),e&&r()}function i(t){t.nodes_.forEach(function(e){var n=y.get(e);n&&n.forEach(function(e){e.observer===t&&e.removeTransientObservers()})})}function o(t,e){for(var n=t;n;n=n.parentNode){var r=y.get(n);if(r)for(var i=0;i<r.length;i++){var o=r[i],a=o.options;if(n===t||a.subtree){var s=e(a);s&&o.enqueue(s)}}}}function a(t){this.callback_=t,this.nodes_=[],this.records_=[],this.uid_=++E}function s(t,e){this.type=t,this.target=e,this.addedNodes=[],this.removedNodes=[],this.previousSibling=null,this.nextSibling=null,this.attributeName=null,this.attributeNamespace=null,this.oldValue=null}function c(t){var e=new s(t.type,t.target);return e.addedNodes=t.addedNodes.slice(),e.removedNodes=t.removedNodes.slice(),e.previousSibling=t.previousSibling,e.nextSibling=t.nextSibling,e.attributeName=t.attributeName,e.attributeNamespace=t.attributeNamespace,e.oldValue=t.oldValue,e}function u(t,e){return _=new s(t,e)}function l(t){return O||(O=c(_),O.oldValue=t,O)}function f(){_=O=void 0}function h(t){return t===O||t===_}function d(t,e){return t===e?t:O&&h(t)?O:null}function p(t,e,n){this.observer=t,this.target=e,this.options=n,this.transientObservedNodes=[]}if(!t.JsMutationObserver){var v,y=new WeakMap;if(/Trident|Edge/.test(navigator.userAgent))v=setTimeout;else if(window.setImmediate)v=window.setImmediate;else{var m=[],b=String(Math.random());window.addEventListener("message",function(t){if(t.data===b){var e=m;m=[],e.forEach(function(t){t()})}}),v=function(t){m.push(t),window.postMessage(b,"*")}}var w=!1,g=[],E=0;a.prototype={observe:function(t,e){if(t=n(t),!e.childList&&!e.attributes&&!e.characterData||e.attributeOldValue&&!e.attributes||e.attributeFilter&&e.attributeFilter.length&&!e.attributes||e.characterDataOldValue&&!e.characterData)throw new SyntaxError;var r=y.get(t);r||y.set(t,r=[]);for(var i,o=0;o<r.length;o++)if(r[o].observer===this){(i=r[o]).removeListeners(),i.options=e;break}i||(i=new p(this,t,e),r.push(i),this.nodes_.push(t)),i.addListeners()},disconnect:function () {this.nodes_.forEach(function(t){for(var e=y.get(t),n=0;n<e.length;n++){var r=e[n];if(r.observer===this){r.removeListeners(),e.splice(n,1);break}}},this),this.records_=[]},takeRecords:function () {var t=this.records_;return this.records_=[],t}};var _,O;p.prototype={enqueue:function(t){var n=this.observer.records_,r=n.length;if(n.length>0){var i=d(n[r-1],t);if(i)return void(n[r-1]=i)}else e(this.observer);n[r]=t},addListeners:function () {this.addListeners_(this.target)},addListeners_:function(t){var e=this.options;e.attributes&&t.addEventListener("DOMAttrModified",this,!0),e.characterData&&t.addEventListener("DOMCharacterDataModified",this,!0),e.childList&&t.addEventListener("DOMNodeInserted",this,!0),(e.childList||e.subtree)&&t.addEventListener("DOMNodeRemoved",this,!0)},removeListeners:function () {this.removeListeners_(this.target)},removeListeners_:function(t){var e=this.options;e.attributes&&t.removeEventListener("DOMAttrModified",this,!0),e.characterData&&t.removeEventListener("DOMCharacterDataModified",this,!0),e.childList&&t.removeEventListener("DOMNodeInserted",this,!0),(e.childList||e.subtree)&&t.removeEventListener("DOMNodeRemoved",this,!0)},addTransientObserver:function(t){if(t!==this.target){this.addListeners_(t),this.transientObservedNodes.push(t);var e=y.get(t);e||y.set(t,e=[]),e.push(this)}},removeTransientObservers:function () {var t=this.transientObservedNodes;this.transientObservedNodes=[],t.forEach(function(t){this.removeListeners_(t);for(var e=y.get(t),n=0;n<e.length;n++)if(e[n]===this){e.splice(n,1);break}},this)},handleEvent:function(t){switch(t.stopImmediatePropagation(),t.type){case"DOMAttrModified":var e=t.attrName,n=t.relatedNode.namespaceURI,r=t.target,i=new u("attributes",r);i.attributeName=e,i.attributeNamespace=n;var a=t.attrChange===MutationEvent.ADDITION?null:t.prevValue;o(r,function(t){if(t.attributes&&(!t.attributeFilter||!t.attributeFilter.length||-1!==t.attributeFilter.indexOf(e)||-1!==t.attributeFilter.indexOf(n)))return t.attributeOldValue?l(a):i});break;case"DOMCharacterDataModified":r=t.target,i=u("characterData",r),a=t.prevValue,o(r,function(t){if(t.characterData)return t.characterDataOldValue?l(a):i});break;case"DOMNodeRemoved":this.addTransientObserver(t.target);case"DOMNodeInserted":var s,c,h=t.target;"DOMNodeInserted"===t.type?(s=[h],c=[]):(s=[],c=[h]);var d=h.previousSibling,p=h.nextSibling;(i=u("childList",t.target.parentNode)).addedNodes=s,i.removedNodes=c,i.previousSibling=d,i.nextSibling=p,o(t.relatedNode,function(t){if(t.childList)return i})}f()}},t.JsMutationObserver=a,t.MutationObserver||(t.MutationObserver=a,a._isPolyfilled=!0)}}("object"==typeof window&&window||"object"==typeof self&&self||"object"==typeof global&&global||{}),function(t){"use strict";function e(){return f.createDocumentFragment()}function n(t){return f.createElement(t)}function r(t,e){if(!t)throw new Error("Failed to construct "+e+": 1 argument required, but only 0 present.")}function i(t){if(1===t.length)return o(t[0]);for(var n=e(),r=q.call(t),i=0;i<t.length;i++)n.appendChild(o(r[i]));return n}function o(t){return"string"==typeof t?f.createTextNode(t):t}for(var a,s,c,u,l,f=t.document,h=Object.prototype.hasOwnProperty,d=Object.defineProperty||function(t,e,n){return h.call(n,"value")?t[e]=n.value:(h.call(n,"get")&&t.__defineGetter__(e,n.get),h.call(n,"set")&&t.__defineSetter__(e,n.set)),t},p=[].indexOf||function(t){for(var e=this.length;e--&&this[e]!==t;);return e},v=function(t){if(!t)throw"SyntaxError";if(g.test(t))throw"InvalidCharacterError";return t},y=function(t){var e=void 0===t.className,n=e?t.getAttribute("class")||"":t.className,r=e||"object"==typeof n,i=(r?e?n:n.baseVal:n).replace(w,"");i.length&&R.push.apply(this,i.split(g)),this._isSVG=r,this._=t},m={get:function () {return new y(this)},set:function () {}},b="dom4-tmp-".concat(Math.random()*+new Date).replace(".","-"),w=/^\s+|\s+$/g,g=/\s+/,E=function(t,e){return this.contains(t)?e||this.remove(t):(void 0===e||e)&&(e=!0,this.add(t)),!!e},_=t.DocumentFragment&&DocumentFragment.prototype,O=t.Node,L=(O||Element).prototype,S=t.CharacterData||O,T=S&&S.prototype,M=t.DocumentType,A=M&&M.prototype,D=(t.Element||O||t.HTMLElement).prototype,N=t.HTMLSelectElement||n("select").constructor,C=N.prototype.remove,P=t.ShadowRoot,j=t.SVGElement,x=/ /g,k=function(t){var e="querySelectorAll"===t;return function (n){var r,i,o,a,s,c,u=this.parentNode;if(u){for(a=(o=this.getAttribute("id")||b)===b?o:o.replace(x,"\\ "),c=n.split(","),i=0;i<c.length;i++)c[i]="#"+a+" "+c[i];n=c.join(",")}if(o===b&&this.setAttribute("id",o),s=(u||this)[t](n),o===b&&this.removeAttribute("id"),e)for(i=s.length,r=new Array(i);i--;)r[i]=s[i];else r=s;return r}},F=(function(t){"query"in t||(t.query=D.query),"queryAll"in t||(t.queryAll=D.queryAll)}),R=["matches",D.matchesSelector||D.webkitMatchesSelector||D.khtmlMatchesSelector||D.mozMatchesSelector||D.msMatchesSelector||D.oMatchesSelector||function(t){var e=this.parentNode;return!!e&&-1<p.call(e.querySelectorAll(t),this)},"closest",function(t){for(var e,n=this;(e=n&&n.matches)&&!n.matches(t);)n=n.parentNode;return e?n:null},"prepend",function () {var t=this.firstChild,e=i(arguments);t?this.insertBefore(e,t):this.appendChild(e)},"append",function () {this.appendChild(i(arguments))},"before",function () {var t=this.parentNode;t&&t.insertBefore(i(arguments),this)},"after",function () {var t=this.parentNode,e=this.nextSibling,n=i(arguments);t&&(e?t.insertBefore(n,e):t.appendChild(n))},"replace",function () {this.replaceWith.apply(this,arguments)},"replaceWith",function () {var t=this.parentNode;t&&t.replaceChild(i(arguments),this)},"remove",function () {var t=this.parentNode;t&&t.removeChild(this)},"query",k("querySelector"),"queryAll",k("querySelectorAll")],q=R.slice,I=R.length;I;I-=2)if((s=R[I-2])in D||(D[s]=R[I-1]),"remove"===s&&(N.prototype[s]=function () {return 0<arguments.length?C.apply(this,arguments):D.remove.call(this)}),/^(?:before|after|replace|replaceWith|remove)$/.test(s)&&(!S||s in T||(T[s]=R[I-1]),!M||s in A||(A[s]=R[I-1])),/^(?:append|prepend)$/.test(s))if(_)s in _||(_[s]=R[I-1]);else try{e().constructor.prototype[s]=R[I-1]}catch(t){}if(F(f),_)F(_);else try{F(e().constructor.prototype)}catch(t){}P&&F(P.prototype),n("a").matches("a")||(D[s]=function(t){return function (n){return t.call(this.parentNode?this:e().appendChild(this),n)}}(D[s])),y.prototype={length:0,add:function () {for(var t,e=0;e<arguments.length;e++)t=arguments[e],this.contains(t)||R.push.call(this,s);this._isSVG?this._.setAttribute("class",""+this):this._.className=""+this},contains:function(t){return function (e){return-1<(I=t.call(this,s=v(e)))}}([].indexOf||function(t){for(I=this.length;I--&&this[I]!==t;);return I}),item:function(t){return this[t]||null},remove:function () {for(var t,e=0;e<arguments.length;e++)t=arguments[e],this.contains(t)&&R.splice.call(this,I,1);this._isSVG?this._.setAttribute("class",""+this):this._.className=""+this},toggle:E,toString:function () {return R.join.call(this," ")}},!j||"classList"in j.prototype||d(j.prototype,"classList",m),"classList"in f.documentElement?((u=n("div").classList).add("a","b","a"),"a b"!=u&&("add"in(c=u.constructor.prototype)||(c=t.TemporaryTokenList.prototype),l=function(t){return function () {for(var e=0;e<arguments.length;)t.call(this,arguments[e++])}},c.add=l(c.add),c.remove=l(c.remove),c.toggle=E)):d(D,"classList",m),"contains"in L||d(L,"contains",{value:function(t){for(;t&&t!==this;)t=t.parentNode;return this===t}}),"head"in f||d(f,"head",{get:function () {return a||(a=f.getElementsByTagName("head")[0])}}),function () {for(var e,n=t.requestAnimationFrame,r=t.cancelAnimationFrame,i=["o","ms","moz","webkit"],o=i.length;!r&&o--;)n=n||t[i[o]+"RequestAnimationFrame"],r=t[i[o]+"CancelAnimationFrame"]||t[i[o]+"CancelRequestAnimationFrame"];r||(n?(e=n,n=function(t){var n=!0;return e(function () {n&&t.apply(this,arguments)}),function () {n=!1}},r=function(t){t()}):(n=function(t){return setTimeout(t,15,15)},r=function(t){clearTimeout(t)})),t.requestAnimationFrame=n,t.cancelAnimationFrame=r}();try{new t.CustomEvent("?")}catch(e){t.CustomEvent=function(t,e){function n(t,e,n,r){this.initEvent(t,e,n),this.detail=r}return function (r,i){var o=f.createEvent(t);if("string"!=typeof r)throw new Error("An event name must be provided");return"Event"==t&&(o.initCustomEvent=n),null==i&&(i=e),o.initCustomEvent(r,i.bubbles,i.cancelable,i.detail),o}}(t.CustomEvent?"CustomEvent":"Event",{bubbles:!1,cancelable:!1,detail:null})}try{new Event("_")}catch(e){e=function(t){function e(t,e){r(arguments.length,"Event");var n=f.createEvent("Event");return e||(e={}),n.initEvent(t,!!e.bubbles,!!e.cancelable),n}return e.prototype=t.prototype,e}(t.Event||function () {}),d(t,"Event",{value:e}),Event!==e&&(Event=e)}try{new KeyboardEvent("_",{})}catch(e){e=function(e){function n(t){for(var e=[],n=["ctrlKey","Control","shiftKey","Shift","altKey","Alt","metaKey","Meta","altGraphKey","AltGraph"],r=0;r<n.length;r+=2)t[n[r]]&&e.push(n[r+1]);return e.join(" ")}function i(t,e){for(var n in e)e.hasOwnProperty(n)&&!e.hasOwnProperty.call(t,n)&&(t[n]=e[n]);return t}function o(t,e,n){try{e[t]=n[t]}catch(t){}}function a(e,a){r(arguments.length,"KeyboardEvent"),a=i(a||{},u);var l,h=f.createEvent(s),d=a.ctrlKey,p=a.shiftKey,v=a.altKey,y=a.metaKey,m=a.altGraphKey,b=c>3?n(a):null,w=String(a.key),g=String(a.char),E=a.location,_=a.keyCode||(a.keyCode=w)&&w.charCodeAt(0)||0,O=a.charCode||(a.charCode=g)&&g.charCodeAt(0)||0,L=a.bubbles,S=a.cancelable,T=a.repeat,M=a.locale,A=a.view||t;if(a.which||(a.which=a.keyCode),"initKeyEvent"in h)h.initKeyEvent(e,L,S,A,d,v,p,y,_,O);else if(0<c&&"initKeyboardEvent"in h){switch(l=[e,L,S,A],c){case 1:l.push(w,E,d,p,v,y,m);break;case 2:l.push(d,v,p,y,_,O);break;case 3:l.push(w,E,d,v,p,y,m);break;case 4:l.push(w,E,b,T,M);break;default:l.push(char,w,E,b,T,M)}h.initKeyboardEvent.apply(h,l)}else h.initEvent(e,L,S);for(w in h)u.hasOwnProperty(w)&&h[w]!==a[w]&&o(w,h,a);return h}var s,c=0,u={char:"",key:"",location:0,ctrlKey:!1,shiftKey:!1,altKey:!1,metaKey:!1,altGraphKey:!1,repeat:!1,locale:navigator.language,detail:0,bubbles:!1,cancelable:!1,keyCode:0,charCode:0,which:0};try{var l=f.createEvent("KeyboardEvent");l.initKeyboardEvent("keyup",!1,!1,t,"+",3,!0,!1,!0,!1,!1),c="+"==(l.keyIdentifier||l.key)&&3==(l.keyLocation||l.location)&&(l.ctrlKey?l.altKey?1:3:l.shiftKey?2:4)||9}catch(t){}return s=0<c?"KeyboardEvent":"Event",a.prototype=e.prototype,a}(t.KeyboardEvent||function () {}),d(t,"KeyboardEvent",{value:e}),KeyboardEvent!==e&&(KeyboardEvent=e)}try{new MouseEvent("_",{})}catch(e){e=function(e){function n(e,n){r(arguments.length,"MouseEvent");var i=f.createEvent("MouseEvent");return n||(n={}),i.initMouseEvent(e,!!n.bubbles,!!n.cancelable,n.view||t,n.detail||1,n.screenX||0,n.screenY||0,n.clientX||0,n.clientY||0,!!n.ctrlKey,!!n.altKey,!!n.shiftKey,!!n.metaKey,n.button||0,n.relatedTarget||null),i}return n.prototype=e.prototype,n}(t.MouseEvent||function () {}),d(t,"MouseEvent",{value:e}),MouseEvent!==e&&(MouseEvent=e)}}(window),function(t){"use strict";function e(){}function n(t,e,r){function i(t){i.once&&(t.currentTarget.removeEventListener(t.type,e,i),i.removed=!0),i.passive&&(t.preventDefault=n.preventDefault),"function"==typeof i.callback?i.callback.call(this,t):i.callback&&i.callback.handleEvent(t),i.passive&&delete t.preventDefault}return i.type=t,i.callback=e,i.capture=!!r.capture,i.passive=!!r.passive,i.once=!!r.once,i.removed=!1,i}var r=t.WeakMap||function () {function t(t,e,n){s=n,a=!1,r=void 0,t.dispatchEvent(e)}function e(t){this.value=t}function n(){i++,this.__ce__=new o("@DOMMap:"+i+Math.random())}var r,i=0,a=!1,s=!1;return e.prototype.handleEvent=function(t){a=!0,s?t.currentTarget.removeEventListener(t.type,this,!1):r=this.value},n.prototype={constructor:n,delete:function(e){return t(e,this.__ce__,!0),a},get:function(e){t(e,this.__ce__,!1);var n=r;return r=void 0,n},has:function(e){return t(e,this.__ce__,!1),a},set:function(n,r){return t(n,this.__ce__,!0),n.addEventListener(this.__ce__.type,new e(r),!1),this}},n}();e.prototype=(Object.create||Object)(null),n.preventDefault=function () {};var i,o=t.CustomEvent,a=(Object.prototype.hasOwnProperty,t.dispatchEvent),s=t.addEventListener,c=t.removeEventListener,u=0,l=function () {u++},f=[].indexOf||function(t){for(var e=this.length;e--&&this[e]!==t;);return e},h=function(t){return"".concat(t.capture?"1":"0",t.passive?"1":"0",t.once?"1":"0")};try{s("_",l,{once:!0}),a(new o("_")),a(new o("_")),c("_",l,{once:!0})}catch(t){}1!==u&&function () {function o(t){return function (r,i,o){if(o&&"boolean"!=typeof o){var a,c,u,l=s.get(this),d=h(o);l||s.set(this,l=new e),r in l||(l[r]={handler:[],wrap:[]}),c=l[r],(a=f.call(c.handler,i))<0?(a=c.handler.push(i)-1,c.wrap[a]=u=new e):u=c.wrap[a],d in u||(u[d]=n(r,i,o),t.call(this,r,u[d],u[d].capture))}else t.call(this,r,i,o)}}function a(t){return function (e,n,r){if(r&&"boolean"!=typeof r){var i,o,a,c,u=s.get(this);if(u&&e in u&&(a=u[e],-1<(o=f.call(a.handler,n))&&(i=h(r),c=a.wrap[o],i in c))){t.call(this,e,c[i],c[i].capture),delete c[i];for(i in c)return;a.handler.splice(o,1),a.wrap.splice(o,1),0===a.handler.length&&delete u[e]}}else t.call(this,e,n,r)}}var s=new r;i=function(t){if(t){var e=t.prototype;e.addEventListener=o(e.addEventListener),e.removeEventListener=a(e.removeEventListener)}},t.EventTarget?i(EventTarget):(i(t.Text),i(t.Element||t.HTMLElement),i(t.HTMLDocument),i(t.Window||{prototype:t}),i(t.XMLHttpRequest))}()}(self);












function _typeof(obj) {
	if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
		_typeof = function _typeof(obj) {
			return typeof obj;
		};
	} else {
		_typeof = function _typeof(obj) {
			return obj &&
				typeof Symbol === "function" &&
				obj.constructor === Symbol &&
				obj !== Symbol.prototype
				? "symbol"
				: typeof obj;
		};
	}
	return _typeof(obj);
}

/*!
 * Platform.js <https://mths.be/platform>
 * Copyright 2014-2016 Benjamin Tan <https://demoneaux.github.io/>
 * Copyright 2011-2013 John-David Dalton <http://allyoucanleet.com/>
 * Available under MIT license <https://mths.be/mit>
 */

/* jshint ignore:start */
(function () {
	"use strict";

	var objectTypes = {
		function: true,
		object: true
	};
	var root =
		(objectTypes[
			typeof window === "undefined" ? "undefined" : _typeof(window)
		] &&
			window) ||
		this;
	var oldRoot = root;
	var freeExports =
		objectTypes[
			typeof exports === "undefined" ? "undefined" : _typeof(exports)
		] && exports;
	var freeModule =
		objectTypes[
			typeof module === "undefined" ? "undefined" : _typeof(module)
		] &&
		module &&
		!module.nodeType &&
		module;
	var freeGlobal =
		freeExports &&
		freeModule &&
		(typeof global === "undefined" ? "undefined" : _typeof(global)) ==
			"object" &&
		global;

	if (
		freeGlobal &&
		(freeGlobal.global === freeGlobal ||
			freeGlobal.window === freeGlobal ||
			freeGlobal.self === freeGlobal)
	) {
		root = freeGlobal;
	}

	var maxSafeInteger = Math.pow(2, 53) - 1;
	var reOpera = /\bOpera/;
	var thisBinding = this;
	var objectProto = Object.prototype;
	var hasOwnProperty = objectProto.hasOwnProperty;
	var toString = objectProto.toString;

	function capitalize(string) {
		string = String(string);
		return string.charAt(0).toUpperCase() + string.slice(1);
	}

	function cleanupOS(os, pattern, label) {
		var data = {
			"10.0": "10",
			"6.4": "10 Technical Preview",
			"6.3": "8.1",
			"6.2": "8",
			"6.1": "Server 2008 R2 / 7",
			"6.0": "Server 2008 / Vista",
			"5.2": "Server 2003 / XP 64-bit",
			"5.1": "XP",
			"5.01": "2000 SP1",
			"5.0": "2000",
			"4.0": "NT",
			"4.90": "ME"
		};

		if (
			pattern &&
			label &&
			/^Win/i.test(os) &&
			!/^Windows Phone /i.test(os) &&
			(data = data[/[\d.]+$/.exec(os)])
		) {
			os = "Windows " + data;
		}

		os = String(os);

		if (pattern && label) {
			os = os.replace(RegExp(pattern, "i"), label);
		}

		os = format(
			os
				.replace(/ ce$/i, " CE")
				.replace(/\bhpw/i, "web")
				.replace(/\bMacintosh\b/, "Mac OS")
				.replace(/_PowerPC\b/i, " OS")
				.replace(/\b(OS X) [^ \d]+/i, "$1")
				.replace(/\bMac (OS X)\b/, "$1")
				.replace(/\/(\d)/, " $1")
				.replace(/_/g, ".")
				.replace(/(?: BePC|[ .]*fc[ \d.]+)$/i, "")
				.replace(/\bx86\.64\b/gi, "x86_64")
				.replace(/\b(Windows Phone) OS\b/, "$1")
				.replace(/\b(Chrome OS \w+) [\d.]+\b/, "$1")
				.split(" on ")[0]
		);
		return os;
	}

	function each(object, callback) {
		var index = -1,
			length = object ? object.length : 0;

		if (
			typeof length == "number" &&
			length > -1 &&
			length <= maxSafeInteger
		) {
			while (++index < length) {
				callback(object[index], index, object);
			}
		} else {
			forOwn(object, callback);
		}
	}

	function format(string) {
		string = trim(string);
		return /^(?:webOS|i(?:OS|P))/.test(string)
			? string
			: capitalize(string);
	}

	function forOwn(object, callback) {
		for (var key in object) {
			if (hasOwnProperty.call(object, key)) {
				callback(object[key], key, object);
			}
		}
	}

	function getClassOf(value) {
		return value == null
			? capitalize(value)
			: toString.call(value).slice(8, -1);
	}

	function isHostType(object, property) {
		var type = object != null ? _typeof(object[property]) : "number";
		return (
			!/^(?:boolean|number|string|undefined)$/.test(type) &&
			(type == "object" ? !!object[property] : true)
		);
	}

	function qualify(string) {
		return String(string).replace(/([ -])(?!$)/g, "$1?");
	}

	function reduce(array, callback) {
		var accumulator = null;
		each(array, function(value, index) {
			accumulator = callback(accumulator, value, index, array);
		});
		return accumulator;
	}

	function trim(string) {
		return String(string).replace(/^ +| +$/g, "");
	}

	function parse(ua) {
		var context = root;
		var isCustomContext =
			ua && _typeof(ua) == "object" && getClassOf(ua) != "String";

		if (isCustomContext) {
			context = ua;
			ua = null;
		}

		var nav = context.navigator || {};
		var userAgent = nav.userAgent || "";
		ua || (ua = userAgent);
		var isModuleScope = isCustomContext || thisBinding == oldRoot;
		var likeChrome = isCustomContext
			? !!nav.likeChrome
			: /\bChrome\b/.test(ua) &&
			  !/internal|\n/i.test(toString.toString());
		var objectClass = "Object",
			airRuntimeClass = isCustomContext
				? objectClass
				: "ScriptBridgingProxyObject",
			enviroClass = isCustomContext ? objectClass : "Environment",
			javaClass =
				isCustomContext && context.java
					? "JavaPackage"
					: getClassOf(context.java),
			phantomClass = isCustomContext ? objectClass : "RuntimeObject";
		var java = /\bJava/.test(javaClass) && context.java;
		var rhino = java && getClassOf(context.environment) == enviroClass;
		var alpha = java ? "a" : "\u03B1";
		var beta = java ? "b" : "\u03B2";
		var doc = context.document || {};
		var opera = context.operamini || context.opera;
		var operaClass = reOpera.test(
			(operaClass =
				isCustomContext && opera
					? opera["[[Class]]"]
					: getClassOf(opera))
		)
			? operaClass
			: (opera = null);
		var data;
		var arch = ua;
		var description = [];
		var prerelease = null;
		var useFeatures = ua == userAgent;
		var version =
			useFeatures &&
			opera &&
			typeof opera.version == "function" &&
			opera.version();
		var isSpecialCasedOS;
		var layout = getLayout([
			{
				label: "EdgeHTML",
				pattern: "Edge"
			},
			"Trident",
			{
				label: "WebKit",
				pattern: "AppleWebKit"
			},
			"iCab",
			"Presto",
			"NetFront",
			"Tasman",
			"KHTML",
			"Gecko"
		]);
		var name = getName([
			"Adobe AIR",
			"Arora",
			"Avant Browser",
			"Breach",
			"Camino",
			"Electron",
			"Epiphany",
			"Fennec",
			"Flock",
			"Galeon",
			"GreenBrowser",
			"iCab",
			"Iceweasel",
			"K-Meleon",
			"Konqueror",
			"Lunascape",
			"Maxthon",
			{
				label: "Microsoft Edge",
				pattern: "Edge"
			},
			"Midori",
			"Nook Browser",
			"PaleMoon",
			"PhantomJS",
			"Raven",
			"Rekonq",
			"RockMelt",
			{
				label: "Samsung Internet",
				pattern: "SamsungBrowser"
			},
			"SeaMonkey",
			{
				label: "Silk",
				pattern: "(?:Cloud9|Silk-Accelerated)"
			},
			"Sleipnir",
			"SlimBrowser",
			{
				label: "SRWare Iron",
				pattern: "Iron"
			},
			"Sunrise",
			"Swiftfox",
			"Waterfox",
			"WebPositive",
			"Opera Mini",
			{
				label: "Opera Mini",
				pattern: "OPiOS"
			},
			"Opera",
			{
				label: "Opera",
				pattern: "OPR"
			},
			"Chrome",
			{
				label: "Chrome Mobile",
				pattern: "(?:CriOS|CrMo)"
			},
			{
				label: "Firefox",
				pattern: "(?:Firefox|Minefield)"
			},
			{
				label: "Firefox for iOS",
				pattern: "FxiOS"
			},
			{
				label: "IE",
				pattern: "IEMobile"
			},
			{
				label: "IE",
				pattern: "MSIE"
			},
			"Safari"
		]);
		var product = getProduct([
			{
				label: "BlackBerry",
				pattern: "BB10"
			},
			"BlackBerry",
			{
				label: "Galaxy S",
				pattern: "GT-I9000"
			},
			{
				label: "Galaxy S2",
				pattern: "GT-I9100"
			},
			{
				label: "Galaxy S3",
				pattern: "GT-I9300"
			},
			{
				label: "Galaxy S4",
				pattern: "GT-I9500"
			},
			{
				label: "Galaxy S5",
				pattern: "SM-G900"
			},
			{
				label: "Galaxy S6",
				pattern: "SM-G920"
			},
			{
				label: "Galaxy S6 Edge",
				pattern: "SM-G925"
			},
			{
				label: "Galaxy S7",
				pattern: "SM-G930"
			},
			{
				label: "Galaxy S7 Edge",
				pattern: "SM-G935"
			},
			"Google TV",
			"Lumia",
			"iPad",
			"iPod",
			"iPhone",
			"Kindle",
			{
				label: "Kindle Fire",
				pattern: "(?:Cloud9|Silk-Accelerated)"
			},
			"Nexus",
			"Nook",
			"PlayBook",
			"PlayStation Vita",
			"PlayStation",
			"TouchPad",
			"Transformer",
			{
				label: "Wii U",
				pattern: "WiiU"
			},
			"Wii",
			"Xbox One",
			{
				label: "Xbox 360",
				pattern: "Xbox"
			},
			"Xoom"
		]);
		var manufacturer = getManufacturer({
			Apple: {
				iPad: 1,
				iPhone: 1,
				iPod: 1
			},
			Archos: {},
			Amazon: {
				Kindle: 1,
				"Kindle Fire": 1
			},
			Asus: {
				Transformer: 1
			},
			"Barnes & Noble": {
				Nook: 1
			},
			BlackBerry: {
				PlayBook: 1
			},
			Google: {
				"Google TV": 1,
				Nexus: 1
			},
			HP: {
				TouchPad: 1
			},
			HTC: {},
			LG: {},
			Microsoft: {
				Xbox: 1,
				"Xbox One": 1
			},
			Motorola: {
				Xoom: 1
			},
			Nintendo: {
				"Wii U": 1,
				Wii: 1
			},
			Nokia: {
				Lumia: 1
			},
			Samsung: {
				"Galaxy S": 1,
				"Galaxy S2": 1,
				"Galaxy S3": 1,
				"Galaxy S4": 1
			},
			Sony: {
				PlayStation: 1,
				"PlayStation Vita": 1
			}
		});
		var os = getOS([
			"Windows Phone",
			"Android",
			"CentOS",
			{
				label: "Chrome OS",
				pattern: "CrOS"
			},
			"Debian",
			"Fedora",
			"FreeBSD",
			"Gentoo",
			"Haiku",
			"Kubuntu",
			"Linux Mint",
			"OpenBSD",
			"Red Hat",
			"SuSE",
			"Ubuntu",
			"Xubuntu",
			"Cygwin",
			"Symbian OS",
			"hpwOS",
			"webOS ",
			"webOS",
			"Tablet OS",
			"Tizen",
			"Linux",
			"Mac OS X",
			"Macintosh",
			"Mac",
			"Windows 98;",
			"Windows "
		]);

		function getLayout(guesses) {
			return reduce(guesses, function(result, guess) {
				return (
					result ||
					(RegExp(
						"\\b" + (guess.pattern || qualify(guess)) + "\\b",
						"i"
					).exec(ua) &&
						(guess.label || guess))
				);
			});
		}

		function getManufacturer(guesses) {
			return reduce(guesses, function(result, value, key) {
				return (
					result ||
					((value[product] ||
						value[/^[a-z]+(?: +[a-z]+\b)*/i.exec(product)] ||
						RegExp(
							"\\b" + qualify(key) + "(?:\\b|\\w*\\d)",
							"i"
						).exec(ua)) &&
						key)
				);
			});
		}

		function getName(guesses) {
			return reduce(guesses, function(result, guess) {
				return (
					result ||
					(RegExp(
						"\\b" + (guess.pattern || qualify(guess)) + "\\b",
						"i"
					).exec(ua) &&
						(guess.label || guess))
				);
			});
		}

		function getOS(guesses) {
			return reduce(guesses, function(result, guess) {
				var pattern = guess.pattern || qualify(guess);

				if (
					!result &&
					(result = RegExp(
						"\\b" + pattern + "(?:/[\\d.]+|[ \\w.]*)",
						"i"
					).exec(ua))
				) {
					result = cleanupOS(result, pattern, guess.label || guess);
				}

				return result;
			});
		}

		function getProduct(guesses) {
			return reduce(guesses, function(result, guess) {
				var pattern = guess.pattern || qualify(guess);

				if (
					!result &&
					(result =
						RegExp("\\b" + pattern + " *\\d+[.\\w_]*", "i").exec(
							ua
						) ||
						RegExp("\\b" + pattern + " *\\w+-[\\w]*", "i").exec(
							ua
						) ||
						RegExp(
							"\\b" +
								pattern +
								"(?:; *(?:[a-z]+[_-])?[a-z]+\\d+|[^ ();-]*)",
							"i"
						).exec(ua))
				) {
					if (
						(result = String(
							guess.label &&
								!RegExp(pattern, "i").test(guess.label)
								? guess.label
								: result
						).split("/"))[1] &&
						!/[\d.]+/.test(result[0])
					) {
						result[0] += " " + result[1];
					}

					guess = guess.label || guess;
					result = format(
						result[0]
							.replace(RegExp(pattern, "i"), guess)
							.replace(
								RegExp("; *(?:" + guess + "[_-])?", "i"),
								" "
							)
							.replace(
								RegExp("(" + guess + ")[-_.]?(\\w)", "i"),
								"$1 $2"
							)
					);
				}

				return result;
			});
		}

		function getVersion(patterns) {
			return reduce(patterns, function(result, pattern) {
				return (
					result ||
					(RegExp(
						pattern +
							"(?:-[\\d.]+/|(?: for [\\w-]+)?[ /-])([\\d.]+[^ ();/_-]*)",
						"i"
					).exec(ua) || 0)[1] ||
					null
				);
			});
		}

		function toStringPlatform() {
			return this.description || "";
		}

		layout && (layout = [layout]);

		if (manufacturer && !product) {
			product = getProduct([manufacturer]);
		}

		if ((data = /\bGoogle TV\b/.exec(product))) {
			product = data[0];
		}

		if (/\bSimulator\b/i.test(ua)) {
			product = (product ? product + " " : "") + "Simulator";
		}

		if (name == "Opera Mini" && /\bOPiOS\b/.test(ua)) {
			description.push("running in Turbo/Uncompressed mode");
		}

		if (name == "IE" && /\blike iPhone OS\b/.test(ua)) {
			data = parse(ua.replace(/like iPhone OS/, ""));
			manufacturer = data.manufacturer;
			product = data.product;
		} else if (/^iP/.test(product)) {
			name || (name = "Safari");
			os =
				"iOS" +
				((data = / OS ([\d_]+)/i.exec(ua))
					? " " + data[1].replace(/_/g, ".")
					: "");
		} else if (name == "Konqueror" && !/buntu/i.test(os)) {
			os = "Kubuntu";
		} else if (
			(manufacturer &&
				manufacturer != "Google" &&
				((/Chrome/.test(name) && !/\bMobile Safari\b/i.test(ua)) ||
					/\bVita\b/.test(product))) ||
			(/\bAndroid\b/.test(os) &&
				/^Chrome/.test(name) &&
				/\bVersion\//i.test(ua))
		) {
			name = "Android Browser";
			os = /\bAndroid\b/.test(os) ? os : "Android";
		} else if (name == "Silk") {
			if (!/\bMobi/i.test(ua)) {
				os = "Android";
				description.unshift("desktop mode");
			}

			if (/Accelerated *= *true/i.test(ua)) {
				description.unshift("accelerated");
			}
		} else if (
			name == "PaleMoon" &&
			(data = /\bFirefox\/([\d.]+)\b/.exec(ua))
		) {
			description.push("identifying as Firefox " + data[1]);
		} else if (
			name == "Firefox" &&
			(data = /\b(Mobile|Tablet|TV)\b/i.exec(ua))
		) {
			os || (os = "Firefox OS");
			product || (product = data[1]);
		} else if (
			!name ||
			(data =
				!/\bMinefield\b/i.test(ua) &&
				/\b(?:Firefox|Safari)\b/.exec(name))
		) {
			if (
				name &&
				!product &&
				/[\/,]|^[^(]+?\)/.test(ua.slice(ua.indexOf(data + "/") + 8))
			) {
				name = null;
			}

			if (
				(data = product || manufacturer || os) &&
				(product ||
					manufacturer ||
					/\b(?:Android|Symbian OS|Tablet OS|webOS)\b/.test(os))
			) {
				name =
					/[a-z]+(?: Hat)?/i.exec(
						/\bAndroid\b/.test(os) ? os : data
					) + " Browser";
			}
		} else if (
			name == "Electron" &&
			(data = (/\bChrome\/([\d.]+)\b/.exec(ua) || 0)[1])
		) {
			description.push("Chromium " + data);
		}

		if (!version) {
			version = getVersion([
				"(?:Cloud9|CriOS|CrMo|Edge|FxiOS|IEMobile|Iron|Opera ?Mini|OPiOS|OPR|Raven|SamsungBrowser|Silk(?!/[\\d.]+$))",
				"Version",
				qualify(name),
				"(?:Firefox|Minefield|NetFront)"
			]);
		}

		if (
			(data =
				(layout == "iCab" && parseFloat(version) > 3 && "WebKit") ||
				(/\bOpera\b/.test(name) &&
					(/\bOPR\b/.test(ua) ? "Blink" : "Presto")) ||
				(/\b(?:Midori|Nook|Safari)\b/i.test(ua) &&
					!/^(?:Trident|EdgeHTML)$/.test(layout) &&
					"WebKit") ||
				(!layout &&
					/\bMSIE\b/i.test(ua) &&
					(os == "Mac OS" ? "Tasman" : "Trident")) ||
				(layout == "WebKit" &&
					/\bPlayStation\b(?! Vita\b)/i.test(name) &&
					"NetFront"))
		) {
			layout = [data];
		}

		if (
			name == "IE" &&
			(data = (/; *(?:XBLWP|ZuneWP)(\d+)/i.exec(ua) || 0)[1])
		) {
			name += " Mobile";
			os = "Windows Phone " + (/\+$/.test(data) ? data : data + ".x");
			description.unshift("desktop mode");
		} else if (/\bWPDesktop\b/i.test(ua)) {
			name = "IE Mobile";
			os = "Windows Phone 8.x";
			description.unshift("desktop mode");
			version || (version = (/\brv:([\d.]+)/.exec(ua) || 0)[1]);
		} else if (
			name != "IE" &&
			layout == "Trident" &&
			(data = /\brv:([\d.]+)/.exec(ua))
		) {
			if (name) {
				description.push(
					"identifying as " + name + (version ? " " + version : "")
				);
			}

			name = "IE";
			version = data[1];
		}

		if (useFeatures) {
			if (isHostType(context, "global")) {
				if (java) {
					data = java.lang.System;
					arch = data.getProperty("os.arch");
					os =
						os ||
						data.getProperty("os.name") +
							" " +
							data.getProperty("os.version");
				}

				if (
					isModuleScope &&
					isHostType(context, "system") &&
					(data = [context.system])[0]
				) {
					os || (os = data[0].os || null);

					try {
						data[1] = context.require("ringo/engine").version;
						version = data[1].join(".");
						name = "RingoJS";
					} catch (e) {
						if (data[0].global.system == context.system) {
							name = "Narwhal";
						}
					}
				} else if (
					_typeof(context.process) == "object" &&
					!context.process.browser &&
					(data = context.process)
				) {
					if (_typeof(data.versions) == "object") {
						if (typeof data.versions.electron == "string") {
							description.push("Node " + data.versions.node);
							name = "Electron";
							version = data.versions.electron;
						} else if (typeof data.versions.nw == "string") {
							description.push(
								"Chromium " + version,
								"Node " + data.versions.node
							);
							name = "NW.js";
							version = data.versions.nw;
						}
					} else {
						name = "Node.js";
						arch = data.arch;
						os = data.platform;
						version = /[\d.]+/.exec(data.version);
						version = version ? version[0] : "unknown";
					}
				} else if (rhino) {
					name = "Rhino";
				}
			} else if (
				getClassOf((data = context.runtime)) == airRuntimeClass
			) {
				name = "Adobe AIR";
				os = data.flash.system.Capabilities.os;
			} else if (getClassOf((data = context.phantom)) == phantomClass) {
				name = "PhantomJS";
				version =
					(data = data.version || null) &&
					data.major + "." + data.minor + "." + data.patch;
			} else if (
				typeof doc.documentMode == "number" &&
				(data = /\bTrident\/(\d+)/i.exec(ua))
			) {
				version = [version, doc.documentMode];

				if ((data = +data[1] + 4) != version[1]) {
					description.push("IE " + version[1] + " mode");
					layout && (layout[1] = "");
					version[1] = data;
				}

				version =
					name == "IE" ? String(version[1].toFixed(1)) : version[0];
			} else if (
				typeof doc.documentMode == "number" &&
				/^(?:Chrome|Firefox)\b/.test(name)
			) {
				description.push("masking as " + name + " " + version);
				name = "IE";
				version = "11.0";
				layout = ["Trident"];
				os = "Windows";
			}

			os = os && format(os);
		}

		if (
			version &&
			(data =
				/(?:[ab]|dp|pre|[ab]\d+pre)(?:\d+\+?)?$/i.exec(version) ||
				/(?:alpha|beta)(?: ?\d)?/i.exec(
					ua + ";" + (useFeatures && nav.appMinorVersion)
				) ||
				(/\bMinefield\b/i.test(ua) && "a"))
		) {
			prerelease = /b/i.test(data) ? "beta" : "alpha";
			version =
				version.replace(RegExp(data + "\\+?$"), "") +
				(prerelease == "beta" ? beta : alpha) +
				(/\d+\+?/.exec(data) || "");
		}

		if (
			name == "Fennec" ||
			(name == "Firefox" && /\b(?:Android|Firefox OS)\b/.test(os))
		) {
			name = "Firefox Mobile";
		} else if (name == "Maxthon" && version) {
			version = version.replace(/\.[\d.]+/, ".x");
		} else if (/\bXbox\b/i.test(product)) {
			if (product == "Xbox 360") {
				os = null;
			}

			if (product == "Xbox 360" && /\bIEMobile\b/.test(ua)) {
				description.unshift("mobile mode");
			}
		} else if (
			(/^(?:Chrome|IE|Opera)$/.test(name) ||
				(name && !product && !/Browser|Mobi/.test(name))) &&
			(os == "Windows CE" || /Mobi/i.test(ua))
		) {
			name += " Mobile";
		} else if (name == "IE" && useFeatures) {
			try {
				if (context.external === null) {
					description.unshift("platform preview");
				}
			} catch (e) {
				description.unshift("embedded");
			}
		} else if (
			(/\bBlackBerry\b/.test(product) || /\bBB10\b/.test(ua)) &&
			(data =
				(RegExp(product.replace(/ +/g, " *") + "/([.\\d]+)", "i").exec(
					ua
				) || 0)[1] || version)
		) {
			data = [data, /BB10/.test(ua)];
			os =
				(data[1]
					? ((product = null), (manufacturer = "BlackBerry"))
					: "Device Software") +
				" " +
				data[0];
			version = null;
		} else if (
			this != forOwn &&
			product != "Wii" &&
			((useFeatures && opera) ||
				(/Opera/.test(name) && /\b(?:MSIE|Firefox)\b/i.test(ua)) ||
				(name == "Firefox" && /\bOS X (?:\d+\.){2,}/.test(os)) ||
				(name == "IE" &&
					((os && !/^Win/.test(os) && version > 5.5) ||
						(/\bWindows XP\b/.test(os) && version > 8) ||
						(version == 8 && !/\bTrident\b/.test(ua))))) &&
			!reOpera.test(
				(data = parse.call(forOwn, ua.replace(reOpera, "") + ";"))
			) &&
			data.name
		) {
			data =
				"ing as " +
				data.name +
				((data = data.version) ? " " + data : "");

			if (reOpera.test(name)) {
				if (/\bIE\b/.test(data) && os == "Mac OS") {
					os = null;
				}

				data = "identify" + data;
			} else {
				data = "mask" + data;

				if (operaClass) {
					name = format(
						operaClass.replace(/([a-z])([A-Z])/g, "$1 $2")
					);
				} else {
					name = "Opera";
				}

				if (/\bIE\b/.test(data)) {
					os = null;
				}

				if (!useFeatures) {
					version = null;
				}
			}

			layout = ["Presto"];
			description.push(data);
		}

		if ((data = (/\bAppleWebKit\/([\d.]+\+?)/i.exec(ua) || 0)[1])) {
			data = [parseFloat(data.replace(/\.(\d)$/, ".0$1")), data];

			if (name == "Safari" && data[1].slice(-1) == "+") {
				name = "WebKit Nightly";
				prerelease = "alpha";
				version = data[1].slice(0, -1);
			} else if (
				version == data[1] ||
				version ==
					(data[2] = (/\bSafari\/([\d.]+\+?)/i.exec(ua) || 0)[1])
			) {
				version = null;
			}

			data[1] = (/\bChrome\/([\d.]+)/i.exec(ua) || 0)[1];

			if (
				data[0] == 537.36 &&
				data[2] == 537.36 &&
				parseFloat(data[1]) >= 28 &&
				layout == "WebKit"
			) {
				layout = ["Blink"];
			}

			if (!useFeatures || (!likeChrome && !data[1])) {
				layout && (layout[1] = "like Safari");
				data = ((data = data[0]),
				data < 400
					? 1
					: data < 500
					? 2
					: data < 526
					? 3
					: data < 533
					? 4
					: data < 534
					? "4+"
					: data < 535
					? 5
					: data < 537
					? 6
					: data < 538
					? 7
					: data < 601
					? 8
					: "8");
			} else {
				layout && (layout[1] = "like Chrome");
				data =
					data[1] ||
					((data = data[0]),
					data < 530
						? 1
						: data < 532
						? 2
						: data < 532.05
						? 3
						: data < 533
						? 4
						: data < 534.03
						? 5
						: data < 534.07
						? 6
						: data < 534.1
						? 7
						: data < 534.13
						? 8
						: data < 534.16
						? 9
						: data < 534.24
						? 10
						: data < 534.3
						? 11
						: data < 535.01
						? 12
						: data < 535.02
						? "13+"
						: data < 535.07
						? 15
						: data < 535.11
						? 16
						: data < 535.19
						? 17
						: data < 536.05
						? 18
						: data < 536.1
						? 19
						: data < 537.01
						? 20
						: data < 537.11
						? "21+"
						: data < 537.13
						? 23
						: data < 537.18
						? 24
						: data < 537.24
						? 25
						: data < 537.36
						? 26
						: layout != "Blink"
						? "27"
						: "28");
			}

			layout &&
				(layout[1] +=
					" " +
					(data +=
						typeof data == "number"
							? ".x"
							: /[.+]/.test(data)
							? ""
							: "+"));

			if (name == "Safari" && (!version || parseInt(version) > 45)) {
				version = data;
			}
		}

		if (name == "Opera" && (data = /\bzbov|zvav$/.exec(os))) {
			name += " ";
			description.unshift("desktop mode");

			if (data == "zvav") {
				name += "Mini";
				version = null;
			} else {
				name += "Mobile";
			}

			os = os.replace(RegExp(" *" + data + "$"), "");
		} else if (name == "Safari" && /\bChrome\b/.exec(layout && layout[1])) {
			description.unshift("desktop mode");
			name = "Chrome Mobile";
			version = null;

			if (/\bOS X\b/.test(os)) {
				manufacturer = "Apple";
				os = "iOS 4.3+";
			} else {
				os = null;
			}
		}

		if (
			version &&
			version.indexOf((data = /[\d.]+$/.exec(os))) == 0 &&
			ua.indexOf("/" + data + "-") > -1
		) {
			os = trim(os.replace(data, ""));
		}

		if (
			layout &&
			!/\b(?:Avant|Nook)\b/.test(name) &&
			(/Browser|Lunascape|Maxthon/.test(name) ||
				(name != "Safari" &&
					/^iOS/.test(os) &&
					/\bSafari\b/.test(layout[1])) ||
				(/^(?:Adobe|Arora|Breach|Midori|Opera|Phantom|Rekonq|Rock|Samsung Internet|Sleipnir|Web)/.test(
					name
				) &&
					layout[1]))
		) {
			(data = layout[layout.length - 1]) && description.push(data);
		}

		if (description.length) {
			description = ["(" + description.join("; ") + ")"];
		}

		if (manufacturer && product && product.indexOf(manufacturer) < 0) {
			description.push("on " + manufacturer);
		}

		if (product) {
			description.push(
				(/^on /.test(description[description.length - 1])
					? ""
					: "on ") + product
			);
		}

		if (os) {
			data = / ([\d.+]+)$/.exec(os);
			isSpecialCasedOS =
				data && os.charAt(os.length - data[0].length - 1) == "/";
			os = {
				architecture: 32,
				family:
					data && !isSpecialCasedOS ? os.replace(data[0], "") : os,
				version: data ? data[1] : null,
				toString: function toString() {
					var version = this.version;
					return (
						this.family +
						(version && !isSpecialCasedOS ? " " + version : "") +
						(this.architecture == 64 ? " 64-bit" : "")
					);
				}
			};
		}

		if (
			(data = /\b(?:AMD|IA|Win|WOW|x86_|x)64\b/i.exec(arch)) &&
			!/\bi686\b/i.test(arch)
		) {
			if (os) {
				os.architecture = 64;
				os.family = os.family.replace(RegExp(" *" + data), "");
			}

			if (
				name &&
				(/\bWOW64\b/i.test(ua) ||
					(useFeatures &&
						/\w(?:86|32)$/.test(nav.cpuClass || nav.platform) &&
						!/\bWin64; x64\b/i.test(ua)))
			) {
				description.unshift("32-bit");
			}
		} else if (
			os &&
			/^OS X/.test(os.family) &&
			name == "Chrome" &&
			parseFloat(version) >= 39
		) {
			os.architecture = 64;
		}

		ua || (ua = null);
		var platform = {};
		platform.description = ua;
		platform.layout = layout && layout[0];
		platform.manufacturer = manufacturer;
		platform.name = name;
		platform.prerelease = prerelease;
		platform.product = product;
		platform.ua = ua;
		platform.version = name && version;
		platform.os = os || {
			architecture: null,
			family: null,
			version: null,
			toString: function toString() {
				return "null";
			}
		};
		platform.parse = parse;
		platform.toString = toStringPlatform;

		if (platform.version) {
			description.unshift(version);
		}

		if (platform.name) {
			description.unshift(name);
		}

		if (
			os &&
			name &&
			!(
				os == String(os).split(" ")[0] &&
				(os == name.split(" ")[0] || product)
			)
		) {
			description.push(product ? "(" + os + ")" : "on " + os);
		}

		if (description.length) {
			platform.description = description.join(" ");
		}

		return platform;
	}

	var platform = parse();

	if (
		typeof define == "function" &&
		_typeof(define.amd) == "object" &&
		define.amd
	) {
		root.platform = platform;
		define(function () {
			return platform;
		});
	} else if (freeExports && freeModule) {
		forOwn(platform, function(value, key) {
			freeExports[key] = value;
		});
	} else {
		root.platform = platform;
	}
}.call(this));
/* jshint ignore:end */

/**
 * Parallax.js
 * @author Matthew Wagerfield - @wagerfield
 * @description Creates a parallax effect between an array of layers,
 *	   driving the motion from the gyroscope output of a smartdevice.
 *	   If no gyroscope is available, the cursor position is used.
 */
(function(window, document, undefined) {
	// Strict Mode
	"use strict"; // Constants

	var NAME = "Parallax";
	var MAGIC_NUMBER = 30;
	var DEFAULTS = {
		relativeInput: false,
		clipRelativeInput: false,
		calibrationThreshold: 100,
		calibrationDelay: 500,
		supportDelay: 500,
		calibrateX: false,
		calibrateY: true,
		invertX: true,
		invertY: true,
		limitX: false,
		limitY: false,
		scalarX: 10.0,
		scalarY: 10.0,
		frictionX: 0.1,
		frictionY: 0.1,
		originX: 0.5,
		originY: 0.5,
		pointerEvents: true,
		precision: 1
	};

	function Parallax(element, options) {
		// DOM Context
		this.element = element;
		this.layers = element.getElementsByClassName("layer"); // Data Extraction

		var data = {
			calibrateX: this.data(this.element, "calibrate-x"),
			calibrateY: this.data(this.element, "calibrate-y"),
			invertX: this.data(this.element, "invert-x"),
			invertY: this.data(this.element, "invert-y"),
			limitX: this.data(this.element, "limit-x"),
			limitY: this.data(this.element, "limit-y"),
			scalarX: this.data(this.element, "scalar-x"),
			scalarY: this.data(this.element, "scalar-y"),
			frictionX: this.data(this.element, "friction-x"),
			frictionY: this.data(this.element, "friction-y"),
			originX: this.data(this.element, "origin-x"),
			originY: this.data(this.element, "origin-y"),
			pointerEvents: this.data(this.element, "pointer-events"),
			precision: this.data(this.element, "precision")
		}; // Delete Null Data Values

		for (var key in data) {
			if (data[key] === null) delete data[key];
		} // Compose Settings Object

		this.extend(this, DEFAULTS, options, data); // States

		this.calibrationTimer = null;
		this.calibrationFlag = true;
		this.enabled = false;
		this.depthsX = [];
		this.depthsY = [];
		this.raf = null; // Element Bounds

		this.bounds = null;
		this.ex = 0;
		this.ey = 0;
		this.ew = 0;
		this.eh = 0; // Element Center

		this.ecx = 0;
		this.ecy = 0; // Element Range

		this.erx = 0;
		this.ery = 0; // Calibration

		this.cx = 0;
		this.cy = 0; // Input

		this.ix = 0;
		this.iy = 0; // Motion

		this.mx = 0;
		this.my = 0; // Velocity

		this.vx = 0;
		this.vy = 0; // Callbacks

		this.onMouseMove = this.onMouseMove.bind(this);
		this.onDeviceOrientation = this.onDeviceOrientation.bind(this);
		this.onOrientationTimer = this.onOrientationTimer.bind(this);
		this.onCalibrationTimer = this.onCalibrationTimer.bind(this);
		this.onAnimationFrame = this.onAnimationFrame.bind(this);
		this.onWindowResize = this.onWindowResize.bind(this); // Initialise

		this.initialise();
	}

	Parallax.prototype.extend = function () {
		if (arguments.length > 1) {
			var master = arguments[0];

			for (var i = 1, l = arguments.length; i < l; i += 1) {
				var object = arguments[i];

				for (var key in object) {
					if (object.hasOwnProperty(key)) {
						master[key] = object[key];
					}
				}
			}
		}
	};

	Parallax.prototype.data = function (element, name) {
		return this.deserialize(element.getAttribute("data-" + name));
	};

	Parallax.prototype.deserialize = function (value) {
		if (value === "true") {
			return true;
		} else if (value === "false") {
			return false;
		} else if (value === "null") {
			return null;
		} else if (!isNaN(parseFloat(value)) && isFinite(value)) {
			return parseFloat(value);
		} else {
			return value;
		}
	};

	Parallax.prototype.camelCase = function (value) {
		return value.replace(/-+(.)?/g, function(match, character) {
			return character ? character.toUpperCase() : "";
		});
	};

	Parallax.prototype.transformSupport = function (value) {
		var element = document.createElement("div");
		var propertySupport = false;
		var propertyValue = null;
		var featureSupport = false;
		var cssProperty = null;
		var jsProperty = null;

		for (var i = 0, l = this.vendors.length; i < l; i += 1) {
			if (this.vendors[i] !== null) {
				cssProperty = this.vendors[i][0] + "transform";
				jsProperty = this.vendors[i][1] + "Transform";
			} else {
				cssProperty = "transform";
				jsProperty = "transform";
			}

			if (element.style[jsProperty] !== undefined) {
				propertySupport = true;
				break;
			}
		}

		switch (value) {
			case "2D":
				featureSupport = propertySupport;
				break;

			case "3D":
				if (propertySupport) {
					var body = document.body || document.createElement("body");
					var documentElement = document.documentElement;
					var documentOverflow = documentElement.style.overflow;
					var isCreatedBody = false;

					if (!document.body) {
						isCreatedBody = true;
						documentElement.style.overflow = "hidden";
						documentElement.appendChild(body);
						body.style.overflow = "hidden";
						body.style.background = "";
					}

					body.appendChild(element);
					element.style[jsProperty] = "translate3d(1px,1px,1px)";
					propertyValue = window
						.getComputedStyle(element)
						.getPropertyValue(cssProperty);
					featureSupport =
						propertyValue !== undefined &&
						propertyValue.length > 0 &&
						propertyValue !== "none";
					documentElement.style.overflow = documentOverflow;
					body.removeChild(element);

					if (isCreatedBody) {
						body.removeAttribute("style");
						body.parentNode.removeChild(body);
					}
				}

				break;
		}

		return featureSupport;
	};

	Parallax.prototype.ww = null;
	Parallax.prototype.wh = null;
	Parallax.prototype.wcx = null;
	Parallax.prototype.wcy = null;
	Parallax.prototype.wrx = null;
	Parallax.prototype.wry = null;
	Parallax.prototype.portrait = null;
	Parallax.prototype.desktop = !navigator.userAgent.match(
		/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i
	);
	Parallax.prototype.vendors = [
		null,
		["-webkit-", "webkit"],
		["-moz-", "Moz"],
		["-o-", "O"],
		["-ms-", "ms"]
	];
	Parallax.prototype.motionSupport = !!window.DeviceMotionEvent;
	Parallax.prototype.orientationSupport = !!window.DeviceOrientationEvent;
	Parallax.prototype.orientationStatus = 0;
	Parallax.prototype.motionStatus = 0;
	Parallax.prototype.propertyCache = {};

	Parallax.prototype.initialise = function () {
		if (Parallax.prototype.transform2DSupport === undefined) {
			Parallax.prototype.transform2DSupport = Parallax.prototype.transformSupport(
				"2D"
			);
			Parallax.prototype.transform3DSupport = Parallax.prototype.transformSupport(
				"3D"
			);
		} // Configure Context Styles

		if (this.transform3DSupport) this.accelerate(this.element);
		var style = window.getComputedStyle(this.element);

		if (style.getPropertyValue("position") === "static") {
			this.element.style.position = "relative";
		} // Pointer events

		if (!this.pointerEvents) {
			this.element.style.pointerEvents = "none";
		} // Setup

		this.updateLayers();
		this.updateDimensions();
		this.enable();
		this.queueCalibration(this.calibrationDelay);
	};

	Parallax.prototype.updateLayers = function () {
		// Cache Layer Elements
		this.layers = this.element.getElementsByClassName("layer");
		this.depthsX = [];
		this.depthsY = []; // Configure Layer Styles

		for (var i = 0, l = this.layers.length; i < l; i += 1) {
			var layer = this.layers[i];
			if (this.transform3DSupport) this.accelerate(layer);
			layer.style.position = i ? "absolute" : "relative";
			layer.style.display = "block";
			layer.style.left = 0;
			layer.style.top = 0; // Cache Layer Depth
			//Graceful fallback on depth if depth-x or depth-y is absent

			var depth = this.data(layer, "depth") || 0;
			this.depthsX.push(this.data(layer, "depth-x") || depth);
			this.depthsY.push(this.data(layer, "depth-y") || depth);
		}
	};

	Parallax.prototype.updateDimensions = function () {
		this.ww = window.innerWidth;
		this.wh = window.innerHeight;
		this.wcx = this.ww * this.originX;
		this.wcy = this.wh * this.originY;
		this.wrx = Math.max(this.wcx, this.ww - this.wcx);
		this.wry = Math.max(this.wcy, this.wh - this.wcy);
	};

	Parallax.prototype.updateBounds = function () {
		this.bounds = this.element.getBoundingClientRect();
		this.ex = this.bounds.left;
		this.ey = this.bounds.top;
		this.ew = this.bounds.width;
		this.eh = this.bounds.height;
		this.ecx = this.ew * this.originX;
		this.ecy = this.eh * this.originY;
		this.erx = Math.max(this.ecx, this.ew - this.ecx);
		this.ery = Math.max(this.ecy, this.eh - this.ecy);
	};

	Parallax.prototype.queueCalibration = function (delay) {
		clearTimeout(this.calibrationTimer);
		this.calibrationTimer = setTimeout(this.onCalibrationTimer, delay);
	};

	Parallax.prototype.enable = function () {
		if (!this.enabled) {
			this.enabled = true;

			if (!this.desktop && this.orientationSupport) {
				this.portrait = null;
				window.addEventListener(
					"deviceorientation",
					this.onDeviceOrientation
				);
				setTimeout(this.onOrientationTimer, this.supportDelay);
			} else if (!this.desktop && this.motionSupport) {
				this.portrait = null;
				window.addEventListener("devicemotion", this.onDeviceMotion);
				setTimeout(this.onMotionTimer, this.supportDelay);
			} else {
				this.cx = 0;
				this.cy = 0;
				this.portrait = false;
				window.addEventListener("mousemove", this.onMouseMove);
			}

			window.addEventListener("resize", this.onWindowResize);
			this.raf = requestAnimationFrame(this.onAnimationFrame);
		}
	};

	Parallax.prototype.disable = function () {
		if (this.enabled) {
			this.enabled = false;

			if (this.orientationSupport) {
				window.removeEventListener(
					"deviceorientation",
					this.onDeviceOrientation
				);
			} else if (this.motionSupport) {
				window.removeEventListener("devicemotion", this.onDeviceMotion);
			} else {
				window.removeEventListener("mousemove", this.onMouseMove);
			}

			window.removeEventListener("resize", this.onWindowResize);
			cancelAnimationFrame(this.raf);
		}
	};

	Parallax.prototype.calibrate = function (x, y) {
		this.calibrateX = x === undefined ? this.calibrateX : x;
		this.calibrateY = y === undefined ? this.calibrateY : y;
	};

	Parallax.prototype.invert = function (x, y) {
		this.invertX = x === undefined ? this.invertX : x;
		this.invertY = y === undefined ? this.invertY : y;
	};

	Parallax.prototype.friction = function (x, y) {
		this.frictionX = x === undefined ? this.frictionX : x;
		this.frictionY = y === undefined ? this.frictionY : y;
	};

	Parallax.prototype.scalar = function (x, y) {
		this.scalarX = x === undefined ? this.scalarX : x;
		this.scalarY = y === undefined ? this.scalarY : y;
	};

	Parallax.prototype.limit = function (x, y) {
		this.limitX = x === undefined ? this.limitX : x;
		this.limitY = y === undefined ? this.limitY : y;
	};

	Parallax.prototype.origin = function (x, y) {
		this.originX = x === undefined ? this.originX : x;
		this.originY = y === undefined ? this.originY : y;
	};

	Parallax.prototype.clamp = function (value, min, max) {
		value = Math.max(value, min);
		value = Math.min(value, max);
		return value;
	};

	Parallax.prototype.css = function (element, property, value) {
		var jsProperty = this.propertyCache[property];

		if (!jsProperty) {
			for (var i = 0, l = this.vendors.length; i < l; i += 1) {
				if (this.vendors[i] !== null) {
					jsProperty = this.camelCase(
						this.vendors[i][1] + "-" + property
					);
				} else {
					jsProperty = property;
				}

				if (element.style[jsProperty] !== undefined) {
					this.propertyCache[property] = jsProperty;
					break;
				}
			}
		}

		element.style[jsProperty] = value;
	};

	Parallax.prototype.accelerate = function (element) {
		this.css(element, "transform", "translate3d(0,0,0)");
		this.css(element, "transform-style", "preserve-3d");
		this.css(element, "backface-visibility", "hidden");
	};

	Parallax.prototype.setPosition = function (element, x, y) {
		x = x.toFixed(this.precision) + "px";
		y = y.toFixed(this.precision) + "px";

		if (this.transform3DSupport) {
			this.css(
				element,
				"transform",
				"translate3d(" + x + "," + y + ",0)"
			);
		} else if (this.transform2DSupport) {
			this.css(element, "transform", "translate(" + x + "," + y + ")");
		} else {
			element.style.left = x;
			element.style.top = y;
		}
	};

	Parallax.prototype.onOrientationTimer = function () {
		if (this.orientationSupport && this.orientationStatus === 0) {
			this.disable();
			this.orientationSupport = false;
			this.enable();
		}
	};

	Parallax.prototype.onMotionTimer = function () {
		if (this.motionSupport && this.motionStatus === 0) {
			this.disable();
			this.motionSupport = false;
			this.enable();
		}
	};

	Parallax.prototype.onCalibrationTimer = function () {
		this.calibrationFlag = true;
	};

	Parallax.prototype.onWindowResize = function () {
		this.updateDimensions();
	};

	Parallax.prototype.onAnimationFrame = function () {
		this.updateBounds();
		var dx = this.ix - this.cx;
		var dy = this.iy - this.cy;

		if (
			Math.abs(dx) > this.calibrationThreshold ||
			Math.abs(dy) > this.calibrationThreshold
		) {
			this.queueCalibration(0);
		}

		if (this.portrait) {
			this.mx = this.calibrateX ? dy : this.iy;
			this.my = this.calibrateY ? dx : this.ix;
		} else {
			this.mx = this.calibrateX ? dx : this.ix;
			this.my = this.calibrateY ? dy : this.iy;
		}

		this.mx *= this.ew * (this.scalarX / 100);
		this.my *= this.eh * (this.scalarY / 100);

		if (!isNaN(parseFloat(this.limitX))) {
			this.mx = this.clamp(this.mx, -this.limitX, this.limitX);
		}

		if (!isNaN(parseFloat(this.limitY))) {
			this.my = this.clamp(this.my, -this.limitY, this.limitY);
		}

		this.vx += (this.mx - this.vx) * this.frictionX;
		this.vy += (this.my - this.vy) * this.frictionY;

		for (var i = 0, l = this.layers.length; i < l; i += 1) {
			var layer = this.layers[i];
			var depthX = this.depthsX[i];
			var depthY = this.depthsY[i];
			var xOffset = this.vx * (depthX * (this.invertX ? -1 : 1));
			var yOffset = this.vy * (depthY * (this.invertY ? -1 : 1));
			this.setPosition(layer, xOffset, yOffset);
		}

		this.raf = requestAnimationFrame(this.onAnimationFrame);
	};

	Parallax.prototype.rotate = function (beta, gamma) {
		// Extract Rotation
		var x = (event.beta || 0) / MAGIC_NUMBER; // -90 :: 90

		var y = (event.gamma || 0) / MAGIC_NUMBER; // -180 :: 180
		// Detect Orientation Change

		var portrait = this.wh > this.ww;

		if (this.portrait !== portrait) {
			this.portrait = portrait;
			this.calibrationFlag = true;
		} // Set Calibration

		if (this.calibrationFlag) {
			this.calibrationFlag = false;
			this.cx = x;
			this.cy = y;
		} // Set Input

		this.ix = x;
		this.iy = y;
	};

	Parallax.prototype.onDeviceOrientation = function (event) {
		// Validate environment and event properties.
		var beta = event.beta;
		var gamma = event.gamma;

		if (!this.desktop && beta !== null && gamma !== null) {
			// Set orientation status.
			this.orientationStatus = 1;
			this.rotate(beta, gamma);
		}
	};

	Parallax.prototype.onDeviceMotion = function (event) {
		// Validate environment and event properties.
		var beta = event.rotationRate.beta;
		var gamma = event.rotationRate.gamma;

		if (!this.desktop && beta !== null && gamma !== null) {
			// Set motion status.
			this.motionStatus = 1;
			this.rotate(beta, gamma);
		}
	};

	Parallax.prototype.onMouseMove = function (event) {
		// Cache mouse coordinates.
		var clientX = event.clientX;
		var clientY = event.clientY; // Calculate Mouse Input

		if (!this.orientationSupport && this.relativeInput) {
			// Clip mouse coordinates inside element bounds.
			if (this.clipRelativeInput) {
				clientX = Math.max(clientX, this.ex);
				clientX = Math.min(clientX, this.ex + this.ew);
				clientY = Math.max(clientY, this.ey);
				clientY = Math.min(clientY, this.ey + this.eh);
			} // Calculate input relative to the element.

			this.ix = (clientX - this.ex - this.ecx) / this.erx;
			this.iy = (clientY - this.ey - this.ecy) / this.ery;
		} else {
			// Calculate input relative to the window.
			this.ix = (clientX - this.wcx) / this.wrx;
			this.iy = (clientY - this.wcy) / this.wry;
		}
	}; // Expose Parallax

	window[NAME] = Parallax;
})(window, document);

/*!
 * modified qr.js -- QR code generator in Javascript (revision 2011-01-19)
 * Written by Kang Seonghoon <public+qrjs@mearie.org>.
 * v0.0.20110119
 * This source code is in the public domain; if your jurisdiction does not
 * recognize the public domain the terms of Creative Commons CC0 license
 * apply. In the other words, you can always do what you want.
 * added options properties: fillcolor and textcolor
 * svg now works in Edge 13 and IE 11
 * @see {@link https://gist.github.com/englishextra/b46969e3382ef737c611bb59d837220b}
 * @see {@link https://github.com/lifthrasiir/qr.js/blob/v0.0.20110119/qr.js}
 * passes jshint with suppressing comments
 */

/*jshint bitwise: false */
(function(root, document) {
	"use strict";

	var length = "length";
	var VERSIONS = [
		null,
		[[10, 7, 17, 13], [1, 1, 1, 1], []],
		[[16, 10, 28, 22], [1, 1, 1, 1], [4, 16]],
		[[26, 15, 22, 18], [1, 1, 2, 2], [4, 20]],
		[[18, 20, 16, 26], [2, 1, 4, 2], [4, 24]],
		[[24, 26, 22, 18], [2, 1, 4, 4], [4, 28]],
		[[16, 18, 28, 24], [4, 2, 4, 4], [4, 32]],
		[[18, 20, 26, 18], [4, 2, 5, 6], [4, 20, 36]],
		[[22, 24, 26, 22], [4, 2, 6, 6], [4, 22, 40]],
		[[22, 30, 24, 20], [5, 2, 8, 8], [4, 24, 44]],
		[[26, 18, 28, 24], [5, 4, 8, 8], [4, 26, 48]],
		[[30, 20, 24, 28], [5, 4, 11, 8], [4, 28, 52]],
		[[22, 24, 28, 26], [8, 4, 11, 10], [4, 30, 56]],
		[[22, 26, 22, 24], [9, 4, 16, 12], [4, 32, 60]],
		[[24, 30, 24, 20], [9, 4, 16, 16], [4, 24, 44, 64]],
		[[24, 22, 24, 30], [10, 6, 18, 12], [4, 24, 46, 68]],
		[[28, 24, 30, 24], [10, 6, 16, 17], [4, 24, 48, 72]],
		[[28, 28, 28, 28], [11, 6, 19, 16], [4, 28, 52, 76]],
		[[26, 30, 28, 28], [13, 6, 21, 18], [4, 28, 54, 80]],
		[[26, 28, 26, 26], [14, 7, 25, 21], [4, 28, 56, 84]],
		[[26, 28, 28, 30], [16, 8, 25, 20], [4, 32, 60, 88]],
		[[26, 28, 30, 28], [17, 8, 25, 23], [4, 26, 48, 70, 92]],
		[[28, 28, 24, 30], [17, 9, 34, 23], [4, 24, 48, 72, 96]],
		[[28, 30, 30, 30], [18, 9, 30, 25], [4, 28, 52, 76, 100]],
		[[28, 30, 30, 30], [20, 10, 32, 27], [4, 26, 52, 78, 104]],
		[[28, 26, 30, 30], [21, 12, 35, 29], [4, 30, 56, 82, 108]],
		[[28, 28, 30, 28], [23, 12, 37, 34], [4, 28, 56, 84, 112]],
		[[28, 30, 30, 30], [25, 12, 40, 34], [4, 32, 60, 88, 116]],
		[[28, 30, 30, 30], [26, 13, 42, 35], [4, 24, 48, 72, 96, 120]],
		[[28, 30, 30, 30], [28, 14, 45, 38], [4, 28, 52, 76, 100, 124]],
		[[28, 30, 30, 30], [29, 15, 48, 40], [4, 24, 50, 76, 102, 128]],
		[[28, 30, 30, 30], [31, 16, 51, 43], [4, 28, 54, 80, 106, 132]],
		[[28, 30, 30, 30], [33, 17, 54, 45], [4, 32, 58, 84, 110, 136]],
		[[28, 30, 30, 30], [35, 18, 57, 48], [4, 28, 56, 84, 112, 140]],
		[[28, 30, 30, 30], [37, 19, 60, 51], [4, 32, 60, 88, 116, 144]],
		[[28, 30, 30, 30], [38, 19, 63, 53], [4, 28, 52, 76, 100, 124, 148]],
		[[28, 30, 30, 30], [40, 20, 66, 56], [4, 22, 48, 74, 100, 126, 152]],
		[[28, 30, 30, 30], [43, 21, 70, 59], [4, 26, 52, 78, 104, 130, 156]],
		[[28, 30, 30, 30], [45, 22, 74, 62], [4, 30, 56, 82, 108, 134, 160]],
		[[28, 30, 30, 30], [47, 24, 77, 65], [4, 24, 52, 80, 108, 136, 164]],
		[[28, 30, 30, 30], [49, 25, 81, 68], [4, 28, 56, 84, 112, 140, 168]]
	];
	var MODE_TERMINATOR = 0;
	var MODE_NUMERIC = 1,
		MODE_ALPHANUMERIC = 2,
		MODE_OCTET = 4,
		MODE_KANJI = 8;
	var NUMERIC_REGEXP = /^\d*$/;
	var ALPHANUMERIC_REGEXP = /^[A-Za-z0-9 $%*+\-./:] * $ /;
	var ALPHANUMERIC_OUT_REGEXP = /^[A-Z0-9 $%*+\-./:] * $ /;
	var ECCLEVEL_L = 1,
		ECCLEVEL_M = 0,
		ECCLEVEL_Q = 3,
		ECCLEVEL_H = 2;
	var GF256_MAP = [],
		GF256_INVMAP = [-1];

	for (var i1 = 0, v = 1; i1 < 255; ++i1) {
		GF256_MAP.push(v);
		GF256_INVMAP[v] = i1;
		v = (v * 2) ^ (v >= 128 ? 0x11d : 0);
	}

	var GF256_GENPOLY = [[]];

	for (var i2 = 0; i2 < 30; ++i2) {
		var prevpoly = GF256_GENPOLY[i2],
			poly = [];

		for (var j1 = 0; j1 <= i2; ++j1) {
			var a = j1 < i2 ? GF256_MAP[prevpoly[j1]] : 0;
			var b = GF256_MAP[(i2 + (prevpoly[j1 - 1] || 0)) % 255];
			poly.push(GF256_INVMAP[a ^ b]);
		}

		GF256_GENPOLY.push(poly);
	}

	var ALPHANUMERIC_MAP = {};

	for (var i = 0; i < 45; ++i) {
		ALPHANUMERIC_MAP[
			"0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ $%*+-./:".charAt(i)
		] = i;
	}

	var MASKFUNCS = [
		function(i, j) {
			return (i + j) % 2 === 0;
		},
		function(i) {
			return i % 2 === 0;
		},
		function(i, j) {
			return j % 3 === 0;
		},
		function(i, j) {
			return (i + j) % 3 === 0;
		},
		function(i, j) {
			return (((i / 2) | 0) + ((j / 3) | 0)) % 2 === 0;
		},
		function(i, j) {
			return ((i * j) % 2) + ((i * j) % 3) === 0;
		},
		function(i, j) {
			return (((i * j) % 2) + ((i * j) % 3)) % 2 === 0;
		},
		function(i, j) {
			return (((i + j) % 2) + ((i * j) % 3)) % 2 === 0;
		}
	];

	var needsverinfo = function needsverinfo(ver) {
		return ver > 6;
	};

	var getsizebyver = function getsizebyver(ver) {
		return 4 * ver + 17;
	};

	var nfullbits = function nfullbits(ver) {
		var v = VERSIONS[ver];
		var nbits = 16 * ver * ver + 128 * ver + 64;

		if (needsverinfo(ver)) {
			nbits -= 36;
		}

		if (v[2][length]) {
			nbits -= 25 * v[2][length] * v[2][length] - 10 * v[2][length] - 55;
		}

		return nbits;
	};

	var ndatabits = function ndatabits(ver, ecclevel) {
		var nbits = nfullbits(ver) & ~7;
		var v = VERSIONS[ver];
		nbits -= 8 * v[0][ecclevel] * v[1][ecclevel];
		return nbits;
	};

	var ndatalenbits = function ndatalenbits(ver, mode) {
		switch (mode) {
			case MODE_NUMERIC:
				return ver < 10 ? 10 : ver < 27 ? 12 : 14;

			case MODE_ALPHANUMERIC:
				return ver < 10 ? 9 : ver < 27 ? 11 : 13;

			case MODE_OCTET:
				return ver < 10 ? 8 : 16;

			case MODE_KANJI:
				return ver < 10 ? 8 : ver < 27 ? 10 : 12;
		}
	};

	var getmaxdatalen = function getmaxdatalen(ver, mode, ecclevel) {
		var nbits = ndatabits(ver, ecclevel) - 4 - ndatalenbits(ver, mode);

		switch (mode) {
			case MODE_NUMERIC:
				return (
					((nbits / 10) | 0) * 3 +
					(nbits % 10 < 4 ? 0 : nbits % 10 < 7 ? 1 : 2)
				);

			case MODE_ALPHANUMERIC:
				return ((nbits / 11) | 0) * 2 + (nbits % 11 < 6 ? 0 : 1);

			case MODE_OCTET:
				return (nbits / 8) | 0;

			case MODE_KANJI:
				return (nbits / 13) | 0;
		}
	};

	var validatedata = function validatedata(mode, data) {
		switch (mode) {
			case MODE_NUMERIC:
				if (!data.match(NUMERIC_REGEXP)) {
					return null;
				}

				return data;

			case MODE_ALPHANUMERIC:
				if (!data.match(ALPHANUMERIC_REGEXP)) {
					return null;
				}

				return data.toUpperCase();

			case MODE_OCTET:
				if (typeof data === "string") {
					var newdata = [];

					for (var i = 0; i < data[length]; ++i) {
						var ch = data.charCodeAt(i);

						if (ch < 0x80) {
							newdata.push(ch);
						} else if (ch < 0x800) {
							newdata.push(0xc0 | (ch >> 6), 0x80 | (ch & 0x3f));
						} else if (ch < 0x10000) {
							newdata.push(
								0xe0 | (ch >> 12),
								0x80 | ((ch >> 6) & 0x3f),
								0x80 | (ch & 0x3f)
							);
						} else {
							newdata.push(
								0xf0 | (ch >> 18),
								0x80 | ((ch >> 12) & 0x3f),
								0x80 | ((ch >> 6) & 0x3f),
								0x80 | (ch & 0x3f)
							);
						}
					}

					return newdata;
				} else {
					return data;
				}
		}
	};

	var encode = function encode(ver, mode, data, maxbuflen) {
		var buf = [];
		var bits = 0,
			remaining = 8;
		var datalen = data[length];

		var pack = function pack(x, n) {
			if (n >= remaining) {
				buf.push(bits | (x >> (n -= remaining)));

				while (n >= 8) {
					buf.push((x >> (n -= 8)) & 255);
				}

				bits = 0;
				remaining = 8;
			}

			if (n > 0) {
				bits |= (x & ((1 << n) - 1)) << (remaining -= n);
			}
		};

		var nlenbits = ndatalenbits(ver, mode);
		pack(mode, 4);
		pack(datalen, nlenbits);

		switch (mode) {
			case MODE_NUMERIC:
				for (var i = 2; i < datalen; i += 3) {
					pack(parseInt(data.substring(i - 2, i + 1), 10), 10);
				}

				pack(
					parseInt(data.substring(i - 2), 10),
					[0, 4, 7][datalen % 3]
				);
				break;

			case MODE_ALPHANUMERIC:
				for (var i2 = 1; i2 < datalen; i2 += 2) {
					pack(
						ALPHANUMERIC_MAP[data.charAt(i2 - 1)] * 45 +
							ALPHANUMERIC_MAP[data.charAt(i2)],
						11
					);
				}

				if (datalen % 2 === 1) {
					pack(ALPHANUMERIC_MAP[data.charAt(i2 - 1)], 6);
				}

				break;

			case MODE_OCTET:
				for (var i3 = 0; i3 < datalen; ++i3) {
					pack(data[i3], 8);
				}

				break;
		}

		pack(MODE_TERMINATOR, 4);

		if (remaining < 8) {
			buf.push(bits);
		}

		while (buf[length] + 1 < maxbuflen) {
			buf.push(0xec, 0x11);
		}

		if (buf[length] < maxbuflen) {
			buf.push(0xec);
		}

		return buf;
	};

	var calculateecc = function calculateecc(poly, genpoly) {
		var modulus = poly.slice(0);
		var polylen = poly[length],
			genpolylen = genpoly[length];

		for (var k = 0; k < genpolylen; ++k) {
			modulus.push(0);
		}

		for (var i = 0; i < polylen; ) {
			var quotient = GF256_INVMAP[modulus[i++]];

			if (quotient >= 0) {
				for (var j = 0; j < genpolylen; ++j) {
					modulus[i + j] ^= GF256_MAP[(quotient + genpoly[j]) % 255];
				}
			}
		}

		return modulus.slice(polylen);
	};

	var augumenteccs = function augumenteccs(poly, nblocks, genpoly) {
		var subsizes = [];
		var subsize = (poly[length] / nblocks) | 0,
			subsize0 = 0;
		var pivot = nblocks - (poly[length] % nblocks);

		for (var i = 0; i < pivot; ++i) {
			subsizes.push(subsize0);
			subsize0 += subsize;
		}

		for (var i2 = pivot; i2 < nblocks; ++i2) {
			subsizes.push(subsize0);
			subsize0 += subsize + 1;
		}

		subsizes.push(subsize0);
		var eccs = [];

		for (var i3 = 0; i3 < nblocks; ++i3) {
			eccs.push(
				calculateecc(
					poly.slice(subsizes[i3], subsizes[i3 + 1]),
					genpoly
				)
			);
		}

		var result = [];
		var nitemsperblock = (poly[length] / nblocks) | 0;

		for (var i4 = 0; i4 < nitemsperblock; ++i4) {
			for (var j = 0; j < nblocks; ++j) {
				result.push(poly[subsizes[j] + i4]);
			}
		}

		for (var j2 = pivot; j2 < nblocks; ++j2) {
			result.push(poly[subsizes[j2 + 1] - 1]);
		}

		for (var i5 = 0; i5 < genpoly[length]; ++i5) {
			for (var j3 = 0; j3 < nblocks; ++j3) {
				result.push(eccs[j3][i5]);
			}
		}

		return result;
	};

	var augumentbch = function augumentbch(poly, p, genpoly, q) {
		var modulus = poly << q;

		for (var i = p - 1; i >= 0; --i) {
			if ((modulus >> (q + i)) & 1) {
				modulus ^= genpoly << i;
			}
		}

		return (poly << q) | modulus;
	};

	var makebasematrix = function makebasematrix(ver) {
		var v = VERSIONS[ver],
			n = getsizebyver(ver);
		var matrix = [],
			reserved = [];

		for (var i = 0; i < n; ++i) {
			matrix.push([]);
			reserved.push([]);
		}

		var blit = function blit(y, x, h, w, bits) {
			for (var i = 0; i < h; ++i) {
				for (var j = 0; j < w; ++j) {
					matrix[y + i][x + j] = (bits[i] >> j) & 1;
					reserved[y + i][x + j] = 1;
				}
			}
		};

		blit(0, 0, 9, 9, [
			0x7f,
			0x41,
			0x5d,
			0x5d,
			0x5d,
			0x41,
			0x17f,
			0x00,
			0x40
		]);
		blit(n - 8, 0, 8, 9, [0x100, 0x7f, 0x41, 0x5d, 0x5d, 0x5d, 0x41, 0x7f]);
		blit(0, n - 8, 9, 8, [
			0xfe,
			0x82,
			0xba,
			0xba,
			0xba,
			0x82,
			0xfe,
			0x00,
			0x00
		]);

		for (var i2 = 9; i2 < n - 8; ++i2) {
			matrix[6][i2] = matrix[i2][6] = ~i2 & 1;
			reserved[6][i2] = reserved[i2][6] = 1;
		}

		var aligns = v[2],
			m = aligns[length];

		for (var i3 = 0; i3 < m; ++i3) {
			var minj = i3 === 0 || i3 === m - 1 ? 1 : 0,
				maxj = i3 === 0 ? m - 1 : m;

			for (var j = minj; j < maxj; ++j) {
				blit(aligns[i3], aligns[j], 5, 5, [
					0x1f,
					0x11,
					0x15,
					0x11,
					0x1f
				]);
			}
		}

		if (needsverinfo(ver)) {
			var code = augumentbch(ver, 6, 0x1f25, 12);
			var k = 0;

			for (var i4 = 0; i4 < 6; ++i4) {
				for (var j2 = 0; j2 < 3; ++j2) {
					matrix[i4][n - 11 + j2] = matrix[n - 11 + j2][i4] =
						(code >> k++) & 1;
					reserved[i4][n - 11 + j2] = reserved[n - 11 + j2][i4] = 1;
				}
			}
		}

		return {
			matrix: matrix,
			reserved: reserved
		};
	};

	var putdata = function putdata(matrix, reserved, buf) {
		var n = matrix[length];
		var k = 0,
			dir = -1;

		for (var i = n - 1; i >= 0; i -= 2) {
			if (i === 6) {
				--i;
			}

			var jj = dir < 0 ? n - 1 : 0;

			for (var j = 0; j < n; ++j) {
				for (var ii = i; ii > i - 2; --ii) {
					if (!reserved[jj][ii]) {
						matrix[jj][ii] = (buf[k >> 3] >> (~k & 7)) & 1;
						++k;
					}
				}

				jj += dir;
			}

			dir = -dir;
		}

		return matrix;
	};

	var maskdata = function maskdata(matrix, reserved, mask) {
		var maskf = MASKFUNCS[mask];
		var n = matrix[length];

		for (var i = 0; i < n; ++i) {
			for (var j = 0; j < n; ++j) {
				if (!reserved[i][j]) {
					matrix[i][j] ^= maskf(i, j);
				}
			}
		}

		return matrix;
	};

	var putformatinfo = function putformatinfo(
		matrix,
		reserved,
		ecclevel,
		mask
	) {
		var n = matrix[length];
		var code = augumentbch((ecclevel << 3) | mask, 5, 0x537, 10) ^ 0x5412;

		for (var i = 0; i < 15; ++i) {
			var r = [
				0,
				1,
				2,
				3,
				4,
				5,
				7,
				8,
				n - 7,
				n - 6,
				n - 5,
				n - 4,
				n - 3,
				n - 2,
				n - 1
			][i];
			var c = [
				n - 1,
				n - 2,
				n - 3,
				n - 4,
				n - 5,
				n - 6,
				n - 7,
				n - 8,
				7,
				5,
				4,
				3,
				2,
				1,
				0
			][i];
			matrix[r][8] = matrix[8][c] = (code >> i) & 1;
		}

		return matrix;
	};

	var evaluatematrix = function evaluatematrix(matrix) {
		var PENALTY_CONSECUTIVE = 3;
		var PENALTY_TWOBYTWO = 3;
		var PENALTY_FINDERLIKE = 40;
		var PENALTY_DENSITY = 10;

		var evaluategroup = function evaluategroup(groups) {
			var score = 0;

			for (var i = 0; i < groups[length]; ++i) {
				if (groups[i] >= 5) {
					score += PENALTY_CONSECUTIVE + (groups[i] - 5);
				}
			}

			for (var i2 = 5; i2 < groups[length]; i2 += 2) {
				var p = groups[i2];

				if (
					groups[i2 - 1] === p &&
					groups[i2 - 2] === 3 * p &&
					groups[i2 - 3] === p &&
					groups[i2 - 4] === p &&
					(groups[i2 - 5] >= 4 * p || groups[i2 + 1] >= 4 * p)
				) {
					score += PENALTY_FINDERLIKE;
				}
			}

			return score;
		};

		var n = matrix[length];
		var score = 0,
			nblacks = 0;

		for (var i = 0; i < n; ++i) {
			var row = matrix[i];
			var groups;
			groups = [0];

			for (var j = 0; j < n; ) {
				var k;

				for (k = 0; j < n && row[j]; ++k) {
					++j;
				}

				groups.push(k);

				for (k = 0; j < n && !row[j]; ++k) {
					++j;
				}

				groups.push(k);
			}

			score += evaluategroup(groups);
			groups = [0];

			for (var j2 = 0; j2 < n; ) {
				var k2;

				for (k2 = 0; j2 < n && matrix[j2][i]; ++k2) {
					++j2;
				}

				groups.push(k2);

				for (k2 = 0; j2 < n && !matrix[j2][i]; ++k2) {
					++j2;
				}

				groups.push(k2);
			}

			score += evaluategroup(groups);
			var nextrow = matrix[i + 1] || [];
			nblacks += row[0];

			for (var j3 = 1; j3 < n; ++j3) {
				var p = row[j3];
				nblacks += p;

				if (
					row[j3 - 1] === p &&
					nextrow[j3] === p &&
					nextrow[j3 - 1] === p
				) {
					score += PENALTY_TWOBYTWO;
				}
			}
		}

		score +=
			PENALTY_DENSITY * ((Math.abs(nblacks / n / n - 0.5) / 0.05) | 0);
		return score;
	};

	var _generate = function generate(data, ver, mode, ecclevel, mask) {
		var v = VERSIONS[ver];
		var buf = encode(ver, mode, data, ndatabits(ver, ecclevel) >> 3);
		buf = augumenteccs(buf, v[1][ecclevel], GF256_GENPOLY[v[0][ecclevel]]);
		var result = makebasematrix(ver);
		var matrix = result.matrix,
			reserved = result.reserved;
		putdata(matrix, reserved, buf);

		if (mask < 0) {
			maskdata(matrix, reserved, 0);
			putformatinfo(matrix, reserved, ecclevel, 0);
			var bestmask = 0,
				bestscore = evaluatematrix(matrix);
			maskdata(matrix, reserved, 0);

			for (mask = 1; mask < 8; ++mask) {
				maskdata(matrix, reserved, mask);
				putformatinfo(matrix, reserved, ecclevel, mask);
				var score = evaluatematrix(matrix);

				if (bestscore > score) {
					bestscore = score;
					bestmask = mask;
				}

				maskdata(matrix, reserved, mask);
			}

			mask = bestmask;
		}

		maskdata(matrix, reserved, mask);
		putformatinfo(matrix, reserved, ecclevel, mask);
		return matrix;
	};

	var QRCode = {
		generate: function generate(data, settings) {
			var options = settings || {};
			var MODES = {
				numeric: MODE_NUMERIC,
				alphanumeric: MODE_ALPHANUMERIC,
				octet: MODE_OCTET
			};
			var ECCLEVELS = {
				L: ECCLEVEL_L,
				M: ECCLEVEL_M,
				Q: ECCLEVEL_Q,
				H: ECCLEVEL_H
			};
			var ver = options.version || -1;
			var ecclevel = ECCLEVELS[(options.ecclevel || "L").toUpperCase()];
			var mode = options.mode ? MODES[options.mode.toLowerCase()] : -1;
			var mask = "mask" in options ? options.mask : -1;

			if (mode < 0) {
				if (typeof data === "string") {
					if (data.match(NUMERIC_REGEXP)) {
						mode = MODE_NUMERIC;
					} else if (data.match(ALPHANUMERIC_OUT_REGEXP)) {
						mode = MODE_ALPHANUMERIC;
					} else {
						mode = MODE_OCTET;
					}
				} else {
					mode = MODE_OCTET;
				}
			} else if (
				!(
					mode === MODE_NUMERIC ||
					mode === MODE_ALPHANUMERIC ||
					mode === MODE_OCTET
				)
			) {
				throw "invalid or unsupported mode";
			}

			data = validatedata(mode, data);

			if (data === null) {
				throw "invalid data format";
			}

			if (ecclevel < 0 || ecclevel > 3) {
				throw "invalid ECC level";
			}

			if (ver < 0) {
				for (ver = 1; ver <= 40; ++ver) {
					if (data[length] <= getmaxdatalen(ver, mode, ecclevel)) {
						break;
					}
				}

				if (ver > 40) {
					throw "too large data";
				}
			} else if (ver < 1 || ver > 40) {
				throw "invalid version";
			}

			if (mask !== -1 && (mask < 0 || mask > 8)) {
				throw "invalid mask";
			}

			return _generate(data, ver, mode, ecclevel, mask);
		},
		generateHTML: function generateHTML(data, settings) {
			var options = settings || {};
			var fillcolor = options.fillcolor ? options.fillcolor : "#FFFFFF";
			var textcolor = options.textcolor ? options.textcolor : "#000000";
			var matrix = QRCode.generate(data, options);
			var modsize = Math.max(options.modulesize || 5, 0.5);
			var margin = Math.max(
				options.margin !== null ? options.margin : 4,
				0.0
			);
			var e = document.createElement("div");
			var n = matrix[length];
			var html = [
				'<table border="0" cellspacing="0" cellpadding="0" style="border:' +
					modsize * margin +
					"px solid " +
					fillcolor +
					";background:" +
					fillcolor +
					'">'
			];

			for (var i = 0; i < n; ++i) {
				html.push("<tr>");

				for (var j = 0; j < n; ++j) {
					html.push(
						'<td style="width:' +
							modsize +
							"px;height:" +
							modsize +
							"px" +
							(matrix[i][j] ? ";background:" + textcolor : "") +
							'"></td>'
					);
				}

				html.push("</tr>");
			}

			e.className = "qrcode";
			/* e.innerHTML = html.join("") + "</table>"; */

			var range = document.createRange();
			range.selectNodeContents(e);
			var frag = range.createContextualFragment(
				html.join("") + "</table>"
			);
			e.appendChild(frag);
			return e;
		},
		generateSVG: function generateSVG(data, settings) {
			var options = settings || {};
			var fillcolor = options.fillcolor ? options.fillcolor : "#FFFFFF";
			var textcolor = options.textcolor ? options.textcolor : "#000000";
			var matrix = QRCode.generate(data, options);
			var n = matrix[length];
			var modsize = Math.max(options.modulesize || 5, 0.5);
			var margin = Math.max(options.margin ? options.margin : 4, 0.0);
			var size = modsize * (n + 2 * margin);
			/* var common = ' class= "fg"' + ' width="' + modsize + '" height="' + modsize + '"/>'; */

			var e = document.createElementNS(
				"http://www.w3.org/2000/svg",
				"svg"
			);
			e.setAttributeNS(null, "viewBox", "0 0 " + size + " " + size);
			e.setAttributeNS(null, "style", "shape-rendering:crispEdges");
			var qrcodeId = "qrcode" + Date.now();
			e.setAttributeNS(null, "id", qrcodeId);
			var frag = document.createDocumentFragment();
			/* var svg = ['<style scoped>.bg{fill:' + fillcolor + '}.fg{fill:' + textcolor + '}</style>', '<rect class="bg" x="0" y="0"', 'width="' + size + '" height="' + size + '"/>', ]; */

			var style = document.createElementNS(
				"http://www.w3.org/2000/svg",
				"style"
			);
			style.appendChild(
				document.createTextNode(
					"#" +
						qrcodeId +
						" .bg{fill:" +
						fillcolor +
						"}#" +
						qrcodeId +
						" .fg{fill:" +
						textcolor +
						"}"
				)
			);
			/* style.setAttributeNS(null, "scoped", "scoped"); */

			frag.appendChild(style);

			var createRect = function createRect(c, f, x, y, s) {
				var fg =
					document.createElementNS(
						"http://www.w3.org/2000/svg",
						"rect"
					) || "";
				fg.setAttributeNS(null, "class", c);
				fg.setAttributeNS(null, "fill", f);
				fg.setAttributeNS(null, "x", x);
				fg.setAttributeNS(null, "y", y);
				fg.setAttributeNS(null, "width", s);
				fg.setAttributeNS(null, "height", s);
				return fg;
			};

			frag.appendChild(createRect("bg", "none", 0, 0, size));
			var yo = margin * modsize;

			for (var y = 0; y < n; ++y) {
				var xo = margin * modsize;

				for (var x = 0; x < n; ++x) {
					if (matrix[y][x]) {
						/* svg.push('<rect x="' + xo + '" y="' + yo + '"', common); */
						frag.appendChild(
							createRect("fg", "none", xo, yo, modsize)
						);
					}

					xo += modsize;
				}

				yo += modsize;
			}
			/* e.innerHTML = svg.join(""); */

			e.appendChild(frag);
			return e;
		},
		generatePNG: function generatePNG(data, settings) {
			var options = settings || {};
			var fillcolor = options.fillcolor || "#FFFFFF";
			var textcolor = options.textcolor || "#000000";
			var matrix = QRCode.generate(data, options);
			var modsize = Math.max(options.modulesize || 5, 0.5);
			var margin = Math.max(
				options.margin !== null && options.margin !== undefined
					? options.margin
					: 4,
				0.0
			);
			var n = matrix[length];
			var size = modsize * (n + 2 * margin);
			var canvas = document.createElement("canvas"),
				context;
			canvas.width = canvas.height = size;
			context = canvas.getContext("2d");

			if (!context) {
				throw "canvas support is needed for PNG output";
			}

			context.fillStyle = fillcolor;
			context.fillRect(0, 0, size, size);
			context.fillStyle = textcolor;

			for (var i = 0; i < n; ++i) {
				for (var j = 0; j < n; ++j) {
					if (matrix[i][j]) {
						context.fillRect(
							modsize * (margin + j),
							modsize * (margin + i),
							modsize,
							modsize
						);
					}
				}
			}

			return canvas.toDataURL();
		}
	};
	root.QRCode = QRCode;
})("undefined" !== typeof window ? window : this, document);
/*jshint bitwise: true */

function _typeof(obj) {
	if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
		_typeof = function _typeof(obj) {
			return typeof obj;
		};
	} else {
		_typeof = function _typeof(obj) {
			return obj &&
				typeof Symbol === "function" &&
				obj.constructor === Symbol &&
				obj !== Symbol.prototype
				? "symbol"
				: typeof obj;
		};
	}
	return _typeof(obj);
}

/*!
 * modified Generates event when user makes new movement (like a swipe on a touchscreen).
 * @version 1.1.4
 * @link https://github.com/Promo/wheel-indicator
 * @license MIT
 * @see {@link https://github.com/WICG/EventListenerOptions/blob/gh-pages/explainer.md#feature-detection}
 * forced passive event listener if supported
 * passes jshint
 */

/* global module, window, document */
var WheelIndicator = (function(root, document) {
	var eventWheel = "onwheel" in document ? "wheel" : "mousewheel",
		DEFAULTS = {
			callback: function callback() {},
			elem: document,
			preventMouse: true
		};

	function Module(options) {
		this._options = extend(DEFAULTS, options);
		this._deltaArray = [0, 0, 0];
		this._isAcceleration = false;
		this._isStopped = true;
		this._direction = "";
		this._timer = "";
		this._isWorking = true;
		var self = this;

		this._wheelHandler = function (event) {
			if (self._isWorking) {
				processDelta.call(self, event);

				if (self._options.preventMouse) {
					preventDefault(event);
				}
			}
		};

		addEvent(this._options.elem, eventWheel, this._wheelHandler);
	}

	Module.prototype = {
		constructor: Module,
		turnOn: function turnOn() {
			this._isWorking = true;
			return this;
		},
		turnOff: function turnOff() {
			this._isWorking = false;
			return this;
		},
		setOptions: function setOptions(options) {
			this._options = extend(this._options, options);
			return this;
		},
		getOption: function getOption(option) {
			var neededOption = this._options[option];

			if (neededOption !== undefined) {
				return neededOption;
			}

			throw new Error("Unknown option");
		},
		destroy: function destroy() {
			removeEvent(this._options.elem, eventWheel, this._wheelHandler);
			return this;
		}
	};

	function triggerEvent(event) {
		event.direction = this._direction;

		this._options.callback.call(this, event);
	}

	var _getDeltaY = function getDeltaY(event) {
		if (event.wheelDelta && !event.deltaY) {
			_getDeltaY = function getDeltaY(event) {
				return event.wheelDelta * -1;
			};
		} else {
			_getDeltaY = function getDeltaY(event) {
				return event.deltaY;
			};
		}

		return _getDeltaY(event);
	};

	function preventDefault(event) {
		event = event || root.event;

		if (event.preventDefault) {
			event.preventDefault();
		} else {
			event.returnValue = false;
		}
	}

	function processDelta(event) {
		var self = this,
			delta = _getDeltaY(event);

		if (delta === 0) return;
		var direction = delta > 0 ? "down" : "up",
			arrayLength = self._deltaArray.length,
			changedDirection = false,
			repeatDirection = 0,
			sustainableDirection,
			i;
		clearTimeout(self._timer);
		self._timer = setTimeout(function () {
			self._deltaArray = [0, 0, 0];
			self._isStopped = true;
			self._direction = direction;
		}, 150);

		for (i = 0; i < arrayLength; i++) {
			if (self._deltaArray[i] !== 0) {
				if (self._deltaArray[i] > 0) {
					++repeatDirection;
				} else {
					--repeatDirection;
				}
			}
		}

		if (Math.abs(repeatDirection) === arrayLength) {
			sustainableDirection = repeatDirection > 0 ? "down" : "up";

			if (sustainableDirection !== self._direction) {
				changedDirection = true;
				self._direction = direction;
			}
		}

		if (!self._isStopped) {
			if (changedDirection) {
				self._isAcceleration = true;
				triggerEvent.call(this, event);
			} else {
				if (Math.abs(repeatDirection) === arrayLength) {
					analyzeArray.call(this, event);
				}
			}
		}

		if (self._isStopped) {
			self._isStopped = false;
			self._isAcceleration = true;
			self._direction = direction;
			triggerEvent.call(this, event);
		}

		self._deltaArray.shift();

		self._deltaArray.push(delta);
	}

	function analyzeArray(event) {
		var deltaArray0Abs = Math.abs(this._deltaArray[0]),
			deltaArray1Abs = Math.abs(this._deltaArray[1]),
			deltaArray2Abs = Math.abs(this._deltaArray[2]),
			deltaAbs = Math.abs(_getDeltaY(event));

		if (
			deltaAbs > deltaArray2Abs &&
			deltaArray2Abs > deltaArray1Abs &&
			deltaArray1Abs > deltaArray0Abs
		) {
			if (!this._isAcceleration) {
				triggerEvent.call(this, event);
				this._isAcceleration = true;
			}
		}

		if (deltaAbs < deltaArray2Abs && deltaArray2Abs <= deltaArray1Abs) {
			this._isAcceleration = false;
		}
	}

	var supportsPassive = (function () {
		var support = false;

		try {
			var opts =
				Object.defineProperty &&
				Object.defineProperty({}, "passive", {
					get: function get() {
						support = true;
					}
				});
			root.addEventListener("test", function () {}, opts);
		} catch (err) {}

		return support;
	})();

	function addEvent(elem, type, handler) {
		if (elem.addEventListener) {
			elem.addEventListener(
				type,
				handler,
				supportsPassive
					? {
							passive: true
					  }
					: false
			);
		} else if (elem.attachEvent) {
			elem.attachEvent("on" + type, handler);
		}
	}

	function removeEvent(elem, type, handler) {
		if (elem.removeEventListener) {
			elem.removeEventListener(
				type,
				handler,
				supportsPassive
					? {
							passive: true
					  }
					: false
			);
		} else if (elem.detachEvent) {
			elem.detachEvent("on" + type, handler);
		}
	}

	function extend(defaults, options) {
		var extended = {},
			prop;

		for (prop in defaults) {
			if (Object.prototype.hasOwnProperty.call(defaults, prop)) {
				extended[prop] = defaults[prop];
			}
		}

		for (prop in options) {
			if (Object.prototype.hasOwnProperty.call(options, prop)) {
				extended[prop] = options[prop];
			}
		}

		return extended;
	}

	return Module;
})("undefined" !== typeof window ? window : this, document);

if (
	(typeof exports === "undefined" ? "undefined" : _typeof(exports)) ===
	"object"
) {
	module.exports = WheelIndicator;
}

/*global jQuery */

/*!
 * Super lightweight script (~1kb) to detect via Javascript events like
 * 'tap' 'dbltap' "swipeup" "swipedown" "swipeleft" "swiperight"
 * on any kind of device.
 * Version: 2.0.1
 * Author: Gianluca Guarini
 * Contact: gianluca.guarini@gmail.com
 * Website: http://www.gianlucaguarini.com/
 * Twitter: @gianlucaguarini
 * Copyright (c) Gianluca Guarini
 * @see {@link https://github.com/GianlucaGuarini/Tocca.js/blob/master/Tocca.js}
 * passes jshint
 */
(function(doc, win) {
	"use strict";

	if (typeof doc.createEvent !== "function") {
		return false;
	}

	var tapNum = 0,
		pointerId,
		currX,
		currY,
		cachedX,
		cachedY,
		timestamp,
		target,
		dblTapTimer,
		longtapTimer;

	var pointerEventSupport = function pointerEventSupport(type) {
			var lo = type.toLowerCase(),
				ms = "MS" + type;
			return navigator.msPointerEnabled
				? ms
				: window.PointerEvent
				? lo
				: "";
		},
		defaults = {
			useJquery: !win.IGNORE_JQUERY && typeof jQuery !== "undefined",
			swipeThreshold: win.SWIPE_THRESHOLD || 100,
			tapThreshold: win.TAP_THRESHOLD || 150,
			dbltapThreshold: win.DBL_TAP_THRESHOLD || 200,
			longtapThreshold: win.LONG_TAP_THRESHOLD || 1000,
			tapPrecision: win.TAP_PRECISION / 2 || 60 / 2,
			justTouchEvents: win.JUST_ON_TOUCH_DEVICES
		},
		wasTouch = false,
		touchevents = {
			touchstart: pointerEventSupport("PointerDown") || "touchstart",
			touchend: pointerEventSupport("PointerUp") + " touchend",
			touchmove: pointerEventSupport("PointerMove") + " touchmove"
		},
		isTheSameFingerId = function isTheSameFingerId(e) {
			return (
				!e.pointerId ||
				typeof pointerId === "undefined" ||
				e.pointerId === pointerId
			);
		},
		setListener = function setListener(elm, events, callback) {
			var eventsArray = events.split(" "),
				i = eventsArray.length;

			while (i--) {
				elm.addEventListener(eventsArray[i], callback, false);
			}
		},
		getPointerEvent = function getPointerEvent(event) {
			return event.targetTouches ? event.targetTouches[0] : event;
		},
		getTimestamp = function getTimestamp() {
			return new Date().getTime();
		},
		sendEvent = function sendEvent(elm, eventName, originalEvent, data) {
			var customEvent = doc.createEvent("Event");
			customEvent.originalEvent = originalEvent;
			data = data || {};
			data.x = currX;
			data.y = currY;
			data.distance = data.distance;

			if (defaults.useJquery) {
				customEvent = jQuery.Event(eventName, {
					originalEvent: originalEvent
				});
				jQuery(elm).trigger(customEvent, data);
			}

			if (customEvent.initEvent) {
				for (var key in data) {
					if (data.hasOwnProperty(key)) {
						customEvent[key] = data[key];
					}
				}

				customEvent.initEvent(eventName, true, true);
				elm.dispatchEvent(customEvent);
			}

			while (elm) {
				if (elm["on" + eventName]) {
					elm["on" + eventName](customEvent);
				}

				elm = elm.parentNode;
			}
		},
		onTouchStart = function onTouchStart(e) {
			if (!isTheSameFingerId(e)) {
				return;
			}

			var isMousedown = e.type === "mousedown";
			wasTouch = !isMousedown;
			pointerId = e.pointerId;

			if (e.type === "mousedown" && wasTouch) {
				return;
			}

			var pointer = getPointerEvent(e);
			cachedX = currX = pointer.pageX;
			cachedY = currY = pointer.pageY;
			longtapTimer = setTimeout(function () {
				sendEvent(e.target, "longtap", e);
				target = e.target;
			}, defaults.longtapThreshold);
			timestamp = getTimestamp();
			tapNum++;
		},
		onTouchEnd = function onTouchEnd(e) {
			if (!isTheSameFingerId(e)) {
				return;
			}

			pointerId = undefined;

			if (e.type === "mouseup" && wasTouch) {
				wasTouch = false;
				return;
			}

			var eventsArr = [],
				now = getTimestamp(),
				deltaY = cachedY - currY,
				deltaX = cachedX - currX;
			clearTimeout(dblTapTimer);
			clearTimeout(longtapTimer);

			if (deltaX <= -defaults.swipeThreshold) {
				eventsArr.push("swiperight");
			}

			if (deltaX >= defaults.swipeThreshold) {
				eventsArr.push("swipeleft");
			}

			if (deltaY <= -defaults.swipeThreshold) {
				eventsArr.push("swipedown");
			}

			if (deltaY >= defaults.swipeThreshold) {
				eventsArr.push("swipeup");
			}

			if (eventsArr.length) {
				for (var i = 0; i < eventsArr.length; i++) {
					var eventName = eventsArr[i];
					sendEvent(e.target, eventName, e, {
						distance: {
							x: Math.abs(deltaX),
							y: Math.abs(deltaY)
						}
					});
				}

				tapNum = 0;
			} else {
				if (
					cachedX >= currX - defaults.tapPrecision &&
					cachedX <= currX + defaults.tapPrecision &&
					cachedY >= currY - defaults.tapPrecision &&
					cachedY <= currY + defaults.tapPrecision
				) {
					if (timestamp + defaults.tapThreshold - now >= 0) {
						sendEvent(
							e.target,
							tapNum >= 2 && target === e.target
								? "dbltap"
								: "tap",
							e
						);
						target = e.target;
					}
				}

				dblTapTimer = setTimeout(function () {
					tapNum = 0;
				}, defaults.dbltapThreshold);
			}
		},
		onTouchMove = function onTouchMove(e) {
			if (!isTheSameFingerId(e)) {
				return;
			}

			if (e.type === "mousemove" && wasTouch) {
				return;
			}

			var pointer = getPointerEvent(e);
			currX = pointer.pageX;
			currY = pointer.pageY;
		};

	setListener(
		doc,
		touchevents.touchstart + (defaults.justTouchEvents ? "" : " mousedown"),
		onTouchStart
	);
	setListener(
		doc,
		touchevents.touchend + (defaults.justTouchEvents ? "" : " mouseup"),
		onTouchEnd
	);
	setListener(
		doc,
		touchevents.touchmove + (defaults.justTouchEvents ? "" : " mousemove"),
		onTouchMove
	);

	win.tocca = function (options) {
		for (var opt in options) {
			if (options.hasOwnProperty(opt)) {
				defaults[opt] = options[opt];
			}
		}

		return defaults;
	};
})(document, "undefined" !== typeof window ? window : this);


































		
/*jslint browser: true */

/*jslint node: true */

/*global addClass, addListener, ajaxGet, debounce, doesFontExist, getByClass,
getHumanDate, hasClass, hasTouch, hasWheel, isNodejs, isElectron, isNwjs,
loadDeferred, loadJsCss, manageExternalLinkAll, needsPolyfills,
openDeviceBrowser, Parallax, parseLink, platform, QRCode, removeClass,
removeElement, setDisplayBlock, setDisplayNone, setVisible, supportsCanvas,
supportsPassive, supportsSvgSmilAnimation, toggleClass, ToProgress, unescape,
VK, WheelIndicator, Ya*/

/*property console, join, split */

(function(root, document) {
    "use strict";

    /*!
     * safe way to handle console.log
     * @see {@link https://github.com/paulmillr/console-polyfill}
     */
    (function() {
        if (!root.console) {
            root.console = {};
        }
        var con = root.console;
        var prop;
        var method;
        var dummy = function() {};
        var properties = ["memory"];
        var methods = ["assert,clear,count,debug,dir,dirxml,error,exception,group,",
            "groupCollapsed,groupEnd,info,log,markTimeline,profile,profiles,profileEnd,",
            "show,table,time,timeEnd,timeline,timelineEnd,timeStamp,trace,warn"
        ];
        methods.join("").split(",");
        for (;
            (prop = properties.pop());) {
            if (!con[prop]) {
                con[prop] = {};
            }
        }
        for (;
            (method = methods.pop());) {
            if (!con[method]) {
                con[method] = dummy;
            }
        }
        prop = method = dummy = properties = methods = null;
    })();

    /*!
     * supportsPassive
     */
    root.supportsPassive = (function() {
        var support = false;
        try {
            var options = Object.defineProperty && Object.defineProperty({}, "passive", {
                get: function() {
                    support = true;
                }
            });
            root.addEventListener("test", function() {}, options);
        } catch (err) {}
        return support;
    })();

    /*!
     * supportsSvgSmilAnimation
     */
    root.supportsSvgSmilAnimation = (function() {
        var fn = {}.toString;
        return !!document.createElementNS &&
            (/SVGAnimate/).test(fn.call(document.createElementNS("http://www.w3.org/2000/svg", "animate"))) || "";
    })();

    /*!
     * supportsCanvas
     */
    root.supportsCanvas = (function() {
        var canvas = document.createElement("canvas");
        return !!(canvas.getContext && canvas.getContext("2d"));
    })();

    /*!
     * hasWheel
     */
    root.hasWheel = "onwheel" in document.createElement("div") || void 0 !== document.onmousewheel || "";

    /*!
     * hasTouch
     */
    root.hasTouch = "ontouchstart" in document.documentElement || "";

    /*!
     * needsPolyfills
     */
    root.needsPolyfills = (function() {
        return !String.prototype.startsWith ||
            !supportsPassive ||
            !root.requestAnimationFrame ||
            !root.matchMedia ||
            ("undefined" === typeof root.Element && !("dataset" in document.documentElement)) ||
            !("classList" in document.createElement("_")) ||
            (document.createElementNS && !("classList" in document.createElementNS("http://www.w3.org/2000/svg", "g"))) ||
            (root.attachEvent && !root.addEventListener) ||
            !("onhashchange" in root) ||
            !Array.prototype.indexOf ||
            !root.Promise ||
            !root.fetch ||
            !document.querySelectorAll ||
            !document.querySelector ||
            !Function.prototype.bind ||
            (Object.defineProperty &&
                Object.getOwnPropertyDescriptor &&
                Object.getOwnPropertyDescriptor(Element.prototype, "textContent") &&
                !Object.getOwnPropertyDescriptor(Element.prototype, "textContent").get) ||
            !("undefined" !== typeof root.localStorage && "undefined" !== typeof root.sessionStorage) ||
            !root.WeakMap ||
            !root.MutationObserver;
    })();

    /*!
     * getHumanDate
     */
    root.getHumanDate = (function() {
        var newDate = (new Date());
        var newDay = newDate.getDate();
        var newYear = newDate.getFullYear();
        var newMonth = newDate.getMonth();
        (newMonth += 1);
        if (10 > newDay) {
            newDay = "0" + newDay;
        }
        if (10 > newMonth) {
            newMonth = "0" + newMonth;
        }
        return "".concat(newYear, "-", newMonth, "-", newDay);
    })();

    /*!
     * Super-simple wrapper around addEventListener and attachEvent (old IE).
     * Does not handle differences in the Event-objects.
     * @see {@link https://github.com/finn-no/eventlistener}
     */
    (function() {
        var setListener = function(standard, fallback) {
            return function(el, type, listener, useCapture) {
                if (el[standard]) {
                    el[standard](type, listener, useCapture);
                } else {
                    if (el[fallback]) {
                        el[fallback]("on" + type, listener);
                    }
                }
            };
        };
        root.addListener = setListener("addEventListener", "attachEvent");
        root.removeListener = setListener("removeEventListener", "detachEvent");
    })();

    /*!
     * get elements by class name wrapper
     */
    root.getByClass = function(parent, name) {
        if (!document.getElementsByClassName) {
            var children = (parent || document.body).getElementsByTagName("*"),
                elements = [],
                regx = new RegExp("\\b" + name + "\\b"),
                child;
            var i,
                l;
            for (i = 0, l = children.length; i < l; i += 1) {
                child = children[i];
                if (regx.test(child.className)) {
                    elements.push(child);
                }
            }
            i = l = null;
            return elements;
        } else {
            return parent ? parent.getElementsByClassName(name) : "";
        }
    };

    /*!
     * class list wrapper
     */
    (function() {
        var hasClass;
        var addClass;
        var removeClass;
        if ("classList" in document.documentElement) {
            hasClass = function(el, name) {
                return el.classList.contains(name);
            };
            addClass = function(el, name) {
                el.classList.add(name);
            };
            removeClass = function(el, name) {
                el.classList.remove(name);
            };
        } else {
            hasClass = function(el, name) {
                return new RegExp("\\b" + name + "\\b").test(el.className);
            };
            addClass = function(el, name) {
                if (!hasClass(el, name)) {
                    el.className += " " + name;
                }
            };
            removeClass = function(el, name) {
                el.className = el.className.replace(new RegExp("\\b" + name + "\\b", "g"), "");
            };
        }
        root.hasClass = hasClass;
        root.addClass = addClass;
        root.removeClass = removeClass;
        root.toggleClass = function(el, name) {
            if (hasClass(el, name)) {
                removeClass(el, name);
            } else {
                addClass(el, name);
            }
        };
    })();

    /*!
     * parseLink
     */

    /*jshint bitwise: false */
    root.parseLink = function(url, full) {
        var _full = full || "";
        var _url = encodeURI(url);
        return (function() {
            var _replace = function(s) {
                return s.replace(/^(#|\?)/, "").replace(/\:$/, "");
            };
            var _location = location || "";
            var _protocol = function(protocol) {
                switch (protocol) {
                    case "http:":
                        return _full ? ":" + 80 : 80;
                    case "https:":
                        return _full ? ":" + 443 : 443;
                    default:
                        return _full ? ":" + _location.port : _location.port;
                }
            };
            var _isAbsolute = (0 === url.indexOf("//") || !!~url.indexOf("://"));
            var _origin = function() {
                var c = document.createElement("a");
                c.href = _url;
                var o = c.protocol + "//" + c.hostname + (c.port ? ":" + c.port : "");
                return o || "";
            };
            var _isCrossDomain = function() {
                var _locationHref = window.location || "";
                var v = _locationHref.protocol + "//" + _locationHref.hostname + (_locationHref.port ? ":" + _locationHref.port : "");
                return v !== _origin();
            };
            var _link = document.createElement("a");
            _link.href = _url;
            return {
                href: _link.href,
                origin: _origin(),
                host: _link.host || _location.host,
                port: ("0" === _link.port || "" === _link.port) ?
                    _protocol(_link.protocol) :
                    (_full ? _link.port : _replace(_link.port)),
                hash: _full ? _link.hash : _replace(_link.hash),
                hostname: _link.hostname || _location.hostname,
                pathname: _link.pathname.charAt(0) !== "/" ?
                    (_full ? "/" + _link.pathname : _link.pathname) :
                    (_full ? _link.pathname : _link.pathname.slice(1)),
                protocol: !_link.protocol ||
                    ":" === _link.protocol ?
                    (_full ? _location.protocol : _replace(_location.protocol)) :
                    (_full ? _link.protocol : _replace(_link.protocol)),
                search: _full ? _link.search : _replace(_link.search),
                query: _full ? _link.search : _replace(_link.search),
                isAbsolute: _isAbsolute,
                isRelative: !_isAbsolute,
                isCrossDomain: _isCrossDomain(),
                hasHTTP: (/^(http|https):\/\//i).test(url) ? true : false
            };
        })();
    };
    /*jshint bitwise: true */

    /*!
     * getHttp
     */
    root.getHttp = (function() {
        var prot = root.location.protocol || "";
        return "http:" === prot ? "http" : "https:" === prot ? "https" : "";
    })();

    /*!
     * debounce
     */
    root.debounce = function(func, wait) {
        var timer;
        var args;
        var context;
        var timestamp;
        return function debounced() {
            context = this;
            args = [].slice.call(arguments, 0);
            timestamp = new Date();
            var later = function() {
                var last = (new Date()) - timestamp;
                if (last < wait) {
                    timer = setTimeout(later, wait - last);
                } else {
                    timer = null;
                    func.apply(context, args);
                }
            };
            if (!timer) {
                timer = setTimeout(later, wait);
            }
        };
    };

    /*!
     * isNodejs isElectron isNwjs;
     */
    root.isNodejs = "undefined" !== typeof process && "undefined" !== typeof require || "";
    root.isElectron = (function() {
        if (typeof root !== "undefined" &&
            typeof root.process === "object" &&
            root.process.type === "renderer") {
            return true;
        }
        if (typeof root !== "undefined" &&
            typeof root.process !== "undefined" &&
            typeof root.process.versions === "object" &&
            !!root.process.versions.electron) {
            return true;
        }
        if (typeof navigator === "object" &&
            typeof navigator.userAgent === "string" &&
            navigator.userAgent.indexOf("Electron") >= 0) {
            return true;
        }
        return false;
    })();
    root.isNwjs = (function() {
        if ("undefined" !== typeof isNodejs && isNodejs) {
            try {
                if ("undefined" !== typeof require("nw.gui")) {
                    return true;
                }
            } catch (err) {
                return false;
            }
        }
        return false;
    })();

    /*!
     * openDeviceBrowser
     */
    root.openDeviceBrowser = function(url) {
        var onElectron = function() {
            var es = isElectron ? require("electron").shell : "";
            return es ? es.openExternal(url) : "";
        };
        var onNwjs = function() {
            var ns = isNwjs ? require("nw.gui").Shell : "";
            return ns ? ns.openExternal(url) : "";
        };
        var onLocal = function() {
            return root.open(url, "_system", "scrollbars=1,location=no");
        };
        if (isElectron) {
            onElectron();
        } else if (isNwjs) {
            onNwjs();
        } else {
            if (root.getHttp) {
                return true;
            } else {
                onLocal();
            }
        }
    };

    /*!
     * setDisplayBlock
     */
    root.setDisplayBlock = function(elem) {
        return elem && (elem.style.display = "block");
    };

    /*!
     * setDisplayNone
     */
    root.setDisplayNone = function(elem) {
        return elem && (elem.style.display = "none");
    };

    /*!
     * setVisible
     */
    root.setVisible = function(elem) {
        return elem && (elem.style.visibility = "visible", elem.style.opacity = 1);
    };

    /*!
     * removeElement
     */
    root.removeElement = function(elem) {
        if (elem) {
            if ("undefined" !== typeof elem.remove) {
                return elem.remove();
            } else {
                return elem.parentNode && elem.parentNode.removeChild(elem);
            }
        }
    };

    /*!
     * modified ToProgress v0.1.1
     * arguments.callee changed to TP, a local wrapper function,
     * so that public function name is now customizable;
     * wrapped in curly brackets:
     * else{document.body.appendChild(this.progressBar);};
     * removed module check
     * @see {@link http://github.com/djyde/ToProgress}
     * @see {@link https://github.com/djyde/ToProgress/blob/master/ToProgress.js}
     * @see {@link https://gist.github.com/englishextra/6a8c79c9efbf1f2f50523d46a918b785}
     * @see {@link https://jsfiddle.net/englishextra/z5xhjde8/}
     * passes jshint
     */
    root.ToProgress = (function() {
        var TP = function() {
            var whichTransitionEvent = function() {
                var el = document.createElement("fakeelement");
                var transitions = {
                    "transition": "transitionend",
                    "OTransition": "oTransitionEnd",
                    "MozTransition": "transitionend",
                    "WebkitTransition": "webkitTransitionEnd"
                };
                var t;
                for (t in transitions) {
                    if (transitions.hasOwnProperty(t)) {
                        if (el.style[t] !== undefined) {
                            return transitions[t];
                        }
                    }
                }
                t = null;
            };
            var transitionEvent = whichTransitionEvent();
            var ToProgress = function(opt, selector) {
                this.progress = 0;
                this.options = {
                    id: "top-progress-bar",
                    color: "#F44336",
                    height: "2px",
                    duration: 0.2,
                    zIndex: "auto"
                };
                if (opt && typeof opt === "object") {
                    var key;
                    for (key in opt) {
                        if (opt.hasOwnProperty(key)) {
                            this.options[key] = opt[key];
                        }
                    }
                    key = null;
                }
                this.options.opacityDuration = this.options.duration * 3;
                this.progressBar = document.createElement("div");
                this.progressBar.id = this.options.id;
                this.progressBar.setCSS = function(style) {
                    var property;
                    for (property in style) {
                        if (style.hasOwnProperty(property)) {
                            this.style[property] = style[property];
                        }
                    }
                    property = null;
                };
                this.progressBar.setCSS({
                    "position": selector ? "relative" : "fixed",
                    "top": "0",
                    "left": "0",
                    "right": "0",
                    "background-color": this.options.color,
                    "height": this.options.height,
                    "width": "0%",
                    "transition": "width " + this.options.duration + "s" + ", opacity " + this.options.opacityDuration + "s",
                    "-moz-transition": "width " + this.options.duration + "s" + ", opacity " + this.options.opacityDuration + "s",
                    "-webkit-transition": "width " + this.options.duration + "s" + ", opacity " + this.options.opacityDuration + "s",
                    "z-index": this.options.zIndex
                });
                if (selector) {
                    var el;
                    if (selector.indexOf("#", 0) !== -1) {
                        el = document.getElementById(selector) || "";
                    } else {
                        if (selector.indexOf(".", 0) !== -1) {
                            el = document.getElementsByClassName(selector)[0] || "";
                        }
                    }
                    if (el) {
                        if (el.hasChildNodes()) {
                            el.insertBefore(this.progressBar, el.firstChild);
                        } else {
                            el.appendChild(this.progressBar);
                        }
                    }
                } else {
                    document.body.appendChild(this.progressBar);
                }
            };
            ToProgress.prototype.transit = function() {
                this.progressBar.style.width = this.progress + "%";
            };
            ToProgress.prototype.getProgress = function() {
                return this.progress;
            };
            ToProgress.prototype.setProgress = function(progress, callback) {
                this.show();
                if (progress > 100) {
                    this.progress = 100;
                } else if (progress < 0) {
                    this.progress = 0;
                } else {
                    this.progress = progress;
                }
                this.transit();
                if (callback) {
                    callback();
                }
            };
            ToProgress.prototype.increase = function(toBeIncreasedProgress, callback) {
                this.show();
                this.setProgress(this.progress + toBeIncreasedProgress, callback);
            };
            ToProgress.prototype.decrease = function(toBeDecreasedProgress, callback) {
                this.show();
                this.setProgress(this.progress - toBeDecreasedProgress, callback);
            };
            ToProgress.prototype.finish = function(callback) {
                var that = this;
                this.setProgress(100, callback);
                this.hide();
                if (transitionEvent) {
                    this.progressBar.addEventListener(transitionEvent, function(e) {
                        that.reset();
                        that.progressBar.removeEventListener(e.type, TP);
                    });
                }
            };
            ToProgress.prototype.reset = function(callback) {
                this.progress = 0;
                this.transit();
                if (callback) {
                    callback();
                }
            };
            ToProgress.prototype.hide = function() {
                this.progressBar.style.opacity = "0";
            };
            ToProgress.prototype.show = function() {
                this.progressBar.style.opacity = "1";
            };
            return ToProgress;
        };
        return TP();
    })();

    /*!
     * manageExternalLinkAll
     */
    root.manageExternalLinkAll = function() {
        var link = document.getElementsByTagName("a") || "";
        var arrange = function(e) {
            var handle = function(url, ev) {
                ev.stopPropagation();
                ev.preventDefault();
                var logic = function() {
                    openDeviceBrowser(url);
                };
                debounce(logic, 200).call(root);
            };
            var externalLinkIsBindedClass = "external-link--is-binded";
            if (!hasClass(e, externalLinkIsBindedClass)) {
                var url = e.getAttribute("href") || "";
                if (url && parseLink(url).isCrossDomain && parseLink(url).hasHTTP) {
                    e.title = "" + (parseLink(url).hostname || "") + " откроется в новой вкладке";
                    if (root.getHttp) {
                        e.target = "_blank";
                        e.setAttribute("rel", "noopener noreferrer");
                    } else {
                        addListener(e, "click", handle.bind(null, url));
                    }
                    addClass(e, externalLinkIsBindedClass);
                }
            }
        };
        if (link) {
            var i,
                l;
            for (i = 0, l = link.length; i < l; i += 1) {
                arrange(link[i]);
            }
            i = l = null;
        }
    };

    /*!
     * modified Detect Whether a Font is Installed
     * @param {String} fontName The name of the font to check
     * @return {Boolean}
     * @author Kirupa <sam@samclarke.com>
     * @see {@link https://www.kirupa.com/html5/detect_whether_font_is_installed.htm}
     * passes jshint
     */
    root.doesFontExist = function(fontName) {
        var canvas = document.createElement("canvas");
        var context = canvas.getContext("2d");
        var text = "abcdefghijklmnopqrstuvwxyz0123456789";
        context.font = "72px monospace";
        var baselineSize = context.measureText(text).width;
        context.font = "72px '" + fontName + "', monospace";
        var newSize = context.measureText(text).width;
        canvas = null;
        if (newSize === baselineSize) {
            return false;
        } else {
            return true;
        }
    };

    /*!
     * modified loadExt
     * @see {@link https://gist.github.com/englishextra/ff9dc7ab002312568742861cb80865c9}
     * passes jshint
     */
    root.loadJsCss = function(files, callback, type) {
        var _this = this;
        _this.files = files;
        _this.js = [];
        _this.head = document.getElementsByTagName("head")[0] || "";
        _this.body = document.body || "";
        _this.ref = document.getElementsByTagName("script")[0] || "";
        _this.callback = callback || function() {};
        _this.type = type ? type.toLowerCase() : "";
        _this.loadStyle = function(file) {
            var link = document.createElement("link");
            link.rel = "stylesheet";
            link.type = "text/css";
            link.href = file;
            link.media = "only x";
            link.onload = function() {
                this.onload = null;
                this.media = "all";
            };
            link.setAttribute("property", "stylesheet");
            /* _this.head.appendChild(link); */
            (_this.body || _this.head).appendChild(link);
        };
        _this.loadScript = function(i) {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.async = true;
            script.src = _this.js[i];
            var loadNextScript = function() {
                if (++i < _this.js.length) {
                    _this.loadScript(i);
                } else {
                    _this.callback();
                }
            };
            script.onload = function() {
                loadNextScript();
            };
            _this.head.appendChild(script);
            /* if (_this.ref.parentNode) {
            	_this.ref.parentNode[insertBefore](script, _this.ref);
            } else {
            	(_this.body || _this.head).appendChild(script);
            } */
            (_this.body || _this.head).appendChild(script);
        };
        var i,
            l;
        for (i = 0, l = _this.files.length; i < l; i += 1) {
            if ((/\.js$|\.js\?/).test(_this.files[i]) || _this.type === "js") {
                _this.js.push(_this.files[i]);
            }
            if ((/\.css$|\.css\?|\/css\?/).test(_this.files[i]) || _this.type === "css") {
                _this.loadStyle(_this.files[i]);
            }
        }
        i = l = null;
        if (_this.js.length > 0) {
            _this.loadScript(0);
        } else {
            _this.callback();
        }
    };

    /*!
     * loadDeferred
     */
    root.loadDeferred = function(urlArray, callback) {
        var timer;
        var handle = function() {
            clearTimeout(timer);
            timer = null;
            var load;
            load = new loadJsCss(urlArray, callback);
        };
        var req;
        var raf = function() {
            cancelAnimationFrame(req);
            timer = setTimeout(handle, 0);
        };
        if (root.requestAnimationFrame) {
            req = requestAnimationFrame(raf);
        } else {
            addListener(root, "load", handle);
        }
    };
})("undefined" !== typeof window ? window : this, document);
		
		
		
		
		
		
		
		

/*!
 * app logic
 */
(function(root, document, undefined) {
    "use strict";

    var docElem = document.documentElement || "";

    var progressBar = new ToProgress({
        id: "top-progress-bar",
        color: "#FF2C40",
        height: "0.200rem",
        duration: 0.2,
        zIndex: 999
    });

    var hideProgressBar = function() {
        progressBar.finish();
        progressBar.hide();
    };

    if (supportsSvgSmilAnimation) {
        addClass(docElem, "svganimate");
    }

    if (!supportsSvgSmilAnimation) {
        progressBar.increase(20);
        addListener(root, "load", hideProgressBar);
    }

    var ripple = getByClass(document, "ripple")[0] || "";

    var removeRipple = function() {
        removeElement(ripple);
    };

    var timerRipple;
    var deferRemoveRipple = function() {
        clearTimeout(timerRipple);
        timerRipple = null;
        removeRipple();
    };

    var loading = getByClass(document, "loading")[0] || "";

    var removeLoading = function() {
        removeElement(loading);
    };

    var timerLoading;
    var deferRemoveLoading = function() {
        clearTimeout(timerLoading);
        timerLoading = null;
        removeLoading();
    };

    var bounceOutUpClass = "bounceOutUp";

    var hidePreloaders = function() {
        if (ripple) {
            ripple.className += " " + bounceOutUpClass;
            timerRipple = setTimeout(deferRemoveRipple, 5000);
        }
        if (loading) {
            loading.className += " " + bounceOutUpClass;
            timerLoading = setTimeout(deferRemoveLoading, 5000);
        }
    };

    if (!supportsSvgSmilAnimation) {
        removeRipple();
        removeLoading();
    } else {
        addListener(root, "load", hidePreloaders);
    }

    var supportsSvgAsImg = document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1") || "";

    if (!supportsSvgAsImg) {
        var svgNosmilImgAll = getByClass(document, "svg-nosmil-img") || "";
        if (svgNosmilImgAll) {
            var i,
                l;
            for (i = 0, l = svgNosmilImgAll.length; i < l; i += 1) {
                svgNosmilImgAll[i].src = svgNosmilImgAll[i].getAttribute("data-fallback-src");
            }
            i = l = null;
        }
    }

    if (!supportsSvgSmilAnimation) {
        var svgSmilImgAll = getByClass(document, "svg-smil-img") || "";
        if (svgSmilImgAll) {
            var j,
                m;
            for (j = 0, m = svgSmilImgAll.length; j < m; j += 1) {
                svgSmilImgAll[j].src = svgSmilImgAll[j].getAttribute("data-fallback-src");
            }
            j = m = null;
        }
    }

    var drawImageFromUrl = function(canvasObj, url) {
        if (!canvasObj || !url) {
            return;
        }
        var img = new Image();
        addListener(img, "load", function() {
            var ctx = canvasObj.getContext("2d");
            if (ctx) {
                ctx.drawImage(img, 0, 0, canvasObj.width, canvasObj.height);
            }
        });
        img.src = url;
    };

    var replaceCanvasWithImg = function(canvasObj, url) {
        if (!canvasObj || !url) {
            return;
        }
        var img = document.createElement("img");
        img.src = url;
        img.alt = "";
        img.className = canvasObj.className.split(" ").join(" ");
        img.width = canvasObj.width;
        img.height = canvasObj.height;
        if (canvasObj.parentNode) {
            canvasObj.parentNode.insertBefore(img, canvasObj.nextSibling);
        }
        setDisplayNone(canvasObj);
    };

    var canvasAll = document.getElementsByTagName("canvas") || "";

    var styleSheetsLength = document.styleSheets.length || 0;

    var slotDrawCanvasAll;
    var drawCanvasAll = function() {
       /*  if (document.styleSheets.length > styleSheetsLength) { */
            clearInterval(slotDrawCanvasAll);
            slotDrawCanvasAll = null;
            var i,
                l,
                canvasObj,
                url;
            for (i = 0, l = canvasAll.length; i < l; i += 1) {
                if (canvasAll[i].getAttribute("data-src")) {
                    canvasObj = canvasAll[i];
                    url = canvasAll[i].getAttribute("data-src");
                    if (supportsCanvas) {
                        drawImageFromUrl(canvasObj, url);
                    } else {
                        replaceCanvasWithImg(canvasObj, url);
                    }

                }
            }
            i = l = canvasObj = url = null;
        /* } */
    };

    if (canvasAll && styleSheetsLength) {
        slotDrawCanvasAll = setInterval(drawCanvasAll, 100);
    }

    var run = function() {

        var bounceInUpClass = "bounceInUp";
        var bounceOutDownClass = "bounceOutDown";

        var isActiveClass = "is-active";
        var isSocialClass = "is-social";

        removeClass(docElem, "no-js");
        addClass(docElem, "js");

        if (!supportsSvgSmilAnimation) {
            progressBar.increase(20);
        }

        if (root.platform && document.title && navigator.userAgent) {
            var userBrowserDescription = platform.description || "";
            document.title = document.title +
                " [" +
                (getHumanDate ? " " + getHumanDate : "") +
                (userBrowserDescription ? " " + userBrowserDescription : "") +
                ((hasTouch || hasWheel) ? " with" : "") +
                (hasTouch ? " touch" : "") +
                ((hasTouch && hasWheel) ? "," : "") +
                (hasWheel ? " mousewheel" : "") +
                "]";
        }

        manageExternalLinkAll();

        var manageLocationQrcode = function() {
            var qrcode = getByClass(document, "qrcode")[0] || "";
            var docTitle = document.title || "";
            var locHref = "https://encrypt.payalcomputers.com" || "";
            var timerQrcode;
            var showQrcode = function() {
                clearTimeout(timerQrcode);
                timerQrcode = null;
                setVisible(qrcode);
            };
            if (qrcode) {
                var img = document.createElement("img");
                var imgTitle = docTitle ? ("Ссылка на страницу «" + docTitle.replace(/\[[^\]]*?\]/g, "").trim() + "»") : "";
                var imgSrc = "https://chart.googleapis.com/chart?cht=qr&chld=M%7C4&choe=UTF-8&chs=512x512&chl=" + encodeURIComponent(locHref);
                img.alt = imgTitle;
                if (root.QRCode) {
                    if (supportsSvgAsImg) {
                        imgSrc = QRCode.generateSVG(locHref, {
                            ecclevel: "M",
                            fillcolor: "#FFFFFF",
                            textcolor: "#191919",
                            margin: 4,
                            modulesize: 8
                        });
                        var XMLS = new XMLSerializer();
                        imgSrc = XMLS.serializeToString(imgSrc);
                        imgSrc = "data:image/svg+xml;base64," + root.btoa(unescape(encodeURIComponent(imgSrc)));
                        img.src = imgSrc;
                    } else {
                        imgSrc = QRCode.generatePNG(locHref, {
                            ecclevel: "M",
                            format: "html",
                            fillcolor: "#FFFFFF",
                            textcolor: "#1F1F1F",
                            margin: 4,
                            modulesize: 8
                        });
                        img.src = imgSrc;
                    }
                } else {
                    img.src = imgSrc;
                }
                img.title = imgTitle;
                qrcode.appendChild(img);
                timerQrcode = setTimeout(showQrcode, 2000);
            }
        };
        manageLocationQrcode();

        var manageDownloadAppBtn = function() {
            var downloadApp = getByClass(document, "download-app")[0] || "";
            var link = downloadApp ? downloadApp.getElementsByTagName("a")[0] || "" : "";
            var img = downloadApp ? downloadApp.getElementsByTagName("img")[0] || "" : "";
            var navUA = navigator.userAgent || "";
            var timer;
            var showDownloadApp = function() {
                clearTimeout(timer);
                timer = null;
                setVisible(downloadApp);
            };
            if (root.platform && navUA && downloadApp && link && img) {
                var osBrowser = platform.name || "";
                var osFamily = platform.os.family || "";
                var osVersion = platform.os.version || "";
                var osArchitecture = platform.os.architecture || "";
                /* console.log(navUA);
                console.log(platform.os);
                console.log(osBrowser + "|" + osFamily + "|" + osVersion + "|" + osArchitecture + "|" + userBrowserDescription); */
                var imgSrc;
                var linkHref;
                
                if (imgSrc && linkHref) {
                    /* link.href = linkHref; */
					link.href = "javascript:void(0);";
                    /* link.target = "_blank"; */
                    link.title = "Скачать приложение";
                    link.setAttribute("rel", "noopener noreferrer");
                    if (!supportsSvgAsImg) {
                        imgSrc = [imgSrc.slice(0, -3), "png"].join("");
                    }
                    img.src = imgSrc;
                    timer = setTimeout(showDownloadApp, 1000);
                }
            }
        };
        manageDownloadAppBtn();

        var scene = document.getElementById("scene") || "";
        var parallax;
        if (root.Parallax && scene) {
            parallax = new Parallax(scene);
        }

        var guesture = getByClass(document, "guesture")[0] || "";

        var start = getByClass(document, "start")[0] || "";
        var hand = getByClass(document, "hand")[0] || "";

        var revealStart = function() {
            if (start) {
                removeClass(start, bounceOutDownClass);
                addClass(start, bounceInUpClass);
                setDisplayBlock(start);
            }
            if (hand) {
                removeClass(hand, bounceOutDownClass);
                addClass(hand, bounceInUpClass);
                setDisplayBlock(hand);
            }
            if (guesture) {
                addClass(guesture, bounceOutUpClass);
            }
        };

        var concealStart = function() {
            if (start) {
                removeClass(start, bounceInUpClass);
                addClass(start, bounceOutDownClass);
            }
            if (hand) {
                removeClass(hand, bounceInUpClass);
                addClass(hand, bounceOutDownClass);
            }
            var timer;
            var hideStart = function() {
                clearTimeout(timer);
                timer = null;
                setDisplayNone(start);
                setDisplayNone(hand);
            };
            timer = setTimeout(hideStart, 1000);
        };

        var mousewheeldown = getByClass(document, "mousewheeldown")[0] || "";
        var swipeup = getByClass(document, "swipeup")[0] || "";
        if (mousewheeldown && swipeup) {
            if (hasTouch) {
                setDisplayNone(mousewheeldown);
                if (root.tocca) {
                    addListener(document, "swipeup", revealStart, { passive: true });
                    addListener(document, "swipedown", concealStart, { passive: true });
                }
            } else {
                if (hasWheel) {
                    setDisplayNone(swipeup);
                    if (root.WheelIndicator) {
                        var indicator;
                        indicator = new WheelIndicator({
                            elem: root,
                            callback: function(e) {
                                if ("down" === e.direction) {
                                    revealStart();
                                }
                                if ("up" === e.direction) {
                                    concealStart();
                                }
                            },
                            preventMouse: false
                        });
                    }
                }
            }
            if (hasTouch || hasWheel) {
                addClass(guesture, bounceInUpClass);
                setDisplayBlock(guesture);
            }
        }

        var hideOtherIsSocial = function(thisObj) {
            var _thisObj = thisObj || this;
            var elem = getByClass(document, isSocialClass) || "";
            if (elem) {
                var i,
                    l;
                for (i = 0, l = elem.length; i < l; i += 1) {
                    if (_thisObj !== elem[i]) {
                        removeClass(elem[i], isActiveClass);
                    }
                }
                i = l = null;
            }
        };
        addListener(root, "click", hideOtherIsSocial);

        root.yaShare2Instance = null;
        var manageYaShare2Btn = function() {
            var btn = getByClass(document, "btn-share-buttons")[0] || "";
            var yaShare2Id = "ya-share2";
            var yaShare2 = document.getElementById(yaShare2Id) || "";
            var handleBtn = function(ev) {
                ev.stopPropagation();
                ev.preventDefault();
                var logic = function() {
                    toggleClass(yaShare2, isActiveClass);
                    hideOtherIsSocial(yaShare2);
                    var initScript = function() {
                        try {
                            if (root.yaShare2Instance) {
                                root.yaShare2Instance.updateContent({
                                    title: document.title || "",
                                    description: document.title || "",
                                    url: root.location.href || ""
                                });
                            } else {
                                root.yaShare2Instance = Ya.share2(yaShare2Id, {
                                    content: {
                                        title: document.title || "",
                                        description: document.title || "",
                                        url: root.location.href || ""
                                    }
                                });
                            }
                        } catch (err) {
                            throw new Error("cannot root.yaShare2Instance.updateContent or Ya.share2 " + err);
                        }
                    };
                    if (!(root.Ya && Ya.share2)) {
                        var jsUrl = "https://yastatic.net/share2/share.js";
                        var load;
                        load = new loadJsCss([jsUrl], initScript);
                    } else {
                        initScript();
                    }
                };
                debounce(logic, 200).call(root);
            };
            if (btn && yaShare2) {
                if (root.getHttp) {
                    addListener(btn, "click", handleBtn);
                } else {
                    setDisplayNone(btn);
                }
            }
        };
        manageYaShare2Btn();

        root.vkLikeInstance = null;
        var manageVkLikeBtn = function() {
            var vkLikeId = "vk-like";
            var vkLike = document.getElementById(vkLikeId) || "";
            var holderVkLike = getByClass(document, "holder-vk-like")[0] || "";
            var btn = getByClass(document, "btn-show-vk-like")[0] || "";
            var handleBtn = function(ev) {
                ev.stopPropagation();
                ev.preventDefault();
                var logic = function() {
                    toggleClass(holderVkLike, isActiveClass);
                    hideOtherIsSocial(holderVkLike);
                    var initScript = function() {
                        if (!root.vkLikeInstance) {
                            try {
                                VK.init({
                                    apiId: (vkLike.dataset.apiid || ""),
                                    nameTransportPath: "/xd_receiver.htm",
                                    onlyWidgets: true
                                });
                                VK.Widgets.Like(vkLikeId, {
                                    type: "button",
                                    height: 24
                                });
                                root.vkLikeInstance = true;
                            } catch (err) {
                                throw new Error("cannot VK.init " + err);
                            }
                        }
                    };
                    if (!(root.VK && VK.init && VK.Widgets && VK.Widgets.Like)) {
                        var jsUrl = "https://vk.com/js/api/openapi.js?168";
                        var load;
                        load = new loadJsCss([jsUrl], initScript);
                    } else {
                        initScript();
                    }
                };
                debounce(logic, 200).call(root);
            };
            if (btn && vkLike) {
                if (root.getHttp) {
                    addListener(btn, "click", handleBtn);
                } else {
                    setDisplayNone(btn);
                }
            }
        };
        manageVkLikeBtn();
    };

    var onFontReady = function(bodyFontFamily, scripts, useCheck) {
        var _useCheck = useCheck || "";
        var slot;
        var init = function() {
            clearInterval(slot);
            slot = null;
            if (!supportsSvgSmilAnimation && "undefined" !== typeof progressBar) {
                progressBar.increase(20);
            }
            /* var load;
            load = new loadJsCss(scripts, run); */
			run();
        };
        var check = function() {
            if (doesFontExist(bodyFontFamily)) {
                init();
            }
        };
        if (_useCheck && supportsCanvas) {
            slot = setInterval(check, 100);
        } else {
            slot = null;
            init();
        }
    };

    var scripts = [];

    /* if (needsPolyfills) {
        scripts.push("./cdn/polyfills/js/polyfills.fixed.min.js");
    }

    scripts.push("https://englishextra.github.io/libs/john-locke/js/vendors.min.js"); */

    var bodyFontFamily = "Roboto";

   /*  var urlArray = ["https://englishextra.github.io/libs/john-locke/css/bundle.min.css"]; */
   
    var urlArray = [];

    loadDeferred(urlArray, onFontReady.bind(null, bodyFontFamily, scripts, false));
})("undefined" !== typeof window ? window : this, document);




</script>
</html>