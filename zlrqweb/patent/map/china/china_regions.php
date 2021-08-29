<?php
	include('../../../basepath.php');	 
	include('../../../../common_web/includes/begin.php');
	include('../../../../common_web/includes/menu_top.php');
	include('../../../../common_web/includes/menu_left.php'); 
?>
	<script src='<?php echo $g_yd__resources ?>echarts_map/china.js'></script>
	
	<link rel='stylesheet' href='china_regions/content.css'>
	<script type='text/javascript' src='china_regions/content.js'></script>
<?php
	include('china_regions/content.php');
	include('../../../../common_web/includes/menu_right.php');
	include('../../../../common_web/includes/footer.php'); 
	include('../../../../common_web/includes/end.php');
?>
