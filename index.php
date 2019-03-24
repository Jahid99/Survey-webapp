<?php 
include 'lib/Session.php';
Session::checkSession();
?>
<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>
<?php 
        $db = new Database();
        $fm = new Format();     
 ?>
 <?php
      if(isset($_GET['action']) && isset($_GET['action'])=="logout"){
          Session::destroy();
      }
      //  if($_SESSION['username']!='adminsays'){
      //   echo "<script>window.location='../'</script>";
      //   exit;
      // }
      
?>  

<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		

		// echo '<pre>';

		// print_r($_POST);

		$question_and_ans = array();


		$name = $_POST['QR~QID2~TEXT'];
		$we_know_6677 = $_POST['QR~QID4~TEXT'];
		$we_know_21 = $_POST['QR~QID5~TEXT'];
		$we_know_22 = $_POST['QR~QID6~TEXT'];
		$based_on  = $_POST['QR~QID8~TEXT'];
		$suggestion  = $_POST['QR~QID9~TEXT'];
		

		if($name!=''){

			$newdata =  array (
		      'question' => 'What is your name?',
		      'answer' => $name
		    );

			array_push($question_and_ans, $newdata);

		}


		if($we_know_6677!=''){

			$newdata =  array (
		      'question' => 'We know that "6667" is normally used for IRC communication. Do you think the analyst has noticed the IRC communication event in the raw data during his analysis? If so, how do you think did the analyst detect the IRC communication? (Please also list the filtering operations that enable the analyst to obtain this finding.)',
		      'answer' => $we_know_6677
		    );

			array_push($question_and_ans, $newdata);

		}


		if($we_know_21!=''){

			$newdata =  array (
		      'question' => 'We know that "21" is normally used for FTP connection. Do you think the analyst has noticed the FTP connection events in the raw data during his analysis? If so, how do you think did the analyst to detect the FTP connections? (Please list the filtering operations that enable the analyst to obtain this finding.)',
		      'answer' => $we_know_21
		    );

			array_push($question_and_ans, $newdata);

		}


		if($we_know_22!=''){

			$newdata =  array (
		      'question' => 'We know that "22" is normally used for SSH connection. Do you think the analyst has noticed the SSH connection events in the raw data during his analysis? If so, how do you think did the analyst to detect the SSH connections? (Please list the filtering operations that enable the analyst to obtain this key finding.)',
		      'answer' => $we_know_22
		    );

			array_push($question_and_ans, $newdata);

		}



		if($based_on!=''){

			$newdata =  array (
		      'question' => 'Based on your understanding of the visual map, what are the abnormal events detected by the analyst?',
		      'answer' => $based_on
		    );

			array_push($question_and_ans, $newdata);

		}




		if($suggestion!=''){

			$newdata =  array (
		      'question' => 'Do you have any suggestions on improving the visual map?',
		      'answer' => $suggestion
		    );

			array_push($question_and_ans, $newdata);

		}






		



		if(isset($_POST['QR~QID7~1'])){

			$val = $_POST['QR~QID7~1'];

			if($val==1){
				$answer1 = 'Strongly agree';
			}

			if($val==2){
				$answer1 = 'Agree';
			}

			if($val==3){
				$answer1 = 'Somewhat agree';
			}

			if($val==4){
				$answer1 = 'Neither agree nor disagree';
			}

			if($val==5){
				$answer1 = 'Somewhat disagree';
			}

			if($val==6){
				$answer1 = 'Disagree';
			}

			if($val==7){
				$answer1 = 'Strongly disagree';
			}

			$newdata =  array (
		      'question' => 'Reading through the visual map enables me to figure out the main findings of the analyst.',
		      'answer' => $answer1
		    );

			array_push($question_and_ans, $newdata);

		
			
		}

		if(isset($_POST['QR~QID7~2'])){

			$val = $_POST['QR~QID7~2'];

			if($val==1){
				$answer2 = 'Strongly agree';
			}

			if($val==2){
				$answer2 = 'Agree';
			}

			if($val==3){
				$answer2 = 'Somewhat agree';
			}

			if($val==4){
				$answer2 = 'Neither agree nor disagree';
			}

			if($val==5){
				$answer2 = 'Somewhat disagree';
			}

			if($val==6){
				$answer2 = 'Disagree';
			}

			if($val==7){
				$answer2 = 'Strongly disagree';
			}

			$newdata =  array (
		      'question' => 'This visual map visualizes the main actions (operations) conducted by the analysts. It helps me understand how the analyst obtained the findings and reached to his conclusion. ',
		      'answer' => $answer2
		    );

			array_push($question_and_ans, $newdata);
			
		}

		if(isset($_POST['QR~QID7~3'])){

			$val = $_POST['QR~QID7~3'];

			if($val==1){
				$answer3 = 'Strongly agree';
			}

			if($val==2){
				$answer3 = 'Agree';
			}

			if($val==3){
				$answer3 = 'Somewhat agree';
			}

			if($val==4){
				$answer3 = 'Neither agree nor disagree';
			}

			if($val==5){
				$answer3 = 'Somewhat disagree';
			}

			if($val==6){
				$answer3 = 'Disagree';
			}

			if($val==7){
				$answer3 = 'Strongly disagree';
			}

			$newdata =  array (
		      'question' => 'Compare with taking directly to the analyst, the visual map saves time in communication.',
		      'answer' => $answer3
		    );

			array_push($question_and_ans, $newdata);
			
		}

		if(isset($_POST['QR~QID7~4'])){

			$val = $_POST['QR~QID7~4'];

			if($val==1){
				$answer4 = 'Strongly agree';
			}

			if($val==2){
				$answer4 = 'Agree';
			}

			if($val==3){
				$answer4 = 'Somewhat agree';
			}

			if($val==4){
				$answer4 = 'Neither agree nor disagree';
			}

			if($val==5){
				$answer4 = 'Somewhat disagree';
			}

			if($val==6){
				$answer4 = 'Disagree';
			}

			if($val==7){
				$answer4 = 'Strongly disagree';
			}

				$newdata =  array (
		      'question' => 'The visual map is a good way for sharing findings and thoughts among a group of analysts.',
		      'answer' => $answer4
		    );

			array_push($question_and_ans, $newdata);
			
		}

		if(isset($_POST['QR~QID7~5'])){

			$val = $_POST['QR~QID7~5'];

			if($val==1){
				$answer5 = 'Strongly agree';
			}

			if($val==2){
				$answer5 = 'Agree';
			}

			if($val==3){
				$answer5 = 'Somewhat agree';
			}

			if($val==4){
				$answer5 = 'Neither agree nor disagree';
			}

			if($val==5){
				$answer5 = 'Somewhat disagree';
			}

			if($val==6){
				$answer5 = 'Disagree';
			}

			if($val==7){
				$answer5 = 'Strongly disagree';
			}


				$newdata =  array (
		      'question' => 'One person can leave a question mark in some red nodes to notify that node needs to be further investigated. ',
		      'answer' => $answer5
		    );

			array_push($question_and_ans, $newdata);
			
		}

		if(isset($_POST['QR~QID7~6'])){

			$val = $_POST['QR~QID7~6'];

			if($val==1){
				$answer6 = 'Strongly agree';
			}

			if($val==2){
				$answer6 = 'Agree';
			}

			if($val==3){
				$answer6 = 'Somewhat agree';
			}

			if($val==4){
				$answer6 = 'Neither agree nor disagree';
			}

			if($val==5){
				$answer6 = 'Somewhat disagree';
			}

			if($val==6){
				$answer6 = 'Disagree';
			}

			if($val==7){
				$answer6 = 'Strongly disagree';
			}

				$newdata =  array (
		      'question' => 'If I were an analyst working in a group, I think this visual map can be used to divide the tasks in a fine-grained way..',
		      'answer' => $answer5
		    );

			array_push($question_and_ans, $newdata);
			
		}

		$question_and_ans = base64_encode(serialize($question_and_ans));

		$userId = Session::get('userId');

		$query = "INSERT INTO  result(Result,Username_ID) VALUES ('$question_and_ans','$userId')";
                $userinsert = $db->insert($query);
                 if($userinsert){
                 	echo '<center><h2>We thank you for your time spent taking this survey. 
Your response has been recorded.</h2></center>';
session_destroy();
exit;
                 }

		
		
exit;
	}


 ?> 

<!DOCTYPE html>
<html class="JFEScope" lang="EN">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Online Survey</title>
      <link rel="dns-prefetch" href="//au1.qualtrics.com/WRQualtricsShared/">
      <link rel="preconnect" href="//au1.qualtrics.com/WRQualtricsShared/">
      <link rel="dns-prefetch" href="//jfe-cdn.qualtrics.com/jfe/static/dist/">
      <link rel="preconnect" href="//jfe-cdn.qualtrics.com/jfe/static/dist/">
      <meta name="description" content="">
      <meta name="robots" content="noindex">
      <meta id="meta-viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.5">
      <meta property="og:title" content="Online Survey">
      <meta property="og:description" content="">
      <link rel="apple-touch-icon-precomposed" href="//au1.qualtrics.com/WRQualtricsShared/Graphics/qipadicon.png">
      <script>(function(w) {
         'use strict';
         if (w.history && w.history.replaceState) {
           var path = w.location.pathname;
           var jfePathRegex = /^\/jfe\d+\//;
         
           if (jfePathRegex.test(path)) {
             w.history.replaceState(null, null, w.location.href.replace(path, path.replace(jfePathRegex, '/jfe/')));
           }
         }
         })(window);
      </script>
      <link type="image/x-icon" rel="icon" href="https://iu.co1.qualtrics.com/WRQualtricsShared/Brands/iu/favicon.ico">
      <script type="text/javascript" charset="utf-8" async="" src="//jfe-cdn.qualtrics.com/jfe/static/dist/c/te.ddc65b9702fb727bfe21.js"></script><script type="text/javascript" charset="utf-8" async="" src="//jfe-cdn.qualtrics.com/jfe/static/dist/c/db.4ebe5a68c8f4cbe404f7.js"></script><script type="text/javascript" charset="utf-8" async="" src="//jfe-cdn.qualtrics.com/jfe/static/dist/c/matrix.f8e2c2ad0ce781ccd7b2.js"></script><script type="text/javascript" charset="utf-8" async="" src="//jfe-cdn.qualtrics.com/jfe/static/dist/c/jsApi.6d6cb6ebf7b6f2fc3eeb.js"></script><script type="text/javascript" charset="utf-8" async="" src="//jfe-cdn.qualtrics.com/jfe/static/dist/c/simp.f6a26deae2885879ec6b.js"></script><script data-runid="22386078128465825">Qualtrics.SurveyEngine.addOnload(Qualtrics.uniformLabelHeight);</script><script data-runid="22386078128465825">
         //TM6 Question Text Cell Padding
         	//JFE
         	Page.on('ready:imagesLoaded',function() {
         		var t = jQuery(".QuestionText table");
         	  for (i=0; i<t.length; i++) {
         	    if (t[i].cellPadding != undefined) {
         	      var p = t[i].cellPadding + "px";
         	      t.eq(i).find("th").css("padding",p);
         	      t.eq(i).find("td").css("padding",p);
         	    }
         	  }
         	});
         	//SE
         	jQuery(window).on('load', function() {
         		if (jQuery("div").hasClass("JFE") == false) {
         	    var t = jQuery(".QuestionText table");
         	    for (i=0; i<t.length; i++) {
         	      if (t[i].cellPadding != undefined) {
         	        var p = t[i].cellPadding + "px";
         	        t.eq(i).find("th").css("padding",p);
         	        t.eq(i).find("td").css("padding",p);
         	      }
         	    }
         		};
         	});
         //TM21 iOS Text Box Width Fix
         	//JFE
         	Page.on('ready:imagesLoaded',function() {
         		function isIE () {
         	  	var myNav = navigator.userAgent.toLowerCase();
         	  	return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
         		}
         		if (!isIE()) {
         			var mq = window.matchMedia( "(max-width: 480px)" );
         			if (mq.matches == true) {
         				jQuery(".Skin .MC .TextEntryBox").css("width","100%");
         				jQuery(".Skin .TE .ESTB .InputText").css("width","100%");
         				jQuery(".Skin .TE .FORM .InputText").css("width","100%");
         				jQuery(".Skin .TE .ML .InputText").css("width","100%");
         				jQuery(".Skin .TE .PW .InputText").css("width","100%");
         				jQuery(".Skin .TE .SL .InputText").css("width","100%");
         			};
         		};
         	});
         	//SE
         	jQuery(window).on('load', function() {
         		function isIE () {
         	  	var myNav = navigator.userAgent.toLowerCase();
         	  	return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
         		}
         		if (!isIE()) {
         			var mq = window.matchMedia( "(max-width: 480px)" );
         			if (jQuery("div").hasClass("JFE") == false && mq.matches == true) {
         				jQuery(".Skin .MC .TextEntryBox").css("width","100%");
         				jQuery(".Skin .TE .ESTB .InputText").css("width","100%");
         				jQuery(".Skin .TE .FORM .InputText").css("width","100%");
         				jQuery(".Skin .TE .ML .InputText").css("width","100%");
         				jQuery(".Skin .TE .PW .InputText").css("width","100%");
         				jQuery(".Skin .TE .SL .InputText").css("width","100%");
         			};
         		};
         	});
      </script>
   </head>
   <body id="SurveyEngineBody" style="direction: inherit;">



      <noscript>
         <style>#pace{display: none;}</style>
         <div style="padding:8px 15px;font-family:Helvetica,Arial,sans-serif;background:#fcc;border:1px solid #c55">Javascript is required to load this page.</div>
      </noscript>
      <style type="text/css">.pace{-webkit-pointer-events:none;pointer-events:none;-webkit-user-select:none;-moz-user-select:none;user-select:none}.pace-inactive{display:none}.pace .pace-progress{background:#007ac0;position:fixed;z-index:2000;top:0;left:0;height:2px;-webkit-transition:width 1s;-moz-transition:width 1s;-o-transition:width 1s;transition:width 1s}.pace .pace-progress-inner{display:block;position:absolute;right:0;width:100px;height:100%;box-shadow:0 0 10px #007ac0,0 0 5px #007ac0;opacity:1;-webkit-transform:rotate(3deg) translate(0,-4px);-moz-transform:rotate(3deg) translate(0,-4px);-ms-transform:rotate(3deg) translate(0,-4px);-o-transform:rotate(3deg) translate(0,-4px);transform:rotate(3deg) translate(0,-4px)}.pace .pace-activity{display:block;position:fixed;z-index:2000;top:30%;right:50%;width:50px;height:50px;border:8px solid transparent;border-top-color:#007ac0;border-left-color:#007ac0;border-radius:80px;-webkit-animation:pace-spinner 1s linear infinite;-moz-animation:pace-spinner 1s linear infinite;-ms-animation:pace-spinner 1s linear infinite;-o-animation:pace-spinner 1s linear infinite;animation:pace-spinner 1s linear infinite;margin:-33px -33px 0 0;box-sizing:border-box}@-webkit-keyframes pace-spinner{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-moz-keyframes pace-spinner{0%{-moz-transform:rotate(0);transform:rotate(0)}100%{-moz-transform:rotate(360deg);transform:rotate(360deg)}}@-o-keyframes pace-spinner{0%{-o-transform:rotate(0);transform:rotate(0)}100%{-o-transform:rotate(360deg);transform:rotate(360deg)}}@-ms-keyframes pace-spinner{0%{-ms-transform:rotate(0);transform:rotate(0)}100%{-ms-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes pace-spinner{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}</style>
      <script type="text/javascript">
         var QSettings = {
           
           jfeVersion: "086ada3cd75405b2617148199ee9036d116f6a25\n",
           publicPath: "//jfe-cdn.qualtrics.com/jfe/static/dist/",
           cbs: [], bootstrapSkin: null, ab: false,
           getPT: function(cb) {
             if (this.pt !== undefined) {
               cb(this.success, this.pt);
             } else {
               this.cbs.push(cb);
             }
           },
           setPT: function(s, pt) {
             this.success = s;
             this.pt = pt;
             if (this.cbs.length) {
               for (var i = 0; i < this.cbs.length; i++) {
                 this.cbs[i](s, pt);
               }
             }
           }
         };
      </script>
      <script>!function(e){function a(c){if(r[c])return r[c].exports;var t=r[c]={i:c,l:!1,exports:{}};return e[c].call(t.exports,t,t.exports,a),t.l=!0,t.exports}var c=window.webpackJsonp;window.webpackJsonp=function(r,n,o){for(var f,b,d,i=0,s=[];i<r.length;i++)b=r[i],t[b]&&s.push(t[b][0]),t[b]=0;for(f in n)Object.prototype.hasOwnProperty.call(n,f)&&(e[f]=n[f]);for(c&&c(r,n,o);s.length;)s.shift()();if(o)for(i=0;i<o.length;i++)d=a(a.s=o[i]);return d};var r={},t={40:0};a.e=function(e){function c(){f.onerror=f.onload=null,clearTimeout(b);var a=t[e];0!==a&&(a&&a[1](new Error("Loading chunk "+e+" failed.")),t[e]=void 0)}var r=t[e];if(0===r)return new Promise(function(e){e()});if(r)return r[2];var n=new Promise(function(a,c){r=t[e]=[a,c]});r[2]=n;var o=document.getElementsByTagName("head")[0],f=document.createElement("script");f.type="text/javascript",f.charset="utf-8",f.async=!0,f.timeout=12e4,a.nc&&f.setAttribute("nonce",a.nc),f.src=a.p+"c/"+({0:"slidercontrol-jfe",1:"timing",2:"matrix",3:"te",4:"mc",5:"scoring",6:"hotspot",7:"hl",8:"fileupload",9:"cs",10:"slider",11:"ro",12:"fancybox",13:"toc",14:"ss",15:"db",16:"draw",17:"hmap",18:"meta",19:"response-summary",20:"preview",21:"mockForm",22:"sbs",23:"pgr",24:"dd",25:"captcha",26:"jsApi",27:"simp",28:"slide",29:"flip",30:"fade",31:"barrel-roll",32:"adobe",33:"relevantid",34:"recaptchav3",35:"focus-handler",39:"advance-button-template"}[e]||e)+"."+{0:"9eb566bf3034e1344b1c",1:"9783727f84a786b7e766",2:"f8e2c2ad0ce781ccd7b2",3:"ddc65b9702fb727bfe21",4:"1cb4b8bcc533a546c9e8",5:"35314d6bdd3a2b628710",6:"dd212d687b72cf0a1ee7",7:"0fd8c3e7e6d21d5e7d72",8:"ed25dd5bf069e89b3cd1",9:"54d190abe4371a7fdb0d",10:"4cec14505b2d7253c2d9",11:"8800be9b19020de48812",12:"142566ce196dea880fd3",13:"404fb522b951dbd67d2d",14:"90154fa8eb62b1eb33e3",15:"4ebe5a68c8f4cbe404f7",16:"97fc3c414137d3073807",17:"f7545ecfbd745d2c61bb",18:"44e4db538ab8ffe4e4aa",19:"7397469e35e3b36f7a6f",20:"3e38c544b1987da0628e",21:"3883ada180f9f2643643",22:"b8fd0ae1a890c266fa2a",23:"1f739c3bd940c3cc25dc",24:"ea5b5e2ced602b3c8c20",25:"99364943206f2343bb30",26:"6d6cb6ebf7b6f2fc3eeb",27:"f6a26deae2885879ec6b",28:"f69401314c1314144faa",29:"eeef7bc7e0a806d22048",30:"fca611299e1b79db773d",31:"dad499d6003d07abf49f",32:"1c46a75f4f53442ca191",33:"7b8047a0e75a08e0f819",34:"179661e252757843c768",35:"725c776298f8cada1fe1",39:"eb4511c680400ef637f4"}[e]+".js";var b=setTimeout(c,12e4);return f.onerror=f.onload=c,o.appendChild(f),n},a.m=e,a.c=r,a.d=function(e,c,r){a.o(e,c)||Object.defineProperty(e,c,{configurable:!1,enumerable:!0,get:r})},a.n=function(e){var c=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(c,"a",c),c},a.o=function(e,a){return Object.prototype.hasOwnProperty.call(e,a)},a.p="",a.oe=function(e){throw console.error(e),e}}([]);</script>
      <script src="//jfe-cdn.qualtrics.com/jfe/static/dist/vendor.b0affbef80a056e52c84.js" crossorigin="anonymous"></script>
      <script src="//jfe-cdn.qualtrics.com/jfe/static/dist/jfe.6b39a35517d7128ca514.js" crossorigin="anonymous"></script>
      <link href="assets/css/stylesheet.css" rel="stylesheet">
      <link id="rtlStyles" rel="stylesheet" type="text/css">
      <style id="customStyles"></style>
      <style>
         .JFEScope .questionFocused   .advanceButtonContainer {transition:opacity .3s!important;visibility:unset;opacity:1}
         .JFEScope .questionUnfocused .advanceButtonContainer, .advanceButtonContainer {transition:opacity .3s!important;visibility:hidden;opacity:0}
      </style>
      <style type="text/css">
      .accessibility-hidden{height:0;width:0;overflow:hidden;position:absolute;left:-999px}
      .Skin input[type=checkbox], .Skin input[type=radio] {
   
}

      </style>
      <div id="polite-announcement" class="accessibility-hidden" aria-live="polite" aria-atomic="true"></div>
      <div id="assertive-announcement" class="accessibility-hidden" aria-live="assertive" role="alert" aria-atomic="true"></div>
      <script type="text/javascript">
         (function () {
           var o = {};
           try {
               Object.defineProperty(o,'compat',{value:true,writable:true,enumerable:true,configurable:true});
           } catch (e) {};
           if (o.compat !== true || document.addEventListener === undefined) {
             window.location.pathname = '/jfe/incompatibleBrowser';
           }
         })();
         QSettings.ab = false;
         document.title = "Online Survey";
         
         (function(s) {
           QSettings.bootstrapSkin = s;
           var sp = document.getElementById('skinPrefetch');
           if (sp) {
             sp.innerHTML = s;
           }
         })("<meta name=\"HandheldFriendly\" content=\"true\" />\n<meta name = \"viewport\" content = \"user-scalable = no, maximum-scale=1, minimum-scale=1, initial-scale = 1, width = device-width\" />\n<div class='Skin'>\n\t<div id=\"Overlay\"></div>\n\t<div id=\"Wrapper\">\n\t\t<div id='ProgressBar'>{~ProgressBar~}</div>\n\t\t<div class='SkinInner'>\n\t\t\t<div id='LogoContainer'>\n\t\t\t\t<div id='Logo'></div>\n\t\t\t</div>\n\t\t\t<div id='HeaderContainer'>\n\t\t\t\t\t<div id='Header'>{~Header~}</div>\n\t\t\t\t</div>\n\t\t\t<div id='SkinContent'>\n\t\t\t\t<div id='Questions'>{~Question~}</div>\n\t\t\t\t<div id='Buttons'>{~Buttons~}</div>\n\t\t\t</div>\n\t\t</div>\n\t\t<div id='Footer'>{~Footer~}</div>\n\t\t<div id='PushStickyFooter'></div>\n\t</div>\n\t<div id=\"Plug\" style=\"display:block !important;\"><a style=\"display:block !important;\" href=\"http://www.qualtrics.com/\" target=\"_blank\">{~Plug~}</a></div>\n</div>\n<script>Qualtrics.SurveyEngine.addOnload(Qualtrics.uniformLabelHeight);<\/script>\n\n<script>\n//TM6 Question Text Cell Padding\n\t//JFE\n\tPage.on('ready:imagesLoaded',function() {\n\t\tvar t = jQuery(\".QuestionText table\");\n\t  for (i=0; i<t.length; i++) {\n\t    if (t[i].cellPadding != undefined) {\n\t      var p = t[i].cellPadding + \"px\";\n\t      t.eq(i).find(\"th\").css(\"padding\",p);\n\t      t.eq(i).find(\"td\").css(\"padding\",p);\n\t    }\n\t  }\n\t});\n\t//SE\n\tjQuery(window).on('load', function() {\n\t\tif (jQuery(\"div\").hasClass(\"JFE\") == false) {\n\t    var t = jQuery(\".QuestionText table\");\n\t    for (i=0; i<t.length; i++) {\n\t      if (t[i].cellPadding != undefined) {\n\t        var p = t[i].cellPadding + \"px\";\n\t        t.eq(i).find(\"th\").css(\"padding\",p);\n\t        t.eq(i).find(\"td\").css(\"padding\",p);\n\t      }\n\t    }\n\t\t};\n\t});\n//TM21 iOS Text Box Width Fix\n\t//JFE\n\tPage.on('ready:imagesLoaded',function() {\n\t\tfunction isIE () {\n\t  \tvar myNav = navigator.userAgent.toLowerCase();\n\t  \treturn (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;\n\t\t}\n\t\tif (!isIE()) {\n\t\t\tvar mq = window.matchMedia( \"(max-width: 480px)\" );\n\t\t\tif (mq.matches == true) {\n\t\t\t\tjQuery(\".Skin .MC .TextEntryBox\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .ESTB .InputText\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .FORM .InputText\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .ML .InputText\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .PW .InputText\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .SL .InputText\").css(\"width\",\"100%\");\n\t\t\t};\n\t\t};\n\t});\n\t//SE\n\tjQuery(window).on('load', function() {\n\t\tfunction isIE () {\n\t  \tvar myNav = navigator.userAgent.toLowerCase();\n\t  \treturn (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;\n\t\t}\n\t\tif (!isIE()) {\n\t\t\tvar mq = window.matchMedia( \"(max-width: 480px)\" );\n\t\t\tif (jQuery(\"div\").hasClass(\"JFE\") == false && mq.matches == true) {\n\t\t\t\tjQuery(\".Skin .MC .TextEntryBox\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .ESTB .InputText\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .FORM .InputText\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .ML .InputText\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .PW .InputText\").css(\"width\",\"100%\");\n\t\t\t\tjQuery(\".Skin .TE .SL .InputText\").css(\"width\",\"100%\");\n\t\t\t};\n\t\t};\n\t});\n<\/script>\n");
         
         
           (function() {
             var fv = document.createElement('link');
             fv.type = 'image/x-icon';
             fv.rel = 'icon';
             fv.href = "https://iu.co1.qualtrics.com/WRQualtricsShared/Brands/iu/favicon.ico";
             document.getElementsByTagName('head')[0].appendChild(fv);
           }());
         
         
      </script>
      <div class="JFE" id="P_1549180718669">
         <div class="JFEContent SkinV2 webkit CSS3">
            <form action="" method="POST">
               <meta name="HandheldFriendly" content="true">
               <meta name="viewport" content="user-scalable = no, maximum-scale=1, minimum-scale=1, initial-scale = 1, width = device-width">
               <div class="Skin">
                  <div id="Overlay"></div>
                  <div id="Wrapper">
                     <div id="ProgressBar"></div>
                     <div class="SkinInner">
                        <div id="LogoContainer">
                           <div id="Logo"></div>
                        </div>
                        <div id="HeaderContainer">
                           <div id="Header" role="banner"></div>
                        </div>
                        <div id="SkinContent">
                           <div id="Questions" role="main">
                              <!-- rivets: if runtime.SeparatorDisplayed -->
                              <div id="QID2Separator" class="Separator"></div>
                              <div class="QuestionOuter BorderColor TE  QID2" id="QID2" questionid="QID2" posttag="QID2" data-runtime-remove-class-hidden="runtime.Displayed">
                                 <div id="QR~QID2~VALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.ErrorMsg" data-runtime-html="runtime.ErrorMsg" style="display: none;"></div>
                                 <div id="QR~QID2~SDPVALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.PDPErrorMsg" data-runtime-html="runtime.PDPErrorMsg" style="display: none;"></div>
                                 <div class="Inner BorderColor SL">
                                    <div class="InnerInner BorderColor">
                                       <fieldset>
                                          <legend><label for="QR~QID2" class="QuestionText BorderColor">What is your name? (This information won't be released to public)</label></legend>
                                          <div class="QuestionBody">
                                             <div class="ChoiceStructure">  <input type="TEXT" autocomplete="off" id="QR~QID2" value="" class="InputText QR-QID2 QWatchTimer" name="QR~QID2~TEXT" data-runtime-textvalue="runtime.Value" aria-describedby="QR~QID2~VALIDATION"> </div>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>
                              <!-- rivets: if runtime.SeparatorDisplayed -->
                              <div id="QID1Separator" class="Separator"></div>
                              <div class="QuestionOuter BorderColor DB  QID1" id="QID1" questionid="QID1" posttag="QID1" data-runtime-remove-class-hidden="runtime.Displayed">
                                 <div id="QR~QID1~VALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.ErrorMsg" data-runtime-html="runtime.ErrorMsg" style="display: none;"></div>
                                 <div id="QR~QID1~SDPVALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.PDPErrorMsg" data-runtime-html="runtime.PDPErrorMsg" style="display: none;"></div>
                                 <div class="Inner BorderColor TB">
                                    <div class="InnerInner BorderColor">
                                       <fieldset>
                                          <legend>
                                             <div class="QuestionText BorderColor">Please analyze the visual map of T8, and answer the following questions.&nbsp;</div>
                                          </legend>
                                          <div class="QuestionBody"></div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>
                              <!-- rivets: if runtime.SeparatorDisplayed -->
                              <div id="QID4Separator" class="Separator"></div>
                              <div class="QuestionOuter BorderColor TE  QID4" id="QID4" questionid="QID4" posttag="QID4" data-runtime-remove-class-hidden="runtime.Displayed">
                                 <div id="QR~QID4~VALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.ErrorMsg" data-runtime-html="runtime.ErrorMsg" style="display: none;"></div>
                                 <div id="QR~QID4~SDPVALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.PDPErrorMsg" data-runtime-html="runtime.PDPErrorMsg" style="display: none;"></div>
                                 <div class="Inner BorderColor ML">
                                    <div class="InnerInner BorderColor">
                                       <fieldset>
                                          <legend><label for="QR~QID4" class="QuestionText BorderColor">We know that "6667" is normally used for IRC communication. Do you think the analyst has noticed the IRC communication event in the raw data during his analysis? If so, how do you think did the analyst detect the IRC communication? (Please also list the filtering operations that enable the analyst to obtain this finding.)</label></legend>
                                          <div class="QuestionBody">
                                             <div class="ChoiceStructure">  <textarea class="InputText QR-QID4 QWatchTimer" id="QR~QID4" name="QR~QID4~TEXT" style="width: 610px;  height: 339px;" data-runtime-textvalue="runtime.Value" required></textarea>  </div>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>
                              <!-- rivets: if runtime.SeparatorDisplayed -->
                              <div id="QID5Separator" class="Separator"></div>
                              <div class="QuestionOuter BorderColor TE  QID5" id="QID5" questionid="QID5" posttag="QID5" data-runtime-remove-class-hidden="runtime.Displayed">
                                 <div id="QR~QID5~VALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.ErrorMsg" data-runtime-html="runtime.ErrorMsg" style="display: none;"></div>
                                 <div id="QR~QID5~SDPVALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.PDPErrorMsg" data-runtime-html="runtime.PDPErrorMsg" style="display: none;"></div>
                                 <div class="Inner BorderColor ML">
                                    <div class="InnerInner BorderColor">
                                       <fieldset>
                                          <legend><label for="QR~QID5" class="QuestionText BorderColor">We know that "21" is normally used for FTP connection. Do you think the analyst has noticed the FTP connection events in the raw data during his analysis? If so, how do you think did the analyst to detect the FTP connections? (Please list the filtering operations that enable the analyst to obtain this finding.)</label></legend>
                                          <div class="QuestionBody">
                                             <div class="ChoiceStructure">  <textarea class="InputText QR-QID5 QWatchTimer" id="QR~QID5" name="QR~QID5~TEXT" style="width: 635px;  height: 335px;" data-runtime-textvalue="runtime.Value"></textarea>  </div>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>
                              <!-- rivets: if runtime.SeparatorDisplayed -->
                              <div id="QID6Separator" class="Separator"></div>
                              <div class="QuestionOuter BorderColor TE  QID6" id="QID6" questionid="QID6" posttag="QID6" data-runtime-remove-class-hidden="runtime.Displayed">
                                 <div id="QR~QID6~VALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.ErrorMsg" data-runtime-html="runtime.ErrorMsg" style="display: none;"></div>
                                 <div id="QR~QID6~SDPVALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.PDPErrorMsg" data-runtime-html="runtime.PDPErrorMsg" style="display: none;"></div>
                                 <div class="Inner BorderColor ML">
                                    <div class="InnerInner BorderColor">
                                       <fieldset>
                                          <legend><label for="QR~QID6" class="QuestionText BorderColor">We know that "22" is normally used for SSH connection. Do you think the analyst has noticed the SSH connection events in the raw data during his analysis? If so, how do you think did the analyst to detect the SSH connections? (Please list the filtering operations that enable the analyst to obtain this key finding.)</label></legend>
                                          <div class="QuestionBody">
                                             <div class="ChoiceStructure">  <textarea class="InputText QR-QID6 QWatchTimer" id="QR~QID6" name="QR~QID6~TEXT" style="width: 591px;  height: 240px;" data-runtime-textvalue="runtime.Value"></textarea>  </div>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>
                              <!-- rivets: if runtime.SeparatorDisplayed -->
                              <div id="QID8Separator" class="Separator"></div>
                              <div class="QuestionOuter BorderColor TE  QID8" id="QID8" questionid="QID8" posttag="QID8" data-runtime-remove-class-hidden="runtime.Displayed">
                                 <div id="QR~QID8~VALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.ErrorMsg" data-runtime-html="runtime.ErrorMsg" style="display: none;"></div>
                                 <div id="QR~QID8~SDPVALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.PDPErrorMsg" data-runtime-html="runtime.PDPErrorMsg" style="display: none;"></div>
                                 <div class="Inner BorderColor ML">
                                    <div class="InnerInner BorderColor">
                                       <fieldset>
                                          <legend><label for="QR~QID8" class="QuestionText BorderColor">Based on your understanding of the visual map, what are the abnormal events detected by the analyst?</label></legend>
                                          <div class="QuestionBody">
                                             <div class="ChoiceStructure">  <textarea class="InputText QR-QID8 QWatchTimer" id="QR~QID8" name="QR~QID8~TEXT" style="width: 582px;  height: 259px;" data-runtime-textvalue="runtime.Value"></textarea>  </div>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>
                              <!-- rivets: if runtime.SeparatorDisplayed -->
                              <div id="QID7Separator" class="Separator"></div>
                              <div class="QuestionOuter BorderColor Matrix mf QID7" id="QID7" questionid="QID7" posttag="QID7" data-runtime-remove-class-hidden="runtime.Displayed">
                                 <div id="QR~QID7~VALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.ErrorMsg" data-runtime-html="runtime.ErrorMsg" style="display: none;"></div>
                                 <div id="QR~QID7~SDPVALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.PDPErrorMsg" data-runtime-html="runtime.PDPErrorMsg" style="display: none;"></div>
                                 <div class="Inner BorderColor Likert">
                                    <div class="InnerInner BorderColor SingleAnswer">
                                       <fieldset>
                                          <legend> <label class="QuestionText BorderColor">On a scale from 0-10, how strong do you agree or disagree with the following statements?&nbsp;</label></legend>
                                          <div class="QuestionBody  q-matrix desktop">
                                             <table cellpadding="0" cellspacing="0" class="ChoiceStructure">
                                                <caption class="QuestionText BorderColor">On a scale from 0-10, how strong do you agree or disagree with the following statements?&nbsp;</caption>
                                                <thead>
                                                   <tr class="Answers" aria-hidden="true">
                                                      <td class="c1 BorderColor" width="25%">  &nbsp;  </td>
                                                      <th scope="col" width="10.714285714285714%" class="Selection BorderColor c4" id="header~QID7~1~4" tabindex="-1" role="columnheader">  <span class="LabelWrapper">  <span>Strongly agree</span>  </span> </th>
                                                      <th scope="col" width="10.714285714285714%" class="Selection BorderColor c5" id="header~QID7~2~5" tabindex="-1" role="columnheader">  <span class="LabelWrapper">  <span>Agree</span>  </span> </th>
                                                      <th scope="col" width="10.714285714285714%" class="Selection BorderColor c6" id="header~QID7~3~6" tabindex="-1" role="columnheader">  <span class="LabelWrapper">  <span>Somewhat agree</span>  </span> </th>
                                                      <th scope="col" width="10.714285714285714%" class="Selection BorderColor c7" id="header~QID7~4~7" tabindex="-1" role="columnheader">  <span class="LabelWrapper">  <span>Neither agree nor disagree</span>  </span> </th>
                                                      <th scope="col" width="10.714285714285714%" class="Selection BorderColor c8" id="header~QID7~5~8" tabindex="-1" role="columnheader">  <span class="LabelWrapper">  <span>Somewhat disagree</span>  </span> </th>
                                                      <th scope="col" width="10.714285714285714%" class="Selection BorderColor c9" id="header~QID7~6~9" tabindex="-1" role="columnheader">  <span class="LabelWrapper">  <span>Disagree</span>  </span> </th>
                                                      <th scope="col" width="10.714285714285714%" class="Selection BorderColor c10 last" id="header~QID7~7~10" tabindex="-1" role="columnheader">  <span class="LabelWrapper">  <span>Strongly disagree</span>  </span> </th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr class="ChoiceRow  ">
                                                      <th scope="row" class="c1" id="header~QID7~1" tabindex="-1" role="rowheader">
                                                         <span class="LabelWrapper table">
                                                            <div class="table-cell">  <label>  <span>Reading through the visual map enables me to figure out the main findings of the analyst.</span> </label>   </div>
                                                            <div class="dropdown-arrow mobile"> <span class="dropdown-down">&nbsp;</span> </div>
                                                         </span>
                                                         <div class="answered-indicator mobile" aria-hidden="true"> <span data-runtime-html="runtime.Choices.1.SelectedDisplay"></span> </div>
                                                      </th>
                                                      <td class="c4   ">   <input type="radio" class="QR-QID7-1-1 QWatchTimer" aria-labelledby="header~QID7~1 QID7-1-1-col-label" id="QR~QID7~1~1" name="QR~QID7~1" data-runtime-checked="runtime.Choices.1.Selected" value="1"> <label for="QR~QID7~1~1" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.1.Answers.1.Selected" aria-labelledby="header~QID7~1 QID7-1-1-col-label"></label>  <label for="QR~QID7~1~1" class="single-answer mobile" id="QID7-1-1-col-label" aria-labelledby="header~QID7~1 QID7-1-1-col-label" tabindex="-1">  <span>Strongly agree</span> </label>  </td>
                                                      <td class="c5   ">   <input type="radio" class="QR-QID7-1-2 QWatchTimer" aria-labelledby="header~QID7~1 QID7-1-2-col-label" id="QR~QID7~1~2" name="QR~QID7~1" data-runtime-checked="runtime.Choices.1.Selected" value="2"> <label for="QR~QID7~1~2" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.1.Answers.2.Selected" aria-labelledby="header~QID7~1 QID7-1-2-col-label"></label>  <label for="QR~QID7~1~2" class="single-answer mobile" id="QID7-1-2-col-label" aria-labelledby="header~QID7~1 QID7-1-2-col-label" tabindex="-1">  <span>Agree</span> </label>  </td>
                                                      <td class="c6   ">   <input type="radio" class="QR-QID7-1-3 QWatchTimer" aria-labelledby="header~QID7~1 QID7-1-3-col-label" id="QR~QID7~1~3" name="QR~QID7~1" data-runtime-checked="runtime.Choices.1.Selected" value="3"> <label for="QR~QID7~1~3" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.1.Answers.3.Selected" aria-labelledby="header~QID7~1 QID7-1-3-col-label"></label>  <label for="QR~QID7~1~3" class="single-answer mobile" id="QID7-1-3-col-label" aria-labelledby="header~QID7~1 QID7-1-3-col-label" tabindex="-1">  <span>Somewhat agree</span> </label>  </td>
                                                      <td class="c7   ">   <input type="radio" class="QR-QID7-1-4 QWatchTimer" aria-labelledby="header~QID7~1 QID7-1-4-col-label" id="QR~QID7~1~4" name="QR~QID7~1" data-runtime-checked="runtime.Choices.1.Selected" value="4"> <label for="QR~QID7~1~4" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.1.Answers.4.Selected" aria-labelledby="header~QID7~1 QID7-1-4-col-label"></label>  <label for="QR~QID7~1~4" class="single-answer mobile" id="QID7-1-4-col-label" aria-labelledby="header~QID7~1 QID7-1-4-col-label" tabindex="-1">  <span>Neither agree nor disagree</span> </label>  </td>
                                                      <td class="c8   ">   <input type="radio" class="QR-QID7-1-5 QWatchTimer" aria-labelledby="header~QID7~1 QID7-1-5-col-label" id="QR~QID7~1~5" name="QR~QID7~1" data-runtime-checked="runtime.Choices.1.Selected" value="5"> <label for="QR~QID7~1~5" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.1.Answers.5.Selected" aria-labelledby="header~QID7~1 QID7-1-5-col-label"></label>  <label for="QR~QID7~1~5" class="single-answer mobile" id="QID7-1-5-col-label" aria-labelledby="header~QID7~1 QID7-1-5-col-label" tabindex="-1">  <span>Somewhat disagree</span> </label>  </td>
                                                      <td class="c9   ">   <input type="radio" class="QR-QID7-1-6 QWatchTimer" aria-labelledby="header~QID7~1 QID7-1-6-col-label" id="QR~QID7~1~6" name="QR~QID7~1" data-runtime-checked="runtime.Choices.1.Selected" value="6"> <label for="QR~QID7~1~6" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.1.Answers.6.Selected" aria-labelledby="header~QID7~1 QID7-1-6-col-label"></label>  <label for="QR~QID7~1~6" class="single-answer mobile" id="QID7-1-6-col-label" aria-labelledby="header~QID7~1 QID7-1-6-col-label" tabindex="-1">  <span>Disagree</span> </label>  </td>
                                                      <td class="c10 last  ">   <input type="radio" class="QR-QID7-1-7 QWatchTimer" aria-labelledby="header~QID7~1 QID7-1-7-col-label" id="QR~QID7~1~7" name="QR~QID7~1" data-runtime-checked="runtime.Choices.1.Selected" value="7"> <label for="QR~QID7~1~7" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.1.Answers.7.Selected" aria-labelledby="header~QID7~1 QID7-1-7-col-label"></label>  <label for="QR~QID7~1~7" class="single-answer mobile" id="QID7-1-7-col-label" aria-labelledby="header~QID7~1 QID7-1-7-col-label" tabindex="-1">  <span>Strongly disagree</span> </label>  </td>
                                                   </tr>
                                                   <tr class="ChoiceRow ReadableAlt ">
                                                      <th scope="row" class="c1" id="header~QID7~2" tabindex="-1" role="rowheader">
                                                         <span class="LabelWrapper table">
                                                            <div class="table-cell">  <label>  <span>This visual map visualizes the main actions (operations) conducted by the analysts. It helps me understand how the analyst obtained the findings and reached to his conclusion. </span> </label>   </div>
                                                            <div class="dropdown-arrow mobile"> <span class="dropdown-down">&nbsp;</span> </div>
                                                         </span>
                                                         <div class="answered-indicator mobile" aria-hidden="true"> <span data-runtime-html="runtime.Choices.2.SelectedDisplay"></span> </div>
                                                      </th>
                                                      <td class="c4   ">   <input type="radio" class="QR-QID7-2-1 QWatchTimer" aria-labelledby="header~QID7~2 QID7-2-1-col-label" id="QR~QID7~2~1" name="QR~QID7~2" data-runtime-checked="runtime.Choices.2.Selected" value="1"> <label for="QR~QID7~2~1" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.2.Answers.1.Selected" aria-labelledby="header~QID7~2 QID7-2-1-col-label"></label>  <label for="QR~QID7~2~1" class="single-answer mobile" id="QID7-2-1-col-label" aria-labelledby="header~QID7~2 QID7-2-1-col-label" tabindex="-1">  <span>Strongly agree</span> </label>  </td>
                                                      <td class="c5   ">   <input type="radio" class="QR-QID7-2-2 QWatchTimer" aria-labelledby="header~QID7~2 QID7-2-2-col-label" id="QR~QID7~2~2" name="QR~QID7~2" data-runtime-checked="runtime.Choices.2.Selected" value="2"> <label for="QR~QID7~2~2" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.2.Answers.2.Selected" aria-labelledby="header~QID7~2 QID7-2-2-col-label"></label>  <label for="QR~QID7~2~2" class="single-answer mobile" id="QID7-2-2-col-label" aria-labelledby="header~QID7~2 QID7-2-2-col-label" tabindex="-1">  <span>Agree</span> </label>  </td>
                                                      <td class="c6   ">   <input type="radio" class="QR-QID7-2-3 QWatchTimer" aria-labelledby="header~QID7~2 QID7-2-3-col-label" id="QR~QID7~2~3" name="QR~QID7~2" data-runtime-checked="runtime.Choices.2.Selected" value="3"> <label for="QR~QID7~2~3" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.2.Answers.3.Selected" aria-labelledby="header~QID7~2 QID7-2-3-col-label"></label>  <label for="QR~QID7~2~3" class="single-answer mobile" id="QID7-2-3-col-label" aria-labelledby="header~QID7~2 QID7-2-3-col-label" tabindex="-1">  <span>Somewhat agree</span> </label>  </td>
                                                      <td class="c7   ">   <input type="radio" class="QR-QID7-2-4 QWatchTimer" aria-labelledby="header~QID7~2 QID7-2-4-col-label" id="QR~QID7~2~4" name="QR~QID7~2" data-runtime-checked="runtime.Choices.2.Selected" value="4"> <label for="QR~QID7~2~4" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.2.Answers.4.Selected" aria-labelledby="header~QID7~2 QID7-2-4-col-label"></label>  <label for="QR~QID7~2~4" class="single-answer mobile" id="QID7-2-4-col-label" aria-labelledby="header~QID7~2 QID7-2-4-col-label" tabindex="-1">  <span>Neither agree nor disagree</span> </label>  </td>
                                                      <td class="c8   ">   <input type="radio" class="QR-QID7-2-5 QWatchTimer" aria-labelledby="header~QID7~2 QID7-2-5-col-label" id="QR~QID7~2~5" name="QR~QID7~2" data-runtime-checked="runtime.Choices.2.Selected" value="5"> <label for="QR~QID7~2~5" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.2.Answers.5.Selected" aria-labelledby="header~QID7~2 QID7-2-5-col-label"></label>  <label for="QR~QID7~2~5" class="single-answer mobile" id="QID7-2-5-col-label" aria-labelledby="header~QID7~2 QID7-2-5-col-label" tabindex="-1">  <span>Somewhat disagree</span> </label>  </td>
                                                      <td class="c9   ">   <input type="radio" class="QR-QID7-2-6 QWatchTimer" aria-labelledby="header~QID7~2 QID7-2-6-col-label" id="QR~QID7~2~6" name="QR~QID7~2" data-runtime-checked="runtime.Choices.2.Selected" value="6"> <label for="QR~QID7~2~6" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.2.Answers.6.Selected" aria-labelledby="header~QID7~2 QID7-2-6-col-label"></label>  <label for="QR~QID7~2~6" class="single-answer mobile" id="QID7-2-6-col-label" aria-labelledby="header~QID7~2 QID7-2-6-col-label" tabindex="-1">  <span>Disagree</span> </label>  </td>
                                                      <td class="c10 last  ">   <input type="radio" class="QR-QID7-2-7 QWatchTimer" aria-labelledby="header~QID7~2 QID7-2-7-col-label" id="QR~QID7~2~7" name="QR~QID7~2" data-runtime-checked="runtime.Choices.2.Selected" value="7"> <label for="QR~QID7~2~7" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.2.Answers.7.Selected" aria-labelledby="header~QID7~2 QID7-2-7-col-label"></label>  <label for="QR~QID7~2~7" class="single-answer mobile" id="QID7-2-7-col-label" aria-labelledby="header~QID7~2 QID7-2-7-col-label" tabindex="-1">  <span>Strongly disagree</span> </label>  </td>
                                                   </tr>
                                                   <tr class="ChoiceRow  ">
                                                      <th scope="row" class="c1" id="header~QID7~3" tabindex="-1" role="rowheader">
                                                         <span class="LabelWrapper table">
                                                            <div class="table-cell">  <label>  <span>Compare with taking directly to the analyst, the visual map saves time in communication.</span> </label>   </div>
                                                            <div class="dropdown-arrow mobile"> <span class="dropdown-down">&nbsp;</span> </div>
                                                         </span>
                                                         <div class="answered-indicator mobile" aria-hidden="true"> <span data-runtime-html="runtime.Choices.3.SelectedDisplay"></span> </div>
                                                      </th>
                                                      <td class="c4   ">   <input type="radio" class="QR-QID7-3-1 QWatchTimer" aria-labelledby="header~QID7~3 QID7-3-1-col-label" id="QR~QID7~3~1" name="QR~QID7~3" data-runtime-checked="runtime.Choices.3.Selected" value="1"> <label for="QR~QID7~3~1" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.3.Answers.1.Selected" aria-labelledby="header~QID7~3 QID7-3-1-col-label"></label>  <label for="QR~QID7~3~1" class="single-answer mobile" id="QID7-3-1-col-label" aria-labelledby="header~QID7~3 QID7-3-1-col-label" tabindex="-1">  <span>Strongly agree</span> </label>  </td>
                                                      <td class="c5   ">   <input type="radio" class="QR-QID7-3-2 QWatchTimer" aria-labelledby="header~QID7~3 QID7-3-2-col-label" id="QR~QID7~3~2" name="QR~QID7~3" data-runtime-checked="runtime.Choices.3.Selected" value="2"> <label for="QR~QID7~3~2" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.3.Answers.2.Selected" aria-labelledby="header~QID7~3 QID7-3-2-col-label"></label>  <label for="QR~QID7~3~2" class="single-answer mobile" id="QID7-3-2-col-label" aria-labelledby="header~QID7~3 QID7-3-2-col-label" tabindex="-1">  <span>Agree</span> </label>  </td>
                                                      <td class="c6   ">   <input type="radio" class="QR-QID7-3-3 QWatchTimer" aria-labelledby="header~QID7~3 QID7-3-3-col-label" id="QR~QID7~3~3" name="QR~QID7~3" data-runtime-checked="runtime.Choices.3.Selected" value="3"> <label for="QR~QID7~3~3" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.3.Answers.3.Selected" aria-labelledby="header~QID7~3 QID7-3-3-col-label"></label>  <label for="QR~QID7~3~3" class="single-answer mobile" id="QID7-3-3-col-label" aria-labelledby="header~QID7~3 QID7-3-3-col-label" tabindex="-1">  <span>Somewhat agree</span> </label>  </td>
                                                      <td class="c7   ">   <input type="radio" class="QR-QID7-3-4 QWatchTimer" aria-labelledby="header~QID7~3 QID7-3-4-col-label" id="QR~QID7~3~4" name="QR~QID7~3" data-runtime-checked="runtime.Choices.3.Selected" value="4"> <label for="QR~QID7~3~4" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.3.Answers.4.Selected" aria-labelledby="header~QID7~3 QID7-3-4-col-label"></label>  <label for="QR~QID7~3~4" class="single-answer mobile" id="QID7-3-4-col-label" aria-labelledby="header~QID7~3 QID7-3-4-col-label" tabindex="-1">  <span>Neither agree nor disagree</span> </label>  </td>
                                                      <td class="c8   ">   <input type="radio" class="QR-QID7-3-5 QWatchTimer" aria-labelledby="header~QID7~3 QID7-3-5-col-label" id="QR~QID7~3~5" name="QR~QID7~3" data-runtime-checked="runtime.Choices.3.Selected" value="5"> <label for="QR~QID7~3~5" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.3.Answers.5.Selected" aria-labelledby="header~QID7~3 QID7-3-5-col-label"></label>  <label for="QR~QID7~3~5" class="single-answer mobile" id="QID7-3-5-col-label" aria-labelledby="header~QID7~3 QID7-3-5-col-label" tabindex="-1">  <span>Somewhat disagree</span> </label>  </td>
                                                      <td class="c9   ">   <input type="radio" class="QR-QID7-3-6 QWatchTimer" aria-labelledby="header~QID7~3 QID7-3-6-col-label" id="QR~QID7~3~6" name="QR~QID7~3" data-runtime-checked="runtime.Choices.3.Selected" value="6"> <label for="QR~QID7~3~6" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.3.Answers.6.Selected" aria-labelledby="header~QID7~3 QID7-3-6-col-label"></label>  <label for="QR~QID7~3~6" class="single-answer mobile" id="QID7-3-6-col-label" aria-labelledby="header~QID7~3 QID7-3-6-col-label" tabindex="-1">  <span>Disagree</span> </label>  </td>
                                                      <td class="c10 last  ">   <input type="radio" class="QR-QID7-3-7 QWatchTimer" aria-labelledby="header~QID7~3 QID7-3-7-col-label" id="QR~QID7~3~7" name="QR~QID7~3" data-runtime-checked="runtime.Choices.3.Selected" value="7"> <label for="QR~QID7~3~7" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.3.Answers.7.Selected" aria-labelledby="header~QID7~3 QID7-3-7-col-label"></label>  <label for="QR~QID7~3~7" class="single-answer mobile" id="QID7-3-7-col-label" aria-labelledby="header~QID7~3 QID7-3-7-col-label" tabindex="-1">  <span>Strongly disagree</span> </label>  </td>
                                                   </tr>
                                                   <tr class="ChoiceRow ReadableAlt ">
                                                      <th scope="row" class="c1" id="header~QID7~4" tabindex="-1" role="rowheader">
                                                         <span class="LabelWrapper table">
                                                            <div class="table-cell">  <label>  <span>The visual map is a good way for sharing findings and thoughts among a group of analysts.</span> </label>   </div>
                                                            <div class="dropdown-arrow mobile"> <span class="dropdown-down">&nbsp;</span> </div>
                                                         </span>
                                                         <div class="answered-indicator mobile" aria-hidden="true"> <span data-runtime-html="runtime.Choices.4.SelectedDisplay"></span> </div>
                                                      </th>
                                                      <td class="c4   ">   <input type="radio" class="QR-QID7-4-1 QWatchTimer" aria-labelledby="header~QID7~4 QID7-4-1-col-label" id="QR~QID7~4~1" name="QR~QID7~4" data-runtime-checked="runtime.Choices.4.Selected" value="1"> <label for="QR~QID7~4~1" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.4.Answers.1.Selected" aria-labelledby="header~QID7~4 QID7-4-1-col-label"></label>  <label for="QR~QID7~4~1" class="single-answer mobile" id="QID7-4-1-col-label" aria-labelledby="header~QID7~4 QID7-4-1-col-label" tabindex="-1">  <span>Strongly agree</span> </label>  </td>
                                                      <td class="c5   ">   <input type="radio" class="QR-QID7-4-2 QWatchTimer" aria-labelledby="header~QID7~4 QID7-4-2-col-label" id="QR~QID7~4~2" name="QR~QID7~4" data-runtime-checked="runtime.Choices.4.Selected" value="2"> <label for="QR~QID7~4~2" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.4.Answers.2.Selected" aria-labelledby="header~QID7~4 QID7-4-2-col-label"></label>  <label for="QR~QID7~4~2" class="single-answer mobile" id="QID7-4-2-col-label" aria-labelledby="header~QID7~4 QID7-4-2-col-label" tabindex="-1">  <span>Agree</span> </label>  </td>
                                                      <td class="c6   ">   <input type="radio" class="QR-QID7-4-3 QWatchTimer" aria-labelledby="header~QID7~4 QID7-4-3-col-label" id="QR~QID7~4~3" name="QR~QID7~4" data-runtime-checked="runtime.Choices.4.Selected" value="3"> <label for="QR~QID7~4~3" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.4.Answers.3.Selected" aria-labelledby="header~QID7~4 QID7-4-3-col-label"></label>  <label for="QR~QID7~4~3" class="single-answer mobile" id="QID7-4-3-col-label" aria-labelledby="header~QID7~4 QID7-4-3-col-label" tabindex="-1">  <span>Somewhat agree</span> </label>  </td>
                                                      <td class="c7   ">   <input type="radio" class="QR-QID7-4-4 QWatchTimer" aria-labelledby="header~QID7~4 QID7-4-4-col-label" id="QR~QID7~4~4" name="QR~QID7~4" data-runtime-checked="runtime.Choices.4.Selected" value="4"> <label for="QR~QID7~4~4" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.4.Answers.4.Selected" aria-labelledby="header~QID7~4 QID7-4-4-col-label"></label>  <label for="QR~QID7~4~4" class="single-answer mobile" id="QID7-4-4-col-label" aria-labelledby="header~QID7~4 QID7-4-4-col-label" tabindex="-1">  <span>Neither agree nor disagree</span> </label>  </td>
                                                      <td class="c8   ">   <input type="radio" class="QR-QID7-4-5 QWatchTimer" aria-labelledby="header~QID7~4 QID7-4-5-col-label" id="QR~QID7~4~5" name="QR~QID7~4" data-runtime-checked="runtime.Choices.4.Selected" value="5"> <label for="QR~QID7~4~5" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.4.Answers.5.Selected" aria-labelledby="header~QID7~4 QID7-4-5-col-label"></label>  <label for="QR~QID7~4~5" class="single-answer mobile" id="QID7-4-5-col-label" aria-labelledby="header~QID7~4 QID7-4-5-col-label" tabindex="-1">  <span>Somewhat disagree</span> </label>  </td>
                                                      <td class="c9   ">   <input type="radio" class="QR-QID7-4-6 QWatchTimer" aria-labelledby="header~QID7~4 QID7-4-6-col-label" id="QR~QID7~4~6" name="QR~QID7~4" data-runtime-checked="runtime.Choices.4.Selected" value="6"> <label for="QR~QID7~4~6" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.4.Answers.6.Selected" aria-labelledby="header~QID7~4 QID7-4-6-col-label"></label>  <label for="QR~QID7~4~6" class="single-answer mobile" id="QID7-4-6-col-label" aria-labelledby="header~QID7~4 QID7-4-6-col-label" tabindex="-1">  <span>Disagree</span> </label>  </td>
                                                      <td class="c10 last  ">   <input type="radio" class="QR-QID7-4-7 QWatchTimer" aria-labelledby="header~QID7~4 QID7-4-7-col-label" id="QR~QID7~4~7" name="QR~QID7~4" data-runtime-checked="runtime.Choices.4.Selected" value="7"> <label for="QR~QID7~4~7" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.4.Answers.7.Selected" aria-labelledby="header~QID7~4 QID7-4-7-col-label"></label>  <label for="QR~QID7~4~7" class="single-answer mobile" id="QID7-4-7-col-label" aria-labelledby="header~QID7~4 QID7-4-7-col-label" tabindex="-1">  <span>Strongly disagree</span> </label>  </td>
                                                   </tr>
                                                   <tr class="ChoiceRow  ">
                                                      <th scope="row" class="c1" id="header~QID7~5" tabindex="-1" role="rowheader">
                                                         <span class="LabelWrapper table">
                                                            <div class="table-cell">  <label>  <span>One person can leave a question mark in some red nodes to notify that node needs to be further investigated. </span> </label>   </div>
                                                            <div class="dropdown-arrow mobile"> <span class="dropdown-down">&nbsp;</span> </div>
                                                         </span>
                                                         <div class="answered-indicator mobile" aria-hidden="true"> <span data-runtime-html="runtime.Choices.5.SelectedDisplay"></span> </div>
                                                      </th>
                                                      <td class="c4   ">   <input type="radio" class="QR-QID7-5-1 QWatchTimer" aria-labelledby="header~QID7~5 QID7-5-1-col-label" id="QR~QID7~5~1" name="QR~QID7~5" data-runtime-checked="runtime.Choices.5.Selected" value="1"> <label for="QR~QID7~5~1" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.5.Answers.1.Selected" aria-labelledby="header~QID7~5 QID7-5-1-col-label"></label>  <label for="QR~QID7~5~1" class="single-answer mobile" id="QID7-5-1-col-label" aria-labelledby="header~QID7~5 QID7-5-1-col-label" tabindex="-1">  <span>Strongly agree</span> </label>  </td>
                                                      <td class="c5   ">   <input type="radio" class="QR-QID7-5-2 QWatchTimer" aria-labelledby="header~QID7~5 QID7-5-2-col-label" id="QR~QID7~5~2" name="QR~QID7~5" data-runtime-checked="runtime.Choices.5.Selected" value="2"> <label for="QR~QID7~5~2" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.5.Answers.2.Selected" aria-labelledby="header~QID7~5 QID7-5-2-col-label"></label>  <label for="QR~QID7~5~2" class="single-answer mobile" id="QID7-5-2-col-label" aria-labelledby="header~QID7~5 QID7-5-2-col-label" tabindex="-1">  <span>Agree</span> </label>  </td>
                                                      <td class="c6   ">   <input type="radio" class="QR-QID7-5-3 QWatchTimer" aria-labelledby="header~QID7~5 QID7-5-3-col-label" id="QR~QID7~5~3" name="QR~QID7~5" data-runtime-checked="runtime.Choices.5.Selected" value="3"> <label for="QR~QID7~5~3" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.5.Answers.3.Selected" aria-labelledby="header~QID7~5 QID7-5-3-col-label"></label>  <label for="QR~QID7~5~3" class="single-answer mobile" id="QID7-5-3-col-label" aria-labelledby="header~QID7~5 QID7-5-3-col-label" tabindex="-1">  <span>Somewhat agree</span> </label>  </td>
                                                      <td class="c7   ">   <input type="radio" class="QR-QID7-5-4 QWatchTimer" aria-labelledby="header~QID7~5 QID7-5-4-col-label" id="QR~QID7~5~4" name="QR~QID7~5" data-runtime-checked="runtime.Choices.5.Selected" value="4"> <label for="QR~QID7~5~4" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.5.Answers.4.Selected" aria-labelledby="header~QID7~5 QID7-5-4-col-label"></label>  <label for="QR~QID7~5~4" class="single-answer mobile" id="QID7-5-4-col-label" aria-labelledby="header~QID7~5 QID7-5-4-col-label" tabindex="-1">  <span>Neither agree nor disagree</span> </label>  </td>
                                                      <td class="c8   ">   <input type="radio" class="QR-QID7-5-5 QWatchTimer" aria-labelledby="header~QID7~5 QID7-5-5-col-label" id="QR~QID7~5~5" name="QR~QID7~5" data-runtime-checked="runtime.Choices.5.Selected" value="5"> <label for="QR~QID7~5~5" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.5.Answers.5.Selected" aria-labelledby="header~QID7~5 QID7-5-5-col-label"></label>  <label for="QR~QID7~5~5" class="single-answer mobile" id="QID7-5-5-col-label" aria-labelledby="header~QID7~5 QID7-5-5-col-label" tabindex="-1">  <span>Somewhat disagree</span> </label>  </td>
                                                      <td class="c9   ">   <input type="radio" class="QR-QID7-5-6 QWatchTimer" aria-labelledby="header~QID7~5 QID7-5-6-col-label" id="QR~QID7~5~6" name="QR~QID7~5" data-runtime-checked="runtime.Choices.5.Selected" value="6"> <label for="QR~QID7~5~6" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.5.Answers.6.Selected" aria-labelledby="header~QID7~5 QID7-5-6-col-label"></label>  <label for="QR~QID7~5~6" class="single-answer mobile" id="QID7-5-6-col-label" aria-labelledby="header~QID7~5 QID7-5-6-col-label" tabindex="-1">  <span>Disagree</span> </label>  </td>
                                                      <td class="c10 last  ">   <input type="radio" class="QR-QID7-5-7 QWatchTimer" aria-labelledby="header~QID7~5 QID7-5-7-col-label" id="QR~QID7~5~7" name="QR~QID7~5" data-runtime-checked="runtime.Choices.5.Selected" value="7"> <label for="QR~QID7~5~7" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.5.Answers.7.Selected" aria-labelledby="header~QID7~5 QID7-5-7-col-label"></label>  <label for="QR~QID7~5~7" class="single-answer mobile" id="QID7-5-7-col-label" aria-labelledby="header~QID7~5 QID7-5-7-col-label" tabindex="-1">  <span>Strongly disagree</span> </label>  </td>
                                                   </tr>
                                                   <tr class="ChoiceRow ReadableAlt  bottom ">
                                                      <th scope="row" class="c1" id="header~QID7~6" tabindex="-1" role="rowheader">
                                                         <span class="LabelWrapper table">
                                                            <div class="table-cell">  <label>  <span>If I were an analyst working in a group, I think this visual map can be used to divide the tasks in a fine-grained way.. </span> </label>   </div>
                                                            <div class="dropdown-arrow mobile"> <span class="dropdown-down">&nbsp;</span> </div>
                                                         </span>
                                                         <div class="answered-indicator mobile" aria-hidden="true"> <span data-runtime-html="runtime.Choices.6.SelectedDisplay"></span> </div>
                                                      </th>
                                                      <td class="c4   ">   <input type="radio" class="QR-QID7-6-1 QWatchTimer" aria-labelledby="header~QID7~6 QID7-6-1-col-label" id="QR~QID7~6~1" name="QR~QID7~6" data-runtime-checked="runtime.Choices.6.Selected" value="1"> <label for="QR~QID7~6~1" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.6.Answers.1.Selected" aria-labelledby="header~QID7~6 QID7-6-1-col-label"></label>  <label for="QR~QID7~6~1" class="single-answer mobile" id="QID7-6-1-col-label" aria-labelledby="header~QID7~6 QID7-6-1-col-label" tabindex="-1">  <span>Strongly agree</span> </label>  </td>
                                                      <td class="c5   ">   <input type="radio" class="QR-QID7-6-2 QWatchTimer" aria-labelledby="header~QID7~6 QID7-6-2-col-label" id="QR~QID7~6~2" name="QR~QID7~6" data-runtime-checked="runtime.Choices.6.Selected" value="2"> <label for="QR~QID7~6~2" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.6.Answers.2.Selected" aria-labelledby="header~QID7~6 QID7-6-2-col-label"></label>  <label for="QR~QID7~6~2" class="single-answer mobile" id="QID7-6-2-col-label" aria-labelledby="header~QID7~6 QID7-6-2-col-label" tabindex="-1">  <span>Agree</span> </label>  </td>
                                                      <td class="c6   ">   <input type="radio" class="QR-QID7-6-3 QWatchTimer" aria-labelledby="header~QID7~6 QID7-6-3-col-label" id="QR~QID7~6~3" name="QR~QID7~6" data-runtime-checked="runtime.Choices.6.Selected" value="3"> <label for="QR~QID7~6~3" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.6.Answers.3.Selected" aria-labelledby="header~QID7~6 QID7-6-3-col-label"></label>  <label for="QR~QID7~6~3" class="single-answer mobile" id="QID7-6-3-col-label" aria-labelledby="header~QID7~6 QID7-6-3-col-label" tabindex="-1">  <span>Somewhat agree</span> </label>  </td>
                                                      <td class="c7   ">   <input type="radio" class="QR-QID7-6-4 QWatchTimer" aria-labelledby="header~QID7~6 QID7-6-4-col-label" id="QR~QID7~6~4" name="QR~QID7~6" data-runtime-checked="runtime.Choices.6.Selected" value="4"> <label for="QR~QID7~6~4" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.6.Answers.4.Selected" aria-labelledby="header~QID7~6 QID7-6-4-col-label"></label>  <label for="QR~QID7~6~4" class="single-answer mobile" id="QID7-6-4-col-label" aria-labelledby="header~QID7~6 QID7-6-4-col-label" tabindex="-1">  <span>Neither agree nor disagree</span> </label>  </td>
                                                      <td class="c8   ">   <input type="radio" class="QR-QID7-6-5 QWatchTimer" aria-labelledby="header~QID7~6 QID7-6-5-col-label" id="QR~QID7~6~5" name="QR~QID7~6" data-runtime-checked="runtime.Choices.6.Selected" value="5"> <label for="QR~QID7~6~5" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.6.Answers.5.Selected" aria-labelledby="header~QID7~6 QID7-6-5-col-label"></label>  <label for="QR~QID7~6~5" class="single-answer mobile" id="QID7-6-5-col-label" aria-labelledby="header~QID7~6 QID7-6-5-col-label" tabindex="-1">  <span>Somewhat disagree</span> </label>  </td>
                                                      <td class="c9   ">   <input type="radio" class="QR-QID7-6-6 QWatchTimer" aria-labelledby="header~QID7~6 QID7-6-6-col-label" id="QR~QID7~6~6" name="QR~QID7~6" data-runtime-checked="runtime.Choices.6.Selected" value="6"> <label for="QR~QID7~6~6" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.6.Answers.6.Selected" aria-labelledby="header~QID7~6 QID7-6-6-col-label"></label>  <label for="QR~QID7~6~6" class="single-answer mobile" id="QID7-6-6-col-label" aria-labelledby="header~QID7~6 QID7-6-6-col-label" tabindex="-1">  <span>Disagree</span> </label>  </td>
                                                      <td class="c10 last  ">   <input type="radio" class="QR-QID7-6-7 QWatchTimer" aria-labelledby="header~QID7~6 QID7-6-7-col-label" id="QR~QID7~6~7" name="QR~QID7~6" data-runtime-checked="runtime.Choices.6.Selected" value="7"> <label for="QR~QID7~6~7" class="q-radio" aria-hidden="true" data-runtime-class-q-checked="runtime.Choices.6.Answers.7.Selected" aria-labelledby="header~QID7~6 QID7-6-7-col-label"></label>  <label for="QR~QID7~6~7" class="single-answer mobile" id="QID7-6-7-col-label" aria-labelledby="header~QID7~6 QID7-6-7-col-label" tabindex="-1">  <span>Strongly disagree</span> </label>  </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>
                              <!-- rivets: if runtime.SeparatorDisplayed -->
                              <div id="QID9Separator" class="Separator"></div>
                              <div class="QuestionOuter BorderColor TE  QID9" id="QID9" questionid="QID9" posttag="QID9" data-runtime-remove-class-hidden="runtime.Displayed">
                                 <div id="QR~QID9~VALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.ErrorMsg" data-runtime-html="runtime.ErrorMsg" style="display: none;"></div>
                                 <div id="QR~QID9~SDPVALIDATION" class="ValidationError" role="alert" data-runtime-show="runtime.PDPErrorMsg" data-runtime-html="runtime.PDPErrorMsg" style="display: none;"></div>
                                 <div class="Inner BorderColor ML">
                                    <div class="InnerInner BorderColor">
                                       <fieldset>
                                          <legend><label for="QR~QID9" class="QuestionText BorderColor">Do you have any suggestions on improving the visual map?</label></legend>
                                          <div class="QuestionBody">
                                             <div class="ChoiceStructure">  <textarea class="InputText QR-QID9 QWatchTimer" id="QR~QID9" name="QR~QID9~TEXT" style="width: 592px;  height: 117px;" data-runtime-textvalue="runtime.Value"></textarea>  </div>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="Buttons" role="navigation"><input id="NextButton" class="NextButton Button" title="→" type="submit" name="NextButton" value="→" data-runtime-disabled="runtime.Disabled" data-runtime-aria-label="runtime.ariaLabel" data-runtime-hide="runtime.Hide" page-id="P_1549180718669" aria-label="Next"></div>
                        </div>
                     </div>
                     <div id="Footer" role="contentinfo"></div>
                     <div id="PushStickyFooter"></div>
                  </div>
                  <div id="Plug" style="display:block !important;"></div>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>