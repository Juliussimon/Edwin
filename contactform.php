<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('juliusjjsimon@hotmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <title>Edwin Janssen | Contact</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
</head>
<body>


  <div class="header-shop">    

<div class="head">
    
	<a class="logo" href="index.html"><img src="img/logo.png"/></a>
    
   <ul id="drop-down-menu">
	<li><a href="schilderijen.html">Schilderijen</a>
        <ul>
			<li><a href="#">Expositie</a></li>
		</ul>    
    </li> 
	<li><a href="shop.html">Shop</a>  
		<ul>
			<li><a href="#">Winkels</a></li>
		</ul> 
	</li> 
	<li><a href="#">Nieuws</a> 
		<ul> 
			<li><a href="#">Video's</a></li> 
		</ul> 
	</li>
	<li><a href="contactform.php">Contact</a> 
		<ul> 
			<li><a href="#">Biografie</a></li> 
		</ul> 
	</li> 
</ul>	
<p class="clear_all"></p

	<div id="container">
  
  	</div><!-- container -->
	
</div><!-- head -->    

</div><!-- header -->

       	    <div class="content-header">
        
        <div class="content-header-titel">Contact formulier
        </div><!-- content-header-titel -->
        
      </div>    <!-- content-header -->  
       <div class="content">
       
			<!-- Form Code Start -->
			<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
			<fieldset >
			
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
			<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
			
			<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
			<div class='container'>
			    <label for='name' >Uw naam </label><br/>
			    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
			    <span id='contactus_name_errorloc' class='error'></span>
			</div>
			<div class='container'>
			    <label for='email' >E-mail</label><br/>
			    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
			    <span id='contactus_email_errorloc' class='error'></span>
			</div>
			
			<div class='container'>
			    <label for='message' >Bericht</label><br/>
			    <span id='contactus_message_errorloc' class='error'></span>
			    <textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
			</div>
			
			
			<div class='container'>
			    <input type='submit' name='Submit' value='verstuur' />
			</div>
			
			</fieldset>
			</form>
			<!-- client-side Form Validations:
			Uses the excellent form validation script from JavaScript-coder.com-->

      </div><!-- content -->





<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Vul uw naam in");

    frmvalidator.addValidation("email","req","Vul uw e-mail in");

    frmvalidator.addValidation("email","email","Vul aub een correct e-mail adres in");

    frmvalidator.addValidation("message","maxlen=2048","Uw bericht is te lang");

// ]]>
</script>

</body>
</html>