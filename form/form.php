<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Event Creator</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
<style type="text/css">
.auto-style1 {
	margin-top: 0;
}
</style>
</head>
<body id="main_body" >
	
	&nbsp;<div id="form_container">
	
		<h1><a style="width: 637px">Create a new Event</a></h1>
		<form id="form_1059751" class="appnitro"  method="post" action="php-form-processor.php">
					<div class="form_description">
		</div>						
			<ul style="width: 103%; height: 927px" >
			
					<li id="li_1" style="left: 0px; top: -3px; width: 45%; height: 65px" >
		<label class="description" for="element_1">Title </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" style="left: 342px; top: -73px; width: 41%; height: 65px" >
		<label class="description" for="element_2">Location </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" style="left: 4px; top: -48px; width: 44%" >
		<label class="description" for="element_3">Start Date </label>
		<span>
			<input id="element_3_1" name="element_3_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_1">MM</label>
		</span>
		<span>
			<input id="element_3_2" name="element_3_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_2">DD</label>
		</span>
		<span>
	 		<input id="element_3_3" name="element_3_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_3_3">YYYY</label>
		</span>
	
		<span id="calendar_3">
			<img id="cal_img_3" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_3_3",
			baseField    : "element_3",
			displayArea  : "calendar_3",
			button		 : "cal_img_3",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_4" class="auto-style1" style="left: 343px; top: -107px; width: 42%" >
		<label class="description" for="element_4">End Date </label>
		<span>
			<input id="element_4_1" name="element_4_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_1">MM</label>
		</span>
		<span>
			<input id="element_4_2" name="element_4_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_2">DD</label>
		</span>
		<span>
	 		<input id="element_4_3" name="element_4_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_4_3">YYYY</label>
		</span>
	
		<span id="calendar_4">
			<img id="cal_img_4" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_4_3",
			baseField    : "element_4",
			displayArea  : "calendar_4",
			button		 : "cal_img_4",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_5" style="left: 4px; top: -107px; width: 42%" >
		<label class="description" for="element_5">Start Time </label>
		<span>
			<input id="element_5_1" name="element_5_1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="element_5_2" name="element_5_2" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>MM</label>
		</span>
		<span>
			<input id="element_5_3" name="element_5_3" class="element text " size="2" type="text" maxlength="2" value=""/>
			<label>SS</label>
		</span>
		<span>
			<select class="element select" style="width:4em" id="element_5_4" name="element_5_4">
				<option value="AM" >AM</option>
				<option value="PM" >PM</option>
			</select>
			<label>AM/PM</label>
		</span> 
		</li>		<li id="li_6" style="left: 343px; top: -174px; width: 42%" >
		<label class="description" for="element_6">End Time </label>
		<span>
			<input id="element_6_1" name="element_6_1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="element_6_2" name="element_6_2" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>MM</label>
		</span>
		<span>
			<input id="element_6_3" name="element_6_3" class="element text " size="2" type="text" maxlength="2" value=""/>
			<label>SS</label>
		</span>
		<span>
			<select class="element select" style="width:4em" id="element_6_4" name="element_6_4">
				<option value="AM" >AM</option>
				<option value="PM" >PM</option>
			</select>
			<label>AM/PM</label>
		</span> 
		</li>		<li id="li_7" style="left: 4px; top: -116px; width: 37%" >
		<label class="description" for="element_7">Min Number of Volunteers </label>
		<div>
			<input id="element_7" name="element_7" class="element text small" type="text" maxlength="255" value="" style="width: 9%"/> 
		</div> 
		</li>		<li id="li_8" style="left: 343px; top: -166px; width: 37%" >
		<label class="description" for="element_8">Max Number of Volunteers </label>
		<div>
			<input id="element_8" name="element_8" class="element text small" type="text" maxlength="255" value="" style="width: 10%"/> 
		</div> 
		</li>		<li id="li_9" style="left: 4px; top: -154px; width: 36%" >
		<label class="description" for="element_9">Number of Students </label>
		<div>
			<input id="element_9" name="element_9" class="element text small" type="text" maxlength="255" value="" style="width: 11%"/> 
		</div> 
		</li>		<li id="li_11" style="left: 4px; top: -154px" >
		<label class="description" for="element_11">Add Students </label>
		<div>
		<select class="element select medium" id="element_11" name="element_11"> 
			<option value="" selected="selected"></option>
<option value="1" >First option</option>
<option value="2" >Second option</option>
<option value="3" >Third option</option>

		</select>
		</div> 
		</li>		<li id="li_10" style="left: 4px; top: -112px; width: 95%" >
		<label class="description" for="element_10">Description </label>
		<div>
			<textarea id="element_10" name="element_10" class="element textarea medium"></textarea> 
		</div> 
		</li>
			
					<li class="buttons" style="left: 4px; top: -100px">
			    <input type="hidden" name="form_id" value="1059751" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>