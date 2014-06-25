	<div id="main-content" class="row">
		
		<div id="nav" class="col-md-3"> 
			<ul>
				<li><a  href="<?php echo base_url();?>site/home"><div id="nav_home" class="menu_item"></div></a></li>
				
				<li><a id="menu" class="Group1" href="<?php echo base_url();?>/images/menu.jpg" title="Our Menu"><div id="nav_menu" class="menu_item"></div></a></li>
				
				<li><a  href="<?php echo base_url();?>site/specials"><div id="nav_specials" class="menu_item"></div></a></li>
				
				<li><a  href="<?php echo base_url();?>site/our_story"><div id="nav_our_story" class="menu_item"></div></a></li>
				
				<li><a  href="<?php echo base_url();?>site/reservation"><div id="nav_reservation" class="menu_item"></div></a></li>
				
				<li><a  href="<?php echo base_url();?>site/contact_us"><div id="nav_contact_us" class="menu_item"></div></a></li>
			</ul>
			<img src="<?php echo base_url();?>images/opening time.jpg" />
		</div>
	
		<script>
			$(document).ready(function(){
				$("#menu").colorbox({rel:'#menu'});
			});
		</script>