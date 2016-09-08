<?php
if ((($_FILES["file"]["type"] == "text/plain"))
&& ($_FILES["file"]["size"] < 20000)){
    if ($_FILES["file"]["error"] > 0){    
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
    else{
        if (file_exists("input/" . $_FILES["file"]["name"])){
            echo '<script>';
            echo 'alert("already exists."); ';
            echo '</script>';
        }
        else{
            move_uploaded_file($_FILES["file"]["tmp_name"], "input/" . $_FILES["file"]["name"]);
            echo '<script>';
            echo 'alert("upload success!"); ';
            echo '</script>';

        }
    }
}
else{ 
  //echo "Invalid file";  
}

if(isset($_POST['filepath1']) && isset($_POST['filepath2'])){
    $filename1 = $_POST['filepath1'];
    $filename2 = $_POST['filepath2'];
    $inputDir  = "D:\\Programming\\Xampp\\htdocs\\E-index\\input";
    $outputDir = "D:\\Programming\\Xampp\\htdocs\\E-index\\input";
    $command = "matlab -nodesktop -minimize -sd ".$inputDir." -r csievv('".$outputDir."\\".$filename1.".txt','".$outputDir."\\".$filename2.".txt')";
    exec($command);

    $file = fopen('D:\\Programming\\Xampp\\htdocs\\E-index\\input\\test.txt', 'r');
    $matrix = array();
    while($entries = fgetcsv($file)) {
     $matrix[] = $entries;
    }
    fclose($file);

    $drawCFile1 = fopen("D:\\Programming\\Xampp\\htdocs\\E-index\\input\\".$filename1.".txt", 'r');
    $matrix1 = array();
    while($entries1 = fgetcsv($drawCFile1)) {
        $matrix1[] = $entries1;
    }
    fclose($drawCFile1);

    $lenR1 = count($matrix1);
    $lenC1= count($matrix1[1]);
    for($jj=0;$jj<$lenC1;$jj++){
        for($ii=0;$ii<$lenR1;$ii++){
        $revmatrix1[$jj/2][$ii*2]=$matrix1[$ii][$jj-1];
        $revmatrix1[$jj/2][$ii*2+1]=$matrix1[$ii][$jj];
        }
    }
    for($i=0;$revmatrix1[$i];$i++){
        $len1 = count($revmatrix1[$i]);
        for($j=0;$j<$len1;$j+=2){
            $outjson1[]=array($revmatrix1[$i][$j],$revmatrix1[$i][$j+1]);
        }
        $outdata1[$i]=$outjson1;
        $str1.="{name:'{$i}',lineColor: 'red',";
        $str1.="data:".str_replace('"',"",json_encode($outjson1))."},";
        $outjson1='';
    }

    $drawCFile2 = fopen("D:\\Programming\\Xampp\\htdocs\\E-index\\input\\".$filename2.".txt", 'r');
    $matrix2 = array();
    while($entries2 = fgetcsv($drawCFile2)) {
        $matrix2[] = $entries2;
    }

    fclose($drawCFile2);

    $lenR2 = count($matrix2);
    $lenC2= count($matrix2[1]);
    for($jj=0;$jj<$lenC2;$jj++){
        for($ii=0;$ii<$lenR2;$ii++){
        $revmatrix2[$jj/2][$ii*2]=$matrix2[$ii][$jj-1];
        $revmatrix2[$jj/2][$ii*2+1]=$matrix2[$ii][$jj];
        }
    }
    for($i=0;$revmatrix2[$i];$i++){
        $len2 = count($revmatrix2[$i]);
        for($j=0;$j<$len2;$j+=2){
            $outjson2[]=array($revmatrix2[$i][$j],$revmatrix2[$i][$j+1]);
        }
        $outdata2[$i]=$outjson2;
        $str2.="{name:'{$i}',lineColor: 'green',";
        $str2.="data:".str_replace('"',"",json_encode($outjson2))."},";
        $outjson2='';
    }

    $file = fopen("D:\\Programming\\Xampp\\htdocs\\E-index\\output\\E-indexv.txt", "r");
    $i = 0;
    while (!feof($file)) {
    $line_of_text .= fgets($file);
    }
    $members = explode("\n", $line_of_text);
    fclose($file);
    
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
                         
                         <div class="row">
            <label for="mod-captcha-code">验证码</label>
            <input name="code" id="mod-captcha-code" size="6" class="zjcaptcha" style="width:80px" type="text"/>
            <img class="code-img" style="height:30px;width:80px;" src="createcode.php?t=0" onclick="this.src=this.src.substring(0,this.src.indexOf('?')+1)+Math.random();return false;" />
            <div class="yzmtips" style="color:red"></div>
        </div>
    
                          
                         <input type="submit" class="btn btn-sm btn-success" name="submit" value="Submit" />                         
                    </form>
                    
                    <form action="" method="post">
                        <br><input class="form-control" type="text" name="filepath1" placeholder="input filename1"><br />
                        <input class="form-control" type="text" name="filepath2" placeholder="input filename2"><br />
                        <input type="submit" class="btn btn-sm btn-success" value="Submit" /><br />
                    </form>
                    
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
        <!-- /div row -->
        <header class="page-header">
					<h1 class="page-title">Results by E-index</h1>
				</header>
        <!-- div table -->
        <div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr class="active">
                            <th class="text-center">Average E-index of Genotype A</th>
                            <th class="text-center">Average E-index of Genotype B</th>
                            <th class="text-center">T-test</th>
                            <th class="text-center">E-index value of each sample in order</th>
                            <th class="text-center">E-index value of each sample in order</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class="text-center"><?php echo $members[0]; ?></td>
                                <td class="text-center"><?php echo $members[1]; ?></td>
                                <td class="text-center"><?php echo $members[2]; ?></td>  
                                <td class="text-center"> <?php
                        $ii=3;
                        $f1=(count($members)-4)/2+3;
                        for ($ii; $ii < $f1; $ii++) {
                                ?>
                                <?php echo $members[$ii]."/"; ?>
                        <?php
                        }
                        ?>
                                </td>                       
                                <td class="text-center">
                        <?php
                        $ii=$f1;
                        $f2=count($members);
                        for ($ii; $ii < $f2; $ii++) {
                                ?>
                                <?php echo $members[$ii]."/"; ?>
                        <?php
                        }
                        ?>
                                </td>
                            </tr>
                    </tbody>
                </table>
        </div>
        <!-- /div table -->
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
    <!-- DataTables JavaScript -->
    <script src="DataTables/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="DataTables/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    

<!--JS-->
    <script>
(function($){
    $(document).ready(function(){
        $(".submitBtn").click(function() {
            var obj = $(this);
            $.ajax({
                url:'checkcode.php',
                type:'POST',
                data:{code:$.trim($("input[name=code]").val())},
                dataType:'json',
                async:false,
                success:function(result) {
                    if(result.status == 1) {
                        obj.parents('form').submit();
                    }else{
                        $(".code-img").click();
                        $(".yzmtips").html('验证码错误！');
                        setTimeout(function(){
                            $(".yzmtips").empty();
                        },3000);
                    }
                },
                error:function(msg){
                    $(".yzmtips").html('Error:'+msg.toSource());
                }
            })
            return false;
        })
    });
})(jQuery);
</script>

    <script>
    $(function () {
    $('#container').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Curves'
        },
        xAxis: {
            type: 'time',
            dateTimeLabelFormats: {
                month: '%e. %b',
                year: '%b'
            },
            title: {
                text: 'Time point(year)'
            }
        },
        yAxis: {
            title: {
                text: 'Growth degree'
            },
            min: 0
        },
        tooltip: {
            headerFormat: '<b>Sample number{series.name}</b><br>',
            pointFormat: 'time:{point.x:.1f}year,growth degree:{point.y:.1f}%'
        },
        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                }
            }
        },
        series:[
            <?php 
            echo $str1;
            echo $str2;
            ?>
        ]
    });
});    
    </script>
    
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>
</html>