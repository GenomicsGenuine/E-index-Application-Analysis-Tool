<?php
if(isset($_POST['filepath1']) && isset($_POST['filepath2'])){
    $filename1 = $_POST['filepath1'];
    $filename2 = $_POST['filepath2'];
    $inputDir  = "D:\\Programming\\Xampp\\htdocs\\E-index\\input";
    $outputDir = "D:\\Programming\\Xampp\\htdocs\\E-index\\input";
    $command = "matlab -nodesktop -minimize -sd ".$inputDir." -r csievv('".$outputDir."\\".$filename1.".txt','".$outputDir."\\".$filename2.".txt')";
    exec($command);
    
    /*//转换数组
    $file = fopen("D:\\Programming\\Xampp\\htdocs\\E-index\\input\\test.txt", "r") or exit("Unable to open file!");
    $iVariable=array();
    $dVariable=array();
    $i=0;
    while(!feof($file)){
        if($i==0){
            $iVariable = split(' ', fgets($file));
        }
        else{
            $dVariable = split(' ', fgets($file));
        }
        $i++;
    }
    fclose($file);
    //转换数组结束*/;
    //读取文件test1.txt
    $file1 = fopen('D:\\Programming\\Xampp\\htdocs\\E-index\\input\\test1.txt', 'r');
    $matrix = array();
    while($entries = fgetcsv($file1)) {
        $matrix[] = $entries;
    }
    //print_r($matrix);
    fclose($file1);
    echo '<script language="JavaScript" type="text/javascript">';
    echo 'var arr='.json_encode($matrix).';';
    echo '</script>';
    //读取文件1结束
    
    //读取文件E—indexv
    $filev = fopen('D:\\Programming\\Xampp\\htdocs\\E-index\\output\\E-indexv.txt', 'r');
    $matrixv = array();
    while($entries1 = fgetcsv($filev)) {
        $matrixv[] = $entriesv;
    }
    //print_r($matrix);
    fclose($filev);
    echo '<script language="JavaScript" type="text/javascript">';
    echo 'var arr1='.json_encode($matrixv).';';
    echo '</script>';
    //读取文件E—indexv结束
}
?>

<html>
    <head>
        <meta charset="utf8">
    </head>
    <!--<script>
        var items = [[1,2],[3,4],[5,6]];
        for(i=0,i<3,i++)
            for(j=0,j<2,j++)
        /*var datadisplay = eval( 'json_encode($matrix)');
        console.log('nihao');
        var i=0,j=0;
        for(i=0,i<2,i++)
            for(j=0,j<7,j++)
                $('#afff').html(datadisplay[i][j]);*/
    </script>-->
    <body>
        <form action="" method="post">
            输入文件名1 <input type="text" name="filepath1"><br />
            输入文件名2 <input type="text" name="filepath2"><br />
            <input type="submit" /><br />
        </form>
        <div id="container" style="min-width:400px;height:400px"></div>
    </body>
    <!-- jQuery 2.0.2 -->
    <script src="assets/js/jQuery.min.js"></script>
    <!-- HighCharts -->
    <script src="Highcharts-4.1.8/js/highcharts.js"></script>
    <script src="Highcharts-4.1.8/js/highcharts-more.js"></script>
    
<script>
    arra=eval(arr1);
    //alert(arra[0].length);
    var item=new Array();
    for(var i=0;i<arra.length;i++)
    {
        item[i]=new Array();
        for(var j=0;j<arra[0].length;j++)
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
            text: 'Curve of Life'
        },
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%b'
            },
            title: {
                text: 'Date'
            }
        },
        yAxis: {
            title: {
                text: 'Height'
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
            name: 'Winter 2007-2008',
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: item
        }]
    });
});    
    </script>

    <script type="text/javascript">
        var arr = new Array(3);
        arr[0] = "George";
        arr[1] = "John";
        arr[2] = "Thomas";
        document.write(arr + "<br />");
        document.write(arr.push("James") + "<br />");
        document.write(arr);
    </script>


</html>

