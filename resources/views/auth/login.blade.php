@extends('layouts.home')

@section('content')
<div class="container text-danger">
  	@if (Session::has('message'))
  		{{Session::get('message')}}
  	@endif
</div>

<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	session_start(); // this MUST be called prior to any output including whitespaces and line breaks!
	
	$GLOBALS['DEBUG_MODE'] = 1;
	// CHANGE TO 0 TO TURN OFF DEBUG MODE
	// IN DEBUG MODE, ONLY THE CAPTCHA CODE IS VALIDATED, AND NO EMAIL IS SENT
	
	$GLOBALS['ct_recipient']   = 'YOU@EXAMPLE.COM'; // Change to your email address!  Make sure DEBUG_MODE above is 0 for mail to send!
	$GLOBALS['ct_msg_subject'] = 'Securimage Test Contact Form';

?>
<link rel="stylesheet" href="../public/securimage/securimage.css" media="screen">
<link rel="stylesheet" type="text/css" href="../public/css/style.css?v=9" />
<?php

process_si_contact_form(); // Process the form, if it was submitted

if (isset($_SESSION['ctform']['error']) &&  $_SESSION['ctform']['error'] == true): /* The last form submission had 1 or more errors */ ?>
<div class="error">There was a problem with your submission.  Errors are displayed below in red.</div><br>
<?php elseif (isset($_SESSION['ctform']['success']) && $_SESSION['ctform']['success'] == true): /* form was processed successfully */ ?>
<div class="success">The captcha was correct and the message has been sent!  The captcha was solved in <?php echo $_SESSION['ctform']['timetosolve'] ?> seconds.</div><br />
<?php endif; ?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']) ?>" id="contact_form">
<input type="hidden" name="do" value="contact">
	<div style="display: inline-block; vertical-align: middle; width: 100%; ">
	{!! csrf_field() !!}
	<div class="col-sm-12 col-md-12" style="padding: 20px; ">
		<div class="col-sm-3 col-md-3" style="background-color: #e10019; color: #FFF; height: 50px; text-align: center; vertical-align: middle; ">
			<br />
			<span style='font-size: 13px; '><b>Inicio de sesión</b></span>
		</div>
	</div>
	
	<div class="control-group" style="width: 100%; ">
		<div class="controls controls-row" style="width: 100%;" >
			<div class="col-sm-12 col-md-12" >
			<div class="col-sm-6 col-md-6" style="text-align: center; " >	
				<div class="form-group" style="text-align: center; width: 100%; max-width: 520px; " >
					<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
						<label for="name" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Nombre de Usuario : </label >
                  				<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" width="60%" required  />
			     		</div>
			        	<div class="text-danger">{{$errors->first('name')}}</div>
				</div>
				<div class="form-group" style="text-align: center; width: 100%; max-width: 520px; " >
			      		<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
			       		<label for="password" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Contraseña : </label >
                  			<input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" width="60%" required  />
			        	</div>
			        	<div class="text-danger">{{$errors->first('password')}}</div>
			    	</div>
			    	<div class="form-group" style="text-align: center; width: 100%; max-width: 520px; " >

			       			<div style="margin: auto; display: block-inline; width: 200px; text-align: center;  ">
    <?php
      // show captcha HTML using Securimage::getCaptchaHtml()
      require_once 'public/securimage/securimage.php';
      $options = array();
      $options['input_name']             = 'ct_captcha'; // change name of input element for form post
      $options['disable_flash_fallback'] = false; // allow flash fallback
      $options['input_text'] = 'Ingrese el texto de la imagen';

      if (!empty($_SESSION['ctform']['captcha_error'])) {
        // error html to show in captcha output
        $options['error_html'] = $_SESSION['ctform']['captcha_error'];
      }

      echo "<div id='captcha_container_1'>\n";
      echo Securimage::getCaptchaHtml($options);
      echo "\n</div>\n";
      
    ?>
  </div>
                  			                  			
			        	<div class="text-danger" style="margin: auto; display: block-inline; width: 200px; text-align: center;  ">
			        	@if (Session::has('captcha'))
				  	{{Session::get('captcha')}}
				  	@endif
			        	</div>
			    	</div>
				<br />
			</div>
			<div class="col-sm-6 col-md-6" style="text-align: center; padding-left: 20px; top: 0; background-color: #d3d3d3; border: 1px solid #d3d3d3;
    border-radius: 20px;" >
				<div id="container" style="padding: 10px; min-height: 150px; ">
					<ul id="keyboard">
						<li class="symbol" id="t1"><span class="off">`</span><span class="on">~</span></li>
						<li class="symbol" id="t2"><span class="off">1</span><span class="on">!</span></li>
						<li class="symbol" id="t3"><span class="off">2</span><span class="on">@</span></li>
						<li class="symbol" id="t4"><span class="off">3</span><span class="on">#</span></li>
						<li class="symbol" id="t5"><span class="off">4</span><span class="on">$</span></li>
						<li class="symbol" id="t6"><span class="off">5</span><span class="on">%</span></li>
						<li class="symbol" id="t7"><span class="off">6</span><span class="on">^</span></li>
						<li class="symbol" id="t8"><span class="off">7</span><span class="on">&amp;</span></li>
						<li class="symbol" id="t9"><span class="off">8</span><span class="on">*</span></li>
						<li class="symbol" id="t10"><span class="off">9</span><span class="on">(</span></li>
						<li class="symbol" id="t11"><span class="off">0</span><span class="on">)</span></li>
						<li class="symbol" id="t12"><span class="off">-</span><span class="on">_</span></li>
						<li class="symbol" id="t13"><span class="off">=</span><span class="on">+</span></li>
						<li class="delete lastitem" id="t14">delete</li>
						<li class="tab" id="t15">tab</li>
						<li class="letter" id="t16">q</li>
						<li class="letter" id="t17">w</li>
						<li class="letter" id="t18">e</li>
						<li class="letter" id="t19">r</li>
						<li class="letter" id="t20">t</li>
						<li class="letter" id="t21">y</li>
						<li class="letter" id="t22">u</li>
						<li class="letter" id="t23">i</li>
						<li class="letter" id="t24">o</li>
						<li class="letter" id="t25">p</li>
						<li class="symbol" id="t26"><span class="off">[</span><span class="on">{</span></li>
						<li class="symbol" id="t27"><span class="off">]</span><span class="on">}</span></li>
						<li class="symbol lastitem" id="t28"><span class="off">\</span><span class="on">|</span></li>
						<li class="capslock" id="t29">caps</li>
						<li class="letter" id="t30">a</li>
						<li class="letter" id="t31">s</li>
						<li class="letter" id="t32">d</li>
						<li class="letter" id="t33">f</li>
						<li class="letter" id="t34">g</li>
						<li class="letter" id="t35">h</li>
						<li class="letter" id="t36">j</li>
						<li class="letter" id="t37">k</li>
						<li class="letter" id="t38">l</li>
						<li class="symbol" id="t39"><span class="off">;</span><span class="on">:</span></li>
						<!--<li class="symbol"><span class="off"></span><span class="on">&quot;</span></li>-->
						<li class="return lastitem" id="t40">enter</li>
						<li class="left-shift" id="t41">shift</li>
						<li class="letter" id="t42">z</li>
						<li class="letter" id="t43">x</li>
						<li class="letter" id="t44">c</li>
						<li class="letter" id="t45">v</li>
						<li class="letter" id="t46">b</li>
						<li class="letter" id="t47">n</li>
						<li class="letter" id="t48">m</li>
						<li class="symbol" id="t49"><span class="off">,</span><span class="on">&lt;</span></li>
						<li class="symbol" id="t50"><span class="off">.</span><span class="on">&gt;</span></li>
						<li class="symbol" id="t51"><span class="off">/</span><span class="on">?</span></li>
						<li class="right-shift lastitem" id="t52">shift</li>
						<li class="space lastitem" id="t53">&nbsp;</li>
					</ul>
					
				</div>
			</div>
			</div>
		</div>
		
		<div class="controls controls-row" style="width: 100%;" >
			<div class="col-sm-6 col-md-6" style="text-align: center; padding-left: 20px; " >
				<hr style="border: 2px solid red; padding: 0; margin: 0; background-color: red; " />
			    	<div class="form-group" style="text-align: center; width: 100%; max-width: 520px; margin-left: auto; margin-right: auto; " >
			      		<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
			       			<br />
			       			<button type="submit" class="btn btn-danger" style="min-width: 150px; margin-left: 8px; margin-right: 8px; font-size: 11px;">Enviar</button>
			        	</div>
			    	</div>
			</div>
			<div class="col-sm-6 col-md-6" style="text-align: center; padding-left: 0px; " >
				<hr style="border: 2px solid red; padding: 0; margin: 0; background-color: red; " />
				<div class="form-group" style="text-align: center; width: 100%; max-width: 520px; margin: 0;  " >
			      		<div class="input-group pull-center" style="margin: 0; text-align: center; width: 100%; " >
			       			<br />
			       			<a class="btn btn-danger" style="min-width: 100px; margin-left: 4px; margin-right: 4px; padding-left: 4px; padding-right: 4px; font-size: 11px;" href='{{url("password/email")}}'>Olvidé mi contraseña</a>
			       			<button type="submit" class="btn btn-danger" style="min-width: 100px; margin-left: 4px; margin-right: 4px; padding-left: 4px; padding-right: 2px; font-size: 11px;">Recuperar nombre de usuario</button>
			        	</div>
			    	</div>
			</div>
		</div>
	</div>
	
</form>


<?php

// The form processor PHP code
function process_si_contact_form()
{
  $_SESSION['ctform'] = array(); // re-initialize the form session data

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
  	// if the form has been submitted

    foreach($_POST as $key => $value) {
      if (!is_array($key)) {
      	// sanitize the input data
        if ($key != 'ct_message') $value = strip_tags($value);
        $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
      }
    }

    $name    = @$_POST['ct_name'];    // name from the form
    $email   = @$_POST['ct_email'];   // email from the form
    $URL     = @$_POST['ct_URL'];     // url from the form
    $message = @$_POST['ct_message']; // the message from the form
    $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code
    $name    = substr($name, 0, 64);  // limit name to 64 characters

    $errors = array();  // initialize empty error array

    if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
      // only check for errors if the form is not in debug mode

      if (strlen($name) < 3) {
        // name too short, add error
        $errors['name_error'] = 'Your name is required';
      }

      if (strlen($email) == 0) {
        // no email address given
        $errors['email_error'] = 'Email address is required';
      } else if ( !preg_match('/^(?:[\w\d-]+\.?)+@(?:(?:[\w\d]\-?)+\.)+\w{2,63}$/i', $email)) {
        // invalid email format
        $errors['email_error'] = 'Email address entered is invalid';
      }

      if (strlen($message) < 20) {
        // message length too short
        $errors['message_error'] = 'Your message must be longer than 20 characters';
      }
    }

    // Only try to validate the captcha if the form has no errors
    // This is especially important for ajax calls
    if (sizeof($errors) == 0) {
      require_once dirname(__FILE__) . '/securimage.php';
      $securimage = new Securimage();

      if ($securimage->check($captcha) == false) {
        $errors['captcha_error'] = 'Incorrect security code entered<br />';
      }
    }

    if (sizeof($errors) == 0) {
      // no errors, send the form
      $time       = date('r');
      $message = "A message was submitted from the contact form.  The following information was provided.<br /><br />"
                    . "<em>Name: $name</em><br />"
                    . "<em>Email: $email</em><br />"
                    . "<em>URL: $URL</em><br />"
                    . "<em>Message:</em><br />"
                    . "<pre>$message</pre>"
                    . "<br /><br /><em>IP Address:</em> {$_SERVER['REMOTE_ADDR']}<br />"
                    . "<em>Time:</em> $time<br />"
                    . "<em>Browser:</em> {$_SERVER['HTTP_USER_AGENT']}<br />";

      $message = wordwrap($message, 70);

      if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
      	// send the message with mail()
        mail($GLOBALS['ct_recipient'], $GLOBALS['ct_msg_subject'], $message, "From: {$GLOBALS['ct_recipient']}\r\nReply-To: {$email}\r\nContent-type: text/html; charset=UTF-8\r\nMIME-Version: 1.0");
      }

      $_SESSION['ctform']['timetosolve'] = $securimage->getTimeToSolve();
      $_SESSION['ctform']['error'] = false;  // no error with form
      $_SESSION['ctform']['success'] = true; // message sent
    } else {
      // save the entries, this is to re-populate the form
      $_SESSION['ctform']['ct_name'] = $name;       // save name from the form submission
      $_SESSION['ctform']['ct_email'] = $email;     // save email
      $_SESSION['ctform']['ct_URL'] = $URL;         // save URL
      $_SESSION['ctform']['ct_message'] = $message; // save message

      foreach($errors as $key => $error) {
      	// set up error messages to display with each field
        $_SESSION['ctform'][$key] = "<span class=\"error\">$error</span>";
      }

      $_SESSION['ctform']['error'] = true; // set error floag
    }
  } // POST
}

$_SESSION['ctform']['success'] = false; // clear success value after running
?>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="../public/js/keyboard.js"></script>
	<script type="text/javascript">
		var $write = $('#password'), 
		shift = false,
		capslock = false;	
	
		$('#keyboard li').click(function(){
			$this = $(this),
          		character = $this.html(); 
          		//alert(character);
          		
          		if ($this.hasClass('left-shift') || $this.hasClass('right-shift')) {
		        	$('.letter').toggleClass('uppercase');
		      		$('.symbol span').toggle();
		
		            	shift = (shift === true) ? false : true;
		            	capslock = false;
		            	return false;
		      	}
		      	// Hide Keyboard
		       	if ($this.hasClass('hide')) {
		            	$('#keyboard li').hide();
		            	return false;
			}
			// Caps lock
          		if ($this.hasClass('capslock')) {
            			$('.letter').toggleClass('uppercase');
            			capslock = true;
            			return false;
          		}
          		// Delete
          		if ($this.hasClass('delete')) {
            			html = $write.html();
            			$write.html(html.substr(0, html.length - 1));

            			return false;
          		}
          		// Special characters
          		if ($this.hasClass('symbol')) character = $('span:visible', $this).html();
		        if ($this.hasClass('space')) character = ' ';
		        if ($this.hasClass('tab')) character = "\t";
		        if ($this.hasClass('return')) character = "\n";
		        // Uppercase letter
		        if ($this.hasClass('uppercase')) character = character.toUpperCase();
		
		       	// Remove shift once a key is clicked.
		        if (shift === true) {
		           	$('.symbol span').toggle();
		            	if (capslock === false) $('.letter').toggleClass('uppercase');		
		            		shift = false;
		       	}
			//alert(character);
		        // Add the character
		        $write.val($write.val()+character);//
		});
	</script>

 <br /><br />
@stop
