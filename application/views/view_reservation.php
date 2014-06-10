	<div id="contact">
	<?php 
	$this->load->helper("form");
	
	echo $message;
	echo validation_errors();  
	
	echo form_open("site/make_reservation");
	
	echo form_label("Name: ","Name");
	$data=array("name"=>"Name","id"=>"Name","value"=>set_value(""),"required"=>"" );
	echo form_input($data);
	echo "<br/>";
	echo form_label("Date: ","Date_time");
	?>
	
	<input name="Date_time" id="datetimepicker" type="text" required="">
	
	<?php
	
	
	echo form_label("Number of persons: ","Count");
	$data=array("name"=>"Count","id"=>"Count","value"=>set_value(""),"required"=>"" );
	echo form_input($data);
	
	echo form_label("Email: ","Email");
	$data=array("name"=>"Email","id"=>"Email","value"=>set_value(""),"required"=>"" );

	echo form_input($data);
	
	echo form_label("phone number: ","Phone");
	$data=array("name"=>"Phone","id"=>"Phone","value"=>set_value(""),"required"=>"" );
	echo form_input($data);
	
	echo form_label("Message: ","Message");
	$data=array("name"=>"Message","id"=>"Message","value"=>set_value("") );

	echo form_textarea($data);
	
	echo form_submit("contactsubmit","send!");
	
	echo form_close();	
		?>
	</div>
<script src="<?php echo base_url();?>/datetimepicker/jquery.js" type="text/javascript"></script>
	<link href="<?php echo base_url();?>/datetimepicker/jquery.datetimepicker.css" type="text/css" rel="stylesheet"/>
	<script src="<?php echo base_url();?>/datetimepicker/jquery.datetimepicker.js" type="text/javascript"></script>
	<script type="text/javascript">
 	$('#datetimepicker').datetimepicker()
		.datetimepicker({minDate:0,allowTimes:['10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00']});
    </script>