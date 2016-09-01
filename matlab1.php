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
    
    /* 二、drawCluster1,从导入进来的文件1进行读取*/
    $drawCFile1 = fopen("D:\\Programming\\Xampp\\htdocs\\E-index\\input\\".$filename1.".txt", 'r');
    $matrix1 = array();
    while($entries1 = fgetcsv($drawCFile1)) {
        $matrix1[] = $entries1;
    }
    //print_r($matrix);
    fclose($drawCFile1);
    echo '<script language="JavaScript" type="text/javascript">';
    echo 'var arr='.json_encode($matrix1).';';
    echo '</script>';
    //读取文件1结束
    //转换数据格式,为一个点与一个点相邻
    $lenR1 = count($matrix1);      //行数
    $lenC1= count($matrix1[1]);   //列数
    for($jj=0;$jj<$lenC1;$jj++){
        for($ii=0;$ii<$lenR1;$ii++){
        $revmatrix1[$jj/2][$ii*2]=$matrix1[$ii][$jj-1];   //x坐标
        $revmatrix1[$jj/2][$ii*2+1]=$matrix1[$ii][$jj];   //y坐标
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
    //print_r($str);
    
    
    /*三、drawCluster2,从导入进来的文件2进行读取*/
    $drawCFile2 = fopen("D:\\Programming\\Xampp\\htdocs\\E-index\\input\\".$filename2.".txt", 'r');
    $matrix2 = array();
    while($entries2 = fgetcsv($drawCFile2)) {
        $matrix2[] = $entries2;
    }
    //print_r($matrix);
    fclose($drawCFile2);
    echo '<script language="JavaScript" type="text/javascript">';
    echo 'var arr='.json_encode($matrix2).';';
    echo '</script>';
    //读取文件1结束
    //转换数据格式,为一个点与一个点相邻
    $lenR2 = count($matrix2);      //行数
    $lenC2= count($matrix2[1]);   //列数
    for($jj=0;$jj<$lenC2;$jj++){
        for($ii=0;$ii<$lenR2;$ii++){
        $revmatrix2[$jj/2][$ii*2]=$matrix2[$ii][$jj-1];   //x坐标
        $revmatrix2[$jj/2][$ii*2+1]=$matrix2[$ii][$jj];   //y坐标
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
    arra=eval(arr);
    //alert(arra[0].length);
    var item=new Array();
    for(var i=0;i<arra.length;i++)
    {
        item[i]=new Array();
        for(var j=0;j<arra[0].length;j++){
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
        series:[
            <?php 
            echo $str1;
            echo $str2;
            ?>
        ]
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

