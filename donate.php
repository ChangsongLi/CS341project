<!doctype html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Donate | Holmen Robotics</title>
    <!-- Styles --> 
    <link rel="stylesheet" type="text/css" href="normalize.css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="theme.css" />
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
	<link href='http://fonts.googleapis.com/css?family=Cuprum&amp;subset=latin' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="jquery.confirm/jquery.confirm.css" />
	<!-- Scripts -->
	<script src='fullcalendar/lib/jquery.min.js'></script>
	<script src='fullcalendar/lib/moment.min.js'></script>
	<script src='fullcalendar/fullcalendar.js'></script>
	<script src="jquery.confirm/jquery.confirm.js"></script>
  </head>
    <body>
        <div id = "title">
            <a href="Guest.php">
				<h2 id = "titleName"> 
					<img id = "titleIcon" src = "img/bot2.jpg"  alt="icon"> Holmen High School Robotics Club 
				</h2>
            </a>
			<input id = "log" class="button" type="button" onClick="location.href='loginPage.php'" value="Log in">
            <input id = "forgetPassword" class="button"  type="button" onClick="location.href='forgetPassword.php'" value="Forgot your password?">
        </div>
        
        <div id="label">
            <input id = "contact" class="labelButton"  type="button" onClick="location.href='contact.html'" value="Contact">
            <input id = "donate" class="labelButton"  type="button" onClick="location.href='donate.php'" value="Donate">
        </div>
		
		<div style="margin: 0 5px 5px 5px;">
			<h1>Please donate to the Holmen Robotics Club!</h1>
			<h3>Donations can be made in person to the coach or via PayPal<h3>
		
					
			<div style="margin 0 auto; padding: 10px;">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_donations">
					<input type="hidden" name="business" value="rtthrowaway12@yahoo.com">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="item_name" value="Holmen Robotics Club">
					<input type="hidden" name="item_number" value="HRC">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="currency_code" value="USD">
					<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
		</div>
	</body>
</html>
