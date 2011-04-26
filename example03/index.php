<?php 
// include config with database definition
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="author" content="Darko Bunic"/>
		<meta name="description" content="Drag and drop table content with JavaScript"/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<script type="text/javascript" src="../redips-drag.js"></script>
		<!-- initialize drag and drop -->
		<script type="text/javascript" src="script.js"></script>
		<title>www.redips.net</title>
	</head>
	<body>
		<center>
			<h1><a href="http://www.redips.net/javascript/drag-and-drop-table-content/">www.redips.net</a></h1>
			<h2>Example 3: School timetable</h2>
		</center>
		<div id="main_container">
			<!-- tables inside this DIV could have draggable content -->
			<div id="drag">
	
				<!-- left container -->
				<div id="left">
					<table id="table1">
						<colgroup>
							<col width="190"/>
						</colgroup>
						<tbody>
							<?php subjects() ?>
							<tr><td class="trash" title="Trash">Trash</td></tr>
						</tbody>
					</table>
				</div><!-- left container -->
				
				<!-- right container -->
				<div id="right">
					<table id="table2">
						<colgroup>
							<col width="50"/>
							<col width="100"/>
							<col width="100"/>
							<col width="100"/>
							<col width="100"/>
							<col width="100"/>
						</colgroup>
						<tbody>
							<tr>
								<!-- if checkbox is checked, clone school subjects to the whole table row  -->
								<td class="mark blank">
									<input id="week" type="checkbox" title="Apply school subjects to the week" checked/>
									<input id="report" type="checkbox" title="Show subject report"/>
								</td>
								<td class="mark dark">Monday</td>
								<td class="mark dark">Tuesday</td>
								<td class="mark dark">Wednesday</td>
								<td class="mark dark">Thursday</td>
								<td class="mark dark">Friday</td>
							</tr>

							<?php timetable('08:00', 1) ?>
							<?php timetable('09:00', 2) ?>
							<?php timetable('10:00', 3) ?>
							<?php timetable('11:00', 4) ?>
							<?php timetable('12:00', 5) ?>
							<tr>
								<td class="mark dark">13:00</td>
								<td class="mark lunch" colspan="5">Lunch</td>
							</tr>
							<?php timetable('14:00', 7) ?>
							<?php timetable('15:00', 8) ?>
							<?php timetable('16:00', 9) ?>
						</tbody>
					</table>
				</div><!-- right container -->
			</div><!-- drag container -->
			<br/>
			<div id="message">Drag school subjects to the timetable (clone subjects with SHIFT key)</div>
			<div class="button_container">
				<input type="button" value="Save" class="button" onclick="save()" title="Save timetable"/>
			</div>
		</div><!-- main container -->
	</body>
</html>