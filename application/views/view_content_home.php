	<div id="content" class="col-md-9">
		 <div class="wrapper">
		 	  <h1>Shawkat's Restaurant</h1>
		 	  <hr>
		 <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="<?php echo base_url();?>/images/img (1).jpg" width="600" height="400" alt=""></li>
                        <li><img src="<?php echo base_url();?>/images/img (2).jpg" width="600" height="400" alt=""></li>
                        <li><img src="<?php echo base_url();?>/images/img (3).jpg" width="600" height="400" alt=""></li>
                        <li><img src="<?php echo base_url();?>/images/img (4).jpg" width="600" height="400" alt=""></li>
                        <li><img src="<?php echo base_url();?>/images/img (5).jpg" width="600" height="400" alt=""></li>
                        <li><img src="<?php echo base_url();?>/images/img (6).jpg" width="600" height="400" alt=""></li>
                        <li><img src="<?php echo base_url();?>/images/img (7).jpg" width="600" height="400" alt=""></li>
                    </ul>
                </div>
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                <p class="jcarousel-pagination">
                </p>
            </div>
        </div>	
        <br />
		<div id="homephotos">
			<a href="<?php echo base_url();?>site/specials" >
				<img width="100%" src="<?php echo base_url();?>/images/home1.png" /> 
		 	</a>
		<br/>
			<a href="<?php echo base_url();?>site/reservation" >
				<img width="100%" src="<?php echo base_url();?>/images/home2.png" /> 
		 	</a>

		 </div>
		 
		</div>
	</div>	
	
	<script>
			$(function() {
    $('.jcarousel')
        .jcarousel({
            wrap: 'circular'
        })
        .jcarouselAutoscroll({
            interval: 3000,
            target: '+=1',
            autostart: true
        })
    ;
});
	</script>	