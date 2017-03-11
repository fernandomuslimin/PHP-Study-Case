<html>
    <body>
        <h1>Read FILE</h1>
        <?php 
            echo readfile("./Support Files/tes.txt") . "<br><br>";
            $filedir = "./Support Files/tes.txt";
            $myfile = fopen($filedir,"r") or die ("Unable to open file");
           // echo fread($myfile, filesize($filedir))."<br><br>";
            //echo "Single Line <br>";
            //echo fgets($myfile);
//            while(!feof($myfile)) {
//                echo fgets($myfile) . "<br>";
//            }
            
            //Get Char
            echo "end of file <br>";
            while(!feof($myfile)) {
                echo fgetc($myfile);
            }
            //some code to be executed...
            fclose($myfile);
        ?>
    </body>
</html>