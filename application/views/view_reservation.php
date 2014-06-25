
	<div id="content" class="col-md-9">
		<h1>Make Reservation</h1>	
		<hr>
		
		<p id="error"><?php  echo $message; ?></p>
	<form method="post" action="<?php echo base_url();?>site/make_reservation">	
		<table>
			<tr>
				<th>
					Name:
				</th>	
				
				<td>
					<input type="text" name="name" id="name" required=""  class="form-control"/>
				</td>		
			</tr>
			
			<tr>
				<th>
					Date:
				</th>
				
				<td>
					<input name="Date_time" id="datetimepicker" type="text" required="" class="form-control">
				</td>
			</tr>
			
			<tr>
				<th>Number of persones:</th>
				<td>
					<input type="number" name="Count" id="count" required=""  class="form-control"/>
				</td>
			</tr>
			
			<tr>
				<th>
					Email:
				</th>
				
				<td>
					<input type="email" name="email" id="email" required=""  class="form-control"/>
				</td>
			</tr>
			
			<tr>
				<th>
					phone number:
				</th>
				
				<td>
					<input type="text" name="phone" id="phone" class="form-control"/>
				</td>
			</tr>
			
			<tr>
				<th>
					Message:
				</th>
				<td>				
					<textarea name="message" id="message" class="form-control"></textarea>
				</td>
			</tr>
		</table>	
		
		<input type="submit" value="Send" class="btn btn-warning"/>
	</form>	
		
			


	
	<link href="<?php echo base_url();?>/datetimepicker/jquery.datetimepicker.css" type="text/css" rel="stylesheet"/>
	<script src="<?php echo base_url();?>/datetimepicker/jquery.datetimepicker.js" type="text/javascript"></script>
	<script type="text/javascript">
 	$('#datetimepicker').datetimepicker()
		.datetimepicker({minDate:0,allowTimes:['10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00']});
    </script>
    
		</div>
	</div>		