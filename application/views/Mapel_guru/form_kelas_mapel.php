<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Form Kelas Matapelajaran</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url()."asset/";?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()."asset/";?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url()."asset/";?>css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url()."asset/";?>css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<?php $this->load->view("header.php"); ?>
	<!-- start: Header -->
	
		<?php $this->load->view("menu.php"); ?>			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			<?php echo $tombol; ?>
			<?php echo $update; ?>
			<?php echo $tabel; ?>
			
			

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<p>
			<span style="text-align:center;float:center">&copy; 2015 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">SMA Negeri 19 Makassar</a></span>
			
		</p>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url()."asset/";?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url()."asset/";?>js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/modernizr.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url()."asset/";?>js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url()."asset/";?>js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url()."asset/";?>js/excanvas.js"></script>
	<script src="<?php echo base_url()."asset/";?>js/jquery.flot.js"></script>
	<script src="<?php echo base_url()."asset/";?>js/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url()."asset/";?>js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url()."asset/";?>js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url()."asset/";?>js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/counter.js"></script>
	
		<script src="<?php echo base_url()."asset/";?>js/retina.js"></script>

		<script src="<?php echo base_url()."asset/";?>js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
