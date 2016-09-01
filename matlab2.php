<html>
    <body>
        <form action="" method="post">
            Enter a filename <input type="text" name="filepath"><br />
            <input type="submit" /><br />
        </form>
    </body>
</html>

<?php
if(isset($_POST['filepath'])) {
    $filename  = $_POST['filepath'];
    $inputDir  = "C:\\output";
    $outputDir = "C:\\output";
    $command = "matlab -nodesktop -minimize -sd ".$inputDir." -r phpcreatefile('".$outputDir."\\".$filename.".txt')";
    exec($command);
    echo "The following command was run: ".$command."<br/>";
    echo $filename." was created in ".$outputDir."<br/>";
}
?>