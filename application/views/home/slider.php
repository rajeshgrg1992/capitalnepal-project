<!--Page Header-->
<header style="margin-top:140px; height:auto" class="page-header home home-slider-1">
<div class="slider caption-slider direction-nav">
        <div id="wowslider-container1">
			<div class="ws_images">
			<ul>
				<?php
				$slider_path  = 'uploads/slider/';
				$j=0;
				foreach($sliders as $rows){
				  $active =  (isset($j) && $j=="1") ? "active":"";
				?>
				<li><img src="<?php echo $slider_path.$rows['slider_image'];?>" alt="<?php echo ($this->crud->get_site_language() == 'ar') ? $rows['slider_title_ar'] : $rows['slider_title'];?>" title="<?php echo ($this->crud->get_site_language() == 'ar') ? $rows['slider_title_ar'] : $rows['slider_title'];?>" id="wows1_0"/></li>
				<?php
				$j++;
				}
				?>
			</ul>
			</div>
			<div class="ws_bullets"><div>
			<?php
			foreach($sliders as $rows){
			  $active =  (isset($j) && $j=="1") ? "active":"";
			?>
				<a href="#" title="<?php echo $j; ?>"><span><img src="theme/assets/data1/tooltips/1.jpg" alt="<?php echo $j; ?>"/><?php echo $j; ?></span></a>
			<?php
			$j++;
			}
			?>
			</div></div>
			<div class="ws_shadow"></div>
		</div>
</div>
</header>
<!--End Page Header-->