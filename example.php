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
					<h1 class="page-title">Example</h1>
				</header>
				<p>This example will teach you how to differentiate two different genotypes specifically. What it contains as follows:</p>
                <!--Data specification.-->
                <blockquote>Data specification</blockquote>
                <!--<h4><strong>I. </strong></h4>-->
				<p>Two files are employed to finish the whole example, each of which contains four samples and seven time point. Certainly, if you want to set different numbers to two samples length, and change it. It can be seen as Figure.1. The left part of Figure.1 is at test1.txt, at the same time, the right part of Figure.1 is at test2.txt. More detailed data information will be found out in page Usage. </p>
                <p style="text-align:center"><img src="assets/images/example/dataSpecification.jpg" /></p>
                <br><h4 style="text-align:center; font-family:Times New Roman;" >Figure.1</h4>
                <!--End Data specification.-->
            
                <!--Growth curves.-->
				<blockquote>Growth curves.</blockquote>
                <!--<h4><strong>I.Growth curves.</strong></h3>-->	
                <p>When having done step 2, we have to enter "submit" bar. If doing so,we can see that Growth curves will appear at left part of current page. Just look like Figure.4 at below. In this picture, the four red lines is drawn with test1.txt and the four green lines is drawn with test2.txt. It' noticed that two bunch of curves have been drawn by Cubic Spline Interpolation.Each sample corresponds to a spline curve, and E-index value will be calculated by spline curve. </p>
				<p style="text-align:center"><img src="assets/images/example/curves.jpg" /></p>
                <br><h4 style="text-align:center; font-family:Times New Roman;" >Figure.2</h4>
                <br><p>Notice: All curves have been drawn by Cubic Spline Interpolation, and it's clear that all of points in this plot display accurate massages of current point to users by shifting mouse pointer.</p>
				<!--End Growth curves.-->
            
                <!--Results specfication.-->
				<blockquote>Results specfication.</blockquote>
                <!--<h4><strong>I.Results.</strong></h3>-->	
                <p>The values of first two columns of the table are average E-index values of two genotype, and last two columns of table in Figure.5 are E-index values of two genotype respectively. And then, column of T-test shows a value calculated by we T-test statistic.How can we apply T-test to differentiate complex dynamic traits? Here are some principles:<br>1.We can test the null hypothesis that the two groups of samples are not significantly different,<img src="assets/images/example/h0.jpg" /><br>2.versus the alternative hypothesis that the two groups are significantly different:<img src="assets/images/example/h1.jpg" /><br>3.H0 will be rejected if<img src="assets/images/example/t_test.jpg" />,otherwise H0 will be accepted,where t is the computation result of T-test in table, and <img src="assets/images/example/t.jpg" /> is the t-Distribution value with the confidence level a and
                (m+n-2) degrees of freedom.</p>
				<p style="text-align:center"><img src="assets/images/usage/result.jpg" /></p>
                <br><h4 style="text-align:center; font-family:Times New Roman;" >Figure.3</h4>
				<!--End Results specfication.-->
				
		
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
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <!-- jQuery 2.0.2 -->
    <script src="assets/js/jQuery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>