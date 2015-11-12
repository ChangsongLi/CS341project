<?php
include('session.php');
if (!isset($_SESSION['login_auth'])){
	header("location: Guest.html");
}
switch($_SESSION['login_auth']){
case "A":
	header("location: Admin.php"); // Redirecting To Student Page
	break;
case "V":
	header("location: Volunteer.php"); // Redirecting To Volunteer Page
	break;			
}
?>
<!doctype html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Modify User Accounts</title>
 	<!-- Styles --> 
    <link rel="stylesheet" type="text/css" href="theme.css">
	<link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
	<!-- Scripts -->
	<script src='fullcalendar/lib/jquery.min.js'></script>
	<script src='fullcalendar/lib/moment.min.js'></script>
	<script src='fullcalendar/fullcalendar.js'></script>
	<script>
		$(document).ready(function() {
    		// page is now ready, initialize the calendar...
    		$('#calendar').fullCalendar({
        		editable: true,
        		weekmode: 'variable',
        		eventSources: [

        // your event source
        {
            events: [ // put the array in the `events` property
                {
                    title  : 'Lorem ipsum dolor sit amet',
                    start  : '2015-10-01'
                },
                {
                    title  : 'consectetur adipiscing elit',
                    start  : '2015-10-05',
                    end    : '2015-10-05'
                },
                {
                    title  : 'Ut faucibus pulvinar',
                    start  : '2015-10-09T12:30:00',
                }
            ],
            color: 'black',     // an option!
            textColor: 'yellow' // an option!
        }

        // any other event sources...

    ]
    		})
		});
		function passwordGen(){
			var s= '';
			var randomchar=function(){
				var n= Math.floor(Math.random()*62);
				if(n<10) return n; //1-10
				if(n<36) return String.fromCharCode(n+55); //A-Z
				return String.fromCharCode(n+61); //a-z
			}
		while(s.length< 6) s+= randomchar();
		return s;
		}
	</script>
  </head>
  <body>
	  <div id = "title">
		<h2 id = "titleName">
		  <img id = "titleIcon" src = "calendar-icon.png"  alt="icon"> Holmen High School Robotics Club 
		</h2>
		<input id = "log" class="button"  type="button" onClick="location.href='logout.php'" value="Log out">
		<input id = "changePassword" class="button"  type="button" onClick="location.href='changePassword.html'" value="Change password">
	  </div>      
	  <div id="label">
        <input id = "clockIn" class="labelButton"  type="button" onClick="location.href='clockIn.html'" value="Clock in">            
        <input id = "viewNote" class="labelButton"  type="button" onClick="location.href='viewNote.html'" value="View Note  ">        
    </div>
	  <div>
		<?php 
		// Create connection
		$connection = mysqli_connect("localhost", "root", "091904", "holmenHighSchool");
		// Check connection
		if (mysqli_connect_errno($connection)) {
			echo "<div>";
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			echo "</div>";
		}
		// SQL query to fetch information of registerd users and finds user match.
		$user = $_SESSION['login_user'];
		$result = mysqli_query($connection, "select * from events");
		if ($result) {
             echo '<table align="center" cellpadding="25"><tr><th>Event Name</th><th>Start Time</th><th>End time</th>'
				.'<th>Min volunteers</th><th>Max volunteers</th><th>Min Student</th><th>Max Student</th><th>Join</th></tr>';
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
                $eventAttend = mysqli_query($connection, "select * from eventparticipation where user ='$user'");
                $check = true;
                
                while($rowAttend = mysqli_fetch_assoc($eventAttend)){
                    if($rowAttend["eventId"] == $row["eventId"]){
                        $check = false;
                    }
                }
                
                if($check){
                    echo "<tr><td>".$row["title"]."</td><td>".$row["startDateTime"]."</td><td>".$row["endDateTime"]."</td><td>"
					.$row["minVolunteers"]."</td><td>".$row["maxVolunteers"]."</td><td>".$row["minStudents"]."</td><td>".$row["maxStudents"]."</td><td><a href='deleteUser.php?username=".$row["username"]."'>Join</a></td></tr>";     
                } 
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
		mysqli_close($connection); // Closing Connection;
		?>
	  </div>
	</div>
  </body>
</html>