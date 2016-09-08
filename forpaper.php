<?php
if ((($_FILES["file"]["type"] == "text/plain"))
&& ($_FILES["file"]["size"] < 20000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    if (file_exists("input/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "input/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "input/" . $_FILES["file"]["name"];
      }
    }
  }else{
  //echo "Invalid file";  
}
if(isset($_POST['filepath'])){
    $filename = $_POST['filepath'];
    $inputDir  = "D:\\Programming\\Xampp\\htdocs\\E-index\\input";
    $outputDir = "D:\\Programming\\Xampp\\htdocs\\E-index\\input";
    $command = "matlab -nodesktop -minimize -sd ".$inputDir." -r csi('".$outputDir."\\".$filename.".txt')";
    exec($command);
    $file = fopen('D:\\Programming\\Xampp\\htdocs\\E-index\\input\\test.txt', 'r');
    $matrix = array();
    while($entries = fgetcsv($file)) {
     $matrix[] = $entries;
    }
    fclose($file);
    echo '<script language="JavaScript" type="text/javascript">';
    echo 'var arr='.json_encode($matrix).';';
    echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>About - Progressus Bootstrap template</title>

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
			<li class="active">Application</li>
		</ol>
		<div class="row">
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">growth curves</h1>
				</header>
				<div id="container" style="min-width:400px;height:400px"></div>
			</article>
			<!-- /Article -->
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">
				<div class="widget">
					<h4>Analysis</h4>
                     <form action="" method="post" enctype="multipart/form-data">             
                         <label for="file">Filename:</label>            
                         <input type="file" name="file" id="file" value="File"/><br />
                         <input type="submit" class="btn btn-sm btn-success" name="submit" value="Submit" />
                    </form>
                    <form action="" method="post">
                        <br><input class="form-control" type="text" name="filepath" placeholder="input filename"><br />
                        <input type="submit" class="btn btn-sm btn-success" value="Submit" /><br />
                    </form>
				</div>
			</aside>
			<!-- /Sidebar -->

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
    <!-- HighCharts -->
    <script src="Highcharts-4.1.8/js/highcharts.js"></script>
    <script src="Highcharts-4.1.8/js/highcharts-more.js"></script>
    <script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
    <script>
    arra=eval(arr);
    alert(arra[0].length);
    var item=new Array();
    for(var i=0;i<arr.length;i++)
    {
        item[i]=new Array();
        for(var j=0;j<arr[0].length;j++)
        {
            item[i][j]=parseInt(arra[i][j]);
        }
    }
    $(function () {
    $('#container').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: '北京市2005年-2014年用水总量图'
        },
        xAxis: {
            type: 'time',
            dateTimeLabelFormats: {
/*                month: '%e. %b',*/
                year: '%b'
            },
            title: {
                text: '年份'
            }
        },
        yAxis: {
            title: {
                text: '用水总量（亿立方米）'
            },
            min: 0
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
        },
        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                }
            }
        },
        series:[{
            name: '用水总量',
            data: item
        }]
    });
});    
    </script>
</body>
</html>