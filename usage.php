<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<title>Right Sidebar template - Progressus Bootstrap template</title>
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
		<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php">E-index</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.php">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Specification<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="usage.php">Usage</a></li>
							<li><a href="example.php">Example</a></li>
						</ul>
					</li>
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Application<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="applicationEI.php">ApplicationE-index</a></li>
							<li><a href="applicationSP.php">SimpleApplication</a></li>
						</ul>
					</li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Right Sidebar</li>
		</ol>
		<div class="row">
			<!-- Article main content -->
				<header class="page-header">
					<h1 class="page-title">Usage</h1>
				</header>
				<p>Can we apply E-index to differentiate complex dynamic traits?
                    There are some procedures divided into different kinds of steps below to guide you how to use E-index to differentiate complex dynamic traits.</p>
                <!--Step 1-->    
                <blockquote>Step 1.</blockquote>
                <h4><strong>I. Import files</strong></h4>
				<p>The way to differentiate two genotypes that we provided for is work well though importing two files of corresponding genotypes.Please upload those at following blanks in page ApplicationEindex.</p>
                <p style="text-align:center"><img src="assets/images/usage/importfile.jpg" /></p>
                <br><h4 style="text-align:center; font-family:Times New Roman;" >Figure.1</h4>
                <h4><strong>II. Files format</strong></h4>
                <p>We are typically given two genotypes A and B with m samples of A and n samples of B, each sample measured at T time points.Datas of genotype A at your TXT or CSV files show as follows, so does genotype B.</p>
                <p style="text-align:center"><img src="assets/images/usage/fileformat.jpg" /></p>
                <br><h4 style="text-align:center; font-family:Times New Roman;" >Figure.2</h4>
                <!--End step 1-->
                <!--Step 2-->
				<blockquote>Step 2.</blockquote>
                <h4><strong>I.Fetching files</strong></h4>	
                <p>This is a crucial step that cannot be omitted. Please input your two files names in corresponding positions respectively at page ApplicationEindex of right part.</p>
				<p style="text-align:center"><img src="assets/images/usage/fetchfiles.jpg" /></p>
                <br><h4 style="text-align:center; font-family:Times New Roman;" >Figure.3</h4>
				<!--End step 2-->
                <!--Step 3-->
				<blockquote>Step 3.</blockquote>
                <h3><strong>I.Draw growth curves.</strong></h3>
                <p>When having done step 2, we have to enter "submit" bar. If doing so,we can see that Growth curves will appear at left part of current page. Just look like Figure.4 at below.</p>
				<p style="text-align:center"><img src="assets/images/usage/growthcurves.jpg" /></p>
                <br><h4 style="text-align:center; font-family:Times New Roman;" >Figure.4</h4>
                <br><p>Notice: All curves have been drawn by Cubic Spline Interpolation, and it's clear that all of points in this plot display accurate massages of current point to users by shifting mouse pointer.</p>
				<!--End step 3-->
                <!--Step 4-->
				<blockquote>Step 4.</blockquote>
                <h3><strong>I.Results.</strong></h3>
                <p>After entering submit bar, we can also get results of two E-indices and find out it's at Growth Curves below. Shown as Figure.5.</p>
				<p style="text-align:center"><img src="assets/images/usage/result.jpg" /></p>
                <br><h4 style="text-align:center; font-family:Times New Roman;" >Figure.5</h4>
				<!--End step 3-->
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->
	<footer id="footer" class="top-space">
		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+86 18518982661<br>
								<a href="mailto:#">jianfeng.sunmt@gmail.com</a><br>
								<br>
								193 Postbox, 35 Qinghua East Road, Haidian District, Beijing 100083, China
							</p>	
						</div>
					</div>
					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
                                <a href=""><i class="fa fa-qq"></i></a>
								<a href=""><i class="fa fa-twitter fa-2"></i></a><a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>
					<div class="col-md-6 widget">
						<h3 class="widget-title">QR code</h3>
						<div class="widget-body">
							<p></p>
						</div>
					</div>
				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="index.php">Home</a> | 			
								<a href="about.php">About</a>
							</p>
						</div>
					</div>
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy;2016,Jianxin Wang,Jianfeng Sun. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>
				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>
    <!-- jQuery 2.0.2 -->
    <script src="assets/js/jQuery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>