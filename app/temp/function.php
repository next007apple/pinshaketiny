<?php
function temp1(){
define('DEBUG', false);
error_reporting(E_ALL);
if (DEBUG){ini_set('display_errors', 'On');}
else {ini_set('display_errors', 'Off');}
$url = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME);
$url_var = explode('/' , $url);
$last_folder = end($url_var);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $last_folder; ?></title>
	<link rel="icon" type="image/png" href="../app/theme/favicon.png" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="../app/theme/css/default.css" />
	<link rel="stylesheet" type="text/css" href="../app/theme/css/component.css" />
	<!-- plugin,icon,fontawesome4 -->
	<link rel="stylesheet" type="text/css" href="../app/plugins/awesomefont4/css/font-awesome.min.css" media="screen" />
	<!-- plugin,lightbox,fancybox2 -->
	<link rel="stylesheet" type="text/css" href="../app/plugins/fancybox2/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="../app/plugins/fancybox2/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="../app/plugins/fancybox2/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="../app/plugins/fancybox2/lib/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/custom1.js"></script>
	<!-- form style -->
</head>
<body id="style-1">
<?php
$file = fopen("$last_folder.csv","r");
$protect = fgetcsv($file);
if (!isset($_POST["protect"]) && !empty($protect[4])){?>
<form action="" method="post">
<input class="inprotect1" type="text" name="protect" placeholder="Enter Password"><br>
</form>
<?php } ?>
<div class="container">
<ul class="grid effect-2" id="grid"> <?php
if (!empty($_POST["protect"])){ if ($_POST["protect"] == $protect[4]){ 
while (($data = fgetcsv($file)) !== FALSE) { ?> <li><?php
	if(!empty($data[1])) {echo "<div class=gridv1>";}
	if(!empty($data[0])) {echo "<div class=gridvi1><a class=fancybox data-fancybox-group=1 href=".$data[0]." target=_blank "?><?php if(!empty($data[1])) {echo "title='".$data[1]."'";}?><?php echo "><img src=".$data[0]."></a></div>";}
	if(!empty($data[1])) {echo "<div class=gridvi2>"?><?php if(!empty($data[3] === 'yt')) {echo "<i class='fa fa-youtube-play' aria-hidden=true>&nbsp;&nbsp;</i>";}?><?php echo "<a "?><?php if(!empty($data[3] === 'yt')) {echo "class=fancybox-media data-fancybox-group=2 ";}?><?php echo "target=_blank "?><?php if(!empty($data[2])) {echo "href=".$data[2];}?><?php echo ">".$data[1]."</a></div></div>";} ?>
	</li> <?php } } } 
if (empty($protect[4])){
while (($data = fgetcsv($file)) !== FALSE) { ?> <li><?php
	if(!empty($data[1])) {echo "<div class=gridv1>";}
	if(!empty($data[0])) {echo "<div class=gridvi1><a class=fancybox data-fancybox-group=1 href=".$data[0]." target=_blank "?><?php if(!empty($data[1])) {echo "title='".$data[1]."'";}?><?php echo "><img src=".$data[0]."></a></div>";}
	if(!empty($data[1])) {echo "<div class=gridvi2>"?><?php if(!empty($data[3] === 'yt')) {echo "<i class='fa fa-youtube-play' aria-hidden=true>&nbsp;&nbsp;</i>";}?><?php echo "<a "?><?php if(!empty($data[3] === 'yt')) {echo "class=fancybox-media data-fancybox-group=2 ";}?><?php echo "target=_blank "?><?php if(!empty($data[2])) {echo "href=".$data[2];}?><?php echo ">".$data[1]."</a></div></div>";} ?>
	</li> <?php } } ?>
</ul>
</div>
	<script src="../app/theme/js/modernizr.custom.js"></script>
	<script src="../app/theme/js/masonry.pkgd.min.js"></script>
	<script src="../app/theme/js/imagesloaded.js"></script>
	<script src="../app/theme/js/classie.js"></script>
	<script src="../app/theme/js/AnimOnScroll.js"></script>
	<script src="../app/theme/js/custom1.js"></script>
</body>
</html>
<?php } ?>

<?php
function temp2(){
define('DEBUG', false);
error_reporting(E_ALL);
if (DEBUG){ini_set('display_errors', 'On');}
else {ini_set('display_errors', 'Off');}
$url = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME);
$url_var = explode('/' , $url);
$last_folder = end($url_var);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $last_folder; ?></title>
	<link rel="icon" type="image/png" href="../app/theme/favicon.png" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="../app/theme/css/default.css" />
	<link rel="stylesheet" type="text/css" href="../app/theme/css/component.css" />
	<!-- plugin,icon,fontawesome4 -->
	<link rel="stylesheet" type="text/css" href="../app/plugins/awesomefont4/css/font-awesome.min.css" media="screen" />
	<!-- plugin,lightbox,fancybox2 -->
	<link rel="stylesheet" type="text/css" href="../app/plugins/fancybox2/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="../app/plugins/fancybox2/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="../app/plugins/fancybox2/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="../app/plugins/fancybox2/lib/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/custom1.js"></script>
	<!-- form style -->
</head>
<body id="style-1">
<?php
$file = fopen("$last_folder.csv","r");
$protect = fgetcsv($file);
if (!isset($_POST["protect"]) && !empty($protect[4])){?>
<form action="" method="post">
<input class="inprotect1" type="text" name="protect" placeholder="Enter Password"><br>
</form>
<?php } ?>
<div class="container">
<ul class="grid effect-2" id="grid"> <?php
if (!empty($_POST["protect"])){ if ($_POST["protect"] == $protect[4]){ 
while (($data = fgetcsv($file)) !== FALSE) { ?> <li><?php
	if(!empty($data[1])) {echo "<div class=gridv1t1>";}
	if(!empty($data[0])) {echo "<div class=gridvi1><a class=fancybox data-fancybox-group=1 href=".$data[0]." target=_blank "?><?php if(!empty($data[1])) {echo "title='".$data[1]."'";}?><?php echo "><img src=".$data[0]."></a></div>";}
	if(!empty($data[1])) {echo "<div class=gridvi2>"?><?php if(!empty($data[3] === 'yt')) {echo "<i class='fa fa-youtube-play' aria-hidden=true>&nbsp;&nbsp;</i>";}?><?php echo "<a "?><?php if(!empty($data[3] === 'yt')) {echo "class=fancybox-media data-fancybox-group=2 ";}?><?php echo "target=_blank "?><?php if(!empty($data[2])) {echo "href=".$data[2];}?><?php echo ">".$data[1]."</a></div></div>";} ?>
	</li> <?php } } } 
if (empty($protect[4])){
while (($data = fgetcsv($file)) !== FALSE) { ?> <li><?php
	if(!empty($data[1])) {echo "<div class=gridv1t1>";}
	if(!empty($data[0])) {echo "<div class=gridvi1><a class=fancybox data-fancybox-group=1 href=".$data[0]." target=_blank "?><?php if(!empty($data[1])) {echo "title='".$data[1]."'";}?><?php echo "><img src=".$data[0]."></a></div>";}
	if(!empty($data[1])) {echo "<div class=gridvi2>"?><?php if(!empty($data[3] === 'yt')) {echo "<i class='fa fa-youtube-play' aria-hidden=true>&nbsp;&nbsp;</i>";}?><?php echo "<a "?><?php if(!empty($data[3] === 'yt')) {echo "class=fancybox-media data-fancybox-group=2 ";}?><?php echo "target=_blank "?><?php if(!empty($data[2])) {echo "href=".$data[2];}?><?php echo ">".$data[1]."</a></div></div>";} ?>
	</li> <?php } } ?>
</ul>
</div>
	<script src="../app/theme/js/modernizr.custom.js"></script>
	<script src="../app/theme/js/masonry.pkgd.min.js"></script>
	<script src="../app/theme/js/imagesloaded.js"></script>
	<script src="../app/theme/js/classie.js"></script>
	<script src="../app/theme/js/AnimOnScroll.js"></script>
	<script src="../app/theme/js/custom1.js"></script>
</body>
</html>
<?php } ?>

<?php
function temp3(){
define('DEBUG', false);
error_reporting(E_ALL);
if (DEBUG){ini_set('display_errors', 'On');}
else {ini_set('display_errors', 'Off');}
$url = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME);
$url_var = explode('/' , $url);
$last_folder = end($url_var);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $last_folder; ?></title>
	<link rel="icon" type="image/png" href="../app/theme/favicon.png" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="../app/theme/css/default.css" />
	<link rel="stylesheet" type="text/css" href="../app/theme/css/component.css" />
	<!-- plugin,icon,fontawesome4 -->
	<link rel="stylesheet" type="text/css" href="../app/plugins/awesomefont4/css/font-awesome.min.css" media="screen" />
	<!-- plugin,lightbox,fancybox2 -->
	<link rel="stylesheet" type="text/css" href="../app/plugins/fancybox2/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="../app/plugins/fancybox2/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="../app/plugins/fancybox2/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="../app/plugins/fancybox2/lib/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript" src="../app/plugins/fancybox2/source/helpers/custom1.js"></script>
	<!-- form style -->
</head>
<body id="style-1">
<?php
$file = fopen("$last_folder.csv","r");
$gssid = fgetcsv($file);

$gssurl = 'https://spreadsheets.google.com/feeds/list/'.$gssid[0].'/1/public/values?alt=json';
$gssfile= file_get_contents($gssurl);
$gssjson = json_decode($gssfile);
$gssrows = $gssjson->{'feed'}->{'entry'};

$t2row = array();
foreach($gssrows as $t2row){
$gpsp[] = $t2row->{'gsx$psp'}->{'$t'};
}

if (!isset($_POST["protect"]) && !empty($gpsp[0])){?>
<form action="" method="post">
<input class="inprotect1" type="text" name="protect" placeholder="Enter Password"><br>
</form>
<?php } ?>
<div class="container">
<ul class="grid effect-2" id="grid"> <?php
if (!empty($_POST["protect"])){ if ($_POST["protect"] == $gpsp[0]){
foreach($gssrows as $row){
$gsn = $row->{'gsx$sn'}->{'$t'};
$gtn = $row->{'gsx$tn'}->{'$t'};
$gpi = $row->{'gsx$pi'}->{'$t'};
$gpt = $row->{'gsx$pt'}->{'$t'};
$gpl = $row->{'gsx$pl'}->{'$t'};
$gpc = $row->{'gsx$pc'}->{'$t'};
	if (!empty($gtn)){
	echo "<li><div id=".$gsn.">";
	if(!empty($gpt)) {echo "<div class=gridv1t1>";}
	if(!empty($gpi)) {echo "<div class=gridvi1><a class=fancybox data-fancybox-group=1 href=".$gpi." target=_blank "?><?php if(!empty($gpt)) {echo "title='".$gpt."'";}?><?php echo "><img src=".$gpi."></a></div>";}
	if(!empty($gpt)) {echo "<div class=gridvi2>"?><?php if(!empty($gpc === 'yt')) {echo "<i class='fa fa-youtube-play' aria-hidden=true>&nbsp;&nbsp;</i>";}?><?php echo "<a "?><?php if(!empty($gpc === 'yt')) {echo "class=fancybox-media data-fancybox-group=2 ";}?><?php echo "target=_blank "?><?php if(!empty($gpl)) {echo "href=".$gpl;}?><?php echo ">".$gpt."</a></div></div>";}
	echo "</div></li>";} } } }
if (empty($gpsp[0])){
foreach($gssrows as $row){
$gsn = $row->{'gsx$sn'}->{'$t'};
$gtn = $row->{'gsx$tn'}->{'$t'};
$gpi = $row->{'gsx$pi'}->{'$t'};
$gpt = $row->{'gsx$pt'}->{'$t'};
$gpl = $row->{'gsx$pl'}->{'$t'};
$gpc = $row->{'gsx$pc'}->{'$t'};
	if (!empty($gtn)){
	echo "<li><div id=".$gsn.">";
	if(!empty($gpt)) {echo "<div class=gridv1t1>";}
	if(!empty($gpi)) {echo "<div class=gridvi1><a class=fancybox data-fancybox-group=1 href=".$gpi." target=_blank "?><?php if(!empty($gpt)) {echo "title='".$gpt."'";}?><?php echo "><img src=".$gpi."></a></div>";}
	if(!empty($gpt)) {echo "<div class=gridvi2>"?><?php if(!empty($gpc === 'yt')) {echo "<i class='fa fa-youtube-play' aria-hidden=true>&nbsp;&nbsp;</i>";}?><?php echo "<a "?><?php if(!empty($gpc === 'yt')) {echo "class=fancybox-media data-fancybox-group=2 ";}?><?php echo "target=_blank "?><?php if(!empty($gpl)) {echo "href=".$gpl;}?><?php echo ">".$gpt."</a></div></div>";}
	echo "</div></li>";} } } ?>
</ul>
</div>
	<script src="../app/theme/js/modernizr.custom.js"></script>
	<script src="../app/theme/js/masonry.pkgd.min.js"></script>
	<script src="../app/theme/js/imagesloaded.js"></script>
	<script src="../app/theme/js/classie.js"></script>
	<script src="../app/theme/js/AnimOnScroll.js"></script>
	<script src="../app/theme/js/custom1.js"></script>
</body>
</html>
<?php } ?>