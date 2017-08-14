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

<style>
    #contact_form input:required, #contact_form textarea:required {
        background: #fff url(images/red_asterisk.png) no-repeat 98% center;
    } 
    
    #contact_form input:focus + .form_hint {
    display: inline;
}

#contact_form input:required:valid + .form_hint {
    background: #28921f;
}

    #contact_form input:required:valid + .form_hint::before {
        color: #28921f;
    }
    
.form_hint {
    background: #d45252;
    border-radius: 3px 3px 3px 3px;
    color: white;
    margin-left: 8px;
    padding: 1px 6px;
    z-index: ; /* hints stay above all other elements */
    position: absolute; /* allows proper formatting if hint is two lines */
    display: none;
}

    .form_hint::before {
        content: "\25C0";
        color: #d45252;
        position: absolute;
        top: 1px;
        left: -6px;
    }
</style>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']) ?>" id="contact_form">
<input type="hidden" name="do" value="contact">
<div style="position: relative; ">
<div style="display: inline-block; vertical-align: middle; width: 100%; ">
    	{!! csrf_field() !!}
	<br />
	<div class="control-group" style="width: 100%; ">	
		<div class="controls controls-row" style="width: 100%;" >
			<img src="../public/imgs/logoregistro.png" alt="" width="100%" class="col-sm-4 col-md-4">
			<div class="col-sm-8 col-md-8" style="text-align: center; " >
				<div class="form-group" style="text-align: center; width: 100%; max-width: 520px; margin-left: auto; margin-right: auto; " >
			      		<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
			                  	<label for="name" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 200px; " width="40%" >Nombre de Usuario : </label >
                  				<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" width="60%"   />
                                <span class="form_hint">El Nombre de Usuario no puede tener menos de 4 caracteres.</span>
			                </div>
			                <div class="text-danger">{{$errors->first('name')}}</div>
			        </div>
				<div class="form-group" style="text-align: center; width: 100%; max-width: 520px; margin-left: auto; margin-right: auto; " >
			      		<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
			                  	<label for="password" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 200px; " width="40%" >Contraseña : </label >
			                  	<input type="password" id="password" class="form-control" name="password"  width="60%" required  />
			                </div>			                
			                <div class="text-danger">{{$errors->first('password')}}</div>
			        </div>
			        <div class="form-group" style="text-align: center; width: 100%; max-width: 520px; margin-left: auto; margin-right: auto; " >
			      		<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
			                  	<label for="password_confirmation" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 200px; " width="40%" >Confirmación de Contraseña : </label >
                  				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" width="60%" required  />
			                </div>
			        </div>
			        <div class="form-group" style="text-align: center; width: 100%; max-width: 520px; margin-left: auto; margin-right: auto; " >
			      		<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
			                  	<label for="email" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 200px; " width="40%" >Email : </label>
                  				<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" width="60%" required  />
			                </div>
			                <div class="text-danger">{{$errors->first('email')}}</div>
			        </div>
			        <div class="form-group" style="text-align: center; width: 100%; max-width: 520px; margin-left: auto; margin-right: auto; " >
			      		<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
			     		<label for="referente" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 200px; " width="40%" >Referente : </label>
			     		<input type="text" name="referente" id="referente" class="form-control" value="{{ old('referente') }}" width="60%" />		     		
                  			</div>
                  			<div class="text-danger">{{$errors->first('ip')}}</div>
                  		</div>
                  		<div class="form-group" style="text-align: center; width: 100%; max-width: 520px; margin-left: auto; margin-right: auto; " >
			      		<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
			     			<label for="anionac" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 200px; " width="40%" >Año de Nacimiento: </label >
			     			<select name="anionac" id="anionac" class="form-control" value="{{ old('anionac') }}" width="60%" required >			     				
			     				<?php
			     					$anioActual = date("Y");
			     					for ($i = $anioActual; $i >= $anioActual - 100; $i--) {
			     						
    									echo "<option value='".$i."'>".$i."</option>";
								}
 
			     				?>
			     			</select>
                  				
                  				
                  			</div>
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
                  		<div class="form-group" style="text-align: center; ">
			      		<div class="checkbox" style="margin: auto; text-align: center; ">
			     			<hr style="border: 2px solid red; padding: 0; margin: 0; background-color: red; " />
                  			</div>
                  		</div>
                  		<div class="form-inline" style="text-align: center; ">
			      		<div class="checkbox" style="font-size: 11px;">
			     			<label><input type="checkbox" value="" required >Declaro haber leido, comprendido <br />y aceptado los <a href="#">Términos de servicio</a>.</label>
                  			</div>
			     		<button type="submit" class="btn btn-danger" style="min-width: 150px; margin-left: 8px; margin-right: 8px; font-size: 11px;">Enviar</button>
                  		</div>
		        </div>
		        
		        
		</div>
	</div>
	
	<br />
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
@stop