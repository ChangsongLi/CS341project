<?php
include('session.php');
if (!isset($_SESSION['login_auth'])){
	header("location: Guest.php");
}
switch($_SESSION['login_auth']){
case "A":
	header("location: Admin.php"); // Redirecting To Admin Page
	break;
case "S":
	header("location: Student.php"); // Redirecting To Volunteer Page
	break;		
}
?>
<!doctype html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Volunteer | Holmen Robotics</title>
    <!-- Styles --> 
    <link rel="stylesheet" type="text/css" href="theme.css" />
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
	<link href='http://fonts.googleapis.com/css?family=Cuprum&amp;subset=latin' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="jquery.confirm/jquery.confirm.css" />
	<!-- Scripts -->
	<script src='fullcalendar/lib/jquery.min.js'></script>
	<script src='fullcalendar/lib/moment.min.js'></script>
	<script src='fullcalendar/fullcalendar.js'></script>
	<script src="jquery.confirm/jquery.confirm.js"></script>
	<script>
		$(document).ready(function() {
    		// page is now ready, initialize the calendar...
    		$('#calendar').fullCalendar({
				editable: true,
        		weekmode: 'variable',
				eventClick: function(event) {
					if (event.url){
						$.confirm({
							'title'		: event.title,
							'message'	: "<p>Starts: " + event.start.format('LLLL')
											+ "<br>Ends: " + event.end.format('LLLL')
											+ "<br><br>" + event.description,
							'buttons'	: {
								'OK'	: {
											'class'	: 'blue',
										}
									},
						});
						return false;
					}
					
				},
        		eventSources: [
				// your event source
					{
						events:  [
   							<?php 
							// Create connection
							$connection = mysqli_connect("localhost", "root", "091904", "holmenHighSchool");
							$query = mysqli_query($connection, "SELECT * FROM events");
							while ($event = mysqli_fetch_assoc($query)) {
								$eventID = $event["eventId"];
								$title = $event["title"];
								$start = $event["startDateTime"];
								$end = $event["endDateTime"];
								$MinVols = $event["MinVols"];
								$MaxVols = $event["MaxVols"];
								$MinStud = $event["MinStud"];
								$MaxStud = $event["MaxStud"];
								$Desc = $event["Desc"];
								
								if ($event["removed"] == 1) {
									$color = red;
									$textColor = white;
								} else if ($event["removed"] == 0 && $MaxVols > 0) {
										$color = green;
										$textColor = white;
								} else {
									$color = blue;
									$textColor = white;
								}
								
								if (!$Desc){
									$Desc = '';
								}
								
								echo "{";
								echo "title : '$title',";
								echo "start : '$start',";
								echo "end : '$end',";
								echo "url : 'viewEvent.php?eventID=$eventID',";
								echo "color : '$color',";
								echo "textColor : '$textColor',";
								echo "minVols: '$MinVols',";
								echo "maxVols: '$MaxVols',";
								echo "minStud: '$MinStud',";
								echo "maxStud: '$MaxStud',";
								echo "description : '$Desc',";
								echo "},";
							}
    						?>
						],
					}
					// any other event sources...
				]
    		})
		});
	</script>
  </head>
    <body>
        <div id = "title">
            <a href="Volunteer.php">
				<h2 id = "titleName"> 
					<img id = "titleIcon" src = "calendar-icon.png"  alt="icon"> Holmen High School Robotics Club 
				</h2>
            </a>
            <input id = "log" class="button" type="button" onClick="location.href='logout.php'" value="Log out">
            <input id = "changePassword" class="button" type="button" onClick="location.href='changePassword.php'" value="Change password">
        </div>
        <div id=label>
            <input id = "addevent" class="labelButton"  type="button" onClick="location.href='forms/newEvent.php'" value="Add event">
			<input id = "modifyevent" class="labelButton"  type="button" onClick="location.href='modifyEvent.php'" value="Modify event">
        </div>
        
        <div id='calendar' style="background:white; position:relative; top: 10px; width:75%; display:inline-block;"></div>
    </body>
</html>
